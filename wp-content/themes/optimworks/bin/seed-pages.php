<?php
/**
 * One-shot seeder: create all OptimWorks pages expected by the theme.
 *
 * Usage (Local PHP + site MySQL socket):
 *   LD_LIBRARY_PATH=.../shared-libs php bin/seed-pages.php
 *
 * Idempotent: skips existing publish pages with the same slug + parent.
 *
 * @package OptimWorks
 */

declare(strict_types=1);

$sock = getenv('OW_MYSQL_SOCKET') ?: '/home/dell/.config/Local/run/5rh5_ROnL/mysql/mysqld.sock';
$db   = array(
	'host' => 'localhost',
	'user' => 'root',
	'pass' => 'root',
	'name' => 'local',
	'sock' => $sock,
);
$home = 'http://optimworks.local';

$m = @new mysqli( $db['host'], $db['user'], $db['pass'], $db['name'], null, $db['sock'] );
if ( $m->connect_error ) {
	fwrite( STDERR, 'DB connect failed: ' . $m->connect_error . "\n" );
	exit( 1 );
}
$m->set_charset( 'utf8mb4' );

/**
 * @return int Existing ID or 0.
 */
function ow_seed_find_page( mysqli $m, string $slug, int $parent ): int {
	$sql = 'SELECT ID FROM wp_posts WHERE post_type = "page" AND post_name = ? AND post_parent = ? AND post_status IN ("publish","draft","private") LIMIT 1';
	$stmt = $m->prepare( $sql );
	$stmt->bind_param( 'si', $slug, $parent );
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res ? $res->fetch_assoc() : null;
	$stmt->close();
	return $row ? (int) $row['ID'] : 0;
}

/**
 * @return int Page ID.
 */
function ow_seed_upsert_page(
	mysqli $m,
	string $home,
	string $title,
	string $slug,
	int $parent = 0,
	string $template = 'default'
): int {
	$existing = ow_seed_find_page( $m, $slug, $parent );
	$now      = gmdate( 'Y-m-d H:i:s' );
	$now_local = date( 'Y-m-d H:i:s' );

	if ( $existing ) {
		$stmt = $m->prepare(
			'UPDATE wp_posts SET post_title = ?, post_status = "publish", post_modified = ?, post_modified_gmt = ? WHERE ID = ?'
		);
		$stmt->bind_param( 'sssi', $title, $now_local, $now, $existing );
		$stmt->execute();
		$stmt->close();
		$id = $existing;
		$action = 'updated';
	} else {
		$stmt = $m->prepare(
			'INSERT INTO wp_posts (
				post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt,
				post_status, comment_status, ping_status, post_password, post_name,
				to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered,
				post_parent, guid, menu_order, post_type, post_mime_type, comment_count
			) VALUES (
				1, ?, ?, "", ?, "",
				"publish", "closed", "closed", "", ?,
				"", "", ?, ?, "",
				?, "", 0, "page", "", 0
			)'
		);
		$stmt->bind_param( 'ssssssi', $now_local, $now, $title, $slug, $now_local, $now, $parent );
		if ( ! $stmt->execute() ) {
			fwrite( STDERR, "Insert failed for {$slug}: {$stmt->error}\n" );
			$stmt->close();
			return 0;
		}
		$id = (int) $stmt->insert_id;
		$stmt->close();

		$guid = $home . '/?page_id=' . $id;
		$u    = $m->prepare( 'UPDATE wp_posts SET guid = ? WHERE ID = ?' );
		$u->bind_param( 'si', $guid, $id );
		$u->execute();
		$u->close();
		$action = 'created';
	}

	// Template meta.
	$meta_key = '_wp_page_template';
	$chk = $m->prepare( 'SELECT meta_id FROM wp_postmeta WHERE post_id = ? AND meta_key = ? LIMIT 1' );
	$chk->bind_param( 'is', $id, $meta_key );
	$chk->execute();
	$meta_row = $chk->get_result()->fetch_assoc();
	$chk->close();

	if ( $meta_row ) {
		$u = $m->prepare( 'UPDATE wp_postmeta SET meta_value = ? WHERE meta_id = ?' );
		$mid = (int) $meta_row['meta_id'];
		$u->bind_param( 'si', $template, $mid );
		$u->execute();
		$u->close();
	} else {
		$i = $m->prepare( 'INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES (?, ?, ?)' );
		$i->bind_param( 'iss', $id, $meta_key, $template );
		$i->execute();
		$i->close();
	}

	echo sprintf( "[%s] #%d %s (parent=%d template=%s)\n", $action, $id, $slug, $parent, $template );
	return $id;
}

// --- Top-level pages (page-{slug}.php auto-matches; template default) ---
$top = array(
	'services'      => 'Services',
	'industries'    => 'Industries',
	'case-studies'  => 'Case Studies',
	'about'         => 'About',
	'contact'       => 'Contact',
	'faq'           => 'FAQ',
	'how-we-work'   => 'How We Work',
	'insights'      => 'Insights',
	'privacy'       => 'Privacy',
	'sitemap'       => 'Sitemap',
	'accelerators'  => 'Accelerators',
	'thetestro'     => 'theTestRo',
	'testsbuddi'    => 'TestsBuddi',
	'ai-managed-qa' => 'AI Managed QA',
);

$parent_ids = array();
foreach ( $top as $slug => $title ) {
	$parent_ids[ $slug ] = ow_seed_upsert_page( $m, $home, $title, $slug, 0, 'default' );
}

$services_id    = $parent_ids['services'];
$industries_id  = $parent_ids['industries'];
$case_studies_id = $parent_ids['case-studies'];

// Dedicated service page templates under /services/{slug}/ (page-{slug}.php).
$dedicated_services = array(
	'functional-regression-testing'  => 'Functional and Regression Testing',
	'test-automation-services'       => 'Automation Testing',
	'performance-load-testing'       => 'Performance and Load Testing',
	'api-testing-services'           => 'API Testing',
	'security-penetration-testing'   => 'Security and Penetration Testing',
	'accessibility-testing'          => 'Accessibility Testing',
);

foreach ( $dedicated_services as $slug => $title ) {
	ow_seed_upsert_page( $m, $home, $title, $slug, $services_id, 'default' );
}

// Data-driven services → Service Detail template (page-service.php).
$data_services = array(
	'ai-assisted-test-case-generation'     => 'AI Assisted Test Case Generation',
	'ai-assisted-test-automation'          => 'AI Assisted Test Automation',
	'predictive-risk-defect-intelligence'  => 'Predictive Risk and Defect Intelligence',
	'visual-ai-ui-regression-testing'      => 'Visual AI and UI Regression Testing',
	'test-impact-analysis'                 => 'Test Impact Analysis',
	'chaos-resilience-engineering'         => 'Chaos and Resilience Engineering',
	'ai-generated-code-validation'         => 'AI Generated Code Validation',
	'genai-llm-application-testing'        => 'GenAI and LLM Application Testing',
	'ai-agent-testing'                     => 'AI Agent Testing',
	'prompt-hallucination-testing'         => 'Prompt and Hallucination Testing',
	'conversational-ai-testing'            => 'Conversational AI Testing',
	'mobile-app-testing'                   => 'Mobile App Testing',
	'agile-continuous-testing'             => 'Agile and Continuous Testing',
	'etl-data-pipeline-testing'            => 'ETL and Data Pipeline Testing',
	'ai-model-data-quality-testing'        => 'AI Model and Data Quality Testing',
	'test-data-management'                 => 'Test Data Management',
	'realtime-communication-testing'       => 'Real Time Communication Testing',
	'iot-device-testing'                    => 'IoT Device Testing',
	'blockchain-smart-contract-testing'    => 'Blockchain and Smart Contract Testing',
	'ai-qa-readiness-assessment'           => 'AI QA Readiness Assessment',
	'qa-strategy-advisory'                 => 'QA Strategy Advisory',
	'ai-testing-strategy-consulting'       => 'AI Testing Strategy and Consulting',
	'test-automation-coe-setup'            => 'Test Automation CoE Setup',
);

foreach ( $data_services as $slug => $title ) {
	ow_seed_upsert_page( $m, $home, $title, $slug, $services_id, 'page-service.php' );
}

// Industries → Industry Detail.
$industries = array(
	'financial-services' => 'Financial Services',
	'healthcare'         => 'Healthcare',
	'ecommerce-retail'   => 'eCommerce and Retail',
	'supply-chain'       => 'Supply Chain',
	'education'          => 'Education',
);

foreach ( $industries as $slug => $title ) {
	ow_seed_upsert_page( $m, $home, $title, $slug, $industries_id, 'page-industry.php' );
}

// Case studies → Case Study Detail.
$cases = array(
	'daily-regression-automation' => 'Daily Regression Automation',
	'regression-cycle-reduction'  => 'Regression Cycle Cut',
	'sprint-embedded-engagement'  => 'Sprint Embedded Engagement',
);

foreach ( $cases as $slug => $title ) {
	ow_seed_upsert_page( $m, $home, $title, $slug, $case_studies_id, 'page-case-study.php' );
}

// Force permalink rewrite refresh on next request.
$m->query( 'DELETE FROM wp_options WHERE option_name = "rewrite_rules"' );

$count = $m->query( 'SELECT COUNT(*) c FROM wp_posts WHERE post_type="page" AND post_status="publish"' )->fetch_assoc()['c'];
echo "\nDone. Published pages: {$count}\n";
echo "Open any seeded URL once (or visit Settings → Permalinks → Save) to rebuild rewrite rules.\n";

$m->close();

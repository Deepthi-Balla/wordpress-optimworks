<?php
/**
 * Site header with mega menus (from Header.tsx).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_logo_dark  = get_template_directory_uri() . '/assets/logos/logo-dark-bg.png';
$ow_logo_light = get_template_directory_uri() . '/assets/logos/logo-light-bg.png';

$service_cols = array(
	array(
		'head'  => 'AI Powered QA',
		'icon'  => 'i-bot',
		'href'  => '/services#ai-powered-qa',
		'blurb' => 'Faster test design with human review.',
		'links' => array(
			array( 'label' => 'AI Assisted Test Case Generation', 'href' => '/services/ai-assisted-test-case-generation', 'icon' => 'i-bot', 'desc' => 'Coverage drafted from requirements' ),
			array( 'label' => 'AI Assisted Test Automation', 'href' => '/services/ai-assisted-test-automation', 'icon' => 'i-gear', 'desc' => 'Suites that survive UI churn' ),
			array( 'label' => 'Predictive Risk & Defect Intelligence', 'href' => '/services/predictive-risk-defect-intelligence', 'icon' => 'i-gauge', 'desc' => 'Where defects will land next' ),
			array( 'label' => 'Visual AI / UI Regression Testing', 'href' => '/services/visual-ai-ui-regression-testing', 'icon' => 'i-monitor', 'desc' => 'Pixel and layout drift, caught' ),
			array( 'label' => 'Test Impact Analysis', 'href' => '/services/test-impact-analysis', 'icon' => 'i-compass', 'desc' => 'Run only what the change touches' ),
			array( 'label' => 'Chaos & Resilience Engineering', 'href' => '/services/chaos-resilience-engineering', 'icon' => 'i-shield', 'desc' => 'Failure rehearsed before prod' ),
		),
	),
	array(
		'head'  => 'Testing AI Applications',
		'icon'  => 'i-brain',
		'href'  => '/services#testing-ai-applications',
		'blurb' => 'Testing for the AI features your product ships.',
		'links' => array(
			array( 'label' => 'AI Generated Code Validation', 'href' => '/services/ai-generated-code-validation', 'icon' => 'i-shield', 'desc' => 'Review gates for copilot output' ),
			array( 'label' => 'GenAI & LLM Application Testing', 'href' => '/services/genai-llm-application-testing', 'icon' => 'i-brain', 'desc' => 'Quality bars for model features' ),
			array( 'label' => 'AI Agent / Agentic Testing', 'href' => '/services/ai-agent-testing', 'icon' => 'i-bot', 'desc' => 'Tool use, loops and guardrails' ),
			array( 'label' => 'Prompt & Hallucination Testing', 'href' => '/services/prompt-hallucination-testing', 'icon' => 'i-compass', 'desc' => 'Grounding and factuality checks' ),
			array( 'label' => 'Conversational AI Testing', 'href' => '/services/conversational-ai-testing', 'icon' => 'i-users', 'desc' => 'Dialogue, intent and escalation' ),
		),
	),
	array(
		'head'  => 'Core QA Services',
		'icon'  => 'i-monitor',
		'href'  => '/services#core-qa-services',
		'blurb' => 'The testing every release still needs.',
		'links' => array(
			array( 'label' => 'Functional & Regression Testing', 'href' => '/services/functional-regression-testing', 'icon' => 'i-monitor', 'desc' => 'The release safety net' ),
			array( 'label' => 'Automation Testing', 'href' => '/services/test-automation-services', 'icon' => 'i-gear', 'desc' => 'Frameworks built to last' ),
			array( 'label' => 'Mobile App Testing', 'href' => '/services/mobile-app-testing', 'icon' => 'i-pulse', 'desc' => 'Real devices, real networks' ),
			array( 'label' => 'Performance & Load Testing', 'href' => '/services/performance-load-testing', 'icon' => 'i-gauge', 'desc' => 'Headroom proven before peak' ),
			array( 'label' => 'API Testing', 'href' => '/services/api-testing-services', 'icon' => 'i-cloud', 'desc' => 'Contracts and integrations' ),
			array( 'label' => 'Security & Penetration Testing', 'href' => '/services/security-penetration-testing', 'icon' => 'i-shield', 'desc' => 'Exploitable paths, evidenced' ),
			array( 'label' => 'Accessibility Testing (WCAG/ADA)', 'href' => '/services/accessibility-testing', 'icon' => 'i-users', 'desc' => 'Conformance with audit trail' ),
			array( 'label' => 'Agile & Continuous Testing', 'href' => '/services/agile-continuous-testing', 'icon' => 'i-compass', 'desc' => 'Quality inside every sprint' ),
		),
	),
	array(
		'head'  => 'Data & AI Testing',
		'icon'  => 'i-db',
		'href'  => '/services#data-ai-testing',
		'blurb' => 'Testing for pipelines, models and test data.',
		'links' => array(
			array( 'label' => 'ETL & Data Pipeline Testing', 'href' => '/services/etl-data-pipeline-testing', 'icon' => 'i-db', 'desc' => 'Lineage, loads and reconciliation' ),
			array( 'label' => 'AI Model & Data Quality Testing', 'href' => '/services/ai-model-data-quality-testing', 'icon' => 'i-brain', 'desc' => 'Drift, bias and label quality' ),
			array( 'label' => 'Test Data Management', 'href' => '/services/test-data-management', 'icon' => 'i-shield', 'desc' => 'Masked, compliant datasets' ),
		),
	),
	array(
		'head'  => 'Specialist Testing',
		'icon'  => 'i-pulse',
		'href'  => '/services#specialized-testing',
		'blurb' => 'Coverage for specialist platforms and protocols.',
		'links' => array(
			array( 'label' => 'Real Time Communication Testing', 'href' => '/services/realtime-communication-testing', 'icon' => 'i-pulse', 'desc' => 'Voice, video and WebRTC' ),
			array( 'label' => 'IoT Device Testing', 'href' => '/services/iot-device-testing', 'icon' => 'i-cloud', 'desc' => 'Firmware to cloud, end to end' ),
			array( 'label' => 'Blockchain & Smart Contract Testing', 'href' => '/services/blockchain-smart-contract-testing', 'icon' => 'i-db', 'desc' => 'On-chain logic and gas paths' ),
		),
	),
	array(
		'head'  => 'Advisory Services',
		'icon'  => 'i-compass',
		'href'  => '/services#advisory-services',
		'blurb' => 'Strategy, readiness and automation practice.',
		'links' => array(
			array( 'label' => 'AI QA Readiness Assessment', 'href' => '/services/ai-qa-readiness-assessment', 'icon' => 'i-gauge', 'desc' => 'Where you stand today' ),
			array( 'label' => 'QA Strategy Advisory', 'href' => '/services/qa-strategy-advisory', 'icon' => 'i-compass', 'desc' => 'Target operating model' ),
			array( 'label' => 'AI Testing Strategy & Consulting', 'href' => '/services/ai-testing-strategy-consulting', 'icon' => 'i-brain', 'desc' => 'Roadmap for AI assurance' ),
			array( 'label' => 'Test Automation CoE Setup', 'href' => '/services/test-automation-coe-setup', 'icon' => 'i-tools', 'desc' => 'Standards, tooling, enablement' ),
		),
	),
);

$simple_menus = array(
	array(
		'label'  => 'Industries',
		'href'   => '/industries',
		'active' => array( 'industries' ),
		'intro'  => 'Quality work shaped around industry specific journeys and risks.',
		'links'  => array(
			array( 'label' => 'Financial Services', 'href' => '/industries/financial-services', 'icon' => 'i-bank', 'desc' => 'Payments, wealth and trading flows' ),
			array( 'label' => 'Healthcare', 'href' => '/industries/healthcare', 'icon' => 'i-pulse', 'desc' => 'Clinical, EHR and e prescribing' ),
			array( 'label' => 'eCommerce & Retail', 'href' => '/industries/ecommerce-retail', 'icon' => 'i-cart', 'desc' => 'Checkout, catalog and peak load' ),
			array( 'label' => 'Supply Chain', 'href' => '/industries/supply-chain', 'icon' => 'i-truck', 'desc' => 'WMS, EDI and integrations' ),
			array( 'label' => 'Education', 'href' => '/industries/education', 'icon' => 'i-book', 'desc' => 'LMS, accessibility and scale' ),
			array( 'label' => 'All industries', 'href' => '/industries', 'icon' => 'i-globe', 'desc' => 'See every sector' ),
		),
	),
	array(
		'label'  => 'AI Accelerators',
		'href'   => '/accelerators',
		'active' => array( 'accelerators', 'thetestro', 'testsbuddi', 'ai-managed-qa' ),
		'intro'  => 'Our own tooling, used on client engagements every week.',
		'links'  => array(
			array( 'label' => 'Overview', 'href' => '/accelerators', 'icon' => 'i-tools', 'desc' => 'How the toolkit fits together' ),
			array( 'label' => 'theTestRo', 'href' => '/thetestro', 'icon' => 'i-gear', 'desc' => 'Self-healing automation you can audit' ),
			array( 'label' => 'TestsBuddi', 'href' => '/testsbuddi', 'icon' => 'i-bot', 'desc' => 'Governed test design and release gates' ),
			array( 'label' => 'AI Managed QA', 'href' => '/ai-managed-qa', 'icon' => 'i-users', 'desc' => 'We run the quality function' ),
		),
	),
	array(
		'label'  => 'Insights',
		'href'   => '/insights',
		'active' => array( 'insights', 'faq', 'case-studies' ),
		'intro'  => 'Field notes, answers and outcomes from live engagements.',
		'links'  => array(
			array( 'label' => 'Insights hub', 'href' => '/insights', 'icon' => 'i-book', 'desc' => 'FAQ, case studies and how we work' ),
			array( 'label' => 'FAQ', 'href' => '/faq', 'icon' => 'i-compass', 'desc' => 'How engagements actually work' ),
			array( 'label' => 'Case studies', 'href' => '/case-studies', 'icon' => 'i-star', 'desc' => 'Anonymised client results' ),
		),
	),
	array(
		'label'  => 'Company',
		'href'   => '/about',
		'active' => array( 'about', 'how-we-work', 'contact', 'sitemap' ),
		'intro'  => 'Who we are, how we work and how to reach us.',
		'links'  => array(
			array( 'label' => 'About', 'href' => '/about', 'icon' => 'i-users', 'desc' => 'The team and the standard' ),
			array( 'label' => 'How we work', 'href' => '/how-we-work', 'icon' => 'i-compass', 'desc' => 'Pilot, embed, manage' ),
			array( 'label' => 'Contact', 'href' => '/contact', 'icon' => 'i-tag', 'desc' => 'Talk to an engineer' ),
			array( 'label' => 'Sitemap', 'href' => '/sitemap', 'icon' => 'i-globe', 'desc' => 'Every page on the site' ),
		),
	),
);

/**
 * Menu id helper matching React menuId().
 *
 * @param string $key Menu key.
 * @return string
 */
$ow_menu_id = static function ( $key ) {
	return 'nav-menu-' . strtolower( preg_replace( '/\s+/', '-', $key ) );
};

/**
 * Current request path relative to the WP home path (no leading/trailing slash).
 *
 * @return string
 */
$ow_current_path = static function () {
	$req  = (string) wp_parse_url( isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '', PHP_URL_PATH );
	$home = (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH );
	$req  = untrailingslashit( $req );
	$home = untrailingslashit( $home );
	if ( '' !== $home && 0 === strpos( $req, $home ) ) {
		$req = substr( $req, strlen( $home ) );
	}
	return trim( (string) $req, '/' );
};

/**
 * Normalize a nav href to a path key (no leading slash, hash stripped).
 *
 * @param string $href Href or path.
 * @return string
 */
$ow_nav_path = static function ( $href ) {
	$path = (string) wp_parse_url( $href, PHP_URL_PATH );
	if ( '' === $path && is_string( $href ) ) {
		$path = strtok( $href, '#?' );
	}
	$home = untrailingslashit( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ) );
	$path = untrailingslashit( (string) $path );
	if ( '' !== $home && 0 === strpos( $path, $home ) ) {
		$path = substr( $path, strlen( $home ) );
	}
	return trim( (string) $path, '/' );
};

/**
 * Whether $current matches $target exactly, or is a nested route under it.
 *
 * @param string $current Current path key.
 * @param string $target  Target path key.
 * @return bool
 */
$ow_path_match = static function ( $current, $target ) {
	if ( $current === $target ) {
		return true;
	}
	if ( '' === $target ) {
		return false;
	}
	return 0 === strpos( $current . '/', $target . '/' );
};

/**
 * Whether current path is under any of the given section roots.
 *
 * @param string   $current Current path key.
 * @param string[] $roots   Section root path keys.
 * @return bool
 */
$ow_section_active = static function ( $current, $roots ) use ( $ow_path_match ) {
	foreach ( $roots as $root ) {
		if ( $ow_path_match( $current, $root ) ) {
			return true;
		}
	}
	return false;
};

$ow_path            = $ow_current_path();
$ow_services_active = $ow_path_match( $ow_path, 'services' );

// Prefer the service pillar that contains the current service slug.
$ow_active_pillar = null;
if ( $ow_services_active && '' !== $ow_path && 'services' !== $ow_path ) {
	foreach ( $service_cols as $col ) {
		foreach ( $col['links'] as $l ) {
			if ( $ow_nav_path( $l['href'] ) === $ow_path ) {
				$ow_active_pillar = $col['head'];
				break 2;
			}
		}
	}
}
if ( null === $ow_active_pillar ) {
	$ow_active_pillar = $service_cols[0]['head'];
}
?>
<header id="hdr">
	<nav class="wrap nav">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="Optimworks home">
			<img class="lg-dark" src="<?php echo esc_url( $ow_logo_dark ); ?>" alt="Optimworks" />
			<img class="lg-light" src="<?php echo esc_url( $ow_logo_light ); ?>" alt="" aria-hidden="true" />
		</a>

		<div id="site-nav" class="navlinks">
			<div class="navitem mega-host" data-nav-key="services">
				<a
					href="<?php echo esc_url( home_url( '/services' ) ); ?>"
					class="toplink<?php echo $ow_services_active ? ' on' : ''; ?>"
					<?php echo $ow_services_active ? ' aria-current="page"' : ''; ?>
					aria-expanded="false"
					aria-haspopup="true"
					aria-controls="<?php echo esc_attr( $ow_menu_id( 'services' ) ); ?>"
				>
					Services <svg class="caret" aria-hidden="true"><use href="#i-chev"></use></svg>
				</a>
				<div class="megamenu wide" id="<?php echo esc_attr( $ow_menu_id( 'services' ) ); ?>">
					<div class="mgrid" role="tablist" aria-label="Service categories">
						<span class="mkicker mrail-h">Service lines</span>
						<?php foreach ( $service_cols as $col ) : ?>
							<?php
							$ow_pillar_on = ( $ow_active_pillar === $col['head'] );
							?>
						<div class="mgroup">
							<button
								type="button"
								role="tab"
								aria-selected="<?php echo $ow_pillar_on ? 'true' : 'false'; ?>"
								class="mtab<?php echo $ow_pillar_on ? ' on' : ''; ?>"
								data-mtab="<?php echo esc_attr( $col['head'] ); ?>"
							>
								<span class="mtab-ico">
									<svg aria-hidden="true"><use href="#<?php echo esc_attr( $col['icon'] ); ?>"></use></svg>
								</span>
								<span class="mtab-txt">
									<b><?php echo esc_html( $col['head'] ); ?></b>
									<small><?php echo esc_html( $col['blurb'] ); ?></small>
								</span>
								<svg class="mtab-caret" aria-hidden="true"><use href="#i-chev"></use></svg>
							</button>
							<div class="mpane<?php echo $ow_pillar_on ? ' on' : ''; ?>" role="tabpanel" data-mpane="<?php echo esc_attr( $col['head'] ); ?>">
								<div class="mpane-h">
									<div>
										<span class="mkicker"><?php echo esc_html( $col['head'] ); ?></span>
										<p><?php echo esc_html( $col['blurb'] ); ?></p>
									</div>
									<a class="mall" href="<?php echo esc_url( home_url( $col['href'] ) ); ?>">
										Overview <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
									</a>
								</div>
								<div class="mpane-links">
									<?php foreach ( $col['links'] as $l ) : ?>
										<?php
										$ow_link_on = ( $ow_nav_path( $l['href'] ) === $ow_path );
										?>
									<a
										class="mlink<?php echo $ow_link_on ? ' on' : ''; ?>"
										href="<?php echo esc_url( home_url( $l['href'] ) ); ?>"
										<?php echo $ow_link_on ? ' aria-current="page"' : ''; ?>
									>
										<span class="mlink-ico">
											<svg aria-hidden="true"><use href="#<?php echo esc_attr( $l['icon'] ); ?>"></use></svg>
										</span>
										<span class="mlink-txt">
											<b><?php echo esc_html( $l['label'] ); ?></b>
											<small><?php echo esc_html( $l['desc'] ); ?></small>
										</span>
										<svg class="mlink-go" aria-hidden="true"><use href="#i-arrow"></use></svg>
									</a>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<?php endforeach; ?>

						<div class="mpromo">
							<span class="mkicker">Managed</span>
							<a class="mega-feat" href="<?php echo esc_url( home_url( '/ai-managed-qa' ) ); ?>">
								<div>
									<h5>Managed QA</h5>
									<p>We manage an agreed QA scope. You keep the repositories.</p>
								</div>
								<span class="learn">
									See it <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
								</span>
							</a>
							<ul class="mpromo-list">
								<li>Dedicated pod with a named QA recommendation</li>
								<li>Release gates wired into your CI</li>
								<li>Weekly quality report your team can read</li>
							</ul>
							<a class="mall" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
								Request an audit <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
							</a>
						</div>
					</div>

					<div class="mega-foot">
						<a class="mall" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
							All Services <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
						</a>
						<span class="mfoot-note">ISTQB certified engineers · Since 2019</span>
					</div>
				</div>
			</div>

			<?php foreach ( $simple_menus as $menu ) : ?>
				<?php
				$ow_menu_on = $ow_section_active( $ow_path, $menu['active'] );
				?>
			<div class="navitem" data-nav-key="<?php echo esc_attr( $menu['label'] ); ?>">
				<a
					href="<?php echo esc_url( home_url( $menu['href'] ) ); ?>"
					class="toplink<?php echo $ow_menu_on ? ' on' : ''; ?>"
					<?php echo $ow_menu_on ? ' aria-current="page"' : ''; ?>
					aria-expanded="false"
					aria-haspopup="true"
					aria-controls="<?php echo esc_attr( $ow_menu_id( $menu['label'] ) ); ?>"
				>
					<?php echo esc_html( $menu['label'] ); ?>
					<svg class="caret" aria-hidden="true"><use href="#i-chev"></use></svg>
				</a>
				<div class="megamenu simple" id="<?php echo esc_attr( $ow_menu_id( $menu['label'] ) ); ?>">
					<span class="mkicker"><?php echo esc_html( $menu['label'] ); ?></span>
					<p class="mintro"><?php echo esc_html( $menu['intro'] ); ?></p>
					<div class="mega-list">
						<?php foreach ( $menu['links'] as $l ) : ?>
							<?php
							$ow_link_on = ( $ow_nav_path( $l['href'] ) === $ow_path );
							?>
						<a
							href="<?php echo esc_url( home_url( $l['href'] ) ); ?>"
							class="mega-l<?php echo $ow_link_on ? ' on' : ''; ?>"
							<?php echo $ow_link_on ? ' aria-current="page"' : ''; ?>
						>
							<span class="mega-l-ico">
								<svg aria-hidden="true"><use href="#<?php echo esc_attr( $l['icon'] ); ?>"></use></svg>
							</span>
							<span class="mega-l-txt">
								<b><?php echo esc_html( $l['label'] ); ?></b>
								<small><?php echo esc_html( $l['desc'] ); ?></small>
							</span>
							<svg class="mega-l-go" aria-hidden="true"><use href="#i-arrow"></use></svg>
						</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="nav-right">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="cta-nav">
				<span>Request an Enterprise Audit</span>
			</a>
			<button
				class="burger"
				type="button"
				aria-label="Open menu"
				aria-expanded="false"
				aria-controls="site-nav"
			>
				<svg aria-hidden="true" data-burger-icon><use href="#i-menu"></use></svg>
			</button>
		</div>
	</nav>
</header>

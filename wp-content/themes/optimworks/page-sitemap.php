<?php
/*
Template Name: Sitemap
*/
/**
 * Sitemap page template.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_groups = array(
	array(
		't'     => 'Company',
		'links' => array(
			array( 'href' => '/', 'label' => 'Home' ),
			array( 'href' => '/about', 'label' => 'About' ),
			array( 'href' => '/how-we-work', 'label' => 'How we work' ),
			array( 'href' => '/contact', 'label' => 'Contact' ),
			array( 'href' => '/faq', 'label' => 'FAQ' ),
			array( 'href' => '/insights', 'label' => 'Insights' ),
			array( 'href' => '/privacy', 'label' => 'Privacy' ),
		),
	),
	array(
		't'     => 'AI powered QA',
		'links' => array(
			array( 'href' => '/services', 'label' => 'All services' ),
			array( 'href' => '/services/ai-assisted-test-case-generation', 'label' => 'AI assisted test case generation' ),
			array( 'href' => '/services/ai-assisted-test-automation', 'label' => 'AI Assisted Test Automation' ),
			array( 'href' => '/services/predictive-risk-defect-intelligence', 'label' => 'Predictive Risk and Defect Intelligence' ),
			array( 'href' => '/services/visual-ai-ui-regression-testing', 'label' => 'Visual AI / UI Regression Testing' ),
			array( 'href' => '/services/test-impact-analysis', 'label' => 'Test Impact Analysis' ),
			array( 'href' => '/services/chaos-resilience-engineering', 'label' => 'Chaos and Resilience Engineering' ),
		),
	),
	array(
		't'     => 'Testing AI Applications',
		'links' => array(
			array( 'href' => '/services/ai-generated-code-validation', 'label' => 'AI generated code validation' ),
			array( 'href' => '/services/genai-llm-application-testing', 'label' => 'GenAI and LLM Application Testing' ),
			array( 'href' => '/services/ai-agent-testing', 'label' => 'AI Agent Testing' ),
			array( 'href' => '/services/prompt-hallucination-testing', 'label' => 'Prompt and Hallucination Testing' ),
			array( 'href' => '/services/conversational-ai-testing', 'label' => 'Conversational AI Testing' ),
		),
	),
	array(
		't'     => 'Core QA Services',
		'links' => array(
			array( 'href' => '/services/functional-regression-testing', 'label' => 'Functional and Regression Testing' ),
			array( 'href' => '/services/test-automation-services', 'label' => 'Automation Testing' ),
			array( 'href' => '/services/mobile-app-testing', 'label' => 'Mobile App Testing' ),
			array( 'href' => '/services/performance-load-testing', 'label' => 'Performance and Load Testing' ),
			array( 'href' => '/services/api-testing-services', 'label' => 'API Testing' ),
			array( 'href' => '/services/security-penetration-testing', 'label' => 'Security and Penetration Testing' ),
			array( 'href' => '/services/accessibility-testing', 'label' => 'Accessibility Testing' ),
			array( 'href' => '/services/agile-continuous-testing', 'label' => 'Agile and Continuous Testing' ),
		),
	),
	array(
		't'     => 'Data and AI Testing',
		'links' => array(
			array( 'href' => '/services/etl-data-pipeline-testing', 'label' => 'ETL and Data Pipeline Testing' ),
			array( 'href' => '/services/ai-model-data-quality-testing', 'label' => 'AI Model and Data Quality Testing' ),
			array( 'href' => '/services/test-data-management', 'label' => 'Test Data Management' ),
		),
	),
	array(
		't'     => 'Specialist Testing',
		'links' => array(
			array( 'href' => '/services/realtime-communication-testing', 'label' => 'Real time communication testing' ),
			array( 'href' => '/services/iot-device-testing', 'label' => 'IoT Device Testing' ),
			array( 'href' => '/services/blockchain-smart-contract-testing', 'label' => 'Blockchain and Smart Contract Testing' ),
		),
	),
	array(
		't'     => 'Advisory Services',
		'links' => array(
			array( 'href' => '/services/ai-qa-readiness-assessment', 'label' => 'AI QA Readiness Assessment' ),
			array( 'href' => '/services/qa-strategy-advisory', 'label' => 'QA Strategy Advisory' ),
			array( 'href' => '/services/ai-testing-strategy-consulting', 'label' => 'AI Testing Strategy and Consulting' ),
			array( 'href' => '/services/test-automation-coe-setup', 'label' => 'Test Automation CoE Setup' ),
		),
	),
	array(
		't'     => 'Accelerators and engagement',
		'links' => array(
			array( 'href' => '/accelerators', 'label' => 'QA Accelerators' ),
			array( 'href' => '/thetestro', 'label' => 'theTestRo' ),
			array( 'href' => '/testsbuddi', 'label' => 'TestsBuddi' ),
			array( 'href' => '/ai-managed-qa', 'label' => 'Managed QA' ),
			array( 'href' => '/how-we-work', 'label' => 'How we work' ),
		),
	),
	array(
		't'     => 'Industries',
		'links' => array(
			array( 'href' => '/industries', 'label' => 'All industries' ),
			array( 'href' => '/industries/financial-services', 'label' => 'Financial Services' ),
			array( 'href' => '/industries/healthcare', 'label' => 'Healthcare' ),
			array( 'href' => '/industries/ecommerce-retail', 'label' => 'eCommerce and Retail' ),
			array( 'href' => '/industries/supply-chain', 'label' => 'Supply Chain' ),
			array( 'href' => '/industries/education', 'label' => 'Education' ),
		),
	),
	array(
		't'     => 'Case studies',
		'links' => array(
			array( 'href' => '/case-studies', 'label' => 'All case studies' ),
			array( 'href' => '/case-studies/daily-regression-automation', 'label' => 'Daily regression automation' ),
			array( 'href' => '/case-studies/regression-cycle-reduction', 'label' => 'Regression cycle cut' ),
			array( 'href' => '/case-studies/sprint-embedded-engagement', 'label' => 'Sprint embedded engagement' ),
		),
	),
);

get_header();
?>
<main>
	<section class="pagehero">
		<div class="wrap">
			<nav class="crumb" aria-label="Breadcrumb">
				<a href="<?php echo ow_home( '/' ); ?>">Home</a>
				<span>/</span>
				<span>Sitemap</span>
			</nav>
			<h1>Every page, in one list.</h1>
			<p class="lede">
				Use this if you want the whole map. Search engines also read the XML list at /sitemap.xml.
			</p>
		</div>
	</section>

	<section class="band">
		<div class="wrap">
			<div class="sitemap-list reveal">
				<?php foreach ( $ow_groups as $group ) : ?>
				<div>
					<h3><?php echo esc_html( $group['t'] ); ?></h3>
					<?php foreach ( $group['links'] as $link ) : ?>
					<a href="<?php echo ow_home( $link['href'] ); ?>"><?php echo esc_html( $link['label'] ); ?></a>
					<?php endforeach; ?>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

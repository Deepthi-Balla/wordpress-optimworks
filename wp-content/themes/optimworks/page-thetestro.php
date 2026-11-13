<?php
/*
Template Name: theTestRo
*/
/**
 * theTestRo — ServiceBuyingPage port of thetestro.tsx.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'Do we need to write automation code?',
		'a' => 'No. Journeys are captured by performing the actions on the application. Framework code is not the starting point.',
	),
	array(
		'q' => 'Does it cover APIs as well as the user interface?',
		'a' => 'Yes. Web journeys and backend APIs can be validated in the same platform so end to end checks do not require two toolchains.',
	),
	array(
		'q' => 'Is healing or NLP the same as using a language model?',
		'a' => 'No. theTestRo does not depend on an AI or LLM model. Self healing and human-readable commands follow deterministic rules so execution stays lightweight and inspectable.',
	),
	array(
		'q' => 'Can tests run in parallel?',
		'a' => 'Yes. Suites can be executed in parallel on cloud infrastructure to shorten the cycle when the scope requires it.',
	),
	array(
		'q' => 'Is this a theTestRo licence?',
		'a' => 'No. theTestRo was built in house and is used by Optimworks on client engagements. It is not licensed or white labelled.',
	),
	array(
		'q' => 'How does TestsBuddi fit?',
		'a' => 'TestsBuddi supports test generation, review and management. theTestRo records, runs and maintains the automation. Engineers review generated steps before they are used.',
	),
	array(
		'q' => 'Who owns the suite when you leave?',
		'a' => 'Ownership and storage of test assets are agreed during scoping and documented for the engagement.',
	),
	array(
		'q' => 'Where is the product documentation?',
		'a' => 'theTestRo has its own product site at thetestro.com.',
	),
);

$p = array(
	'crumb'        => 'theTestRo',
	'crumbParent'  => array(
		'label' => 'AI Accelerators',
		'href'  => '/accelerators',
	),
	'kicker'       => 'AI Accelerators',
	'title'        => 'No-Code Test Automation Platform for Web and API Testing',
	'signalIcon'   => 'i-gear',
	'signal'       => array( 'No code', 'No LLM', 'Web and API' ),
	'lede'         => "theTestRo is Optimworks' in house no code test automation platform. Teams record journeys, replay them across environments, validate web and APIs together and keep suites stable with self healing. Execution is deterministic and rules based rather than dependent on an LLM.",
	'covers'       => array(
		'No code',
		'Capture and replay',
		'Web and API',
		'Self healing',
		'Cloud parallel',
		'Reporting',
	),
	'cta'          => 'Talk to an engineer',
	'ghostCta'     => 'See how it works',
	'scopeId'      => 'testro-scope',
	'image'        => $ow_img . '/thetestro-concept.jpg',
	'imageAlt'     => 'Path from record and replay through heal and report to a named review',
	'triggerTitle' => 'Automation stalls when it depends on code and constant repair.',
	'triggerText'  => 'theTestRo is built for teams that need faster coverage without a large automation codebase or an LLM in the execution path.',
	'triggers'     => array(
		array(
			'icon'  => 'i-tools',
			'title' => 'Script development is slow',
			'text'  => 'New coverage waits on people who can write and maintain framework code. Test creation takes longer than the release cycle allows.',
		),
		array(
			'icon'  => 'i-gear',
			'title' => 'Small UI changes break the suite',
			'text'  => 'Flaky runs and locator repairs consume the sprint. Results lose trust even when the product is fine.',
		),
		array(
			'icon'  => 'i-users',
			'title' => 'Too few people can contribute',
			'text'  => 'A large coded suite creates a bottleneck on specialist automation engineers and leaves the rest of the team on manual work.',
		),
		array(
			'icon'  => 'i-bot',
			'title' => 'LLM dependent execution is not suitable',
			'text'  => 'The team needs lightweight, repeatable automation with inspectable behaviour rather than a model deciding how a test runs.',
		),
	),
	'scopeEyebrow' => 'What it does',
	'scopeTitle'   => 'Record once. Replay. Keep the suite moving.',
	'scopeText'    => 'A no code platform for creating, running and maintaining web and API automation without an LLM.',
	'scope'        => array(
		array(
			'icon'   => 'i-monitor',
			'title'  => 'No code recording',
			'text'   => 'Capture complete journeys by performing the actions on the application. Elements are addressed with human-readable commands rather than hand-written locators.',
			'output' => 'Recorded flows',
		),
		array(
			'icon'   => 'i-globe',
			'title'  => 'Capture once, replay anywhere',
			'text'   => 'Record a flow and replay it across environments and cycles. Reusable components and parameterized data keep the same steps from being rewritten.',
			'output' => 'Reusable replay',
		),
		array(
			'icon'   => 'i-cloud',
			'title'  => 'Web and API together',
			'text'   => 'Validate user journeys and backend APIs in one platform rather than splitting the check across two toolchains.',
			'output' => 'End to end coverage',
		),
		array(
			'icon'   => 'i-shield',
			'title'  => 'Self healing tests',
			'text'   => 'Detect interface changes and repair broken locators through rules so maintenance does not stall the suite.',
			'output' => 'Stable runs',
		),
		array(
			'icon'   => 'i-pulse',
			'title'  => 'Parallel cloud execution',
			'text'   => 'Run many cases at once on cloud infrastructure to shorten the execution window before a release.',
			'output' => 'Faster cycles',
		),
		array(
			'icon'   => 'i-book',
			'title'  => 'Execution reports',
			'text'   => 'Watch live replay, then read pass and fail results with logs, screenshots and enough context to debug without guesswork.',
			'output' => 'Inspectable evidence',
		),
	),
	'boundaryLabel' => 'What this is',
	'boundary'      => 'This is the in house automation platform. It does not replace Functional Testing or a coded suite when that suite is the better lasting fit. The matching service is <a href="' . ow_home( '/services/test-automation-services' ) . '">Test Automation</a>. Playwright in an existing repository can still be considered during scoping.',
	'spotlight'     => function () {
		ow_accelerator_callout(
			array(
				'kicker' => 'Where the draft comes from',
				'name'   => 'TestsBuddi',
				'icon'   => 'i-bot',
				'href'   => ow_home( '/testsbuddi' ),
				'link'   => 'See the governed platform',
				'text'   => 'TestsBuddi supports test design and review. theTestRo records, runs and maintains the automation without an LLM.',
				'steps'  => array(
					array(
						'n'     => 'Draft',
						'title' => 'Cases from knowledge you own',
						'text'  => 'Use approved sources to prepare draft test cases for review.',
					),
					array(
						'n'     => 'Run',
						'title' => 'theTestRo records and replays approved work',
						'text'  => 'No code capture, web and API checks and self healing follow deterministic rules.',
					),
					array(
						'n'     => 'Sign',
						'title' => 'An engineer reviews evidence',
						'text'  => 'Reports, logs and screenshots are considered with product context and release risk.',
					),
				),
				'footer' => 'Both tools are built and used in house by Optimworks.',
			)
		);
	},
	'deliveryTitle'  => 'Record, replay and review on an agreed scope.',
	'deliveryText'   => 'The delivery approach is agreed around the product, environments and the evidence your team needs.',
	'delivery'       => array(
		array(
			'phase'  => 'Record',
			'owner'  => 'QA engineer',
			'text'   => 'Capture the agreed journeys by performing the actions. Reusable steps are stored without making framework code the starting point.',
			'output' => 'Recorded flows',
		),
		array(
			'phase'  => 'Replay',
			'owner'  => 'QA engineer',
			'text'   => 'Run the same flows across the agreed environments, including web and API checks and parallel cloud execution where the scope requires it.',
			'output' => 'Execution results',
		),
		array(
			'phase'  => 'Keep',
			'owner'  => 'QA engineer',
			'text'   => 'Apply self healing and reusable components when the interface changes so maintenance does not stall the next cycle.',
			'output' => 'Maintained suite',
		),
		array(
			'phase'  => 'Review',
			'owner'  => 'QA engineer',
			'text'   => 'Read reports, logs and screenshots and communicate residual risk in product context.',
			'output' => 'Test evidence',
		),
	),
	'ownershipTitle' => 'Agree ownership before recording begins.',
	'ownershipHead'  => 'Assets, execution and review should have named owners.',
	'ownershipText'  => 'The engagement defines where recorded flows are held, who reviews results and how ongoing maintenance is handled.',
	'ownershipItems' => array(
		array( 'Recording', 'Agree the journeys, environments and data used for capture and replay.' ),
		array( 'Execution', 'Use deterministic, rules based behaviour with no LLM in the run path.' ),
		array( 'Review', 'Assess reports and failures in the context of the product.' ),
		array( 'Continuity', 'Document responsibilities for maintenance and handover.' ),
	),
	'ownershipIcon'  => 'i-gear',
	'proofTitle'     => 'Faster cycles without handing the run to a model.',
	'proofText'      => 'Product capabilities from theTestRo. They describe how the platform is designed to work, not a forecast for every engagement.',
	'proofLeft'      => array(
		'kicker' => '40x',
		'title'  => 'Faster test creation',
		'text'   => 'Built so people can create and run automated tests without waiting on a coding specialist.',
	),
	'proofMid'       => array(
		'from'  => 'Hours',
		'to'    => 'Minutes',
		'title' => 'Shorter testing cycles',
		'text'  => 'Recording, replay and parallel cloud execution cut the time spent creating and running checks.',
	),
	'proofRight'     => array(
		'kicker' => 'One',
		'title'  => 'Web and API platform',
		'text'   => 'User journeys and backend APIs are validated together, with reports, logs and screenshots on every replay.',
	),
	'ecoTitle' => 'Assess the fit with your existing stack.',
	'ecoText'  => 'Current frameworks, repositories and CI pipelines are reviewed during scoping. Recorded flows can sit alongside a coded suite when that is the better lasting fit.',
	'tools'    => array(
		array(
			't'     => 'Automation',
			'tools' => array(
				ow_tool( 'thetestro.png', 'theTestRo' ),
				ow_tool( 'playwright', 'Playwright' ),
				ow_tool( 'selenium', 'Selenium' ),
			),
		),
		array(
			't'     => 'Common browsers',
			'tools' => array(
				ow_tool( 'chrome', 'Chrome' ),
				ow_tool( 'firefox', 'Firefox' ),
				ow_tool( 'safari', 'Safari' ),
				ow_tool( 'edge', 'Edge' ),
			),
		),
		array(
			't'     => 'Delivery tools',
			'tools' => array(
				ow_tool( 'githubactions', 'GitHub Actions' ),
				ow_tool( 'jenkins', 'Jenkins' ),
				ow_tool( 'gitlab', 'GitLab' ),
			),
		),
	),
	'extra' => function () {
		?>
		<aside class="acc-ext reveal">
			<strong>theTestRo has its own product site.</strong>
			<p>Visit thetestro.com for product information.</p>
			<a href="https://thetestro.com" rel="noopener" target="_blank">Visit thetestro.com</a>
		</aside>
		<?php
	},
	'engageTitle'  => 'Choose an engagement model that fits the scope.',
	'engage'       => array(
		array(
			'label' => 'Establish',
			'title' => 'Pilot Week',
			'text'  => 'Assess a focused automation need within an agreed one week scope.',
		),
		array(
			'label' => 'Build',
			'title' => 'Embedded automation',
			'text'  => 'Engineers work within your delivery cadence on agreed automation priorities.',
		),
		array(
			'label' => 'Operate',
			'title' => 'Managed automation',
			'text'  => 'Optimworks manages an agreed automation scope and reports results to your team.',
		),
	),
	'faqTitle'     => 'Questions about fit and ownership.',
	'faq'          => $faq,
	'closeEyebrow' => 'Start with one journey',
	'closeTitle'   => 'Record one valuable flow in the real environment.',
	'closeText'    => 'Tell us about the journeys you need to automate, whether the scope is web, API or both, and how you handle maintenance today.',
	'closeLink'    => 'Discuss the current suite',
);

get_header();
ow_render_service_buying_page( $p );
get_footer();

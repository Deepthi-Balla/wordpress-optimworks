<?php
/*
Template Name: AI Managed QA
*/
/**
 * AI Managed QA — ServiceBuyingPage port of ai-managed-qa.tsx.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'Do we lose the repositories?',
		'a' => 'No. Git, pipelines and test assets stay yours. You keep the right to run the suite if we step away.',
	),
	array(
		'q' => 'Is this a tool licence?',
		'a' => 'No. TestsBuddi and theTestRo sit on the work. You are not buying seats. You are buying a function that already owns planning, evidence and sign off.',
	),
	array(
		'q' => 'Can AI just replace this?',
		'a' => 'AI can draft cases and heal locators. It cannot own whether a refund rule, a role permission or a cooling off window is still correct. When it is wrong, someone still needs to have signed.',
	),
	array(
		'q' => 'How is this different from an embedded team?',
		'a' => 'Embedded joins your sprints with scoped work. Managed means we own the cadence as a named function: planning, execution and release sign off. How we work explains both shapes.',
	),
	array(
		'q' => 'Is Pilot Week still the door?',
		'a' => 'Yes. One experienced engineer. One week. Real output on your systems, free, with no contract required. You keep the work either way.',
	),
	array(
		'q' => 'Who signs the release?',
		'a' => 'A named experienced engineer reviews the agreed evidence and owns the release recommendation. Reporting is written for product and engineering stakeholders.',
	),
);

$p = array(
	'crumb'       => 'AI Managed QA',
	'crumbParent' => array(
		'label' => 'AI Accelerators',
		'href'  => '/accelerators',
	),
	'kicker'      => 'AI Accelerators',
	'title'       => 'We run the QA cadence. You keep the <span class="hl">repos</span>',
	'signalIcon'  => 'i-users',
	'signal'      => array( 'Cadence owned', 'Git yours', 'Named sign off' ),
	'lede'        => 'Managed means we own an agreed QA cadence on your product. Git stays yours. A named experienced engineer still owns the release recommendation.',
	'covers'      => array( 'Cadence', 'Heals', 'CI', 'Ledger', 'Sign off', 'You keep' ),
	'cta'         => 'Talk to an engineer',
	'ghostCta'    => 'See the loop we run',
	'scopeId'     => 'mqa-scope',
	'image'       => $ow_img . '/managed-qa-concept.jpg',
	'imageAlt'    => 'Path from a named pod and cadence through gate and weekly report to assets you keep',
	'triggerTitle'=> 'Drafting got faster. Accountable quality ownership did not.',
	'triggerText' => 'Problems usually show up in queues, unsigned greens and a missing owner long before the next release ships untested.',
	'triggers'    => array(
		array(
			'icon'  => 'i-users',
			'title' => 'The QA line is being cut because AI can draft',
			'text'  => 'Drafts got faster. Ownership did not. Nobody is accountable for whether the product is still correct.',
		),
		array(
			'icon'  => 'i-book',
			'title' => 'Quality is a ticket queue',
			'text'  => 'Work arrives as stray requests. There is no cadence, no weekly report and no named person on the release.',
		),
		array(
			'icon'  => 'i-shield',
			'title' => 'Green CI nobody trusts',
			'text'  => 'The badge is green. Failures do not identify a reproducible step. Stakeholders cannot see what was tested and what remains open.',
		),
		array(
			'icon'  => 'i-compass',
			'title' => 'You want the function, not a seat',
			'text'  => 'A licence does not plan the week, file the defect or own the release recommendation.',
		),
	),
	'scopeEyebrow'=> 'The loop we run',
	'scopeTitle'  => 'This engagement covers the full managed QA cycle.',
	'scopeText'   => 'Understand, generate, review, automate, execute, verify, file, sign. Tools accelerate. Humans still decide. Nothing auto merges.',
	'scope'       => array(
		array(
			'icon'   => 'i-compass',
			'title'  => 'Understand',
			'text'   => 'TestsBuddi reads the product and the suite you already have.',
			'output' => 'Intake map',
		),
		array(
			'icon'   => 'i-bot',
			'title'  => 'Generate and review',
			'text'   => 'Draft cases and gaps, including the paths a checklist skips. An experienced engineer reviews, revises or rejects noise.',
			'output' => 'Approved cases',
		),
		array(
			'icon'   => 'i-gear',
			'title'  => 'Automate',
			'text'   => 'theTestRo turns signed cases into scripts that heal with rules you can inspect.',
			'output' => 'Runnable pack',
		),
		array(
			'icon'   => 'i-tools',
			'title'  => 'Execute in your CI',
			'text'   => 'Your pipelines. Failures name a step, not an unexplained failure.',
			'output' => 'CI evidence',
		),
		array(
			'icon'   => 'i-shield',
			'title'  => 'Verify',
			'text'   => 'A human reads evidence. Green is not safe.',
			'output' => 'Read evidence',
		),
		array(
			'icon'   => 'i-users',
			'title'  => 'File and sign',
			'text'   => 'Bugs filed with steps, data and an owner. Retest. Then a named engineer approves the recommendation.',
			'output' => 'Signed cut',
		),
	),
	'boundaryLabel' => 'What this is',
	'boundary'      => 'This is an engagement shape, not a product licence. <a href="' . ow_home( '/how-we-work' ) . '">How we work</a> explains Pilot Week and Embedded Team. theTestRo and TestsBuddi sit on the work. They are not seats you have to staff around.',
	'spotlight'     => function () {
		ow_accelerator_callout(
			array(
				'kicker' => 'The tools on the loop',
				'name'   => 'TestsBuddi and theTestRo',
				'icon'   => 'i-tools',
				'href'   => ow_home( '/accelerators' ),
				'link'   => 'See the two accelerators',
				'text'   => 'TestsBuddi drafts from what you already have. theTestRo keeps locators alive with heals you can inspect. A named engineer still signs.',
				'steps'  => array(
					array(
						'n'     => 'Draft',
						'title' => 'TestsBuddi proposes coverage',
						'text'  => 'From Jira, GitHub and knowledge you own. Nothing enters the pack on confidence alone.',
					),
					array(
						'n'     => 'Heal',
						'title' => 'theTestRo keeps the suite alive',
						'text'  => 'Rules you can audit. A log of what changed. Playwright remains first class.',
					),
					array(
						'n'     => 'Sign',
						'title' => 'A named engineer approves the recommendation',
						'text'  => 'The function owns the cadence. You keep the repos.',
					),
				),
				'footer' => 'Both tools are built and used by Optimworks. They are not licensed or rebadged. Nothing auto merges.',
			)
		);
	},
	'deliveryTitle' => 'Run the week before anyone treats a copilot as the owner.',
	'deliveryText'  => 'Each phase has a named owner and an output a release owner can inspect.',
	'delivery'      => array(
		array(
			'phase'  => 'Understand',
			'owner'  => 'Named pod lead',
			'text'   => 'Read the product, the board and the suite you already have.',
			'output' => 'Week brief',
		),
		array(
			'phase'  => 'Generate and review',
			'owner'  => 'Experienced QA engineer',
			'text'   => 'Draft the gaps. Review, revise or reject. Record residual coverage risk.',
			'output' => 'Approved pack',
		),
		array(
			'phase'  => 'Automate',
			'owner'  => 'QA engineer',
			'text'   => 'theTestRo on locators. Playwright in the repo when the suite needs to live as code.',
			'output' => 'Healed pack',
		),
		array(
			'phase'  => 'Execute and verify',
			'owner'  => 'Named QA owner',
			'text'   => 'Your CI. A human reads evidence. Failures name a step.',
			'output' => 'Read evidence',
		),
		array(
			'phase'  => 'File and sign',
			'owner'  => 'Named experienced engineer',
			'text'   => 'Defects with owners. A weekly quality report. A named recommendation on the release.',
			'output' => 'Weekly report',
		),
	),
	'ownershipTitle' => 'The next release should not depend on a ticket queue.',
	'ownershipHead'  => 'You keep the repos. We keep the cadence honest.',
	'ownershipText'  => 'Managed work is complete when the weekly report, the evidence and the residual risk can be understood by the people who inherit them, including if we step away.',
	'ownershipItems' => array(
		array( 'Repos', 'Git, pipelines and test assets stay yours from the first day.' ),
		array( 'Cadence', 'Understand, generate, review, automate, execute, verify, file, recommend.' ),
		array( 'Report', 'A weekly summary stakeholders can read without translation.' ),
		array( 'Continuity', 'A named engineer can explain the last recommendation and the next risk.' ),
	),
	'ownershipIcon'  => 'i-users',
	'proofTitle'     => 'A weekly report you can read, not a remembered stand up.',
	'proofText'      => 'You receive a named cadence, inspectable repair logs and a recommendation a release owner can defend.',
	'proofLeft'      => array(
		'kicker' => 'You keep',
		'title'  => 'Repos and the right to run',
		'text'   => 'Pipelines, assets and the suite remain yours if we step away.',
	),
	'proofMid'       => array(
		'from'  => 'Cadence',
		'to'    => 'Report',
		'title' => 'A week a VP can read',
		'text'  => 'What ran, what failed, what healed and what still needs a human.',
	),
	'proofRight'     => array(
		'kicker' => 'Sign',
		'title'  => 'What still needs a sign',
		'text'   => 'A named experienced engineer approves the recommendation. Green is not the decision.',
	),
	'ecoTitle' => 'The function runs in your tools.',
	'ecoText'  => 'We join the board and the pipeline you already have. In house accelerators sit on the work. They are not a rewrite.',
	'tools'    => array(
		array(
			't'     => 'On the work',
			'tools' => array(
				array( 'name' => 'theTestRo', 'mark' => 'tR' ),
				array( 'name' => 'TestsBuddi', 'mark' => 'TB' ),
				ow_tool( 'playwright', 'Playwright' ),
				ow_tool( 'selenium', 'Selenium' ),
			),
		),
		array(
			't'     => 'Your CI',
			'tools' => array(
				ow_tool( 'githubactions', 'GitHub Actions' ),
				ow_tool( 'jenkins', 'Jenkins' ),
				ow_tool( 'gitlab', 'GitLab' ),
			),
		),
		array(
			't'     => 'Source',
			'tools' => array(
				ow_tool( 'github', 'GitHub' ),
				ow_tool( 'jira', 'Jira' ),
			),
		),
	),
	'extra' => function () {
		?>
		<aside class="acc-ext reveal">
			<strong>Pilot Week is still the door.</strong>
			<p>
				One experienced engineer. Your systems. One week of real work, delivered with a written
				readout. You keep everything. How we work explains Pilot, Embedded and Managed as three
				shapes of the same standard.
			</p>
			<a href="<?php echo ow_home( '/how-we-work' ); ?>">How we work</a>
		</aside>
		<?php
	},
	'engageTitle'  => 'Start with proof. Then pick the shape that lasts.',
	'engage'       => array(
		array(
			'label' => 'Establish',
			'title' => 'Pilot Week',
			'text'  => 'One experienced engineer. One week. Real output on your systems, free, with no contract required.',
		),
		array(
			'label' => 'Build',
			'title' => 'Embedded Team',
			'text'  => 'Named engineers join your sprints with scoped work, not an open hourly line the next budget review can cut.',
		),
		array(
			'label' => 'Operate',
			'title' => 'Managed Quality Function',
			'text'  => 'We own planning, execution and release sign off. Your developers keep shipping. Git stays yours.',
		),
	),
	'faqTitle'     => 'Set the owner before the budget cut lands.',
	'faq'          => $faq,
	'closeEyebrow' => 'Start with proof',
	'closeTitle'   => 'See the function work on your own codebase first.',
	'closeText'    => 'Bring the board, the pipeline and the last unsigned green. We will identify the smallest useful week for a cadence a named engineer can stand behind.',
	'closeLink'    => 'Or discuss the current QA line',
);

get_header();
ow_render_service_buying_page( $p );
get_footer();

<?php
/*
Template Name: TestsBuddi
*/
/**
 * TestsBuddi — ServiceBuyingPage port of testsbuddi.tsx.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'Does anything run silently?',
		'a' => 'No. Drafts are an input. An experienced engineer reviews, revises or rejects before a case becomes a release check. Scripts from approved steps are reviewed by a person, stored and reused.',
	),
	array(
		'q' => 'Is this a TestsBuddi licence?',
		'a' => 'No. TestsBuddi is the in house platform we use to draft, review and gate. You are not buying a seat. You keep the cases in your systems.',
	),
	array(
		'q' => 'Which sources do you connect?',
		'a' => 'The work already lives in Jira and GitHub. TestsBuddi meets the team there, then keeps knowledge, approved cases and the gate in one place. We do not open with a catalogue of every import.',
	),
	array(
		'q' => 'How does theTestRo fit?',
		'a' => 'TestsBuddi drafts and governs. theTestRo runs what was approved when the pack needs automation. A named engineer still signs.',
	),
	array(
		'q' => 'Who owns the cases when you leave?',
		'a' => 'You do from the first day. Approved cases remain in your repository or the place you already keep them. Handover includes a practical walkthrough and a named owner on your team.',
	),
	array(
		'q' => 'Is there a public product site?',
		'a' => 'No. TestsBuddi is used on Optimworks engagements. theTestRo is the accelerator with a public site, at thetestro.com.',
	),
);

$p = array(
	'crumb'        => 'TestsBuddi',
	'crumbParent'  => array(
		'label' => 'AI Accelerators',
		'href'  => '/accelerators',
	),
	'kicker'       => 'AI Accelerators',
	'title'        => 'From existing artefacts to a signed release <span class="hl">signal</span>',
	'signalIcon'   => 'i-bot',
	'signal'       => array( 'Intake mapped', 'Human approved', 'Never silent' ),
	'lede'         => 'Drafts from what you already have. A living knowledge base. A person still moves a case from draft to approved. Scripts never run silently.',
	'covers'       => array( 'Intake', 'Knowledge', 'Review', 'Gate', 'Signal', 'Handover' ),
	'cta'          => 'Talk to an engineer',
	'ghostCta'     => 'See how it works',
	'scopeId'      => 'buddi-scope',
	'image'        => $ow_img . '/testsbuddi-concept.jpg',
	'imageAlt'     => 'Path from intake and draft through approval and gate to a named signal',
	'triggerTitle' => 'A generated list is not a release signal.',
	'triggerText'  => 'Problems usually show up in review, knowledge and unsigned scripts long before a missed journey becomes a production defect.',
	'triggers'     => array(
		array(
			'icon'  => 'i-bot',
			'title' => 'Cases appear faster than anyone can read them',
			'text'  => 'A generator fills a folder. Nobody can say which drafts were accepted, which were wrong and which never matched the product.',
		),
		array(
			'icon'  => 'i-book',
			'title' => 'Knowledge lives in chat',
			'text'  => "The next draft is generic because last week's labels, flows and business rules never entered a place the platform can reuse.",
		),
		array(
			'icon'  => 'i-shield',
			'title' => 'The gate has no defined criteria',
			'text'  => 'Impact and defects sit in two tools. Nobody can say PASS, WARN or BLOCK on the cut.',
		),
		array(
			'icon'  => 'i-gear',
			'title' => 'Scripts run unsigned',
			'text'  => 'Automation is generated from a draft and executed because the model was confident. A person never read the steps.',
		),
	),
	'scopeEyebrow' => 'What it does',
	'scopeTitle'   => 'What you already have, then a person who decides.',
	'scopeText'    => 'Not a blank prompt. Not a generator that auto merges. One governed path from intake to a release signal. Enough surface to connect. Not a catalogue.',
	'scope'        => array(
		array(
			'icon'   => 'i-compass',
			'title'  => 'Intake from what you have',
			'text'   => 'Jira, GitHub and the knowledge the team already owns. Manual authoring stays when the draft would be noise.',
			'output' => 'Source map',
		),
		array(
			'icon'   => 'i-book',
			'title'  => 'A living knowledge base',
			'text'   => 'Better knowledge in means better tests out. The base grows as the product and the suite evolve, so the next draft is less generic than the last.',
			'output' => 'Reusable knowledge',
		),
		array(
			'icon'   => 'i-users',
			'title'  => 'Coverage review',
			'text'   => 'Completeness scored. Missing scenarios suggested. Duplicates flagged. A person still chooses what enters the pack.',
			'output' => 'Review record',
		),
		array(
			'icon'   => 'i-shield',
			'title'  => 'Draft, ready, approved',
			'text'   => 'A workflow with a human in the loop. Nothing becomes a release check because a model was confident.',
			'output' => 'Approved cases',
		),
		array(
			'icon'   => 'i-tools',
			'title'  => 'Plans and runs',
			'text'   => 'The same place you approve a case is the place you plan and execute it. Pass, fail and skip stay visible.',
			'output' => 'Planned run',
		),
		array(
			'icon'   => 'i-globe',
			'title'  => 'Release signal',
			'text'   => 'Impact and defects through GitHub and Jira. PASS / WARN / BLOCK on the cut. Scripts from approved steps are reviewed, stored and reused.',
			'output' => 'PASS / WARN / BLOCK',
		),
	),
	'boundaryLabel' => 'What this is',
	'boundary'      => 'This is the in house platform. The matching service is <a href="' . ow_home( '/services/ai-assisted-test-case-generation' ) . '">AI assisted cases</a>. theTestRo runs approved steps when the pack needs automation. There is no public product site.',
	'spotlight'     => function () {
		ow_accelerator_callout(
			array(
				'kicker' => 'Where approved steps run',
				'name'   => 'theTestRo',
				'icon'   => 'i-gear',
				'href'   => ow_home( '/thetestro' ),
				'link'   => 'See the deterministic runner',
				'text'   => 'TestsBuddi governs the case. theTestRo runs the signed pack. Healing follows rules you can inspect. A person still signs.',
				'steps'  => array(
					array(
						'n'     => 'Approve',
						'title' => 'A human moves the case',
						'text'  => 'Draft to ready to approved. Unsigned model output is not a test strategy.',
					),
					array(
						'n'     => 'Run',
						'title' => 'theTestRo executes what was signed',
						'text'  => 'Heals are logged. Failures name a step. Playwright export exists when the repo needs code.',
					),
					array(
						'n'     => 'Gate',
						'title' => 'PASS, WARN or BLOCK',
						'text'  => 'The cut gets a signal a release owner can read. Green is not safe until a named engineer approves the recommendation.',
					),
				),
				'footer' => 'Both tools are built and used by Optimworks. They are not licensed or rebadged. Nothing runs silently.',
			)
		);
	},
	'deliveryTitle'  => 'Review the draft before it becomes a gate.',
	'deliveryText'   => 'Each phase has a named owner and an output your engineering team can inspect.',
	'delivery'       => array(
		array(
			'phase'  => 'Intake',
			'owner'  => 'QA lead + product owner',
			'text'   => 'Connect Jira, GitHub and the knowledge already in the team. Name the coverage whose absence would cost the most.',
			'output' => 'Intake map',
		),
		array(
			'phase'  => 'Draft',
			'owner'  => 'QA engineer',
			'text'   => 'Produce first pass cases from that material. Drafts remain drafts until review.',
			'output' => 'Draft set',
		),
		array(
			'phase'  => 'Approve',
			'owner'  => 'Experienced QA engineer',
			'text'   => 'Review, revise or reject. Record why a draft did not enter the pack.',
			'output' => 'Approved cases',
		),
		array(
			'phase'  => 'Gate',
			'owner'  => 'Named QA owner',
			'text'   => 'Plan, run and attach a PASS / WARN / BLOCK signal. Scripts from approved steps are read before they run.',
			'output' => 'Release signal',
		),
		array(
			'phase'  => 'Handover',
			'owner'  => 'Named QA owner',
			'text'   => 'Leave a named owner who can explain the last approval and the next intake.',
			'output' => 'Owned pack',
		),
	),
	'ownershipTitle' => 'The next story should not depend on the original drafter.',
	'ownershipHead'  => 'A generated folder is not useful if nobody can defend it at the gate.',
	'ownershipText'  => 'TestsBuddi work is complete when the sources, the review record and the release signal can be understood by the people who inherit them.',
	'ownershipItems' => array(
		array( 'Sources', 'Drafts start from Jira, GitHub and knowledge your team already owns.' ),
		array( 'Review', 'Every case that enters the pack has a human decision attached.' ),
		array( 'Gate', 'PASS, WARN or BLOCK is written. A feeling is not a release signal.' ),
		array( 'Continuity', 'A named owner can explain the last approval and the next gap.' ),
	),
	'ownershipIcon'  => 'i-bot',
	'proofTitle'     => 'A review record, not a remembered prompt.',
	'proofText'      => 'You receive a source map, reviewed coverage and a release signal your team can own.',
	'proofLeft'      => array(
		'kicker' => 'Intake',
		'title'  => 'Sources you already have',
		'text'   => 'Jira, GitHub and knowledge written so drafts cannot invent a parallel product.',
	),
	'proofMid'       => array(
		'from'  => 'Draft',
		'to'    => 'Approve',
		'title' => 'Decisions you can inspect',
		'text'  => 'Accepted, revised and rejected cases remain visible so ownership is clear.',
	),
	'proofRight'     => array(
		'kicker' => 'Gate',
		'title'  => 'What still needs a person',
		'text'   => 'What entered coverage, what was deferred and what still needs a human.',
	),
	'ecoTitle' => 'Connect where the team already lives.',
	'ecoText'  => 'Clients already file work in Jira and ship from GitHub. TestsBuddi meets them there. We do not open with an import catalogue.',
	'tools'    => array(
		array(
			't'     => 'Platform',
			'tools' => array(
				array( 'name' => 'TestsBuddi', 'mark' => 'TB' ),
				ow_tool( 'jira', 'Jira' ),
				ow_tool( 'github', 'GitHub' ),
			),
		),
		array(
			't'     => 'Delivery',
			'tools' => array(
				ow_tool( 'githubactions', 'GitHub Actions' ),
				ow_tool( 'gitlab', 'GitLab' ),
				ow_tool( 'azuredevops', 'Azure DevOps' ),
			),
		),
		array(
			't'     => 'Runners after approval',
			'tools' => array(
				array( 'name' => 'theTestRo', 'mark' => 'tR' ),
				ow_tool( 'playwright', 'Playwright' ),
				ow_tool( 'selenium', 'Selenium' ),
			),
		),
	),
	'engageTitle'  => 'Start with the coverage whose absence would cost the most.',
	'engage'       => array(
		array(
			'label' => 'Establish',
			'title' => 'Pilot Week',
			'text'  => 'Draft and review coverage for one critical area in your tools before committing to a broader programme.',
		),
		array(
			'label' => 'Build',
			'title' => 'Embedded case design',
			'text'  => 'Engineers work inside your cadence to keep intake, review and approved coverage current as stories change.',
		),
		array(
			'label' => 'Operate',
			'title' => 'Managed coverage design',
			'text'  => 'Optimworks operates the agreed drafting and review while your team retains the suite and the release decision.',
		),
	),
	'faqTitle'     => 'Set the review rule before the draft grows.',
	'faq'          => $faq,
	'closeEyebrow' => 'Start with one area',
	'closeTitle'   => 'Prove one slice of reviewed coverage in your tools.',
	'closeText'    => 'Bring the stories, the existing suite and the gap that concerns your team. We will identify the smallest useful slice for drafting that an engineer can stand behind.',
	'closeLink'    => 'Or discuss the current suite',
);

get_header();
ow_render_service_buying_page( $p );
get_footer();

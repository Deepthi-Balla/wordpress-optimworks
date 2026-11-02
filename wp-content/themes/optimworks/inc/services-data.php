<?php
/**
 * Service buying-page data — ports of services.$slug.tsx ServiceBuyingPage props.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * All ServiceBuyingPage records keyed by slug.
 *
 * Image values are filenames under assets/images/; ow_get_service() resolves them
 * to full URIs via ow_img() so ow_render_service_buying_page receives absolute URLs.
 *
 * @return array<string,array<string,mixed>>
 */
function ow_services_data() {
	static $data = null;
	if ( null !== $data ) {
		return $data;
	}

	$data = array(
		'ai-assisted-test-case-generation' => array(
			'wp_title'       => 'AI Assisted Test Case Generation',
			'crumb'          => 'AI assisted cases',
			'kicker'         => 'AI Powered QA',
			'title'          => 'Reviewed test cases based on your existing <span class="hl">requirements</span>',
			'signalIcon'     => 'i-bot',
			'signal'         => array( 'Sources mapped', 'Drafts reviewed', 'Suite owned' ),
			'lede'           => 'We prepare test cases from agreed product materials, review them with an experienced engineer and place only approved coverage in your suite.',
			'covers'         => array( 'Intake', 'Drafts', 'Review', 'Approval', 'Traceability', 'Handover' ),
			'cta'            => 'Talk to an engineer',
			'poweredBy'      => array(
			'name' => 'TestsBuddi',
			'href' => '/testsbuddi',
		),
			'scopeId'        => 'aitc-scope',
			'image'          => 'ai-testcase-concept.jpg',
			'imageAlt'       => 'Path from intake and draft through review and approval to a named suite',
			'triggerTitle'   => 'When structured case design is needed',
			'triggerText'    => 'This service is suitable when teams need faster case preparation without giving up review, traceability or accountable coverage decisions.',
			'triggers'       => array(
			array(
				'icon'  => 'i-bot',
				'title' => 'Draft volume exceeds review capacity',
				'text'  => 'Generated cases accumulate without a clear record of which cases were reviewed, changed or rejected.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Requirements live in one place and tests in another',
				'text'  => 'Requirements change without a reliable link to the cases that need review.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'Coverage decisions lack ownership',
				'text'  => 'The suite grows without an assigned reviewer or a documented view of remaining risk.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Duplicate cases obscure coverage gaps',
				'text'  => 'Common paths are repeated while negative paths, permissions and integrations receive limited coverage.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'We deliver engineer reviewed test cases and traceability. Functional Testing remains responsible for executing journeys and Automation Testing remains responsible for repeatable execution.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Intake from what you have',
				'text'   => 'We map the stories, requirements, designs and existing cases included in the engagement.',
				'output' => 'Source map',
			),
			array(
				'icon'   => 'i-bot',
				'title'  => 'Draft generation',
				'text'   => 'AI prepares first pass cases for engineering review. Drafts do not enter the suite automatically.',
				'output' => 'Draft pack',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Human review',
				'text'   => 'An experienced engineer reviews, edits or rejects each draft and records remaining coverage risk.',
				'output' => 'Reviewed cases',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Approval into the suite',
				'text'   => 'Only approved cases enter release coverage. Rejected drafts remain in the review record.',
				'output' => 'Approved pack',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Traceability',
				'text'   => 'Approved cases remain linked to their source materials so later changes can trigger review.',
				'output' => 'Traced coverage',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Handover',
				'text'   => 'We transfer the suite, review record and operating guidance to your nominated owner.',
				'output' => 'Owned suite',
			),
		),
			'boundary'       => 'This service drafts and reviews coverage. Journey proof belongs to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional Testing</a>. Repeatable execution belongs to <a href="' . ow_home( '/services/test-automation-services' ) . '">Automation Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your engineering team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Map',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Identify source materials, priority journeys and required coverage.',
				'output' => 'Intake map',
			),
			array(
				'phase'  => 'Draft',
				'owner'  => 'QA engineer',
				'text'   => 'Prepare first pass cases from the agreed sources for engineering review.',
				'output' => 'Draft set',
			),
			array(
				'phase'  => 'Review',
				'owner'  => 'Experienced QA engineer',
				'text'   => 'Accept, edit or reject each draft and record the decision.',
				'output' => 'Review record',
			),
			array(
				'phase'  => 'Approve',
				'owner'  => 'Named QA owner',
				'text'   => 'Move approved cases into your systems and document residual coverage risk.',
				'output' => 'Approved coverage',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Transfer the process, records and current status to your nominated owner.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the approved suite and its decision history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can maintain the sources, review record and approved cases.',
			'ownershipItems' => array(
			array( 'Sources', 'Drafts start from artefacts your team already owns.' ),
			array( 'Review', 'Every case that enters the suite has a human decision attached.' ),
			array( 'Record', 'Rejected drafts are visible so the same mistake is not reimported.' ),
			array( 'Continuity', 'A named owner can explain the last approval and the next gap.' ),
		),
			'ownershipIcon'  => 'i-bot',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include a source map, documented review decisions, approved cases and a record of open coverage risks.',
			'proofLeft'      => array(
			'kicker' => 'Intake',
			'title'  => 'Agreed source materials',
			'text'   => 'Stories, designs and existing cases define the product context for drafting.',
		),
			'proofMid'       => array(
			'from'  => 'Draft',
			'to'    => 'Review',
			'title' => 'Documented review decisions',
			'text'  => 'Accepted, edited and rejected cases remain visible with their review status.',
		),
			'proofRight'     => array(
			'kicker' => 'Suite',
			'title'  => 'Open coverage risks',
			'text'   => 'The record identifies approved coverage, deferred work and items requiring further review.',
		),
			'ecoTitle'       => 'Intake tools follow the product.',
			'ecoText'        => 'We work with the planning, design and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Intake',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'linear', 'Linear' ),
					ow_tool( 'figma', 'Figma' ),
					ow_tool( 'github', 'GitHub' ),
				),
			),
			array(
				't'     => 'Management',
				'tools' => array(
					ow_tool( 'testrail', 'TestRail' ),
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
					ow_tool( 'playwright', 'Playwright' ),
					ow_tool( 'selenium', 'Selenium' ),
					ow_tool( 'pytest', 'pytest' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Draft and review coverage for one priority area in your tools before extending the scope.',
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
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Can generated cases enter the suite without review?',
				'a' => 'No. AI accelerates the first draft. An experienced engineer reviews, edits or rejects every case before approval.',
			),
			array(
				'q' => 'What sources can you draft from?',
				'a' => 'We can use requirements, user stories, designs and existing test cases. The agreed source set is documented during intake.',
			),
			array(
				'q' => 'How is this different from Functional Testing?',
				'a' => 'This service designs and documents test coverage. Functional Testing executes user journeys and Automation Testing provides repeatable execution.',
			),
			array(
				'q' => 'Will this replace our test designers?',
				'a' => 'No. AI reduces drafting effort. Test judgement, coverage decisions and residual risk remain with the assigned engineer.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'You receive an intake map, reviewed test cases, traceability to source materials, a decision record and a documented coverage risk summary.',
			),
			array(
				'q' => 'Who owns the cases when you leave?',
				'a' => 'Your organisation owns the cases from the first day. They remain in your repository or test management system with a handover to your nominated owner.',
			),
			array(
				'q' => 'Does this service require a separate platform licence?',
				'a' => 'No. The engagement delivers approved cases in your systems without requiring a separate platform licence.',
			),
		),
			'closeEyebrow'   => 'Start with one area',
			'closeTitle'     => 'Define a reviewed coverage pilot.',
			'closeText'      => 'Share the relevant stories, existing suite and priority coverage gap. We will propose a focused scope with review responsibilities and deliverables.',
			'closeLink'      => 'Or discuss the current suite',
		),
		'ai-assisted-test-automation' => array(
			'wp_title'       => 'AI Assisted Test Automation',
			'crumb'          => 'AI Assisted Test Automation',
			'kicker'         => 'AI Powered QA',
			'title'          => 'Deterministic locator maintenance with an <span class="hl">audit trail</span>',
			'signalIcon'     => 'i-gear',
			'signal'         => array( 'Rules explicit', 'Heals logged', 'Suite owned' ),
			'lede'           => 'We maintain approved locators through deterministic rules, logged repair proposals and engineering review. No language model operates the suite.',
			'covers'         => array( 'Rules', 'Locators', 'Heals', 'Audit log', 'CI', 'Handover' ),
			'cta'            => 'Talk to an engineer',
			'poweredBy'      => array(
			'name' => 'theTestRo',
			'href' => '/thetestro',
		),
			'scopeId'        => 'heal-scope',
			'image'          => 'selfhealing-testing-concept.jpg',
			'imageAlt'       => 'Path from a broken locator through rule based heal and audit to a named run',
			'triggerTitle'   => 'When locator maintenance needs controls',
			'triggerText'    => 'This service is suitable when frequent interface changes create maintenance work and each repair needs a clear rule, review decision and owner.',
			'triggers'       => array(
			array(
				'icon'  => 'i-gear',
				'title' => 'Locators break every release',
				'text'  => 'UI churn burns the sprint on maintenance. Failures are treated as test debt even when the product is fine.',
			),
			array(
				'icon'  => 'i-bot',
				'title' => 'Repairs are difficult to explain',
				'text'  => 'The team cannot identify the rule behind a locator change or review the proposed replacement.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'Repairs can target the wrong control',
				'text'  => 'An unreviewed locator change can produce a passing result without preserving the intended behaviour.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Repair history lacks ownership',
				'text'  => 'Missing logs make it difficult for the next engineer to understand or maintain prior decisions.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service maintains approved locators through inspectable rules. Automation Testing remains responsible for framework and CI while Functional Testing defines expected behaviour.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Suite and fragility map',
				'text'   => 'The current locators, failure modes and the journeys whose break would cost the most.',
				'output' => 'Fragility map',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Explicit healing rules',
				'text'   => 'Attributes, roles, proximity and fallbacks are documented as deterministic selection rules.',
				'output' => 'Rule set',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Heal on failure',
				'text'   => 'When a locator fails, the rule set proposes a replacement and records the supporting evidence.',
				'output' => 'Heal proposals',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Audit trail',
				'text'   => 'The log records what changed, why it changed and whether an engineer approved or rejected it.',
				'output' => 'Heal log',
			),
			array(
				'icon'   => 'i-monitor',
				'title'  => 'CI evidence',
				'text'   => 'Heals and refusals visible in the same pipeline the team already uses.',
				'output' => 'Pipeline evidence',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'What still fails to heal',
				'text'   => 'Journeys that still fail to heal stay visible. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service heals locators with an audit trail. Framework design and CI belong to <a href="' . ow_home( '/services/test-automation-services' ) . '">Automation Testing</a>. Expected behaviour belongs to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your engineering team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Map',
				'owner'  => 'QA lead + automation owner',
				'text'   => 'Identify the suite, unstable locators and priority journeys.',
				'output' => 'Fragility brief',
			),
			array(
				'phase'  => 'Specify',
				'owner'  => 'QA lead',
				'text'   => 'Agree the repair rules, permitted changes and rejection conditions.',
				'output' => 'Rule brief',
			),
			array(
				'phase'  => 'Apply',
				'owner'  => 'QA engineer',
				'text'   => 'Apply the rule set to the agreed suite and log every proposal and rejection.',
				'output' => 'Instrumented suite',
			),
			array(
				'phase'  => 'Review',
				'owner'  => 'Named QA owner',
				'text'   => 'Inspect heals that would change meaning. Keep residual risk visible.',
				'output' => 'Reviewed log',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last heal and the next refusal.',
				'output' => 'Owned rules',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the rules, logs and approval history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can explain and maintain the deterministic repair process.',
			'ownershipItems' => array(
			array( 'Rules', 'Healing follows written attributes, roles and fallbacks.' ),
			array( 'Log', 'Every heal and refusal is inspectable after the run.' ),
			array( 'Refusal', 'A heal that would change meaning can be rejected.' ),
			array( 'Continuity', 'A named owner can explain the last repair and the next break.' ),
		),
			'ownershipIcon'  => 'i-gear',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include the rule set, locator changes, review decisions, unresolved failures and documented residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Break',
			'title'  => 'Failure made visible',
			'text'   => 'A missed locator produces enough context to see what the UI did.',
		),
			'proofMid'       => array(
			'from'  => 'Heal',
			'to'    => 'Audit',
			'title' => 'Repairs you can inspect',
			'text'  => 'The rule, the before and the after remain in the log so ownership is clear.',
		),
			'proofRight'     => array(
			'kicker' => 'Run',
			'title'  => 'Heals still refused',
			'text'   => 'What still fails to heal and whether the suite is safe to trust at the gate.',
		),
			'ecoTitle'       => 'Runners follow the suite you already own.',
			'ecoText'        => 'We work with the automation and CI tools your engineering team already uses.',
			'tools'          => array(
			array(
				't'     => 'Runners',
				'tools' => array(
					ow_tool( 'selenium', 'Selenium' ),
					ow_tool( 'playwright', 'Playwright' ),
					ow_tool( 'appium', 'Appium' ),
				),
			),
			array(
				't'     => 'Languages',
				'tools' => array(
					ow_tool( 'python', 'Python' ),
					ow_tool( 'javascript', 'JavaScript' ),
					ow_tool( 'typescript', 'TypeScript' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
					ow_tool( 'gitlab', 'GitLab CI' ),
				),
			),
			array(
				't'     => 'Labs',
				'tools' => array(
					ow_tool( 'browserstack', 'BrowserStack' ),
					ow_tool( 'saucelabs', 'Sauce Labs' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Attach auditable healing to one brittle journey in your environment before committing to a broader programme.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded healing',
				'text'  => 'Engineers work inside your cadence to keep rules, logs and refusals current as the UI changes.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed suite stability',
				'text'  => 'Optimworks operates the agreed healing and reporting while your team retains the suite and the release decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Is healing done by a language model?',
				'a' => 'No. The service is deterministic and rules based. It evaluates attributes, roles, proximity and approved fallbacks. It does not use a language model to operate or rewrite tests.',
			),
			array(
				'q' => 'How is this different from Automation Testing?',
				'a' => 'Automation Testing covers framework design, execution and CI. This service maintains approved locators through explicit rules and a reviewable audit trail.',
			),
			array(
				'q' => 'Can healing hide a real product break?',
				'a' => 'A proposed repair is logged and reviewed against expected behaviour. Engineers can reject it and the original failure remains visible.',
			),
			array(
				'q' => 'Do you work with our existing Selenium or Playwright suite?',
				'a' => 'Yes, when the suite can produce a reproducible failure. We retain the current stack unless it cannot support the agreed rules and audit evidence.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'You receive the rule set, repair proposals, approval record, unresolved failures and a documented view of residual suite risk.',
			),
			array(
				'q' => 'Who owns the suite when you leave?',
				'a' => 'You do from the first day. Rules, logs and suites remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
			array(
				'q' => 'Does this require a separate runner licence?',
				'a' => 'No. The engagement can use an internal runner where appropriate without requiring your team to purchase a licence.',
			),
		),
			'closeEyebrow'   => 'Start with one journey',
			'closeTitle'     => 'Define a controlled locator pilot.',
			'closeText'      => 'Share the affected journey, current runner and recent locator failures. We will propose a focused scope with explicit rules, review controls and deliverables.',
			'closeLink'      => 'Or discuss the current suite',
		),
		'predictive-risk-defect-intelligence' => array(
			'wp_title'       => 'Predictive Risk and Defect Intelligence',
			'crumb'          => 'Predictive risk',
			'kicker'         => 'AI Powered QA',
			'title'          => 'Rank testing effort by real defect <span class="hl">risk</span>',
			'signalIcon'     => 'i-gauge',
			'signal'         => array( 'History mapped', 'Areas ranked', 'Ledger owned' ),
			'lede'           => 'Defect history, change and cost of failure ranked so testing depth follows risk, not habit. A named engineer still signs the plan.',
			'covers'         => array( 'History', 'Change', 'Ranking', 'Depth', 'Ledger', 'Gate' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'pred-scope',
			'image'          => 'predictive-testing-concept.jpg',
			'imageAlt'       => 'Path from history and signal through rank and focus to a named risk register',
			'triggerTitle'   => 'When risk based prioritisation is needed',
			'triggerText'    => 'This service is suitable when testing effort is allocated without a documented view of defect concentration, current change or business impact.',
			'triggers'       => array(
			array(
				'icon'  => 'i-compass',
				'title' => 'The suite treats every module the same',
				'text'  => 'Cosmetic screens and payment paths receive equal time because nobody ranked cost of failure.',
			),
			array(
				'icon'  => 'i-pulse',
				'title' => 'The same areas keep breaking',
				'text'  => 'Defect clusters are known in conversation and absent from the plan.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Change lands where tests are thinnest',
				'text'  => 'Hot files ship with little coverage because the last ranking was a guess.',
			),
			array(
				'icon'  => 'i-book',
				'title' => 'Nobody can show why an area was skipped',
				'text'  => 'Deferred testing is remembered, not written. The next sprint repeats the gap.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service ranks where depth should go. Functional Testing still proves journeys. Test Impact Analysis still selects tests for a given change.',
			'scope'          => array(
			array(
				'icon'   => 'i-book',
				'title'  => 'History and clusters',
				'text'   => 'Past defects mapped to product areas so clusters are visible, not anecdotal.',
				'output' => 'Cluster map',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Change signals',
				'text'   => 'Where code and configuration are moving this cycle, written against the same areas.',
				'output' => 'Change view',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Cost of failure',
				'text'   => 'Revenue, trust and compliance journeys named so ranking is not only about volume.',
				'output' => 'Cost ranking',
			),
			array(
				'icon'   => 'i-gauge',
				'title'  => 'Depth recommendation',
				'text'   => 'What gets deep testing, what is sampled and what is deferred, in writing.',
				'output' => 'Depth plan',
			),
			array(
				'icon'   => 'i-monitor',
				'title'  => 'Plan into the cadence',
				'text'   => 'The ranking feeds the sprint or release plan your team already runs.',
				'output' => 'Plan input',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Risk register',
				'text'   => 'Deferred areas remain visible. Your authorised owner retains the release decision.',
				'output' => 'Named register',
			),
		),
			'boundary'       => 'This service ranks where testing depth should go. Selecting tests for a given change belongs to <a href="' . ow_home( '/services/test-impact-analysis' ) . '">Test Impact Analysis</a>. Proving journeys belongs to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your delivery team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Collect',
				'owner'  => 'QA lead + engineering',
				'text'   => 'Gather defect history, change signals and the journeys whose failure would cost the most.',
				'output' => 'Signal pack',
			),
			array(
				'phase'  => 'Rank',
				'owner'  => 'QA lead',
				'text'   => 'Produce a ranked view of areas and recommended depth. Record what is deferred.',
				'output' => 'Ranked register',
			),
			array(
				'phase'  => 'Apply',
				'owner'  => 'QA team',
				'text'   => 'Fold the ranking into the current cadence. Evidence still comes from exercised journeys.',
				'output' => 'Applied plan',
			),
			array(
				'phase'  => 'Review',
				'owner'  => 'Named QA owner',
				'text'   => 'Check whether the ranking matched what actually failed. Adjust the register in writing.',
				'output' => 'Updated register',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last ranking and the next deferred area.',
				'output' => 'Owned ranking',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the source signals, ranking method and decision record.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can maintain the depth plan and explain deferred coverage.',
			'ownershipItems' => array(
			array( 'Signals', 'History and change remain in your systems, not in a private model.' ),
			array( 'Plan', 'Depth and deferral are written before the sprint starts.' ),
			array( 'Ledger', 'Skipped areas stay visible at the gate.' ),
			array( 'Continuity', 'A named owner can explain the last ranking and the next change.' ),
		),
			'ownershipIcon'  => 'i-gauge',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include ranked product areas, source signals, recommended testing depth, deferred coverage and residual risk.',
			'proofLeft'      => array(
			'kicker' => 'History',
			'title'  => 'Clusters made visible',
			'text'   => 'Where defects have landed, written against product areas rather than folklore.',
		),
			'proofMid'       => array(
			'from'  => 'Rank',
			'to'    => 'Focus',
			'title' => 'Depth you can defend',
			'text'  => 'What is deep, what is sampled and what is deferred, attached to the plan.',
		),
			'proofRight'     => array(
			'kicker' => 'Ledger',
			'title'  => 'Risk still unranked',
			'text'   => 'The areas you chose not to deep test, still visible at the gate.',
		),
			'ecoTitle'       => 'Signals follow the systems you already own.',
			'ecoText'        => 'We work with the defect, source and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'History',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'linear', 'Linear' ),
					ow_tool( 'github', 'GitHub' ),
				),
			),
			array(
				't'     => 'Observability',
				'tools' => array(
					ow_tool( 'grafana', 'Grafana' ),
					ow_tool( 'prometheus', 'Prometheus' ),
					ow_tool( 'datadog', 'Datadog' ),
				),
			),
			array(
				't'     => 'Delivery',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'gitlab', 'GitLab' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
			array(
				't'     => 'Planning',
				'tools' => array(
					ow_tool( 'testrail', 'TestRail' ),
					ow_tool( 'azuredevops', 'Azure DevOps' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Rank one product area using your history and change data before committing to a broader programme.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded risk ranking',
				'text'  => 'Engineers work inside your cadence to keep the register current as defects and change move.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed risk register',
				'text'  => 'Optimworks operates the agreed ranking and reporting while your team retains the product and the release decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Do you promise a prediction accuracy figure?',
				'a' => 'No. We use defect history, current change and business impact to support prioritisation. The result informs the test plan but does not guarantee whether an area will fail.',
			),
			array(
				'q' => 'How is this different from Test Impact Analysis?',
				'a' => 'Test Impact Analysis asks which tests a given change can touch. Predictive risk asks which product areas deserve more depth this cycle, even before a specific diff lands.',
			),
			array(
				'q' => 'What data do you need?',
				'a' => 'Defect history, change history and the journeys whose failure would cost the most. We start with what your systems already hold.',
			),
			array(
				'q' => 'Will this shrink the suite automatically?',
				'a' => 'No. Ranking changes depth. It does not silently drop coverage. Deferred areas stay visible on the register.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'A ranked view of product areas, the signals used, the testing depth recommended and residual risk written for your authorised owner.',
			),
			array(
				'q' => 'Who owns the ranking when you leave?',
				'a' => 'You do from the first day. The register remains in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one area',
			'closeTitle'     => 'Define a risk prioritisation pilot.',
			'closeText'      => 'Share available defect history, current change data and priority journeys. We will propose a focused assessment with clear inputs, recommendations and ownership.',
			'closeLink'      => 'Or discuss the current plan',
		),
		'visual-ai-ui-regression-testing' => array(
			'wp_title'       => 'Visual AI and UI Regression Testing',
			'crumb'          => 'Visual testing',
			'kicker'         => 'AI Powered QA',
			'title'          => 'Visual regression testing against approved <span class="hl">baselines</span>',
			'signalIcon'     => 'i-monitor',
			'signal'         => array( 'Baselines named', 'Diffs reviewed', 'Verdict owned' ),
			'lede'           => 'We establish approved baselines, capture defined screens and viewports and review differences before providing a release recommendation.',
			'covers'         => array( 'Baselines', 'Viewports', 'Diffs', 'Review', 'CI', 'Sign off' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'vis-scope',
			'image'          => 'visual-testing-concept.jpg',
			'imageAlt'       => 'Path from baseline and capture through diff and review to a named visual sign off',
			'triggerTitle'   => 'When visual regression coverage is needed',
			'triggerText'    => 'This service is suitable when functional checks do not cover layout, responsive behaviour or unintended visual changes.',
			'triggers'       => array(
			array(
				'icon'  => 'i-monitor',
				'title' => 'Functional checks pass and the page looks wrong',
				'text'  => 'Buttons still click. Spacing, overlap and missing assets are invisible to the assertion.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'There is no signed baseline',
				'text'  => 'Each run is compared to the last run. Intentional redesigns and defects look the same.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Diffs are ignored because they are noisy',
				'text'  => 'Dynamic content floods the report. Real layout breaks hide in the same pile.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'A viewport was never captured',
				'text'  => 'Desktop looks correct. The journey your users take on a smaller screen was never in the matrix.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service proves layout against signed baselines. Functional Testing remains responsible for behaviour. Accessibility Testing remains responsible for keyboard and reader access.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Surfaces and viewports',
				'text'   => 'Screens, states and viewports named so a desktop pass cannot hide a small screen break.',
				'output' => 'Visual matrix',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Signed baselines',
				'text'   => 'The intended look recorded so later diffs have something honest to compare against.',
				'output' => 'Baseline pack',
			),
			array(
				'icon'   => 'i-monitor',
				'title'  => 'Capture',
				'text'   => 'Runs on the agreed viewports with enough context to replay a mismatch.',
				'output' => 'Capture set',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Diff review',
				'text'   => 'An engineer classifies each material difference as approved change, defect or expected variation.',
				'output' => 'Reviewed diffs',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'CI evidence',
				'text'   => 'Reviewed results visible in the pipeline the team already uses.',
				'output' => 'Pipeline evidence',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Named verdict',
				'text'   => 'Residual visual risk written. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service proves layout against signed baselines. Behaviour belongs to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional Testing</a>. Keyboard and reader access belong to <a href="' . ow_home( '/services/accessibility-testing' ) . '">Accessibility Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your engineering team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + design owner',
				'text'   => 'Agree surfaces, viewports, states and what kind of drift is acceptable.',
				'output' => 'Visual brief',
			),
			array(
				'phase'  => 'Baseline',
				'owner'  => 'QA engineer',
				'text'   => 'Capture and sign the intended look. Unsigned screens do not enter comparison.',
				'output' => 'Signed baselines',
			),
			array(
				'phase'  => 'Capture',
				'owner'  => 'QA team',
				'text'   => 'Run the agreed matrix. Attach diffs with enough context to review them.',
				'output' => 'Diff set',
			),
			array(
				'phase'  => 'Review',
				'owner'  => 'Named QA owner',
				'text'   => 'Accept, update baseline or raise a defect. Residual risk is named.',
				'output' => 'Reviewed verdict',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last accepted change and the next capture.',
				'output' => 'Owned baselines',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the baselines, review record and operating guidance.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can approve baseline changes and maintain the viewport matrix.',
			'ownershipItems' => array(
			array( 'Baseline', 'The intended look is signed, not inferred from the last run.' ),
			array( 'Review', 'Mismatches are accepted or rejected by a named engineer.' ),
			array( 'Noise', 'Dynamic regions are masked in writing, not ignored in panic.' ),
			array( 'Continuity', 'A named owner can explain the last sign off and the next viewport.' ),
		),
			'ownershipIcon'  => 'i-monitor',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include approved baselines, reviewed differences, pipeline evidence and documented residual visual risk.',
			'proofLeft'      => array(
			'kicker' => 'Baseline',
			'title'  => 'Look you intended',
			'text'   => 'Surfaces and viewports recorded so comparison has an honest starting point.',
		),
			'proofMid'       => array(
			'from'  => 'Diff',
			'to'    => 'Review',
			'title' => 'Changes you can judge',
			'text'  => 'Mismatches accepted or raised as defects, with enough context to replay them.',
		),
			'proofRight'     => array(
			'kicker' => 'Sign',
			'title'  => 'Diffs still unsigned',
			'text'   => 'What still differs and whether it is safe to ship.',
		),
			'ecoTitle'       => 'Capture tools follow the product.',
			'ecoText'        => 'We work with the browsers, labs and CI your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Visual runners',
				'tools' => array(
					ow_tool( 'playwright', 'Playwright' ),
					ow_tool( 'selenium', 'Selenium' ),
					ow_tool( 'mabl', 'Mabl' ),
					ow_tool( 'testim', 'Testim' ),
				),
			),
			array(
				't'     => 'Browsers',
				'tools' => array(
					ow_tool( 'chrome', 'Chrome' ),
					ow_tool( 'firefox', 'Firefox' ),
					ow_tool( 'safari', 'Safari' ),
					ow_tool( 'edge', 'Edge' ),
				),
			),
			array(
				't'     => 'Labs',
				'tools' => array(
					ow_tool( 'browserstack', 'BrowserStack' ),
					ow_tool( 'saucelabs', 'Sauce Labs' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
					ow_tool( 'gitlab', 'GitLab CI' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Sign baselines and review diffs for one critical surface in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded visual testing',
				'text'  => 'Engineers work inside your cadence to keep baselines, diffs and verdicts current as the UI changes.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed visual quality',
				'text'  => 'Optimworks operates the agreed capture and reporting while your team retains the UI and the release decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Do you fail the build on every pixel change?',
				'a' => 'No. The scope defines important surfaces, viewports and acceptable variation. An engineer reviews each material difference before it affects the release recommendation.',
			),
			array(
				'q' => 'How is this different from Functional Testing?',
				'a' => 'Functional Testing asks whether behaviour is correct. Visual testing asks whether the layout still matches the signed baseline on the viewports you named.',
			),
			array(
				'q' => 'Can we use the visual tools we already have?',
				'a' => 'Yes. We use your current capture and CI tools when they provide reproducible evidence. We recommend a change only when the existing stack cannot meet the agreed scope.',
			),
			array(
				'q' => 'What viewports do you cover?',
				'a' => 'The matrix in the brief. We do not substitute a single desktop capture for the viewports your users actually use.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'Baselines, reviewed diffs, accepted and rejected changes and a named view of residual visual risk.',
			),
			array(
				'q' => 'Who owns the baselines when you leave?',
				'a' => 'You do from the first day. Baselines and diffs remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one surface',
			'closeTitle'     => 'Define a visual regression pilot.',
			'closeText'      => 'Share the priority screens, required viewports and current pipeline. We will propose a focused scope with baselines, review controls and deliverables.',
			'closeLink'      => 'Or discuss the current UI',
		),
		'test-impact-analysis' => array(
			'wp_title'       => 'Test Impact Analysis',
			'crumb'          => 'Test impact',
			'kicker'         => 'AI Powered QA',
			'title'          => 'Select tests using documented change <span class="hl">impact</span>',
			'signalIcon'     => 'i-compass',
			'signal'         => array( 'Diff mapped', 'Tests selected', 'Skips named' ),
			'lede'           => 'We map changes to relevant tests, record selection reasons and retain skipped coverage for review by your authorised owner.',
			'covers'         => array( 'Diff', 'Map', 'Selection', 'Skips', 'CI', 'Gate' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'tia-scope',
			'image'          => 'impact-testing-concept.jpg',
			'imageAlt'       => 'Path from diff and map through select and run to a named gate',
			'triggerTitle'   => 'When change based test selection is needed',
			'triggerText'    => 'This service is suitable when full suite execution delays delivery or informal test selection leaves coverage decisions undocumented.',
			'triggers'       => array(
			array(
				'icon'  => 'i-gear',
				'title' => 'Every change waits on the whole suite',
				'text'  => 'The gate is slow. People bypass it. The tests that mattered never ran on the change that needed them.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Skips are tribal knowledge',
				'text'  => 'Someone knows which tests to run. The next engineer cannot see why a test was left out.',
			),
			array(
				'icon'  => 'i-cloud',
				'title' => 'The map is missing',
				'text'  => 'Code and tests are not linked. Selection is a guess dressed as optimisation.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'A relevant test was the one you skipped',
				'text'  => 'The change touched a path the suite still covers, but the selector never knew.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service selects tests for a given change. Predictive risk ranks areas for the cycle. Automation Testing remains the runner.',
			'scope'          => array(
			array(
				'icon'   => 'i-book',
				'title'  => 'Change intake',
				'text'   => 'The diff, the services it touches and the journeys whose failure would cost the most.',
				'output' => 'Change brief',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Impact map',
				'text'   => 'Code, tests and known gaps written so selection has something honest to follow.',
				'output' => 'Impact map',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Selection',
				'text'   => 'Tests that can be affected are run. Tests that cannot are skipped in writing.',
				'output' => 'Selected set',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named skips',
				'text'   => 'Every skip has a reason. Missing map links are residual risk, not hidden savings.',
				'output' => 'Skip list',
			),
			array(
				'icon'   => 'i-cloud',
				'title'  => 'CI on the change',
				'text'   => 'Selection travels with the pull request or merge the team already uses.',
				'output' => 'Pipeline evidence',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Gate recommendation',
				'text'   => 'What ran, what was skipped and residual risk. Your authorised owner retains the merge decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service selects tests for a given change. Ranking depth for the cycle belongs to <a href="' . ow_home( '/services/predictive-risk-defect-intelligence' ) . '">Predictive Risk</a>. Running the suite belongs to <a href="' . ow_home( '/services/test-automation-services' ) . '">Automation Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your engineering team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Map',
				'owner'  => 'QA lead + engineering',
				'text'   => 'Link tests to the code and services they can observe. Record gaps in the map.',
				'output' => 'Impact map',
			),
			array(
				'phase'  => 'Select',
				'owner'  => 'QA engineer',
				'text'   => 'For an agreed change, produce the run set and the skip list with reasons.',
				'output' => 'Selection pack',
			),
			array(
				'phase'  => 'Run',
				'owner'  => 'QA team',
				'text'   => 'Execute the selected set in your CI. Capture reproducible evidence.',
				'output' => 'Run evidence',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk from skips and map gaps. Your owner retains the merge decision.',
				'output' => 'Gate recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last selection and the next map gap.',
				'output' => 'Owned map',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the impact map, selection rules and skip history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can maintain the map and explain each test selection decision.',
			'ownershipItems' => array(
			array( 'Map', 'Links between code and tests live in your systems.' ),
			array( 'Skips', 'Every skipped test has a written reason.' ),
			array( 'Gaps', 'Missing links are residual risk, not hidden speed.' ),
			array( 'Continuity', 'A named owner can explain the last selection and the next diff.' ),
		),
			'ownershipIcon'  => 'i-compass',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include an impact map, selected tests, skipped tests with reasons, run evidence and residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Diff',
			'title'  => 'Change made visible',
			'text'   => 'What landed, written against the services and journeys it can touch.',
		),
			'proofMid'       => array(
			'from'  => 'Select',
			'to'    => 'Run',
			'title' => 'Tests you can justify',
			'text'  => 'The set that ran and the set that did not, with reasons attached.',
		),
			'proofRight'     => array(
			'kicker' => 'Gate',
			'title'  => 'Changes still unmapped',
			'text'   => 'Map gaps and skipped tests still visible when you merge.',
		),
			'ecoTitle'       => 'Selection follows the pipeline you already own.',
			'ecoText'        => 'We work with the source, CI and runners your engineering team already uses.',
			'tools'          => array(
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
					ow_tool( 'bitbucket', 'Bitbucket' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
					ow_tool( 'azuredevops', 'Azure DevOps' ),
				),
			),
			array(
				't'     => 'Runners',
				'tools' => array(
					ow_tool( 'playwright', 'Playwright' ),
					ow_tool( 'pytest', 'pytest' ),
					ow_tool( 'junit5', 'JUnit' ),
					ow_tool( 'jest', 'Jest' ),
				),
			),
			array(
				't'     => 'Planning',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'testrail', 'TestRail' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Map and select tests for one critical pull request path in your CI before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded impact analysis',
				'text'  => 'Engineers work inside your cadence to keep the map, selection and skip list current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed selection',
				'text'  => 'Optimworks operates the agreed mapping and reporting while your team retains the suite and the merge decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Will this automatically skip most of the suite?',
				'a' => 'Only when the impact map and approved rules indicate that a test is unrelated to the change. Every skipped test and its reason remain visible.',
			),
			array(
				'q' => 'How is this different from Predictive Risk?',
				'a' => 'Predictive risk ranks product areas for depth this cycle. Test Impact Analysis selects tests for a given change that is already in the diff.',
			),
			array(
				'q' => 'Do you need a perfect dependency graph?',
				'a' => 'No. We start with the map you have and make its gaps visible. A missing link is a named risk, not a hidden skip.',
			),
			array(
				'q' => 'Where does this sit in CI?',
				'a' => 'On the pull request or merge pipeline you already run. The selected set, the skips and the reason travel with the change.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'The change map, the selected tests, the skipped tests with reasons and a named view of residual risk.',
			),
			array(
				'q' => 'Who owns the map when you leave?',
				'a' => 'You do from the first day. Maps and selection rules remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one change',
			'closeTitle'     => 'Define a test impact pilot.',
			'closeText'      => 'Share a representative change, the current suite and CI workflow. We will propose a focused mapping exercise with review controls and deliverables.',
			'closeLink'      => 'Or discuss the current gate',
		),
		'chaos-resilience-engineering' => array(
			'wp_title'       => 'Chaos and Resilience Engineering',
			'crumb'          => 'Chaos testing',
			'kicker'         => 'AI Powered QA',
			'title'          => 'Controlled resilience exercises with recovery <span class="hl">evidence</span>',
			'signalIcon'     => 'i-shield',
			'signal'         => array( 'Scope written', 'Faults agreed', 'Recovery evidenced' ),
			'lede'           => 'We introduce approved faults in an agreed environment, observe service behaviour and document recovery against defined halt and rollback conditions.',
			'covers'         => array( 'Scope', 'Faults', 'Observe', 'Recover', 'Rollback', 'Verdict' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'chaos-scope',
			'image'          => 'chaos-testing-concept.jpg',
			'imageAlt'       => 'Path from agreed scope and fault through observe and recover to a named verdict',
			'triggerTitle'   => 'When resilience evidence is needed',
			'triggerText'    => 'This service is suitable when fallback behaviour, operational signals and recovery procedures have not been exercised under controlled conditions.',
			'triggers'       => array(
			array(
				'icon'  => 'i-cloud',
				'title' => 'Dependencies are assumed to stay up',
				'text'  => 'The product works when every service answers. Timeout and fallback behaviour is not evidenced.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'The runbook has never been used',
				'text'  => 'Recovery steps exist in a document. Nobody has shown they work in the environment you run.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Faults are invented during an incident',
				'text'  => 'The first rehearsal is production. Scope, halt conditions and evidence were never written.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'Degradation is silent',
				'text'  => 'Users see a hang. Operators have no signal that a dependency is late or gone.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service rehearses failure inside a written brief. Performance Testing remains responsible for load. Security Testing remains responsible for authorised access.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Written scope',
				'text'   => 'Environment, window, faults, halt conditions and contacts recorded before anything is disturbed.',
				'output' => 'Signed scope',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Agreed faults',
				'text'   => 'Only the named failure modes. Typical examples are instance loss, a slow dependency or a network interruption.',
				'output' => 'Fault list',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Observation',
				'text'   => 'What users, operators and monitors saw while the fault was present.',
				'output' => 'Observation pack',
			),
			array(
				'icon'   => 'i-cloud',
				'title'  => 'Recovery',
				'text'   => 'How the system returned, how long it took and whether the runbook matched reality.',
				'output' => 'Recovery evidence',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Signals',
				'text'   => 'Whether operators had a usable signal, not only whether the system came back.',
				'output' => 'Signal evidence',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Named verdict',
				'text'   => 'Residual resilience risk. Your authorised owner retains the decision to proceed.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service rehearses agreed failure. Capacity under load belongs to <a href="' . ow_home( '/services/performance-load-testing' ) . '">Performance Testing</a>. Authorised access belongs to <a href="' . ow_home( '/services/security-penetration-testing' ) . '">Security Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your operations owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + operations owner',
				'text'   => 'Agree environment, window, faults, halt conditions and who can stop the run.',
				'output' => 'Rules of the run',
			),
			array(
				'phase'  => 'Prepare',
				'owner'  => 'QA engineer',
				'text'   => 'Stage monitors, contacts and rollback. Confirm the fault list has not grown.',
				'output' => 'Ready brief',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Introduce only the agreed faults. Capture observations and recovery.',
				'output' => 'Run evidence',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Record whether the runbook held.',
				'output' => 'Resilience recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last run and the next agreed fault.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the approved scope, observations and recovery record.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can repeat the exercise safely and explain the remaining resilience risk.',
			'ownershipItems' => array(
			array( 'Authorisation', 'Nothing is disturbed outside a written agreement.' ),
			array( 'Halt', 'A named person can stop the run.' ),
			array( 'Evidence', 'Observations and recovery are replayable.' ),
			array( 'Continuity', 'A named owner can explain the last verdict and the next fault.' ),
		),
			'ownershipIcon'  => 'i-shield',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include the approved fault plan, observations, recovery timing, runbook findings and residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Scope',
			'title'  => 'Written before the run',
			'text'   => 'Environment, faults and halt conditions recorded so the exercise cannot drift.',
		),
			'proofMid'       => array(
			'from'  => 'Fault',
			'to'    => 'Recover',
			'title' => 'Behaviour you can replay',
			'text'  => 'What degraded, what recovered and whether operators had a signal.',
		),
			'proofRight'     => array(
			'kicker' => 'Verdict',
			'title'  => 'Faults still unproven',
			'text'   => 'What still fails when a part of the system is late or gone.',
		),
			'ecoTitle'       => 'Platforms follow the system you already run.',
			'ecoText'        => 'We work with the runtime, monitors and delivery tools your operations team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Runtime',
				'tools' => array(
					ow_tool( 'kubernetes', 'Kubernetes' ),
					ow_tool( 'docker', 'Docker' ),
				),
			),
			array(
				't'     => 'Observability',
				'tools' => array(
					ow_tool( 'prometheus', 'Prometheus' ),
					ow_tool( 'grafana', 'Grafana' ),
					ow_tool( 'datadog', 'Datadog' ),
				),
			),
			array(
				't'     => 'Delivery',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'gitlab', 'GitLab' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
			array(
				't'     => 'Cloud',
				'tools' => array(
					ow_tool( 'googlecloud', 'Google Cloud' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Rehearse one agreed fault in a representative environment before committing to a broader programme.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded resilience testing',
				'text'  => 'Engineers work inside your cadence to keep agreed faults, observations and runbooks current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed resilience quality',
				'text'  => 'Optimworks operates the agreed rehearsals and reporting while your team retains the system and the go live decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Do you run this in production?',
				'a' => 'We prefer a representative environment. If production is required, the written plan defines the window, affected components, safeguards, rollback steps and authority to stop the exercise.',
			),
			array(
				'q' => 'Is this the same as a penetration test?',
				'a' => 'No. Security testing asks whether access that should be refused is refused. Chaos testing asks whether the system degrades and recovers under an agreed fault. The two services answer different questions.',
			),
			array(
				'q' => 'What kinds of fault do you introduce?',
				'a' => 'Only faults approved in the written scope, such as instance loss, a slow dependency or a network interruption in the agreed environment.',
			),
			array(
				'q' => 'How is this different from Performance Testing?',
				'a' => 'Performance Testing asks whether behaviour holds under an agreed load. Chaos testing asks whether behaviour holds when a part of the system is not there or is late.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'The agreed faults, observations, recovery evidence and a named view of residual resilience risk.',
			),
			array(
				'q' => 'Who owns the findings when you leave?',
				'a' => 'You do from the first day. Evidence remains in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one fault',
			'closeTitle'     => 'Define a controlled resilience pilot.',
			'closeText'      => 'Share the priority dependency, current runbook and target environment. We will propose an approved fault, safeguards and evidence package.',
			'closeLink'      => 'Or discuss the current resilience risk',
		),
		'ai-generated-code-validation' => array(
			'wp_title'       => 'AI Generated Code Validation',
			'crumb'          => 'AI code validation',
			'kicker'         => 'Testing AI Applications',
			'title'          => 'QA and security review of AI authored code before <span class="hl">merge</span>',
			'signalIcon'     => 'i-shield',
			'signal'         => array( 'Diffs reviewed', 'Edges exercised', 'Gate named' ),
			'lede'           => 'We review AI authored changes for functional correctness, edge cases, test quality and scoped security concerns before your engineering owner decides whether to merge.',
			'covers'         => array( 'Diffs', 'Correctness', 'Edge cases', 'Security', 'Tests', 'Gate' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'aigc-scope',
			'image'          => 'aicode-testing-concept.jpg',
			'imageAlt'       => 'Path from AI authored diff through review, edge cases and security to a named gate',
			'triggerTitle'   => 'When AI authored changes need independent review',
			'triggerText'    => 'This service is suitable when generated changes increase review volume or require additional evidence for correctness, permissions, data handling and tests.',
			'triggers'       => array(
			array(
				'icon'  => 'i-bot',
				'title' => 'Suggestions merge because they compile',
				'text'  => 'The change looks tidy. Edge cases, permissions and error paths were never exercised.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Review volume exceeds team capacity',
				'text'  => 'AI authored changes arrive faster than reviewers can assess assumptions, edge cases and test quality.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'Security relevant behaviour lacks evidence',
				'text'  => 'Authentication, permissions, data handling and secrets need explicit checks rather than reliance on generated explanations.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Generated tests lack independent review',
				'text'  => 'Tests can repeat the same assumptions as the generated code and leave the original gap undetected.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'This service provides QA and security focused review of AI authored changes. GenAI Application Testing covers AI features and formal penetration testing remains a separately authorised security engagement.',
			'scope'          => array(
			array(
				'icon'   => 'i-book',
				'title'  => 'Change intake',
				'text'   => 'AI authored diffs identified so review effort follows that risk, not every line in the repository.',
				'output' => 'Review queue',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Correctness',
				'text'   => 'Does the change do what the story asked, including the paths the prompt never mentioned.',
				'output' => 'Correctness notes',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Edge cases',
				'text'   => 'Empty input, retries, ordering, timeouts and permission boundaries exercised.',
				'output' => 'Edge evidence',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Security focused QA review',
				'text'   => 'We review authentication, permissions, input handling, data exposure and secret handling within the agreed change. This does not replace formal penetration testing.',
				'output' => 'Security review notes',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Tests that actually fail',
				'text'   => 'Generated tests checked so they can fail when the product is wrong.',
				'output' => 'Test review',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named gate',
				'text'   => 'A recommendation on residual risk. Your authorised owner retains the merge decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service reviews AI authored code before merge. Features the product ships as AI belong to <a href="' . ow_home( '/services/genai-llm-application-testing' ) . '">GenAI and LLM Application Testing</a>. Authorised access testing belongs to <a href="' . ow_home( '/services/security-penetration-testing' ) . '">Security Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your engineering team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + engineering owner',
				'text'   => 'Agree which repos, which AI tools and which change types enter the review queue.',
				'output' => 'Review brief',
			),
			array(
				'phase'  => 'Review',
				'owner'  => 'Experienced QA engineer',
				'text'   => 'Read the AI authored change for correctness, edges, security and tests.',
				'output' => 'Review notes',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run or add the checks needed to evidence a finding. Capture enough context to fix it.',
				'output' => 'Evidence',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Issue a named recommendation. Residual risk stays visible.',
				'output' => 'Gate recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last blocked change and the next queue.',
				'output' => 'Owned gate',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives findings, evidence and the review decision history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can operate the review queue and explain open risks.',
			'ownershipItems' => array(
			array( 'Queue', 'AI authored change is identifiable in your repository.' ),
			array( 'Notes', 'Findings live with the pull request, not in a private chat.' ),
			array( 'Tests', 'Generated tests are reviewed so they can fail.' ),
			array( 'Continuity', 'A named owner can explain the last recommendation and the next diff.' ),
		),
			'ownershipIcon'  => 'i-shield',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include reviewed changes, reproducible findings, remediation context, decision status and residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Diff',
			'title'  => 'AI authored work made visible',
			'text'   => 'The change is in the queue because a model wrote it, not because it looked suspicious.',
		),
			'proofMid'       => array(
			'from'  => 'Review',
			'to'    => 'Evidence',
			'title' => 'Findings you can fix',
			'text'  => 'Correctness, edges and security notes with enough context to act.',
		),
			'proofRight'     => array(
			'kicker' => 'Gate',
			'title'  => 'Diffs still unsigned',
			'text'   => 'What still concerns us, to support your release decision.',
		),
			'ecoTitle'       => 'Review sits in the repository you already own.',
			'ecoText'        => 'We work with the source, review and CI tools your engineering team already uses.',
			'tools'          => array(
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
					ow_tool( 'bitbucket', 'Bitbucket' ),
				),
			),
			array(
				't'     => 'Assistants in the wild',
				'tools' => array(
					ow_tool( 'githubcopilot', 'GitHub Copilot' ),
					ow_tool( 'anthropic', 'Anthropic' ),
				),
			),
			array(
				't'     => 'Quality gates',
				'tools' => array(
					ow_tool( 'sonar', 'Sonar' ),
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'pytest', 'pytest' ),
					ow_tool( 'playwright', 'Playwright' ),
					ow_tool( 'junit5', 'JUnit' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Review AI authored changes in one repository before committing to a broader gate.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded code validation',
				'text'  => 'Engineers work inside your pull requests to keep review, evidence and recommendations current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed AI code gate',
				'text'  => 'Optimworks operates the agreed review while your team retains the repos and the merge decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Is this the same as enabling a copilot?',
				'a' => 'No. This service independently reviews code produced with an assistant before merge. It does not provide or configure a coding assistant.',
			),
			array(
				'q' => 'How is this different from ordinary code review?',
				'a' => 'The review applies additional attention to assumptions, missing edge cases, permissions and tests commonly obscured by plausible generated code.',
			),
			array(
				'q' => 'Do you block every AI authored commit?',
				'a' => 'No. We provide findings, supporting evidence and a recommendation. Your authorised engineering owner retains the merge decision.',
			),
			array(
				'q' => 'Will you review human written code too?',
				'a' => 'When it lands in the same change, yes. The service is scoped to AI authored work as the primary risk. Mixed diffs are reviewed as mixed diffs.',
			),
			array(
				'q' => 'Is this a penetration test?',
				'a' => 'No. This is a QA and security focused code review. It checks scoped concerns such as permissions, input handling, data exposure and secret handling. Formal penetration testing is a separate engagement with its own authorised scope and methods.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'You receive review findings, supporting test evidence, remediation context, decision status and a residual risk summary.',
			),
			array(
				'q' => 'Who owns the gate when you leave?',
				'a' => 'You do from the first day. Review notes remain in your repository. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one repository',
			'closeTitle'     => 'Define an AI code review pilot.',
			'closeText'      => 'Share the repository, development workflow and representative AI authored changes. We will propose a focused review scope, evidence requirements and ownership model.',
			'closeLink'      => 'Or discuss the current diffs',
		),
		'genai-llm-application-testing' => array(
			'wp_title'       => 'GenAI and LLM Application Testing',
			'crumb'          => 'GenAI testing',
			'kicker'         => 'Testing AI Applications',
			'title'          => 'LLM feature testing against defined acceptance <span class="hl">criteria</span>',
			'signalIcon'     => 'i-brain',
			'signal'         => array( 'Bar named', 'Outputs evidenced', 'Risk written' ),
			'lede'           => 'We test output quality, grounding, consistency and safety behaviour on the AI features in your product and provide traces for investigation.',
			'covers'         => array( 'Output', 'Grounding', 'Consistency', 'Safety', 'Traces', 'Release' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'genai-scope',
			'image'          => 'genai-testing-concept.jpg',
			'imageAlt'       => 'Path from prompt and output through grounding and safety to a named readiness bar',
			'triggerTitle'   => 'When AI feature assurance is needed',
			'triggerText'    => 'This service is suitable when AI features need explicit acceptance criteria, reproducible evaluation and documented release risk.',
			'triggers'       => array(
			array(
				'icon'  => 'i-brain',
				'title' => 'The happy prompt is the only prompt',
				'text'  => 'Demos use a clean question. Real users paraphrase, omit context and ask for things the product must refuse.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Nobody can replay why an answer appeared',
				'text'  => 'Traces are missing. The next engineer cannot see retrieval, tools or the prompt that produced the output.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'Safety is a policy document',
				'text'  => 'The product should refuse some asks. Those refusals are not evidenced on the running feature.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'The same question does not hold still',
				'text'  => 'Outputs drift across runs and versions. There is no named bar for consistency.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service tests user facing AI features. Prompt and Hallucination Testing covers detailed grounding assessment and Agent Testing covers multi step tool use.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Acceptance criteria',
				'text'   => 'We define correct output, required refusals and acceptable variation for each feature in scope.',
				'output' => 'Acceptance criteria',
			),
			array(
				'icon'   => 'i-brain',
				'title'  => 'Output and consistency',
				'text'   => 'Answers exercised across paraphrases and repeats so a lucky demo is not the evidence.',
				'output' => 'Output evidence',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Grounding',
				'text'   => 'Whether answers stay inside the sources the product claims to use.',
				'output' => 'Grounding results',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Safety behaviour',
				'text'   => 'Refusals, escalation and unsafe asks checked on the running feature.',
				'output' => 'Safety results',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Traces',
				'text'   => 'Prompt, retrieval and tools captured so a failure can be replayed.',
				'output' => 'Trace pack',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual risk against the bar. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests AI features inside the product. Grounding and invented answers as a specialised slice belong to <a href="' . ow_home( '/services/prompt-hallucination-testing' ) . '">Prompt and Hallucination Testing</a>. Multi step tool use belongs to <a href="' . ow_home( '/services/ai-agent-testing' ) . '">AI Agent Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your product owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Agree features, users, refusals and what good enough means.',
				'output' => 'Bar brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build cases for output, grounding, consistency and safety. Drafts remain subject to review.',
				'output' => 'Reviewed cases',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run against the live feature. Capture traces when an output fails the bar.',
				'output' => 'Results and traces',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last bar and the next feature.',
				'output' => 'Owned bar',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the criteria, cases, traces and decision history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can repeat the evaluation and assess later model or prompt changes.',
			'ownershipItems' => array(
			array( 'Bar', 'Correct, refused and good enough are written.' ),
			array( 'Traces', 'A failed output includes enough context to reproduce it.' ),
			array( 'Cases', 'The pack lives in your systems.' ),
			array( 'Continuity', 'A named owner can explain the last recommendation and the next change.' ),
		),
			'ownershipIcon'  => 'i-brain',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include acceptance criteria, reviewed cases, results, reproducible traces and documented residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Bar',
			'title'  => 'Written before cases grow',
			'text'   => 'What must hold, what must be refused and what is deferred.',
		),
			'proofMid'       => array(
			'from'  => 'Output',
			'to'    => 'Trace',
			'title' => 'Failures you can replay',
			'text'  => 'Prompt, retrieval and tools captured when the bar is missed.',
		),
			'proofRight'     => array(
			'kicker' => 'Ready',
			'title'  => 'Outputs still unsigned',
			'text'   => 'What still fails, to support your release decision.',
		),
			'ecoTitle'       => 'Harnesses follow the product you already ship.',
			'ecoText'        => 'We work with the model, orchestration and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Models and orchestration',
				'tools' => array(
					ow_tool( 'openai', 'OpenAI' ),
					ow_tool( 'anthropic', 'Anthropic' ),
					ow_tool( 'huggingface', 'Hugging Face' ),
					ow_tool( 'langchain', 'LangChain' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'pytest', 'pytest' ),
					ow_tool( 'python', 'Python' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Name a bar and exercise one AI feature in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded GenAI testing',
				'text'  => 'Engineers work inside your cadence to keep the bar, traces and evidence current as prompts change.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed AI feature quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the product and the release decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Do you test the model or the product around it?',
				'a' => 'We test the product behaviour you expose to users, including prompts, retrieval, tool interactions and outputs, against agreed acceptance criteria.',
			),
			array(
				'q' => 'How is this different from Prompt and Hallucination Testing?',
				'a' => 'Prompt and hallucination testing is the specialised slice for grounded versus invented answers. This service is the broader bar across output, consistency, safety and release evidence.',
			),
			array(
				'q' => 'Will you quote a model accuracy percentage?',
				'a' => 'No. We define relevant behaviours and acceptance criteria for your use case, record results and document residual risk.',
			),
			array(
				'q' => 'Can you work with the evaluation harness we already have?',
				'a' => 'Yes. We start with your prompts, traces and checks when they can produce reproducible evidence.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'The named bar, cases, traces, findings and a recommendation your authorised owner can use at release.',
			),
			array(
				'q' => 'Who owns the bar when you leave?',
				'a' => 'You do from the first day. Cases and evidence remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one feature',
			'closeTitle'     => 'Define an AI feature testing pilot.',
			'closeText'      => 'Share the feature, current prompts, available traces and priority risks. We will propose a focused scope with acceptance criteria and deliverables.',
			'closeLink'      => 'Or discuss the current AI features',
		),
		'ai-agent-testing' => array(
			'wp_title'       => 'AI Agent Testing',
			'crumb'          => 'Agent testing',
			'kicker'         => 'Testing AI Applications',
			'title'          => 'Agent testing for task completion, tool use and <span class="hl">control</span>',
			'signalIcon'     => 'i-bot',
			'signal'         => array( 'Tasks named', 'Tools evidenced', 'Loops halted' ),
			'lede'           => 'We test agents against defined tasks, permitted tools, expected side effects, recovery behaviour, retry limits and halt conditions.',
			'covers'         => array( 'Tasks', 'Tools', 'Loops', 'Halt', 'Traces', 'Verdict' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'agent-scope',
			'image'          => 'agent-testing-concept.jpg',
			'imageAlt'       => 'Path from task and tool through loop and fail to a named done verdict',
			'triggerTitle'   => 'When agent behaviour needs independent testing',
			'triggerText'    => 'This service is suitable when an agent performs multi step work, invokes tools or creates side effects that require evidence and control.',
			'triggers'       => array(
			array(
				'icon'  => 'i-bot',
				'title' => 'The agent talks well and does not finish the job',
				'text'  => 'A summary looks complete. The tool never ran, or ran the wrong one.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Tools are trusted because they were wired',
				'text'  => 'Allowed and refused tools are not evidenced. Side effects are discovered later.',
			),
			array(
				'icon'  => 'i-pulse',
				'title' => 'Loops have no halt',
				'text'  => 'Retries continue. Nobody can show when the agent must stop and hand back to a person.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Traces are missing',
				'text'  => 'The next engineer cannot see the task, the tools or why the run ended.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service tests multi step task execution. Conversational Testing covers dialogue and GenAI Application Testing covers output acceptance criteria.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Named tasks',
				'text'   => 'Jobs the agent must finish, written so a fluent message cannot hide an incomplete run.',
				'output' => 'Task set',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Allowed tools',
				'text'   => 'Which tools may be used, which must be refused and what side effects are in scope.',
				'output' => 'Tool brief',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Loops and halt',
				'text'   => 'Retries, cycles and the condition that must stop the run.',
				'output' => 'Halt evidence',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Failure recovery',
				'text'   => 'What happens when a tool fails or the task cannot be completed.',
				'output' => 'Recovery results',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Traces',
				'text'   => 'Task, tools and halt captured so the run can be reproduced.',
				'output' => 'Trace pack',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named verdict',
				'text'   => 'Residual risk. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests multi step agents. Dialogue belongs to <a href="' . ow_home( '/services/conversational-ai-testing' ) . '">Conversational AI Testing</a>. Output quality of a single feature belongs to <a href="' . ow_home( '/services/genai-llm-application-testing' ) . '">GenAI and LLM Application Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your product owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Agree tasks, allowed tools, environments and halt conditions.',
				'output' => 'Agent brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build cases for completion, refusal, loop and recovery. Drafts remain subject to review.',
				'output' => 'Reviewed cases',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run agreed tasks. Capture traces when a tool, loop or halt fails.',
				'output' => 'Results and traces',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last run and the next task.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the task criteria, traces and decision history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can repeat the cases and assess later agent changes.',
			'ownershipItems' => array(
			array( 'Tasks', 'What finished looks like is written.' ),
			array( 'Tools', 'Allowed and refused tools are evidenced.' ),
			array( 'Halt', 'A run can be shown to have stopped for a reason.' ),
			array( 'Continuity', 'A named owner can explain the last verdict and the next loop.' ),
		),
			'ownershipIcon'  => 'i-bot',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include task criteria, tool permissions, execution traces, recovery results, halt evidence and residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Task',
			'title'  => 'Done written in advance',
			'text'   => 'What completion means, before the agent starts talking.',
		),
			'proofMid'       => array(
			'from'  => 'Tool',
			'to'    => 'Halt',
			'title' => 'Work you can replay',
			'text'  => 'Tools used, loops seen and the reason the run stopped.',
		),
			'proofRight'     => array(
			'kicker' => 'Done',
			'title'  => 'Tasks still unfinished',
			'text'   => 'What still fails to complete, to support your release decision.',
		),
			'ecoTitle'       => 'Orchestration follows the agent you already ship.',
			'ecoText'        => 'We work with the model, tool and delivery stack your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Orchestration',
				'tools' => array(
					ow_tool( 'langchain', 'LangChain' ),
					ow_tool( 'huggingface', 'Hugging Face' ),
					ow_tool( 'openai', 'OpenAI' ),
					ow_tool( 'anthropic', 'Anthropic' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'pytest', 'pytest' ),
					ow_tool( 'python', 'Python' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one named agent task, including tools and halt, in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded agent testing',
				'text'  => 'Engineers work inside your cadence to keep tasks, traces and halt evidence current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed agent quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the agent and the release decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Is this the same as chatbot testing?',
				'a' => 'No. Conversational testing covers dialogue and escalation. Agent testing covers multi step work: tools, loops, completion and halt.',
			),
			array(
				'q' => 'Do you let agents run unconstrained?',
				'a' => 'No. The scope defines permitted tools, environments, side effects and halt conditions. Testing stays within that written agreement.',
			),
			array(
				'q' => 'How is this different from GenAI application testing?',
				'a' => 'GenAI testing is the bar for outputs the product shows a user. Agent testing is the bar for work the product does across steps and tools.',
			),
			array(
				'q' => 'What does a pass look like?',
				'a' => 'A pass requires the task outcome, permitted tool use, expected side effects and halt conditions to meet the agreed criteria.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'The task set, traces of tool use, halt evidence and a named recommendation.',
			),
			array(
				'q' => 'Who owns the traces when you leave?',
				'a' => 'You do from the first day. Traces remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one task',
			'closeTitle'     => 'Define an agent testing pilot.',
			'closeText'      => 'Share a priority task, permitted tools and current traces. We will propose a focused scope with completion criteria, safeguards and deliverables.',
			'closeLink'      => 'Or discuss the current agents',
		),
		'prompt-hallucination-testing' => array(
			'wp_title'       => 'Prompt and Hallucination Testing',
			'crumb'          => 'Prompt testing',
			'kicker'         => 'Testing AI Applications',
			'title'          => 'Grounding and hallucination testing for AI <span class="hl">responses</span>',
			'signalIcon'     => 'i-compass',
			'signal'         => array( 'Sources named', 'Inventions caught', 'Refusals evidenced' ),
			'lede'           => 'We compare AI responses with agreed sources, test prompt variations and refusals and provide traces for investigation.',
			'covers'         => array( 'Prompts', 'Grounding', 'Inventions', 'Refusals', 'Traces', 'Bar' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'prompt-scope',
			'image'          => 'prompt-testing-concept.jpg',
			'imageAlt'       => 'Path from ask and ground through invented answers and refusals to a named bar',
			'triggerTitle'   => 'When grounding assurance is needed',
			'triggerText'    => 'This service is suitable when users rely on AI responses that should remain within approved knowledge sources and refusal rules.',
			'triggers'       => array(
			array(
				'icon'  => 'i-book',
				'title' => 'The answer sounds sourced and is not',
				'text'  => 'Citations look plausible. Nobody can show the document they came from.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Only the demo prompt was tried',
				'text'  => 'Paraphrases, missing context and out of scope asks were never exercised.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'Refusals exist only in a policy',
				'text'  => 'The product should decline some asks. Those declines are not evidenced on the running feature.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Nobody can replay the last invented answer',
				'text'  => 'Traces are missing. The next engineer cannot see the prompt or the retrieval.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service assesses grounding, unsupported claims and refusals. GenAI Application Testing covers broader output criteria and Conversational Testing covers dialogue journeys.',
			'scope'          => array(
			array(
				'icon'   => 'i-book',
				'title'  => 'Named sources',
				'text'   => 'What the feature is allowed to use as ground truth, written before cases grow.',
				'output' => 'Source bar',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Prompt variation',
				'text'   => 'Paraphrases, missing context and follow ons exercised so a demo ask is not the only evidence.',
				'output' => 'Prompt set',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Invented answers',
				'text'   => 'Outputs checked against the named sources so confidence is not treated as correctness.',
				'output' => 'Invention findings',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Refusals',
				'text'   => 'Asks that should be declined, evidenced on the running feature.',
				'output' => 'Refusal results',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Traces',
				'text'   => 'Prompt, retrieval and answer captured so a finding can be replayed.',
				'output' => 'Trace pack',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual grounding risk. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests grounding and refusals. The broader output bar belongs to <a href="' . ow_home( '/services/genai-llm-application-testing' ) . '">GenAI and LLM Application Testing</a>. Dialogue belongs to <a href="' . ow_home( '/services/conversational-ai-testing' ) . '">Conversational AI Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your product owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Agree sources, in scope asks, refusals and what invented looks like.',
				'output' => 'Grounding brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build cases for paraphrase, missing context, invention and refusal. Drafts remain subject to review.',
				'output' => 'Reviewed cases',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run against the live feature. Capture traces when an answer leaves the sources.',
				'output' => 'Results and traces',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last invention and the next source change.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the source criteria, cases, traces and decision history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can repeat the assessment as prompts and knowledge sources change.',
			'ownershipItems' => array(
			array( 'Sources', 'Allowed ground truth is written.' ),
			array( 'Traces', 'An invented answer includes enough context to reproduce it.' ),
			array( 'Refusals', 'Declined asks are evidenced, not assumed.' ),
			array( 'Continuity', 'A named owner can explain the last finding and the next ask.' ),
		),
			'ownershipIcon'  => 'i-compass',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include approved source criteria, prompt cases, response traces, unsupported claim findings, refusal results and residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Ask',
			'title'  => 'Variation written',
			'text'   => 'Paraphrases and missing context, not only the demo prompt.',
		),
			'proofMid'       => array(
			'from'  => 'Ground',
			'to'    => 'Invent',
			'title' => 'Answers you can check',
			'text'  => 'Outputs compared to named sources, with traces attached.',
		),
			'proofRight'     => array(
			'kicker' => 'Bar',
			'title'  => 'Answers still ungrounded',
			'text'   => 'What still invents or fails to refuse, to support your release decision.',
		),
			'ecoTitle'       => 'Knowledge follows the product you already ship.',
			'ecoText'        => 'We work with the model, retrieval and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Models',
				'tools' => array(
					ow_tool( 'openai', 'OpenAI' ),
					ow_tool( 'anthropic', 'Anthropic' ),
					ow_tool( 'huggingface', 'Hugging Face' ),
					ow_tool( 'langchain', 'LangChain' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'pytest', 'pytest' ),
					ow_tool( 'python', 'Python' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove grounding and refusals on one AI feature in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded grounding testing',
				'text'  => 'Engineers work inside your cadence to keep sources, cases and traces current as knowledge changes.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed grounding quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the knowledge and the release decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Do you publish jailbreak recipes?',
				'a' => 'No. We exercise agreed prompts and refusal behaviour within a written scope. The deliverables are findings, traces and remediation context.',
			),
			array(
				'q' => 'How is this different from GenAI application testing?',
				'a' => 'GenAI testing is the broader bar. This service is the specialised slice for grounding, invented answers and asks that should be refused.',
			),
			array(
				'q' => 'Will you quote a hallucination rate?',
				'a' => 'No. We assess responses against agreed sources and use cases, record unsupported output and document residual risk.',
			),
			array(
				'q' => 'What sources do you need?',
				'a' => 'The knowledge the feature claims to use, plus the asks your users actually make. We start with what you already have.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'The grounding bar, cases, traces, invented answer findings and a named recommendation.',
			),
			array(
				'q' => 'Who owns the cases when you leave?',
				'a' => 'You do from the first day. Cases remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one feature',
			'closeTitle'     => 'Define a grounding assessment pilot.',
			'closeText'      => 'Share the feature, approved knowledge sources and representative prompts. We will propose a focused scope with grounding criteria and deliverables.',
			'closeLink'      => 'Or discuss the current answers',
		),
		'conversational-ai-testing' => array(
			'wp_title'       => 'Conversational AI Testing',
			'crumb'          => 'Conversational testing',
			'kicker'         => 'Testing AI Applications',
			'title'          => 'Chat and voice testing through human <span class="hl">handoff</span>',
			'signalIcon'     => 'i-users',
			'signal'         => array( 'Intents named', 'Turns evidenced', 'Handoffs proven' ),
			'lede'           => 'We test intent handling, context across turns, channel specific conditions and escalation to a person with reproducible transcripts.',
			'covers'         => array( 'Intent', 'Turns', 'Edges', 'Voice', 'Escalation', 'Close' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'conv-scope',
			'image'          => 'conversational-testing-concept.jpg',
			'imageAlt'       => 'Path from intent and turn through edge and escalate to a named close',
			'triggerTitle'   => 'When conversation journeys need structured testing',
			'triggerText'    => 'This service is suitable when chat or voice interactions require reliable intent handling, context retention and escalation.',
			'triggers'       => array(
			array(
				'icon'  => 'i-users',
				'title' => 'The demo intent is the only intent',
				'text'  => 'Happy phrasing works. Typos, mixed goals and language variation were never exercised.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Multi turn context is assumed',
				'text'  => 'The second question forgets the first. Nobody captured the transcript.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'Escalation never happens',
				'text'  => 'A person should take over. The bot loops instead. Handoff is a slide, not evidence.',
			),
			array(
				'icon'  => 'i-pulse',
				'title' => 'Voice is trusted because chat passed',
				'text'  => 'The same journey on a call fails recognition, barge in or silence handling.',
			),
		),
			'scopeTitle'     => 'Scope and deliverables',
			'scopeText'      => 'The service tests intent, conversation turns and escalation. Agent Testing covers multi step tool use and GenAI Application Testing covers output acceptance criteria.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Intent map',
				'text'   => 'What users try to do, written so a demo phrase is not the only coverage.',
				'output' => 'Intent map',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Multi turn journeys',
				'text'   => 'Context carried across turns, including correction and change of mind.',
				'output' => 'Turn evidence',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Edges',
				'text'   => 'Silence, interruption, mixed language and unknown asks documented with the observed behaviour.',
				'output' => 'Edge results',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Escalation',
				'text'   => 'When a person must take over, evidenced including what is handed across.',
				'output' => 'Handoff results',
			),
			array(
				'icon'   => 'i-cloud',
				'title'  => 'Channels',
				'text'   => 'Chat, voice or both, as named in the brief.',
				'output' => 'Channel evidence',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual dialogue risk. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests conversation. Multi step tool use belongs to <a href="' . ow_home( '/services/ai-agent-testing' ) . '">AI Agent Testing</a>. Grounding of answers belongs to <a href="' . ow_home( '/services/prompt-hallucination-testing' ) . '">Prompt and Hallucination Testing</a>.',
			'deliveryTitle'  => 'Delivery method and responsibilities',
			'deliveryText'   => 'Each phase has a named owner and an output your product owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Agree channels, intents, escalation rules and what a finished conversation means.',
				'output' => 'Dialogue brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build cases for intent, turns, edges and handoff. Drafts remain subject to review.',
				'output' => 'Reviewed cases',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run conversations. Capture transcripts when intent, context or escalation fails.',
				'output' => 'Transcripts and defects',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last handoff and the next intent.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Client ownership and continuity',
			'ownershipHead'  => 'Your team receives the intent map, cases, transcripts and decision history.',
			'ownershipText'  => 'The engagement is complete when your nominated owner can repeat the journeys and maintain escalation coverage.',
			'ownershipItems' => array(
			array( 'Intents', 'What users try to do is written.' ),
			array( 'Transcripts', 'A failed conversation can be replayed.' ),
			array( 'Handoff', 'Escalation is evidenced, not assumed.' ),
			array( 'Continuity', 'A named owner can explain the last close and the next channel.' ),
		),
			'ownershipIcon'  => 'i-users',
			'proofTitle'     => 'Evidence included with the service',
			'proofText'      => 'The deliverables include an intent map, reviewed cases, channel transcripts, escalation evidence, defects and residual risk.',
			'proofLeft'      => array(
			'kicker' => 'Intent',
			'title'  => 'Asks written in advance',
			'text'   => 'What users try to do, including phrasing that is not the demo.',
		),
			'proofMid'       => array(
			'from'  => 'Turn',
			'to'    => 'Escalate',
			'title' => 'Conversations you can replay',
			'text'  => 'Context, edges and handoff captured when the close fails.',
		),
			'proofRight'     => array(
			'kicker' => 'Close',
			'title'  => 'Turns still stuck',
			'text'   => 'What still fails to finish, to support your release decision.',
		),
			'ecoTitle'       => 'Channels follow the product you already ship.',
			'ecoText'        => 'We work with the dialogue, voice and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Dialogue and voice',
				'tools' => array(
					ow_tool( 'twilio', 'Twilio' ),
					ow_tool( 'openai', 'OpenAI' ),
					ow_tool( 'anthropic', 'Anthropic' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'pytest', 'pytest' ),
					ow_tool( 'playwright', 'Playwright' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Engagement options',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one intent, including escalation, in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded conversation testing',
				'text'  => 'Engineers work inside your cadence to keep intents, transcripts and handoffs current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed dialogue quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the bot and the release decision.',
			),
		),
			'faqTitle'       => 'Common questions',
			'faq'            => array(
			array(
				'q' => 'Do you cover voice as well as chat?',
				'a' => 'Yes, when voice is included in the product and engagement scope. Chat and voice are assessed as separate channels.',
			),
			array(
				'q' => 'How is this different from Agent testing?',
				'a' => 'Conversational testing covers dialogue, intent and escalation to a person. Agent testing covers multi step tool use and task completion.',
			),
			array(
				'q' => 'How is this different from Functional Testing?',
				'a' => 'Functional Testing proves journeys as a user completes them. Conversational testing proves the dialogue that sits inside those journeys: intent, turns and handoff.',
			),
			array(
				'q' => 'Will you quote an intent accuracy percentage?',
				'a' => 'No. We assess the agreed intents and journeys, record results by channel and document residual risk.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'The intent map, conversation cases, transcripts, escalation evidence and a named recommendation.',
			),
			array(
				'q' => 'Who owns the cases when you leave?',
				'a' => 'You do from the first day. Cases remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one intent',
			'closeTitle'     => 'Define a conversation testing pilot.',
			'closeText'      => 'Share the channel, priority intents and escalation requirements. We will propose a focused scope with journey criteria and deliverables.',
			'closeLink'      => 'Or discuss the current dialogue',
		),
		'mobile-app-testing' => array(
			'wp_title'       => 'Mobile App Testing',
			'crumb'          => 'Mobile testing',
			'kicker'         => 'Core QA Services',
			'title'          => 'iOS and Android testing on the devices users <span class="hl">have</span>',
			'signalIcon'     => 'i-pulse',
			'signal'         => array( 'Devices named', 'Journeys exercised', 'Store evidenced' ),
			'lede'           => 'iOS and Android journeys tested across an agreed device, OS and network matrix, with reproducible evidence and a clear readiness recommendation.',
			'covers'         => array( 'iOS', 'Android', 'Devices', 'Install', 'Networks', 'Store' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'mob-scope',
			'image'          => 'mobile-testing-concept.jpg',
			'imageAlt'       => 'Mobile path from device and install through journey and network to a store readiness verdict',
			'triggerTitle'   => 'Web testing does not cover device specific behaviour.',
			'triggerText'    => 'Mobile releases need evidence across installation, permissions, OS versions, interruptions and network conditions.',
			'triggers'       => array(
			array(
				'icon'  => 'i-monitor',
				'title' => 'Native behaviour has not been tested',
				'text'  => 'A web journey passes while permission prompts, keyboard behaviour or first launch issues remain undiscovered.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'The device matrix is not linked to results',
				'text'  => 'Devices and OS versions are listed, but results do not show which combinations were exercised against the current build.',
			),
			array(
				'icon'  => 'i-cloud',
				'title' => 'Network conditions are not covered',
				'text'  => 'Journeys pass on office wifi while offline, slow and interrupted sessions remain untested.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Store readiness checks happen too late',
				'text'  => 'Installation, permissions and crash behaviour are discovered during submission rather than before it.',
			),
		),
			'scopeTitle'     => 'Device, OS and network coverage for critical journeys.',
			'scopeText'      => 'The service proves install, native journeys, interruptions and store readiness. Functional Testing remains responsible for expected behaviour above the device.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Device and OS matrix',
				'text'   => 'Platforms, versions and devices recorded so coverage and exclusions are clear before execution.',
				'output' => 'Named matrix',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Install and first launch',
				'text'   => 'Install, upgrade, permissions and first run checked before store submission.',
				'output' => 'Install evidence',
			),
			array(
				'icon'   => 'i-monitor',
				'title'  => 'Native journeys',
				'text'   => 'Critical paths exercised on the device, including orientation, keyboard, notifications and backgrounding.',
				'output' => 'Journey results',
			),
			array(
				'icon'   => 'i-cloud',
				'title'  => 'Network and interruption',
				'text'   => 'Slow, offline and interrupted sessions documented with observed recovery behaviour.',
				'output' => 'Network results',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Crash and stability',
				'text'   => 'Crashes, freezes and ANR style stalls captured with enough context to assign ownership.',
				'output' => 'Stability evidence',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Store readiness',
				'text'   => 'A readiness recommendation describing tested scope, open findings and remaining risk before submission.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests native apps on devices and networks. Expected behaviour across journeys belongs to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional Testing</a>. Repeatable device execution belongs to <a href="' . ow_home( '/services/test-automation-services' ) . '">Automation Testing</a>.',
			'deliveryTitle'  => 'Name the matrix before expanding the run.',
			'deliveryText'   => 'Each phase has a named owner and an output your engineering team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Agree platforms, OS versions, devices, networks and the journeys whose failure would cost the most.',
				'output' => 'Device brief',
			),
			array(
				'phase'  => 'Prepare',
				'owner'  => 'QA engineer',
				'text'   => 'Stage builds, accounts, data and the device set. Record what is in the matrix and what is deferred.',
				'output' => 'Ready matrix',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run agreed journeys on the named devices and networks. Capture reproducible evidence.',
				'output' => 'Findings and evidence',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Retest fixes and issue a named recommendation on residual risk before store submission.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave the matrix, evidence and a named owner on your team who can explain the last result.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Your team keeps the matrix, evidence and retest context.',
			'ownershipHead'  => 'Device failures need enough context to reproduce.',
			'ownershipText'  => 'We document the build, device, OS, steps and observed behaviour so product and engineering teams can investigate and retest.',
			'ownershipItems' => array(
			array( 'Matrix', 'Platforms, versions and devices remain documented for later releases.' ),
			array( 'Builds', 'The binary under test is identified so a later run can use the same one.' ),
			array( 'Evidence', 'A failure includes device, OS, steps and enough context to reproduce it.' ),
			array( 'Continuity', 'A named owner on your team can explain the last result and the next change.' ),
		),
			'ownershipIcon'  => 'i-pulse',
			'proofTitle'     => 'A clear matrix with reproducible device evidence.',
			'proofText'      => 'Generic device counts do not describe your user base. We agree the relevant matrix and report results, exclusions and remaining risk.',
			'proofLeft'      => array(
			'kicker' => 'Matrix',
			'title'  => 'Written before work starts',
			'text'   => 'Platforms, versions and devices recorded so the run cannot drift into an unagreed handset.',
		),
			'proofMid'       => array(
			'from'  => 'Journey',
			'to'    => 'Network',
			'title' => 'Failures you can replay',
			'text'  => 'Device, OS, steps and recovery captured so ownership is clear when a native path breaks.',
		),
			'proofRight'     => array(
			'kicker' => 'Store',
			'title'  => 'Journeys still unproven on device',
			'text'   => 'What held, what failed and residual risk before submission.',
		),
			'ecoTitle'       => 'Devices and runners selected for your product.',
			'ecoText'        => 'We work with the platforms, labs and CI your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Platforms',
				'tools' => array(
					ow_tool( 'apple', 'Apple' ),
					ow_tool( 'android', 'Android' ),
					ow_tool( 'flutter', 'Flutter' ),
					ow_tool( 'firebase', 'Firebase' ),
				),
			),
			array(
				't'     => 'Languages',
				'tools' => array(
					ow_tool( 'swift', 'Swift' ),
					ow_tool( 'xcode', 'Xcode' ),
				),
			),
			array(
				't'     => 'Device labs',
				'tools' => array(
					ow_tool( 'browserstack', 'BrowserStack' ),
					ow_tool( 'saucelabs', 'Sauce Labs' ),
				),
			),
			array(
				't'     => 'Runners and CI',
				'tools' => array(
					ow_tool( 'appium', 'Appium' ),
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
					ow_tool( 'gitlab', 'GitLab CI' ),
				),
			),
		),
			'engageTitle'    => 'Start with a critical native journey.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one critical native journey on the devices you already own before committing to a broader programme.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded mobile testing',
				'text'  => 'Engineers work inside your release cadence to keep the matrix, evidence and store readiness current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed mobile quality',
				'text'  => 'Optimworks operates the agreed matrix and reporting while your team retains the apps and the store decision.',
			),
		),
			'faqTitle'       => 'Agree the matrix before testing begins.',
			'faq'            => array(
			array(
				'q' => 'Do you test on real devices or only simulators?',
				'a' => 'Both have a place. Simulators are useful for early journeys. Store readiness is assessed on real devices and networks for the versions included in the agreed matrix.',
			),
			array(
				'q' => 'Can you cover both iOS and Android?',
				'a' => 'Yes. The brief names the platforms, OS versions and devices. We do not substitute a single platform pass for the matrix you agreed.',
			),
			array(
				'q' => 'How is this different from Functional Testing?',
				'a' => 'Functional Testing establishes expected behaviour across journeys. Mobile testing proves that behaviour on the device, the OS, the network and the store path where a web pass can hide a native failure.',
			),
			array(
				'q' => 'Do you handle store submission checks?',
				'a' => 'We assess the installation, permission, version and crash behaviour a store reviewer and a first time user may encounter. Your team retains the store account and the submission decision.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'The device matrix, findings with enough evidence to reproduce them and a named view of residual risk. Your authorised owner retains the release decision.',
			),
			array(
				'q' => 'Who owns the findings when you leave?',
				'a' => 'You do from the first day. Evidence and the report remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one journey',
			'closeTitle'     => 'Assess one native journey on a real device.',
			'closeText'      => 'Bring the build, target devices and the path that concerns your team. We will define a focused scope for checking behaviour before store submission.',
			'closeLink'      => 'Or discuss the current apps',
		),
		'agile-continuous-testing' => array(
			'wp_title'       => 'Agile and Continuous Testing',
			'crumb'          => 'Agile testing',
			'kicker'         => 'Core QA Services',
			'title'          => 'Testing inside the sprint, not after <span class="hl">it</span>',
			'signalIcon'     => 'i-compass',
			'signal'         => array( 'Stories ranked', 'Work visible', 'Gate signed' ),
			'lede'           => 'QA integrated with your delivery cadence, with risk based scope, evidence in your existing tools and a clear recommendation at the release gate.',
			'covers'         => array( 'Sprints', 'Risk', 'Boards', 'Gates', 'Evidence', 'Sign off' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'agile-scope',
			'image'          => 'agile-testing-concept.jpg',
			'imageAlt'       => 'Agile path from story and risk through sprint and gate to a named sign off',
			'triggerTitle'   => 'Testing starts too late when it sits outside the sprint.',
			'triggerText'    => 'Teams need visible QA work, risk based priorities and release evidence within the same delivery cadence as development.',
			'triggers'       => array(
			array(
				'icon'  => 'i-monitor',
				'title' => 'QA starts after development is complete',
				'text'  => 'Stories close on the board before testing begins, leaving defects and unresolved risk until the end of the sprint.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Testing effort is not based on risk',
				'text'  => 'High cost journeys and cosmetic tickets receive the same attention because the backlog has not been ranked by risk.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Release decisions lack supporting evidence',
				'text'  => 'The tested scope, open defects and remaining risk are not documented clearly for release owners.',
			),
			array(
				'icon'  => 'i-cloud',
				'title' => 'Pipeline status does not explain release risk',
				'text'  => 'Automated checks pass, but the team cannot see what was in scope, what was deferred and what still needs review.',
			),
		),
			'scopeTitle'     => 'Testing planned and delivered within the sprint.',
			'scopeText'      => 'The service places testing inside the sprint and the gate. Functional Testing remains the discipline for journeys. Automation Testing remains the discipline for repeatable execution.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Risk ranked scope',
				'text'   => 'Stories ranked by cost of failure so testing depth follows risk rather than ticket order.',
				'output' => 'Ranked backlog',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Visible on the board',
				'text'   => 'Testing work sits on the same board as development work so status, blockers and ownership remain visible.',
				'output' => 'Shared board',
			),
			array(
				'icon'   => 'i-monitor',
				'title'  => 'In sprint evidence',
				'text'   => 'Journeys exercised while the story is still open, with enough context to reproduce a failure.',
				'output' => 'Sprint evidence',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Gate in the pipeline',
				'text'   => 'The recommendation is linked to the same CI and delivery workflow the team already uses.',
				'output' => 'Gate signal',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'What ran, what failed and residual risk, written for your authorised owner.',
				'output' => 'Sprint recommendation',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Continuity across sprints',
				'text'   => 'A named owner can explain the last gate and the next change without relying on the original tester.',
				'output' => 'Owned cadence',
			),
		),
			'boundary'       => 'This service places testing inside your sprint and gate. Journey proof belongs to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional Testing</a>. Repeatable execution belongs to <a href="' . ow_home( '/services/test-automation-services' ) . '">Automation Testing</a>.',
			'deliveryTitle'  => 'Rank the work before the sprint fills up.',
			'deliveryText'   => 'Each phase has a named owner and an output your delivery team can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Align',
				'owner'  => 'QA lead + delivery owner',
				'text'   => 'Agree cadence, board, gate and how residual risk will be named. Testing does not sit in a parallel process.',
				'output' => 'Operating brief',
			),
			array(
				'phase'  => 'Rank',
				'owner'  => 'QA lead',
				'text'   => 'Rank upcoming stories by cost of failure. Record what will be deep, what will be sampled and what is deferred.',
				'output' => 'Risk ranked scope',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Work the ranked stories inside the sprint. Capture reproducible evidence.',
				'output' => 'Sprint evidence',
			),
			array(
				'phase'  => 'Sign',
				'owner'  => 'Named QA owner',
				'text'   => 'Issue a named recommendation at the gate with scope, defects and residual risk.',
				'output' => 'Gate recommendation',
			),
			array(
				'phase'  => 'Carry',
				'owner'  => 'Named QA owner',
				'text'   => 'Carry residual risk and deferred coverage into the next sprint in writing, not in memory.',
				'output' => 'Carried risk',
			),
		),
			'ownershipTitle' => 'Release context remains visible across sprints.',
			'ownershipHead'  => 'Delivery teams need more than a passing pipeline status.',
			'ownershipText'  => 'We keep the ranked scope, evidence, open risks and recommendation in systems your team can use in the next sprint.',
			'ownershipItems' => array(
			array( 'Board', 'Testing work is visible on the same board as the stories it covers.' ),
			array( 'Gate', 'The recommendation lives with the pipeline, not in a private chat.' ),
			array( 'Evidence', 'A failure includes enough context for another engineer to reproduce it.' ),
			array( 'Continuity', 'A named owner can explain the last sign off and the next ranked slice.' ),
		),
			'ownershipIcon'  => 'i-compass',
			'proofTitle'     => 'Evidence linked to the delivery cadence.',
			'proofText'      => 'Velocity does not describe release risk. We provide ranked scope, reproducible failures, deferred coverage and a clear recommendation.',
			'proofLeft'      => array(
			'kicker' => 'Story',
			'title'  => 'Ranked before the sprint',
			'text'   => 'Cost of failure written so testing depth is a choice, not a habit.',
		),
			'proofMid'       => array(
			'from'  => 'Sprint',
			'to'    => 'Gate',
			'title' => 'Work you can see',
			'text'  => 'Evidence attached to the story and the pipeline so ownership is clear at sign off.',
		),
			'proofRight'     => array(
			'kicker' => 'Sign',
			'title'  => 'Stories still unsigned',
			'text'   => 'What ran, what failed and residual risk for your authorised owner.',
		),
			'ecoTitle'       => 'Planning and delivery tools remain part of your workflow.',
			'ecoText'        => 'We work with the planning, repository and CI tools your delivery team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Planning',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'linear', 'Linear' ),
					ow_tool( 'testrail', 'TestRail' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
					ow_tool( 'bitbucket', 'Bitbucket' ),
				),
			),
			array(
				't'     => 'CI and gates',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
					ow_tool( 'azuredevops', 'Azure DevOps' ),
				),
			),
			array(
				't'     => 'Runners',
				'tools' => array(
					ow_tool( 'playwright', 'Playwright' ),
					ow_tool( 'selenium', 'Selenium' ),
					ow_tool( 'cypress', 'Cypress' ),
				),
			),
		),
			'engageTitle'    => 'Start with a representative sprint.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Sit inside one sprint on your board and prove a ranked scope, evidence and a named gate before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded sprint QA',
				'text'  => 'Engineers work inside your cadence to keep ranking, evidence and sign off current as the product changes.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed quality cadence',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the board and the release decision.',
			),
		),
			'faqTitle'       => 'Agree roles and gates before delivery begins.',
			'faq'            => array(
			array(
				'q' => 'Do you join our existing standups and tools?',
				'a' => 'Yes. We work inside the board, the repository and the cadence you already use. A new ritual is added only when the current one cannot produce a named recommendation.',
			),
			array(
				'q' => 'How is this different from Functional Testing?',
				'a' => 'Functional Testing is the discipline of proving journeys. Agile and continuous testing is how that work sits in the sprint, the gate and the recommendation, rather than arriving as a phase after development.',
			),
			array(
				'q' => 'Will you take tickets from our backlog?',
				'a' => 'Yes. Testing work is visible on the same board as development work. Hidden side lists are not the operating model.',
			),
			array(
				'q' => 'Do you own the release gate?',
				'a' => 'Your authorised owner retains the release decision. Optimworks provides a named recommendation with the tested scope, evidence and residual risk needed to make that decision.',
			),
			array(
				'q' => 'What do we receive each sprint?',
				'a' => 'The risk ranked scope, evidence for what ran, defects that still matter and a named view of residual risk. The format follows your cadence.',
			),
			array(
				'q' => 'Who owns the process when you leave?',
				'a' => 'You do from the first day. Boards, evidence and gates remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one sprint',
			'closeTitle'     => 'Assess testing within one sprint.',
			'closeText'      => 'Bring the board, release gate and stories that concern your team. We will define a focused scope for integrating QA into the cadence.',
			'closeLink'      => 'Or discuss the current cadence',
		),
		'etl-data-pipeline-testing' => array(
			'wp_title'       => 'ETL and Data Pipeline Testing',
			'crumb'          => 'ETL testing',
			'kicker'         => 'Data & AI Testing',
			'title'          => 'Pipeline testing from source through to the <span class="hl">target</span>',
			'signalIcon'     => 'i-db',
			'signal'         => array( 'Contracts written', 'Samples signed', 'Checks on the job' ),
			'lede'           => 'We verify batch and streaming pipelines from source through transformation to the target, giving data owners evidence they can inspect and maintain.',
			'covers'         => array( 'Source', 'Transform', 'Reconcile', 'Lineage', 'Watch', 'Ready' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'etl-scope',
			'image'          => 'etl-testing-concept.jpg',
			'imageAlt'       => 'Path from source and transform through reconcile and lineage to a signed ready state',
			'triggerTitle'   => 'A successful job does not prove the data is correct.',
			'triggerText'    => 'Pipeline failures can pass operational monitoring while joins, transformations or business rules produce incorrect target data.',
			'triggers'       => array(
			array(
				'icon'  => 'i-db',
				'title' => 'The job completes with incorrect data',
				'text'  => 'A join drops a key or changes a relationship even though the scheduler reports success.',
			),
			array(
				'icon'  => 'i-gauge',
				'title' => 'Row counts hide rule failures',
				'text'  => 'Matching totals do not prove that transformations, values and relationships are correct.',
			),
			array(
				'icon'  => 'i-book',
				'title' => 'Business validation is missing',
				'text'  => 'Technical checks pass but no data owner confirms that representative records are correct.',
			),
			array(
				'icon'  => 'i-brain',
				'title' => 'Downstream systems receive faulty data',
				'text'  => 'Applications and models are investigated while the underlying pipeline defect remains undetected.',
			),
		),
			'scopeTitle'     => 'Validate the data contract and the delivered result.',
			'scopeText'      => 'We cover contracts, transformations and reconciliation. Model quality and lower environment test data are separate service areas.',
			'scope'          => array(
			array(
				'icon'   => 'i-db',
				'title'  => 'Source and target contracts',
				'text'   => 'Document expected schemas, keys, null handling and business rules for each side of the pipeline.',
				'output' => 'Written contracts',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Transforms under volume',
				'text'   => 'Test joins, slowly changing dimensions and business rules with representative data volumes.',
				'output' => 'Rule evidence',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Reconcile',
				'text'   => 'Compare totals and representative records, with business review of agreed samples.',
				'output' => 'Signed samples',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Duplicates and drops',
				'text'   => 'Keys that appear twice. Rows that vanish between source and target.',
				'output' => 'Drop notes',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Batch and stream',
				'text'   => 'Apply agreed quality and timing rules to both scheduled and event driven pipelines.',
				'output' => 'Clock evidence',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual pipeline risk. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests the feed. Training and inference quality belongs to <a href="' . ow_home( '/services/ai-model-data-quality-testing' ) . '">AI Model and Data Quality Testing</a>. Data you are allowed to use in lower environments belongs to <a href="' . ow_home( '/services/test-data-management' ) . '">Test Data Management</a>.',
			'deliveryTitle'  => 'Define expected data before testing execution.',
			'deliveryText'   => 'Each phase has a named owner and an output a data owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + data owner',
				'text'   => 'Agree sources, targets, rules and what a finished reconciliation means.',
				'output' => 'Pipeline brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build checks for contracts, transforms, duplicates and samples. Drafts remain subject to review.',
				'output' => 'Reviewed checks',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run against real shaped volume. Capture the join, key or sample that fails.',
				'output' => 'Findings and samples',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last sample and the next job.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Keep pipeline assurance within your team.',
			'ownershipHead'  => 'Your team receives checks and evidence that explain where and why data changed.',
			'ownershipText'  => 'Pipeline testing is complete when the contracts, the samples and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Contracts', 'Source and target are written.' ),
			array( 'Samples', 'A failed load can be inspected as rows.' ),
			array( 'Checks', 'The job fails when the contract fails.' ),
			array( 'Continuity', 'A named owner can explain the last sample and the next load.' ),
		),
			'ownershipIcon'  => 'i-db',
			'proofTitle'     => 'Evidence for each critical pipeline rule.',
			'proofText'      => 'The value is a documented contract, reviewed reconciliation evidence and a clear recommendation for the accountable owner.',
			'proofLeft'      => array(
			'kicker' => 'Source',
			'title'  => 'The extract is named',
			'text'   => 'What each side is allowed to be, including keys and nulls.',
		),
			'proofMid'       => array(
			'from'  => 'Transform',
			'to'    => 'Reconcile',
			'title' => 'Rules you can still recognise',
			'text'  => 'Joins, drops and samples captured when the target is wrong.',
		),
			'proofRight'     => array(
			'kicker' => 'Ready',
			'title'  => 'Rows still unreconciled',
			'text'   => 'What still fails to reconcile, to support your release decision.',
		),
			'ecoTitle'       => 'Checks live where the job already runs.',
			'ecoText'        => 'We work with the warehouse, transform and scheduler tools your data team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Warehouse and transform',
				'tools' => array(
					ow_tool( 'snowflake', 'Snowflake' ),
					ow_tool( 'dbt', 'dbt' ),
					ow_tool( 'postgresql', 'PostgreSQL' ),
					ow_tool( 'apachekafka', 'Apache Kafka' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'python', 'Python' ),
					ow_tool( 'pytest', 'pytest' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Start with the pipeline carrying the greatest business risk.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one pipeline, including a signed sample, in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded pipeline testing',
				'text'  => 'Engineers work inside your cadence to keep contracts, samples and checks current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed pipeline quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the jobs and the release decision.',
			),
		),
			'faqTitle'       => 'Set the contract before the DAG claims success.',
			'faq'            => array(
			array(
				'q' => 'Is a row count enough?',
				'a' => 'No. Counts can match while a join is still wrong. Totals need a sample a data owner can still recognise.',
			),
			array(
				'q' => 'Do you rewrite our pipeline?',
				'a' => 'No. We test the jobs you already run and place maintainable checks in the systems your team owns.',
			),
			array(
				'q' => 'How is this different from AI Model and Data Quality Testing?',
				'a' => 'This service proves the feed. Model testing proves whether training and inference slices are still what you think they are.',
			),
			array(
				'q' => 'Do you cover streaming as well as batch?',
				'a' => 'Yes. We agree the relevant timing, delivery and data quality rules for each pipeline before testing begins.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'Source and target contracts, rule evidence, signed samples, checks on the job and a named recommendation.',
			),
			array(
				'q' => 'Who owns the checks when you leave?',
				'a' => 'Your team owns the checks. They remain in your scheduler and handover includes a practical walkthrough with a named internal owner.',
			),
		),
			'closeEyebrow'   => 'Start with one job',
			'closeTitle'     => 'Verify that a critical load reconciles.',
			'closeText'      => 'Bring the source, the target and a recent concern. We will define a useful scope and the evidence your data owner needs.',
			'closeLink'      => 'Or discuss the current pipeline',
		),
		'ai-model-data-quality-testing' => array(
			'wp_title'       => 'AI Model and Data Quality Testing',
			'crumb'          => 'Model and data quality',
			'kicker'         => 'Data & AI Testing',
			'title'          => 'Training and inference data tested for drift and <span class="hl">leakage</span>',
			'signalIcon'     => 'i-brain',
			'signal'         => array( 'Slices defined', 'Drift evidenced', 'Gate documented' ),
			'lede'           => 'We test training and inference data for quality, leakage, drift and coverage gaps, giving model owners evidence for the next release decision.',
			'covers'         => array( 'Slice', 'Quality', 'Drift', 'Gaps', 'Leakage', 'Gate' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'model-scope',
			'image'          => 'model-testing-concept.jpg',
			'imageAlt'       => 'Path from named slice and quality through drift and gap to a hold at the gate',
			'triggerTitle'   => 'Model behaviour can change when the underlying data changes.',
			'triggerText'    => 'Unrepresentative samples, leakage and undetected drift can make evaluation results unreliable and expose production users to avoidable risk.',
			'triggers'       => array(
			array(
				'icon'  => 'i-book',
				'title' => 'Evaluation data is not representative',
				'text'  => 'Curated samples pass while current production data is missing an important class or segment.',
			),
			array(
				'icon'  => 'i-brain',
				'title' => 'Data changes are mistaken for model defects',
				'text'  => 'Teams investigate model behaviour without first checking whether the input distribution has changed.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Leakage inflates evaluation results',
				'text'  => 'Training features contain information that would not be available when the model is used.',
			),
			array(
				'icon'  => 'i-pulse',
				'title' => 'Inference data drifts without review',
				'text'  => 'A segment becomes underrepresented but no comparison alerts the model owner before release.',
			),
		),
			'scopeTitle'     => 'A practical data quality gate for model decisions.',
			'scopeText'      => 'We cover data slices, quality, leakage and drift. Pipeline correctness and application behaviour remain separate service areas.',
			'scope'          => array(
			array(
				'icon'   => 'i-db',
				'title'  => 'Training and inference slices',
				'text'   => 'Define the datasets, populations and time periods used for training, evaluation and inference.',
				'output' => 'Named slices',
			),
			array(
				'icon'   => 'i-gauge',
				'title'  => 'Quality before accuracy',
				'text'   => 'Assess nulls, skew, label quality, invalid records and other agreed data rules.',
				'output' => 'Quality findings',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Leakage',
				'text'   => 'Identify features or labels that expose information unavailable at the point of prediction.',
				'output' => 'Leakage notes',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Drift',
				'text'   => 'Compare current inference data with agreed training and evaluation baselines.',
				'output' => 'Drift notes',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Gaps you can name',
				'text'   => 'A segment missing. Written. We will not invent a fairness score.',
				'output' => 'Gap notes',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual data risk. Your authorised owner retains the train decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests the data a model sees. The pipeline that fed it belongs to <a href="' . ow_home( '/services/etl-data-pipeline-testing' ) . '">ETL and Data Pipeline Testing</a>. The model in the product belongs to <a href="' . ow_home( '/services/genai-llm-application-testing' ) . '">GenAI and LLM Application Testing</a>.',
			'deliveryTitle'  => 'Define the data slices before evaluating results.',
			'deliveryText'   => 'Each phase has a named owner and an output a data owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + data owner',
				'text'   => 'Agree train, infer, quality rules and what a finished gate means.',
				'output' => 'Slice brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build checks for quality, leakage, drift and named gaps. Drafts remain subject to review.',
				'output' => 'Reviewed checks',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Score the real slices. Capture the class, leak or skew that fails.',
				'output' => 'Findings and notes',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the train decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last drift and the next train.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Keep model data assurance within your team.',
			'ownershipHead'  => 'Your team receives checks and evidence that explain quality failures, drift and coverage gaps.',
			'ownershipText'  => 'Model data testing is complete when the slices, the drift notes and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Slices', 'Train and infer are named.' ),
			array( 'Notes', 'A failed quality check can be inspected as data.' ),
			array( 'Gate', 'A person plus a check before the next train.' ),
			array( 'Continuity', 'A named owner can explain the last drift and the next slice.' ),
		),
			'ownershipIcon'  => 'i-brain',
			'proofTitle'     => 'Traceable evidence for each model data risk.',
			'proofText'      => 'The value is a defined data slice, inspectable drift evidence and a clear recommendation for the accountable owner.',
			'proofLeft'      => array(
			'kicker' => 'Slice',
			'title'  => 'Train and infer written',
			'text'   => 'What the model actually saw, not a brochure set.',
		),
			'proofMid'       => array(
			'from'  => 'Quality',
			'to'    => 'Drift',
			'title' => 'Gaps you can still recognise',
			'text'  => 'Nulls, leaks and missing classes captured when production moved.',
		),
			'proofRight'     => array(
			'kicker' => 'Gate',
			'title'  => 'Slices still unsafe to train',
			'text'   => 'What still fails to hold, to support your release decision.',
		),
			'ecoTitle'       => 'Checks live on the slices you already train.',
			'ecoText'        => 'We work with the training, data and delivery tools your science team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Train and data',
				'tools' => array(
					ow_tool( 'python', 'Python' ),
					ow_tool( 'tensorflow', 'TensorFlow' ),
					ow_tool( 'pytorch', 'PyTorch' ),
					ow_tool( 'postgresql', 'PostgreSQL' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'pytest', 'pytest' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Start with the data slice carrying the greatest model risk.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one train versus infer comparison, including a named gap, in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded model data testing',
				'text'  => 'Engineers work inside your cadence to keep slices, drift notes and gates current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed model data quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the model and the train decision.',
			),
		),
			'faqTitle'       => 'Define the data behind each model decision.',
			'faq'            => array(
			array(
				'q' => 'Do you train the model?',
				'a' => 'No. We test the data used for training and inference, including whether production data still matches agreed expectations.',
			),
			array(
				'q' => 'Will you give us a fairness certificate?',
				'a' => 'No. We name gaps we can actually test. We will not invent a score.',
			),
			array(
				'q' => 'How is this different from GenAI and LLM Application Testing?',
				'a' => 'This service is the data underneath. GenAI testing is the model in the product a user sees.',
			),
			array(
				'q' => 'How is this different from ETL testing?',
				'a' => 'ETL testing proves the feed. This service proves whether the slices the model trains and infers on are still what you think they are.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'Defined data slices, quality findings, drift evidence, coverage gaps and a recommendation for the accountable model owner.',
			),
			array(
				'q' => 'Who owns the gate when you leave?',
				'a' => 'Your team owns the gate. Checks remain in your systems and handover includes a practical walkthrough with a named internal owner.',
			),
		),
			'closeEyebrow'   => 'Start with one slice',
			'closeTitle'     => 'Verify that current inference data remains suitable.',
			'closeText'      => 'Bring the training baseline, recent inference data and the segment that concerns your team. We will define a useful scope and decision evidence.',
			'closeLink'      => 'Or discuss the current data quality',
		),
		'test-data-management' => array(
			'wp_title'       => 'Test Data Management',
			'crumb'          => 'Test data management',
			'kicker'         => 'Data & AI Testing',
			'title'          => 'Test data that still exercises the real <span class="hl">paths</span>',
			'signalIcon'     => 'i-shield',
			'signal'         => array( 'Entities mapped', 'Sensitive data removed', 'Critical paths covered' ),
			'lede'           => 'We create masked, synthetic and subset data that protects sensitive information while preserving relationships and critical business scenarios.',
			'covers'         => array( 'Map', 'Mask', 'Synthesize', 'Subset', 'Access', 'Refresh' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'tdm-scope',
			'image'          => 'tdm-testing-concept.jpg',
			'imageAlt'       => 'Path from entity map and mask through synthetic and subset to a named refresh',
			'triggerTitle'   => 'Lower environments need useful data without production exposure.',
			'triggerText'    => 'Teams lose time when copied data creates privacy risk, masking breaks relationships or test scenarios must be assembled manually.',
			'triggers'       => array(
			array(
				'icon'  => 'i-shield',
				'title' => 'Production sits in staging',
				'text'  => 'Real customer records and identifiers create unnecessary exposure in lower environments.',
			),
			array(
				'icon'  => 'i-db',
				'title' => 'Masked until it is useless',
				'text'  => 'Relationships broke. Checkout cannot be tested because the keys no longer join.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Synthetic data covers only normal journeys',
				'text'  => 'Expired payments, empty states and permission failures are missing from the available data.',
			),
			array(
				'icon'  => 'i-users',
				'title' => 'Testers create records by hand',
				'text'  => 'Delivery slows while teams build routine records or repair an outdated subset.',
			),
		),
			'scopeTitle'     => 'Safe to use and complete enough to test.',
			'scopeText'      => 'The service proves testers have data they may use. Pipelines remain ETL. Journeys remain Functional Testing.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'What tests actually need',
				'text'   => 'Entities, not a full dump. Checkout, claims or the clinical flow.',
				'output' => 'Entity map',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Mask',
				'text'   => 'Identifiers gone. Relationships kept so a journey can still complete.',
				'output' => 'Masked subset',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Synthesize',
				'text'   => 'Create boundary conditions, empty states, expired records and permission failures.',
				'output' => 'Synthetic scenarios',
			),
			array(
				'icon'   => 'i-db',
				'title'  => 'Subset',
				'text'   => 'Enough to run the journeys you named. Not the whole estate.',
				'output' => 'Usable subset',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Refresh',
				'text'   => 'Define a repeatable process that keeps subsets current without returning to production copies.',
				'output' => 'Refresh cadence',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual data risk. Your authorised owner retains access control.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service supplies data testers may use. The pipeline that feeds environments belongs to <a href="' . ow_home( '/services/etl-data-pipeline-testing' ) . '">ETL and Data Pipeline Testing</a>. Journeys that still have to run belong to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional and Regression Testing</a>.',
			'deliveryTitle'  => 'Map the entities before anyone copies production.',
			'deliveryText'   => 'Each phase has a named owner and an output a data owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + data owner',
				'text'   => 'Agree entities, journeys, what must never look like a real customer and who may see the lower environment.',
				'output' => 'Data brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build the map, mask, synthetic paths and refresh. Drafts remain subject to review.',
				'output' => 'Reviewed pack',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Prove a named journey still runs on this data. Capture the relationship that broke.',
				'output' => 'Journey evidence',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains access control.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can refresh the subset and explain the last ugly path.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Keep test data available without manual reconstruction.',
			'ownershipHead'  => 'A masked dump is not useful if checkout can no longer join.',
			'ownershipText'  => 'Test data work is complete when the map, the subset and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Map', 'What tests need is written.' ),
			array( 'Subset', 'A journey can still complete without a production copy.' ),
			array( 'Access', 'Who can see the lower environment is a control.' ),
			array( 'Continuity', 'A named owner can refresh the subset and maintain critical scenarios.' ),
		),
			'ownershipIcon'  => 'i-shield',
			'proofTitle'     => 'Usable test data with clear controls.',
			'proofText'      => 'The value is a documented entity map, a protected subset, successful journey evidence and a clear recommendation.',
			'proofLeft'      => array(
			'kicker' => 'Map',
			'title'  => 'Entities written in advance',
			'text'   => 'What tests actually need, including keys that must still join.',
		),
			'proofMid'       => array(
			'from'  => 'Mask',
			'to'    => 'Subset',
			'title' => 'Data you can still run',
			'text'  => 'Identifiers removed, relationships preserved and critical journeys evidenced.',
		),
			'proofRight'     => array(
			'kicker' => 'Refresh',
			'title'  => 'Paths still untestable',
			'text'   => 'What still tempts a production copy, to support your release decision.',
		),
			'ecoTitle'       => 'Subsets live in the environments you already run.',
			'ecoText'        => 'We work with the stores, trackers and delivery tools your team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Stores',
				'tools' => array(
					ow_tool( 'postgresql', 'PostgreSQL' ),
					ow_tool( 'mongodb', 'MongoDB' ),
				),
			),
			array(
				't'     => 'Checks',
				'tools' => array(
					ow_tool( 'python', 'Python' ),
					ow_tool( 'pytest', 'pytest' ),
				),
			),
			array(
				't'     => 'Work',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'linear', 'Linear' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Start with the journey that carries the greatest data risk.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one journey on approved data, including a critical failure condition, in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded test data work',
				'text'  => 'Engineers work inside your cadence to keep maps, subsets and refresh current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed test data',
				'text'  => 'Optimworks operates the agreed subset and refresh while your team retains the environments and access control.',
			),
		),
			'faqTitle'       => 'Map the entities before anyone copies production.',
			'faq'            => array(
			array(
				'q' => 'Can we just copy production?',
				'a' => 'No. That is the incident this service exists to avoid. Lower environments still need a control.',
			),
			array(
				'q' => 'Will synthetic data miss real bugs?',
				'a' => 'It can if it only represents normal journeys. We design synthetic data for boundary conditions, failure states and important business rules.',
			),
			array(
				'q' => 'Do you sell a test data platform?',
				'a' => 'No. We design the subset, the mask and the refresh on the environments you already have.',
			),
			array(
				'q' => 'How is this different from ETL testing?',
				'a' => 'ETL testing proves the pipeline is true. This service proves testers have data they are allowed to use.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'An entity map, a masked subset, synthetic scenarios, a refresh process and a recommendation for the accountable data owner.',
			),
			array(
				'q' => 'Who owns the data when you leave?',
				'a' => 'Your team owns the test data. Subsets remain in your environments and handover includes a practical walkthrough with a named internal owner.',
			),
		),
			'closeEyebrow'   => 'Start with one journey',
			'closeTitle'     => 'Run a critical journey without a production copy.',
			'closeText'      => 'Bring the journey, the identifiers that require protection and the current data constraints. We will define a useful subset and refresh approach.',
			'closeLink'      => 'Or discuss the current test data',
		),
		'realtime-communication-testing' => array(
			'wp_title'       => 'Real Time Communication Testing',
			'crumb'          => 'Real time communication',
			'kicker'         => 'Specialist Testing',
			'title'          => 'Voice, video and messaging under real network <span class="hl">failure</span>',
			'signalIcon'     => 'i-pulse',
			'signal'         => array( 'Paths named', 'Impairment evidenced', 'Traces signed' ),
			'lede'           => 'We test voice, video and messaging under loss, jitter, address translation and handoff, producing traces engineers can inspect and reproduce.',
			'covers'         => array( 'Call', 'Impair', 'Handoff', 'Trace', 'Measure', 'Hold' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'rtc-scope',
			'image'          => 'rtc-testing-concept.jpg',
			'imageAlt'       => 'Path from call and impair through handoff and trace to a named hold',
			'triggerTitle'   => 'A successful connection does not prove communication quality.',
			'triggerText'    => 'Calls can connect while media fails, degrades or does not recover from the network changes users experience.',
			'triggers'       => array(
			array(
				'icon'  => 'i-pulse',
				'title' => 'Testing uses only stable networks',
				'text'  => 'Calls work in the office but fail during movement, weak coverage or network handoff.',
			),
			array(
				'icon'  => 'i-cloud',
				'title' => 'Signalling succeeds while media fails',
				'text'  => 'The session connects but audio is missing, one way or delayed.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Impairment was never in the pack',
				'text'  => 'Loss, jitter and NAT were assumed away because yesterday was fine.',
			),
			array(
				'icon'  => 'i-users',
				'title' => 'Failures lack diagnostic evidence',
				'text'  => 'A ticket records the symptom but does not include the media and signalling traces engineers need.',
			),
		),
			'scopeTitle'     => 'Evidence across the complete communication path.',
			'scopeText'      => 'The service proves media and signalling under a bad network. Volume remains Performance Testing. The handset remains Mobile App Testing.',
			'scope'          => array(
			array(
				'icon'   => 'i-pulse',
				'title'  => 'Call and join',
				'text'   => 'Verify session setup, connection timing and whether media arrives after signalling completes.',
				'output' => 'Join evidence',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Media',
				'text'   => 'Voice, video, freeze and one way audio captured as observed behaviour.',
				'output' => 'Media results',
			),
			array(
				'icon'   => 'i-cloud',
				'title'  => 'Messaging and share',
				'text'   => 'Test delivery, ordering and timing for messaging or screen sharing included in scope.',
				'output' => 'Channel evidence',
			),
			array(
				'icon'   => 'i-gauge',
				'title'  => 'Impairment',
				'text'   => 'Loss, jitter, NAT and the handset switch, as named in the brief.',
				'output' => 'Impairment pack',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Handoff',
				'text'   => 'Verify continuity and recovery when a device moves between wifi and cellular networks.',
				'output' => 'Handoff results',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual call path risk. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests media under a bad network. Many calls at once belong to <a href="' . ow_home( '/services/performance-load-testing' ) . '">Performance and Load Testing</a>. The handset itself belongs to <a href="' . ow_home( '/services/mobile-app-testing' ) . '">Mobile App Testing</a>.',
			'deliveryTitle'  => 'Map the call path before testing begins.',
			'deliveryText'   => 'Each phase has a named owner and an output a product owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Agree paths, impairment, handoff and what a finished call means.',
				'output' => 'Call path brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build cases for join, media, impairment and handoff. Drafts remain subject to review.',
				'output' => 'Reviewed cases',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Impair on purpose. Capture traces when freeze, drop or one way audio appears.',
				'output' => 'Traces and defects',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last drop and the next path.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Keep communication diagnostics within your team.',
			'ownershipHead'  => 'Your team receives path definitions, impairment settings and traces that explain media failures.',
			'ownershipText'  => 'Real time testing is complete when the paths, the traces and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Paths', 'Call, message, share and handoff are written.' ),
			array( 'Traces', 'A failed call can be replayed.' ),
			array( 'Impairment', 'Loss and jitter are evidenced, not assumed.' ),
			array( 'Continuity', 'A named owner can explain the last drop and the next path.' ),
		),
			'ownershipIcon'  => 'i-pulse',
			'proofTitle'     => 'Reproducible evidence for communication failures.',
			'proofText'      => 'The value is a documented path, repeatable network conditions, inspectable traces and a clear recommendation.',
			'proofLeft'      => array(
			'kicker' => 'Call',
			'title'  => 'Paths written in advance',
			'text'   => 'What you actually ship, including the join that can lie.',
		),
			'proofMid'       => array(
			'from'  => 'Impair',
			'to'    => 'Trace',
			'title' => 'Calls you can still inspect',
			'text'  => 'Loss, handoff and freeze captured when the demo would have passed.',
		),
			'proofRight'     => array(
			'kicker' => 'Hold',
			'title'  => 'What still drops the call',
			'text'   => 'What still fails on a impaired network, to support your release decision.',
		),
			'ecoTitle'       => 'Traces follow the path you already ship.',
			'ecoText'        => 'We work with the media, device and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Media path',
				'tools' => array(
					ow_tool( 'webrtc', 'WebRTC' ),
					ow_tool( 'twilio', 'Twilio' ),
				),
			),
			array(
				't'     => 'Devices',
				'tools' => array(
					ow_tool( 'apple', 'iOS' ),
					ow_tool( 'android', 'Android' ),
				),
			),
			array(
				't'     => 'Signalling',
				'tools' => array(
					ow_tool( 'postman', 'Postman' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Start with the communication path carrying the greatest business risk.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one call path, including impairment, in your environment before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded call path testing',
				'text'  => 'Engineers work inside your cadence to keep paths, traces and handoffs current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed real time quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the call path and the release decision.',
			),
		),
			'faqTitle'       => 'Define the path and network conditions.',
			'faq'            => array(
			array(
				'q' => 'Is this the same as Performance Testing?',
				'a' => 'No. Performance Testing covers concurrency and load. This service verifies media and signalling under defined network conditions.',
			),
			array(
				'q' => 'Do you need our TURN servers?',
				'a' => 'We test the path you ship. If TURN is in the product, it is in the pack.',
			),
			array(
				'q' => 'Is a functional call enough?',
				'a' => 'No. Join can succeed while media is dead. A specialist still reads the trace.',
			),
			array(
				'q' => 'How is this different from Mobile App Testing?',
				'a' => 'Mobile testing covers application behaviour on the handset. This service covers call quality, signalling and recovery when network conditions change.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'A path map, impairment pack, traces, measurements and a named recommendation.',
			),
			array(
				'q' => 'Who owns the pack when you leave?',
				'a' => 'Your team owns the test pack. Traces remain in your systems and handover includes a practical walkthrough with a named internal owner.',
			),
		),
			'closeEyebrow'   => 'Start with one call',
			'closeTitle'     => 'Verify one critical path under network change.',
			'closeText'      => 'Bring the call flow, a recent media failure and the handoff that concerns your team. We will define a useful test scope and required evidence.',
			'closeLink'      => 'Or discuss the current call path',
		),
		'iot-device-testing' => array(
			'wp_title'       => 'IoT Device Testing',
			'crumb'          => 'IoT testing',
			'kicker'         => 'Specialist Testing',
			'title'          => 'IoT testing from firmware to the app in the <span class="hl">pocket</span>',
			'signalIcon'     => 'i-cloud',
			'signal'         => array( 'Chain mapped', 'Failure paths evidenced', 'Updates verified' ),
			'lede'           => 'We test firmware, connectivity, power, cloud and mobile application behaviour as one chain, with reproducible evidence for engineering owners.',
			'covers'         => array( 'Firmware', 'Link', 'Power', 'Cloud', 'OTA', 'App' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'iot-scope',
			'image'          => 'iot-testing-concept.jpg',
			'imageAlt'       => 'Path from firmware and link through power and over the air update to a named ready state',
			'triggerTitle'   => 'Cloud checks cannot verify the complete device chain.',
			'triggerText'    => 'Firmware timing, weak connectivity, power changes and interrupted updates can fail even when cloud services report success.',
			'triggers'       => array(
			array(
				'icon'  => 'i-cloud',
				'title' => 'The cloud is treated as the product',
				'text'  => 'The service accepts a command but the device does not receive or apply it.',
			),
			array(
				'icon'  => 'i-pulse',
				'title' => 'Connectivity testing is too narrow',
				'text'  => 'The device works at close range but fails under weak signal, interference or reconnection.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'The update was never exercised',
				'text'  => 'An interrupted over the air update leaves devices unavailable or unable to recover.',
			),
			array(
				'icon'  => 'i-gauge',
				'title' => 'Power is an afterthought',
				'text'  => 'The battery died mid command. The app still said success.',
			),
		),
			'scopeTitle'     => 'Evidence across the complete device chain.',
			'scopeText'      => 'The service proves firmware, radio, power and updates. Interrupt on the handset remains Mobile App Testing. Ingest remains API Testing.',
			'scope'          => array(
			array(
				'icon'   => 'i-gear',
				'title'  => 'Firmware and sensors',
				'text'   => 'Verify boot, timing, sensor behaviour and invalid state handling.',
				'output' => 'Device evidence',
			),
			array(
				'icon'   => 'i-gauge',
				'title'  => 'Power',
				'text'   => 'Test sleep, low voltage and command handling during changes in available power.',
				'output' => 'Power pack',
			),
			array(
				'icon'   => 'i-pulse',
				'title'  => 'The link',
				'text'   => 'BLE, wifi or cellular, including drop and reconnect, as named in the brief.',
				'output' => 'Link results',
			),
			array(
				'icon'   => 'i-cloud',
				'title'  => 'Cloud, ingest and OTA',
				'text'   => 'Verify commands, telemetry and safe recovery from interrupted over the air updates.',
				'output' => 'OTA notes',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Application and device state',
				'text'   => 'Compare what the application reports with the state and action recorded by the device.',
				'output' => 'App versus device',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual device risk. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests the device chain. The app layer belongs to <a href="' . ow_home( '/services/mobile-app-testing' ) . '">Mobile App Testing</a>. Ingest and command contracts belong to <a href="' . ow_home( '/services/api-testing-services' ) . '">API Testing</a>.',
			'deliveryTitle'  => 'Map the device chain before testing begins.',
			'deliveryText'   => 'Each phase has a named owner and an output a product owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + product owner',
				'text'   => 'Agree firmware, radio, power, updates and what a finished chain means.',
				'output' => 'Chain brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build cases for boot, drop, power and over the air. Drafts remain subject to review.',
				'output' => 'Reviewed cases',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run on your hardware and capture update, connectivity and state consistency failures.',
				'output' => 'Findings and traces',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last brick risk and the next update.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Keep device assurance within your team.',
			'ownershipHead'  => 'Your team receives chain definitions and evidence that explains why a command, update or connection failed.',
			'ownershipText'  => 'IoT testing is complete when the chain, critical failure paths and residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Chain', 'Firmware, link, cloud and app are written.' ),
			array( 'Failure paths', 'Power and reconnection conditions can be replayed.' ),
			array( 'Updates', 'Interrupted update and recovery behaviour is evidenced.' ),
			array( 'Continuity', 'A named owner can explain the last drop and the next OTA.' ),
		),
			'ownershipIcon'  => 'i-cloud',
			'proofTitle'     => 'Reproducible evidence across the device chain.',
			'proofText'      => 'The value is a documented chain, repeatable failure conditions and a clear recommendation for the accountable owner.',
			'proofLeft'      => array(
			'kicker' => 'Firmware',
			'title'  => 'The device is named',
			'text'   => 'Boot, sensors and the state that should not exist.',
		),
			'proofMid'       => array(
			'from'  => 'Link',
			'to'    => 'OTA',
			'title' => 'Paths you can still inspect',
			'text'  => 'Drop, power and the update captured when the app would have said success.',
		),
			'proofRight'     => array(
			'kicker' => 'Ready',
			'title'  => 'Remaining device risk',
			'text'   => 'Unresolved device risks documented for your authorised owner\'s release decision.',
		),
			'ecoTitle'       => 'Evidence lives on the hardware you already hold.',
			'ecoText'        => 'We work with the device, radio, app and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Device and radio',
				'tools' => array(
					ow_tool( 'raspberrypi', 'Raspberry Pi' ),
					ow_tool( 'mqtt', 'MQTT' ),
				),
			),
			array(
				't'     => 'The app in the pocket',
				'tools' => array(
					ow_tool( 'apple', 'iOS' ),
					ow_tool( 'android', 'Android' ),
				),
			),
			array(
				't'     => 'Ingest',
				'tools' => array(
					ow_tool( 'postman', 'Postman' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Start with the device path carrying the greatest business risk.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one chain, including drop or power, in your lab before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded device testing',
				'text'  => 'Engineers work inside your cadence to keep firmware, radio and update evidence current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed device quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the hardware and the release decision.',
			),
		),
			'faqTitle'       => 'Map the chain before the app claims success.',
			'faq'            => array(
			array(
				'q' => 'Is this the same as Mobile App Testing?',
				'a' => 'The app is one layer. This service covers firmware, radio, power and over the air updates as well.',
			),
			array(
				'q' => 'Do you have a device farm?',
				'a' => 'We test on your hardware and the lab you already have. We do not sell a farm.',
			),
			array(
				'q' => 'Can cloud tests replace this?',
				'a' => 'No. A green ingest API can still hide a firmware race, a radio drop or an update that bricks the device. Cloud checks are one layer of the chain, not a substitute for it.',
			),
			array(
				'q' => 'How is this different from API Testing?',
				'a' => 'Ingest and command still have a contract. Firmware, radio and the update that must not brick remain this service.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'A chain map, power and reconnect pack, over the air notes, app versus device evidence and a named recommendation.',
			),
			array(
				'q' => 'Who owns the pack when you leave?',
				'a' => 'You do from the first day. Evidence remains in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one chain',
			'closeTitle'     => 'Verify one critical command across the chain.',
			'closeText'      => 'Bring the firmware, a recent device failure and the update that concerns your team. We will define a useful scope and the evidence your owner needs.',
			'closeLink'      => 'Or discuss the current device path',
		),
		'blockchain-smart-contract-testing' => array(
			'wp_title'       => 'Blockchain and Smart Contract Testing',
			'crumb'          => 'Smart contract testing',
			'kicker'         => 'Specialist Testing',
			'title'          => 'Smart contract testing before a change is <span class="hl">irreversible</span>',
			'signalIcon'     => 'i-shield',
			'signal'         => array( 'Invariants written', 'Auth mapped', 'Evidence in a lab' ),
			'lede'           => 'We test contract logic, invariants, permissions and relevant failure classes, then provide confidential evidence for the accountable owner.',
			'covers'         => array( 'Invariant', 'Auth', 'Failure', 'Retest', 'Evidence', 'Sign' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'chain-scope',
			'image'          => 'chain-testing-concept.jpg',
			'imageAlt'       => 'Path from written invariant and auth through lab failure and retest to a named sign',
			'triggerTitle'   => 'A working interface does not prove contract logic is safe.',
			'triggerText'    => 'Unwritten invariants, incomplete permission testing and unverified upgrades can expose value even when normal wallet journeys pass.',
			'triggers'       => array(
			array(
				'icon'  => 'i-users',
				'title' => 'Interface checks replace contract checks',
				'text'  => 'A wallet action succeeds but the underlying invariant or state transition is not verified.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Only normal transactions are tested',
				'text'  => 'Permission boundaries and transaction sequences that could break an invariant remain uncovered.',
			),
			array(
				'icon'  => 'i-book',
				'title' => 'Nothing says what must never become true',
				'text'  => 'Without documented invariants, teams cannot define complete or repeatable contract tests.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Upgrades are not fully retested',
				'text'  => 'A proxy or implementation changes without rerunning the checks tied to existing invariants.',
			),
		),
			'scopeTitle'     => 'Evidence that contract invariants still hold.',
			'scopeText'      => 'The service proves contract logic in a lab. Application doors remain Security Testing. Wallet journeys remain Functional Testing.',
			'scope'          => array(
			array(
				'icon'   => 'i-book',
				'title'  => 'Invariants',
				'text'   => 'What must never become true, written with someone who owns the value.',
				'output' => 'Written invariants',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Who can call what',
				'text'   => 'Permissions on the functions that move value.',
				'output' => 'Auth map',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Named failure classes',
				'text'   => 'Test relevant classes such as reentrancy, oracle handling and upgrade behaviour in a controlled environment.',
				'output' => 'Lab evidence',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Client behaviour',
				'text'   => 'Verify wallet journeys alongside contract rules without treating the interface as contract evidence.',
				'output' => 'Client notes',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Retest after change',
				'text'   => 'Rerun affected invariant and permission checks after proxy, oracle or implementation changes.',
				'output' => 'Retest notes',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named recommendation',
				'text'   => 'Residual contract risk. Your authorised owner retains the release decision.',
				'output' => 'Named recommendation',
			),
		),
			'boundary'       => 'This service tests contract invariants. Application doors belong to <a href="' . ow_home( '/services/security-penetration-testing' ) . '">Security and Penetration Testing</a>. Wallet journeys belong to <a href="' . ow_home( '/services/functional-regression-testing' ) . '">Functional and Regression Testing</a>.',
			'deliveryTitle'  => 'Define invariants before executing contract tests.',
			'deliveryText'   => 'Each phase has a named owner and an output a contract owner can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + contract owner',
				'text'   => 'Agree invariants, permissions, failure classes and what a finished sign means.',
				'output' => 'Contract brief',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'QA engineer',
				'text'   => 'Build cases from the written invariant. Drafts remain subject to review.',
				'output' => 'Reviewed cases',
			),
			array(
				'phase'  => 'Exercise',
				'owner'  => 'QA team',
				'text'   => 'Run on your contract in a lab. Capture evidence. Do not publish a recipe.',
				'output' => 'Lab evidence',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named QA owner',
				'text'   => 'Name residual risk. Your owner retains the release decision.',
				'output' => 'QA recommendation',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named QA owner',
				'text'   => 'Leave a named owner who can explain the last invariant and the next change.',
				'output' => 'Owned pack',
			),
		),
			'ownershipTitle' => 'Keep contract assurance within your team.',
			'ownershipHead'  => 'Your team receives written invariants and evidence that explains why a rule or permission failed.',
			'ownershipText'  => 'Contract testing is complete when the invariants, the lab evidence and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Invariants', 'What must never become true is written.' ),
			array( 'Evidence', 'A failed class can be inspected in your lab notes.' ),
			array( 'Retest', 'Affected checks run again after each relevant change.' ),
			array( 'Continuity', 'A named owner can explain the last sign and the next upgrade.' ),
		),
			'ownershipIcon'  => 'i-shield',
			'proofTitle'     => 'Confidential evidence against written invariants.',
			'proofText'      => 'The value is a documented invariant, inspectable evidence and a clear recommendation for the accountable owner.',
			'proofLeft'      => array(
			'kicker' => 'Invariant',
			'title'  => 'What must never become true',
			'text'   => 'Written with someone who owns the value.',
		),
			'proofMid'       => array(
			'from'  => 'Auth',
			'to'    => 'Retest',
			'title' => 'Evidence you can still inspect',
			'text'  => 'Permissions and named failure classes captured in a lab after change.',
		),
			'proofRight'     => array(
			'kicker' => 'Sign',
			'title'  => 'What still fails to hold',
			'text'   => 'What still fails to hold, to support your release decision.',
		),
			'ecoTitle'       => 'Evidence lives on the contract you already ship.',
			'ecoText'        => 'We work with the languages, clients and delivery tools your engineering team already uses and can own.',
			'tools'          => array(
			array(
				't'     => 'Contract',
				'tools' => array(
					ow_tool( 'solidity', 'Solidity' ),
					ow_tool( 'python', 'Python' ),
				),
			),
			array(
				't'     => 'Client checks',
				'tools' => array(
					ow_tool( 'postman', 'Postman' ),
					ow_tool( 'pytest', 'pytest' ),
				),
			),
			array(
				't'     => 'Source',
				'tools' => array(
					ow_tool( 'github', 'GitHub' ),
					ow_tool( 'gitlab', 'GitLab' ),
				),
			),
			array(
				't'     => 'CI',
				'tools' => array(
					ow_tool( 'githubactions', 'GitHub Actions' ),
					ow_tool( 'jenkins', 'Jenkins' ),
				),
			),
		),
			'engageTitle'    => 'Start with the invariant carrying the greatest business risk.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Pilot Week',
				'text'  => 'Prove one invariant, including auth, in your lab before committing further.',
			),
			array(
				'label' => 'Build',
				'title' => 'Embedded contract testing',
				'text'  => 'Engineers work inside your cadence to keep invariants, evidence and retests current.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Managed contract quality',
				'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the contract and the release decision.',
			),
		),
			'faqTitle'       => 'Define the invariant before testing the contract.',
			'faq'            => array(
			array(
				'q' => 'Will you publish a proof of concept against our contract?',
				'a' => 'No. Evidence stays yours. We do not turn your contract into a write up.',
			),
			array(
				'q' => 'Is the wallet interface enough?',
				'a' => 'No. The interface confirms a user journey, while contract testing verifies the underlying rules, permissions and state changes.',
			),
			array(
				'q' => 'Do you issue a marketing badge?',
				'a' => 'No. We test invariants and permissions on your contract. A logo is not this work.',
			),
			array(
				'q' => 'How is this different from Security Testing?',
				'a' => 'Security testing asks whether application doors that should be refused are refused. This service asks whether contract invariants still hold after a change.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'Written invariants, an auth map, lab evidence, retest notes after change and a named recommendation.',
			),
			array(
				'q' => 'Who owns the evidence when you leave?',
				'a' => 'You do from the first day. Evidence remains in your systems. Handover includes a practical walkthrough and a named owner on your team.',
			),
		),
			'closeEyebrow'   => 'Start with one invariant',
			'closeTitle'     => 'Verify one critical rule after change.',
			'closeText'      => 'Bring the contract, the latest upgrade and the invariant that concerns your team. We will define a useful scope and the evidence your owner needs.',
			'closeLink'      => 'Or discuss the current contract risk',
		),
		'ai-qa-readiness-assessment' => array(
			'wp_title'       => 'AI QA Readiness Assessment',
			'crumb'          => 'AI QA readiness',
			'kicker'         => 'Advisory Services',
			'title'          => 'Where AI can take QA work and where it <span class="hl">cannot</span>',
			'signalIcon'     => 'i-gauge',
			'signal'         => array( 'Current state assessed', 'Risk named', 'Investment prioritised' ),
			'lede'           => 'We assess how quality work is delivered today, where AI can provide practical value and where human review and accountability must remain.',
			'covers'         => array( 'Read', 'Split', 'Map', 'Roadmap', 'Next', 'Leave' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'ready-scope',
			'image'          => 'readiness-testing-concept.jpg',
			'imageAlt'       => 'Path from reading how you ship through split and map to a named next decision',
			'triggerTitle'   => 'AI investment needs a clear quality case.',
			'triggerText'    => 'Teams need to distinguish useful automation from unmanaged risk, prioritise viable use cases and show decision makers what each investment will change.',
			'triggers'       => array(
			array(
				'icon'  => 'i-users',
				'title' => 'Savings are assumed before work is assessed',
				'text'  => 'AI tools are introduced without identifying which tasks can change and which decisions still require accountable review.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Technology is selected before the use case',
				'text'  => 'Licences are purchased without agreed outcomes, controls or an owner for residual risk.',
			),
			array(
				'icon'  => 'i-brain',
				'title' => 'AI in QA is confused with QA of AI',
				'text'  => 'Healing locators is not testing the model in the product.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Recommendations cannot be funded',
				'text'  => 'Ideas are not connected to business value, delivery dependencies, ownership or a clear implementation decision.',
			),
		),
			'scopeTitle'     => 'A practical case for where to invest.',
			'scopeText'      => 'The assessment defines current needs and priorities. Delivery options are covered in How We Work and detailed operating design belongs to AI Testing Strategy.',
			'scope'          => array(
			array(
				'icon'   => 'i-book',
				'title'  => 'How you actually ship',
				'text'   => 'Document the delivery process, current controls, tools and existing use of generated code or tests.',
				'output' => 'Current state',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'Safe to accelerate',
				'text'   => 'Identify repeatable work where AI assistance can improve flow with appropriate review.',
				'output' => 'Opportunity register',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Required human controls',
				'text'   => 'Define where sign off, domain judgement and accountability must remain with named people.',
				'output' => 'Control register',
			),
			array(
				'icon'   => 'i-brain',
				'title'  => 'QA of the AI you ship',
				'text'   => 'LLM, agents and generated code, named if they exist.',
				'output' => 'Product AI note',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'A sequenced roadmap',
				'text'   => 'Prioritise initiatives by business value, feasibility, required controls and ownership.',
				'output' => 'Investment roadmap',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Named next step',
				'text'   => 'Recommend a pilot, further design work or no investment yet, with the decision retained by your sponsor.',
				'output' => 'Next step',
			),
		),
			'boundary'       => 'This service establishes readiness and priorities. The operating plan belongs to <a href="' . ow_home( '/services/ai-testing-strategy-consulting' ) . '">AI Testing Strategy and Consulting</a>. Engagement shapes belong to <a href="' . ow_home( '/how-we-work' ) . '">How We Work</a>.',
			'deliveryTitle'  => 'Assess the work before selecting technology.',
			'deliveryText'   => 'Each phase has a named owner and an output a sponsor can review and use in an investment decision.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + sponsor',
				'text'   => 'Agree what to read, who to speak with and what a finished map means.',
				'output' => 'Review brief',
			),
			array(
				'phase'  => 'Read',
				'owner'  => 'Named advisor',
				'text'   => 'Look at the board, the pipeline and where AI already writes code or cases.',
				'output' => 'How you ship',
			),
			array(
				'phase'  => 'Map',
				'owner'  => 'Named advisor',
				'text'   => 'Separate AI assisted QA from testing AI enabled products, then map opportunities, controls and ownership.',
				'output' => 'Opportunity and control map',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named advisor',
				'text'   => 'Prioritise initiatives and state the case for investment, further validation or no action.',
				'output' => 'Investment roadmap',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named advisor',
				'text'   => 'Leave the map with you. You can run it without us.',
				'output' => 'Owned map',
			),
		),
			'ownershipTitle' => 'The next decision should not depend on the original advisor remaining in the room.',
			'ownershipHead'  => 'The assessment connects each recommendation to an owner, control and investment decision.',
			'ownershipText'  => 'Readiness work is complete when the two lists, the roadmap and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Process', 'How you actually ship is written.' ),
			array( 'Opportunities', 'Suitable AI assisted work is prioritised.' ),
			array( 'Roadmap', 'Initiatives include value, controls and ownership.' ),
			array( 'Continuity', 'A named owner can explain the last map and the next step.' ),
		),
			'ownershipIcon'  => 'i-gauge',
			'proofTitle'     => 'Evidence for a responsible investment decision.',
			'proofText'      => 'The value is a current state assessment, prioritised opportunities, required controls and a roadmap your sponsor can evaluate.',
			'proofLeft'      => array(
			'kicker' => 'Read',
			'title'  => 'How you ship, written',
			'text'   => 'The board, the pipeline and where AI already writes.',
		),
			'proofMid'       => array(
			'from'  => 'Split',
			'to'    => 'Map',
			'title' => 'Two problems, two lists',
			'text'  => 'Accelerate versus owns risk. QA of AI named if it exists.',
		),
			'proofRight'     => array(
			'kicker' => 'Next',
			'title'  => 'Where a person still owns risk',
			'text'   => 'What still needs a person, to support your release decision.',
		),
			'ecoTitle'       => 'The review uses the process you already run.',
			'ecoText'        => 'We read the board and pipeline you have. In house accelerators can sit on the accelerate side as options. They are not the assessment.',
			'tools'          => array(
			array(
				't'     => 'How you track work',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'linear', 'Linear' ),
					ow_tool( 'azuredevops', 'Azure DevOps' ),
				),
			),
			array(
				't'     => 'The pipeline you have',
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
				),
			),
		),
			'engageTitle'    => 'Start with the decision your sponsor needs to make.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Readiness review',
				'text'  => 'A defined assessment of where AI can support work and where a person still owns risk.',
			),
			array(
				'label' => 'Build',
				'title' => 'Pilot Week if it earns it',
				'text'  => 'Only when the map says delivery on your systems is the right next step.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Embed or managed quality',
				'text'  => 'Shapes from How We Work, if the map points there. You can also stop.',
			),
		),
			'faqTitle'       => 'Assess value and risk before investing.',
			'faq'            => array(
			array(
				'q' => 'Is this a licence pitch?',
				'a' => 'No. The deliverable is an evidence based roadmap. Tool options are considered only where they support an agreed business need.',
			),
			array(
				'q' => 'Is this the same as Pilot Week?',
				'a' => 'No. Pilot Week tests a defined delivery approach in your systems. This assessment identifies and prioritises the opportunities that may justify that work.',
			),
			array(
				'q' => 'Will you tell us to cut QA headcount?',
				'a' => 'No. We say where AI can take work and where a person still owns risk.',
			),
			array(
				'q' => 'How is this different from AI Testing Strategy?',
				'a' => 'Readiness identifies the current opportunities, controls and investment priorities. AI Testing Strategy develops the operating plan for AI assisted QA and testing AI enabled products.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'A current state assessment, prioritised use cases, control requirements, ownership decisions and a roadmap that can support funding.',
			),
			array(
				'q' => 'Who owns the map when you leave?',
				'a' => 'You do. You can run it without us. That is the point.',
			),
		),
			'closeEyebrow'   => 'Start with a map',
			'closeTitle'     => 'Build a clear case for responsible AI investment.',
			'closeText'      => 'Bring the current QA process, tools already in use and the decisions facing your sponsor. We will define the assessment scope and required stakeholders.',
			'closeLink'      => 'Or discuss the current AI QA question',
			'closeCta'       => 'Talk to an engineer',
			'closeHref'      => '/contact#form',
		),
		'qa-strategy-advisory' => array(
			'wp_title'       => 'QA Strategy Advisory',
			'crumb'          => 'QA strategy',
			'kicker'         => 'Advisory Services',
			'title'          => 'How testing should sit in your <span class="hl">delivery</span>',
			'signalIcon'     => 'i-compass',
			'signal'         => array( 'Current state mapped', 'Gaps prioritised', 'Model fundable' ),
			'lede'           => 'We design how quality fits into software delivery, with clear controls, roles, measures and an implementation roadmap your sponsor can fund.',
			'covers'         => array( 'Listen', 'Map', 'Design', 'Land', 'Own', 'Leave' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'strat-scope',
			'image'          => 'strategy-testing-concept.jpg',
			'imageAlt'       => 'Path from listen and map through design and land to a named owner',
			'triggerTitle'   => 'More activity does not always produce better quality.',
			'triggerText'    => 'Unclear entry criteria, late testing, disconnected tools and ambiguous ownership can persist even as team size and spending increase.',
			'triggers'       => array(
			array(
				'icon'  => 'i-users',
				'title' => 'Resourcing precedes operating design',
				'text'  => 'New roles are added without defining responsibilities, workflow or the controls the team must operate.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Done still means coded',
				'text'  => 'Testing begins late because acceptance and quality criteria are not part of delivery planning.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Tools without ownership',
				'text'  => 'A licence is available but no role owns adoption, maintenance or response to results.',
			),
			array(
				'icon'  => 'i-book',
				'title' => 'Strategy stops before implementation',
				'text'  => 'Recommendations are not connected to funding, accountable owners or changes in daily delivery.',
			),
		),
			'scopeTitle'     => 'A quality operating model your organisation can implement.',
			'scopeText'      => 'The service designs how testing sits in the SDLC. Automation practice remains CoE setup. AI priorities remain part of Readiness.',
			'scope'          => array(
			array(
				'icon'   => 'i-book',
				'title'  => 'How work enters QA',
				'text'   => 'Map the actual flow from planning through release, including inputs, decisions and delays.',
				'output' => 'Current state map',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'What done means',
				'text'   => 'Define practical quality criteria within delivery rather than after development completes.',
				'output' => 'Done definition',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'CI versus a person',
				'text'   => 'Which checks belong where.',
				'output' => 'Check map',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Ownership',
				'text'   => 'Assign accountability for test design, execution, maintenance, evidence and release recommendations.',
				'output' => 'Responsibility map',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Fundable target model',
				'text'   => 'Set out roles, capabilities, governance, measures and work that should stop or change.',
				'output' => 'Operating model',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'Implementation roadmap',
				'text'   => 'Prioritise changes, dependencies and accountable owners while your sponsor retains investment decisions.',
				'output' => 'Implementation roadmap',
			),
		),
			'boundary'       => 'This service is the wider operating model. The automation practice belongs to <a href="' . ow_home( '/services/test-automation-coe-setup' ) . '">Test Automation CoE Setup</a>. AI priorities belong to <a href="' . ow_home( '/services/ai-qa-readiness-assessment' ) . '">AI QA Readiness Assessment</a>.',
			'deliveryTitle'  => 'Understand current delivery before changing the organisation.',
			'deliveryText'   => 'Each phase has a named owner and an output a sponsor can inspect, challenge and fund.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + sponsor',
				'text'   => 'Agree whose work to read and what a finished model means.',
				'output' => 'Advisory brief',
			),
			array(
				'phase'  => 'Listen',
				'owner'  => 'Named advisor',
				'text'   => 'Review work tracking, delivery pipelines, controls and recent release evidence with relevant stakeholders.',
				'output' => 'Current state assessment',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'Named advisor',
				'text'   => 'Prioritise gaps and define quality criteria, automated controls, roles, governance and measures.',
				'output' => 'Target operating model',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named advisor',
				'text'   => 'Sequence implementation, identify dependencies and state the investment decisions required.',
				'output' => 'Implementation roadmap',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named advisor',
				'text'   => 'Transfer the model, decisions and working materials to the internal lead who will own implementation.',
				'output' => 'Owned model',
			),
		),
			'ownershipTitle' => 'Future decisions should not depend on the original advisor remaining in the room.',
			'ownershipHead'  => 'The model is useful when teams can apply it to planning, delivery and release decisions.',
			'ownershipText'  => 'Strategy work is complete when the model, the landing path and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Ship', 'How work actually enters QA is written.' ),
			array( 'Done', 'The increment has a bar.' ),
			array( 'Owners', 'Who signs is named.' ),
			array( 'Continuity', 'A named lead can explain the last model and the next landing.' ),
		),
			'ownershipIcon'  => 'i-compass',
			'proofTitle'     => 'A fundable model tied to delivery decisions.',
			'proofText'      => 'The value is a current state assessment, prioritised changes, accountable ownership and an implementation roadmap.',
			'proofLeft'      => array(
			'kicker' => 'Listen',
			'title'  => 'How you ship, written',
			'text'   => 'The work flow, delivery pipeline, controls and recent release evidence.',
		),
			'proofMid'       => array(
			'from'  => 'Map',
			'to'    => 'Design',
			'title' => 'Gaps you can still fund against',
			'text'  => 'Coverage, ownership and tools nobody runs, turned into a model.',
		),
			'proofRight'     => array(
			'kicker' => 'Own',
			'title'  => 'What still has no owner',
			'text'   => 'What still has no owner, for your authorised lead to decide against.',
		),
			'ecoTitle'       => 'The model uses the board and pipeline you already have.',
			'ecoText'        => 'We do not sell a new tool as the strategy. We work with the trackers and runners your team already owns.',
			'tools'          => array(
			array(
				't'     => 'The board you have',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'linear', 'Linear' ),
					ow_tool( 'azuredevops', 'Azure DevOps' ),
				),
			),
			array(
				't'     => 'The pipeline you have',
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
				),
			),
		),
			'engageTitle'    => 'Start with the delivery problem carrying the greatest business cost.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'Strategy advisory',
				'text'  => 'Assess the current state and design the target quality operating model.',
			),
			array(
				'label' => 'Build',
				'title' => 'Land it',
				'text'  => 'Pilot or embed, if the model says delivery is the next step.',
			),
			array(
				'label' => 'Operate',
				'title' => 'A function that lasts',
				'text'  => 'A lead who can run it when we step back. CoE can follow for automation.',
			),
		),
			'faqTitle'       => 'Design the model before changing resources.',
			'faq'            => array(
			array(
				'q' => 'Will you just tell us to hire more?',
				'a' => 'No. We first define the work, controls, responsibilities and required capabilities. Resourcing recommendations follow from that operating model.',
			),
			array(
				'q' => 'Is this the same as CoE setup?',
				'a' => 'CoE is a practice for automation. This service is the whole QA operating model. They can follow.',
			),
			array(
				'q' => 'Do we have to take Pilot Week?',
				'a' => 'No. The written model can land as an embedded team, a CoE or a stop. Pilot Week is useful when you want that model proven on your systems first.',
			),
			array(
				'q' => 'How is this different from AI QA Readiness?',
				'a' => 'Readiness identifies where AI can support quality work. This service designs the wider quality operating model.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'A current state assessment, prioritised gaps, a target operating model, ownership decisions and an implementation roadmap.',
			),
			array(
				'q' => 'Who owns the model when you leave?',
				'a' => 'You do. Handover includes a practical walkthrough and a named lead who can run it.',
			),
		),
			'closeEyebrow'   => 'Start with the model',
			'closeTitle'     => 'Define a quality model your teams can operate.',
			'closeText'      => 'Bring the current delivery flow, recent release evidence and the investment decisions facing your sponsor. We will define the advisory scope and required stakeholders.',
			'closeLink'      => 'Or discuss the current operating model',
			'closeCta'       => 'Talk to an engineer',
			'closeHref'      => '/contact#form',
		),
		'ai-testing-strategy-consulting' => array(
			'wp_title'       => 'AI Testing Strategy and Consulting',
			'crumb'          => 'AI testing strategy',
			'kicker'         => 'Advisory Services',
			'title'          => 'A plan for AI in QA and QA of <span class="hl">AI</span>',
			'signalIcon'     => 'i-brain',
			'signal'         => array( 'Workstreams separated', 'Controls defined', 'Roadmap prioritised' ),
			'lede'           => 'We develop a practical plan for AI assisted QA and independent testing of AI enabled products, with controls, priorities and accountable owners.',
			'covers'         => array( 'Split', 'Risk', 'Stack', 'Sequence', 'Names', 'Land' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'aitest-scope',
			'image'          => 'aitest-strategy-concept.jpg',
			'imageAlt'       => 'Path from splitting two problems through risk and stack to named ownership',
			'triggerTitle'   => 'AI testing needs two distinct workstreams.',
			'triggerText'    => 'Using AI to support QA and testing AI enabled products involves different risks, controls, skills and ownership decisions.',
			'triggers'       => array(
			array(
				'icon'  => 'i-brain',
				'title' => 'Two workstreams are combined',
				'text'  => 'Automation assistance and testing an AI enabled product are treated as one technology decision.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Technology is selected before controls',
				'text'  => 'A tool is introduced without agreed use cases, review requirements or ownership of residual risk.',
			),
			array(
				'icon'  => 'i-shield',
				'title' => 'QA of AI was skipped',
				'text'  => 'The product includes AI behaviour but the plan does not define independent validation or release evidence.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'Recommendations are not actionable',
				'text'  => 'The strategy lists vendors but does not prioritise initiatives, assign owners or define success.',
			),
		),
			'scopeTitle'     => 'A prioritised plan for both AI testing workstreams.',
			'scopeText'      => 'This service defines the operating plan. Readiness establishes initial priorities and testing delivery sits within the Testing AI Applications pillar.',
			'scope'          => array(
			array(
				'icon'   => 'i-gear',
				'title'  => 'AI in QA',
				'text'   => 'Identify suitable support for test design, maintenance, analysis and pipeline feedback with human review.',
				'output' => 'AI assisted QA plan',
			),
			array(
				'icon'   => 'i-brain',
				'title'  => 'QA of AI',
				'text'   => 'Define independent testing needs for language models, agents and generated code used in products.',
				'output' => 'Product AI test plan',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'What must stay human',
				'text'   => 'Document review, domain judgement, release authority and ownership of residual risk.',
				'output' => 'Control model',
			),
			array(
				'icon'   => 'i-compass',
				'title'  => 'Build, buy or ignore',
				'text'   => 'Evaluate technology options against requirements, integration effort, controls and ownership.',
				'output' => 'Technology decisions',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'A roadmap your team can run',
				'text'   => 'Prioritise initiatives by business value, risk, dependencies and delivery capacity.',
				'output' => 'Prioritised roadmap',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Accountability',
				'text'   => 'Names on both problems. Your authorised owner retains the decision.',
				'output' => 'Named owners',
			),
		),
			'boundary'       => 'This service is the operating plan. Initial readiness priorities belong to <a href="' . ow_home( '/services/ai-qa-readiness-assessment' ) . '">AI QA Readiness Assessment</a>. QA of AI as delivery belongs to <a href="' . ow_home( '/services/genai-llm-application-testing' ) . '">GenAI and LLM Application Testing</a>.',
			'deliveryTitle'  => 'Separate the workstreams before selecting technology.',
			'deliveryText'   => 'Each phase has a named owner and an output a sponsor can inspect, challenge and fund.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + sponsor',
				'text'   => 'Agree both problems, who to speak with and what a finished plan means.',
				'output' => 'Strategy brief',
			),
			array(
				'phase'  => 'Split',
				'owner'  => 'Named advisor',
				'text'   => 'Separate AI assisted QA from testing AI enabled products and define the outcomes for each.',
				'output' => 'Two workstreams',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'Named advisor',
				'text'   => 'Define human controls, evaluate technology choices and prioritise initiatives.',
				'output' => 'Prioritised roadmap',
			),
			array(
				'phase'  => 'Recommend',
				'owner'  => 'Named advisor',
				'text'   => 'Assign accountable owners and state the investment and implementation decisions required.',
				'output' => 'Ownership and decisions',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named advisor',
				'text'   => 'Transfer both workstreams and supporting decisions so your team can operate the plan.',
				'output' => 'Owned plan',
			),
		),
			'ownershipTitle' => 'The plan should remain operable after handover.',
			'ownershipHead'  => 'Every initiative has an accountable owner, required controls and a defined decision path.',
			'ownershipText'  => 'AI testing strategy is complete when both columns, the human list and the residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Split', 'AI in QA versus QA of AI is written.' ),
			array( 'Human', 'What must stay a person is named.' ),
			array( 'Sequence', 'A prioritised roadmap the team can run.' ),
			array( 'Continuity', 'Named owners on both problems.' ),
		),
			'ownershipIcon'  => 'i-brain',
			'proofTitle'     => 'A prioritised plan with accountable ownership.',
			'proofText'      => 'The value is two defined workstreams, practical controls, technology decisions and a roadmap your sponsor can fund.',
			'proofLeft'      => array(
			'kicker' => 'Split',
			'title'  => 'Two problems, written',
			'text'   => 'Acceleration versus the model in the product.',
		),
			'proofMid'       => array(
			'from'  => 'Risk',
			'to'    => 'Sequence',
			'title' => 'A roadmap your team can run',
			'text'  => 'What stays human, what to build or buy and which initiatives should come first.',
		),
			'proofRight'     => array(
			'kicker' => 'Own',
			'title'  => 'What still has no owner',
			'text'   => 'What still has no owner, for your authorised sponsor to decide against.',
		),
			'ecoTitle'       => 'The plan uses the work you already do.',
			'ecoText'        => 'We work with the boards and pipelines you have. TestsBuddi and theTestRo can sit on the accelerate side as in house options. They are not a mandatory seat.',
			'tools'          => array(
			array(
				't'     => 'How you track work',
				'tools' => array(
					ow_tool( 'jira', 'Jira' ),
					ow_tool( 'linear', 'Linear' ),
					ow_tool( 'azuredevops', 'Azure DevOps' ),
				),
			),
			array(
				't'     => 'The pipeline you have',
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
				),
			),
		),
			'engageTitle'    => 'Start with the workstream carrying the greatest business risk.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'AI testing strategy',
				'text'  => 'Separate the two workstreams and prioritise a roadmap with accountable owners.',
			),
			array(
				'label' => 'Build',
				'title' => 'Land the first moves',
				'text'  => 'Pilot or embed on the column that would actually change a release.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Keep the names',
				'text'  => 'You run the plan. We step back or stay only if you ask.',
			),
		),
			'faqTitle'       => 'Separate the workstreams before investing.',
			'faq'            => array(
			array(
				'q' => 'Do we have to use your in house tools?',
				'a' => 'No. They are one option on the accelerate side. Playwright in the repo is a first class path.',
			),
			array(
				'q' => 'Is this the readiness assessment?',
				'a' => 'Readiness identifies current opportunities and priorities. This service develops the operating plan for AI assisted QA and testing AI enabled products.',
			),
			array(
				'q' => 'Will you sell us an AI testing platform?',
				'a' => 'No. The deliverable is a sequenced plan with owners.',
			),
			array(
				'q' => 'How is this different from QA Strategy Advisory?',
				'a' => 'QA Strategy is the whole operating model. This service is specifically the two AI problems: acceleration versus product AI risk.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'Separate workstreams, required human controls, technology decisions, a prioritised roadmap and accountable owners.',
			),
			array(
				'q' => 'Who owns the plan when you leave?',
				'a' => 'You do. Handover includes a practical walkthrough and named owners on both problems.',
			),
		),
			'closeEyebrow'   => 'Start with two columns',
			'closeTitle'     => 'Build an AI testing plan your sponsor can fund.',
			'closeText'      => 'Bring the current AI assisted QA tools, AI enabled product scope and investment decisions facing your sponsor. We will define the strategy scope and required stakeholders.',
			'closeLink'      => 'Or discuss the current AI testing plan',
			'closeCta'       => 'Talk to an engineer',
			'closeHref'      => '/contact#form',
		),
		'test-automation-coe-setup' => array(
			'wp_title'       => 'Test Automation CoE Setup',
			'crumb'          => 'Automation CoE',
			'kicker'         => 'Advisory Services',
			'title'          => 'An automation practice your team can <span class="hl">keep</span>',
			'signalIcon'     => 'i-tools',
			'signal'         => array( 'Baseline documented', 'Standards agreed', 'Lead named' ),
			'lede'           => 'We establish a test automation centre of excellence with practical standards, governance, delivery controls and ownership your team can sustain.',
			'covers'         => array( 'Baseline', 'Standard', 'Pipeline', 'Ritual', 'Heal', 'Handover' ),
			'cta'            => 'Talk to an engineer',
			'scopeId'        => 'coe-scope',
			'image'          => 'coe-testing-concept.jpg',
			'imageAlt'       => 'Path from baseline and standard through pipeline and ritual to a named handover',
			'triggerTitle'   => 'A centre of excellence must change daily delivery.',
			'triggerText'    => 'Automation loses value when suites remain outside delivery pipelines, failed runs are ignored and nobody owns standards or maintenance.',
			'triggers'       => array(
			array(
				'icon'  => 'i-book',
				'title' => 'Documentation without adoption',
				'text'  => 'Standards exist but teams do not use them and critical suites remain outside shared delivery systems.',
			),
			array(
				'icon'  => 'i-gear',
				'title' => 'Automation without a bar',
				'text'  => 'Tests are added without selection criteria, review requirements or a maintenance approach.',
			),
			array(
				'icon'  => 'i-users',
				'title' => 'No owner after the vendor leaves',
				'text'  => 'The suite becomes difficult to maintain and failed pipeline runs stop influencing release decisions.',
			),
			array(
				'icon'  => 'i-compass',
				'title' => 'A tool is treated as the practice',
				'text'  => 'Technology is selected without standards, governance, adoption measures or an accountable lead.',
			),
		),
			'scopeTitle'     => 'A sustainable automation practice with clear ownership.',
			'scopeText'      => 'The service stands up the automation practice. The suite itself remains Automation Testing. The wider model remains QA Strategy.',
			'scope'          => array(
			array(
				'icon'   => 'i-compass',
				'title'  => 'Current state baseline',
				'text'   => 'Assess existing suites, frameworks, pipeline use, ownership, reliability and maintenance demand.',
				'output' => 'Baseline assessment',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'How a case earns automation',
				'text'   => 'Define selection, review, locator, data and maintenance standards for automated tests.',
				'output' => 'Automation standard',
			),
			array(
				'icon'   => 'i-gear',
				'title'  => 'The pipeline as a gate',
				'text'   => 'Define reliable execution, result review and response rules within delivery pipelines.',
				'output' => 'Pipeline controls',
			),
			array(
				'icon'   => 'i-shield',
				'title'  => 'Heals you can audit',
				'text'   => 'Optional. Playwright in the repo is first class.',
				'output' => 'Heal choice',
			),
			array(
				'icon'   => 'i-users',
				'title'  => 'Governance',
				'text'   => 'Set review forums, maintenance ownership and response rules for failed runs.',
				'output' => 'Governance model',
			),
			array(
				'icon'   => 'i-book',
				'title'  => 'A lead who stays',
				'text'   => 'Prepare a named internal lead to own standards, governance and ongoing improvement.',
				'output' => 'Named lead',
			),
		),
			'boundary'       => 'This service is the practice. The suite belongs to <a href="' . ow_home( '/services/test-automation-services' ) . '">Automation Testing</a>. The wider operating model belongs to <a href="' . ow_home( '/services/qa-strategy-advisory' ) . '">QA Strategy Advisory</a>.',
			'deliveryTitle'  => 'Assess the current suite before designing the practice.',
			'deliveryText'   => 'Each phase has a named owner and an output the internal lead and sponsor can inspect.',
			'delivery'       => array(
			array(
				'phase'  => 'Scope',
				'owner'  => 'QA lead + sponsor',
				'text'   => 'Agree suites, pipelines and what a finished practice means.',
				'output' => 'CoE brief',
			),
			array(
				'phase'  => 'Baseline',
				'owner'  => 'Named advisor',
				'text'   => 'Assess suites, frameworks, pipeline integration, reliability, ownership and maintenance demand.',
				'output' => 'Baseline assessment',
			),
			array(
				'phase'  => 'Design',
				'owner'  => 'Named advisor',
				'text'   => 'Define automation standards, pipeline controls, tool choices and required review.',
				'output' => 'Standards and controls',
			),
			array(
				'phase'  => 'Ritual',
				'owner'  => 'Named advisor + your lead',
				'text'   => 'Apply governance to a live suite, including review, ownership and response to failed runs.',
				'output' => 'Operating governance',
			),
			array(
				'phase'  => 'Handover',
				'owner'  => 'Named advisor',
				'text'   => 'Docs, walkthrough and the person who can run it. We step back.',
				'output' => 'Owned practice',
			),
		),
			'ownershipTitle' => 'The next red build should not depend on the original vendor.',
			'ownershipHead'  => 'Your lead receives the standards, controls and evidence needed to manage the automation practice.',
			'ownershipText'  => 'CoE work is complete when the standards, governance and residual risk can be understood by the people who inherit them.',
			'ownershipItems' => array(
			array( 'Baseline', 'Current suites, reliability and ownership are documented.' ),
			array( 'Bar', 'How a case earns automation is named.' ),
			array( 'Gate', 'A red build still means something.' ),
			array( 'Continuity', 'A named lead can explain the last ritual and the next suite.' ),
		),
			'ownershipIcon'  => 'i-tools',
			'proofTitle'     => 'A practice your internal lead can operate.',
			'proofText'      => 'The value is a current state baseline, agreed standards, dependable pipeline controls and accountable ownership.',
			'proofLeft'      => array(
			'kicker' => 'Baseline',
			'title'  => 'Current state documented',
			'text'   => 'Suites, frameworks, owners, reliability and pipeline integration.',
		),
			'proofMid'       => array(
			'from'  => 'Standard',
			'to'    => 'Ritual',
			'title' => 'A bar people still run',
			'text'  => 'How a case earns automation and what happens when the gate is red.',
		),
			'proofRight'     => array(
			'kicker' => 'Handover',
			'title'  => 'What the team still cannot own',
			'text'   => 'What still has no owner, for your authorised lead to decide against.',
		),
			'ecoTitle'       => 'The practice runs on frameworks you can keep.',
			'ecoText'        => 'We do not force a favourite rewrite. theTestRo can sit as an optional auditable heal. Playwright in the repo remains first class.',
			'tools'          => array(
			array(
				't'     => 'Frameworks',
				'tools' => array(
					ow_tool( 'selenium', 'Selenium' ),
					ow_tool( 'playwright', 'Playwright' ),
					ow_tool( 'appium', 'Appium' ),
					ow_tool( 'cucumber', 'Cucumber' ),
				),
			),
			array(
				't'     => 'The gate',
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
				),
			),
		),
			'engageTitle'    => 'Start with the suite causing the greatest delivery cost.',
			'engage'         => array(
			array(
				'label' => 'Establish',
				'title' => 'CoE setup',
				'text'  => 'Establish the baseline, standards, governance and ownership model.',
			),
			array(
				'label' => 'Build',
				'title' => 'Run it on a real suite',
				'text'  => 'Put the bar in the pipeline. Architecture still lives on Automation Testing.',
			),
			array(
				'label' => 'Operate',
				'title' => 'Handover',
				'text'  => 'A lead who can run it after we leave. Embed only if you ask.',
			),
		),
			'faqTitle'       => 'Assess the suite before defining the practice.',
			'faq'            => array(
			array(
				'q' => 'Is this just automation testing?',
				'a' => 'Automation testing delivers a suite. This service stands up the practice your team keeps after we leave.',
			),
			array(
				'q' => 'Do we have to use theTestRo?',
				'a' => 'No. It is optional in the standard. Code in the repo is first class.',
			),
			array(
				'q' => 'Will you stay forever?',
				'a' => 'No. The engagement is designed for handover to your named lead. Ongoing support can be considered separately if required.',
			),
			array(
				'q' => 'How is this different from QA Strategy Advisory?',
				'a' => 'QA Strategy is the wider operating model. CoE is the automation practice inside it.',
			),
			array(
				'q' => 'What do we receive?',
				'a' => 'A current state baseline, automation standards, governance, pipeline controls and a named lead prepared to run the practice.',
			),
			array(
				'q' => 'Who owns the practice when you leave?',
				'a' => 'You do. Handover includes a practical walkthrough and a named lead on your team.',
			),
		),
			'closeEyebrow'   => 'Start with the practice',
			'closeTitle'     => 'Build an automation practice your team can sustain.',
			'closeText'      => 'Bring the current suites, frameworks, pipeline evidence and ownership concerns. We will define the CoE scope and required stakeholders.',
			'closeLink'      => 'Or discuss the current automation practice',
			'closeCta'       => 'Talk to an engineer',
			'closeHref'      => '/contact#form',
		),
	);

	return $data;
}

/**
 * Single service buying payload, with image resolved to a full URI.
 *
 * @param string $slug Page slug.
 * @return array<string,mixed>|null
 */
function ow_get_service( $slug ) {
	$all  = ow_services_data();
	$slug = (string) $slug;
	if ( ! isset( $all[ $slug ] ) ) {
		return null;
	}
	$p = $all[ $slug ];
	if ( ! empty( $p['image'] ) && false === strpos( (string) $p['image'], '://' ) && 0 !== strpos( (string) $p['image'], '/' ) ) {
		$p['image'] = ow_img( $p['image'] );
	}
	return $p;
}

/**
 * Map of service slug => WordPress page title (for registration / admin).
 *
 * @return array<string,string>
 */
function ow_service_titles() {
	static $titles = null;
	if ( null !== $titles ) {
		return $titles;
	}
	$titles = array();
	foreach ( ow_services_data() as $slug => $p ) {
		$titles[ $slug ] = isset( $p['wp_title'] ) ? (string) $p['wp_title'] : $slug;
	}
	return $titles;
}

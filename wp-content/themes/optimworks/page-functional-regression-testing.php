<?php
/*
Template Name: Functional Regression Testing
*/
/**
 * Functional & Regression Testing — custom Core QA page (not ServiceBuyingPage).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'How do you prioritise a large regression estate?',
		'a' => 'We rank coverage by the cost and likelihood of failure. Revenue, trust, compliance and frequently changing journeys are tested first. Stable areas with lower risk remain visible in the coverage model but do not automatically receive the same execution depth on every release.',
	),
	array(
		'q' => 'What remains manual and what should be automated?',
		'a' => 'New behaviour, changed rules, exploratory work and scenarios requiring judgement begin with an engineer. Stable journeys that need repeatable execution can move into regression automation. We make that decision from risk and maintenance value, not from an automation percentage target.',
	),
	array(
		'q' => 'Can you support business users during UAT?',
		'a' => 'Yes. We prepare scenarios written for business users, suitable test data and an evidence structure for UAT. Business owners validate the decisions that belong to them while the QA team manages readiness, defects and retesting.',
	),
	array(
		'q' => 'How is this different from Automation Testing?',
		'a' => 'Functional and regression testing establishes what correct behaviour means and whether a release meets that expectation. Automation Testing builds the framework and CI/CD system that executes approved coverage repeatedly. The services work together but solve different problems.',
	),
	array(
		'q' => 'Who makes the final release decision?',
		'a' => 'Your authorised release owner retains the final decision. Optimworks provides a named QA recommendation with the tested scope, evidence, unresolved defects and residual risk needed to make that decision.',
	),
	array(
		'q' => 'Can you work with our existing process and tools?',
		'a' => 'Yes. We work inside the requirements, test management, defect and delivery systems your teams already use. The first step is to understand the current operating model before recommending any process or tooling change.',
	),
);

$scope = array(
	array(
		'n'           => '01',
		'icon'        => 'i-compass',
		'title'       => 'Complete business journeys',
		'description' => 'Customer, operator and partner workflows validated across connected systems, including state changes, notifications and downstream effects.',
		'output'      => 'Journey coverage',
	),
	array(
		'n'           => '02',
		'icon'        => 'i-shield',
		'title'       => 'Business rules and permissions',
		'description' => 'Pricing, eligibility, approvals, roles and regulated rules tested across positive, negative and boundary conditions.',
		'output'      => 'Rule and role evidence',
	),
	array(
		'n'           => '03',
		'icon'        => 'i-cloud',
		'title'       => 'System and integration behaviour',
		'description' => 'Application modules, APIs and third parties exercised together so a working screen cannot hide a failed handoff.',
		'output'      => 'Integration results',
	),
	array(
		'n'           => '04',
		'icon'        => 'i-gear',
		'title'       => 'Regression and change impact',
		'description' => 'Existing behaviour revalidated according to what changed, the likely blast radius and the business importance of the affected journey.',
		'output'      => 'Release regression',
	),
	array(
		'n'           => '05',
		'icon'        => 'i-monitor',
		'title'       => 'Exploratory and usability risk',
		'description' => 'Focused exploration of behaviours that scripted checks do not anticipate, guided by a clear charter and documented for product and engineering teams.',
		'output'      => 'Exploratory findings',
	),
	array(
		'n'           => '06',
		'icon'        => 'i-users',
		'title'       => 'UAT preparation and support',
		'description' => 'Scenarios written for business users, suitable data, readiness checks and defect coordination without turning business users into the test team.',
		'output'      => 'UAT evidence pack',
	),
);

$delivery = array(
	array(
		'phase'  => 'Discover',
		'owner'  => 'QA lead + product',
		'text'   => 'Review the product, release scope, architecture, existing coverage and the consequences of failure.',
		'output' => 'Release risk brief',
	),
	array(
		'phase'  => 'Prioritise',
		'owner'  => 'QA lead',
		'text'   => 'Identify revenue, trust, compliance and frequently changing journeys. Agree what is in scope and what is consciously deferred.',
		'output' => 'Prioritised journey map',
	),
	array(
		'phase'  => 'Design',
		'owner'  => 'QA engineer',
		'text'   => 'Create positive, negative, boundary, permission and integration scenarios. Drafts supported by AI remain subject to engineering review before they enter the pack.',
		'output' => 'Reviewed test pack',
	),
	array(
		'phase'  => 'Execute',
		'owner'  => 'QA team',
		'text'   => 'Validate changed behaviour, run relevant regression and conduct focused exploratory testing in the agreed environments.',
		'output' => 'Results and defect evidence',
	),
	array(
		'phase'  => 'Recommend',
		'owner'  => 'Named QA owner',
		'text'   => 'Retest fixes, report residual risk and issue a named QA recommendation for the authorised release owner.',
		'output' => 'QA release recommendation',
	),
);

$triggers = array(
	array(
		'icon'  => 'i-compass',
		'title' => 'Coverage is not tied to business risk',
		'text'  => 'The pack contains thousands of cases without showing which customer or business risks it covers.',
	),
	array(
		'icon'  => 'i-gauge',
		'title' => 'Regression no longer fits the release cycle',
		'text'  => 'A complete pass is too slow to run regularly, so teams choose between delayed delivery and unmeasured risk.',
	),
	array(
		'icon'  => 'i-users',
		'title' => 'UAT is finding defects too late',
		'text'  => 'Business users find broken rules and incomplete journeys that should have been resolved before handover.',
	),
	array(
		'icon'  => 'i-shield',
		'title' => 'Release status lacks clear ownership',
		'text'  => 'The tested scope, unresolved risks and basis for the release recommendation are not clear to decision makers.',
	),
);

$gov_docs = array(
	array( 'Scope', 'Release risk brief', 'Scope, critical journeys and known dependencies.' ),
	array( 'Coverage', 'Coverage and traceability', 'Requirements, scenarios, status and ownership.' ),
	array( 'Defects', 'Defect evidence', 'Steps, data, expected behaviour and observed behaviour.' ),
	array( 'Decision', 'QA recommendation', 'Build, tested scope, unresolved risk and named owner.' ),
);

$engage = array(
	array(
		'label' => 'Establish',
		'title' => 'Pilot Week',
		'text'  => 'Use a contained release area to expose coverage gaps, clarify risk and produce evidence on your systems before a longer engagement.',
	),
	array(
		'label' => 'Embed',
		'title' => 'Inside your delivery team',
		'text'  => 'QA engineers work in your planning, sprint and release cadence with defined ownership for coverage, defects and recommendations.',
	),
	array(
		'label' => 'Operate',
		'title' => 'Managed quality function',
		'text'  => 'Optimworks owns the agreed testing operating model across releases while your product and engineering leaders retain business decisions.',
	),
);

$ai_steps = array(
	array(
		'n'     => 'Source',
		'title' => 'Use approved delivery material',
		'text'  => 'Requirements, Jira stories, designs and existing cases provide the context for drafting coverage.',
	),
	array(
		'n'     => 'Draft',
		'title' => 'Prepare candidate scenarios',
		'text'  => 'AI can help draft positive, negative, boundary and journey scenarios for an engineer to assess.',
	),
	array(
		'n'     => 'Review',
		'title' => 'Review before use',
		'text'  => 'A QA engineer edits and approves the test pack. Exploratory testing and release recommendations remain the responsibility of the team.',
	),
);

get_header();
ow_service_frame_start();
?>
	<div class="service-page fr-enterprise ac-page">
		<section class="fr-hero">
			<div class="wrap">
				<nav class="sv-crumb" aria-label="Breadcrumb">
					<a href="<?php echo ow_home( '/' ); ?>">Home</a>
					<span>/</span>
					<a href="<?php echo ow_home( '/services' ); ?>">Services</a>
					<span>/</span>
					<strong>Functional &amp; regression testing</strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1">Core QA Services</div>
						<h1 class="an d2">
							Functional testing for <span class="hl">critical release journeys</span>
						</h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( 'i-bot' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span>AI supported test design</span>
							<i aria-hidden="true"></i>
							<span>Engineer reviewed coverage</span>
							<i aria-hidden="true"></i>
							<span>Named QA recommendation</span>
						</div>
						<p class="fr-lede an d3">
							We combine functional testing, integration testing and regression guided by risk
							across web, mobile, APIs and integrated systems. Each release closes with
							traceable evidence and a recommendation from an experienced QA engineer.
						</p>
						<div class="fr-covers an d3" aria-label="Service coverage">
							<span>Functional</span>
							<span>Integration</span>
							<span>Regression</span>
							<span>Exploratory</span>
							<span>UAT support</span>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#scope" class="btn btn-ghost">
								See what this covers
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php ow_service_workflow_hero( 'functional-testing-concept.jpg', 'Functional, integration, regression and API testing progressing towards release readiness' ); ?>
					</figure>
				</div>
			</div>
		</section>

		<section class="band fr-trigger-band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'01',
					'The problem this service solves',
					'Large test packs do not always show whether the release is ready.',
					'Teams need coverage tied to business risk, current product behaviour and a clear release recommendation.'
				);
				?>
				<div class="ac-triggers stag reveal">
					<?php foreach ( $triggers as $item ) : ?>
						<article>
							<span class="fr-trigger-mark" aria-hidden="true">
								<?php echo ow_icon( $item['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</span>
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['text'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="band band--alt" id="scope">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					'What we cover',
					'Coverage organised around business behaviour.',
					'We combine the test disciplines a release needs and make the boundary between them explicit.'
				);
				?>
				<div class="fr-scope-ledger reveal">
					<?php foreach ( $scope as $item ) : ?>
						<article>
							<span class="fr-scope-n"><?php echo esc_html( $item['n'] ); ?></span>
							<span class="fr-scope-ico">
								<?php echo ow_icon( $item['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</span>
							<div>
								<h3><?php echo esc_html( $item['title'] ); ?></h3>
								<p><?php echo esc_html( $item['description'] ); ?></p>
							</div>
							<span class="fr-scope-out"><?php echo esc_html( $item['output'] ); ?></span>
						</article>
					<?php endforeach; ?>
				</div>
				<div class="fr-boundary reveal">
					<span>Where this service stops</span>
					<p>
						This service establishes expected behaviour, validates the release and reports
						residual risk. Framework architecture, CI/CD implementation and ongoing suite
						engineering belong to
						<a href="<?php echo ow_home( '/services/test-automation-services' ); ?>">Automation Testing</a>. Keyboard,
						screen reader and WCAG evidence belong to
						<a href="<?php echo ow_home( '/services/accessibility-testing' ); ?>">Accessibility Testing</a>.
					</p>
				</div>
				<aside class="fr-ai-governance reveal" aria-labelledby="fr-ai-title">
					<div class="fr-ai-product">
						<div class="fr-ai-product-top">
							<span class="fr-ai-icon" aria-hidden="true">
								<?php echo ow_icon( 'i-bot' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</span>
							<span>Optional test design support</span>
						</div>
						<h3 id="fr-ai-title">AI supported drafting with human review</h3>
						<p>
							Where appropriate, our internal TestsBuddi platform can help prepare candidate scenarios.
							The QA engineer remains responsible for coverage and recommendations.
						</p>
					</div>
					<div class="fr-ai-flow">
						<span class="fr-ai-eyebrow">How assisted drafting is controlled</span>
						<ol>
							<?php foreach ( $ai_steps as $step ) : ?>
								<li>
									<span><?php echo esc_html( $step['n'] ); ?></span>
									<div>
										<h4><?php echo esc_html( $step['title'] ); ?></h4>
										<p><?php echo esc_html( $step['text'] ); ?></p>
									</div>
								</li>
							<?php endforeach; ?>
						</ol>
						<footer>
							<?php echo ow_icon( 'i-shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							Candidate scenarios do not enter release coverage without engineering review.
						</footer>
					</div>
				</aside>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'03',
					'How the work runs',
					'From release scope to an evidence based recommendation.',
					'Every phase has an accountable owner and a controlled output. Work remains visible inside your delivery process.'
				);
				?>
				<ol class="fr-delivery reveal">
					<?php foreach ( $delivery as $i => $item ) : ?>
						<li>
							<span class="fr-delivery-n"><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
							<div class="fr-delivery-main">
								<span class="fr-delivery-owner"><?php echo esc_html( $item['owner'] ); ?></span>
								<h3><?php echo esc_html( $item['phase'] ); ?></h3>
								<p><?php echo esc_html( $item['text'] ); ?></p>
							</div>
							<div class="fr-delivery-out">
								<span>Controlled output</span>
								<b><?php echo esc_html( $item['output'] ); ?></b>
							</div>
						</li>
					<?php endforeach; ?>
				</ol>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'04',
					'Governance and evidence',
					'Clear evidence for the release decision.'
				);
				?>
				<div class="fr-gov reveal">
					<div class="fr-gov-principles">
						<span class="eyebrow">Delivery controls</span>
						<h3>Visible scope. Traceable decisions. Named ownership.</h3>
						<p>
							Enterprise testing is credible when a release owner can see what was tested, what was not
							tested and why the recommendation was made.
						</p>
						<ul>
							<li>
								<?php echo ow_icon( 'i-shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								Risk and scope agreed before execution
							</li>
							<li>
								<?php echo ow_icon( 'i-compass' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								Requirements traced to reviewed coverage
							</li>
							<li>
								<?php echo ow_icon( 'i-monitor' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								Defects reported with reproducible evidence
							</li>
							<li>
								<?php echo ow_icon( 'i-users' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								QA recommendation owned by a named engineer
							</li>
						</ul>
					</div>
					<div class="fr-gov-docs">
						<?php foreach ( $gov_docs as $doc ) : ?>
							<article>
								<span><?php echo esc_html( $doc[0] ); ?></span>
								<div>
									<h4><?php echo esc_html( $doc[1] ); ?></h4>
									<p><?php echo esc_html( $doc[2] ); ?></p>
								</div>
							</article>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>

		<section class="band fr-proof-band">
			<div class="wrap">
				<div class="fr-proof-story reveal">
					<div>
						<span class="eyebrow">05 · Relevant proof</span>
						<strong>3 weeks</strong>
						<span class="fr-proof-arrow" aria-hidden="true">
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</span>
						<strong>1 week</strong>
					</div>
					<div>
						<h2>Regression time reduced on a 2,000+ case estate.</h2>
						<p>
							In a real engagement, 2,000+ regression cases were moved into repeatable automated
							coverage and the cycle fell from three weeks to one week. It shows the related
							outcome available when suitable regression coverage moves into automation
							engineering. The client remains anonymised.
						</p>
						<span class="fr-proof-note">
							Actual engagement result · Not a forecast for every programme
						</span>
					</div>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'06',
					'Tools on the engagement',
					'Tools and environments selected for the agreed scope.',
					'Coverage spans web, mobile, tablets and APIs. Test management stays in the systems your team already uses.'
				);
				ow_logo_bench(
					array(
						array(
							't'     => 'Web, mobile and tablet coverage',
							'tools' => array(
								ow_tool( 'chrome', 'Chrome' ),
								ow_tool( 'firefox', 'Firefox' ),
								ow_tool( 'safari', 'Safari' ),
								ow_tool( 'edge', 'Edge' ),
								ow_tool( 'android', 'Android' ),
								ow_tool( 'apple', 'iOS & iPadOS' ),
							),
						),
						array(
							't'     => 'Test management and API validation',
							'tools' => array(
								ow_tool( 'jira', 'Jira' ),
								ow_tool( 'azuredevops', 'Azure DevOps' ),
								ow_tool( 'testrail', 'TestRail' ),
								ow_tool( 'postman', 'Postman' ),
							),
						),
					)
				);
				?>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'07',
					'How to start',
					'Start at the level of ownership your release needs.'
				);
				?>
				<div class="fr-engage ac-engage reveal">
					<?php foreach ( $engage as $item ) : ?>
						<article>
							<span><?php echo esc_html( $item['label'] ); ?></span>
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['text'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'08',
					'Questions before you buy',
					'Clarify the operating model before the first release.'
				);
				ow_service_faq( $faq );
				?>
			</div>
		</section>

		<section class="band band--alt2 fr-enterprise-close">
			<div class="wrap reveal">
				<div class="fr-finale">
					<div>
						<span class="eyebrow">Start with evidence</span>
						<h2>Review the release risk on your own product.</h2>
						<p>
							Bring the release scope, the current test estate and the journeys that concern
							your team. We will help identify where confidence is supported and where it is
							assumed.
						</p>
					</div>
					<div class="fr-close-actions">
						<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
							Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="fr-close-link">
							Or start with Pilot Week
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
ow_service_frame_end();
get_footer();

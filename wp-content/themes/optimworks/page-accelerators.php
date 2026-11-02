<?php
/*
Template Name: Accelerators
*/
/**
 * AI Accelerators hub — port of accelerators.tsx (custom ServiceFrame layout).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'Are these products we licence?',
		'a' => 'No. Both were built in house and are used by Optimworks on client engagements. They are not licensed or white labelled products.',
	),
	array(
		'q' => 'Do we have to use both?',
		'a' => 'No. They address different needs. theTestRo supports deterministic test automation. TestsBuddi supports test generation, review, management and release gates.',
	),
	array(
		'q' => 'Can we keep our existing Playwright or Selenium suite?',
		'a' => 'Existing automation is reviewed as part of scoping. The recommended approach depends on your current suite, frameworks and ownership requirements.',
	),
	array(
		'q' => 'Does TestsBuddi have a public product site?',
		'a' => 'No. It is used on Optimworks engagements. theTestRo has a public site at thetestro.com.',
	),
	array(
		'q' => 'How is this different from the AI services?',
		'a' => 'The accelerators support delivery. The services define the engineering work, scope and outcomes agreed with the client.',
	),
	array(
		'q' => 'Where does AI Managed QA sit?',
		'a' => 'It is an engagement model in which Optimworks manages an agreed QA scope, including planning, execution, reporting and recommendations.',
	),
);

get_header();
ow_service_frame_start();
?>
	<div class="service-page fr-enterprise au-enterprise">
		<section class="fr-hero">
			<div class="wrap">
				<nav class="sv-crumb" aria-label="Breadcrumb">
					<a href="<?php echo ow_home( '/' ); ?>">Home</a>
					<span>/</span>
					<strong>AI Accelerators</strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1">AI Accelerators</div>
						<h1 class="an d2">
							In house tools that support quality <span class="hl">engineering</span>
						</h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( 'i-tools' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span>Not licensed</span>
							<i aria-hidden="true"></i>
							<span>Not white labelled</span>
							<i aria-hidden="true"></i>
							<span>Used on the work</span>
						</div>
						<p class="fr-lede an d3">
							theTestRo provides no code automation for web and APIs, with capture, replay and
							rules based self healing. Execution does not depend on an LLM. TestsBuddi supports
							test generation, knowledge, review, plans, runs and release gates. Engineers
							review generated test steps before scripts are used.
						</p>
						<div class="fr-covers an d3" aria-label="Accelerator coverage">
							<span>theTestRo</span>
							<span>TestsBuddi</span>
							<span>Managed QA</span>
							<span>Audit trail</span>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#tools" class="btn btn-ghost">
								See the two tools
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php
						ow_service_visual(
							$ow_img . '/accelerators-hub-concept.jpg',
							'Path from draft and review through run and heal to a named sign'
						);
						?>
					</figure>
				</div>
			</div>
		</section>

		<section class="band fr-trigger-band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'01',
					'Where they help',
					'Use automation without losing review.',
					'The tools support test design, execution and release evidence while engineers remain responsible for product context and recommendations.'
				);
				?>
				<div class="fr-triggers stag reveal">
					<article>
						<span class="fr-trigger-mark" aria-hidden="true">
							<?php echo ow_icon( 'i-users' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</span>
						<h3>Test design needs a faster first draft</h3>
						<p>
							Existing requirements, issues and product knowledge can provide the starting point
							for structured test cases.
						</p>
					</article>
					<article>
						<span class="fr-trigger-mark" aria-hidden="true">
							<?php echo ow_icon( 'i-bot' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</span>
						<h3>Interface changes disrupt automation</h3>
						<p>
							Deterministic self healing can reduce locator maintenance while keeping changes
							inspectable.
						</p>
					</article>
					<article>
						<span class="fr-trigger-mark" aria-hidden="true">
							<?php echo ow_icon( 'i-gear' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</span>
						<h3>Review needs clear governance</h3>
						<p>
							Generated tests move through human review before approved steps become scripts.
						</p>
					</article>
					<article>
						<span class="fr-trigger-mark" aria-hidden="true">
							<?php echo ow_icon( 'i-shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</span>
						<h3>Release evidence is fragmented</h3>
						<p>
							Plans, runs and connected delivery information can support a clearer release
							signal.
						</p>
					</article>
				</div>
			</div>
		</section>

		<section class="band" id="tools">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					'The two tools',
					'One governs the draft. One keeps the suite alive.',
					'TestsBuddi supports governed test design and theTestRo provides deterministic automation.'
				);
				?>
				<div class="acc-pair reveal">
					<article class="acc-prod is-featured">
						<span class="acc-mono" aria-hidden="true">tR</span>
						<span class="eyebrow">Deterministic runner</span>
						<h3>theTestRo</h3>
						<p>
							No code test automation for web and APIs. Record once, replay across environments
							and keep suites stable with rules based self healing. No LLM in the run path.
						</p>
						<ul>
							<li>No code recording and replay</li>
							<li>Web and API in one platform</li>
							<li>Rules based self healing, no LLM</li>
						</ul>
						<a class="learn" href="<?php echo ow_home( '/thetestro' ); ?>">
							theTestRo <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					</article>
					<article class="acc-prod">
						<span class="acc-mono" aria-hidden="true">TB</span>
						<span class="eyebrow">Governed platform</span>
						<h3>TestsBuddi</h3>
						<p>
							Generate structured tests from existing sources, maintain product knowledge and
							manage human review before approved steps become scripts.
						</p>
						<ul>
							<li>Connections with Jira, GitHub and existing knowledge</li>
							<li>PASS / WARN / BLOCK on the cut</li>
							<li>Used on engagements. No public product site</li>
						</ul>
						<a class="learn" href="<?php echo ow_home( '/testsbuddi' ); ?>">
							TestsBuddi <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					</article>
				</div>
				<div class="au-boundary reveal">
					<span>What this is</span>
					<p>
						Both tools were built and are used in house. They are not licensed or white
						labelled. The matching services are
						<a href="<?php echo ow_home( '/services/ai-assisted-test-automation' ); ?>">AI Assisted Test Automation</a>
						and
						<a href="<?php echo ow_home( '/services/ai-assisted-test-case-generation' ); ?>">AI assisted cases</a>.
					</p>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'03',
					'How they sit',
					'Understand, review, automate and assess.',
					'A governed path from source material to reviewed tests, execution evidence and a release recommendation.'
				);
				?>
				<ol class="au-delivery reveal">
					<li>
						<span class="au-delivery-index">01</span>
						<div class="au-delivery-copy">
							<span>TestsBuddi</span>
							<h3>Understand</h3>
							<p>Read the product, the stories and the suite you already have.</p>
						</div>
						<div class="au-delivery-output">
							<span>Output</span>
							<b>Intake map</b>
						</div>
					</li>
					<li>
						<span class="au-delivery-index">02</span>
						<div class="au-delivery-copy">
							<span>Experienced engineer</span>
							<h3>Review</h3>
							<p>Accept, edit or reject drafts before they become approved tests.</p>
						</div>
						<div class="au-delivery-output">
							<span>Output</span>
							<b>Approved cases</b>
						</div>
					</li>
					<li>
						<span class="au-delivery-index">03</span>
						<div class="au-delivery-copy">
							<span>theTestRo</span>
							<h3>Automate</h3>
							<p>Record, replay and maintain approved automation without an LLM.</p>
						</div>
						<div class="au-delivery-output">
							<span>Output</span>
							<b>Runnable pack</b>
						</div>
					</li>
					<li>
						<span class="au-delivery-index">04</span>
						<div class="au-delivery-copy">
							<span>Named engineer</span>
							<h3>Review evidence</h3>
							<p>Use test results and release context to make a recommendation.</p>
						</div>
						<div class="au-delivery-output">
							<span>Output</span>
							<b>Release evidence</b>
						</div>
					</li>
				</ol>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'04',
					'Compare',
					'Which tool does which job.',
					'Complementary problems. Neither tool makes the final call.'
				);
				?>
				<div class="reveal" style="overflow-x: auto;">
					<table class="compare">
						<thead>
							<tr>
								<th></th>
								<th>theTestRo</th>
								<th>TestsBuddi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Job</td>
								<td>No code web and API automation that stays runnable</td>
								<td>Governed QA from a requirement to a release signal</td>
							</tr>
							<tr>
								<td>How it thinks</td>
								<td>
									Record, replay and rules based heals. Not a silent language model rewrite.
								</td>
								<td>
									Knowledge backed drafts. A person still moves a case from draft to approved.
								</td>
							</tr>
							<tr>
								<td>You get</td>
								<td>
									No code recording, web and API checks, parallel runs and inspectable self
									healing
								</td>
								<td>
									Intake from what you have, a living knowledge base and a PASS / WARN / BLOCK
									gate
								</td>
							</tr>
							<tr>
								<td>Public site</td>
								<td>
									<a href="https://thetestro.com" rel="noopener" target="_blank">
										thetestro.com
									</a>
								</td>
								<td>None. Used on Optimworks engagements.</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<a class="learn" href="<?php echo ow_home( '/thetestro' ); ?>">
										theTestRo <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
									</a>
								</td>
								<td>
									<a class="learn" href="<?php echo ow_home( '/testsbuddi' ); ?>">
										TestsBuddi <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'05',
					'The other side of the work',
					'Testing for AI systems and generated code.',
					'Related services cover LLM features, agents and AI generated code.'
				);
				?>
				<div class="acc-keep reveal">
					<article class="split-card">
						<h3>AI authored code</h3>
						<p>
							Independent testing of AI generated code for correctness, edge cases and security
							risks.
						</p>
						<a class="learn" href="<?php echo ow_home( '/services/ai-generated-code-validation' ); ?>">
							AI generated code validation <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					</article>
					<article class="split-card">
						<h3>The features you ship</h3>
						<p>
							GenAI applications, agents and prompts need testing against intended behaviour and
							product risk.
						</p>
						<a class="learn" href="<?php echo ow_home( '/services/genai-llm-application-testing' ); ?>">
							GenAI and LLM testing <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					</article>
				</div>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'06',
					'When we run the function',
					'A managed option for ongoing QA.',
					'Optimworks can manage an agreed QA scope while testing assets remain in the systems agreed with the client.'
				);
				?>
				<div class="au-ownership reveal">
					<div>
						<span class="eyebrow">Ownership principle</span>
						<h3>Defined scope and clear responsibilities.</h3>
						<p>
							The managed model covers agreed planning, execution, reporting and release
							recommendations.
						</p>
					</div>
					<div class="au-ownership-list">
						<article>
							<?php echo ow_icon( 'i-shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<div>
								<h4>You keep</h4>
								<p>Repositories, pipelines and test assets held in agreed client systems.</p>
							</div>
						</article>
						<article>
							<?php echo ow_icon( 'i-gear' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<div>
								<h4>We run</h4>
								<p>The agreed testing cadence, evidence review and reporting.</p>
							</div>
						</article>
						<article>
							<?php echo ow_icon( 'i-users' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<div>
								<h4>Who reviews</h4>
								<p>
									Named engineering contacts review evidence and communicate recommendations.
								</p>
							</div>
						</article>
						<article>
							<?php echo ow_icon( 'i-compass' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<div>
								<h4>The door</h4>
								<p>
									Pilot Week is still how we start. <a href="<?php echo ow_home( '/how-we-work' ); ?>">How we work</a>
									explains the three shapes.
								</p>
							</div>
						</article>
					</div>
				</div>
				<p class="reveal" style="margin-top: 22px;">
					<a class="learn" href="<?php echo ow_home( '/ai-managed-qa' ); ?>">
						AI Managed QA <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</a>
				</p>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'07',
					'Technology fit',
					'Your stack stays first class.',
					'Existing tools and frameworks are considered when the engagement is scoped.'
				);
				ow_logo_bench(
					array(
						array(
							't'     => 'In house',
							'tools' => array(
								array( 'name' => 'theTestRo', 'mark' => 'tR' ),
								array( 'name' => 'TestsBuddi', 'mark' => 'TB' ),
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
						array(
							't'     => 'Intake and delivery',
							'tools' => array(
								ow_tool( 'jira', 'Jira' ),
								ow_tool( 'github', 'GitHub' ),
								ow_tool( 'githubactions', 'GitHub Actions' ),
							),
						),
					)
				);
				?>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php ow_flow_head( '08', 'Questions', 'Clarify scope, ownership and tool fit.' ); ?>
				<?php ow_service_faq( $faq ); ?>
			</div>
		</section>

		<section class="band band--alt2 au-close">
			<div class="wrap reveal">
				<div class="fr-finale">
					<div>
						<span class="eyebrow">Start with proof</span>
						<h2>Start with a focused scope.</h2>
						<p>Tell us about your current suite, product risks and delivery priorities.</p>
					</div>
					<div class="fr-close-actions">
						<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="btn btn-brand">
							Start a Pilot Week <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a href="<?php echo ow_home( '/contact#form' ); ?>" class="fr-close-link">
							Or discuss the current suite
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
ow_service_frame_end();
get_footer();

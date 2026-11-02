<?php
/*
Template Name: Test Automation Services
*/
/**
 * Test Automation Services — custom Core QA page (not ServiceBuyingPage).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img   = get_template_directory_uri() . '/assets/images';
$ow_tools = get_template_directory_uri() . '/assets/tools';

$faq = array(
	array(
		'q' => 'How do you decide what should be automated?',
		'a' => 'We prioritise stable journeys that carry revenue, trust, compliance or frequent regression cost. New behaviour, exploratory work and scenarios that rely on judgement remain with an engineer until repetition creates clear value.',
	),
	array(
		'q' => 'Can you work in the suite we already have?',
		'a' => 'Yes. We assess structure, stability, execution time, failure evidence and maintenance cost before recommending repair or replacement. A rewrite is justified only when the current framework cannot support reliable ownership.',
	),
	array(
		'q' => 'Which framework will you use?',
		'a' => 'The choice follows your product, engineering language, web, mobile or desktop coverage, cloud lab and CI environment. We do not introduce a preferred framework when your existing stack is the better lasting fit.',
	),
	array(
		'q' => 'Who owns it when you leave?',
		'a' => 'You do from the first day. Framework code, test code, configuration, execution history and documentation remain in your systems. Handover includes practical walkthroughs and named owners on your team.',
	),
	array(
		'q' => 'How do you control locator repairs?',
		'a' => 'A proposed locator repair is logged with the original locator, the replacement and the reason. An engineer reviews the change before it becomes accepted suite code.',
	),
	array(
		'q' => 'How is this different from Functional Testing?',
		'a' => 'Functional Testing establishes expected behaviour and reports residual risk. Automation Testing engineers the repeatable system that executes approved coverage in CI. The two services work together but have different ownership.',
	),
);

$scope = array(
	array(
		'icon'   => 'i-gear',
		'title'  => 'Framework architecture',
		'text'   => 'Project structure, reusable components, configuration, data strategy and reporting designed for the repository that will own them.',
		'output' => 'Framework baseline',
	),
	array(
		'icon'   => 'i-monitor',
		'title'  => 'Web automation',
		'text'   => 'Stable customer and operator journeys across supported browsers, locally or on a cloud device lab.',
		'output' => 'Browser suite',
	),
	array(
		'icon'   => 'i-pulse',
		'title'  => 'Mobile automation',
		'text'   => 'Native and hybrid journeys across Android, iOS and tablet coverage, locally or on a cloud device lab.',
		'output' => 'Device suite',
	),
	array(
		'icon'   => 'i-tools',
		'title'  => 'Desktop automation',
		'text'   => 'Thick client, Electron and packaged desktop journeys that sit outside the browser and still need repeatable coverage.',
		'output' => 'Desktop suite',
	),
	array(
		'icon'   => 'i-cloud',
		'title'  => 'API automation',
		'text'   => 'Contracts, business rules, authentication, negative paths and system handoffs tested below the user interface.',
		'output' => 'API suite',
	),
	array(
		'icon'   => 'i-compass',
		'title'  => 'CI orchestration',
		'text'   => 'Fast checks on pull requests, broader regression at the right delivery stage and reproducible evidence when a gate fails.',
		'output' => 'Pipeline gates',
	),
);

$delivery = array(
	array(
		'phase'  => 'Assess',
		'owner'  => 'Automation lead',
		'text'   => 'Review approved coverage, the existing suite, product architecture, release cadence and current maintenance cost.',
		'output' => 'Automation assessment',
	),
	array(
		'phase'  => 'Architect',
		'owner'  => 'Automation architect',
		'text'   => 'Define framework boundaries, execution layers, data control, environments, reporting and repository standards.',
		'output' => 'Architecture decision',
	),
	array(
		'phase'  => 'Prove',
		'owner'  => 'Automation engineer',
		'text'   => 'Automate a small set of valuable journeys and run them in the real pipeline before scaling the suite.',
		'output' => 'Working vertical slice',
	),
	array(
		'phase'  => 'Scale',
		'owner'  => 'Delivery team',
		'text'   => 'Expand approved coverage, control execution time and remove unreliable checks before they weaken the gate.',
		'output' => 'Release suites',
	),
	array(
		'phase'  => 'Transfer or operate',
		'owner'  => 'Named QA owner',
		'text'   => 'Transfer practical ownership to your team or continue operating the automation as a managed quality function.',
		'output' => 'Ownership model',
	),
);

$triggers = array(
	array(
		'icon'  => 'i-gear',
		'title' => 'Maintenance is taking too much sprint capacity',
		'text'  => 'Routine product change breaks selectors, data and setup faster than the team can repair them.',
	),
	array(
		'icon'  => 'i-gauge',
		'title' => 'Pipeline feedback is slow or inconsistent',
		'text'  => 'Checks pass locally, fail in CI or take too long to influence a delivery decision.',
	),
	array(
		'icon'  => 'i-monitor',
		'title' => 'The suite lacks a maintainable structure',
		'text'  => 'Recorded scripts grow, but reusable components, data control and reporting remain inconsistent.',
	),
	array(
		'icon'  => 'i-users',
		'title' => 'Ownership is unclear after handover',
		'text'  => 'The suite depends on the original vendor because standards, documentation and internal owners were never established.',
	),
);

$ownership = array(
	array( 'Repository', 'Framework code, test code and configuration remain in your source control.' ),
	array( 'Review', 'Automation changes follow pull request review and the standards agreed with your team.' ),
	array( 'Evidence', 'A failed check returns enough context to reproduce the problem and assign ownership.' ),
	array( 'Continuity', 'Documentation, practical walkthroughs and named owners support the next release.' ),
);

$engage = array(
	array(
		'label' => 'Establish',
		'title' => 'Pilot Week',
		'text'  => 'Prove one valuable journey in your repository and pipeline before committing to a broader automation programme.',
	),
	array(
		'label' => 'Build',
		'title' => 'Embedded automation team',
		'text'  => 'Engineers work inside your sprint and release cadence to build coverage alongside product change.',
	),
	array(
		'label' => 'Operate',
		'title' => 'Managed automation',
		'text'  => 'Optimworks owns the agreed framework, execution and maintenance model while your team retains the code.',
	),
);

$accel_steps = array(
	array(
		'n'     => 'Record',
		'title' => 'Capture the journey without writing code',
		'text'  => 'Actions on the application become reusable steps. Framework code is not the starting point.',
	),
	array(
		'n'     => 'Replay',
		'title' => 'Run web and API checks together',
		'text'  => 'The same flow can be replayed across environments, with UI and API validation in one platform.',
	),
	array(
		'n'     => 'Keep',
		'title' => 'Heal, report and review',
		'text'  => 'Self healing adapts to interface changes. Reports, logs and screenshots give an engineer enough to accept, reject or escalate.',
	),
);

get_header();
ow_service_frame_start();
?>
	<div class="service-page fr-enterprise au-enterprise">
		<section class="fr-hero au-hero">
			<div class="wrap">
				<nav class="sv-crumb" aria-label="Breadcrumb">
					<a href="<?php echo ow_home( '/' ); ?>">Home</a>
					<span>/</span>
					<a href="<?php echo ow_home( '/services' ); ?>">Services</a>
					<span>/</span>
					<strong>Automation testing</strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1">Core QA Services</div>
						<h1 class="an d2">
							Test automation that survives <span class="hl">product change</span>
						</h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( 'i-gear' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span>Repository owned</span>
							<i aria-hidden="true"></i>
							<span>Cloud or local execution</span>
							<i aria-hidden="true"></i>
							<span>CI connected</span>
						</div>
						<p class="fr-lede an d3">
							Approved coverage is built in your repository, run across web, mobile, desktop and
							APIs, returned with evidence on failure and handed to CI as a delivery signal.
						</p>
						<div class="fr-covers an d3" aria-label="Service coverage">
							<span>Web</span>
							<span>Mobile</span>
							<span>Desktop</span>
							<span>API</span>
							<span>Cloud labs</span>
							<span>CI</span>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#automation-scope" class="btn btn-ghost">
								See what this covers
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php ow_service_visual( $ow_img . '/automation-testing-concept.jpg?v=2', 'Automation path from approve and build through run and evidence to a CI gate' ); ?>
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
					'Automation loses value when results are slow or unreliable.',
					'The service addresses maintenance cost, inconsistent execution and unclear ownership.'
				);
				?>
				<div class="fr-triggers stag reveal">
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

		<section class="band" id="automation-scope">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					'What we cover',
					'Framework, execution and CI engineering.',
					'The service covers the system that makes automation repeatable. Functional Testing remains responsible for defining expected behaviour.'
				);
				?>
				<div class="au-scope reveal">
					<?php foreach ( $scope as $item ) : ?>
						<article>
							<span class="au-scope-icon">
								<?php echo ow_icon( $item['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</span>
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['text'] ); ?></p>
							<b><?php echo esc_html( $item['output'] ); ?></b>
						</article>
					<?php endforeach; ?>
				</div>
				<div class="au-boundary reveal">
					<span>Where this service stops</span>
					<p>
						This service automates approved coverage and operates the execution system.
						Establishing expected behaviour, exploratory testing and the QA release
						recommendation belong to
						<a href="<?php echo ow_home( '/services/functional-regression-testing' ); ?>">Functional Testing</a>. Keyboard
						and screen reader evidence against a named standard belong to
						<a href="<?php echo ow_home( '/services/accessibility-testing' ); ?>">Accessibility Testing</a>.
					</p>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'03',
					'How the work runs',
					'Prove the architecture before scaling the suite.',
					'Each phase has a named owner and an output that your engineering team can inspect.'
				);
				?>
				<ol class="au-delivery reveal">
					<?php foreach ( $delivery as $i => $item ) : ?>
						<li>
							<span class="au-delivery-index"><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
							<div class="au-delivery-copy">
								<span><?php echo esc_html( $item['owner'] ); ?></span>
								<h3><?php echo esc_html( $item['phase'] ); ?></h3>
								<p><?php echo esc_html( $item['text'] ); ?></p>
							</div>
							<div class="au-delivery-output">
								<span>Output</span>
								<b><?php echo esc_html( $item['output'] ); ?></b>
							</div>
						</li>
					<?php endforeach; ?>
				</ol>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'04',
					'Who owns the outcome',
					'Code, documentation and ownership remain with your team.'
				);
				?>
				<div class="au-ownership reveal">
					<div>
						<span class="eyebrow">Ownership principle</span>
						<h3>Your team retains the knowledge needed to maintain the suite.</h3>
						<p>
							Automation is complete only when the repository, pipeline, evidence and maintenance model
							can be understood by the people who inherit them.
						</p>
					</div>
					<div class="au-ownership-list">
						<?php foreach ( $ownership as $row ) : ?>
							<article>
								<?php echo ow_icon( 'i-shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								<div>
									<h4><?php echo esc_html( $row[0] ); ?></h4>
									<p><?php echo esc_html( $row[1] ); ?></p>
								</div>
							</article>
						<?php endforeach; ?>
					</div>
				</div>
				<aside class="fr-ai-governance reveal" aria-labelledby="au-accel-title">
					<div class="fr-ai-product">
						<div class="fr-ai-product-top">
							<span class="fr-ai-icon" aria-hidden="true">
								<img src="<?php echo esc_url( $ow_tools . '/thetestro.png' ); ?>" alt="" />
							</span>
							<span>theTestRo on the engagement</span>
						</div>
						<h3 id="au-accel-title">Faster automation without waiting on code</h3>
						<p>
							theTestRo is our in house no code platform. Teams record journeys, replay them across
							environments, cover web and APIs together and keep suites stable with self healing.
							Execution is rules based rather than LLM generated. An engineer still reviews results.
						</p>
						<a href="<?php echo ow_home( '/thetestro' ); ?>">
							See theTestRo <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					</div>
					<div class="fr-ai-flow">
						<span class="fr-ai-eyebrow">How the cycle stays fast</span>
						<div class="au-pace">
							<article>
								<span>Without theTestRo</span>
								<b>Wait on specialists to write scripts</b>
								<p>New coverage and broken locators queue behind people who can code the framework.</p>
							</article>
							<article class="is-fast">
								<span>With theTestRo</span>
								<b>Record, replay and keep running</b>
								<p>
									Journeys are captured once, reused across environments and maintained when the UI
									moves.
								</p>
							</article>
						</div>
						<ol>
							<?php foreach ( $accel_steps as $step ) : ?>
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
							Results and maintenance changes remain reviewable. Speed does not replace ownership.
						</footer>
					</div>
				</aside>
			</div>
		</section>

		<section class="band au-proof-band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'05',
					'Verified programme results',
					'Relevant results from automation engagements.',
					'Real anonymised engagement results. They are evidence of delivery, not a forecast for every programme.'
				);
				?>
				<div class="au-proof reveal">
					<article>
						<strong>300+</strong>
						<h3>Cases in daily regression</h3>
						<p>A real automation engagement with more than 300 cases executed every day.</p>
					</article>
					<article class="is-featured">
						<div>
							<strong>3 weeks</strong>
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<strong>1 week</strong>
						</div>
						<h3>Regression cycle reduced</h3>
						<p>More than 2,000 cases automated in a real engagement.</p>
					</article>
					<article>
						<strong>3 years</strong>
						<h3>Embedded automation delivery</h3>
						<p>
							More than 500 cases using Selenium, Cucumber and Appium across a three year engagement.
						</p>
					</article>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'06',
					'Tools on the engagement',
					'Framework and pipeline choices based on your product.',
					'We work with the web, mobile, desktop, cloud lab, AI and CI tools your engineering team already uses and can own.'
				);
				ow_logo_bench(
					array(
						array(
							't'     => 'Web automation',
							'tools' => array(
								ow_tool( 'thetestro.png', 'theTestRo' ),
								ow_tool( 'selenium', 'Selenium' ),
								ow_tool( 'playwright', 'Playwright' ),
								ow_tool( 'cypress', 'Cypress' ),
								ow_tool( 'webdriverio', 'WebdriverIO' ),
								ow_tool( 'cucumber', 'Cucumber' ),
								ow_tool( 'testinglibrary', 'Testing Library' ),
							),
						),
						array(
							't'     => 'Mobile automation',
							'tools' => array(
								ow_tool( 'appium', 'Appium' ),
								ow_tool( 'android', 'Android' ),
								ow_tool( 'apple', 'iOS & iPadOS' ),
								ow_tool( 'flutter', 'Flutter' ),
								ow_tool( 'firebase', 'Firebase' ),
							),
						),
						array(
							't'     => 'Desktop automation',
							'tools' => array(
								ow_tool( 'electron', 'Electron' ),
								ow_tool( 'tauri', 'Tauri' ),
								ow_tool( 'robotframework', 'Robot Framework' ),
								ow_tool( 'dotnet', 'Windows desktop' ),
							),
						),
						array(
							't'     => 'Cloud device labs',
							'tools' => array(
								ow_tool( 'browserstack.svg', 'BrowserStack' ),
								ow_tool( 'lambdatest.png', 'LambdaTest' ),
								ow_tool( 'saucelabs', 'Sauce Labs' ),
							),
						),
						array(
							't'     => 'AI and visual platforms',
							'tools' => array(
								ow_tool( 'katalon.svg', 'Katalon' ),
								ow_tool( 'testim.svg', 'Testim' ),
								ow_tool( 'mabl.png', 'Mabl' ),
								ow_tool( 'applitools.png', 'Applitools' ),
								ow_tool( 'githubcopilot', 'GitHub Copilot' ),
								ow_tool( 'huggingface', 'Hugging Face' ),
								ow_tool( 'langchain', 'LangChain' ),
								ow_tool( 'anthropic', 'Anthropic' ),
							),
						),
						array(
							't'     => 'API and language runners',
							'tools' => array(
								ow_tool( 'postman', 'Postman' ),
								ow_tool( 'insomnia', 'Insomnia' ),
								ow_tool( 'swagger', 'Swagger' ),
								ow_tool( 'pytest', 'pytest' ),
								ow_tool( 'junit5', 'JUnit' ),
								ow_tool( 'jest', 'Jest' ),
								ow_tool( 'mocha', 'Mocha' ),
								ow_tool( 'k6', 'k6' ),
							),
						),
						array(
							't'     => 'CI and delivery',
							'tools' => array(
								ow_tool( 'githubactions', 'GitHub Actions' ),
								ow_tool( 'jenkins', 'Jenkins' ),
								ow_tool( 'gitlab', 'GitLab CI' ),
								ow_tool( 'azuredevops', 'Azure DevOps' ),
								ow_tool( 'circleci', 'CircleCI' ),
								ow_tool( 'teamcity', 'TeamCity' ),
								ow_tool( 'bitbucket', 'Bitbucket' ),
								ow_tool( 'buildkite', 'Buildkite' ),
								ow_tool( 'bamboo', 'Bamboo' ),
								ow_tool( 'docker', 'Docker' ),
								ow_tool( 'kubernetes', 'Kubernetes' ),
								ow_tool( 'github', 'GitHub' ),
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
					'Start with the level of automation ownership you need.'
				);
				?>
				<div class="au-engage reveal">
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
					'Set the ownership model before framework work begins.'
				);
				ow_service_faq( $faq );
				?>
			</div>
		</section>

		<section class="band band--alt2 au-close">
			<div class="wrap reveal">
				<div class="fr-finale">
					<div>
						<span class="eyebrow">Start in your repository</span>
						<h2>Prove one valuable journey in the real pipeline.</h2>
						<p>
							Bring the current suite, repository and pipeline. We will identify the smallest
							useful slice for proving architecture, execution and ownership.
						</p>
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

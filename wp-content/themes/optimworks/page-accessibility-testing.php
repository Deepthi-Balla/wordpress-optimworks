<?php
/*
Template Name: Accessibility Testing
*/
/**
 * Accessibility Testing — custom Core QA page (not ServiceBuyingPage).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'Do you only run an automated scan?',
		'a' => 'A scan can be an input. The service exercises agreed journeys with keyboard and assistive technology, with evidence a later engineer can verify and a named view of residual risk against the agreed standard.',
	),
	array(
		'q' => 'Which WCAG level do you test against?',
		'a' => 'The brief names the standard. WCAG 2.2 Level AA is the usual commercial target. A different level is used when your product owner requires it. We do not substitute a generic badge for that agreement.',
	),
	array(
		'q' => 'How is this different from Functional Testing?',
		'a' => 'Functional Testing asks whether a journey works as a typical user or operator experiences it. Accessibility testing asks whether the same journey can be completed with keyboard and assistive technology, against the agreed standard.',
	),
	array(
		'q' => 'Do you test with real assistive technology?',
		'a' => 'Yes on the agreed journeys and platforms. Automated checks find candidates. Keyboard and screen reader exercise produces the evidence used in the report.',
	),
	array(
		'q' => 'What do we receive?',
		'a' => 'The agreed standard and journeys, findings with enough evidence to reproduce them and a named view of residual risk. Your authorised owner retains the decision on what to fix and when to release.',
	),
	array(
		'q' => 'Who owns the findings when you leave?',
		'a' => 'You do from the first day. Evidence and the report remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
	),
);

$scope = array(
	array(
		'icon'   => 'i-compass',
		'title'  => 'Agreed journeys and standard',
		'text'   => 'Journeys, platforms and the WCAG level recorded before testing starts so findings are tied to a clear brief.',
		'output' => 'Named standard',
	),
	array(
		'icon'   => 'i-monitor',
		'title'  => 'Keyboard and focus',
		'text'   => 'Tab order, visible focus, traps and operation without a pointer checked so a journey can be completed from the keyboard.',
		'output' => 'Keyboard results',
	),
	array(
		'icon'   => 'i-users',
		'title'  => 'Screen reader behaviour',
		'text'   => 'Names, roles, states and announcements exercised on agreed journeys with the selected screen readers.',
		'output' => 'Reader results',
	),
	array(
		'icon'   => 'i-pulse',
		'title'  => 'Contrast and alternatives',
		'text'   => 'Colour contrast, text alternatives and control names checked so content is not left as a visual assumption.',
		'output' => 'Contrast evidence',
	),
	array(
		'icon'   => 'i-gear',
		'title'  => 'Forms and errors',
		'text'   => 'Labels, required fields, error text and recovery checked so a blocked form is announced and recoverable.',
		'output' => 'Form evidence',
	),
	array(
		'icon'   => 'i-book',
		'title'  => 'Evidence and recommendation',
		'text'   => 'A named report of what held, what failed and residual risk against the agreed standard. Your authorised owner retains the release decision.',
		'output' => 'Named report',
	),
);

$delivery = array(
	array(
		'phase'  => 'Scope',
		'owner'  => 'QA lead + product owner',
		'text'   => 'Agree journeys, platforms, assistive technology and the WCAG level. Testing does not start until that agreement is written.',
		'output' => 'Accessibility brief',
	),
	array(
		'phase'  => 'Audit',
		'owner'  => 'QA engineer',
		'text'   => 'Run automated checks as an input. Rank candidates against the agreed journeys rather than treating a scan list as the result.',
		'output' => 'Candidate list',
	),
	array(
		'phase'  => 'Exercise',
		'owner'  => 'QA team',
		'text'   => 'Work the agreed journeys with keyboard and screen readers. Capture enough context for another engineer to reproduce each finding.',
		'output' => 'Findings and evidence',
	),
	array(
		'phase'  => 'Report',
		'owner'  => 'Named QA owner',
		'text'   => 'Rank findings by impact to the agreed journeys. State residual risk against the named standard.',
		'output' => 'Accessibility report',
	),
	array(
		'phase'  => 'Retest',
		'owner'  => 'Named QA owner',
		'text'   => 'Retest agreed fixes on the same journeys and update the residual risk view. The decision to release remains with your authorised owner.',
		'output' => 'Updated recommendation',
	),
);

$triggers = array(
	array(
		'icon'  => 'i-monitor',
		'title' => 'Keyboard users cannot complete key journeys',
		'text'  => 'Mouse based checks pass, but tab order, focus and keyboard operation have not been verified.',
	),
	array(
		'icon'  => 'i-compass',
		'title' => 'Automated scan results lack context',
		'text'  => 'A list of issues exists without agreed journeys, a named standard or evidence that helps an owner act.',
	),
	array(
		'icon'  => 'i-users',
		'title' => 'Design review has not verified implementation',
		'text'  => 'Labels, alternatives and colour contrast may look correct while screen reader announcements remain untested.',
	),
	array(
		'icon'  => 'i-gear',
		'title' => 'Fixes are closed without retesting',
		'text'  => 'A tracker status changes, but the original keyboard or screen reader path has not been repeated.',
	),
);

$ownership = array(
	array( 'Standard', 'Testing is measured against a named WCAG level and agreed journeys.' ),
	array( 'Evidence', 'A finding includes enough context for another engineer to reproduce it.' ),
	array( 'Report', 'Residual risk is named. Your owner retains the release decision.' ),
	array( 'Continuity', 'A named owner on your team can explain the last report and the next retest.' ),
);

$engage = array(
	array(
		'label' => 'Establish',
		'title' => 'Pilot Week',
		'text'  => 'Prove one agreed journey with keyboard and a screen reader in your environment before committing to a broader programme.',
	),
	array(
		'label' => 'Build',
		'title' => 'Embedded accessibility testing',
		'text'  => 'Engineers work inside your release cadence to keep keyboard, reader and evidence current as the product changes.',
	),
	array(
		'label' => 'Operate',
		'title' => 'Managed accessibility quality',
		'text'  => 'Optimworks operates the agreed testing and reporting while your team retains the product and the release decision.',
	),
);

get_header();
ow_service_frame_start();
?>
	<div class="service-page fr-enterprise au-enterprise ac-page">
		<section class="fr-hero">
			<div class="wrap">
				<nav class="sv-crumb" aria-label="Breadcrumb">
					<a href="<?php echo ow_home( '/' ); ?>">Home</a>
					<span>/</span>
					<a href="<?php echo ow_home( '/services' ); ?>">Services</a>
					<span>/</span>
					<strong>Accessibility testing</strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1">Core QA Services</div>
						<h1 class="an d2">
							Accessibility testing against WCAG, with <span class="hl">evidence</span>
						</h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( 'i-users' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span>Standard agreed</span>
							<i aria-hidden="true"></i>
							<span>Keyboard exercised</span>
							<i aria-hidden="true"></i>
							<span>Reader evidenced</span>
						</div>
						<p class="fr-lede an d3">
							Keyboard, screen reader, contrast and forms tested against a named WCAG level,
							with evidence another engineer can verify.
						</p>
						<div class="fr-covers an d3" aria-label="Service coverage">
							<span>WCAG 2.2</span>
							<span>Keyboard</span>
							<span>Screen readers</span>
							<span>Contrast</span>
							<span>Forms</span>
							<span>Evidence</span>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#a11y-scope" class="btn btn-ghost">
								See what this covers
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php ow_service_workflow_hero( 'accessibility-testing-concept.jpg', 'Accessibility path from audit and keyboard through screen reader and contrast to a named conformance report' ); ?>
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
					'A journey that works with a mouse may still block other users.',
					'Keyboard, focus, screen reader and contrast checks provide evidence that automated scans alone cannot supply.'
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

		<section class="band" id="a11y-scope">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					'What we cover',
					'Agreed journeys against a named standard.',
					'The service proves keyboard, reader and contrast on the journeys that matter. Functional Testing remains responsible for typical user behaviour.'
				);
				?>
				<div class="ac-scope stag reveal">
					<?php foreach ( $scope as $item ) : ?>
						<article>
							<span class="ac-card-icon">
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
						This service tests access with keyboard and assistive technology against a named
						standard. Typical user journeys belong to
						<a href="<?php echo ow_home( '/services/functional-regression-testing' ); ?>">Functional Testing</a>. Repeatable
						execution of approved checks belongs to
						<a href="<?php echo ow_home( '/services/test-automation-services' ); ?>">Automation Testing</a>.
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
					'Name the standard before anything is exercised.',
					'Each phase has a named owner and an output your product owner can inspect.'
				);
				?>
				<ol class="ac-delivery">
					<?php foreach ( $delivery as $i => $item ) : ?>
						<li class="reveal">
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
					'Evidence and retest steps remain with your team.'
				);
				?>
				<div class="au-ownership reveal">
					<div>
						<span class="eyebrow">Ownership principle</span>
						<h3>Your team receives evidence it can reproduce and retest.</h3>
						<p>
							The standard, journeys, evidence and retest status remain available to product and
							engineering teams after handover.
						</p>
					</div>
					<div class="au-ownership-list">
						<?php foreach ( $ownership as $row ) : ?>
							<article>
								<?php echo ow_icon( 'i-users' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								<div>
									<h4><?php echo esc_html( $row[0] ); ?></h4>
									<p><?php echo esc_html( $row[1] ); ?></p>
								</div>
							</article>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>

		<section class="band au-proof-band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'05',
					'What you keep',
					'Reproducible findings against a named WCAG level.',
					'Generic pass rates do not explain whether users can complete key journeys. We provide the agreed standard, evidence, impact and retest status.'
				);
				?>
				<div class="au-proof reveal">
					<article>
						<strong>Standard</strong>
						<h3>Named before work starts</h3>
						<p>
							Journeys, platforms and WCAG level recorded so the exercise cannot drift into a generic
							scan.
						</p>
					</article>
					<article class="is-featured">
						<div>
							<strong>Keyboard</strong>
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<strong>Reader</strong>
						</div>
						<h3>Findings you can reproduce</h3>
						<p>
							Each finding includes enough context for another engineer to confirm it on the same
							journey.
						</p>
					</article>
					<article>
						<strong>Verdict</strong>
						<h3>Access still blocked</h3>
						<p>What held, what failed and the risk that remains against the agreed standard.</p>
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
					'Checks and platforms selected for your product.',
					'We work with the browsers, platforms and delivery tools your engineering team already uses and can own.'
				);
				ow_logo_bench(
					array(
						array(
							't'     => 'Assessment',
							'tools' => array(
								ow_tool( 'lighthouse', 'Lighthouse' ),
								ow_tool( 'w3c', 'W3C' ),
								ow_tool( 'storybook', 'Storybook' ),
								ow_tool( 'figma', 'Figma' ),
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
							't'     => 'Platforms',
							'tools' => array(
								ow_tool( 'apple', 'Apple' ),
								ow_tool( 'android', 'Android' ),
							),
						),
						array(
							't'     => 'CI and runners',
							'tools' => array(
								ow_tool( 'playwright', 'Playwright' ),
								ow_tool( 'githubactions', 'GitHub Actions' ),
								ow_tool( 'jenkins', 'Jenkins' ),
								ow_tool( 'azuredevops', 'Azure DevOps' ),
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
					'Start with the journey that would cost the most to get wrong.'
				);
				?>
				<div class="au-engage ac-engage reveal">
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
					'Agree the standard and journeys before testing.'
				);
				ow_service_faq( $faq );
				?>
			</div>
		</section>

		<section class="band band--alt2 au-close">
			<div class="wrap reveal">
				<div class="fr-finale">
					<div>
						<span class="eyebrow">Start with one journey</span>
						<h2>Assess one agreed journey with keyboard and screen reader.</h2>
						<p>
							Bring the journey, the platforms and the finding that concerns your team. We will
							identify the smallest useful slice for keyboard and screen reader evidence against
							a named standard.
						</p>
					</div>
					<div class="fr-close-actions">
						<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="btn btn-brand">
							Start a Pilot Week <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a href="<?php echo ow_home( '/contact#form' ); ?>" class="fr-close-link">
							Or discuss the current access risk
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
ow_service_frame_end();
get_footer();

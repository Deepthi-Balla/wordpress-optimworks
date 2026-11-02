<?php
/*
Template Name: Security Penetration Testing
*/
/**
 * Application Security Testing — custom Core QA page (not ServiceBuyingPage).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'Is this only a vulnerability scan?',
		'a' => 'No. Automated scanning can inform the work, but the service also reviews agreed application behaviour, access controls and configuration. Findings include reproducible evidence, affected scope and remediation context.',
	),
	array(
		'q' => 'How do you control the testing scope?',
		'a' => 'Work starts only after the assets, environments, test accounts, windows and exclusions are agreed in writing. Testing stays within that agreement.',
	),
	array(
		'q' => 'How is this different from API Testing?',
		'a' => 'API Testing asks whether the contract and handoff are correct. Application security testing examines agreed access controls, data handling and configuration for weaknesses. The services can be used together but answer different questions.',
	),
	array(
		'q' => 'How is this different from Functional Testing?',
		'a' => 'Functional Testing validates expected journeys. Application security testing checks agreed misuse cases, access controls, session behaviour and configuration within the documented scope.',
	),
	array(
		'q' => 'What do we receive?',
		'a' => 'You receive the agreed scope, surfaces tested, reproducible findings, severity rationale and remediation guidance. Your security and product owners retain decisions on remediation and release.',
	),
	array(
		'q' => 'Who owns the findings when you leave?',
		'a' => 'You do from the first day. Evidence and reports remain in your systems. Handover includes a practical walkthrough so your team can reproduce findings and plan retesting.',
	),
);

$scope = array(
	array(
		'icon'   => 'i-compass',
		'title'  => 'Scope and testing rules',
		'text'   => 'Assets, environments, accounts, windows and exclusions recorded before testing starts. Work stays within that written agreement.',
		'output' => 'Agreed scope',
	),
	array(
		'icon'   => 'i-globe',
		'title'  => 'Surface mapping',
		'text'   => 'Applications, services, roles and data stores mapped so testing focuses on agreed assets and likely exposure.',
		'output' => 'Surface map',
	),
	array(
		'icon'   => 'i-shield',
		'title'  => 'Access and session behaviour',
		'text'   => 'Authentication, roles, session handling and least privilege checked across agreed positive and negative cases.',
		'output' => 'Access results',
	),
	array(
		'icon'   => 'i-gear',
		'title'  => 'Configuration and dependencies',
		'text'   => 'Build, runtime and dependency configuration reviewed for the agreed assets, with relevant weaknesses documented for remediation.',
		'output' => 'Configuration findings',
	),
	array(
		'icon'   => 'i-pulse',
		'title'  => 'Scoped application checks',
		'text'   => 'Agreed misuse cases and application paths exercised in the agreed window. Each finding includes enough context to reproduce it.',
		'output' => 'Reproducible findings',
	),
	array(
		'icon'   => 'i-book',
		'title'  => 'Evidence and report',
		'text'   => 'A report describing affected assets, evidence, severity rationale, remediation guidance and remaining risk within the tested scope.',
		'output' => 'Security testing report',
	),
);

$delivery = array(
	array(
		'phase'  => 'Scope',
		'owner'  => 'QA lead + client security owner',
		'text'   => 'Agree assets, environments, accounts, windows, contacts and exclusions before testing begins.',
		'output' => 'Testing brief',
	),
	array(
		'phase'  => 'Map',
		'owner'  => 'QA lead',
		'text'   => 'Identify the in scope surfaces, roles and data that need focused application security checks.',
		'output' => 'Surface map',
	),
	array(
		'phase'  => 'Test',
		'owner'  => 'QA team',
		'text'   => 'Run the agreed application checks within the approved window and capture steps another engineer can use to reproduce each finding.',
		'output' => 'Findings and evidence',
	),
	array(
		'phase'  => 'Report',
		'owner'  => 'Named QA owner',
		'text'   => 'Explain affected assets, severity rationale, remediation options and remaining risk in language product and security owners can use.',
		'output' => 'Security report',
	),
	array(
		'phase'  => 'Retest',
		'owner'  => 'Named QA owner',
		'text'   => 'Retest agreed fixes and update the finding status. Release and risk acceptance decisions remain with your authorised owners.',
		'output' => 'Retest report',
	),
);

$triggers = array(
	array(
		'icon'  => 'i-monitor',
		'title' => 'Negative access cases are not covered',
		'text'  => 'Expected journeys pass, but refused roles, expired sessions and access to restricted data have not been tested.',
	),
	array(
		'icon'  => 'i-compass',
		'title' => 'Scan results lack application context',
		'text'  => 'A list of potential issues exists without agreed scope, impact rationale or reproducible evidence.',
	),
	array(
		'icon'  => 'i-shield',
		'title' => 'Configuration has not been reviewed',
		'text'  => 'Build, runtime and dependency settings have not been assessed for the applications and environments in scope.',
	),
	array(
		'icon'  => 'i-gear',
		'title' => 'Findings are closed without retesting',
		'text'  => 'A tracker status changes, but the original steps have not been repeated to confirm the fix.',
	),
);

$ownership = array(
	array( 'Scope', 'Testing starts only after assets, accounts, windows and exclusions are agreed in writing.' ),
	array( 'Evidence', 'Each finding includes the steps and context needed for your team to reproduce it.' ),
	array( 'Report', 'Severity rationale, remediation guidance and remaining risk are documented.' ),
	array( 'Ownership', 'Your security and product owners retain remediation, acceptance and release decisions.' ),
);

$engage = array(
	array(
		'label' => 'Establish',
		'title' => 'Pilot Week',
		'text'  => 'Assess one agreed application surface before committing to a broader security testing programme.',
	),
	array(
		'label' => 'Build',
		'title' => 'Embedded application security testing',
		'text'  => 'Engineers work within your release cadence to keep scoped testing and evidence current as the application changes.',
	),
	array(
		'label' => 'Operate',
		'title' => 'Managed application security testing',
		'text'  => 'Optimworks runs the agreed application checks and reporting while your team retains remediation and release decisions.',
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
					<a href="<?php echo ow_home( '/services' ); ?>">Services</a>
					<span>/</span>
					<strong>Security testing</strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1">Core QA Services</div>
						<h1 class="an d2">
							Scoped application security testing with reproducible
							<span class="hl">findings</span>
						</h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( 'i-shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span>Scope agreed</span>
							<i aria-hidden="true"></i>
							<span>Surfaces mapped</span>
							<i aria-hidden="true"></i>
							<span>Risk reported</span>
						</div>
						<p class="fr-lede an d3">
							Test agreed access controls, session behaviour and configuration within a written
							scope, with evidence your engineering team can reproduce.
						</p>
						<div class="fr-covers an d3" aria-label="Service coverage">
							<span>Scope</span>
							<span>Access</span>
							<span>Configuration</span>
							<span>Evidence</span>
							<span>Report</span>
							<span>Retest</span>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#sec-scope" class="btn btn-ghost">
								See what this covers
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php ow_service_visual( $ow_img . '/security-testing-concept.jpg', 'Security path from agreed scope and surface map through authorised exercise and evidence to a named report' ); ?>
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
					'Functional testing does not cover every application security risk.',
					'Teams need focused checks of agreed access controls, sessions and configuration, supported by reproducible findings.'
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

		<section class="band" id="sec-scope">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					'What we cover',
					'Focused checks within an agreed application scope.',
					'The service covers selected access controls, session behaviour, configuration and misuse cases. Functional Testing covers expected journeys and API Testing covers contracts.'
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
						This service tests agreed application security scenarios and configuration. User
						journeys belong to
						<a href="<?php echo ow_home( '/services/functional-regression-testing' ); ?>">Functional Testing</a>. Service
						contracts belong to <a href="<?php echo ow_home( '/services/api-testing-services' ); ?>">API Testing</a>.
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
					'Agree the scope before testing begins.',
					'Each phase has a named owner and an output your security owner can inspect.'
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
					'Findings remain usable by security and engineering teams.'
				);
				?>
				<div class="au-ownership reveal">
					<div>
						<span class="eyebrow">Ownership principle</span>
						<h3>Your team can reproduce findings and track remediation.</h3>
						<p>
							The testing brief, evidence, severity rationale and retest status remain available to the
							teams responsible for remediation and release.
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
			</div>
		</section>

		<section class="band au-proof-band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'05',
					'What you keep',
					'Reproducible findings with practical remediation context.',
					'Generic severity counts do not explain application risk. We provide the written scope, evidence, severity rationale, remediation guidance and retest status.'
				);
				?>
				<div class="au-proof reveal">
					<article>
						<strong>Scope</strong>
						<h3>Written before work starts</h3>
						<p>Assets, windows and exclusions recorded so testing remains within the agreed scope.</p>
					</article>
					<article class="is-featured">
						<div>
							<strong>Test</strong>
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<strong>Evidence</strong>
						</div>
						<h3>Findings you can verify</h3>
						<p>
							Each finding includes enough context for another engineer to confirm it without guessing.
						</p>
					</article>
					<article>
						<strong>Report</strong>
						<h3>Clear remediation status</h3>
						<p>Open findings, retest results and remaining risk for your release owners to review.</p>
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
					'Assessment tools selected for the agreed scope.',
					'We work with the security, dependency and delivery tools your engineering team already uses and can own.'
				);
				ow_logo_bench(
					array(
						array(
							't'     => 'Assessment',
							'tools' => array(
								ow_tool( 'burpsuite', 'Burp Suite' ),
								ow_tool( 'owasp', 'OWASP' ),
								ow_tool( 'wireshark', 'Wireshark' ),
							),
						),
						array(
							't'     => 'Dependencies and config',
							'tools' => array(
								ow_tool( 'snyk', 'Snyk' ),
								ow_tool( 'trivy', 'Trivy' ),
								ow_tool( 'sonar', 'Sonar' ),
							),
						),
						array(
							't'     => 'Environments',
							'tools' => array(
								ow_tool( 'docker', 'Docker' ),
								ow_tool( 'kubernetes', 'Kubernetes' ),
							),
						),
						array(
							't'     => 'CI and delivery',
							'tools' => array(
								ow_tool( 'githubactions', 'GitHub Actions' ),
								ow_tool( 'jenkins', 'Jenkins' ),
								ow_tool( 'gitlab', 'GitLab CI' ),
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
					'Start with a high risk application surface.'
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
					'Confirm scope and access before testing starts.'
				);
				ow_service_faq( $faq );
				?>
			</div>
		</section>

		<section class="band band--alt2 au-close">
			<div class="wrap reveal">
				<div class="fr-finale">
					<div>
						<span class="eyebrow">Start with one surface</span>
						<h2>Assess one agreed application surface.</h2>
						<p>
							Bring the assets, the access model and the finding that concerns your team. We
							will identify a useful starting scope for application security testing.
						</p>
					</div>
					<div class="fr-close-actions">
						<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="btn btn-brand">
							Start a Pilot Week <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a href="<?php echo ow_home( '/contact#form' ); ?>" class="fr-close-link">
							Or discuss the current risk
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
ow_service_frame_end();
get_footer();

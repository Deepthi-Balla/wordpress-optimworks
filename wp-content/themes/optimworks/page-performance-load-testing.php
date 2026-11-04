<?php
/*
Template Name: Performance Load Testing
*/
/**
 * Performance & Load Testing — custom Core QA page (not ServiceBuyingPage).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'How many virtual users will you run?',
		'a' => 'The profile follows your expected traffic, peak events and agreed thresholds. We do not substitute a generic user count for that profile.',
	),
	array(
		'q' => 'Can you use the tools we already have?',
		'a' => 'Yes. We start with the runners, observability and CI you already own when they can produce a reproducible run. A new tool is justified only when the current stack cannot support the agreed profile.',
	),
	array(
		'q' => 'Do you test in production?',
		'a' => 'A representative environment is preferred. When production is the only place the traffic shape is real we agree a controlled window, what will be measured and how the run will be stopped.',
	),
	array(
		'q' => 'How is this different from Functional Testing?',
		'a' => 'Functional Testing establishes whether behaviour is correct. Performance testing asks whether that behaviour still holds under the agreed load, for the agreed duration, against the agreed thresholds.',
	),
	array(
		'q' => 'What do we receive after a run?',
		'a' => 'The workload profile, the configuration used, reproducible graphs and logs, the defects or saturation points found and a named recommendation on readiness.',
	),
	array(
		'q' => 'Who decides if the system is ready?',
		'a' => 'Your authorised owner retains the decision. Optimworks provides a named recommendation with the profile, evidence, saturation points and residual risk needed to make that decision.',
	),
);

$scope = array(
	array(
		'icon'   => 'i-compass',
		'title'  => 'Workload design',
		'text'   => 'Journeys, traffic mix, ramp pattern, peak events and think time modelled from expected product use.',
		'output' => 'Workload profile',
	),
	array(
		'icon'   => 'i-gauge',
		'title'  => 'Thresholds and baseline',
		'text'   => 'Response, error and resource limits agreed before a run starts. A baseline captures current behaviour so later runs have a comparison.',
		'output' => 'Agreed thresholds',
	),
	array(
		'icon'   => 'i-users',
		'title'  => 'Load testing',
		'text'   => 'Expected traffic exercised in a controlled way to identify saturation against the agreed profile.',
		'output' => 'Load evidence',
	),
	array(
		'icon'   => 'i-pulse',
		'title'  => 'Stress and soak',
		'text'   => 'Beyond expected peak to find the breaking point, then sustained load to expose leaks, drift and recovery behaviour.',
		'output' => 'Stress and soak results',
	),
	array(
		'icon'   => 'i-cloud',
		'title'  => 'API and backend performance',
		'text'   => 'Service boundaries, queues and data paths exercised below the interface to locate backend constraints.',
		'output' => 'Backend evidence',
	),
	array(
		'icon'   => 'i-shield',
		'title'  => 'Evidence and recommendation',
		'text'   => 'Graphs, logs and a readable account of what held, what saturated and whether the system is ready for the agreed peak.',
		'output' => 'Named recommendation',
	),
);

$delivery = array(
	array(
		'phase'  => 'Profile',
		'owner'  => 'Performance lead + product',
		'text'   => 'Agree journeys, traffic shape, peak events, environments and the thresholds that will decide readiness.',
		'output' => 'Workload profile',
	),
	array(
		'phase'  => 'Instrument',
		'owner'  => 'Performance engineer',
		'text'   => 'Prepare scripts, data, monitoring and stop conditions so the run can be repeated by someone who was not in the room.',
		'output' => 'Runnable configuration',
	),
	array(
		'phase'  => 'Baseline',
		'owner'  => 'Performance engineer',
		'text'   => 'Record current behaviour under a known load before the peak profile is applied.',
		'output' => 'Baseline record',
	),
	array(
		'phase'  => 'Exercise',
		'owner'  => 'Performance team',
		'text'   => 'Run load, stress and soak according to the profile. Capture saturation points and recoverability as they appear.',
		'output' => 'Run evidence',
	),
	array(
		'phase'  => 'Recommend',
		'owner'  => 'Named QA owner',
		'text'   => 'Explain what held, what failed, residual risk and whether the agreed peak is supportable.',
		'output' => 'Readiness recommendation',
	),
);

$triggers = array(
	array(
		'icon'  => 'i-gauge',
		'title' => 'Expected demand is not modelled',
		'text'  => 'Campaigns, launches and seasonal events are planned without a documented traffic profile for the system.',
	),
	array(
		'icon'  => 'i-monitor',
		'title' => 'Results from quiet environments are misleading',
		'text'  => 'Functional checks pass in a quiet environment while real traffic produces delay, errors or timeouts.',
	),
	array(
		'icon'  => 'i-compass',
		'title' => 'Readiness thresholds are not agreed',
		'text'  => 'Teams argue about slowness without a written response, error or resource limit that the run was meant to prove.',
	),
	array(
		'icon'  => 'i-users',
		'title' => 'Previous runs cannot be repeated',
		'text'  => 'Previous scripts, data, configuration and evidence are not available in a form another engineer can use.',
	),
);

$ownership = array(
	array( 'Repository', 'Scripts, data and configuration remain in your source control.' ),
	array( 'Repeatability', 'A later run uses the same profile, configuration and stop conditions.' ),
	array( 'Evidence', 'Graphs and logs are readable without the original engineer in the room.' ),
	array( 'Continuity', 'A named owner on your team can explain the last result and the next peak.' ),
);

$engage = array(
	array(
		'label' => 'Establish',
		'title' => 'Pilot Week',
		'text'  => 'Prove one critical journey under an agreed profile before committing to a broader performance programme.',
	),
	array(
		'label' => 'Build',
		'title' => 'Embedded performance team',
		'text'  => 'Engineers work inside your release cadence to keep the profile, scripts and evidence current as the product changes.',
	),
	array(
		'label' => 'Operate',
		'title' => 'Managed performance',
		'text'  => 'Optimworks operates the agreed runs and reporting while your team retains the scripts and the readiness decision.',
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
					<strong>Performance testing</strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1">Core QA Services</div>
						<h1 class="an d2">
							Performance testing for your expected <span class="hl">demand</span>
						</h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( 'i-gauge' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span>Thresholds agreed</span>
							<i aria-hidden="true"></i>
							<span>Workload based</span>
							<i aria-hidden="true"></i>
							<span>Evidence returned</span>
						</div>
						<p class="fr-lede an d3">
							Load, stress and soak runs against agreed thresholds, with a named recommendation
							on whether the system is ready for expected traffic.
						</p>
						<div class="fr-covers an d3" aria-label="Service coverage">
							<span>Load</span>
							<span>Stress</span>
							<span>Soak</span>
							<span>Spike</span>
							<span>APIs</span>
							<span>Web</span>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#performance-scope" class="btn btn-ghost">
								See what this covers
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php ow_service_workflow_hero( 'performance-testing-concept.jpg', 'Performance path from baseline and load through stress and soak to a readiness verdict' ); ?>
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
					'Functional checks do not show how a system behaves under demand.',
					'Buyers need a realistic workload, agreed thresholds and evidence that links system behaviour to capacity constraints.'
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

		<section class="band" id="performance-scope">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					'What we cover',
					'Capacity and stability under an agreed profile.',
					'The service proves whether approved behaviour still holds under load. Functional Testing remains responsible for defining correct behaviour.'
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
						This service exercises approved journeys and APIs under load. Establishing correct
						behaviour belongs to
						<a href="<?php echo ow_home( '/services/functional-regression-testing' ); ?>">Functional Testing</a>. Repeatable
						functional execution belongs to
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
					'Agree the profile before the first peak run.',
					'Each phase has a named owner and an output your engineering team can inspect and replay.'
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
					'Repeatable runs support future capacity decisions.'
				);
				?>
				<div class="au-ownership reveal">
					<div>
						<span class="eyebrow">Ownership principle</span>
						<h3>Your team keeps the inputs and evidence needed to repeat each run.</h3>
						<p>
							The workload profile, configuration, evidence and recommendation remain available after
							handover for comparison with later releases.
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
					'What a run leaves behind',
					'A workload, repeatable run and readiness recommendation.',
					'Generic user counts do not describe your workload. We provide the agreed profile, run configuration, evidence and recommendation.'
				);
				?>
				<div class="au-proof reveal">
					<article>
						<strong>Profile</strong>
						<h3>Workload written first</h3>
						<p>Traffic shape, peak events and thresholds agreed before a run starts.</p>
					</article>
					<article class="is-featured">
						<div>
							<strong>Baseline</strong>
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<strong>Peak</strong>
						</div>
						<h3>Runs that can be replayed</h3>
						<p>Configuration, graphs and logs another engineer can use to repeat the exercise.</p>
					</article>
					<article>
						<strong>Verdict</strong>
						<h3>Named recommendation</h3>
						<p>What held, what saturated and whether the agreed peak is supportable.</p>
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
					'Runners and observability selected for your environment.',
					'We work with the load, monitoring and CI tools your engineering team already uses and can own.'
				);
				ow_logo_bench(
					array(
						array(
							't'     => 'Load runners',
							'tools' => array(
								ow_tool( 'jmeter', 'JMeter' ),
								ow_tool( 'k6', 'k6' ),
								ow_tool( 'gatling', 'Gatling' ),
								ow_tool( 'locust', 'Locust' ),
								ow_tool( 'blazemeter', 'BlazeMeter' ),
							),
						),
						array(
							't'     => 'Observability',
							'tools' => array(
								ow_tool( 'grafana', 'Grafana' ),
								ow_tool( 'prometheus', 'Prometheus' ),
								ow_tool( 'influxdb', 'InfluxDB' ),
								ow_tool( 'datadog', 'Datadog' ),
							),
						),
						array(
							't'     => 'Frontend performance',
							'tools' => array(
								ow_tool( 'lighthouse', 'Lighthouse' ),
								ow_tool( 'chrome', 'Chrome' ),
								ow_tool( 'firefox', 'Firefox' ),
								ow_tool( 'edge', 'Edge' ),
							),
						),
						array(
							't'     => 'CI and environments',
							'tools' => array(
								ow_tool( 'githubactions', 'GitHub Actions' ),
								ow_tool( 'jenkins', 'Jenkins' ),
								ow_tool( 'gitlab', 'GitLab CI' ),
								ow_tool( 'azuredevops', 'Azure DevOps' ),
								ow_tool( 'docker', 'Docker' ),
								ow_tool( 'kubernetes', 'Kubernetes' ),
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
					'Start with the expected peak.'
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
					'Set the profile before the first run.'
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
						<h2>Prove one critical journey under an agreed profile.</h2>
						<p>
							Bring the peak you are worried about, the current environment and any previous
							results. We will identify the smallest useful run for proving readiness.
						</p>
					</div>
					<div class="fr-close-actions">
						<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="btn btn-brand">
							Start a Pilot Week <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a href="<?php echo ow_home( '/contact#form' ); ?>" class="fr-close-link">
							Or discuss the next peak
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
ow_service_frame_end();
get_footer();

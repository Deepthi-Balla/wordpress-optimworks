<?php
/*
Template Name: API Testing Services
*/
/**
 * API Testing Services — custom Core QA page (not ServiceBuyingPage).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_img = get_template_directory_uri() . '/assets/images';

$faq = array(
	array(
		'q' => 'Do you cover REST, GraphQL and gRPC?',
		'a' => 'Yes. The method follows the product. We test the contracts, authentication, negative paths and handoffs your services actually expose rather than forcing a single style of collection.',
	),
	array(
		'q' => 'Can you work with the collections we already have?',
		'a' => 'Yes. We assess structure, environment control, data, assertions and whether a failed call produces enough evidence to assign ownership. We repair or rebuild only when the current collection cannot support that.',
	),
	array(
		'q' => 'How is this different from Functional Testing?',
		'a' => 'Functional Testing validates journeys as a user or operator experiences them. API Testing examines the contracts, authentication, data and handoffs beneath the interface.',
	),
	array(
		'q' => 'How is this different from Performance Testing?',
		'a' => 'API Testing asks whether the contract and the handoff are correct. Performance Testing asks whether that behaviour still holds under an agreed load. The two services work together but answer different questions.',
	),
	array(
		'q' => 'Do you write consumer contracts?',
		'a' => 'When consumer and provider teams need a shared, testable agreement we help specify and exercise it. The contract remains in your repository and follows the same review path as other engineering change.',
	),
	array(
		'q' => 'Who owns the collection when you leave?',
		'a' => 'You do from the first day. Collections, environments, data and evidence remain in your systems. Handover includes a practical walkthrough and a named owner on your team.',
	),
);

$scope = array(
	array(
		'icon'   => 'i-compass',
		'title'  => 'Contracts and schemas',
		'text'   => 'Published agreements, schemas and examples exercised against running services to identify differences in actual payloads.',
		'output' => 'Contract evidence',
	),
	array(
		'icon'   => 'i-shield',
		'title'  => 'Authentication and permissions',
		'text'   => 'Tokens, roles, expiry, replay and least privilege tested across positive and negative paths, including calls that should be refused.',
		'output' => 'Auth and role results',
	),
	array(
		'icon'   => 'i-cloud',
		'title'  => 'Integration handoffs',
		'text'   => 'Service calls, events and downstream effects exercised together to find failures beyond the initial response.',
		'output' => 'Handoff results',
	),
	array(
		'icon'   => 'i-pulse',
		'title'  => 'Negative and boundary cases',
		'text'   => 'Malformed input, missing fields, duplicates, ordering and timeout behaviour documented with the observed response and status.',
		'output' => 'Negative path evidence',
	),
	array(
		'icon'   => 'i-gear',
		'title'  => 'Data and idempotency',
		'text'   => 'Create, update and retry behaviour checked to identify unintended state changes or duplicate records.',
		'output' => 'Data behaviour evidence',
	),
	array(
		'icon'   => 'i-monitor',
		'title'  => 'Evidence and recommendation',
		'text'   => 'A failed call returns enough context to reproduce it. The pack closes with a named view of residual risk at the service boundary.',
		'output' => 'Named recommendation',
	),
);

$delivery = array(
	array(
		'phase'  => 'Map',
		'owner'  => 'QA lead + engineering',
		'text'   => 'Identify the services, contracts, consumers, auth model and the handoffs whose failure would cost the most.',
		'output' => 'Boundary map',
	),
	array(
		'phase'  => 'Specify',
		'owner'  => 'QA lead',
		'text'   => 'Agree what correct looks like for contracts, permissions, negative paths and downstream effects. Record what is in scope and what is deferred.',
		'output' => 'API risk brief',
	),
	array(
		'phase'  => 'Design',
		'owner'  => 'QA engineer',
		'text'   => 'Build collections or suites for positive, negative, auth and integration cases. Drafts remain subject to review before they enter the pack.',
		'output' => 'Reviewed collection',
	),
	array(
		'phase'  => 'Exercise',
		'owner'  => 'QA team',
		'text'   => 'Run the agreed cases against representative environments. Capture payloads, status, timing and downstream effects when a call fails.',
		'output' => 'Results and defect evidence',
	),
	array(
		'phase'  => 'Recommend',
		'owner'  => 'Named QA owner',
		'text'   => 'Retest fixes and issue a named recommendation on residual risk at the service boundary.',
		'output' => 'QA recommendation',
	),
);

$triggers = array(
	array(
		'icon'  => 'i-monitor',
		'title' => 'The initial response hides a downstream failure',
		'text'  => 'The interface appears to work while a timeout, dropped event or unusable payload affects the downstream system.',
	),
	array(
		'icon'  => 'i-compass',
		'title' => 'The documented contract is not being verified',
		'text'  => 'Schemas and examples exist, but there is no evidence that they were exercised against the running service.',
	),
	array(
		'icon'  => 'i-shield',
		'title' => 'Authentication behaviour is only partly tested',
		'text'  => 'Tokens, roles and expiry are trusted because the happy path works. Refused and replayed calls are not evidenced.',
	),
	array(
		'icon'  => 'i-gear',
		'title' => 'Consumers find breaking changes after merge',
		'text'  => 'A field, status or permission change lands and consumers discover it in their own testing rather than at the provider boundary.',
	),
);

$ownership = array(
	array( 'Repository', 'Collections, environments and fixtures remain in your source control.' ),
	array( 'Review', 'Changes follow the same review path as other engineering work.' ),
	array( 'Evidence', 'A failed call returns payload, status and enough context to reproduce it.' ),
	array( 'Continuity', 'A named owner on your team can explain the last result and the next change.' ),
);

$engage = array(
	array(
		'label' => 'Establish',
		'title' => 'Pilot Week',
		'text'  => 'Prove one critical service boundary in your environment before committing to a broader API testing programme.',
	),
	array(
		'label' => 'Build',
		'title' => 'Embedded API testing',
		'text'  => 'Engineers work inside your release cadence to keep contracts, collections and evidence current as services change.',
	),
	array(
		'label' => 'Operate',
		'title' => 'Managed API quality',
		'text'  => 'Optimworks operates the agreed collection and reporting while your team retains the contracts and the release decision.',
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
					<strong>API testing</strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1">Core QA Services</div>
						<h1 class="an d2">
							API testing at the service <span class="hl">boundary</span>
						</h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( 'i-cloud' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span>Contracts checked</span>
							<i aria-hidden="true"></i>
							<span>Auth exercised</span>
							<i aria-hidden="true"></i>
							<span>Handoffs evidenced</span>
						</div>
						<p class="fr-lede an d3">
							Service contracts, authentication, negative paths and system handoffs tested below
							the user interface, with reproducible evidence.
						</p>
						<div class="fr-covers an d3" aria-label="Service coverage">
							<span>REST</span>
							<span>GraphQL</span>
							<span>gRPC</span>
							<span>Auth</span>
							<span>Contracts</span>
							<span>Integrations</span>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								Talk to an engineer <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#api-scope" class="btn btn-ghost">
								See what this covers
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php ow_service_workflow_hero( 'api-testing-concept.jpg', 'API path from contract and auth through handoff and schema to a readiness verdict' ); ?>
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
					'User interface testing can miss faults between services.',
					'API testing makes contracts, access rules and downstream effects visible before integration failures reach customers.'
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

		<section class="band" id="api-scope">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					'What we cover',
					'Contracts, access and handoffs at the service boundary.',
					'The service proves contracts, auth and handoffs. Functional Testing remains responsible for journeys above the interface.'
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
						This service tests APIs and the systems they connect. User journeys belong to
						<a href="<?php echo ow_home( '/services/functional-regression-testing' ); ?>">Functional Testing</a>. Capacity
						under an agreed load belongs to
						<a href="<?php echo ow_home( '/services/performance-load-testing' ); ?>">Performance Testing</a>. Authorised
						access and residual risk belong to
						<a href="<?php echo ow_home( '/services/security-penetration-testing' ); ?>">Security Testing</a>.
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
					'Map the boundary before expanding the collection.',
					'Each phase has a named owner and an output your engineering team can inspect.'
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
					'Collections and evidence remain usable by your team.'
				);
				?>
				<div class="au-ownership reveal">
					<div>
						<span class="eyebrow">Ownership principle</span>
						<h3>Your team keeps the contracts, collections and evidence.</h3>
						<p>
							We organise the contract, collection, evidence and recommendation so the team that
							inherits them can repeat tests and investigate failures.
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
					'Testable contracts and reproducible failures.',
					'Generic pass rates do not explain service risk. We provide testable agreements, reusable collections, failure evidence and a clear recommendation.'
				);
				?>
				<div class="au-proof reveal">
					<article>
						<strong>Contract</strong>
						<h3>Agreement made testable</h3>
						<p>
							Schemas, examples and expected status written so a later engineer can see what was
							promised.
						</p>
					</article>
					<article class="is-featured">
						<div>
							<strong>Call</strong>
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<strong>Handoff</strong>
						</div>
						<h3>Failures you can replay</h3>
						<p>
							Payload, status and downstream effect captured so ownership is clear when a boundary
							breaks.
						</p>
					</article>
					<article>
						<strong>Verdict</strong>
						<h3>Named recommendation</h3>
						<p>What held, what failed and residual risk at the service boundary.</p>
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
					'Clients and runners selected for your environment.',
					'We work with the API, schema and CI tools your engineering team already uses and can own.'
				);
				ow_logo_bench(
					array(
						array(
							't'     => 'API clients',
							'tools' => array(
								ow_tool( 'postman', 'Postman' ),
								ow_tool( 'insomnia', 'Insomnia' ),
								ow_tool( 'bruno', 'Bruno' ),
								ow_tool( 'hoppscotch', 'Hoppscotch' ),
								ow_tool( 'swagger', 'Swagger' ),
							),
						),
						array(
							't'     => 'Contracts and schemas',
							'tools' => array(
								ow_tool( 'openapi', 'OpenAPI' ),
								ow_tool( 'graphql', 'GraphQL' ),
							),
						),
						array(
							't'     => 'Language runners',
							'tools' => array(
								ow_tool( 'pytest', 'pytest' ),
								ow_tool( 'junit5', 'JUnit' ),
								ow_tool( 'jest', 'Jest' ),
								ow_tool( 'k6', 'k6' ),
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
					'Start with the boundary that would cost the most to get wrong.'
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
					'Set the contract before the collection grows.'
				);
				ow_service_faq( $faq );
				?>
			</div>
		</section>

		<section class="band band--alt2 au-close">
			<div class="wrap reveal">
				<div class="fr-finale">
					<div>
						<span class="eyebrow">Start with one service</span>
						<h2>Prove one critical boundary in your environment.</h2>
						<p>
							Bring the contract, the collection and the handoff that concerns your team. We
							will identify the smallest useful slice for proving correctness at the boundary.
						</p>
					</div>
					<div class="fr-close-actions">
						<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="btn btn-brand">
							Start a Pilot Week <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a href="<?php echo ow_home( '/contact#form' ); ?>" class="fr-close-link">
							Or discuss the current APIs
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
ow_service_frame_end();
get_footer();

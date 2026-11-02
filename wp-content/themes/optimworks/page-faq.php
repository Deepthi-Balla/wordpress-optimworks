<?php
/*
Template Name: FAQ
*/
/**
 * FAQ page template.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_ai_qs = array(
	array(
		'q' => 'How do you use AI in quality engineering?',
		'a' => 'AI can help draft test cases, identify patterns and support repetitive work. Engineers review the output, apply product context and provide evidence to the people responsible for release decisions.',
	),
	array(
		'q' => 'Our developers are now shipping AI generated code. Does that change anything?',
		'a' => 'AI generated code should be tested against requirements, edge cases, access controls and relevant security risks. Our AI Generated Code Validation service provides independent review and testing before code is released.',
	),
	array(
		'q' => 'Can you work with our existing testing tools?',
		'a' => 'Yes. We first assess the frameworks, repositories and delivery tools already in use. Any recommendation to change them should be based on maintainability, coverage and the needs of your team.',
	),
	array(
		'q' => 'Can AI test AI products: GenAI apps, LLM features, agentic workflows?',
		'a' => 'Yes. The scope can include GenAI applications, LLM features, prompts, conversational interfaces and autonomous agents. The test approach is agreed around intended behaviour, domain context, safety and product risk.',
	),
	array(
		'q' => 'What does "deterministic" mean for theTestRo and why does it matter?',
		'a' => 'theTestRo is a no code automation platform. Execution is rules based rather than dependent on an LLM. Journeys can be recorded, replayed across environments and maintained with inspectable self healing.',
	),
);

$ow_engagement_qs = array(
	array(
		'q' => 'What does Pilot Week actually include?',
		'a' => 'Pilot Week is a focused week on an agreed area of your product. The scope may cover functional testing, regression, automation or an AI component. We provide a written summary of findings, identified gaps and recommended next steps.',
	),
	array(
		'q' => 'What is the difference between Embedded Team and Managed Quality Function?',
		'a' => 'An embedded team adds quality engineering capacity within your delivery cadence. A managed quality function gives Optimworks responsibility for an agreed QA scope, including planning, execution, reporting and recommendations. Governance and release authority are defined for each engagement.',
	),
	array(
		'q' => 'Do you have minimum engagement sizes?',
		'a' => 'Engagement size depends on the product, scope and level of ongoing support required. Commercial terms are discussed after an initial review of your needs.',
	),
	array(
		'q' => 'How quickly can you start?',
		'a' => 'Timing depends on scope, access requirements and team availability. We confirm a proposed start date after the initial discussion and scoping.',
	),
	array(
		'q' => 'Do you work with offshore time zones?',
		'a' => 'We are headquartered in Madhapur, Hyderabad, India and have served clients in more than 20 countries. Working hours and meeting cadence are agreed during scoping.',
	),
);

$ow_trust_qs = array(
	array(
		'q' => 'Will you name our company in a case study?',
		'a' => 'Public case studies are anonymised and client names are withheld. Public testimonials are separate and retain the attribution provided for those quotes. A company shown on the public client list should not be assumed to be the subject of a case study.',
	),
	array(
		'q' => 'Do you only test AI products?',
		'a' => 'No. Our services include functional, automation, API, performance, security, accessibility and data testing as well as testing for AI applications and AI generated code.',
	),
	array(
		'q' => 'Are your Clutch, Google and Glassdoor ratings curated?',
		'a' => 'The current ratings stated on this site are 4.5 out of 5 on Clutch, 4.8 out of 5 on Google Reviews and 4.6 out of 5 on Glassdoor. Optimworks also has ISTQB certified engineers.',
	),
	array(
		'q' => 'Where are you based and how long have you been operating?',
		'a' => 'Optimworks Technologies Pvt Ltd was founded in 2019 and is headquartered at 1st Floor, Jain Sadguru Image\'s Capital Park, Unit-106B, Madhapur, Hyderabad, Telangana 500081, India. We have been delivering QA work into 20+ countries since 2019.',
	),
);

$ow_all_faqs = array_merge( $ow_ai_qs, $ow_engagement_qs, $ow_trust_qs );

add_action(
	'wp_head',
	static function () use ( $ow_all_faqs ) {
		$entities = array();
		foreach ( $ow_all_faqs as $f ) {
			$entities[] = array(
				'@type'          => 'Question',
				'name'           => $f['q'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $f['a'],
				),
			);
		}
		$ld = array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => $entities,
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . "</script>\n";
	}
);

$ow_logos_uri    = get_template_directory_uri() . '/assets/logos';
$ow_client_logos = array(
	array( 'file' => 't-rowe-price.png', 'name' => 'T. Rowe Price' ),
	array( 'file' => 'drfirst.png', 'name' => 'DrFirst' ),
	array( 'file' => 'finfolio.png', 'name' => 'Finfolio' ),
	array( 'file' => 'graduway.png', 'name' => 'Graduway' ),
	array( 'file' => 'commoncents.png', 'name' => 'Commoncents' ),
	array( 'file' => 'sonra.png', 'name' => 'Sonra' ),
	array( 'file' => 'microcom.png', 'name' => 'Microcom' ),
	array( 'file' => 'feedier.png', 'name' => 'Feedier' ),
	array( 'file' => 'workspace2go.png', 'name' => 'Workspace2go' ),
	array( 'file' => 'alteatec.png', 'name' => 'Alteatec' ),
	array( 'file' => 'kbs.png', 'name' => 'KBS' ),
	array( 'file' => 'testmart.png', 'name' => 'Testmart' ),
	array( 'file' => 'finlink.png', 'name' => 'Finlink' ),
);

get_header();
?>
<main>
	<!-- HERO -->
	<section class="pagehero">
		<div class="wrap">
			<nav class="crumb" aria-label="Breadcrumb">
				<a href="<?php echo ow_home( '/' ); ?>">Home</a>
				<span>/</span>
				<span>FAQ</span>
			</nav>
			<h1>Answers on AI, how we work and the facts we publish.</h1>
			<p class="lede">
				Clear information about our use of AI, engagement models, public evidence and company
				details.
			</p>
		</div>
	</section>

	<section class="band">
		<div class="wrap">
			<!-- AI REPLACING QA -->
			<div class="sec-head reveal" style="margin-bottom: 24px;">
				<span class="eyebrow">AI and quality engineering</span>
				<h2>How technology fits into the work.</h2>
			</div>
			<div class="faq reveal">
				<?php foreach ( $ow_ai_qs as $i => $f ) : ?>
				<details<?php echo 0 === $i ? ' open' : ''; ?>>
					<summary>
						<?php echo esc_html( $f['q'] ); ?>
						<?php echo ow_icon( 'i-chev' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</summary>
					<p><?php echo esc_html( $f['a'] ); ?></p>
				</details>
				<?php endforeach; ?>
			</div>

			<!-- ENGAGEMENT -->
			<div class="sec-head reveal" style="margin-top: 56px; margin-bottom: 24px;">
				<span class="eyebrow">On working with us</span>
				<h2>Engagement, scope and what to expect.</h2>
			</div>
			<div class="faq reveal">
				<?php foreach ( $ow_engagement_qs as $f ) : ?>
				<details>
					<summary>
						<?php echo esc_html( $f['q'] ); ?>
						<?php echo ow_icon( 'i-chev' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</summary>
					<p><?php echo esc_html( $f['a'] ); ?></p>
				</details>
				<?php endforeach; ?>
			</div>

			<!-- TRUST -->
			<div class="sec-head reveal" style="margin-top: 56px; margin-bottom: 24px;">
				<span class="eyebrow">On trust and proof</span>
				<h2>References, case studies and company facts.</h2>
			</div>
			<div class="faq reveal">
				<?php foreach ( $ow_trust_qs as $f ) : ?>
				<details>
					<summary>
						<?php echo esc_html( $f['q'] ); ?>
						<?php echo ow_icon( 'i-chev' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</summary>
					<p><?php echo esc_html( $f['a'] ); ?></p>
				</details>
				<?php endforeach; ?>
			</div>

			<!-- INLINE CTA -->
			<div
				class="reveal"
				style="text-align: center; margin-top: 56px; padding: 48px 32px; border-radius: 20px; background: var(--card); border: 1px solid var(--line-2); backdrop-filter: blur(12px);"
			>
				<span class="eyebrow" style="display: block; margin-bottom: 14px;">
					Still have a question?
				</span>
				<h3 style="margin-bottom: 12px;">The contact form goes to an engineer.</h3>
				<p
					style="color: var(--muted); margin-bottom: 24px; max-width: 480px; margin-left: auto; margin-right: auto;"
				>
					Share your product context and question so the right person can respond.
				</p>
				<div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
					<a href="<?php echo ow_home( '/contact' ); ?>" class="btn btn-brand">
						Ask your question <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</a>
					<a href="<?php echo ow_home( '/how-we-work' ); ?>" class="btn btn-ghost">
						See how we work <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</a>
				</div>
			</div>

			<!-- Client logos -->
			<div class="clog-band reveal" style="margin-top: 56px;">
				<div class="mqlbl">Teams on the public logo wall</div>
				<div class="mq">
					<div class="mqt">
						<?php
						for ( $dup = 0; $dup < 2; $dup++ ) :
							foreach ( $ow_client_logos as $logo ) :
								?>
						<span class="clog">
							<img
								src="<?php echo esc_url( $ow_logos_uri . '/' . $logo['file'] ); ?>"
								alt="<?php echo esc_attr( $logo['name'] ); ?>"
								loading="lazy"
							/>
						</span>
								<?php
							endforeach;
						endfor;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FINALE -->
	<section class="band band--alt2">
		<div class="wrap reveal">
			<div class="finale">
				<div>
					<h2>Start with a focused conversation.</h2>
					<p>Tell us what you are shipping and where you need greater confidence.</p>
				</div>
				<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="btn btn-brand">
					Start a Pilot Week <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

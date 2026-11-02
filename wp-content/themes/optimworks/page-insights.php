<?php
/*
Template Name: Insights
*/
/**
 * Insights page template.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_cards = array(
	array(
		'href'  => '/faq',
		'title' => 'Frequently asked questions',
		'text'  => 'Answers about AI, engagement models, public evidence and company details.',
	),
	array(
		'href'  => '/accelerators',
		'title' => 'In house accelerators',
		'text'  => 'An overview of theTestRo and TestsBuddi, how they differ and where human review applies.',
	),
	array(
		'href'  => '/ai-managed-qa',
		'title' => 'Managed QA',
		'text'  => 'How Optimworks can manage an agreed quality engineering scope within your delivery process.',
	),
	array(
		'href'  => '/case-studies',
		'title' => 'Anonymised results',
		'text'  => 'Verified delivery metrics from three engagements. Client names are withheld.',
	),
	array(
		'href'  => '/how-we-work',
		'title' => 'Ways to work with us',
		'text'  => 'Compare Pilot Week, embedded support and a managed quality function.',
	),
	array(
		'href'  => '/services/ai-generated-code-validation',
		'title' => 'AI generated code validation',
		'text'  => 'Independent testing of AI generated code for correctness, edge cases and security risks.',
	),
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
	<section class="pagehero">
		<div class="wrap">
			<nav class="crumb" aria-label="Breadcrumb">
				<a href="<?php echo ow_home( '/' ); ?>">Home</a>
				<span>/</span>
				<span>Insights</span>
			</nav>
			<h1>Information for teams evaluating Optimworks.</h1>
			<p class="lede">
				Explore our engagement models, in house accelerators, verified case study metrics and answers to common questions.
			</p>
		</div>
	</section>

	<section class="band">
		<div class="wrap">
			<div class="ins-grid reveal">
				<?php foreach ( $ow_cards as $item ) : ?>
				<a class="inscard" href="<?php echo ow_home( $item['href'] ); ?>">
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</a>
				<?php endforeach; ?>
			</div>

			<div class="clog-band reveal" style="margin-top: 48px;">
				<div class="mqlbl">Teams on the public logo wall</div>
				<div class="mq">
					<div class="mqt">
						<?php
						for ( $dup = 0; $dup < 2; $dup++ ) :
							foreach ( $ow_client_logos as $logo ) :
								?>
						<span class="clog"<?php echo 1 === $dup ? ' aria-hidden="true"' : ''; ?>>
							<img
								src="<?php echo esc_url( $ow_logos_uri . '/' . $logo['file'] ); ?>"
								alt="<?php echo 0 === $dup ? esc_attr( $logo['name'] ) : ''; ?>"
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

	<section class="band band--alt2">
		<div class="wrap reveal">
			<div class="finale">
				<div>
					<h2>One week on your systems. No invoice.</h2>
					<p>
						One experienced engineer. Real test work in your tools. A written summary at the end.
						You keep the work either way.
					</p>
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

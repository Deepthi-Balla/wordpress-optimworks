<?php
/*
Template Name: Industry Detail
*/
/**
 * Industry detail — port of industries.$slug.tsx.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;
$ow_slug = ( $post instanceof WP_Post ) ? $post->post_name : '';
$ow_page = ow_get_industry( $ow_slug );

get_header();
ow_service_frame_start();

if ( ! $ow_page ) :
	?>
	<section class="pagehero">
		<div class="wrap">
			<?php
			echo ow_crumb( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				array(
					array( 'href' => '/', 'label' => 'Home' ),
					array( 'href' => '/industries', 'label' => 'Industries' ),
					array( 'label' => 'Not found' ),
				)
			);
			?>
			<h1>Industry not found</h1>
			<p class="lede">This industry page is not available. Browse the industries hub for current coverage.</p>
			<p style="margin-top: 24px;">
				<a class="btn btn-brand" href="<?php echo ow_home( '/industries' ); ?>">
					View industries <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</a>
			</p>
		</div>
	</section>
	<?php
	ow_page_close();
	ow_service_frame_end();
	get_footer();
	return;
endif;

ob_start();
?>
<figure class="pagehero-art">
	<?php ow_service_visual( ow_img( $ow_page['image'] ), $ow_page['imageAlt'] ); ?>
</figure>
<?php
$ow_hero_art = (string) ob_get_clean();

ow_page_hero(
	ow_crumb(
		array(
			array( 'href' => '/', 'label' => 'Home' ),
			array( 'href' => '/industries', 'label' => 'Industries' ),
			array( 'label' => $ow_page['crumb'] ),
		)
	),
	$ow_page['title'],
	$ow_page['lede'],
	$ow_hero_art
);
?>
	<section class="band ind-canvas">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">What we test</span>
				<h2>Critical journeys and industry risks.</h2>
			</div>
			<ul class="why stag reveal">
				<?php
				$ow_ji = 0;
				foreach ( $ow_page['journeys'] as $item ) :
					$ow_ji++;
					?>
					<li>
						<span class="n"><?php echo esc_html( str_pad( (string) $ow_ji, 2, '0', STR_PAD_LEFT ) ); ?></span>
						<h3><?php echo esc_html( $item['t'] ); ?></h3>
						<p><?php echo esc_html( $item['d'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="band ind-canvas">
		<div class="wrap">
			<div class="split reveal">
				<div class="split-card">
					<h3>Key delivery risks</h3>
					<p><?php echo esc_html( $ow_page['breaks'] ); ?></p>
				</div>
				<div class="split-card">
					<h3>Who it is for</h3>
					<p><?php echo esc_html( $ow_page['who'] ); ?></p>
				</div>
			</div>
			<div class="principle reveal" style="margin-top: 36px;">
				<p>
					<strong>Core quality assurance comes first.</strong> <?php echo esc_html( $ow_page['principle'] ); ?>
				</p>
			</div>
			<div class="sec-head reveal" style="margin-top: 48px;">
				<span class="eyebrow">What you receive</span>
				<h2>Clear outputs for an informed release decision.</h2>
			</div>
			<div class="caps reveal">
				<?php foreach ( $ow_page['caps'] as $item ) : ?>
					<div class="cap">
						<h4><?php echo esc_html( $item['t'] ); ?></h4>
						<p><?php echo esc_html( $item['d'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="band ind-canvas">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">Related services</span>
				<h2>Services selected for the risks in scope.</h2>
			</div>
			<div class="rel-grid reveal">
				<?php foreach ( $ow_page['related'] as $item ) : ?>
					<a class="relcard" href="<?php echo ow_home( $item['href'] ); ?>">
						<span><?php echo esc_html( $item['pillar'] ); ?></span>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
					</a>
				<?php endforeach; ?>
			</div>
			<div class="callout reveal">
				<strong>Decision ready evidence</strong>
				<p><?php echo esc_html( $ow_page['proof'] ); ?></p>
			</div>
		</div>
	</section>
<?php
ow_page_close();
ow_service_frame_end();
get_footer();

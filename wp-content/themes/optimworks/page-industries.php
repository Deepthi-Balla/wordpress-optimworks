<?php
/*
Template Name: Industries
*/
/**
 * Industries hub — port of industries.index.tsx.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_items = ow_industries_hub();

get_header();
ow_service_frame_start();

ow_page_hero(
	ow_crumb(
		array(
			array( 'href' => '/', 'label' => 'Home' ),
			array( 'label' => 'Industries' ),
		)
	),
	'Quality assurance shaped around industry risk.',
	'We help teams in financial services, healthcare, retail, supply chain and education test the journeys their customers, staff and regulators depend on.'
);
?>
	<section class="band ind-canvas">
		<div class="wrap">
			<div class="ind-grid reveal">
				<?php foreach ( $ow_items as $item ) : ?>
					<a class="indcard" href="<?php echo ow_home( $item['href'] ); ?>">
						<?php ow_service_visual( ow_img( $item['image'] ), $item['imageAlt'], true ); ?>
						<span class="snum"><?php echo esc_html( $item['n'] ); ?></span>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php
ow_page_close();
ow_service_frame_end();
get_footer();

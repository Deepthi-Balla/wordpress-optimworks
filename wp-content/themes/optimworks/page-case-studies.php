<?php
/*
Template Name: Case Studies
*/
/**
 * Case studies hub — port of case-studies.index.tsx.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_cases = ow_case_studies_hub();

get_header();
ow_service_frame_start();

ow_page_hero(
	ow_crumb(
		array(
			array( 'href' => '/', 'label' => 'Home' ),
			array( 'label' => 'Case Studies' ),
		)
	),
	'Test Automation Case Studies: Real Numbers, No Client Names',
	'Case studies are anonymised. The metrics are from work we delivered. Named quotes appear only in testimonials where we had permission to use them. The public logo wall is not attribution for these studies.'
);
?>
	<section class="band">
		<div class="wrap">
			<div class="cs-grid reveal">
				<?php foreach ( $ow_cases as $item ) : ?>
					<a class="cscard" href="<?php echo ow_home( $item['href'] ); ?>">
						<div class="stat"><?php echo esc_html( $item['stat'] ); ?></div>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
					</a>
				<?php endforeach; ?>
			</div>
			<?php ow_logo_wall( 'Public client list. These logos are not attribution for the case studies above.' ); ?>
		</div>
	</section>
<?php
ow_page_close();
ow_service_frame_end();
get_footer();

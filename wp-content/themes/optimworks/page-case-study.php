<?php
/*
Template Name: Case Study Detail
*/
/**
 * Case study detail — port of case-studies.$slug.tsx.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;
$ow_slug = ( $post instanceof WP_Post ) ? $post->post_name : '';
$ow_page = ow_get_case_study( $ow_slug );

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
					array( 'href' => '/case-studies', 'label' => 'Case Studies' ),
					array( 'label' => 'Not found' ),
				)
			);
			?>
			<h1>Case study not found</h1>
			<p class="lede">This case study is not available. Browse the case studies hub for published engagements.</p>
			<p style="margin-top: 24px;">
				<a class="btn btn-brand" href="<?php echo ow_home( '/case-studies' ); ?>">
					View case studies <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
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

ow_page_hero(
	ow_crumb(
		array(
			array( 'href' => '/', 'label' => 'Home' ),
			array( 'href' => '/case-studies', 'label' => 'Case Studies' ),
			array( 'label' => $ow_page['crumb'] ),
		)
	),
	$ow_page['title'],
	$ow_page['lede']
);
?>
	<section class="band">
		<div class="wrap">
			<ol class="cs-story reveal">
				<?php foreach ( $ow_page['beats'] as $item ) : ?>
					<li>
						<span class="cs-k"><?php echo esc_html( $item['k'] ); ?></span>
						<div>
							<h3><?php echo esc_html( $item['t'] ); ?></h3>
							<p><?php echo esc_html( $item['d'] ); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
			<div class="cs-result reveal">
				<span class="cs-k">Result</span>
				<p><?php echo esc_html( $ow_page['result'] ); ?></p>
			</div>
			<p class="lede-tight reveal" style="margin-top: 28px;">
				<strong>Takeaway.</strong> <?php echo esc_html( $ow_page['takeaway'] ); ?>
			</p>
			<p class="lede-tight reveal" style="margin-top: 28px;">
				We do not name the client in case study copy. If you want a conversation about whether
				this shape fits, <a href="<?php echo ow_home( '/contact' ); ?>">start with an audit or Pilot Week</a>.
			</p>
		</div>
	</section>
<?php
ow_page_close();
ow_service_frame_end();
get_footer();

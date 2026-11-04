<?php
/*
Template Name: Service Detail
*/
/**
 * Shared service buying page — looks up props by post slug via ow_get_service().
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$slug = get_post()->post_name;
$p    = ow_get_service( $slug );

get_header();

if ( ! $p ) :
	?>
	<main>
		<section class="pagehero">
			<div class="wrap">
				<h1>Service not found</h1>
				<p class="lede">This service page is not available.</p>
			</div>
		</section>
	</main>
	<?php
	get_footer();
	return;
endif;

if ( 'ai-assisted-test-case-generation' === $slug && function_exists( 'ow_render_ai_case_experience' ) ) {
	ow_render_ai_case_experience( $p );
} else {
	ow_render_service_buying_page( $p );
}
get_footer();

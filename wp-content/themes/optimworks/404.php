<?php
/**
 * 404 — port of NotFoundPage.tsx
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'wp_head',
	static function () {
		echo '<meta name="robots" content="noindex">' . "\n";
	},
	1
);

get_header();
?>
<main>
	<section class="pagehero">
		<div class="wrap">
			<nav class="crumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span>/</span>
				<span>Page not found</span>
			</nav>
			<h1>This page is not on the site.</h1>
			<p class="lede">
				The address may be mistyped, or the page may have moved. These are the places most
				visitors need.
			</p>
			<div class="hero-ctas" style="margin-top: 28px;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-brand">
					Back to homepage <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>" class="btn btn-ghost">
					View the sitemap
				</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

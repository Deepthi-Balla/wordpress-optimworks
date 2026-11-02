<?php
/**
 * Main template fallback.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main class="wrap" style="padding: 120px 0 80px">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> style="margin-bottom: 48px">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="prose">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts found.', 'optimworks' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();

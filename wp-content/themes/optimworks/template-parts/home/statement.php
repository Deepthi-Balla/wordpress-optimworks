<?php
/**
 * Statement section — operating principle with word-by-word reveal markup.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$ow_seam  = get_template_directory_uri() . '/assets/textures/texture-seam.jpg';
$ow_words = array( 'AI', 'accelerates', 'the', 'work.', 'It', 'does', 'not', 'own', 'the', 'risk.' );
?>
<section class="band statement">
	<img class="stbg" src="<?php echo esc_url( $ow_seam ); ?>" alt="" aria-hidden="true" loading="lazy" />
	<div class="wrap">
		<span class="eyebrow reveal">The operating principle</span>
		<p class="wrev on stline">
			<?php foreach ( $ow_words as $i => $w ) : ?>
			<span style="transition-delay: <?php echo esc_attr( (string) ( $i * 42 ) ); ?>ms"><?php echo esc_html( $w ); ?><?php echo $i < count( $ow_words ) - 1 ? "\xC2\xA0" : ''; ?></span>
			<?php endforeach; ?>
		</p>
		<div class="stfoot reveal">
			<p>
				Test design, coverage and repetitive execution move faster with models. The judgment
				calls that decide whether a release is actually safe still sit with an experienced
				engineer whose name is on the release approval.
			</p>
			<a href="<?php echo esc_url( home_url( '/how-we-work' ) ); ?>" class="learn">
				How the release approval works <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
			</a>
		</div>
	</div>
</section>

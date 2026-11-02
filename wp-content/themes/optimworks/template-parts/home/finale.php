<?php
/**
 * Finale section — closing pilot CTA with lattice backdrop.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$ow_lattice = get_template_directory_uri() . '/assets/textures/texture-lattice.jpg';
?>
<section class="band band--alt2">
	<img class="latbg" src="<?php echo esc_url( $ow_lattice ); ?>" alt="" aria-hidden="true" loading="lazy" />
	<div class="wrap reveal">
		<div class="finale">
			<div>
				<h2>See it work on your own codebase first.</h2>
				<p>
					Send us your toughest untested corner, your most brittle automation or your newest AI
					feature. One week, one experienced engineer, real deliverables — no contract, no
					commitment.
				</p>
			</div>
			<a href="<?php echo esc_url( home_url( '/contact#pilot' ) ); ?>" class="btn btn-brand">
				Start Your Pilot Week <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
			</a>
		</div>
	</div>
</section>

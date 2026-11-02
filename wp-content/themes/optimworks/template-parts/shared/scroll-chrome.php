<?php
/**
 * Scroll progress bars and section rail (from Craft.tsx + Header #bar).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_rail = array(
	array( 'ai-loop', 'Quality loop' ),
	array( 'about', 'Who we are' ),
	array( 'accelerators', 'Accelerators' ),
	array( 'case-nums', 'Proof' ),
	array( 'services', 'Services' ),
	array( 'engagement', 'How we work' ),
	array( 'industries', 'Industries' ),
	array( 'proof', 'Clients' ),
);
?>
<div id="bar" style="width: 0%"></div>
<div class="sprog" aria-hidden="true"><span style="transform: scaleX(0)"></span></div>
<nav class="srail" aria-label="Page sections">
	<?php foreach ( $ow_rail as $item ) : ?>
	<a href="#<?php echo esc_attr( $item[0] ); ?>">
		<i></i>
		<span><?php echo esc_html( $item[1] ); ?></span>
	</a>
	<?php endforeach; ?>
</nav>

<?php
/**
 * KineticStrip — scrolling capability strip.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$ow_strip = array(
	'Functional',
	'Automation',
	'Performance',
	'API & Cloud',
	'Security',
	'Data & ETL',
	'LLM Evaluation',
	'AI Agents',
	'AI Generated Code',
	'Mobile Estates',
	'Accessibility',
	'Release Sign-off',
);
?>
<div class="kstrip" aria-hidden="true">
	<div class="ktrack">
		<?php
		for ( $d = 0; $d < 2; $d++ ) :
			foreach ( $ow_strip as $s ) :
				?>
		<span class="kitem"><?php echo esc_html( $s ); ?><i></i></span>
				<?php
			endforeach;
		endfor;
		?>
	</div>
</div>

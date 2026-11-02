<?php
/**
 * Ledger section — risk patterns and counter-moves.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$ow_ledger = array(
	array( 'Silent regression', 'Green pipeline, broken revenue path', 'Risk-based coverage on the flows that pay' ),
	array( 'Brittle automation', 'Suites that fail on every UI change', 'Self-healing execution with an audit trail' ),
	array( 'Untrusted data', 'Dashboards nobody believes anymore', 'Pipeline and transformation validation' ),
	array( 'Non-deterministic AI', 'A pass rate that proves nothing', 'Evaluation sets, drift checks, guardrail tests' ),
	array( 'AI-generated code', 'Volume shipped faster than it is reviewed', 'Independent validation before it merges' ),
);
?>
<section class="band ledger-band" id="risk">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="eyebrow">What we take off your plate</span>
			<h2>The failures that survive a green build.</h2>
			<p>Five patterns behind most escaped defects — and the practice we put against each one.</p>
		</div>
		<div class="ledger stag reveal">
			<div class="lrow lhead" aria-hidden="true">
				<span>Risk</span>
				<span>How it shows up</span>
				<span>Our counter-move</span>
			</div>
			<?php foreach ( $ow_ledger as $i => $row ) : ?>
			<div class="lrow">
				<span class="lidx"><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
				<span class="lrisk"><?php echo esc_html( $row[0] ); ?></span>
				<span class="lsym"><?php echo esc_html( $row[1] ); ?></span>
				<span class="lcnt">
					<?php echo esc_html( $row[2] ); ?>
					<svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</span>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

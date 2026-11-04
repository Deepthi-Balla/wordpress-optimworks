<?php
/**
 * AI Assisted Test Case Generation — TestsBuddi review-engine hero.
 *
 * Page body uses the shared ac-page service buying renderer; only the hero
 * visual is unique to this service.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero visual — intake pills → TestsBuddi core → owned suite.
 *
 * @param string $label Accessible description of the workflow.
 */
function ow_aitc_hero_visual( $label = '' ) {
	if ( '' === (string) $label ) {
		$label = 'Intake materials become drafts, are reviewed and approved, then delivered as a suite pack.';
	}

	$stages = array( 'Intake', 'Draft', 'Review', 'Approve', 'Suite Pack' );
	$icons  = array(
		'<rect x="7" y="4" width="10" height="16" rx="2" /><path d="M10 9h4M10 12h3" />',
		'<path d="M14 4H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8Z" /><path d="m11 15 4-4" />',
		'<circle cx="11" cy="11" r="6" /><path d="m20 20-4.5-4.5" />',
		'<circle cx="12" cy="12" r="8" /><path d="m8.5 12 2.5 2.5 4.5-5" />',
		'<rect x="4" y="7" width="16" height="12" rx="2" /><path d="M9 7V5h6v2M4 12h16" />',
	);
	$ys = array( 40, 120, 200, 280, 360 );
	?>
	<div class="acx" data-acx-flow role="img" aria-label="<?php echo esc_attr( $label ); ?>">
		<div class="acx-heads" aria-hidden="true"><span>Intake</span><span>Review</span><span>Handover</span></div>
		<div class="acx-body" aria-hidden="true">
			<ol class="acx-pills">
				<?php foreach ( $stages as $i => $stage_label ) : ?>
					<li class="<?php echo 0 === $i ? 'on' : ''; ?>" data-acx-stage="<?php echo esc_attr( (string) $i ); ?>">
						<span class="acx-ico">
							<svg viewBox="0 0 24 24" fill="none"><?php echo $icons[ $i ]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG paths. ?></svg>
						</span>
						<span class="acx-lbl">
							<em><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></em>
							<?php echo esc_html( $stage_label ); ?>
						</span>
						<span class="acx-state"></span>
					</li>
				<?php endforeach; ?>
			</ol>
			<svg class="acx-wires" viewBox="0 0 130 400" preserveAspectRatio="none" fill="none" aria-hidden="true">
				<?php foreach ( $ys as $i => $y ) : ?>
					<g class="<?php echo 0 === $i ? 'on' : ''; ?>" data-acx-wire="<?php echo esc_attr( (string) $i ); ?>">
						<path d="M0 <?php echo esc_attr( (string) $y ); ?> C 70 <?php echo esc_attr( (string) $y ); ?>, 60 200, 130 200" class="acx-wire" vector-effect="non-scaling-stroke" />
						<path d="M0 <?php echo esc_attr( (string) $y ); ?> C 70 <?php echo esc_attr( (string) $y ); ?>, 60 200, 130 200" class="acx-wire-flow" vector-effect="non-scaling-stroke" />
					</g>
				<?php endforeach; ?>
			</svg>
			<div class="acx-core">
				<span class="acx-ring acx-ring-1"></span>
				<span class="acx-ring acx-ring-2"></span>
				<div class="acx-core-in">
					<b>TestsBuddi</b>
					<small>Drafts reviewed</small>
					<span class="acx-core-step" data-acx-step><?php echo esc_html( $stages[0] ); ?></span>
				</div>
			</div>
			<span class="acx-out-line"><i></i></span>
			<div class="acx-out" data-acx-out>
				<span class="acx-shield">
					<svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
						<path d="M12 3 5 6v5c0 4.5 3 8.3 7 10 4-1.7 7-5.5 7-10V6Z" />
						<path d="m9 12 2 2 4-4" />
					</svg>
				</span>
				<strong>Suite owned</strong>
				<small>Sources mapped · Traceable</small>
			</div>
		</div>
	</div>
	<?php
}

/**
 * AI case page — shared buying layout with the TestsBuddi hero.
 *
 * @param array $p Buying page props.
 */
function ow_render_ai_case_experience( $p ) {
	$p['heroVisual'] = 'aitc';
	ow_render_service_buying_page( $p );
}

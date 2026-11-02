<?php
/**
 * Animated hero for AI assisted test case generation.
 *
 * Recreates assets/images/ai-testcase-concept.jpg as separate layers so the
 * intake → draft → review → approval → suite pack path can play in sequence.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Right-side hero visual. Static JPG remains the no-JS fallback.
 *
 * @param string $label Accessible description of the workflow.
 */
function ow_aitc_hero_visual( $label = '' ) {
	if ( '' === (string) $label ) {
		$label = 'Path from intake and draft through review and approval to a named suite';
	}
	$fallback = ow_img( 'ai-testcase-concept.jpg' );
	?>
	<div class="aitc is-live" data-aitc-flow role="img" aria-label="<?php echo esc_attr( $label ); ?>">
		<div class="aitc-canvas">
			<div class="aitc-ground"></div>

			<div class="aitc-stage" data-stage="intake">
				<div class="aitc-board"><span class="aitc-name">Intake</span></div>
				<div class="aitc-props">
					<div class="aitc-tray">
						<span class="aitc-paper p1"></span>
						<span class="aitc-paper p2"></span>
						<span class="aitc-paper p3"></span>
					</div>
					<div class="aitc-binder"><span></span></div>
					<ul class="aitc-checkdoc">
						<li class="is-tick"></li>
						<li class="is-tick"></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="aitc-plinth"></div>
			</div>

			<div class="aitc-stage" data-stage="draft">
				<div class="aitc-board"><span class="aitc-name">Draft</span></div>
				<div class="aitc-props">
					<div class="aitc-stack">
						<span></span><span></span><span></span>
						<span class="top"></span>
					</div>
					<div class="aitc-pen"><i></i></div>
				</div>
				<div class="aitc-plinth"></div>
			</div>

			<div class="aitc-stage" data-stage="review">
				<div class="aitc-board"><span class="aitc-name">Review</span></div>
				<div class="aitc-props">
					<div class="aitc-stack">
						<span></span><span></span>
						<span class="top">
							<span class="aitc-scan"></span>
							<svg class="aitc-marks" viewBox="0 0 72 42" aria-hidden="true">
								<path class="mk x" pathLength="1" d="M8 11l13 15M21 11L8 26" />
								<path class="mk ok" pathLength="1" d="M36 24l7 7 18-18" />
							</svg>
						</span>
					</div>
				</div>
				<div class="aitc-plinth"></div>
			</div>

			<div class="aitc-stage" data-stage="approve">
				<div class="aitc-board"><span class="aitc-name">Approve</span></div>
				<div class="aitc-props">
					<div class="aitc-stack">
						<span></span><span></span>
						<span class="top"><em class="aitc-approved">Approved</em></span>
					</div>
					<div class="aitc-stamp">
						<div class="aitc-stamp-in">
							<span class="aitc-handle"></span>
							<span class="aitc-neck"></span>
							<span class="aitc-pad"></span>
						</div>
					</div>
				</div>
				<div class="aitc-plinth"></div>
			</div>

			<div class="aitc-stage" data-stage="suite">
				<div class="aitc-board">
					<span class="aitc-name">Suite<br>Pack</span>
					<div class="aitc-pack">
						<svg class="aitc-shield" viewBox="0 0 64 72" aria-hidden="true">
							<path fill="#FF5A1F" d="M32 3.5l24 8.5v19.5c0 16.5-10 26.2-24 32.2C18 57.7 8 48 8 31.5V12L32 3.5z" />
							<path class="aitc-shield-check" pathLength="1" d="M22 36.5l7.5 7.5 15-16" fill="none" stroke="#fff" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
				</div>
				<div class="aitc-plinth"></div>
			</div>

			<svg class="aitc-wires" viewBox="0 0 720 460" aria-hidden="true">
				<path class="line" pathLength="1" d="M133 186 H173" />
				<path class="line" pathLength="1" d="M271 186 H311" />
				<path class="line" pathLength="1" d="M409 186 H449" />
				<path class="line" pathLength="1" d="M547 186 H587" />
				<circle class="joint" data-line="0" cx="133" cy="186" r="5" />
				<circle class="joint" data-line="0" cx="173" cy="186" r="5" />
				<circle class="joint" data-line="1" cx="271" cy="186" r="5" />
				<circle class="joint" data-line="1" cx="311" cy="186" r="5" />
				<circle class="joint" data-line="2" cx="409" cy="186" r="5" />
				<circle class="joint" data-line="2" cx="449" cy="186" r="5" />
				<circle class="joint" data-line="3" cx="547" cy="186" r="5" />
				<circle class="joint" data-line="3" cx="587" cy="186" r="5" />
			</svg>
		</div>
		<noscript>
			<style>.aitc-canvas{display:none !important}</style>
			<img class="aitc-fallback" src="<?php echo esc_url( $fallback ); ?>" alt="" />
		</noscript>
	</div>
	<?php
}

<?php
/**
 * Metrics section — track-record count-up stats.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$ow_metrics = array(
	array(
		'v'   => 100,
		'u'   => '+',
		'lbl' => 'Clients served worldwide',
		'log' => array(
			'engagement onboarded · fintech',
			'engagement onboarded · healthcare',
			'pilot week converted',
			'engagement onboarded · retail',
			'account expanded · logistics',
			'engagement onboarded · edtech',
		),
	),
	array(
		'v'   => 20,
		'u'   => '+',
		'lbl' => 'Countries delivered into',
		'log' => array(
			'region · north america',
			'region · united kingdom',
			'region · singapore',
			'region · middle east',
			'region · australia',
			'region · western europe',
		),
	),
	array(
		'v'   => 150,
		'u'   => '+',
		'lbl' => 'Projects delivered',
		'log' => array(
			'project closed · regression suite',
			'project closed · api automation',
			'project closed · mobile estate',
			'project closed · performance',
			'project closed · security audit',
			'project closed · etl validation',
		),
	),
	array(
		'v'   => 95,
		'u'   => '%',
		'lbl' => 'Client satisfaction',
		'log' => array(
			'review logged · 5★ clutch',
			'review logged · 5★ google',
			'renewal confirmed',
			'review logged · 5★ clutch',
			'referral received',
			'renewal confirmed',
		),
	),
);
?>
<section class="band band--alt mband" id="track-record">
	<div class="wrap">
		<div class="mband-head reveal">
			<span class="eyebrow">Track record</span>
			<h2>Seven years of release nights, counted.</h2>
		</div>
		<div class="metrics stag reveal">
			<?php foreach ( $ow_metrics as $m ) :
				$feed_lines = array();
				for ( $i = 0; $i < 14; $i++ ) {
					$feed_lines[] = $m['log'][ $i % count( $m['log'] ) ];
				}
				$feed = implode( "\n", $feed_lines );
				?>
			<div class="metric">
				<div class="logf"><?php echo esc_html( $feed ); ?></div>
				<div class="val">
					<span class="n metric-num" data-count="<?php echo esc_attr( (string) $m['v'] ); ?>">0</span>
					<span class="u"><?php echo esc_html( $m['u'] ); ?></span>
				</div>
				<div class="lbl"><?php echo esc_html( $m['lbl'] ); ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

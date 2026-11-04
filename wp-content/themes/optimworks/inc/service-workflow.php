<?php
/**
 * Shared animated service hero (ServiceWorkflow port).
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero flow records keyed by image basename.
 *
 * @return array<string,array{core:string,steps:array<int,array{0:string,1:string}>,out:array{0:string,1:string}}>
 */
function ow_hero_flows() {
	static $flows = null;
	if ( null !== $flows ) {
		return $flows;
	}
	$path = get_template_directory() . '/assets/js/hero-flows.json';
	if ( ! file_exists( $path ) ) {
		$flows = array();
		return $flows;
	}
	$decoded = json_decode( (string) file_get_contents( $path ), true );
	$flows   = is_array( $decoded ) ? $decoded : array();
	return $flows;
}

/**
 * Normalize an image path/URL to the heroFlows basename key.
 *
 * @param string $image Image URL or filename.
 * @return string
 */
function ow_hero_flow_key( $image ) {
	$image = (string) $image;
	$path  = wp_parse_url( $image, PHP_URL_PATH );
	if ( ! is_string( $path ) || '' === $path ) {
		$path = $image;
	}
	$base = basename( $path );
	$base = preg_replace( '/\?.*$/', '', (string) $base );
	return is_string( $base ) ? $base : '';
}

/**
 * Render the shared service workflow hero mount point.
 *
 * @param string              $image Image URL or filename (matches heroFlows key).
 * @param string              $alt   Accessible label.
 * @param array<string,mixed> $opts  Optional: delivery[], heads[], coreName, coreSub, outTitle, outSub.
 */
function ow_service_workflow_hero( $image = '', $alt = '', $opts = array() ) {
	static $uid = 0;
	$uid++;

	$key   = ow_hero_flow_key( $image );
	$flows = ow_hero_flows();
	$flow  = ( '' !== $key && isset( $flows[ $key ] ) ) ? $flows[ $key ] : null;

	$stages = array();
	if ( $flow && ! empty( $flow['steps'] ) ) {
		foreach ( $flow['steps'] as $step ) {
			$stages[] = $step[0];
		}
	} elseif ( ! empty( $opts['delivery'] ) && is_array( $opts['delivery'] ) ) {
		foreach ( $opts['delivery'] as $item ) {
			if ( ! empty( $item['phase'] ) ) {
				$stages[] = $item['phase'];
			}
		}
	}
	if ( ! $stages ) {
		$stages = array( 'Scope', 'Build', 'Review', 'Prove', 'Handover' );
	}

	$out_title = '';
	$out_sub   = 'Handed over · Owned';
	if ( $flow && ! empty( $flow['out'] ) ) {
		$out_title = $flow['out'][0];
		$out_sub   = $flow['out'][1];
	} elseif ( ! empty( $opts['outTitle'] ) ) {
		$out_title = (string) $opts['outTitle'];
	} elseif ( ! empty( $opts['delivery'] ) && is_array( $opts['delivery'] ) ) {
		$last = end( $opts['delivery'] );
		if ( is_array( $last ) && ! empty( $last['output'] ) ) {
			$out_title = (string) $last['output'];
		}
	}
	if ( '' === $out_title ) {
		$out_title = 'Owned pack';
	}
	if ( ! empty( $opts['outSub'] ) ) {
		$out_sub = (string) $opts['outSub'];
	}

	$core_name = ( $flow && ! empty( $flow['core'] ) ) ? (string) $flow['core'] : ( isset( $opts['coreName'] ) ? (string) $opts['coreName'] : 'Optimworks' );
	$core_sub  = isset( $opts['coreSub'] ) ? (string) $opts['coreSub'] : 'Delivery live';
	$heads     = isset( $opts['heads'] ) && is_array( $opts['heads'] ) ? $opts['heads'] : array( 'Scope', 'Delivery', 'Handover' );

	if ( '' === (string) $alt ) {
		$alt = implode( ', ', $stages ) . ' → ' . $out_title;
	}

	$config = array(
		'image'    => $key,
		'flow'     => $flow,
		'stages'   => $stages,
		'heads'    => array_values( $heads ),
		'coreName' => $core_name,
		'coreSub'  => $core_sub,
		'outTitle' => $out_title,
		'outSub'   => $out_sub,
		'aria'     => (string) $alt,
	);

	$id = 'ow-sw-' . $uid;
	?>
	<div class="acx" data-service-workflow data-config-id="<?php echo esc_attr( $id ); ?>" role="img" aria-label="<?php echo esc_attr( (string) $alt ); ?>">
		<div class="acx-heads" aria-hidden="true">
			<span><?php echo esc_html( $heads[0] ); ?></span>
			<span><?php echo esc_html( isset( $heads[1] ) ? $heads[1] : 'Delivery' ); ?></span>
			<span><?php echo esc_html( isset( $heads[2] ) ? $heads[2] : 'Handover' ); ?></span>
		</div>
		<div class="acx-body" aria-hidden="true">
			<ol class="acx-pills">
				<?php foreach ( $stages as $i => $label ) : ?>
					<li class="<?php echo 0 === $i ? 'on' : ''; ?>">
						<span class="acx-ico"></span>
						<span class="acx-lbl"><em><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></em><?php echo esc_html( $label ); ?></span>
						<span class="acx-state"></span>
					</li>
				<?php endforeach; ?>
			</ol>
			<svg class="acx-wires" viewBox="0 0 130 400" preserveAspectRatio="none" fill="none" aria-hidden="true"></svg>
			<div class="acx-core">
				<div class="acx-core-in">
					<b><?php echo esc_html( $core_name ); ?></b>
					<small><?php echo esc_html( $core_sub ); ?></small>
					<span class="acx-core-step"><?php echo esc_html( $stages[0] ); ?></span>
				</div>
			</div>
			<span class="acx-out-line" aria-hidden="true"><i></i></span>
			<div class="acx-out">
				<span class="acx-shield" aria-hidden="true"></span>
				<strong><?php echo esc_html( $out_title ); ?></strong>
				<small><?php echo esc_html( $out_sub ); ?></small>
			</div>
		</div>
	</div>
	<script type="application/json" id="<?php echo esc_attr( $id ); ?>"><?php echo wp_json_encode( $config ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- JSON payload. ?></script>
	<?php
}

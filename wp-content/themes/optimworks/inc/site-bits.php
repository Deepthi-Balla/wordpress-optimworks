<?php
/**
 * SiteBits helpers — PHP port of Crumb, PageHero, PageClose, LogoWall.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Client logo list matching React CLIENT_LOGOS / homepage proof wall.
 *
 * @return array<int,array{file:string,name:string}>
 */
function ow_client_logos() {
	return array(
		array( 'file' => 't-rowe-price.png', 'name' => 'T. Rowe Price' ),
		array( 'file' => 'drfirst.png', 'name' => 'DrFirst' ),
		array( 'file' => 'finfolio.png', 'name' => 'Finfolio' ),
		array( 'file' => 'graduway.png', 'name' => 'Graduway' ),
		array( 'file' => 'commoncents.png', 'name' => 'Commoncents' ),
		array( 'file' => 'sonra.png', 'name' => 'Sonra' ),
		array( 'file' => 'microcom.png', 'name' => 'Microcom' ),
		array( 'file' => 'feedier.png', 'name' => 'Feedier' ),
		array( 'file' => 'workspace2go.png', 'name' => 'Workspace2go' ),
		array( 'file' => 'alteatec.png', 'name' => 'Alteatec' ),
		array( 'file' => 'kbs.png', 'name' => 'KBS' ),
		array( 'file' => 'testmart.png', 'name' => 'Testmart' ),
		array( 'file' => 'finlink.png', 'name' => 'Finlink' ),
	);
}

/**
 * Theme image URI under assets/images/.
 *
 * @param string $file Filename relative to assets/images/.
 * @return string
 */
function ow_img( $file ) {
	return get_template_directory_uri() . '/assets/images/' . ltrim( (string) $file, '/' );
}

/**
 * Breadcrumb nav matching SiteBits Crumb (class crumb).
 *
 * @param array<int,array{href?:string,label:string}> $items Crumb items.
 * @return string HTML.
 */
function ow_crumb( $items ) {
	ob_start();
	?>
	<nav class="crumb" aria-label="Breadcrumb">
		<?php
		foreach ( $items as $index => $item ) :
			$label = isset( $item['label'] ) ? (string) $item['label'] : '';
			$href  = isset( $item['href'] ) ? (string) $item['href'] : '';
			?>
			<span>
				<?php if ( $index > 0 ) : ?>
					<span>/</span>
				<?php endif; ?>
				<?php if ( '' !== $href ) : ?>
					<a href="<?php echo ow_home( $href ); ?>"><?php echo esc_html( $label ); ?></a>
				<?php else : ?>
					<span><?php echo esc_html( $label ); ?></span>
				<?php endif; ?>
			</span>
		<?php endforeach; ?>
	</nav>
	<?php
	return (string) ob_get_clean();
}

/**
 * PageHero matching SiteBits.
 *
 * When $extra_html is provided (e.g. pagehero-art figure), renders pagehero--visual.
 *
 * @param string $crumb_html  Pre-rendered crumb markup from ow_crumb().
 * @param string $title       Page title (plain text or trusted HTML via wp_kses_post).
 * @param string $lede        Lead paragraph.
 * @param string $extra_html  Optional right-column HTML (figure / ServiceVisual).
 */
function ow_page_hero( $crumb_html, $title, $lede, $extra_html = '' ) {
	$has_visual = ( '' !== (string) $extra_html );
	$class      = $has_visual ? 'pagehero pagehero--visual' : 'pagehero';
	?>
	<section class="<?php echo esc_attr( $class ); ?>">
		<div class="wrap">
			<?php if ( $has_visual ) : ?>
				<div class="pagehero-grid">
					<div>
						<?php echo $crumb_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- from ow_crumb. ?>
						<h1><?php echo wp_kses_post( $title ); ?></h1>
						<p class="lede"><?php echo esc_html( $lede ); ?></p>
					</div>
					<?php echo $extra_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- caller-built trusted markup. ?>
				</div>
			<?php else : ?>
				<?php echo $crumb_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- from ow_crumb. ?>
				<h1><?php echo wp_kses_post( $title ); ?></h1>
				<p class="lede"><?php echo esc_html( $lede ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<?php
}

/**
 * PageClose — Pilot Week finale matching SiteBits.
 */
function ow_page_close() {
	?>
	<section class="band band--alt2">
		<div class="wrap reveal">
			<div class="finale">
				<div>
					<h2>One week on your systems. No invoice.</h2>
					<p>
						One experienced engineer. Real test work in your tools. A written summary at the end.
						You keep the work either way.
					</p>
				</div>
				<a href="<?php echo ow_home( '/contact#pilot' ); ?>" class="btn btn-brand">
					Start a Pilot Week <?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</a>
			</div>
		</div>
	</section>
	<?php
}

/**
 * LogoWall — scrolling client logos matching SiteBits LogoWall.
 *
 * @param string $label Label above the marquee.
 */
function ow_logo_wall( $label = 'Teams on the public logo wall' ) {
	$uri   = get_template_directory_uri() . '/assets/logos';
	$logos = ow_client_logos();
	?>
	<div class="clog-band reveal" style="margin-top: 48px;">
		<div class="mqlbl"><?php echo esc_html( $label ); ?></div>
		<div class="mq">
			<div class="mqt">
				<?php
				for ( $dup = 0; $dup < 2; $dup++ ) :
					foreach ( $logos as $item ) :
						?>
						<span class="clog"<?php echo 1 === $dup ? ' aria-hidden="true"' : ''; ?>>
							<img
								src="<?php echo esc_url( $uri . '/' . $item['file'] ); ?>"
								alt="<?php echo 0 === $dup ? esc_attr( $item['name'] ) : ''; ?>"
								loading="lazy"
							/>
						</span>
						<?php
					endforeach;
				endfor;
				?>
			</div>
		</div>
	</div>
	<?php
}

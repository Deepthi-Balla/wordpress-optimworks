<?php
/**
 * Service buying page stack — PHP port of ServiceBuyingPage / ServiceFlow / ServiceVisual.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * SVG icon use markup matching IconSprite symbols.
 *
 * @param string $id Icon id, e.g. i-arrow or #i-arrow.
 * @return string
 */
function ow_icon( $id ) {
	$id = ltrim( (string) $id, '#' );
	return '<svg aria-hidden="true"><use href="#' . esc_attr( $id ) . '"></use></svg>';
}

/**
 * Escaped home_url helper.
 *
 * @param string $path Path relative to home.
 * @return string
 */
function ow_home( $path = '/' ) {
	return esc_url( home_url( $path ) );
}

/**
 * Tool logo entry for LogoBench.
 *
 * Expects theme assets at assets/tools/. If that folder is missing at runtime,
 * paths still point there (copy from React public/tools when provisioning).
 *
 * @param string $file Filename with or without extension.
 * @param string $name Display name.
 * @return array{src:string,name:string}
 */
function ow_tool( $file, $name ) {
	$file = (string) $file;
	if ( false === strpos( $file, '.' ) ) {
		$file .= '.svg';
	}
	return array(
		'src'  => get_template_directory_uri() . '/assets/tools/' . $file,
		'name' => $name,
	);
}

/**
 * Open ServiceFrame equivalent (main only — header/footer/sprite live in theme chrome).
 */
function ow_service_frame_start() {
	echo "<main>\n";
}

/**
 * Close ServiceFrame equivalent.
 */
function ow_service_frame_end() {
	echo "</main>\n";
}

/**
 * FlowHead — section heading block.
 *
 * @param string      $step    Step number, e.g. 01.
 * @param string      $eyebrow Eyebrow label after step.
 * @param string      $title   Heading (HTML allowed via wp_kses_post).
 * @param string|null $text    Optional supporting paragraph.
 */
function ow_flow_head( $step, $eyebrow, $title, $text = null ) {
	?>
	<div class="sec-head reveal">
		<span class="eyebrow"><?php echo esc_html( $step ); ?> · <?php echo esc_html( $eyebrow ); ?></span>
		<h2><?php echo wp_kses_post( $title ); ?></h2>
		<?php if ( null !== $text && '' !== $text ) : ?>
			<p><?php echo wp_kses_post( $text ); ?></p>
		<?php endif; ?>
	</div>
	<?php
}

/**
 * ServiceFaq accordion — matches ServiceFlow markup for site.js / native details.
 *
 * @param array<int,array{q:string,a:string}> $items FAQ items.
 */
function ow_service_faq( $items ) {
	?>
	<div class="fr-faq reveal">
		<?php foreach ( $items as $item ) : ?>
			<details>
				<summary>
					<?php echo esc_html( $item['q'] ); ?>
					<?php echo ow_icon( 'i-chev' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</summary>
				<p><?php echo esc_html( $item['a'] ); ?></p>
			</details>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * LogoBench — tool groups.
 *
 * @param array<int,array{t:string,tools:array<int,array{src?:string,name:string,mark?:string}>}> $groups
 */
function ow_logo_bench( $groups ) {
	?>
	<div class="flow-bench reveal">
		<?php foreach ( $groups as $group ) : ?>
			<div>
				<h3><?php echo esc_html( $group['t'] ); ?></h3>
				<ul>
					<?php foreach ( $group['tools'] as $item ) : ?>
						<li>
							<span class="flow-bench-ico">
								<?php if ( ! empty( $item['src'] ) ) : ?>
									<img src="<?php echo esc_url( $item['src'] ); ?>" alt="" />
								<?php else : ?>
									<b class="flow-bench-own"><?php echo esc_html( isset( $item['mark'] ) ? $item['mark'] : 'tR' ); ?></b>
								<?php endif; ?>
							</span>
							<span><?php echo esc_html( $item['name'] ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * ServiceVisual — hero / card image.
 *
 * @param string $src     Image URL.
 * @param string $label   Alt text.
 * @param bool   $compact Use indcard-art + lazy.
 */
function ow_service_visual( $src, $label = '', $compact = false ) {
	if ( '' === (string) $src ) {
		return;
	}
	$class = $compact ? ' class="indcard-art"' : '';
	$loading = $compact ? 'lazy' : 'eager';
	printf(
		'<img%s src="%s" alt="%s" loading="%s" />',
		$class, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static class attr.
		esc_url( $src ),
		esc_attr( $label ),
		esc_attr( $loading )
	);
}

/**
 * AcceleratorCallout aside (fr-ai-governance).
 *
 * @param array $c Keys: kicker, name, text, href, link, icon, steps[{n,title,text}], footer.
 */
function ow_accelerator_callout( $c ) {
	$name     = isset( $c['name'] ) ? (string) $c['name'] : '';
	$title_id = sanitize_title( $name ) . '-title';
	?>
	<aside class="fr-ai-governance reveal" aria-labelledby="<?php echo esc_attr( $title_id ); ?>">
		<div class="fr-ai-product">
			<div class="fr-ai-product-top">
				<span class="fr-ai-icon" aria-hidden="true">
					<?php echo ow_icon( isset( $c['icon'] ) ? $c['icon'] : 'i-tools' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</span>
				<span><?php echo esc_html( isset( $c['kicker'] ) ? $c['kicker'] : '' ); ?></span>
			</div>
			<h3 id="<?php echo esc_attr( $title_id ); ?>"><?php echo esc_html( $name ); ?></h3>
			<p><?php echo esc_html( isset( $c['text'] ) ? $c['text'] : '' ); ?></p>
			<a href="<?php echo esc_url( isset( $c['href'] ) ? $c['href'] : '#' ); ?>">
				<?php echo esc_html( isset( $c['link'] ) ? $c['link'] : '' ); ?>
				<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</a>
		</div>
		<div class="fr-ai-flow">
			<span class="fr-ai-eyebrow">Where it sits in this service</span>
			<ol>
				<?php foreach ( ( isset( $c['steps'] ) ? $c['steps'] : array() ) as $step ) : ?>
					<li>
						<span><?php echo esc_html( $step['n'] ); ?></span>
						<div>
							<h4><?php echo esc_html( $step['title'] ); ?></h4>
							<p><?php echo esc_html( $step['text'] ); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
			<footer>
				<?php echo ow_icon( 'i-shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				<?php echo esc_html( isset( $c['footer'] ) ? $c['footer'] : '' ); ?>
			</footer>
		</div>
	</aside>
	<?php
}

/**
 * Scope grid (au-scope).
 *
 * @param array<int,array{icon:string,title:string,text:string,output:string}> $items
 */
function ow_scope_grid( $items ) {
	?>
	<div class="au-scope reveal">
		<?php foreach ( $items as $item ) : ?>
			<article>
				<span class="au-scope-icon">
					<?php echo ow_icon( $item['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</span>
				<h3><?php echo esc_html( $item['title'] ); ?></h3>
				<p><?php echo esc_html( $item['text'] ); ?></p>
				<b><?php echo esc_html( $item['output'] ); ?></b>
			</article>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * Delivery model (au-delivery).
 *
 * @param array<int,array{phase:string,owner:string,text:string,output:string}> $items
 */
function ow_delivery_model( $items ) {
	?>
	<ol class="au-delivery reveal">
		<?php
		$index = 0;
		foreach ( $items as $item ) :
			$index++;
			?>
			<li>
				<span class="au-delivery-index"><?php echo esc_html( str_pad( (string) $index, 2, '0', STR_PAD_LEFT ) ); ?></span>
				<div class="au-delivery-copy">
					<span><?php echo esc_html( $item['owner'] ); ?></span>
					<h3><?php echo esc_html( $item['phase'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</div>
				<div class="au-delivery-output">
					<span>Output</span>
					<b><?php echo esc_html( $item['output'] ); ?></b>
				</div>
			</li>
		<?php endforeach; ?>
	</ol>
	<?php
}

/**
 * Full ServiceBuyingPage render. Wraps content in &lt;main&gt;.
 *
 * Notable keys: title / boundary / spotlight / extra may contain trusted HTML
 * (use wp_kses_post). spotlight/extra may also be callables that echo markup.
 *
 * @param array $p Buying page props (see ServiceBuyingPage.tsx BuyingPageProps).
 */
function ow_render_service_buying_page( $p ) {
	$crumb_parent_label = isset( $p['crumbParent']['label'] ) ? $p['crumbParent']['label'] : 'Services';
	$crumb_parent_href  = isset( $p['crumbParent']['href'] ) ? $p['crumbParent']['href'] : '/services';
	$ghost_cta          = isset( $p['ghostCta'] ) ? $p['ghostCta'] : 'See what this covers';
	$scope_eyebrow      = isset( $p['scopeEyebrow'] ) ? $p['scopeEyebrow'] : 'What we cover';
	$boundary_label     = isset( $p['boundaryLabel'] ) ? $p['boundaryLabel'] : 'Where this service stops';
	$ownership_icon     = isset( $p['ownershipIcon'] ) ? $p['ownershipIcon'] : 'i-shield';
	$close_cta          = isset( $p['closeCta'] ) ? $p['closeCta'] : 'Start a Pilot Week';
	$close_href         = isset( $p['closeHref'] ) ? $p['closeHref'] : '/contact#pilot';
	$signal             = isset( $p['signal'] ) ? $p['signal'] : array( '', '', '' );

	ow_service_frame_start();
	?>
	<div class="service-page fr-enterprise au-enterprise">
		<section class="fr-hero">
			<div class="wrap">
				<nav class="sv-crumb" aria-label="Breadcrumb">
					<a href="<?php echo ow_home( '/' ); ?>">Home</a>
					<span>/</span>
					<a href="<?php echo ow_home( $crumb_parent_href ); ?>"><?php echo esc_html( $crumb_parent_label ); ?></a>
					<span>/</span>
					<strong><?php echo esc_html( isset( $p['crumb'] ) ? $p['crumb'] : '' ); ?></strong>
				</nav>
				<div class="fr-hgrid fr-hgrid-visual">
					<div class="fr-hcopy">
						<div class="kicker an d1"><?php echo esc_html( isset( $p['kicker'] ) ? $p['kicker'] : '' ); ?></div>
						<?php if ( ! empty( $p['poweredBy'] ) ) : ?>
							<a class="fr-powered an d2" href="<?php echo ow_home( $p['poweredBy']['href'] ); ?>">
								Powered by <b><?php echo esc_html( $p['poweredBy']['name'] ); ?></b>
							</a>
						<?php endif; ?>
						<h1 class="an d2"><?php echo wp_kses_post( isset( $p['title'] ) ? $p['title'] : '' ); ?></h1>
						<div class="fr-ai-signal an d3">
							<?php echo ow_icon( isset( $p['signalIcon'] ) ? $p['signalIcon'] : 'i-tools' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span><?php echo esc_html( $signal[0] ); ?></span>
							<i aria-hidden="true"></i>
							<span><?php echo esc_html( $signal[1] ); ?></span>
							<i aria-hidden="true"></i>
							<span><?php echo esc_html( $signal[2] ); ?></span>
						</div>
						<p class="fr-lede an d3"><?php echo esc_html( isset( $p['lede'] ) ? $p['lede'] : '' ); ?></p>
						<div class="fr-covers an d3" aria-label="Service coverage">
							<?php foreach ( ( isset( $p['covers'] ) ? $p['covers'] : array() ) as $cover ) : ?>
								<span><?php echo esc_html( $cover ); ?></span>
							<?php endforeach; ?>
						</div>
						<div class="hero-ctas an d4">
							<a href="<?php echo ow_home( '/contact#form' ); ?>" class="btn btn-brand">
								<?php echo esc_html( isset( $p['cta'] ) ? $p['cta'] : '' ); ?>
								<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
							<a href="#<?php echo esc_attr( isset( $p['scopeId'] ) ? $p['scopeId'] : '' ); ?>" class="btn btn-ghost">
								<?php echo esc_html( $ghost_cta ); ?>
							</a>
						</div>
					</div>
					<figure class="fr-hero-art an d3">
						<?php
						if ( ! empty( $p['heroVisual'] ) && 'aitc' === $p['heroVisual'] ) {
							ow_aitc_hero_visual( isset( $p['imageAlt'] ) ? $p['imageAlt'] : '' );
						} else {
							ow_service_visual(
								isset( $p['image'] ) ? $p['image'] : '',
								isset( $p['imageAlt'] ) ? $p['imageAlt'] : ''
							);
						}
						?>
					</figure>
				</div>
			</div>
		</section>

		<section class="band fr-trigger-band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'01',
					'The problem this service solves',
					isset( $p['triggerTitle'] ) ? $p['triggerTitle'] : '',
					isset( $p['triggerText'] ) ? $p['triggerText'] : null
				);
				?>
				<div class="fr-triggers stag reveal">
					<?php foreach ( ( isset( $p['triggers'] ) ? $p['triggers'] : array() ) as $item ) : ?>
						<article>
							<span class="fr-trigger-mark" aria-hidden="true">
								<?php echo ow_icon( $item['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</span>
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['text'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="band" id="<?php echo esc_attr( isset( $p['scopeId'] ) ? $p['scopeId'] : '' ); ?>">
			<div class="wrap">
				<?php
				ow_flow_head(
					'02',
					$scope_eyebrow,
					isset( $p['scopeTitle'] ) ? $p['scopeTitle'] : '',
					isset( $p['scopeText'] ) ? $p['scopeText'] : null
				);
				ow_scope_grid( isset( $p['scope'] ) ? $p['scope'] : array() );
				?>
				<div class="au-boundary reveal">
					<span><?php echo esc_html( $boundary_label ); ?></span>
					<p><?php echo wp_kses_post( isset( $p['boundary'] ) ? $p['boundary'] : '' ); ?></p>
				</div>
				<?php
				if ( isset( $p['spotlight'] ) ) {
					if ( is_callable( $p['spotlight'] ) ) {
						call_user_func( $p['spotlight'] );
					} elseif ( is_string( $p['spotlight'] ) && '' !== $p['spotlight'] ) {
						echo wp_kses_post( $p['spotlight'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- kses.
					}
				}
				?>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'03',
					'How the work runs',
					isset( $p['deliveryTitle'] ) ? $p['deliveryTitle'] : '',
					isset( $p['deliveryText'] ) ? $p['deliveryText'] : null
				);
				ow_delivery_model( isset( $p['delivery'] ) ? $p['delivery'] : array() );
				?>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php ow_flow_head( '04', 'Who owns the outcome', isset( $p['ownershipTitle'] ) ? $p['ownershipTitle'] : '' ); ?>
				<div class="au-ownership reveal">
					<div>
						<span class="eyebrow">Ownership principle</span>
						<h3><?php echo esc_html( isset( $p['ownershipHead'] ) ? $p['ownershipHead'] : '' ); ?></h3>
						<p><?php echo esc_html( isset( $p['ownershipText'] ) ? $p['ownershipText'] : '' ); ?></p>
					</div>
					<div class="au-ownership-list">
						<?php foreach ( ( isset( $p['ownershipItems'] ) ? $p['ownershipItems'] : array() ) as $pair ) : ?>
							<article>
								<?php echo ow_icon( $ownership_icon ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								<div>
									<h4><?php echo esc_html( $pair[0] ); ?></h4>
									<p><?php echo esc_html( $pair[1] ); ?></p>
								</div>
							</article>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>

		<section class="band au-proof-band">
			<div class="wrap">
				<?php
				ow_flow_head(
					'05',
					'What you receive',
					isset( $p['proofTitle'] ) ? $p['proofTitle'] : '',
					isset( $p['proofText'] ) ? $p['proofText'] : null
				);
				$pl = isset( $p['proofLeft'] ) ? $p['proofLeft'] : array( 'kicker' => '', 'title' => '', 'text' => '' );
				$pm = isset( $p['proofMid'] ) ? $p['proofMid'] : array( 'from' => '', 'to' => '', 'title' => '', 'text' => '' );
				$pr = isset( $p['proofRight'] ) ? $p['proofRight'] : array( 'kicker' => '', 'title' => '', 'text' => '' );
				?>
				<div class="au-proof reveal">
					<article>
						<strong><?php echo esc_html( $pl['kicker'] ); ?></strong>
						<h3><?php echo esc_html( $pl['title'] ); ?></h3>
						<p><?php echo esc_html( $pl['text'] ); ?></p>
					</article>
					<article class="is-featured">
						<div>
							<strong><?php echo esc_html( $pm['from'] ); ?></strong>
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<strong><?php echo esc_html( $pm['to'] ); ?></strong>
						</div>
						<h3><?php echo esc_html( $pm['title'] ); ?></h3>
						<p><?php echo esc_html( $pm['text'] ); ?></p>
					</article>
					<article>
						<strong><?php echo esc_html( $pr['kicker'] ); ?></strong>
						<h3><?php echo esc_html( $pr['title'] ); ?></h3>
						<p><?php echo esc_html( $pr['text'] ); ?></p>
					</article>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php
				ow_flow_head(
					'06',
					'Tools on the engagement',
					isset( $p['ecoTitle'] ) ? $p['ecoTitle'] : '',
					isset( $p['ecoText'] ) ? $p['ecoText'] : null
				);
				ow_logo_bench( isset( $p['tools'] ) ? $p['tools'] : array() );
				if ( isset( $p['extra'] ) ) {
					if ( is_callable( $p['extra'] ) ) {
						call_user_func( $p['extra'] );
					} elseif ( is_string( $p['extra'] ) && '' !== $p['extra'] ) {
						echo wp_kses_post( $p['extra'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- kses.
					}
				}
				?>
			</div>
		</section>

		<section class="band">
			<div class="wrap">
				<?php ow_flow_head( '07', 'How to start', isset( $p['engageTitle'] ) ? $p['engageTitle'] : '' ); ?>
				<div class="au-engage reveal">
					<?php foreach ( ( isset( $p['engage'] ) ? $p['engage'] : array() ) as $item ) : ?>
						<article>
							<span><?php echo esc_html( $item['label'] ); ?></span>
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['text'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="band band--alt">
			<div class="wrap">
				<?php ow_flow_head( '08', 'Questions before you buy', isset( $p['faqTitle'] ) ? $p['faqTitle'] : '' ); ?>
				<?php ow_service_faq( isset( $p['faq'] ) ? $p['faq'] : array() ); ?>
			</div>
		</section>

		<section class="band band--alt2 au-close">
			<div class="wrap reveal">
				<div class="fr-finale">
					<div>
						<span class="eyebrow"><?php echo esc_html( isset( $p['closeEyebrow'] ) ? $p['closeEyebrow'] : '' ); ?></span>
						<h2><?php echo esc_html( isset( $p['closeTitle'] ) ? $p['closeTitle'] : '' ); ?></h2>
						<p><?php echo esc_html( isset( $p['closeText'] ) ? $p['closeText'] : '' ); ?></p>
					</div>
					<div class="fr-close-actions">
						<a href="<?php echo ow_home( $close_href ); ?>" class="btn btn-brand">
							<?php echo esc_html( $close_cta ); ?>
							<?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a href="<?php echo ow_home( '/contact#form' ); ?>" class="fr-close-link">
							<?php echo esc_html( isset( $p['closeLink'] ) ? $p['closeLink'] : '' ); ?>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php
	ow_service_frame_end();
}

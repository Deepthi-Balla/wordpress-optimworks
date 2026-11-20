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
 * Tools pipeline (ac-pipeline) — global service card layout.
 *
 * @param array<int,array{t:string,tools:array<int,array{src?:string,name:string,mark?:string}>}> $groups
 */
function ow_tool_pipeline( $groups ) {
	$count = count( $groups );
	?>
	<div class="ac-pipeline">
		<?php
		foreach ( $groups as $i => $group ) :
			$n = str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT );
			?>
			<div class="ac-tool-stage reveal">
				<h3><span><?php echo esc_html( $n ); ?> / </span><?php echo esc_html( $group['t'] ); ?></h3>
				<ul>
					<?php foreach ( $group['tools'] as $item ) : ?>
						<li>
							<?php if ( ! empty( $item['src'] ) ) : ?>
								<img src="<?php echo esc_url( $item['src'] ); ?>" alt="" loading="lazy" />
							<?php else : ?>
								<b class="flow-bench-own"><?php echo esc_html( isset( $item['mark'] ) ? $item['mark'] : 'tR' ); ?></b>
							<?php endif; ?>
							<span><?php echo esc_html( $item['name'] ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
				<?php if ( $i < $count - 1 ) : ?>
					<span class="ac-pipeline-arrow" aria-hidden="true"><?php echo ow_icon( 'i-arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * LogoBench — alias of ow_tool_pipeline for existing callers.
 *
 * @param array<int,array{t:string,tools:array<int,array{src?:string,name:string,mark?:string}>}> $groups
 */
function ow_logo_bench( $groups ) {
	ow_tool_pipeline( $groups );
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
 * Trigger cards (ac-triggers).
 *
 * @param array<int,array{icon:string,title:string,text:string}> $items
 */
function ow_triggers_grid( $items ) {
	?>
	<div class="ac-triggers stag reveal">
		<?php foreach ( $items as $item ) : ?>
			<article>
				<span class="fr-trigger-mark" aria-hidden="true">
					<?php echo ow_icon( $item['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</span>
				<h3><?php echo esc_html( $item['title'] ); ?></h3>
				<p><?php echo esc_html( $item['text'] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * Scope grid (ac-scope card layout).
 *
 * @param array<int,array{icon:string,title:string,text:string,output:string}> $items
 */
function ow_scope_grid( $items ) {
	?>
	<div class="ac-scope stag reveal">
		<?php foreach ( $items as $item ) : ?>
			<article>
				<span class="ac-card-icon">
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
 * Delivery model (ac-delivery cards, no index column).
 *
 * @param array<int,array{phase:string,owner:string,text:string,output:string}> $items
 */
function ow_delivery_model( $items ) {
	?>
	<ol class="ac-delivery">
		<?php foreach ( $items as $item ) : ?>
			<li class="reveal">
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
 * Engagement option cards (ac-engage).
 *
 * @param array<int,array{label:string,title:string,text:string}> $items
 */
function ow_engage_cards( $items ) {
	?>
	<div class="au-engage ac-engage reveal">
		<?php foreach ( $items as $item ) : ?>
			<article>
				<span><?php echo esc_html( $item['label'] ); ?></span>
				<h3><?php echo esc_html( $item['title'] ); ?></h3>
				<p><?php echo esc_html( $item['text'] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
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
	$is_aitc_page = isset( $GLOBALS['post']->post_name ) && 'ai-assisted-test-case-generation' === $GLOBALS['post']->post_name;
	?>
	<div class="service-page fr-enterprise au-enterprise ac-page<?php echo $is_aitc_page ? ' ow-aitc-design-system' : ''; ?>">
		<?php if ( $is_aitc_page ) : ?>
			<section class="fr-hero ow-aitc-hero" aria-label="AI-Assisted Test Case Generation">
				<div class="wrap">
					<figure class="ow-aitc-hero-art">
						<img class="ow-aitc-hero-image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ai-assisted-test-case-generation-hero.png' ); ?>" alt="AI-assisted test case generation. Accelerate test case creation with AI, engineered for accuracy, coverage and review-ready quality. Talk to an Expert or Download Brochure." width="1774" height="886" fetchpriority="high" />
						<a class="ow-aitc-hero-contact" href="<?php echo esc_url( ow_home( '/contact#form' ) ); ?>" aria-label="Talk to an Expert"></a>
					</figure>
				</div>
			</section>
		<?php else : ?>
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
						ow_service_workflow_hero(
							isset( $p['image'] ) ? $p['image'] : '',
							isset( $p['imageAlt'] ) ? $p['imageAlt'] : '',
							array(
								'delivery' => isset( $p['delivery'] ) ? $p['delivery'] : array(),
								'coreName' => ! empty( $p['poweredBy']['name'] ) ? $p['poweredBy']['name'] : 'Optimworks',
								'coreSub'  => 'Delivery live',
							)
						);
						?>
					</figure>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="band ow-problem" aria-labelledby="ow-problem-title">
				<div class="ow-problem__architecture" aria-hidden="true"></div>
				<div class="wrap ow-problem__inner">
					<div class="ow-problem__intro">
						<p class="ow-problem__eyebrow">01 · THE PROBLEM THIS SERVICE SOLVES</p>
						<h2 id="ow-problem-title">When structured<br><span>case design is</span> needed</h2>
						<p class="ow-problem__description">
							This service is suitable when teams need faster<br class="ow-problem__desktop-break">
							case preparation without giving up review,<br class="ow-problem__desktop-break">
							traceability or accountable coverage decisions.
						</p>
					</div>
					<div class="ow-problem__list" aria-label="Common testing challenges">
						<article class="ow-problem__item">
							<span class="ow-problem__icon" aria-hidden="true">
								<svg viewBox="0 0 40 40" fill="none"><path d="M20 4 35 11.5 20 19 5 11.5 20 4Z" /><path d="m5 19.5 15 7.5 15-7.5M5 27.5 20 35l15-7.5" /></svg>
							</span>
							<h3>Draft volume exceeds<br>review capacity</h3>
						</article>
						<article class="ow-problem__item">
							<span class="ow-problem__icon" aria-hidden="true">
								<svg viewBox="0 0 40 40" fill="none"><path d="m15.2 24.8-3.1 3.1a6.2 6.2 0 0 1-8.8-8.8l7.2-7.2a6.2 6.2 0 0 1 8.8 0" /><path d="m24.8 15.2 3.1-3.1a6.2 6.2 0 0 1 8.8 8.8l-7.2 7.2a6.2 6.2 0 0 1-8.8 0" /><path d="m14.5 25.5 11-11" /></svg>
							</span>
							<h3>Requirements live in one<br>place and tests in another</h3>
						</article>
						<article class="ow-problem__item">
							<span class="ow-problem__icon" aria-hidden="true">
								<svg viewBox="0 0 40 40" fill="none"><circle cx="20" cy="11" r="6" /><path d="M8.5 34v-3.5A11.5 11.5 0 0 1 20 19a11.5 11.5 0 0 1 11.5 11.5V34" /><path d="M8.5 16a5.5 5.5 0 0 0-5.5 5.5V29M31.5 16a5.5 5.5 0 0 1 5.5 5.5V29" /></svg>
							</span>
							<h3>Coverage decisions<br>lack ownership</h3>
						</article>
						<article class="ow-problem__item">
							<span class="ow-problem__icon" aria-hidden="true">
								<svg viewBox="0 0 40 40" fill="none"><path d="M20 4 35 11.5 20 19 5 11.5 20 4Z" /><path d="m5 19.5 15 7.5 15-7.5M5 27.5 20 35l15-7.5" /></svg>
							</span>
							<h3>Duplicate cases obscure<br>coverage gaps</h3>
						</article>
					</div>
				</div>
			</section>
		<?php else : ?>
			<section class="band fr-trigger-band">
				<div class="wrap">
					<?php
					ow_flow_head(
						'01',
						'The problem this service solves',
						isset( $p['triggerTitle'] ) ? $p['triggerTitle'] : '',
						isset( $p['triggerText'] ) ? $p['triggerText'] : null
					);
					ow_triggers_grid( isset( $p['triggers'] ) ? $p['triggers'] : array() );
					?>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="ow-scope" id="<?php echo esc_attr( isset( $p['scopeId'] ) ? $p['scopeId'] : '' ); ?>" aria-labelledby="ow-scope-title">
				<div class="ow-scope__art" aria-hidden="true"></div>
				<div class="ow-scope__content">
					<header class="ow-scope__header">
						<p class="ow-scope__eyebrow">02 · WHAT WE COVER</p>
						<h2 id="ow-scope-title">Scope and <span>deliverables</span></h2>
						<p class="ow-scope__description">We deliver engineered reviewed test cases and traceability. Functional Testing<br class="ow-scope__desktop-break"> remains responsible for execution journeys and Automation Testing remains<br class="ow-scope__desktop-break"> responsible for repeatable execution.</p>
					</header>
					<div class="ow-scope__steps" aria-label="Scope and deliverables">
						<article class="ow-scope__step">
							<span class="ow-scope__icon" aria-hidden="true"><svg viewBox="0 0 32 32" fill="none"><path d="M8 3.5h11l6 6V27a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 7 27V5a1.5 1.5 0 0 1 1-1.5Z"/><path d="M19 3.8V10h6M11 15l1.5 1.5L15 14M17.5 16h4M11 21l1.5 1.5L15 20M17.5 22h4"/></svg></span>
							<h3>Intake from<br>what you have</h3><span class="ow-scope__underline"></span>
						</article>
						<article class="ow-scope__step">
							<span class="ow-scope__icon" aria-hidden="true"><svg viewBox="0 0 32 32" fill="none"><path d="m15.8 3 2.1 7.1L25 12.2l-7.1 2.1-2.1 7.1-2.1-7.1-7.1-2.1 7.1-2.1L15.8 3Z"/><path d="m25.5 3 .9 3.1 3.1.9-3.1.9-.9 3.1-.9-3.1-3.1-.9 3.1-.9.9-3.1Z"/><path d="m7 22 .7 2.3L10 25l-2.3.7L7 28l-.7-2.3L4 25l2.3-.7L7 22Z"/></svg></span>
							<h3>Draft<br>generation</h3><span class="ow-scope__underline"></span>
						</article>
						<article class="ow-scope__step">
							<span class="ow-scope__icon" aria-hidden="true"><svg viewBox="0 0 32 32" fill="none"><circle cx="16" cy="9" r="4"/><path d="M8.5 25v-2.2a7.5 7.5 0 0 1 15 0V25M5.5 13a3.3 3.3 0 1 0 0 6.6M26.5 13a3.3 3.3 0 1 1 0 6.6M3.5 27v-1.8a5.2 5.2 0 0 1 4.2-5.1M28.5 27v-1.8a5.2 5.2 0 0 0-4.2-5.1"/></svg></span>
							<h3>Human<br>review</h3><span class="ow-scope__underline"></span>
						</article>
						<article class="ow-scope__step">
							<span class="ow-scope__icon" aria-hidden="true"><svg viewBox="0 0 32 32" fill="none"><path d="M16 3 27 7v8.2c0 6.4-4.6 10.8-11 14-6.4-3.2-11-7.6-11-14V7l11-4Z"/><path d="m11.5 15.5 3 3 6-6"/></svg></span>
							<h3>Approval<br>into the suite</h3><span class="ow-scope__underline"></span>
						</article>
						<article class="ow-scope__step">
							<span class="ow-scope__icon" aria-hidden="true"><svg viewBox="0 0 32 32" fill="none"><circle cx="16" cy="5.5" r="3"/><circle cx="6" cy="24.5" r="3"/><circle cx="26" cy="24.5" r="3"/><path d="m14.5 8.2-7 13.5M17.5 8.2l7 13.5M9 24.5h14"/></svg></span>
							<h3>Traceability</h3><span class="ow-scope__underline"></span>
						</article>
						<article class="ow-scope__step">
							<span class="ow-scope__icon" aria-hidden="true"><svg viewBox="0 0 32 32" fill="none"><path d="M3 10h24M22 5l5 5-5 5M29 22H5m5-5-5 5 5 5"/></svg></span>
							<h3>Handover</h3><span class="ow-scope__underline"></span>
						</article>
					</div>
				</div>
			</section>
		<?php else : ?>
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
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="band ow-delivery" aria-labelledby="ow-delivery-title">
				<div class="ow-delivery__architecture" aria-hidden="true"></div>
				<div class="ow-delivery__intro">
					<p class="ow-delivery__eyebrow">03 · HOW THE WORK RUNS</p>
					<h2 id="ow-delivery-title">Delivery method<br>and <span>responsibilities</span></h2>
					<p class="ow-delivery__description">Each phase has a named owner and an output<br class="ow-delivery__desktop-break"> your engineering team can inspect.</p>
				</div>
				<div class="ow-delivery__card" aria-label="Delivery phases and outputs">
					<?php foreach ( ( isset( $p['delivery'] ) ? $p['delivery'] : array() ) as $index => $phase ) : ?>
						<article class="ow-delivery__row">
							<div class="ow-delivery__number"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></div>
							<div class="ow-delivery__phase">
								<h3><?php echo esc_html( $phase['phase'] ); ?></h3>
								<p><?php echo esc_html( $phase['text'] ); ?></p>
							</div>
							<div class="ow-delivery__output">
								<span>OUTPUT</span>
								<strong><?php echo esc_html( $phase['output'] ); ?></strong>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</section>
		<?php else : ?>
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
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="band ow-ownership" aria-labelledby="ow-ownership-title">
				<div class="ow-ownership__dark-panel" aria-hidden="true"></div>
				<div class="ow-ownership__left">
					<p class="ow-ownership__eyebrow">04 · WHO OWNS THE OUTCOME</p>
					<h2 id="ow-ownership-title">Client ownership<br>and <span>continuity</span></h2>
					<span class="ow-ownership__accent-line" aria-hidden="true"></span>
					<p class="ow-ownership__principle-label">OWNERSHIP PRINCIPLE</p>
					<h3 class="ow-ownership__principle">Your team receives the<br>approved suite and<br>its decision history.</h3>
					<p class="ow-ownership__description">The engagement is complete when your<br class="ow-ownership__desktop-break"> nominated owner can maintain the sources,<br class="ow-ownership__desktop-break"> review record and approved cases.</p>
				</div>
				<div class="ow-ownership__right" aria-label="Ownership responsibilities">
					<article class="ow-ownership__item">
						<span class="ow-ownership__icon" aria-hidden="true"><svg viewBox="0 0 40 40" fill="none"><path d="M20 4 36 12 20 20 4 12 20 4Z"/><path d="m4 19 16 8 16-8M4 26 20 34l16-8"/></svg></span>
						<div class="ow-ownership__copy"><h3>Sources</h3><p>Drafts start from artefacts your team<br class="ow-ownership__desktop-break"> already owns.</p></div>
					</article>
					<article class="ow-ownership__item">
						<span class="ow-ownership__icon" aria-hidden="true"><svg viewBox="0 0 40 40" fill="none"><path d="M13 8H8.5A2.5 2.5 0 0 0 6 10.5v23A2.5 2.5 0 0 0 8.5 36h23a2.5 2.5 0 0 0 2.5-2.5v-23A2.5 2.5 0 0 0 31.5 8H27"/><path d="M14 5h12v7H14zM13 19h4M13 25h4M22 19h6M22 25h6M22 31h6"/><path d="m17 16 2 2 4-4"/></svg></span>
						<div class="ow-ownership__copy"><h3>Review</h3><p>Every case that enters the suite has a<br class="ow-ownership__desktop-break"> human decision attached.</p></div>
					</article>
					<article class="ow-ownership__item">
						<span class="ow-ownership__icon" aria-hidden="true"><svg viewBox="0 0 40 40" fill="none"><path d="M8 5h16l8 8v11M24 5v8h8M8 5v28a2 2 0 0 0 2 2h11"/><circle cx="29" cy="29" r="8"/><path d="m26 26 6 6m0-6-6 6"/></svg></span>
						<div class="ow-ownership__copy"><h3>Record</h3><p>Rejected drafts are visible so the same<br class="ow-ownership__desktop-break"> mistake is not reimported.</p></div>
					</article>
					<article class="ow-ownership__item">
						<span class="ow-ownership__icon" aria-hidden="true"><svg viewBox="0 0 40 40" fill="none"><path d="M20 20 13.5 13.5a7 7 0 1 0 0 13.0L20 20Zm0 0 6.5-6.5a7 7 0 1 1 0 13L20 20Z"/></svg></span>
						<div class="ow-ownership__copy"><h3>Continuity</h3><p>A named owner can explain the last<br class="ow-ownership__desktop-break"> approval and the next gap.</p></div>
					</article>
				</div>
			</section>
		<?php else : ?>
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
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<?php
			$pl = isset( $p['proofLeft'] ) ? $p['proofLeft'] : array( 'kicker' => '', 'title' => '', 'text' => '' );
			$pm = isset( $p['proofMid'] ) ? $p['proofMid'] : array( 'from' => '', 'to' => '', 'title' => '', 'text' => '' );
			$pr = isset( $p['proofRight'] ) ? $p['proofRight'] : array( 'kicker' => '', 'title' => '', 'text' => '' );
			?>
			<section class="ow-evidence" aria-labelledby="ow-evidence-title">
				<svg class="ow-evidence__ornament ow-evidence__ornament--top" viewBox="0 0 520 260" aria-hidden="true"><path d="M250 -20 C330 20 420 105 535 250"/><path d="M264 -25 C345 15 434 101 548 246"/><path d="M278 -30 C360 10 448 96 561 242"/><path d="M292 -35 C375 5 462 91 574 238"/><path d="M306 -40 C390 0 476 86 587 234"/><path d="M320 -45 C405 -5 490 81 600 230"/><path d="M334 -50 C420 -10 504 76 613 226"/><path d="M348 -55 C435 -15 518 71 626 222"/><path d="M362 -60 C450 -20 532 66 639 218"/><path d="M376 -65 C465 -25 546 61 652 214"/><path d="M390 -70 C480 -30 560 56 665 210"/><path d="M404 -75 C495 -35 574 51 678 206"/></svg>
				<svg class="ow-evidence__ornament ow-evidence__ornament--bottom" viewBox="0 0 520 300" aria-hidden="true"><path d="M-30 -20 C65 95 175 205 360 330"/><path d="M-43 -12 C55 104 165 215 350 340"/><path d="M-56 -4 C45 113 155 225 340 350"/><path d="M-69 4 C35 122 145 235 330 360"/><path d="M-82 12 C25 131 135 245 320 370"/><path d="M-95 20 C15 140 125 255 310 380"/><path d="M-108 28 C5 149 115 265 300 390"/><path d="M-121 36 C-5 158 105 275 290 400"/><path d="M-134 44 C-15 167 95 285 280 410"/><path d="M-147 52 C-25 176 85 295 270 420"/></svg>
				<div class="ow-evidence__intro">
					<p class="ow-evidence__eyebrow">05 – WHAT YOU RECEIVE</p>
					<h2 id="ow-evidence-title"><?php echo esc_html( isset( $p['proofTitle'] ) ? $p['proofTitle'] : '' ); ?></h2>
					<p class="ow-evidence__description">We deliver engineered reviewed test cases and traceability. Functional Testing<br class="ow-evidence__desktop-break"> remains responsible for executing on coverage risks.</p>
				</div>
				<div class="ow-evidence__visual" aria-hidden="true">
					<div class="ow-evidence__sheet ow-evidence__sheet--back"><span class="ow-evidence__sheet-line ow-evidence__sheet-line--long"></span><span class="ow-evidence__sheet-line"></span><span class="ow-evidence__sheet-line ow-evidence__sheet-line--short"></span></div>
					<div class="ow-evidence__sheet ow-evidence__sheet--middle"><span class="ow-evidence__sheet-line ow-evidence__sheet-line--long"></span><span class="ow-evidence__sheet-line"></span><span class="ow-evidence__sheet-line ow-evidence__sheet-line--short"></span></div>
					<div class="ow-evidence__sheet ow-evidence__sheet--front"><div class="ow-evidence__check-row"><span class="ow-evidence__check">✓</span><i></i></div><div class="ow-evidence__check-row"><span class="ow-evidence__check">✓</span><i></i></div><div class="ow-evidence__check-row"><span class="ow-evidence__check">✓</span><i></i></div></div>
					<span class="ow-evidence__glow"></span>
				</div>
				<div class="ow-evidence__flow" aria-label="Evidence and delivery workflow">
					<article class="ow-evidence__card ow-evidence__card--intake">
						<div class="ow-evidence__card-heading"><span class="ow-evidence__card-icon" aria-hidden="true"><svg viewBox="0 0 48 48" fill="none"><path d="m24 5 19 10-19 10L5 15 24 5Z"/><path d="m5 23 19 10 19-10M5 31l19 10 19-10"/></svg></span><span class="ow-evidence__card-divider"></span><h3><?php echo esc_html( $pl['kicker'] ); ?></h3></div>
						<h4><?php echo esc_html( $pl['title'] ); ?></h4>
						<p>Stories, designs and existing cases<br class="ow-evidence__desktop-break"> define the product context for drafting.</p>
					</article>
					<span class="ow-evidence__connector ow-evidence__connector--one" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m8 4 8 8-8 8"/></svg></span>
					<article class="ow-evidence__card ow-evidence__card--review">
						<div class="ow-evidence__card-heading"><span class="ow-evidence__card-icon ow-evidence__card-icon--document" aria-hidden="true"><svg viewBox="0 0 48 48" fill="none"><path d="M11 5h18l9 9v29H11V5Z"/><path d="M29 5v10h9M17 22l2.5 2.5L24 20M27 23h6M17 31h16M17 36h10"/><path d="m28 5 10 9"/></svg></span><span class="ow-evidence__card-divider"></span><h3><?php echo esc_html( $pm['from'] ); ?> <em>→</em> <?php echo esc_html( $pm['to'] ); ?></h3></div>
						<h4><?php echo esc_html( $pm['title'] ); ?></h4>
						<p>Accepted, edited and rejected cases<br class="ow-evidence__desktop-break"> remain visible with their review status.</p>
					</article>
					<span class="ow-evidence__connector ow-evidence__connector--two" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m8 4 8 8-8 8"/></svg></span>
					<article class="ow-evidence__card ow-evidence__card--suite">
						<div class="ow-evidence__card-heading"><span class="ow-evidence__card-icon ow-evidence__card-icon--grid" aria-hidden="true"><svg viewBox="0 0 48 48" fill="none"><rect x="5" y="5" width="16" height="16" rx="1"/><rect x="27" y="5" width="16" height="16" rx="1"/><rect x="5" y="27" width="16" height="16" rx="1"/><rect x="27" y="27" width="16" height="16" rx="1"/></svg></span><span class="ow-evidence__card-divider"></span><h3><?php echo esc_html( $pr['kicker'] ); ?></h3></div>
						<h4><?php echo esc_html( $pr['title'] ); ?></h4>
						<p>The record identifies approved coverage,<br class="ow-evidence__desktop-break"> deferred work and items requiring further review.</p>
					</article>
				</div>
			</section>
		<?php else : ?>
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
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="ow-tools" aria-labelledby="ow-tools-title">
				<div class="ow-tools__architecture" aria-hidden="true">
					<span class="ow-tools__arch-glow"></span>
					<?php for ( $arch_line = 1; $arch_line <= 10; $arch_line++ ) : ?>
						<span class="ow-tools__arch-line ow-tools__arch-line--<?php echo esc_attr( (string) $arch_line ); ?>"></span>
					<?php endfor; ?>
				</div>
				<header class="ow-tools__intro">
					<p class="ow-tools__eyebrow">06 – TOOLS ON THE ENGAGEMENT</p>
					<h2 id="ow-tools-title">Intake tools follow <span>the product.</span></h2>
					<p class="ow-tools__description">We work with the planning, design and delivery tools your engineering<br class="ow-tools__desktop-break"> team already uses and can own.</p>
				</header>
				<div class="ow-tools__workflow" aria-label="Tools used throughout the engagement">
					<article class="ow-tools__panel ow-tools__panel--intake">
						<h3><span>01 /</span> INTAKE</h3>
						<ul class="ow-tools__tool-list">
							<li><span class="ow-tools__brand ow-tools__brand--jira" aria-hidden="true"><svg viewBox="0 0 40 40"><path fill="#2684ff" d="M20 2 8 14l8 8 12-12z"/><path fill="#0052cc" d="m28 10-8 8 8 8 8-8z"/><path fill="#2684ff" d="m8 14-8 8 8 8 8-8z"/><path fill="#0052cc" d="m16 22 8 8-8 8-8-8z"/></svg></span><span class="ow-tools__tool-name">Jira</span></li>
							<li><span class="ow-tools__brand ow-tools__brand--linear" aria-hidden="true"><svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="19" fill="#5e6ad2"/><path d="M8 8 32 32M5 16l19 19M16 5l19 19" stroke="#fff" stroke-width="3" opacity=".9"/></svg></span><span class="ow-tools__tool-name">Linear</span></li>
							<li><span class="ow-tools__brand ow-tools__brand--figma" aria-hidden="true"><svg viewBox="0 0 40 40"><path fill="#f24e1e" d="M12 2h8v12h-8a6 6 0 0 1 0-12z"/><path fill="#ff7262" d="M20 2h8a6 6 0 1 1 0 12h-8z"/><path fill="#a259ff" d="M12 14h8v12h-8a6 6 0 1 1 0-12z"/><circle cx="26" cy="20" r="6" fill="#1abcfe"/><path fill="#0acf83" d="M12 26h8v8a6 6 0 1 1-8-8z"/></svg></span><span class="ow-tools__tool-name">Figma</span></li>
							<li><span class="ow-tools__brand ow-tools__brand--github" aria-hidden="true"><svg viewBox="0 0 40 40"><path fill="currentColor" d="M20 2C10 2 2 10 2 20c0 8 5 15 12 17 1 .2 2-.5 2-1.5v-3c-5 1-6-2-6-2-1-2-2-2-2-2-2-1 0-1 0-1 2 0 3 2 3 2 2 3 5 2 6 1 0-1 1-2 1-2-4 0-8-2-8-9 0-2 1-4 2-5 0 0-1-2 0-5 0 0 2-1 5 2 3-1 7-1 10 0 3-3 5-2 5-2 1 3 0 5 0 5 2 2 2 4 2 6 0 7-4 9-8 9 1 1 1 2 1 3v4c0 1 1 2 2 1 7-2 12-9 12-17C38 10 30 2 20 2z"/></svg></span><span class="ow-tools__tool-name">GitHub</span></li>
						</ul>
					</article>
					<span class="ow-tools__flow-arrow ow-tools__flow-arrow--one" aria-hidden="true"><svg viewBox="0 0 28 28" focusable="false"><path d="M2 4 L10 14 L2 24 M14 4 L22 14 L14 24"/></svg></span>
					<article class="ow-tools__panel ow-tools__panel--management">
						<h3><span>02 /</span> MANAGEMENT</h3>
						<div class="ow-tools__testrail"><svg viewBox="0 0 64 64" aria-hidden="true"><path fill="#00a875" d="m32 2 13 13-13 13-13-13zM16 18l13 13-13 13L3 31zM48 18l13 13-13 13-13-13zM32 34l13 13-13 13-13-13z"/><path fill="#38c99a" d="m16 2 13 13-13 13L3 15zM48 34l13 13-13 13-13-13z"/></svg><strong>TestRail</strong></div>
					</article>
					<span class="ow-tools__flow-arrow ow-tools__flow-arrow--two" aria-hidden="true"><svg viewBox="0 0 28 28" focusable="false"><path d="M2 4 L10 14 L2 24 M14 4 L22 14 L14 24"/></svg></span>
					<article class="ow-tools__panel ow-tools__panel--delivery">
						<h3><span>03 /</span> DELIVERY</h3>
						<ul class="ow-tools__tool-list ow-tools__tool-list--delivery">
							<li><span class="ow-tools__brand ow-tools__brand--actions" aria-hidden="true"><svg viewBox="0 0 40 40"><g fill="none" stroke="#2785ff" stroke-width="2.3"><circle cx="10" cy="9" r="8"/><circle cx="30" cy="31" r="7"/><circle cx="28" cy="11" r="5"/><path d="M10 17v8q0 5 6 5h7M18 18l6-4M16 25l9 5"/></g><path fill="#2785ff" d="m8 5 6 4-6 4zM27 27l7 4-7 4z"/></svg></span><span class="ow-tools__tool-name">GitHub Actions</span></li>
							<li><span class="ow-tools__brand ow-tools__brand--gitlab" aria-hidden="true"><svg viewBox="0 0 40 40"><path fill="#fc6d26" d="m20 36-18-13 6-18z"/><path fill="#e24329" d="M2 23 8 5l5 18z"/><path fill="#fc6d26" d="m38 23-18 13 12-31z"/><path fill="#e24329" d="m38 23-6-18-5 18z"/><path fill="#fca326" d="M13 23 20 36l7-13z"/></svg></span><span class="ow-tools__tool-name">GitLab</span></li>
							<li><span class="ow-tools__brand ow-tools__brand--azure" aria-hidden="true"><svg viewBox="0 0 40 40"><path fill="#0078d4" d="M4 9 23 2l13 6v25l-13 5-9-8 13 1V13L4 9z"/><path fill="#28a8ea" d="m4 9 10 21-10 6z"/><path fill="#0078d4" d="m14 30 9-17v17z"/></svg></span><span class="ow-tools__tool-name">Azure DevOps</span></li>
						</ul>
					</article>
					<span class="ow-tools__flow-arrow ow-tools__flow-arrow--three" aria-hidden="true"><svg viewBox="0 0 28 28" focusable="false"><path d="M2 4 L10 14 L2 24 M14 4 L22 14 L14 24"/></svg></span>
					<article class="ow-tools__panel ow-tools__panel--runners">
						<h3><span>04 /</span> RUNNERS AFTER APPROVAL</h3>
						<ul class="ow-tools__tool-list ow-tools__tool-list--runners">
							<li><span class="ow-tools__brand ow-tools__brand--playwright" aria-hidden="true"><svg viewBox="0 0 40 40"><path fill="#2ead45" d="M4 8 18 4l7 7 10-4-3 13-9 14-13-5L4 8z"/><path fill="#70d44b" d="m18 4 7 7-3 23-8-9z"/><path fill="#f7c844" d="M8 12q4 5 9 0t9 0q-3 8-9 8t-9-8z"/></svg></span><span class="ow-tools__tool-name">Playwright</span></li>
							<li><span class="ow-tools__brand ow-tools__brand--selenium" aria-hidden="true"><svg viewBox="0 0 40 40"><rect x="1" y="1" width="38" height="38" rx="5" fill="#00b900"/><path d="M10 21 17 28 31 12" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><text x="8" y="12" font-size="7" fill="#fff" font-weight="700">Se</text></svg></span><span class="ow-tools__tool-name">Selenium</span></li>
							<li><span class="ow-tools__brand ow-tools__brand--pytest" aria-hidden="true"><svg viewBox="0 0 40 40"><path fill="#2299dc" d="M3 3h34v8H3zM5 13h7v24H5zM16 13h7v18h-7zM27 13h7v12h-7z"/><path fill="#66c5ef" d="M3 3h34v3H3z"/></svg></span><span class="ow-tools__tool-name">pytest</span></li>
						</ul>
					</article>
				</div>
			</section>
		<?php else : ?>
			<section class="band band--alt">
				<div class="wrap">
					<?php
					ow_flow_head(
						'06',
						'Tools on the engagement',
						isset( $p['ecoTitle'] ) ? $p['ecoTitle'] : '',
						isset( $p['ecoText'] ) ? $p['ecoText'] : null
					);
					ow_tool_pipeline( isset( $p['tools'] ) ? $p['tools'] : array() );
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
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="ow-engagement" aria-labelledby="ow-engagement-title">
				<div class="ow-engagement__inner">
					<p class="ow-engagement__eyebrow">07 - HOW TO START</p>
					<h1 class="ow-engagement__title" id="ow-engagement-title">Engagement <span>options</span></h1>
					<div class="ow-engagement__cards">
						<article class="ow-engagement-card">
							<div class="ow-engagement-card__top">
								<div class="ow-engagement-card__icon" aria-hidden="true"><svg viewBox="0 0 64 64" fill="none"><circle cx="29" cy="35" r="23" stroke="currentColor" stroke-width="5"/><circle cx="29" cy="35" r="14" stroke="currentColor" stroke-width="5"/><circle cx="29" cy="35" r="5" fill="currentColor"/><path d="M29 35 54 10m-13 1 13-1-1 13" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
								<span class="ow-engagement-card__divider"></span>
								<p class="ow-engagement-card__stage">ESTABLISH</p>
							</div>
							<h2>Pilot Week</h2>
							<p class="ow-engagement-card__description">Draft and review coverage for one priority area in your tools before extending the scope.</p>
						</article>
						<article class="ow-engagement-card">
							<div class="ow-engagement-card__top">
								<div class="ow-engagement-card__icon ow-engagement-card__icon--layers" aria-hidden="true"><svg viewBox="0 0 64 64" fill="none"><path d="m32 5 25 13-25 13L7 18 32 5Z" stroke="currentColor" stroke-width="5" stroke-linejoin="round"/><path d="m8 31 24 13 24-13M8 43l24 13 24-13" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
								<span class="ow-engagement-card__divider"></span>
								<p class="ow-engagement-card__stage">BUILD</p>
							</div>
							<h2>Embedded case design</h2>
							<p class="ow-engagement-card__description">Engineers work inside your cadence to keep intake, review and approved coverage current as stories change.</p>
						</article>
						<article class="ow-engagement-card">
							<div class="ow-engagement-card__top">
								<div class="ow-engagement-card__icon ow-engagement-card__icon--gear" aria-hidden="true"><svg viewBox="0 0 64 64" fill="none"><path d="M26 5h12l2 7a22 22 0 0 1 5 2l6-3 8 9-4 6a22 22 0 0 1 1 6l5 5-5 11-7-1a22 22 0 0 1-5 3l-2 8H25l-2-8a22 22 0 0 1-5-3l-7 1-5-11 5-5a22 22 0 0 1 1-6l-4-6 8-9 6 3a22 22 0 0 1 5-2l2-7Z" stroke="currentColor" stroke-width="5" stroke-linejoin="round"/><circle cx="32" cy="32" r="9" stroke="currentColor" stroke-width="5"/></svg></div>
								<span class="ow-engagement-card__divider"></span>
								<p class="ow-engagement-card__stage">OPERATE</p>
							</div>
							<h2>Managed coverage design</h2>
							<p class="ow-engagement-card__description">Optimworks operates the agreed drafting and review. Your team keeps the suite and the release decision.</p>
						</article>
					</div>
				</div>
			</section>
		<?php else : ?>
			<section class="band">
				<div class="wrap">
					<?php
					ow_flow_head( '07', 'How to start', isset( $p['engageTitle'] ) ? $p['engageTitle'] : '' );
					ow_engage_cards( isset( $p['engage'] ) ? $p['engage'] : array() );
					?>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="ow-faq" aria-labelledby="ow-faq-title">
				<div class="ow-faq__layout">
					<div class="ow-faq__intro">
						<p class="ow-faq__eyebrow">08 – QUESTIONS BEFORE YOU BUY</p>
						<h1 class="ow-faq__title" id="ow-faq-title">Common <span>questions</span></h1>
						<div class="ow-faq__art" aria-hidden="true"></div>
					</div>
					<div class="ow-faq__list">
						<?php foreach ( ( isset( $p['faq'] ) ? $p['faq'] : array() ) as $index => $item ) : ?>
							<details class="ow-faq-item"<?php echo 0 === $index ? ' open' : ''; ?>>
								<summary>
									<span class="ow-faq-item__question"><?php echo esc_html( $item['q'] ); ?></span>
									<span class="ow-faq-item__toggle" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m5 14 7-7 7 7"/></svg></span>
								</summary>
								<?php if ( 0 === $index ) : ?>
									<div class="ow-faq-item__answer">No. AI accelerates the first draft. An experienced engineer reviews, edits or rejects every case<br class="desktop-break"> before approval.</div>
								<?php else : ?>
									<div class="ow-faq-item__answer"><?php echo esc_html( $item['a'] ); ?></div>
								<?php endif; ?>
							</details>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		<?php else : ?>
			<section class="band band--alt">
				<div class="wrap">
					<?php ow_flow_head( '08', 'Questions before you buy', isset( $p['faqTitle'] ) ? $p['faqTitle'] : '' ); ?>
					<?php ow_service_faq( isset( $p['faq'] ) ? $p['faq'] : array() ); ?>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( $is_aitc_page ) : ?>
			<section class="ow-pilot" aria-labelledby="ow-pilot-title">
				<img class="ow-pilot__architecture" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/optimworks-pilot-week-reference-facade.png' ); ?>" alt="" aria-hidden="true" />
				<div class="ow-pilot__inner">
					<div class="ow-pilot__copy">
						<p class="ow-pilot__eyebrow">09 – START WITH ONE AREA</p>
						<h2 class="ow-pilot__title" id="ow-pilot-title">Define a reviewed coverage <span>pilot.</span></h2>
						<p class="ow-pilot__description">Share the relevant stories, your existing suite, and your priority coverage gap. We will<br class="ow-pilot__desktop-break" /> propose a focused scope with clear review responsibilities and deliverables.</p>
					</div>
					<div class="ow-pilot__chevrons" aria-hidden="true">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/optimworks-pilot-week-reference-chevrons.png' ); ?>" alt="" />
					</div>
					<div class="ow-pilot__actions">
						<a class="ow-pilot__button" href="<?php echo esc_url( ow_home( $close_href ) ); ?>">
							<span>Start a Pilot Week</span>
							<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15M13 5l7 7-7 7" /></svg>
						</a>
						<a class="ow-pilot__secondary" href="<?php echo esc_url( ow_home( '/contact#form' ) ); ?>">Or discuss the current suite</a>
					</div>
				</div>
			</section>
		<?php else : ?>
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
		<?php endif; ?>
	</div>
	<?php
	ow_service_frame_end();
}

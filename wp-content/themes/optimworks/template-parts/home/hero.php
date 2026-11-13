<?php
/**
 * Hero section — IOR-QA stage with wire diagram hooks.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_inputs = array(
	array( 'color' => '#FF5A1F', 'bg' => 'rgba(255,90,31,.12)', 'icon' => 'i-monitor', 'name' => 'Core, Web & Mobile' ),
	array( 'color' => '#8E9193', 'bg' => 'rgba(142,145,147,.14)', 'icon' => 'i-cloud', 'name' => 'API, Cloud & Security' ),
	array( 'color' => '#707374', 'bg' => 'rgba(112,115,116,.16)', 'icon' => 'i-db', 'name' => 'Data & ETL Pipelines' ),
	array( 'color' => '#FF8A4C', 'bg' => 'rgba(255,138,76,.14)', 'icon' => 'i-bot', 'name' => 'Autonomous AI Agents' ),
	array( 'color' => '#FBBF24', 'bg' => 'rgba(251,191,36,.14)', 'icon' => 'i-brain', 'name' => 'LLM & GenAI Models' ),
);
?>
<section class="hero">
	<div class="wrap">
		<div class="hgrid">
			<div class="hcopy">
				<div class="pill hero-pill an d1">
					<span class="dot"></span>
					AI-Augmented One-Stop Solution for All QA Needs
				</div>

				<h1 class="an d2">
					AI-Augmented QA Testing Services Company
				</h1>
				<p class="hero-sub an d3">
					AI-augmented QA and AI engineering under one accountable team. From legacy core
					systems and global mobile estates to autonomous AI agents and production LLM models —
					validated end to end.
				</p>
				<div class="hero-ctas an d4">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-brand">
						Schedule an Enterprise Audit <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact#pilot' ) ); ?>" class="btn btn-ghost">
						Try Our Free Pilot Week
					</a>
				</div>
			</div>

			<div class="hvis an d3">
				<div class="ehead">
					<span class="elbl">Coverage</span>
					<span class="elbl">Validation</span>
					<span class="elbl">Assurance</span>
				</div>
				<div
					class="stage"
					data-hero-stage
					role="img"
					aria-label="IOR-QA Core Engine: core web and mobile, API cloud and security, data and ETL pipelines, autonomous AI agents and LLM models validated into a production ready release"
				>
					<svg class="wires" data-hero-svg aria-hidden="true"></svg>
					<div class="inputs" data-hero-inputs>
						<?php foreach ( $ow_inputs as $it ) : ?>
						<div class="icard" data-c="<?php echo esc_attr( $it['color'] ); ?>">
							<span class="ico" style="background: <?php echo esc_attr( $it['bg'] ); ?>">
								<svg aria-hidden="true" style="stroke: <?php echo esc_attr( $it['color'] ); ?>"><use href="#<?php echo esc_attr( $it['icon'] ); ?>"></use></svg>
							</span>
							<span class="nm"><?php echo esc_html( $it['name'] ); ?></span>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="core-col">
						<div class="core" data-hero-core>
							<span class="ring" style="animation-delay: 0s"></span>
							<span class="ring" style="animation-delay: 1.2s"></span>
							<span class="ring" style="animation-delay: 2.4s"></span>
							<span class="ttl">
								IOR-QA<span class="tm">™</span>
							</span>
							<span class="sub">Core Engine</span>
							<span class="ior">
								Innovative
								<br />
								Optimized · Reliable
							</span>
						</div>
					</div>
					<div class="out-col">
						<div class="shield" data-hero-shield>
							<div class="sico">
								<span class="glow"></span>
								<svg
									style="position: relative; width: 44px; height: 44px; stroke: var(--brand); fill: none; stroke-width: 1.4; stroke-linecap: round; stroke-linejoin: round"
									aria-hidden="true"
								>
									<use href="#i-shield"></use>
								</svg>
							</div>
							<p class="st">Production Ready</p>
							<p class="ss">Auditable · Traceable</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="#ai-loop" class="scroll-ind" aria-label="Scroll down">
		<span>Scroll</span>
		<svg viewBox="0 0 24 24" aria-hidden="true">
			<path d="M6 9l6 6 6-6" />
		</svg>
	</a>
</section>

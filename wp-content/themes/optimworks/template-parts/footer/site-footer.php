<?php
/**
 * Site footer (from Footer.tsx).
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_logo_dark  = get_template_directory_uri() . '/assets/logos/logo-dark-bg.png';
$ow_logo_light = get_template_directory_uri() . '/assets/logos/logo-light-bg.png';
$ow_linkedin   = 'https://www.linkedin.com/company/optimworks';

$ow_cols = array(
	array(
		'title' => 'Services',
		'icon'  => 'i-gear',
		'split' => 2,
		'links' => array(
			array( 'href' => '/services', 'label' => 'All QA services' ),
			array( 'href' => '/services/functional-regression-testing', 'label' => 'Functional testing' ),
			array( 'href' => '/services/test-automation-services', 'label' => 'Automation testing' ),
			array( 'href' => '/services/mobile-app-testing', 'label' => 'Mobile testing' ),
			array( 'href' => '/services/performance-load-testing', 'label' => 'Performance testing' ),
			array( 'href' => '/services/api-testing-services', 'label' => 'API testing' ),
			array( 'href' => '/services/security-penetration-testing', 'label' => 'Security testing' ),
			array( 'href' => '/services/accessibility-testing', 'label' => 'Accessibility testing' ),
			array( 'href' => '/services/agile-continuous-testing', 'label' => 'Agile testing' ),
			array( 'href' => '/services/ai-generated-code-validation', 'label' => 'AI code validation' ),
		),
	),
	array(
		'title' => 'Platform',
		'icon'  => 'i-bot',
		'links' => array(
			array( 'href' => '/accelerators', 'label' => 'AI Accelerators' ),
			array( 'href' => '/thetestro', 'label' => 'theTestRo' ),
			array( 'href' => '/testsbuddi', 'label' => 'TestsBuddi' ),
			array( 'href' => '/ai-managed-qa', 'label' => 'AI Managed QA' ),
			array( 'href' => '/how-we-work', 'label' => 'How we work' ),
		),
	),
	array(
		'title' => 'Company',
		'icon'  => 'i-bank',
		'links' => array(
			array( 'href' => '/about', 'label' => 'About' ),
			array( 'href' => '/industries', 'label' => 'Industries' ),
			array( 'href' => '/case-studies', 'label' => 'Case Studies' ),
			array( 'href' => '/insights', 'label' => 'Insights' ),
			array( 'href' => '/faq', 'label' => 'FAQ' ),
		),
	),
	array(
		'title'  => 'Contact',
		'icon'   => 'i-arrow',
		'social' => true,
		'links'  => array(
			array( 'href' => '/contact', 'label' => 'Request an Audit' ),
			array( 'href' => '/contact#pilot', 'label' => 'Pilot Week' ),
			array( 'href' => 'mailto:info@optimworks.com', 'label' => 'info@optimworks.com' ),
		),
	),
);

$ow_stats = array(
	array( '100+', 'clients' ),
	array( '20+', 'countries' ),
	array( '150+', 'projects' ),
	array( '95%', 'client satisfaction' ),
);

/**
 * Split a column the same way Footer.tsx lists() does.
 *
 * @param array $col Column config.
 * @return array<int, array<int, array<string, mixed>>>
 */
$ow_footer_lists = static function ( $col ) use ( $ow_linkedin ) {
	$links = $col['links'];
	if ( ! empty( $col['social'] ) ) {
		$links[] = array(
			'href'  => $ow_linkedin,
			'label' => 'LinkedIn',
			'soc'   => true,
		);
	}
	$split = isset( $col['split'] ) ? (int) $col['split'] : 1;
	if ( $split < 2 ) {
		return array( $links );
	}
	$per  = (int) ceil( count( $links ) / $split );
	$out  = array();
	for ( $i = 0; $i < $split; $i++ ) {
		$out[] = array_slice( $links, $i * $per, $per );
	}
	return $out;
};
?>
<footer class="ofx">
	<svg class="ofx-wave" viewBox="0 0 1440 320" preserveAspectRatio="none" aria-hidden="true">
		<?php for ( $ow_i = 0; $ow_i < 14; $ow_i++ ) : ?>
			<path d="M0 <?php echo (int) ( 150 + $ow_i * 4 ); ?> C 300 <?php echo (int) ( 330 + $ow_i * 3 ); ?>, 520 <?php echo (int) ( 120 + $ow_i * 2 ); ?>, 860 <?php echo (int) ( 250 - $ow_i * 2 ); ?> S 1300 <?php echo (int) ( 100 + $ow_i * 4 ); ?>, 1440 <?php echo (int) ( 130 + $ow_i * 3 ); ?>" />
		<?php endfor; ?>
	</svg>
	<div class="wrap">
		<div class="ofx-top">
			<div class="ofx-brand">
				<span class="flogo">
					<img class="lg-dark" src="<?php echo esc_url( $ow_logo_dark ); ?>" alt="Optimworks" />
					<img class="lg-light" src="<?php echo esc_url( $ow_logo_light ); ?>" alt="" aria-hidden="true" />
				</span>
				<p class="fdesc">
					IOR-QA™ means Innovative, Optimized and Reliable. Named engineers use governed
					automation to test releases and document the recommendation. Founded 2019, Madhapur,
					Hyderabad.
				</p>
			</div>
		</div>
		<div class="fgrid">
			<?php foreach ( $ow_cols as $ow_col ) : ?>
				<div class="fcol<?php echo ! empty( $ow_col['split'] ) ? ' fcol--split' : ''; ?>">
					<h5>
						<span class="ofx-ico"><?php echo ow_icon( $ow_col['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
						<?php echo esc_html( $ow_col['title'] ); ?>
					</h5>
					<div class="fsplit">
						<?php foreach ( $ow_footer_lists( $ow_col ) as $ow_list ) : ?>
							<ul>
								<?php foreach ( $ow_list as $ow_link ) : ?>
									<li>
										<a
											href="<?php echo esc_url( ( 0 === strpos( $ow_link['href'], 'mailto:' ) || 0 === strpos( $ow_link['href'], 'http' ) ) ? $ow_link['href'] : home_url( $ow_link['href'] ) ); ?>"
											<?php echo ! empty( $ow_link['soc'] ) ? 'target="_blank" rel="noreferrer"' : ''; ?>
										>
											<span><?php echo esc_html( $ow_link['label'] ); ?></span>
											<?php if ( ! empty( $ow_link['soc'] ) ) : ?>
												<?php echo ow_icon( 'i-in' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
											<?php else : ?>
												<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6l6 6-6 6" /></svg>
											<?php endif; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="fbot">
			<p class="fquote">
				<?php foreach ( $ow_stats as $ow_si => $ow_stat ) : ?>
					<span>
						<?php if ( $ow_si > 0 ) : ?>
							<i aria-hidden="true"> · </i>
						<?php endif; ?>
						<b><?php echo esc_html( $ow_stat[0] ); ?></b> <?php echo esc_html( $ow_stat[1] ); ?>
					</span>
				<?php endforeach; ?>
			</p>
			<nav class="ofx-legal" aria-label="Legal">
				<a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy</a>
				<a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>">Sitemap</a>
			</nav>
		</div>
		<div class="ofx-copy">
			<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Optimworks Technologies Pvt Ltd</span>
			<span style="font-family: 'JetBrains Mono', monospace">
				Innovative • Optimized • Reliable
			</span>
		</div>
	</div>
</footer>

<?php
/**
 * Site footer.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_footer_columns = array(
	array(
		'label' => 'Services',
		'links' => array(
			array( 'All QA Services', '/services' ),
			array( 'Functional Testing', '/services/functional-regression-testing' ),
			array( 'Automation Testing', '/services/test-automation-services' ),
			array( 'Mobile Testing', '/services/mobile-app-testing' ),
			array( 'Performance Testing', '/services/performance-load-testing' ),
			array( 'API Testing', '/services/api-testing-services' ),
			array( 'Security Testing', '/services/security-penetration-testing' ),
			array( 'Agile Testing', '/services/agile-continuous-testing' ),
			array( 'AI Code Validation', '/services/ai-generated-code-validation' ),
		),
	),
	array(
		'label' => 'Platform',
		'links' => array(
			array( 'AI Accelerators', '/accelerators' ),
			array( 'theTestRo', '/thetestro' ),
			array( 'TestsBudd(i)', '/testsbuddi' ),
			array( 'AI Managed QA', '/ai-managed-qa' ),
		),
	),
	array(
		'label' => 'Industries',
		'links' => array(
			array( 'All Industries', '/industries' ),
			array( 'Financial Services', '/industries/financial-services' ),
			array( 'Healthcare', '/industries/healthcare' ),
			array( 'eCommerce & Retail', '/industries/ecommerce-retail' ),
			array( 'Supply Chain', '/industries/supply-chain' ),
			array( 'Education', '/industries/education' ),
		),
	),
	array(
		'label' => 'Explore',
		'links' => array(
			array( 'About Us', '/about' ),
			array( 'How We Work', '/how-we-work' ),
			array( 'Case Studies', '/case-studies' ),
			array( 'Insights', '/insights' ),
			array( 'FAQ', '/faq' ),
			array( 'Contact Us', '/contact' ),
		),
	),
);
$ow_footer_waves = get_template_directory_uri() . '/assets/images/optimworks-footer-waves.svg';
$ow_footer_linkedin = 'https://www.linkedin.com/company/optimworks';
?>
<footer class="ow-footer">
	<div class="ow-footer__inner">
		<div class="ow-footer__columns">
			<?php foreach ( $ow_footer_columns as $ow_footer_column ) : ?>
				<nav class="ow-footer__column" aria-label="<?php echo esc_attr( $ow_footer_column['label'] ); ?>">
					<h2><?php echo esc_html( strtoupper( $ow_footer_column['label'] ) ); ?></h2>
					<ul>
						<?php foreach ( $ow_footer_column['links'] as $ow_footer_link ) : ?>
							<li><a href="<?php echo esc_url( home_url( $ow_footer_link[1] ) ); ?>"><?php echo esc_html( $ow_footer_link[0] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			<?php endforeach; ?>

			<div class="ow-footer__column ow-footer__contact">
				<h2>CONTACT</h2>
				<address>1st Floor, Jain Sadguru Image's Capital Park<br />Unit-106B, Madhapur, Hyderabad<br />Telangana 500081, India</address>
				<a class="ow-footer__contact-link" href="mailto:info@optimworks.com">
					<svg viewBox="0 0 18 18" aria-hidden="true"><rect x="2.3" y="4" width="13.4" height="10" rx=".5" /><path d="m3 5 6 4.8L15 5" /></svg>
					<span>info@optimworks.com</span>
				</a>
				<a class="ow-footer__contact-link" href="<?php echo esc_url( home_url( '/contact#form' ) ); ?>">
					<svg viewBox="0 0 18 18" aria-hidden="true"><path d="M10 3h5v5M15 3 8 10" /><path d="M14 10v4.5H3.5V4H8" /></svg>
					<span>Request an Audit</span>
				</a>
				<a class="ow-footer__contact-link" href="<?php echo esc_url( home_url( '/contact#pilot' ) ); ?>">
					<svg viewBox="0 0 18 18" aria-hidden="true"><rect x="3" y="4" width="12" height="11" rx=".7" /><path d="M6 2.5v3M12 2.5v3M3 7h12" /></svg>
					<span>Pilot Week</span>
				</a>
			</div>
		</div>

		<div class="ow-footer__brand-row">
			<a class="ow-footer__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Optimworks home">
				<span class="ow-footer__mark" aria-hidden="true"><i></i><i></i></span>
				<span>Optimworks</span>
			</a>
			<span class="ow-footer__brand-divider" aria-hidden="true"></span>
			<p class="ow-footer__tagline">Software Testing &amp; Quality Engineering<br />for Modern Enterprises.</p>
			<div class="ow-footer__social">
				<span>Follow us on</span>
				<a href="<?php echo esc_url( $ow_footer_linkedin ); ?>" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
					<svg viewBox="0 0 20 20" aria-hidden="true"><rect x="2.2" y="2.2" width="15.6" height="15.6" rx="1.8" /><path d="M6 8.2v5.5M6 5.7v.1M9.2 13.7V8.2h2.1v.9c.5-.8 1.2-1.1 2-1.1 1.6 0 2.5 1 2.5 2.9v2.8" /></svg>
				</a>
			</div>
		</div>

		<div class="ow-footer__legal-row">
			<p>© 2026 Optimworks Technologies Pvt Ltd. All rights reserved.</p>
			<nav aria-label="Legal">
				<a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy Policy</a>
				<span aria-hidden="true"></span>
				<a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>">Sitemap</a>
			</nav>
		</div>
	</div>
	<img class="ow-footer__waves" src="<?php echo esc_url( $ow_footer_waves ); ?>" alt="" aria-hidden="true" />
</footer>

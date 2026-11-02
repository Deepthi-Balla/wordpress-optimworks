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
?>
<footer>
	<div class="wrap">
		<div class="fgrid">
			<div>
				<span class="flogo">
					<img class="lg-dark" src="<?php echo esc_url( $ow_logo_dark ); ?>" alt="Optimworks" />
					<img class="lg-light" src="<?php echo esc_url( $ow_logo_light ); ?>" alt="" aria-hidden="true" />
				</span>
				<p class="fdesc">
					IOR-QA™ means Innovative, Optimized and Reliable. Named engineers use governed
					automation to test releases and document the recommendation. Founded 2019, Madhapur,
					Hyderabad.
				</p>
				<div class="fsoc">
					<a
						href="https://www.linkedin.com/company/optimworks"
						aria-label="LinkedIn"
						target="_blank"
						rel="noreferrer"
					>
						<svg aria-hidden="true"><use href="#i-in"></use></svg>
					</a>
				</div>
			</div>
			<div class="fcol">
				<h5>Services</h5>
				<a href="<?php echo esc_url( home_url( '/services' ) ); ?>">All QA services</a>
				<a href="<?php echo esc_url( home_url( '/services/functional-regression-testing' ) ); ?>">Functional testing</a>
				<a href="<?php echo esc_url( home_url( '/services/test-automation-services' ) ); ?>">Automation testing</a>
				<a href="<?php echo esc_url( home_url( '/services/mobile-app-testing' ) ); ?>">Mobile testing</a>
				<a href="<?php echo esc_url( home_url( '/services/performance-load-testing' ) ); ?>">Performance testing</a>
				<a href="<?php echo esc_url( home_url( '/services/api-testing-services' ) ); ?>">API testing</a>
				<a href="<?php echo esc_url( home_url( '/services/security-penetration-testing' ) ); ?>">Security testing</a>
				<a href="<?php echo esc_url( home_url( '/services/accessibility-testing' ) ); ?>">Accessibility testing</a>
				<a href="<?php echo esc_url( home_url( '/services/agile-continuous-testing' ) ); ?>">Agile testing</a>
				<a href="<?php echo esc_url( home_url( '/services/ai-generated-code-validation' ) ); ?>">AI code validation</a>
				<a href="<?php echo esc_url( home_url( '/ai-managed-qa' ) ); ?>">AI Managed QA</a>
			</div>
			<div class="fcol">
				<h5>Platform</h5>
				<a href="<?php echo esc_url( home_url( '/accelerators' ) ); ?>">AI Accelerators</a>
				<a href="<?php echo esc_url( home_url( '/thetestro' ) ); ?>">theTestRo</a>
				<a href="<?php echo esc_url( home_url( '/testsbuddi' ) ); ?>">TestsBuddi</a>
				<a href="<?php echo esc_url( home_url( '/how-we-work' ) ); ?>">How we work</a>
			</div>
			<div class="fcol">
				<h5>Company</h5>
				<a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a>
				<a href="<?php echo esc_url( home_url( '/industries' ) ); ?>">Industries</a>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>">Case Studies</a>
				<a href="<?php echo esc_url( home_url( '/insights' ) ); ?>">Insights</a>
				<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a>
				<a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>">Sitemap</a>
			</div>
			<div class="fcol">
				<h5>Contact</h5>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Request an Audit</a>
				<a href="<?php echo esc_url( home_url( '/contact#pilot' ) ); ?>">Pilot Week</a>
				<a href="mailto:info@optimworks.com">info@optimworks.com</a>
				<a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy</a>
			</div>
		</div>
		<p class="fquote">
			100+ clients · 20+ countries · 150+ projects · 95% client satisfaction
		</p>
		<div class="fbot">
			<span>© 2026 Optimworks Technologies Pvt Ltd</span>
			<span style="font-family: 'JetBrains Mono', monospace">
				Innovative • Optimized • Reliable
			</span>
		</div>
	</div>
</footer>

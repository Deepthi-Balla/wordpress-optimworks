<?php
/**
 * Industries section — sector tiles plus CTA.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<section class="band" id="industries">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="eyebrow">Industries</span>
			<h2>Where we&rsquo;ve earned the track record.</h2>
			<p>
				Domain context is half of good testing. These are the sectors our engineers already know
				the failure modes of.
			</p>
		</div>
		<div class="indwall stag reveal">
			<article class="indtile">
				<span class="indnum">01</span>
				<div class="indico">
					<svg aria-hidden="true"><use href="#i-bank"></use></svg>
				</div>
				<h3>Financial Services</h3>
				<p>Payments, wealth platforms and trading flows where a defect is a regulatory event.</p>
				<div class="indtags">
					<span>Payments</span>
					<span>Wealth</span>
					<span>Compliance</span>
				</div>
			</article>
			<article class="indtile">
				<span class="indnum">02</span>
				<div class="indico">
					<svg aria-hidden="true"><use href="#i-pulse"></use></svg>
				</div>
				<h3>Healthcare</h3>
				<p>Clinical and e-prescribing systems tested against privacy and patient-safety constraints.</p>
				<div class="indtags">
					<span>HIPAA</span>
					<span>EHR</span>
					<span>e-Prescribing</span>
				</div>
			</article>
			<article class="indtile">
				<span class="indnum">03</span>
				<div class="indico">
					<svg aria-hidden="true"><use href="#i-cart"></use></svg>
				</div>
				<h3>eCommerce &amp; Retail</h3>
				<p>Checkout, catalog and peak-load journeys that hold up on the busiest day of the year.</p>
				<div class="indtags">
					<span>Checkout</span>
					<span>Peak load</span>
					<span>Omnichannel</span>
				</div>
			</article>
			<article class="indtile">
				<span class="indnum">04</span>
				<div class="indico">
					<svg aria-hidden="true"><use href="#i-truck"></use></svg>
				</div>
				<h3>Supply Chain</h3>
				<p>Order, warehouse and logistics integrations across systems that were never designed together.</p>
				<div class="indtags">
					<span>WMS</span>
					<span>EDI</span>
					<span>Integrations</span>
				</div>
			</article>
			<article class="indtile">
				<span class="indnum">05</span>
				<div class="indico">
					<svg aria-hidden="true"><use href="#i-book"></use></svg>
				</div>
				<h3>Education</h3>
				<p>Learning platforms and alumni networks tested for scale, accessibility and data integrity.</p>
				<div class="indtags">
					<span>LMS</span>
					<span>Accessibility</span>
					<span>Scale</span>
				</div>
			</article>
			<article class="indtile indtile--cta">
				<h3>Not on the list?</h3>
				<p>
					We&rsquo;ve tested regulated, real-time and data-heavy systems outside these five. Tell
					us what you ship.
				</p>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="learn">
					Talk to an engineer <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</article>
		</div>
	</div>
</section>

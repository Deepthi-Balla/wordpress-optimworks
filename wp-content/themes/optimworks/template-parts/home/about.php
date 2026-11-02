<?php
/**
 * About section — who we are, office, IOR pillars, trust badges.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$ow_office = get_template_directory_uri() . '/assets/images/office.jpg';
?>
<section class="band band--alt" id="about">
	<div class="wrap about">
		<div class="reveal">
			<span class="eyebrow">Who we are</span>
			<h2 style="margin-bottom: 18px">Quality engineering, accountable end to end.</h2>
			<p class="lede">
				Most engineering teams are already experimenting with AI in their testing. Far fewer
				have made it a production practice they can sign off. That gap is what Optimworks exists
				to close.
			</p>
			<p class="lede">
				One accountable partner across your core platforms, your data pipelines and the AI
				features you&rsquo;re putting in front of customers — Innovative, Optimized &amp;
				Reliable.
			</p>
			<div class="principle">
				<p>
					<strong>AI accelerates the work. It doesn&rsquo;t own the risk.</strong> Test design,
					coverage and repetitive execution move faster with AI. The judgment calls that decide
					whether a release is actually safe still sit with an experienced engineer you can hold
					accountable for them.
				</p>
			</div>
			<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="learn">
				Learn more about us <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
			</a>
		</div>
		<div class="reveal">
			<div class="office-frame">
				<img
					src="<?php echo esc_url( $ow_office ); ?>"
					alt="Optimworks Technologies office at Capital Park, Madhapur, Hyderabad"
					loading="lazy"
				/>
				<div class="office-tag">
					<span class="eyebrow">Headquarters</span>
					<p>Capital Park, Madhapur, Hyderabad</p>
				</div>
			</div>
			<div class="ior-compact">
				<div class="ior-pill">
					<span class="iorL">I</span>
					<div>
						<b>Innovative</b>
						<p>AI-native services and deterministic tools, not table-stakes messaging.</p>
					</div>
				</div>
				<div class="ior-pill">
					<span class="iorL">O</span>
					<div>
						<b>Optimized</b>
						<p>Risk-based coverage so effort lands where defects actually escape.</p>
					</div>
				</div>
				<div class="ior-pill">
					<span class="iorL">R</span>
					<div>
						<b>Reliable</b>
						<p>
							Experienced engineer sign-off behind every release — not just a green pass rate.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap" style="margin-top: 52px">
		<div class="badges stag reveal">
			<div class="badge">
				<div class="bmark" style="background: #EE3B24">C</div>
				<div>
					<b>4.5/5</b>
					<div class="stars">★★★★★</div>
					<span>Clutch</span>
				</div>
			</div>
			<div class="badge">
				<div class="bmark" style="background: #4285F4">G</div>
				<div>
					<b>4.8/5</b>
					<div class="stars">★★★★★</div>
					<span>Google Reviews</span>
				</div>
			</div>
			<div class="badge">
				<div class="bmark" style="background: #0CAA41">g</div>
				<div>
					<b>4.6/5</b>
					<div class="stars">★★★★★</div>
					<span>Glassdoor</span>
				</div>
			</div>
			<div class="badge">
				<div class="bmark" style="background: var(--slate)">
					<svg
						style="width: 18px; height: 18px; stroke: #fff; fill: none; stroke-width: 1.8"
						aria-hidden="true"
					>
						<use href="#i-shield"></use>
					</svg>
				</div>
				<div>
					<b>ISTQB</b>
					<span>Certified Engineers</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
/*
Template Name: About
*/
/**
 * About page template.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ow_logos_uri = get_template_directory_uri() . '/assets/logos';
$ow_images    = get_template_directory_uri() . '/assets/images';
$ow_office    = $ow_images . '/office.jpg';
$ow_linkedin  = 'https://www.linkedin.com/company/optimworks';

$ow_leaders = array(
	array(
		'name'     => 'Vikas Reddy Voladri',
		'role'     => 'Co-founder & CEO',
		'tag'      => 'Founder',
		'bio'      => 'Started Optimworks in 2019 and works directly with clients on scoping, test strategy and release decisions.',
		'photo'    => 'lead-founder-1.jpg',
		'linkedin' => $ow_linkedin,
	),
	array(
		'name'     => 'Suresh Salloju',
		'role'     => 'Co-founder & CTO',
		'tag'      => 'Founder',
		'bio'      => 'Leads the engineering side of delivery — automation frameworks, accelerators and the technical approach behind each engagement.',
		'photo'    => 'lead-founder-2.jpg',
		'linkedin' => $ow_linkedin,
	),
	array(
		'name'     => 'Ananya Rao',
		'role'     => 'Head of Sales',
		'tag'      => 'Leadership',
		'bio'      => 'First point of contact for new clients. Handles enquiries, scoping calls and the commercial side of engagements.',
		'photo'    => 'lead-sales.jpg',
		'linkedin' => $ow_linkedin,
	),
	array(
		'name'     => 'Priyanka Nair',
		'role'     => 'Head of Human Resources',
		'tag'      => 'Leadership',
		'bio'      => 'Runs hiring, onboarding and people practices for the Hyderabad team, and keeps the culture engineer-led as the company grows.',
		'photo'    => 'lead-hr.jpg',
		'linkedin' => $ow_linkedin,
	),
);

$ow_client_logos = array(
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

get_header();
?>
<main>
	<!-- HERO -->
	<section class="pagehero">
		<div class="wrap">
			<nav class="crumb" aria-label="Breadcrumb" style="margin-bottom: 32px;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span style="margin: 0 8px; opacity: 0.35;">/</span>
				<span>About</span>
			</nav>
			<div class="ah-badge an d1">
				<span class="eyebrow">Founded 2019, Madhapur, Hyderabad</span>
			</div>
			<h1 class="an d2">
				Quality engineering for software teams with complex release risk.
			</h1>
			<p class="lede an d3">
				Optimworks helps teams test customer journeys, APIs, data, performance, security and
				AI enabled products. Our engineers work with your delivery process and provide clear
				evidence for release decisions.
			</p>
			<div class="hero-ctas an d4" style="margin-top: 32px;">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-brand">
					Talk to an engineer <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
				<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-ghost">
					See the services
				</a>
			</div>
		</div>
	</section>

	<!-- COMPANY STORY -->
	<section class="band band--alt" id="story">
		<div class="wrap">
			<div class="about-story stag reveal">
				<div>
					<span class="eyebrow">Who we are</span>
					<h2>Founded by engineers. Still run that way.</h2>
					<p>
						Optimworks was founded in 2019 in Madhapur, Hyderabad. We provide software testing
						and quality engineering services to clients across more than 20 countries.
					</p>
					<p>
						Engagements are shaped around the product, release cadence and risks that matter
						to the client. Work can include strategy, hands on testing, automation and ongoing
						quality support.
					</p>
					<p>
						Our scope also covers AI generated code, LLM applications and autonomous agents.
						These services sit alongside established functional, API, data, performance,
						security and accessibility testing.
					</p>
				</div>
				<div class="story-facts">
					<div class="sfact">
						<span class="sf-num">2019</span>
						<span class="sf-lbl">Founded in Madhapur, Hyderabad</span>
					</div>
					<div class="sfact">
						<span class="sf-num">100+</span>
						<span class="sf-lbl">Clients served</span>
					</div>
					<div class="sfact">
						<span class="sf-num">20+</span>
						<span class="sf-lbl">Countries served</span>
					</div>
					<div class="sfact">
						<span class="sf-num">150+</span>
						<span class="sf-lbl">Projects delivered</span>
					</div>
					<div class="sfact">
						<span class="sf-num">95%</span>
						<span class="sf-lbl">Client satisfaction</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- LEADERSHIP -->
	<section class="band" id="leadership">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">Leadership</span>
				<h2>The people behind the work.</h2>
				<p>
					Optimworks is led by its founders, with sales and people functions running
					alongside delivery.
				</p>
			</div>
			<div class="lead-grid stag reveal">
				<?php foreach ( $ow_leaders as $leader ) : ?>
				<article class="lead-card">
					<div class="lead-photo">
						<img
							src="<?php echo esc_url( $ow_images . '/' . $leader['photo'] ); ?>"
							alt="<?php echo esc_attr( $leader['name'] . ', ' . $leader['role'] . ' at Optimworks' ); ?>"
							loading="lazy"
							width="768"
							height="960"
						/>
						<span class="lead-tag"><?php echo esc_html( $leader['tag'] ); ?></span>
					</div>
					<div class="lead-body">
						<h3><?php echo esc_html( $leader['name'] ); ?></h3>
						<span class="lead-role"><?php echo esc_html( $leader['role'] ); ?></span>
						<p><?php echo esc_html( $leader['bio'] ); ?></p>
						<a
							class="lead-in"
							href="<?php echo esc_url( $leader['linkedin'] ); ?>"
							target="_blank"
							rel="noopener noreferrer"
						>
							<svg aria-hidden="true"><use href="#i-in"></use></svg> LinkedIn profile
						</a>
					</div>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- IOR VALUES -->
	<section class="band band--alt" id="values">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">IOR-QA™</span>
				<h2>Innovative, Optimized and Reliable.</h2>
				<p>
					These principles guide how we plan work, use technology and communicate evidence.
				</p>
			</div>
			<div class="ior-cards stag reveal">
				<div class="ior-card">
					<div class="ior-card-letter">I</div>
					<h3>Innovative</h3>
					<p>
						We adapt testing to new delivery risks, including AI authored code, LLM features
						and agents that act across connected systems.
					</p>
					<p>
						Our in house accelerators support test design and automation while engineers
						remain responsible for review and judgement.
					</p>
				</div>
				<div class="ior-card">
					<div class="ior-card-letter">O</div>
					<h3>Optimized</h3>
					<p>
						Test effort follows product risk, release priorities and the value of timely
						feedback. Automation is used where repeatable checks support the delivery cycle.
					</p>
					<p>
						Findings are reported with enough context for product and engineering teams to
						make informed decisions.
					</p>
				</div>
				<div class="ior-card">
					<div class="ior-card-letter">R</div>
					<h3>Reliable</h3>
					<p>
						Reliable testing depends on traceable evidence, clear defect reporting and
						consistent review.
					</p>
					<p>
						The same standard applies to manual testing, automated checks and AI features
						where plausible output can still be incorrect.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- RECOGNITION -->
	<section class="band" id="recognition">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">Public ratings</span>
				<h2>What third parties show.</h2>
				<p>Current public ratings provide another view of the company and its work.</p>
			</div>
			<div class="badges stag reveal">
				<div class="badge">
					<div class="bmark" style="background: #EE3B24;">
						C
					</div>
					<div>
						<b>4.5/5</b>
						<div class="stars">★★★★★</div>
						<span>Clutch, verified</span>
					</div>
				</div>
				<div class="badge">
					<div class="bmark" style="background: #4285F4;">
						G
					</div>
					<div>
						<b>4.8/5</b>
						<div class="stars">★★★★★</div>
						<span>Google Reviews, verified</span>
					</div>
				</div>
				<div class="badge">
					<div class="bmark" style="background: #0CAA41;">
						g
					</div>
					<div>
						<b>4.6/5</b>
						<div class="stars">★★★★★</div>
						<span>Glassdoor, verified</span>
					</div>
				</div>
				<div class="badge">
					<div class="bmark" style="background: var(--slate);">
						<svg aria-hidden="true" style="width: 18px; height: 18px; stroke: #fff; fill: none; stroke-width: 1.8;">
							<use href="#i-shield"></use>
						</svg>
					</div>
					<div>
						<b>ISTQB</b>
						<span>Certified Engineers</span>
					</div>
				</div>
			</div>

			<!-- Client logos marquee -->
			<div class="clog-band reveal" style="margin-top: 52px;">
				<div class="mqlbl" style="margin-bottom: 20px;">
					Engineering teams on the public client list
				</div>
				<div class="mq">
					<div class="mqt">
						<?php
						for ( $dup = 0; $dup < 2; $dup++ ) :
							foreach ( $ow_client_logos as $logo ) :
								?>
						<span class="clog">
							<img
								src="<?php echo esc_url( $ow_logos_uri . '/' . $logo['file'] ); ?>"
								alt="<?php echo esc_attr( $logo['name'] ); ?>"
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
		</div>
	</section>

	<!-- LOCATION -->
	<section class="band band--alt" id="location">
		<div class="wrap">
			<div class="loc-split reveal">
				<div>
					<span class="eyebrow">Where we work</span>
					<h2>Madhapur, Hyderabad.</h2>
					<p class="lede">
						Our headquarters are in Capital Park, Madhapur. We serve clients in more than 20
						countries.
					</p>
					<div class="loc-addr">
						<div class="loc-row">
							<svg aria-hidden="true"><use href="#i-tag"></use></svg>
							<div>
								<b>Office address</b>
								<span>
									1st Floor, Jain Sadguru Image's Capital Park
									<br />
									Unit-106B, Madhapur, Hyderabad
									<br />
									Telangana 500081, India
								</span>
							</div>
						</div>
						<div class="loc-row">
							<svg aria-hidden="true"><use href="#i-in"></use></svg>
							<div>
								<b>Contact us</b>
								<a href="mailto:info@optimworks.com">info@optimworks.com</a>
							</div>
						</div>
						<div class="loc-row">
							<svg aria-hidden="true"><use href="#i-globe"></use></svg>
							<div>
								<b>Global delivery</b>
								<span>Services delivered to clients in more than 20 countries</span>
							</div>
						</div>
					</div>
				</div>
				<a
					class="office-frame"
					href="https://www.google.com/maps/search/?api=1&amp;query=<?php echo rawurlencode( "1st Floor, Jain Sadguru Image's Capital Park, Unit-106B, Madhapur, Hyderabad, Telangana 500081, India" ); ?>"
					target="_blank"
					rel="noopener noreferrer"
					aria-label="Open Capital Park, Madhapur, Hyderabad in Google Maps"
				>
					<img
						src="<?php echo esc_url( $ow_office ); ?>"
						alt=""
						aria-hidden="true"
						loading="lazy"
					/>
					<div class="office-tag">
						<span class="eyebrow">Headquarters</span>
						<p>Capital Park, Madhapur, Hyderabad</p>
						<small>Unit-106B, 1st Floor, Telangana 500081</small>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="band band--alt2">
		<div class="wrap reveal">
			<div class="finale">
				<div>
					<h2>Talk to an engineer, not a sales queue.</h2>
					<p>
						Tell us about your product, release plans and current quality risks. We can then
						discuss an appropriate starting point.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-brand">
					Contact the team <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

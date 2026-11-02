<?php
/**
 * ProofAndQuotes section — client logo marquee and testimonials.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$ow_logos_uri = get_template_directory_uri() . '/assets/logos';

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

$ow_quotes = array(
	array(
		'logo' => 'finlink.png',
		'alt'  => 'Finlink',
		'text' => 'As a FinTech startup, we wanted to achieve the highest quality work. Working with Optimworks was one of the best decisions we made. They closely work with our on-site team and provide the highest quality of work across different modules via both manual and automation approaches.',
		'name' => 'Gernot Schusser',
		'role' => 'Co-Founder, Finlink',
	),
	array(
		'logo' => 'graduway.png',
		'alt'  => 'Graduway',
		'text' => 'Optimworks is a true expert in the world of automated testing. Their team\'s expertise in identifying what needs to be tested, and implementing a comprehensive test suite, is a big part of the reason that we can release often with confidence.',
		'name' => 'Antony Gelberg',
		'role' => 'CTO, Graduway',
	),
	array(
		'logo' => 'testmart.png',
		'alt'  => 'Testmart',
		'text' => 'Optimworks team has provided us with high-quality automation. Their work is of high quality and they have worked to ensure deadlines are met. Thankfully they are flexible with resource allocation, so they are able to support us when we need to quickly ramp up on a project.',
		'name' => 'Thomas Clyma',
		'role' => 'Co-Founder, The Testmart',
	),
	array(
		'logo' => 'commoncents.png',
		'alt'  => 'Commoncents',
		'text' => 'They are currently working on two products and their quality assurance work is superior to others we\'ve previously worked with. We are very pleased with their integration.',
		'name' => 'Sebastian Cwik',
		'role' => 'Founder, Commoncents',
	),
	array(
		'logo' => 'kbs.png',
		'alt'  => 'KBS',
		'text' => 'Optimworks has been providing excellent Quality Assurance services for most of our projects. We\'re very much impressed with their work in both manual and automation areas and looking forward to maintaining a long-term relationship with them.',
		'name' => 'Sreedhar Sivaraman',
		'role' => 'Director, KBS',
	),
);
?>
<section class="band" id="proof">
	<div class="wrap">
		<div class="mqlbl reveal">Trusted by engineering teams worldwide</div>
		<div class="mq reveal">
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
		<div class="qwrap reveal" data-quotes>
			<?php foreach ( $ow_quotes as $i => $q ) : ?>
			<div class="quote<?php echo 0 === $i ? ' on' : ''; ?>" data-quote="<?php echo esc_attr( (string) $i ); ?>">
				<div class="qstars">★★★★★</div>
				<p class="qtext">&ldquo;<?php echo esc_html( $q['text'] ); ?>&rdquo;</p>
				<div class="qfoot">
					<span class="qavatar">
						<img
							src="<?php echo esc_url( $ow_logos_uri . '/' . $q['logo'] ); ?>"
							alt="<?php echo esc_attr( $q['alt'] ); ?>"
							loading="lazy"
						/>
					</span>
					<span>
						<span class="qname"><?php echo esc_html( $q['name'] ); ?></span>
						<span class="qrole"><?php echo esc_html( $q['role'] ); ?></span>
					</span>
				</div>
			</div>
			<?php endforeach; ?>
			<div class="qdots">
				<?php foreach ( $ow_quotes as $i => $q ) : ?>
				<span
					class="qdot<?php echo 0 === $i ? ' on' : ''; ?>"
					role="button"
					tabindex="0"
					aria-label="<?php echo esc_attr( sprintf( 'Show testimonial %d', $i + 1 ) ); ?>"
					data-quote-dot="<?php echo esc_attr( (string) $i ); ?>"
				></span>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

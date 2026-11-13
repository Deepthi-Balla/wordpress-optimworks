<?php
/*
Template Name: How We Work
*/
/**
 * How We Work page template.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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

get_header();
?>
<main>
	<!-- HERO -->
	<section class="pagehero">
		<div class="wrap">
			<nav class="crumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span>/</span>
				<span>How We Work</span>
			</nav>
			<h1>QA Engagement Models: Pilot Week, Embedded Team or Managed QA</h1>
			<p class="lede">
				Choose a focused starting point, add quality engineering capacity to your delivery
				team or ask Optimworks to manage an agreed QA scope.
			</p>
			<div style="display: flex; gap: 16px; margin-top: 28px; flex-wrap: wrap;">
				<a href="#pilot" class="btn btn-brand">
					Start a free Pilot Week <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
				<a href="#paths" class="btn btn-ghost">
					See all three paths <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- CONTEXT -->
	<section class="band band--alt">
		<div class="wrap">
			<div
				class="callout reveal"
				style="max-width: 780px; margin: 0 auto; text-align: center; padding: 48px 32px; border-radius: 20px; background: var(--card); border: 1px solid var(--line-2); backdrop-filter: blur(12px);"
			>
				<span class="eyebrow" style="margin-bottom: 16px; display: block;">
					The structural gap
				</span>
				<p style="font-size: 19px; line-height: 1.72; color: var(--fg); font-weight: 500;">
					AI can assist with test design and automation. Product context, risk acceptance and
					release decisions still require accountable people.
				</p>
				<p style="margin-top: 18px; font-size: 15px; color: var(--muted);">
					We combine engineering judgement with appropriate automation and provide evidence
					that your team can review.
				</p>
			</div>
		</div>
	</section>

	<!-- THREE PATHS -->
	<section class="band" id="paths">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">Engagement model</span>
				<h2>Three shapes. One standard of work.</h2>
				<p>
					The right model depends on whether you need a short assessment, added delivery
					capacity or an ongoing managed function.
				</p>
			</div>
			<div
				style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;"
				class="reveal"
				id="pilot"
			>
				<div class="ctapath primary">
					<span class="eyebrow">01 Start here</span>
					<h3>Pilot Week</h3>
					<p>
						A focused week on an agreed area of your product, followed by a written summary of
						findings and recommended next steps.
					</p>
					<ul class="path-list">
						<li>Scope agreed before the week begins</li>
						<li>Functional, regression or automation focus</li>
						<li>Written summary of findings, risks and recommended next steps</li>
						<li>Outputs shared with your team</li>
					</ul>
					<div class="path-meta">
						<span class="ptag">Free</span>
						<span class="ptag">1 week</span>
					</div>
					<a
						href="<?php echo esc_url( home_url( '/contact#pilot' ) ); ?>"
						class="btn btn-brand"
						style="width: 100%; text-align: center; justify-content: center;"
					>
						Start a Pilot Week <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
					</a>
				</div>
				<div class="ctapath">
					<span class="eyebrow">02 Most ongoing work</span>
					<h3>Embedded Team</h3>
					<p>
						Engineers work within your delivery cadence, using the boards, repositories and
						pipelines agreed for the engagement.
					</p>
					<ul class="path-list">
						<li>Work planned with your product and engineering teams</li>
						<li>Scope and priorities agreed for each delivery cycle</li>
						<li>Testing and automation aligned with your existing stack</li>
						<li>Progress and risks reported through agreed channels</li>
					</ul>
					<div class="path-meta">
						<span class="ptag">Scoped</span>
						<span class="ptag">Ongoing</span>
						<span class="ptag">Rates on a call</span>
					</div>
					<a
						href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
						class="btn btn-ghost"
						style="width: 100%; text-align: center; justify-content: center;"
					>
						Discuss your stack <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
					</a>
				</div>
				<div class="ctapath">
					<span class="eyebrow">03 When QA needs an owner</span>
					<h3>Managed Quality Function</h3>
					<p>
						Optimworks manages an agreed QA scope, including planning, execution, reporting
						and recommendations for release stakeholders.
					</p>
					<ul class="path-list">
						<li>Defined responsibilities and governance</li>
						<li>Named contacts for delivery and escalation</li>
						<li>Coverage reviews, defect reporting and risk summaries</li>
						<li>Testing assets remain in agreed client systems</li>
					</ul>
					<div class="path-meta">
						<span class="ptag">Managed</span>
						<span class="ptag">Ongoing</span>
						<span class="ptag">Structure on a call</span>
					</div>
					<a
						href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
						class="btn btn-ghost"
						style="width: 100%; text-align: center; justify-content: center;"
					>
						See if this fits <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
					</a>
				</div>
			</div>
			<p
				class="reveal"
				style="text-align: center; margin-top: 18px; font-size: 14px; color: var(--muted);"
			>
				Scope, team shape and commercial terms are agreed after we understand your product and
				priorities.
			</p>
		</div>
	</section>

	<!-- FIRST WEEK -->
	<section class="band band--alt">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">What to expect</span>
				<h2>What the first week actually looks like.</h2>
				<p>
					The exact plan depends on access and scope. A typical start follows these stages.
				</p>
			</div>
			<div class="ftime reveal">
				<div class="fstep">
					<div class="fn">01</div>
					<h3>Confirm scope and access</h3>
					<p>
						Agree priorities, working arrangements and the product information needed for the
						selected scope.
					</p>
				</div>
				<div class="fstep">
					<div class="fn">02</div>
					<h3>Review the current position</h3>
					<p>
						Review available requirements, existing tests, recent defects and delivery
						constraints.
					</p>
				</div>
				<div class="fstep">
					<div class="fn">03</div>
					<h3>Complete the agreed work</h3>
					<p>
						Carry out the selected testing, assessment or automation activity and document the
						evidence.
					</p>
				</div>
				<div class="fstep">
					<div class="fn">04</div>
					<h3>Review findings together</h3>
					<p>
						Discuss coverage, open risks and practical next steps with the relevant
						stakeholders.
					</p>
				</div>
				<div class="fstep">
					<div class="fn">05</div>
					<h3>Choose what follows</h3>
					<p>
						Continue with an embedded or managed model if it fits, or use the findings within
						your own team.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- DELIVERY -->
	<section class="band">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">Working principles</span>
				<h2>How we fit into your delivery process.</h2>
				<p>Clear scope, usable evidence and practical collaboration.</p>
			</div>
			<div class="caps reveal" style="margin-top: 40px;">
				<div class="cap">
					<h4>Work within your cadence</h4>
					<p>Agree how engineers join planning, reviews and delivery activities.</p>
				</div>
				<div class="cap">
					<h4>Report useful evidence</h4>
					<p>Findings include enough context for engineering and product teams to act.</p>
				</div>
				<div class="cap">
					<h4>Use automation where it helps</h4>
					<p>
						Select tools and frameworks that suit the product, existing stack and ownership
						model.
					</p>
				</div>
				<div class="cap">
					<h4>Keep human review</h4>
					<p>
						Engineers review generated material and testing evidence before making a
						recommendation.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- CLIENT LOGOS -->
	<section class="band band--alt">
		<div class="wrap">
			<div class="clog-band reveal">
				<div class="mqlbl">Teams on the public logo wall</div>
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

	<!-- TRANSPARENCY -->
	<section class="band">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">On a call with us</span>
				<h2>A clear conversation about fit.</h2>
			</div>
			<div class="split reveal">
				<div class="split-card">
					<h3>What we will cover</h3>
					<ul>
						<li>The product areas and risks that need attention</li>
						<li>The responsibilities of each team</li>
						<li>The proposed scope, outputs and working cadence</li>
						<li>Commercial terms and assumptions</li>
					</ul>
				</div>
				<div class="split-card">
					<h3>What we need from you</h3>
					<ul>
						<li>Business critical journeys and current release concerns</li>
						<li>Relevant access, documentation and technical contacts</li>
						<li>Known constraints and important delivery dates</li>
						<li>A stakeholder who can review findings and priorities</li>
					</ul>
					<p style="margin-top: 20px;">
						<a class="learn" href="<?php echo esc_url( home_url( '/faq' ) ); ?>">
							Questions we hear on that first call <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
						</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- FINALE -->
	<section class="band band--alt2">
		<div class="wrap reveal">
			<div class="finale">
				<div>
					<h2>Start with a focused scope.</h2>
					<p>Tell us what you are shipping and where quality risk is creating uncertainty.</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/contact#pilot' ) ); ?>" class="btn btn-brand">
					Start a Pilot Week <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

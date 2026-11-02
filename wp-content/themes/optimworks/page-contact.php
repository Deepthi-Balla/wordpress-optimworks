<?php
/*
Template Name: Contact
*/
/**
 * Contact page template.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main>
	<!-- HERO -->
	<section class="pagehero">
		<div class="wrap">
			<nav class="crumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span>/</span>
				<span>Contact</span>
			</nav>
			<h1>Book an Enterprise Audit or a free Pilot Week.</h1>
			<p class="lede">
				Start with a structured review of your current quality position or a focused week on
				an agreed product area. Tell us what you are shipping, the risks you are managing and
				the support you need.
			</p>
			<div style="display: flex; flex-wrap: wrap; gap: 14px; margin-top: 32px;">
				<a href="#paths" class="btn btn-brand">
					View the two paths <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
				<a href="#form" class="btn btn-ghost">
					Go straight to the form
				</a>
			</div>
		</div>
	</section>

	<!-- TWO PATHS -->
	<section class="band" id="paths">
		<div class="wrap">
			<div class="ctagrid stag reveal">
				<div class="ctapath primary">
					<span class="eyebrow">Path one</span>
					<h3>Enterprise Audit</h3>
					<p>
						A structured review for teams evaluating coverage, automation and quality risks
						across their delivery process.
					</p>
					<ul class="path-list">
						<li>Written report on coverage gaps and automation debt</li>
						<li>Review of testing for AI generated code where relevant</li>
						<li>Prioritised recommendations aligned to your release cycle</li>
						<li>Delivered by ISTQB certified engineers</li>
					</ul>
					<div class="path-meta">
						<span class="path-tag">Typically 1 to 2 weeks</span>
						<span class="path-tag">Paid engagement</span>
					</div>
					<a class="btn btn-brand" href="#form">
						Request an audit <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
					</a>
				</div>
				<div class="ctapath" id="pilot">
					<span class="eyebrow">Path two</span>
					<h3>Pilot Week</h3>
					<p>
						A focused week on an agreed part of your product. The scope may cover a new
						feature, regression risk, automation or an AI component.
					</p>
					<ul class="path-list">
						<li>Testing activity agreed before the week begins</li>
						<li>Written summary of findings and identified gaps</li>
						<li>
							Your choice of focus: a new feature, a brittle automation suite or an AI
							component
						</li>
						<li>Recommended next steps for your team to consider</li>
					</ul>
					<div class="path-meta">
						<span class="path-tag hi">Free, no contract</span>
						<span class="path-tag">One calendar week</span>
					</div>
					<a class="btn btn-ghost" href="#form">
						Start Pilot Week <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- FORM -->
	<section class="band band--alt" id="form">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">Get in touch</span>
				<h2>Tell us what you need.</h2>
				<p>
					Select the closest starting point and share enough context for a useful first
					conversation. We use these details only to reply to this enquiry.
				</p>
			</div>
			<div class="contact-layout reveal">
				<form class="form" id="contact-form" action="#" method="post" novalidate>
					<div class="form-row">
						<div>
							<label for="name">Your name</label>
							<input
								id="name"
								name="name"
								type="text"
								placeholder="Alex Johnson"
								required
								autocomplete="name"
							/>
						</div>
						<div>
							<label for="email">Work email</label>
							<input
								id="email"
								name="email"
								type="email"
								placeholder="alex@company.com"
								required
								autocomplete="email"
							/>
						</div>
					</div>
					<div>
						<label for="company">Company name</label>
						<input
							id="company"
							name="company"
							type="text"
							placeholder="Acme Corp"
							required
							autocomplete="organization"
						/>
					</div>
					<div>
						<label for="path">Which path?</label>
						<select id="path" name="path">
							<option value="Enterprise Audit">
								Enterprise Audit: structured quality review
							</option>
							<option value="Pilot Week">Pilot Week: one week, free, on your systems</option>
							<option value="General enquiry">General enquiry: not sure yet</option>
						</select>
					</div>
					<div>
						<label for="message">What should we know?</label>
						<textarea
							id="message"
							name="message"
							required
							placeholder="Tell us about your technology, what is being shipped and the quality challenge you want to address."
						></textarea>
					</div>
					<button
						class="btn btn-brand"
						type="submit"
						id="contact-submit"
						style="width: 100%; justify-content: center;"
					>
						Send to the team <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
					</button>
					<p class="hint" id="contact-hint" data-status="idle">
						By sending this form you agree we may use the details to respond to your
						enquiry. See our <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">privacy notice</a>. You can also write
						directly to <a href="mailto:info@optimworks.com">info@optimworks.com</a>.
					</p>
				</form>
				<aside class="contact-sidebar">
					<div class="csb-box">
						<h5>What clients say</h5>
						<p class="csb-quote">
							"Optimworks is a true expert in the world of automated testing. Their team's
							expertise in identifying what needs to be tested, and implementing a
							comprehensive test suite, is a big part of the reason that we can release often
							with confidence."
						</p>
						<div class="csb-who">Antony Gelberg, CTO, Graduway</div>
					</div>
					<div class="csb-box">
						<h5>Verified ratings</h5>
						<div class="csb-badges">
							<div class="csb-badge">
								<span class="bmark" style="background: #EE3B24;">
									C
								</span>
								<div>
									<b>4.5/5</b>
									<div class="stars">★★★★★</div>
									<span>Clutch, verified</span>
								</div>
							</div>
							<div class="csb-badge">
								<span class="bmark" style="background: #4285F4;">
									G
								</span>
								<div>
									<b>4.8/5</b>
									<div class="stars">★★★★★</div>
									<span>Google Reviews</span>
								</div>
							</div>
							<div class="csb-badge">
								<span class="bmark" style="background: #0CAA41;">
									g
								</span>
								<div>
									<b>4.6/5</b>
									<div class="stars">★★★★★</div>
									<span>Glassdoor</span>
								</div>
							</div>
						</div>
					</div>
					<div class="csb-box">
						<h5>Direct contact</h5>
						<div class="csb-direct">
							<a href="mailto:info@optimworks.com" class="csb-link">
								<svg viewBox="0 0 24 24" aria-hidden="true">
									<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
									<polyline points="22,6 12,13 2,6" />
								</svg>
								info@optimworks.com
							</a>
							<a
								href="https://www.linkedin.com/company/optimworks"
								target="_blank"
								rel="noopener noreferrer"
								class="csb-link"
							>
								<svg aria-hidden="true"><use href="#i-in"></use></svg>
								linkedin.com/company/optimworks
							</a>
							<span class="csb-link" style="cursor: default;">
								<svg viewBox="0 0 24 24" aria-hidden="true">
									<path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7z" />
									<circle cx="12" cy="9" r="2.5" />
								</svg>
								Capital Park, Madhapur, Hyderabad
							</span>
						</div>
					</div>
				</aside>
			</div>

			<!-- NEXT STEPS -->
			<div class="next-steps stag reveal">
				<div class="nstep">
					<div class="ns-num">STEP 01</div>
					<h4>We review your enquiry</h4>
					<p>
						We review the product context, requested service and any delivery constraints you
						share.
					</p>
				</div>
				<div class="nstep">
					<div class="ns-num">STEP 02</div>
					<h4>An engineer responds</h4>
					<p>
						We involve an engineer in the initial discussion so technical questions and scope
						can be addressed early.
					</p>
				</div>
				<div class="nstep">
					<div class="ns-num">STEP 03</div>
					<h4>You choose the format</h4>
					<p>
						Continue by email, arrange a call or discuss the scope for an audit, Pilot Week or
						ongoing engagement.
					</p>
				</div>
			</div>
		</div>
	</section>
</main>
<script>
(function () {
	var form = document.getElementById('contact-form');
	var pathSelect = document.getElementById('path');
	var submitBtn = document.getElementById('contact-submit');
	var hint = document.getElementById('contact-hint');
	if (!form || !pathSelect || !submitBtn || !hint) return;

	var idleHint = hint.innerHTML;
	var status = 'idle';

	function setStatus(next, email) {
		status = next;
		submitBtn.disabled = status === 'sending' || status === 'sent';
		if (status === 'sending') {
			submitBtn.innerHTML = 'Sending <svg aria-hidden="true"><use href="#i-arrow"></use></svg>';
		} else {
			submitBtn.innerHTML = 'Send to the team <svg aria-hidden="true"><use href="#i-arrow"></use></svg>';
		}
		hint.setAttribute('data-status', status);
		if (status === 'sent') {
			hint.setAttribute('role', 'status');
			hint.textContent = 'Thank you. We have received your enquiry and will reply to ' + email + '.';
		} else if (status === 'mail') {
			hint.setAttribute('role', 'status');
			hint.innerHTML = 'Your message has been prepared. If your email client did not open, send it to <a href="mailto:info@optimworks.com">info@optimworks.com</a>.';
		} else {
			hint.removeAttribute('role');
			hint.innerHTML = idleHint;
		}
	}

	function applyPilotHash() {
		if (window.location.hash.replace('#', '') === 'pilot') {
			pathSelect.value = 'Pilot Week';
		}
	}
	applyPilotHash();
	window.addEventListener('hashchange', applyPilotHash);

	form.addEventListener('submit', function (e) {
		e.preventDefault();
		var name = (form.elements.namedItem('name') || {}).value || '';
		var email = (form.elements.namedItem('email') || {}).value || '';
		var company = (form.elements.namedItem('company') || {}).value || '';
		var path = pathSelect.value || 'Enterprise Audit';
		var message = (form.elements.namedItem('message') || {}).value || '';

		setStatus('sending', email);

		var composed =
			'Name: ' + name + '\n' +
			'Email: ' + email + '\n' +
			'Company: ' + company + '\n' +
			'Path: ' + path + '\n\n' +
			message;

		var subject = encodeURIComponent('[' + path + '] from ' + company);
		var body = encodeURIComponent(composed);
		window.location.href = 'mailto:info@optimworks.com?subject=' + subject + '&body=' + body;
		setStatus('mail', email);
	});
})();
</script>
<?php
get_footer();

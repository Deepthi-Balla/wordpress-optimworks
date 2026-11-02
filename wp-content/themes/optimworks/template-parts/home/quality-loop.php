<?php
/**
 * QualityLoop section — AI in the quality loop mission phases.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<section class="band qj" id="ai-loop">
	<div class="wrap">
		<div class="qj-head">
			<div class="reveal">
				<span class="eyebrow">AI in the quality loop</span>
				<h2 class="qj-title">
					Models accelerate.
					<br />
					<em>A person still signs.</em>
				</h2>
			</div>
			<div class="qj-aside reveal">
				<p>
					Six phases from raw requirement to signed release. Generation is machine work.
					Judgement, escalation and the signature stay with a named engineer.
				</p>
				<div class="qj-key">
					<span class="qj-k qj-tool"><i></i>AI tool</span>
					<span class="qj-k qj-human"><i></i>Human engineer</span>
					<span class="qj-k qj-ci"><i></i>Your CI</span>
				</div>
			</div>
		</div>

		<div class="qj-stage" data-launch-cycle data-duration="13000" data-hold="1600">
			<div class="qj-rail" aria-hidden="true">
				<span class="qj-fill" style="transform: scaleX(0)" data-progress="0"></span>
				<span class="qj-ticks">
					<i></i><i></i><i></i><i></i><i></i><i></i>
				</span>
				<span class="qj-rocket" style="left: 0%" data-lit="0">
					<span class="qj-thrust"></span>
					<svg viewBox="0 0 24 24" aria-hidden="true" class="qj-rocket-glyph">
						<path d="M12 2.5c2.9 2.3 4.4 5.5 4.4 9.1 0 2.6-.8 4.9-2.2 6.7h-4.4C8.4 16.5 7.6 14.2 7.6 11.6c0-3.6 1.5-6.8 4.4-9.1z" />
						<circle cx="12" cy="10.2" r="1.9" />
						<path d="M7.6 13.6 4.8 16.4v3l2.9-1.7M16.4 13.6l2.8 2.8v3l-2.9-1.7" />
						<path d="M10.4 18.3h3.2l-1.6 3.2z" />
					</svg>
				</span>
			</div>

			<ol class="qj-phases">
				<li class="qj-phase qj-tool" data-phase="0">
					<div class="qj-meta">
						<span class="qj-num">Phase 01</span>
						<span class="qj-tag">TestsBuddi</span>
					</div>
					<div class="qj-ico">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<path d="M12 2a7 7 0 0 1 7 7c0 2.6-1.4 4.9-3.5 6.2L15 17H9l-.5-1.8A7 7 0 0 1 12 2z" />
							<path d="M9 21h6M12 17v4" />
						</svg>
					</div>
					<h3>Understand</h3>
					<p>Requirements, tickets and existing suites are parsed into a risk model of the release.</p>
					<span class="qj-out"><i></i>Risk map</span>
				</li>
				<li class="qj-phase qj-tool" data-phase="1">
					<div class="qj-meta">
						<span class="qj-num">Phase 02</span>
						<span class="qj-tag">TestsBuddi</span>
					</div>
					<div class="qj-ico">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<rect x="3" y="11" width="18" height="10" rx="2" />
							<path d="M12 7v4M8 7a4 4 0 0 1 8 0" />
							<circle cx="9" cy="16" r="1.2" />
							<circle cx="15" cy="16" r="1.2" />
						</svg>
					</div>
					<h3>Generate</h3>
					<p>Candidate cases, data sets and edge conditions are drafted against that risk model.</p>
					<span class="qj-out"><i></i>Draft suite</span>
				</li>
				<li class="qj-phase qj-human" data-phase="2">
					<div class="qj-meta">
						<span class="qj-num">Phase 03</span>
						<span class="qj-tag">QA engineer</span>
					</div>
					<div class="qj-ico">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<circle cx="12" cy="8" r="4" />
							<path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
						</svg>
					</div>
					<h3>Review</h3>
					<p>An engineer keeps what holds, rewrites what is thin and deletes what is noise.</p>
					<span class="qj-out"><i></i>Approved suite</span>
				</li>
				<li class="qj-phase qj-tool" data-phase="3">
					<div class="qj-meta">
						<span class="qj-num">Phase 04</span>
						<span class="qj-tag">theTestRo</span>
					</div>
					<div class="qj-ico">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<circle cx="12" cy="12" r="3.2" />
							<path d="M12 4v2.4M12 17.6V20M4 12h2.4M17.6 12H20M6.3 6.3l1.7 1.7M16 16l1.7 1.7M17.7 6.3L16 8M8 16l-1.7 1.7" />
						</svg>
					</div>
					<h3>Automate</h3>
					<p>Approved cases become maintainable code in your framework, not a throwaway script pile.</p>
					<span class="qj-out"><i></i>Committed tests</span>
				</li>
				<li class="qj-phase qj-ci" data-phase="4">
					<div class="qj-meta">
						<span class="qj-num">Phase 05</span>
						<span class="qj-tag">Your pipeline</span>
					</div>
					<div class="qj-ico">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<rect x="2" y="3" width="20" height="14" rx="2" />
							<path d="M8 21h8M12 17v4" />
							<path d="M7 8l2 2-2 2M11 12h4" />
						</svg>
					</div>
					<h3>Run</h3>
					<p>Suites execute on every merge inside your CI, with triage that separates defect from flake.</p>
					<span class="qj-out"><i></i>Triaged results</span>
				</li>
				<li class="qj-phase qj-human" data-phase="5">
					<div class="qj-meta">
						<span class="qj-num">Phase 06</span>
						<span class="qj-tag">Named engineer</span>
					</div>
					<div class="qj-ico">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
							<path d="M9 12l2 2 4-4" />
						</svg>
					</div>
					<h3>Sign</h3>
					<p>A named engineer puts their name on the release note. Accountability never goes to a model.</p>
					<span class="qj-out"><i></i>Release sign-off</span>
				</li>
			</ol>

			<div class="qj-terminal on">
				<div class="qj-seal">
					<svg viewBox="0 0 24 24" aria-hidden="true">
						<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
						<path d="M9 12l2 2 4-4" />
					</svg>
				</div>
				<div>
					<strong>Release signed by a named engineer</strong>
					<p>
						Every phase leaves an artefact you can audit — risk map, approved suite, committed
						tests, triaged run, signature.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/ai-managed-qa' ) ); ?>" class="learn">
					See it as a managed service <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
		</div>
	</div>
</section>

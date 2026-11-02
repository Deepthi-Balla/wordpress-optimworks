<?php
/**
 * Services section — six service cards and featured spot.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<section class="band band--alt" id="services">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="eyebrow">Services</span>
			<h2>Built around how testing actually gets used.</h2>
			<p>
				From AI-native services to the core engineering work your releases depend on every
				sprint.
			</p>
		</div>
		<div class="sgrid stag reveal">
			<div class="scard">
				<span class="snum">01</span>
				<h3>AI-Powered QA</h3>
				<p>AI accelerates test design and prioritization while execution stays reliable and auditable.</p>
				<div class="chips">
					<span class="chip">Test Generation</span>
					<span class="chip">AI Assisted Automation</span>
					<span class="chip">Impact Analysis</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/services#ai-powered-qa' ) ); ?>" class="slink">
					Explore <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
			<div class="scard">
				<span class="snum">02</span>
				<h3>Testing AI Applications</h3>
				<p>Validating the AI and LLM features your own product ships with — and the AI-generated code your developers ship every day.</p>
				<div class="chips">
					<span class="chip">Generative AI</span>
					<span class="chip">AI Agents</span>
					<span class="chip">Code Validation</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/services#testing-ai-applications' ) ); ?>" class="slink">
					Explore <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
			<div class="scard">
				<span class="snum">03</span>
				<h3>Core QA Services</h3>
				<p>The dependable functional, automation and performance work every release depends on.</p>
				<div class="chips">
					<span class="chip">Functional</span>
					<span class="chip">Automation</span>
					<span class="chip">Performance</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/services#core-qa-services' ) ); ?>" class="slink">
					Explore <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
			<div class="scard">
				<span class="snum">04</span>
				<h3>Data &amp; AI Testing</h3>
				<p>Making sure the data behind your systems and models can be trusted.</p>
				<div class="chips">
					<span class="chip">Data Pipelines</span>
					<span class="chip">Data Management</span>
					<span class="chip">Model Quality</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/services#data-ai-testing' ) ); ?>" class="slink">
					Explore <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
			<div class="scard">
				<span class="snum">05</span>
				<h3>Specialized Testing</h3>
				<p>Deep coverage for real-time communication, IoT devices and blockchain.</p>
				<div class="chips">
					<span class="chip">Real-Time Comms</span>
					<span class="chip">IoT Devices</span>
					<span class="chip">Blockchain</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/services#specialized-testing' ) ); ?>" class="slink">
					Explore <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
			<div class="scard">
				<span class="snum">06</span>
				<h3>Advisory Services</h3>
				<p>Strategic guidance on QA maturity, AI adoption and automation centers of excellence.</p>
				<div class="chips">
					<span class="chip">Assessment</span>
					<span class="chip">Strategy</span>
					<span class="chip">Center of Excellence</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/services#advisory-services' ) ); ?>" class="slink">
					Explore <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
		</div>
		<a class="svc-spot reveal" href="<?php echo esc_url( home_url( '/services/functional-regression-testing' ) ); ?>">
			<span class="svc-spot-tag">New service page</span>
			<div>
				<b>Functional &amp; Regression Testing</b>
				<small>
					Regression guided by risk, cases drafted in TestsBuddi, suites reviewed by engineers
					and a named QA recommendation.
				</small>
			</div>
			<span class="svc-spot-go">
				Open page <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
			</span>
		</a>
		<div class="reveal" style="text-align: center; margin-top: 30px">
			<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-ghost">
				View All Services
			</a>
		</div>
	</div>
</section>

<?php
/**
 * Accelerators section — theTestRo and TestsBuddi.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<section class="band" id="accelerators">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="eyebrow">AI Accelerators</span>
			<h2>Two tools we built and use on every engagement.</h2>
			<p>Not licensed. Not white-labeled. Built in-house and proven on real client work.</p>
		</div>
		<div class="accel stag reveal">
			<a class="acard" href="<?php echo esc_url( home_url( '/thetestro' ) ); ?>">
				<div class="atop">
					<div class="aico">
						<svg aria-hidden="true"><use href="#i-gear"></use></svg>
					</div>
					<span class="atag">Self-healing automation</span>
				</div>
				<h3>theTestRo</h3>
				<p>
					No-code automation that adapts as your app changes. Deterministic, rules-based
					execution you can actually audit when something fails.
				</p>
				<div class="ameta">
					<span><b>No-code</b> setup</span>
					<span><b>Deterministic</b> execution</span>
				</div>
			</a>
			<a class="acard" href="<?php echo esc_url( home_url( '/testsbuddi' ) ); ?>">
				<div class="atop">
					<div class="aico">
						<svg aria-hidden="true"><use href="#i-bot"></use></svg>
					</div>
					<span class="atag">Governed QA platform</span>
				</div>
				<h3>TestsBuddi</h3>
				<p>
					Drafts from Jira, designs and the suite you already have. A person still approves.
					Plans, runs and a release signal live in the same system.
				</p>
				<div class="ameta">
					<span><b>Knowledge-backed</b> drafts</span>
					<span><b>Human-reviewed</b> output</span>
				</div>
			</a>
		</div>
	</div>
</section>

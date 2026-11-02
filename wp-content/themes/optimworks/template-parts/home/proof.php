<?php
/**
 * Proof section — anonymized case result cards.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<section class="band" id="case-nums">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="eyebrow">Proof in the work</span>
			<h2>Real results. Anonymized by client request.</h2>
			<p>
				Numbers from live engagements — the actual output of QA that stays embedded, not
				headcount that disappears when AI budgets shift.
			</p>
		</div>
		<div class="proof-grid stag reveal">
			<div class="proof-card">
				<div class="proof-num">300+</div>
				<div class="proof-label">Test cases automated, zero manual touchpoints</div>
				<p class="proof-desc">
					A fintech team running full regression on every build in Selenium and Playwright —
					inside a 6-week engagement that converted to a long-term embed.
				</p>
				<span class="proof-anon">Fintech &nbsp;·&nbsp; Active</span>
			</div>
			<div class="proof-card">
				<div class="proof-num">2,000+</div>
				<div class="proof-label">Test cases, regression cycle cut 3 weeks → 1</div>
				<p class="proof-desc">
					A SaaS platform with sprawling manual coverage. Full regression now runs in one week,
					automated and repeatable on every sprint.
				</p>
				<span class="proof-anon">SaaS &nbsp;·&nbsp; Completed</span>
			</div>
			<div class="proof-card">
				<div class="proof-num">500+</div>
				<div class="proof-label">Test cases across a 3-year sprint-embedded run</div>
				<p class="proof-desc">
					Selenium, Cucumber and Appium coverage built sprint by sprint. The team stayed through
					three product pivots and the suite followed.
				</p>
				<span class="proof-anon">Product co &nbsp;·&nbsp; 3 years</span>
			</div>
		</div>
		<div class="reveal" style="margin-top: 32px; text-align: center">
			<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="learn">
				Read the case studies <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
			</a>
		</div>
	</div>
</section>

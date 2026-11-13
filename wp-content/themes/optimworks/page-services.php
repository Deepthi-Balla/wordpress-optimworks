<?php
/*
Template Name: Services
*/
/**
 * Services hub page template.
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
				<span>Services</span>
			</nav>
			<h1>QA Testing Services for Complex Products, Releases &amp; AI Systems</h1>
			<p class="lede">
				Six specialist practices covering core software, APIs, performance, application
				security, data and AI systems. Each engagement has a clear scope, practical
				deliverables and an accountable QA owner.
			</p>
		</div>
	</section>

	<!-- PILLAR QUICK NAV -->
	<div class="wrap">
		<nav class="pillar-nav" aria-label="Jump to a service pillar">
			<a href="#ai-powered-qa">AI Powered QA</a>
			<a href="#testing-ai-applications">Testing AI Applications</a>
			<a href="#core-qa-services">Core QA Services</a>
			<a href="#data-ai-testing">Data &amp; AI Testing</a>
			<a href="#specialized-testing">Specialist Testing</a>
			<a href="#advisory-services">Advisory Services</a>
		</nav>
	</div>

	<!-- 01 · AI-POWERED QA -->
	<section class="pillar" id="ai-powered-qa">
		<div class="wrap">
			<div class="pillar-head reveal">
				<div>
					<div class="pillar-num">01</div>
					<h2>AI Powered QA</h2>
					<p>
						Use AI to support test design, prioritisation and maintenance while engineers
						review coverage and retain responsibility for release recommendations.
					</p>
				</div>
				<span class="pillar-powered">
					Powered by <b>TestsBuddi</b> &amp; <b>theTestRo</b>
				</span>
			</div>
			<div class="svc-grid stag reveal">
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/ai-assisted-test-case-generation' ) ); ?>">
					<h4>AI Assisted Test Case Generation</h4>
					<p>
						Draft test cases from Jira, requirements and existing coverage, then have a QA
						engineer review and approve them before use.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/ai-assisted-test-automation' ) ); ?>">
					<h4>AI Assisted Test Automation</h4>
					<p>
						Maintain automated checks when interfaces change, with deterministic repair rules
						and a reviewable record of each proposed update.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/predictive-risk-defect-intelligence' ) ); ?>">
					<h4>Predictive Risk &amp; Defect Intelligence</h4>
					<p>
						Use product and delivery context to focus testing effort on the areas with the
						greatest business and technical risk.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/visual-ai-ui-regression-testing' ) ); ?>">
					<h4>Visual AI / UI Regression Testing</h4>
					<p>
						Compare agreed screens with approved baselines and report meaningful visual
						changes for review.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/test-impact-analysis' ) ); ?>">
					<h4>Test Impact Analysis</h4>
					<p>
						Map code changes to relevant tests so teams can shorten feedback cycles while
						keeping deferred coverage visible.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/chaos-resilience-engineering' ) ); ?>">
					<h4>Chaos &amp; Resilience Engineering</h4>
					<p>
						Introduce agreed faults in controlled environments to assess recovery, resilience
						and operational response.
					</p>
				</a>
			</div>
		</div>
	</section>

	<!-- 02 · TESTING AI APPLICATIONS -->
	<section class="pillar" id="testing-ai-applications">
		<div class="wrap">
			<div class="pillar-head reveal">
				<div>
					<div class="pillar-num">02</div>
					<h2>Testing AI Applications</h2>
					<p>
						Assess AI and LLM features as well as AI authored code before release, with
						defined expectations, repeatable evidence and human review.
					</p>
				</div>
			</div>
			<div class="svc-grid stag reveal">
				<a class="svcitem new" href="<?php echo esc_url( home_url( '/services/ai-generated-code-validation' ) ); ?>">
					<span class="new-tag">Added</span>
					<h4>AI Generated Code Validation</h4>
					<p>
						Independent review of AI authored diffs for correctness, edge cases and security,
						before they merge.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/genai-llm-application-testing' ) ); ?>">
					<h4>GenAI &amp; LLM Application Testing</h4>
					<p>
						Assess output accuracy, grounding, consistency and safety with test records that
						your product and engineering teams can review.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/ai-agent-testing' ) ); ?>">
					<h4>AI Agent / Agentic Testing</h4>
					<p>
						Test multi step agent behaviour including tool access, task completion, loops,
						stopping conditions and escalation.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/prompt-hallucination-testing' ) ); ?>">
					<h4>Prompt &amp; Hallucination Testing</h4>
					<p>
						Use structured and adversarial prompts to identify unsupported, unsafe or
						inconsistent responses.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/conversational-ai-testing' ) ); ?>">
					<h4>Conversational AI Testing</h4>
					<p>
						Test chat and voice journeys across intents, multi turn conversations and
						escalation to a person.
					</p>
				</a>
			</div>
		</div>
	</section>

	<!-- 03 · CORE QA SERVICES -->
	<section class="pillar" id="core-qa-services">
		<div class="wrap">
			<div class="pillar-head reveal">
				<div>
					<div class="pillar-num">03</div>
					<h2>Core QA Services</h2>
					<p>
						Functional, automation, mobile, API, performance, application security,
						accessibility and continuous testing for day to day delivery.
					</p>
				</div>
			</div>
			<div class="svc-grid stag reveal">
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/functional-regression-testing' ) ); ?>">
					<h4>Functional &amp; Regression Testing</h4>
					<p>
						Validate journeys, business rules, permissions and regression risk, then provide
						traceable evidence for the release decision.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/test-automation-services' ) ); ?>">
					<h4>Automation Testing</h4>
					<p>
						Build maintainable frameworks and CI suites in your repository with clear
						documentation and ownership.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/mobile-app-testing' ) ); ?>">
					<h4>Mobile App Testing</h4>
					<p>Test iOS and Android journeys across an agreed device, OS and network matrix.</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/performance-load-testing' ) ); ?>">
					<h4>Performance &amp; Load Testing</h4>
					<p>
						Model expected demand and run load, stress and soak tests against agreed
						thresholds.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/api-testing-services' ) ); ?>">
					<h4>API Testing</h4>
					<p>
						Test contracts, authentication, negative paths and integrations at service
						boundaries.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/security-penetration-testing' ) ); ?>">
					<h4>Application Security Testing</h4>
					<p>
						Scoped application security testing of agreed surfaces, with reproducible findings
						and clear remediation priorities.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/accessibility-testing' ) ); ?>">
					<h4>Accessibility Testing (WCAG/ADA)</h4>
					<p>
						Assess agreed journeys with keyboard, screen reader and contrast checks against a
						named WCAG level.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/agile-continuous-testing' ) ); ?>">
					<h4>Agile &amp; Continuous Testing</h4>
					<p>
						Place risk based testing inside the sprint, with evidence in your delivery tools
						and a clear recommendation at the release gate.
					</p>
				</a>
			</div>
		</div>
	</section>

	<!-- 04 · DATA & AI TESTING -->
	<section class="pillar" id="data-ai-testing">
		<div class="wrap">
			<div class="pillar-head reveal">
				<div>
					<div class="pillar-num">04</div>
					<h2>Data &amp; AI Testing</h2>
					<p>
						Test data pipelines, model inputs and test data controls so teams can understand
						data quality and its effect on system behaviour.
					</p>
				</div>
			</div>
			<div class="svc-grid stag reveal">
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/etl-data-pipeline-testing' ) ); ?>">
					<h4>ETL &amp; Data Pipeline Testing</h4>
					<p>
						Validate batch and streaming data from source through transformation to a
						reconciled target.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/ai-model-data-quality-testing' ) ); ?>">
					<h4>AI Model &amp; Data Quality Testing</h4>
					<p>
						Assess training and inference data for quality, leakage, drift and documented
						coverage gaps.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/test-data-management' ) ); ?>">
					<h4>Test Data Management</h4>
					<p>
						Prepare masked, synthetic and subset data for realistic testing without exposing
						unnecessary production information.
					</p>
				</a>
			</div>
		</div>
	</section>

	<!-- 05 · SPECIALIZED TESTING -->
	<section class="pillar" id="specialized-testing">
		<div class="wrap">
			<div class="pillar-head reveal">
				<div>
					<div class="pillar-num">05</div>
					<h2>Specialist Testing</h2>
					<p>
						Specialist coverage for real time communications, connected devices and smart
						contracts where a standard web test plan is not sufficient.
					</p>
				</div>
			</div>
			<div class="svc-grid stag reveal">
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/realtime-communication-testing' ) ); ?>">
					<h4>Real Time Communication Testing</h4>
					<p>
						Test voice, video and messaging under loss, jitter, NAT and network handoff with
						usable diagnostic evidence.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/iot-device-testing' ) ); ?>">
					<h4>IoT Device Testing</h4>
					<p>
						Test firmware, connectivity, power, cloud services and mobile applications as one
						connected product.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/blockchain-smart-contract-testing' ) ); ?>">
					<h4>Blockchain &amp; Smart Contract Testing</h4>
					<p>
						Review invariants, permissions and agreed failure conditions before smart contract
						changes are deployed.
					</p>
				</a>
			</div>
		</div>
	</section>

	<!-- 06 · ADVISORY SERVICES -->
	<section class="pillar" id="advisory-services" style="border-bottom: none;">
		<div class="wrap">
			<div class="pillar-head reveal">
				<div>
					<div class="pillar-num">06</div>
					<h2>Advisory Services</h2>
					<p>
						Practical advice on QA maturity, responsible use of AI and automation practices
						that your team can operate.
					</p>
				</div>
			</div>
			<div class="svc-grid stag reveal">
				<a class="svcitem new" href="<?php echo esc_url( home_url( '/services/ai-qa-readiness-assessment' ) ); ?>">
					<span class="new-tag">Added</span>
					<h4>AI QA Readiness Assessment</h4>
					<p>
						A fixed scope review of your delivery process, identifying where AI can support QA
						work and where human review remains necessary.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/qa-strategy-advisory' ) ); ?>">
					<h4>QA Strategy Advisory</h4>
					<p>
						Define how testing fits your delivery lifecycle, including roles, controls,
						priorities and an operating model leaders can fund.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/ai-testing-strategy-consulting' ) ); ?>">
					<h4>AI Testing Strategy &amp; Consulting</h4>
					<p>
						Plan the use of AI in QA and the testing of AI products with defined priorities,
						controls and ownership.
					</p>
				</a>
				<a class="svcitem" href="<?php echo esc_url( home_url( '/services/test-automation-coe-setup' ) ); ?>">
					<h4>Test Automation CoE Setup</h4>
					<p>
						Establish standards, pipelines, working practices and internal ownership for a
						sustainable automation capability.
					</p>
				</a>
			</div>
			<div class="pillar-cta reveal">
				<a href="<?php echo esc_url( home_url( '/services/ai-qa-readiness-assessment' ) ); ?>">
					Start with a readiness assessment <svg aria-hidden="true"><use href="#i-arrow"></use></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- TOOLS & APPROACH -->
	<section class="band band--alt" id="stack-strip">
		<div class="wrap">
			<div class="sec-head reveal">
				<span class="eyebrow">Tools and approach</span>
				<h2>A practical delivery model.</h2>
				<p>The process, controls and tools used on an engagement.</p>
			</div>
			<div class="caps reveal">
				<div class="cap">
					<h4>Understand</h4>
					<p>Stories, risks and the suite you already have.</p>
				</div>
				<div class="cap">
					<h4>Review</h4>
					<p>An experienced engineer reviews proposed coverage and approves changes.</p>
				</div>
				<div class="cap">
					<h4>Automate</h4>
					<p>
						Use suitable frameworks and maintain a reviewable record of automation changes.
					</p>
				</div>
				<div class="cap">
					<h4>Sign</h4>
					<p>
						Provide CI evidence, unresolved risks and a clear owner for the recommendation.
					</p>
				</div>
			</div>

			<!-- Client logos -->
			<div class="clog-band reveal" style="margin-top: 52px;">
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

	<!-- FINALE -->
	<section class="band band--alt2">
		<div class="wrap reveal">
			<div class="finale">
				<div>
					<h2>One week on your systems. No invoice.</h2>
					<p>
						One experienced engineer. Real test work in your tools. A written readout at the
						end. Yours to keep either way.
					</p>
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

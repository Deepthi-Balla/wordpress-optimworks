<?php
/**
 * On-page SEO data from analyst sheet (keywords, H1, meta title, meta description).
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * SEO records keyed by page slug (front page uses 'home').
 *
 * @return array<string,array{h1:string,meta_title:string,meta_description:string,keywords:array<int,string>}>
 */
function ow_seo_data() {
	static $data = null;
	if ( null !== $data ) {
		return $data;
	}

	$data = array(
		'home' => array(
			'h1'               => 'AI-Augmented QA Testing Services Company',
			'meta_title'       => 'AI-Augmented QA Testing Services Company | Optimworks',
			'meta_description' => 'AI-augmented QA testing services from Optimworks: AI test generation, automation and LLM validation, signed off by ISTQB engineers. Try a free pilot week.',
			'keywords'         => array(
				'AI-augmented software testing services for enterprises',
				'AI test automation services company',
				'LLM testing services for generative AI applications',
				'AI agent testing and validation services',
				'AI-generated code validation services',
				'self-healing test automation services',
				'human-in-the-loop AI QA testing',
				'QA outsourcing company in Hyderabad',
				'managed QA services with free pilot week',
			),
		),
		'services' => array(
			'h1'               => 'QA Testing Services for Complex Products, Releases & AI Systems',
			'meta_title'       => 'QA Testing Services for AI & Enterprise | Optimworks',
			'meta_description' => 'Optimworks QA testing services: AI-powered QA, LLM and AI agent testing, automation, API, performance, security and data testing. Start a free pilot week.',
			'keywords'         => array(
				'AI-powered QA testing services',
				'GenAI and LLM application testing services',
				'AI agent testing services',
				'AI-generated code validation services',
				'test automation services for CI/CD',
				'API and performance testing services',
				'application security testing services',
				'ETL and data pipeline testing services',
				'AI QA readiness assessment',
			),
		),
		'ai-assisted-test-case-generation' => array(
			'h1'               => 'AI Test Case Generation Services',
			'meta_title'       => 'AI Test Case Generation Services | Optimworks',
			'meta_description' => 'AI test case generation services by Optimworks: TestsBuddi drafts cases from Jira and requirements, engineers review and approve. Start a free pilot week.',
			'keywords'         => array(
				'AI-assisted test case generation',
				'AI test case generation from Jira requirements',
				'human-reviewed AI test cases',
				'test case design services',
				'requirements-based test case generation',
				'test case traceability and coverage',
				'AI test case generation for QA teams',
				'test case management and review service',
				'generative AI test case generator',
			),
		),
		'ai-assisted-test-automation' => array(
			'h1'               => 'AI-Assisted Test Automation Services',
			'meta_title'       => 'AI-Assisted Test Automation Services | Optimworks',
			'meta_description' => 'AI-assisted test automation services by Optimworks: deterministic locator repair, logged heals and engineer review in your CI. Try a free pilot week today.',
			'keywords'         => array(
				'test automation locator maintenance',
				'automated test maintenance services',
				'broken locator repair for Selenium and Playwright',
				'deterministic test automation healing',
				'flaky test reduction services',
				'test automation audit log',
				'UI test maintenance outsourcing',
				'self-healing Appium mobile tests',
				'test automation CI pipeline evidence',
			),
		),
		'predictive-risk-defect-intelligence' => array(
			'h1'               => 'Risk-Based Testing Services & Defect Prediction',
			'meta_title'       => 'Risk-Based Testing Services & Defect Prediction',
			'meta_description' => 'Risk-based testing services that rank test effort by defect history, change and business impact. Engineer-signed risk register. Try a free pilot week.',
			'keywords'         => array(
				'risk-based test prioritization',
				'predictive defect analysis for QA',
				'defect prediction in software testing',
				'test risk assessment services',
				'risk-based testing strategy consulting',
				'AI-powered risk-based testing',
				'QA risk register and risk ranking',
				'defect clustering and hotspot analysis',
				'test effort prioritization by business impact',
			),
		),
		'visual-ai-ui-regression-testing' => array(
			'h1'               => 'Visual Regression Testing Services Against Approved Baselines',
			'meta_title'       => 'Visual Regression Testing Services | UI Diff Review',
			'meta_description' => 'Visual regression testing services with approved baselines, multi-viewport capture and engineer-reviewed diffs in your CI. Start a free pilot week.',
			'keywords'         => array(
				'UI regression testing services',
				'visual AI testing services',
				'screenshot comparison testing',
				'cross-browser visual testing',
				'responsive layout testing services',
				'visual regression testing with Playwright',
				'visual diff review and baseline management',
				'UI drift detection in CI/CD',
				'visual regression testing outsourcing',
			),
		),
		'test-impact-analysis' => array(
			'h1'               => 'Test Impact Analysis Services',
			'meta_title'       => 'Test Impact Analysis Services | Change-Based Testing',
			'meta_description' => 'Test impact analysis services that map code changes to the right tests, cut CI runtime and keep every skip documented. Try a free pilot week today.',
			'keywords'         => array(
				'test impact analysis in CI/CD',
				'change-based test selection',
				'regression test selection services',
				'reduce regression test execution time',
				'code change to test mapping',
				'test suite optimization services',
				'selective test execution in CI pipeline',
				'faster CI pipeline testing',
				'test impact analysis with GitHub Actions',
			),
		),
		'chaos-resilience-engineering' => array(
			'h1'               => 'Chaos and Resilience Engineering Testing Services',
			'meta_title'       => 'Chaos Engineering Services | Resilience Testing',
			'meta_description' => 'Chaos engineering services with agreed faults, defined halt conditions and recovery evidence in a controlled environment. Start a free pilot week today.',
			'keywords'         => array(
				'resilience testing services',
				'fault injection testing services',
				'chaos testing for Kubernetes',
				'disaster recovery testing services',
				'failure scenario testing',
				'controlled chaos experiments',
				'resilience engineering consulting',
				'runbook validation and recovery testing',
				'chaos engineering for microservices',
			),
		),
		'ai-generated-code-validation' => array(
			'h1'               => 'AI-Generated Code Validation Services',
			'meta_title'       => 'AI-Generated Code Validation Services | AI Code Review',
			'meta_description' => 'AI-generated code validation services: independent QA and security review of AI-authored diffs for correctness, edge cases and tests. Free pilot week.',
			'keywords'         => array(
				'AI code review services',
				'AI-generated code security review',
				'Copilot code review and validation',
				'AI-authored pull request review',
				'LLM-generated code quality assurance',
				'AI code testing services',
				'validate AI-generated code before merge',
				'AI coding assistant risk and QA',
				'independent code review for AI-written code',
			),
		),
		'genai-llm-application-testing' => array(
			'h1'               => 'LLM Application Testing Services',
			'meta_title'       => 'LLM Application Testing Services | GenAI Evaluation',
			'meta_description' => 'LLM application testing services that score output quality, grounding, consistency and safety, with replayable traces. Start a free pilot week today.',
			'keywords'         => array(
				'GenAI application testing services',
				'LLM evaluation services',
				'generative AI testing and QA',
				'LLM output quality testing',
				'LLM safety and guardrail testing',
				'RAG application testing',
				'AI feature acceptance testing',
				'LLM testing with OpenAI and Anthropic models',
				'AI product release readiness testing',
			),
		),
		'ai-agent-testing' => array(
			'h1'               => 'AI Agent Testing Services',
			'meta_title'       => 'AI Agent Testing Services | Agentic AI Evaluation',
			'meta_description' => 'AI agent testing services for task completion, tool use, retries and halt conditions, with replayable traces. Start a free pilot week with an engineer.',
			'keywords'         => array(
				'agentic AI testing services',
				'multi-step AI agent evaluation',
				'AI agent tool use testing',
				'LLM agent testing and validation',
				'AI agent safety and guardrail testing',
				'agent loop and halt condition testing',
				'AI agent task success rate testing',
				'testing LangChain agents',
				'autonomous AI agent QA',
			),
		),
		'prompt-hallucination-testing' => array(
			'h1'               => 'Professional AI Hallucination Testing Services',
			'meta_title'       => 'AI Hallucination Testing Services | Grounding QA',
			'meta_description' => 'AI hallucination testing services: responses checked against named sources, prompt variations, refusals and traces. Start a free pilot week.',
			'keywords'         => array(
				'LLM hallucination testing',
				'grounding and hallucination detection for AI',
				'RAG hallucination testing',
				'prompt variation and adversarial prompt testing',
				'AI refusal and guardrail testing',
				'unsupported claims detection in AI responses',
				'measuring hallucination rate in LLM apps',
				'AI response accuracy testing',
				'hallucination testing for chatbots and copilots',
			),
		),
		'conversational-ai-testing' => array(
			'h1'               => 'Conversational AI Testing Services',
			'meta_title'       => 'Conversational AI Testing Services | Chatbot QA',
			'meta_description' => 'Conversational AI testing services for chatbots and voice bots: intent handling, multi-turn context, edge cases and human handoff. Try a free pilot week.',
			'keywords'         => array(
				'chatbot testing services',
				'voice bot testing services',
				'IVR and voice assistant testing',
				'NLU intent accuracy testing',
				'multi-turn conversation testing',
				'chatbot escalation and human handoff testing',
				'conversational AI QA',
				'chatbot test automation',
				'contact center bot testing',
			),
		),
		'functional-regression-testing' => array(
			'h1'               => 'Functional Testing Services for Critical Release Journeys',
			'meta_title'       => 'Functional Testing Services | Regression & UAT Support',
			'meta_description' => 'Functional testing services covering integration, regression and UAT support, with traceable evidence and a QA release recommendation. Free pilot week.',
			'keywords'         => array(
				'regression testing services',
				'integration testing services',
				'UAT support services',
				'exploratory testing services',
				'risk-based regression testing',
				'release readiness testing',
				'web and mobile functional testing',
				'API and system integration testing',
				'QA outsourcing for release testing',
			),
		),
		'test-automation-services' => array(
			'h1'               => 'Test Automation Services That Survive Product Change',
			'meta_title'       => 'Test Automation Services | Selenium, Playwright & CI',
			'meta_description' => 'Test automation services for web, mobile, desktop and API in your own repository, with CI gates and failure evidence. Start a free pilot week today.',
			'keywords'         => array(
				'test automation framework development',
				'Selenium automation testing services',
				'Cypress and WebdriverIO automation testing',
				'mobile app test automation with Appium',
				'API test automation services',
				'CI/CD test automation integration',
				'no-code test automation platform',
				'test automation outsourcing services',
				'desktop application test automation',
			),
		),
		'mobile-app-testing' => array(
			'h1'               => 'Mobile App Testing Services',
			'meta_title'       => 'Mobile App Testing Services | iOS & Android QA',
			'meta_description' => 'Mobile app testing services for iOS and Android on real devices, with agreed OS and network matrix, crash evidence and store readiness. Free pilot week.',
			'keywords'         => array(
				'iOS and Android app testing services',
				'real device testing services',
				'mobile device and OS compatibility testing',
				'mobile app testing on slow and offline networks',
				'app store readiness testing',
				'mobile app crash and stability testing',
				'mobile app install and upgrade testing',
				'native mobile app testing',
				'mobile QA outsourcing',
			),
		),
		'performance-load-testing' => array(
			'h1'               => 'Performance Testing Services',
			'meta_title'       => 'Performance Testing Services | Load, Stress & Soak',
			'meta_description' => 'Performance testing services with load, stress and soak runs against agreed thresholds, plus a named readiness recommendation. Start a free pilot week.',
			'keywords'         => array(
				'load testing services',
				'stress and soak testing services',
				'API and backend performance testing',
				'JMeter, k6 and Gatling performance testing',
				'peak traffic readiness testing',
				'scalability and capacity testing',
				'performance bottleneck analysis',
				'performance testing in CI/CD',
				'performance testing outsourcing',
			),
		),
		'api-testing-services' => array(
			'h1'               => 'Best API Testing Services',
			'meta_title'       => 'API Testing Services | REST, GraphQL & gRPC Testing',
			'meta_description' => 'API testing services for REST, GraphQL and gRPC: contracts, authentication, negative paths and integration handoffs with evidence. Free pilot week.',
			'keywords'         => array(
				'REST API testing services',
				'GraphQL API testing',
				'API contract testing services',
				'API authentication and authorization testing',
				'API integration testing services',
				'API negative and boundary testing',
				'Postman API testing services',
				'API testing in CI/CD',
				'microservices API testing',
			),
		),
		'security-penetration-testing' => array(
			'h1'               => 'Application Security Testing Services',
			'meta_title'       => 'Application Security Testing Services | Optimworks',
			'meta_description' => 'Application security testing services within a written scope: access control, session and configuration checks with reproducible findings. Free pilot week.',
			'keywords'         => array(
				'web application security testing',
				'penetration testing services',
				'OWASP Top 10 security testing',
				'authentication and session security testing',
				'access control and role-based security testing',
				'security misconfiguration review',
				'dependency and container vulnerability testing',
				'security retesting and remediation verification',
				'scoped security testing for SaaS applications',
			),
		),
		'accessibility-testing' => array(
			'h1'               => 'Accessibility Testing Services Company',
			'meta_title'       => 'Accessibility Testing Services Company | Optimworks',
			'meta_description' => 'Validate website accessibility with WCAG 2.2 AA testing. Check keyboard navigation, screen readers, contrast, forms, and receive evidence-based reports.',
			'keywords'         => array(
				'accessibility testing services',
				'WCAG 2.2 AA testing',
				'website accessibility testing',
				'accessibility audit services',
				'keyboard accessibility testing',
				'screen reader testing',
				'web accessibility compliance',
				'accessibility testing for websites',
				'WCAG compliance testing',
			),
		),
		'agile-continuous-testing' => array(
			'h1'               => 'Agile and Continuous Testing services',
			'meta_title'       => 'Agile and Continuous Testing services | Optimworks',
			'meta_description' => 'Integrate agile and continuous testing into every sprint with risk-based QA, faster feedback, visible test coverage, and reliable release decisions.',
			'keywords'         => array(
				'agile testing services',
				'sprint testing services',
				'in sprint QA',
				'continuous QA testing',
				'agile QA services',
				'risk based testing',
				'embedded QA testing',
				'software release testing',
				'QA process integration',
			),
		),
		'etl-data-pipeline-testing' => array(
			'h1'               => 'Data Pipeline Testing Services',
			'meta_title'       => 'Data Pipeline Testing Services | ETL Validation',
			'meta_description' => 'Data pipeline testing services for batch and streaming ETL: contracts, transformations and reconciliation with signed samples. Start a free pilot week.',
			'keywords'         => array(
				'ETL testing services',
				'data reconciliation testing',
				'batch and streaming pipeline testing',
				'data transformation testing',
				'data warehouse testing services',
				'data quality testing services',
				'Snowflake and dbt data testing',
				'Kafka streaming data testing',
				'source to target data validation',
			),
		),
		'ai-model-data-quality-testing' => array(
			'h1'               => 'AI Model Data Quality Testing',
			'meta_title'       => 'AI Model & Data Quality Testing | Drift and Leakage',
			'meta_description' => 'AI model data quality testing for training and inference data: drift, leakage, quality checks and coverage gaps for release decisions. Free pilot week.',
			'keywords'         => array(
				'machine learning data quality testing',
				'data drift detection services',
				'data leakage testing for ML models',
				'training data quality assessment',
				'ML model data validation services',
				'model drift monitoring and testing',
				'inference data testing',
				'dataset coverage gap analysis',
				'ML data quality gate before release',
			),
		),
		'test-data-management' => array(
			'h1'               => 'Test Data Management Services',
			'meta_title'       => 'Test Data Management Services | Masking & Synthetic',
			'meta_description' => 'Test data management services: masked, synthetic and subset data that protects sensitive information and keeps relationships intact. Free pilot week.',
			'keywords'         => array(
				'test data masking services',
				'synthetic test data generation',
				'test data subsetting',
				'data anonymization for testing',
				'GDPR and HIPAA compliant test data',
				'relationship-preserving data masking',
				'test data refresh automation',
				'test data for staging and QA environments',
				'test data provisioning services',
			),
		),
		'realtime-communication-testing' => array(
			'h1'               => 'Real-Time Communication Testing Services',
			'meta_title'       => 'Real-Time Communication Testing Services | WebRTC QA',
			'meta_description' => 'Real-time communication testing services for voice, video and messaging under packet loss, jitter and NAT, with inspectable traces. Try a free pilot week.',
			'keywords'         => array(
				'WebRTC testing services',
				'VoIP call quality testing',
				'video conferencing testing',
				'network impairment testing for calls',
				'voice and video quality testing on poor networks',
				'NAT traversal and TURN server testing',
				'wifi to cellular handoff testing',
				'one-way audio and media failure diagnosis',
				'messaging and screen sharing testing',
			),
		),
		'iot-device-testing' => array(
			'h1'               => 'IoT Testing Services',
			'meta_title'       => 'IoT Testing Services | Firmware, OTA & Connectivity',
			'meta_description' => 'IoT testing services across firmware, connectivity, power, OTA updates and the mobile app, with reproducible evidence. Start a free pilot week with us.',
			'keywords'         => array(
				'IoT device testing services',
				'IoT firmware testing',
				'OTA firmware update testing',
				'IoT connectivity testing (BLE, Wi-Fi, cellular)',
				'IoT battery and power testing',
				'end-to-end IoT testing',
				'MQTT testing services',
				'IoT mobile app and device state testing',
				'connected device QA services',
			),
		),
		'blockchain-smart-contract-testing' => array(
			'h1'               => 'Blockchain and Smart Contract Testing Services',
			'meta_title'       => 'Smart Contract Testing Services | Invariant Testing',
			'meta_description' => 'Smart contract testing services for invariants, permissions, reentrancy and upgrade retests, with confidential lab evidence. Start a free pilot week.',
			'keywords'         => array(
				'smart contract invariant testing',
				'smart contract security testing',
				'Solidity smart contract testing',
				'smart contract permission and access control testing',
				'reentrancy and oracle failure testing',
				'smart contract upgrade and proxy testing',
				'pre-deployment smart contract testing',
				'blockchain QA services',
				'DeFi protocol testing',
			),
		),
		'ai-qa-readiness-assessment' => array(
			'h1'               => 'AI in software testing assessment',
			'meta_title'       => 'AI QA Readiness Assessment | AI in Testing Roadmap',
			'meta_description' => 'AI QA readiness assessment: see where AI can speed up testing, where human review must stay, and get a funded roadmap for your next decision. Talk to us.',
			'keywords'         => array(
				'AI in software testing assessment',
				'AI adoption roadmap for QA teams',
				'AI testing readiness review',
				'QA AI strategy consulting',
				'AI use cases in quality assurance',
				'responsible AI adoption in QA',
				'AI QA maturity assessment',
				'AI test automation roadmap',
				'human-in-the-loop QA controls',
			),
		),
		'qa-strategy-advisory' => array(
			'h1'               => 'QA Strategy Consulting Services',
			'meta_title'       => 'QA Strategy Consulting Services | QA Operating Model',
			'meta_description' => 'QA strategy consulting services that design how testing fits your SDLC: roles, controls, measures and a fundable roadmap. Talk to a QA engineer today.',
			'keywords'         => array(
				'QA operating model design',
				'test strategy consulting',
				'QA process assessment and improvement',
				'shift-left testing strategy',
				'definition of done for QA',
				'QA roles and ownership model',
				'quality engineering roadmap',
				'QA governance and release controls',
				'QA transformation consulting',
			),
		),
		'ai-testing-strategy-consulting' => array(
			'h1'               => 'AI Testing Strategy Consulting Services',
			'meta_title'       => 'AI Testing Strategy Consulting | AI in QA & QA of AI',
			'meta_description' => 'AI testing strategy consulting that separates AI in QA from QA of AI, with human controls, a prioritised roadmap and named owners. Talk to an engineer.',
			'keywords'         => array(
				'AI test strategy for enterprises',
				'AI in QA vs QA of AI',
				'testing AI-enabled products strategy',
				'AI-assisted QA roadmap',
				'AI governance for software testing',
				'human-in-the-loop AI testing controls',
				'build vs buy AI testing tools',
				'AI testing operating model',
				'generative AI testing strategy',
			),
		),
		'test-automation-coe-setup' => array(
			'h1'               => 'Test Automation Center of Excellence Setup',
			'meta_title'       => 'Test Automation Center of Excellence (CoE) Setup',
			'meta_description' => 'Test automation center of excellence setup: standards, pipeline gates, governance and a named internal lead your team keeps. Talk to an engineer today.',
			'keywords'         => array(
				'test automation CoE setup',
				'automation testing governance',
				'test automation standards and best practices',
				'test automation maturity assessment',
				'test automation strategy consulting',
				'CI/CD quality gate setup',
				'automation framework standards',
				'test automation operating model',
				'automation ownership after vendor handover',
			),
		),
		'industries' => array(
			'h1'               => 'Industry-Specific QA Testing Services Shaped Around Industry Risk',
			'meta_title'       => 'Industry-Specific QA Testing Services | 5 Sectors',
			'meta_description' => 'Industry-specific QA testing services for financial services, healthcare, retail, supply chain and education. Start with a free pilot week on your systems.',
			'keywords'         => array(
				'financial services software testing',
				'healthcare software testing services',
				'eCommerce testing services',
				'supply chain software testing',
				'education software testing services',
				'QA services for regulated industries',
				'banking and fintech QA testing',
				'retail checkout and peak load testing',
				'domain-specific QA testing',
			),
		),
		'financial-services' => array(
			'h1'               => 'Software Testing Services for Financial Industry',
			'meta_title'       => 'Financial Services Software Testing | Payments QA',
			'meta_description' => 'Financial services software testing for payments, portfolios, reporting and APIs, with traceable evidence and a release recommendation. Free pilot week.',
			'keywords'         => array(
				'payments testing services',
				'banking software testing services',
				'fintech QA testing services',
				'wealth and portfolio platform testing',
				'financial API and integration testing',
				'financial transaction reconciliation testing',
				'audit trail and segregation of duties testing',
				'regression testing for financial applications',
				'QA for banks, asset managers and payment providers',
			),
		),
		'healthcare' => array(
			'h1'               => 'Healthcare Software Testing Services',
			'meta_title'       => 'Healthcare Software Testing Services | Telehealth QA',
			'meta_description' => 'Healthcare software testing services for health records, telehealth and patient portals: accuracy, interoperability and privacy. Start a free pilot week.',
			'keywords'         => array(
				'EHR testing services',
				'telehealth application testing',
				'patient portal testing',
				'healthcare interoperability testing',
				'medical software testing services',
				'healthcare test data privacy and masking',
				'healthcare accessibility testing',
				'healthcare API and integration testing',
				'QA for healthcare providers and medtech companies',
			),
		),
		'ecommerce-retail' => array(
			'h1'               => 'eCommerce Testing Services',
			'meta_title'       => 'eCommerce Testing Services | Checkout & Retail QA',
			'meta_description' => 'eCommerce testing services for catalogue, cart, checkout, payments and promotions, with peak-season performance checks. Start a free pilot week today.',
			'keywords'         => array(
				'checkout and payment testing',
				'retail software testing services',
				'eCommerce performance testing for peak season',
				'promotion and pricing testing',
				'cart and checkout regression testing',
				'eCommerce search and catalogue testing',
				'Black Friday load testing',
				'eCommerce QA for marketplaces and retailers',
				'order and inventory integration testing',
			),
		),
		'supply-chain' => array(
			'h1'               => 'Software Testing Services for Supply Chain',
			'meta_title'       => 'Supply Chain Software Testing | WMS & EDI QA',
			'meta_description' => 'Supply chain software testing for orders, inventory, warehouse and transport integrations, with traceable evidence. Start a free pilot week with us today.',
			'keywords'         => array(
				'WMS testing services',
				'logistics software testing services',
				'EDI and integration testing',
				'order management system testing',
				'inventory accuracy testing',
				'warehouse workflow testing',
				'TMS and carrier integration testing',
				'event-driven order testing',
				'QA for logistics and operations platforms',
			),
		),
		'education' => array(
			'h1'               => 'Software Testing Services for Education industry',
			'meta_title'       => 'Education Software Testing Services | LMS & eLearning',
			'meta_description' => 'Education software testing services for learning platforms: enrolment, access, content, assessments and accessibility. Start a free pilot week with us.',
			'keywords'         => array(
				'LMS testing services',
				'eLearning platform testing',
				'online assessment testing',
				'education accessibility testing (WCAG)',
				'learning platform performance testing',
				'student enrolment and access testing',
				'AI tutor and educational copilot testing',
				'edtech QA services',
				'QA for education providers and learning platform teams',
			),
		),
		'accelerators' => array(
			'h1'               => 'AI-Powered QA Tools Built In-House: theTestRo and TestsBuddi',
			'meta_title'       => 'AI-Powered QA Tools | theTestRo & TestsBuddi',
			'meta_description' => 'AI-powered QA tools built in house: theTestRo for no-code, self-healing automation and TestsBuddi for reviewed test generation. Start a free pilot week.',
			'keywords'         => array(
				'no-code test automation tool',
				'self-healing test automation tool',
				'AI test case generation tool',
				'AI test management platform',
				'rules-based test automation without LLM',
				'human-reviewed AI test generation',
				'no-code web and API testing',
				'Jira test case generation',
				'managed QA with in-house automation tools',
			),
		),
		'thetestro' => array(
			'h1'               => 'No-Code Test Automation Platform for Web and API Testing',
			'meta_title'       => 'No-Code Test Automation Platform | Web & API Testing',
			'meta_description' => 'No-code test automation platform for web and API: record once, replay anywhere, rules-based self-healing with no LLM in the run path. Start a pilot week.',
			'keywords'         => array(
				'codeless test automation for web and API',
				'record and replay test automation',
				'self-healing test automation without AI',
				'deterministic test automation',
				'parallel cloud test execution',
				'web and API testing in one platform',
				'no-code API testing',
				'test automation for non-programmers',
			),
		),
		'testsbuddi' => array(
			'h1'               => 'AI Test Management Platform with Human Approval and Release Gates',
			'meta_title'       => 'AI Test Management Platform | Human-Reviewed QA',
			'meta_description' => 'AI test management platform that drafts cases from Jira and GitHub, needs human approval and gives a PASS, WARN or BLOCK release signal. Free pilot week.',
			'keywords'         => array(
				'AI test case management',
				'test case generation from Jira',
				'human-in-the-loop test generation',
				'PASS, WARN, BLOCK release gate',
				'requirements to test traceability',
				'QA knowledge base for test generation',
				'test plan and test run management',
				'AI test coverage gap analysis',
				'Jira and GitHub test management integration',
			),
		),
		'ai-managed-qa' => array(
			'h1'               => 'Managed QA Services: We Run the QA Cadence, You Keep the Repos',
			'meta_title'       => 'Managed QA Services | AI-Augmented QA Team & Sign-Off',
			'meta_description' => 'Managed QA services where we run the QA cadence and a named engineer signs each release, while you keep the repos and CI. Start with a free pilot week.',
			'keywords'         => array(
				'managed QA services with AI',
				'managed testing services',
				'QA outsourcing with release sign-off',
				'dedicated QA pod',
				'QA as a managed service',
				'outsourced QA team for SaaS and enterprise',
				'weekly QA reporting and release recommendation',
				'managed test automation and execution',
				'QA function outsourcing without vendor lock-in',
			),
		),
		'insights' => array(
			'h1'               => 'Insights for Teams Evaluating a QA Testing Partner',
			'meta_title'       => 'QA Testing Partner Evaluation Guide | FAQs & Results',
			'meta_description' => 'Evaluating a QA testing partner? See engagement models, in-house AI accelerators, anonymised case study results and FAQs. Start with a free pilot week.',
			'keywords'         => array(
				'how to choose a QA testing company',
				'QA outsourcing engagement models',
				'QA vendor evaluation checklist',
				'QA outsourcing FAQs',
				'software testing case studies',
				'questions to ask a QA vendor',
				'embedded QA team vs managed QA',
				'AI in QA outsourcing',
				'QA pilot before contract',
			),
		),
		'faq' => array(
			'h1'               => 'QA Testing Company FAQs: AI, Engagement Models and Company Facts',
			'meta_title'       => 'QA Testing FAQs: AI, Pilot Week & Engagement',
			'meta_description' => 'QA testing company FAQs: how we use AI in quality engineering, testing AI-generated code, Pilot Week, engagement models and company facts. Ask an engineer.',
			'keywords'         => array(
				'how is AI used in quality engineering',
				'can AI test AI products',
				'how to test AI-generated code',
				'what is deterministic test automation',
				'embedded QA team vs managed quality function',
				'what does a QA pilot week include',
				'QA outsourcing from India',
				'do QA companies work with existing testing tools',
				'QA company in Hyderabad',
			),
		),
		'case-studies' => array(
			'h1'               => 'Test Automation Case Studies: Real Numbers, No Client Names',
			'meta_title'       => 'Test Automation Case Studies | Regression Results',
			'meta_description' => 'Test automation case studies with real numbers: 300+ daily regression cases, 3 weeks cut to 1, and 3 years sprint-embedded. Client names withheld.',
			'keywords'         => array(
				'regression testing case study',
				'test automation results and ROI',
				'reduce regression testing time case study',
				'daily regression automation',
				'sprint-embedded QA case study',
				'Selenium, Cucumber and Appium automation case study',
				'QA automation success stories',
				'manual to automated regression testing',
				'long-term embedded QA engagement',
			),
		),
		'about' => array(
			'h1'               => 'Software Testing Company in Hyderabad Founded by Engineers',
			'meta_title'       => 'Software Testing Company in Hyderabad | About Us',
			'meta_description' => 'Software testing company in Hyderabad, founded 2019 by engineers. QA and AI testing for 100+ clients in 20+ countries. Talk to an engineer today.',
			'keywords'         => array(
				'QA company in Hyderabad',
				'software testing services in Hyderabad',
				'quality engineering company India',
				'QA outsourcing company in India',
				'ISTQB-certified QA engineers',
				'software testing company founded 2019',
				'AI testing company India',
				'QA testing company with global clients',
				'Optimworks Technologies',
			),
		),
		'how-we-work' => array(
			'h1'               => 'QA Engagement Models: Pilot Week, Embedded Team or Managed QA',
			'meta_title'       => 'QA Engagement Models | Pilot, Embedded & Managed QA',
			'meta_description' => 'QA engagement models: a free one-week pilot, an embedded QA team or a managed QA function. Compare the three and start with a free Pilot Week today.',
			'keywords'         => array(
				'free QA pilot',
				'embedded QA team',
				'managed QA function',
				'QA outsourcing models',
				'QA team augmentation',
				'try before you buy QA testing',
				'embedded QA vs managed QA',
				'how to start a QA outsourcing engagement',
				'QA staff augmentation without long-term contract',
			),
		),
		'contact' => array(
			'h1'               => 'Book an Enterprise QA Audit or a Free Pilot Week',
			'meta_title'       => 'Enterprise QA Audit & Free Pilot Week | Contact Us',
			'meta_description' => 'Book an enterprise QA audit or a free pilot week. Tell us what you ship and an engineer will reply. Request your audit or start a free pilot.',
			'keywords'         => array(
				'software testing audit',
				'QA assessment services',
				'test automation audit',
				'QA coverage gap analysis',
				'free QA pilot week',
				'contact QA testing company',
				'request a QA consultation',
				'QA audit report for enterprises',
				'QA company in Hyderabad contact',
			),
		),
	);

	return $data;
}

/**
 * Resolve SEO slug for the current front-end request.
 *
 * @return string|null
 */
function ow_seo_current_slug() {
	if ( is_front_page() ) {
		return 'home';
	}
	if ( ! is_page() ) {
		return null;
	}
	$post = get_queried_object();
	if ( ! ( $post instanceof WP_Post ) ) {
		return null;
	}
	return $post->post_name;
}

/**
 * SEO record for the current request, if any.
 *
 * @return array{h1:string,meta_title:string,meta_description:string,keywords:array<int,string>}|null
 */
function ow_get_seo() {
	$slug = ow_seo_current_slug();
	if ( null === $slug ) {
		return null;
	}
	$all = ow_seo_data();
	return isset( $all[ $slug ] ) ? $all[ $slug ] : null;
}

/**
 * Apply analyst meta title (already includes brand where provided).
 *
 * @param array<string,string> $parts Title parts.
 * @return array<string,string>
 */
function ow_seo_document_title_parts( $parts ) {
	$seo = ow_get_seo();
	if ( ! $seo || empty( $seo['meta_title'] ) ) {
		return $parts;
	}
	$parts['title'] = $seo['meta_title'];
	$parts['site']  = '';
	$parts['tagline'] = '';
	return $parts;
}
add_filter( 'document_title_parts', 'ow_seo_document_title_parts', 20 );

/**
 * Output meta description and keywords from the analyst sheet.
 */
function ow_seo_meta_tags() {
	$seo = ow_get_seo();
	if ( ! $seo ) {
		return;
	}
	if ( ! empty( $seo['meta_description'] ) ) {
		echo '<meta name="description" content="' . esc_attr( $seo['meta_description'] ) . '">' . "\n";
	}
	if ( ! empty( $seo['keywords'] ) && is_array( $seo['keywords'] ) ) {
		echo '<meta name="keywords" content="' . esc_attr( implode( ', ', $seo['keywords'] ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'ow_seo_meta_tags', 2 );


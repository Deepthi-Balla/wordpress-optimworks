<?php
/**
 * Industry detail data — port of industries.$slug.tsx INDUSTRIES.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * All industry detail records keyed by slug.
 *
 * @return array<string,array<string,mixed>>
 */
function ow_industries_data() {
	static $data = null;
	if ( null !== $data ) {
		return $data;
	}

	$data = array(
		'financial-services' => array(
			'crumb'     => 'Financial Services',
			'pageTitle' => 'Financial Services QA | Optimworks',
			'pageDesc'  => 'Quality assurance for financial software, covering payments, portfolios, reporting, integrations and control evidence.',
			'image'     => 'financial-services-concept.jpg',
			'imageAlt'  => 'Payment, portfolio, API and control checks supporting a release review',
			'title'     => 'Quality assurance for financial products and critical transactions.',
			'lede'      => 'We test payments, portfolios, reporting and connected services with attention to customer outcomes, financial controls and operational resilience.',
			'journeys'  => array(
				array(
					't' => 'Payments and account journeys',
					'd' => 'We test transfers, cards, mandates, balances and statements across successful, declined, reversed and interrupted transactions.',
				),
				array(
					't' => 'APIs and integrations',
					'd' => 'We verify contracts, data mapping, retries and reconciliation across gateways, banking platforms, identity services and external feeds.',
				),
				array(
					't' => 'Identity and security',
					'd' => 'Authentication, authorisation, session handling and data protection are tested around products that hold financial and personal information.',
				),
				array(
					't' => 'Controls and traceability',
					'd' => 'We test audit trails, approvals, segregation of duties and retention behaviour against the obligations and control framework selected by the client.',
				),
				array(
					't' => 'AI enabled features',
					'd' => 'Where products use copilots or generated code, we add checks for factual accuracy, permissions, edge cases and changes to established financial journeys.',
				),
			),
			'breaks'    => 'Incorrect balances, duplicate transactions, delayed payments and incomplete audit evidence can affect customers, operations and regulatory commitments.',
			'who'       => 'Banks, asset managers, payment providers and financial technology teams modernising products or increasing release frequency.',
			'principle' => 'Work begins with a prioritised scope based on transaction value, control exposure and change risk. We build regression coverage, record reproducible defect evidence and provide a clear release recommendation. The client retains release authority and receives the tests, evidence and operating guidance at handover.',
			'caps'      => array(
				array(
					't' => 'Prioritised scope',
					'd' => 'Critical journeys and controls ranked by business and change risk.',
				),
				array(
					't' => 'Regression coverage',
					'd' => 'Repeatable checks across payments, accounts, reporting and integrations.',
				),
				array(
					't' => 'Defect evidence',
					'd' => 'Reproducible steps, transaction context, logs and expected outcomes.',
				),
				array(
					't' => 'Release recommendation',
					'd' => 'A concise view of results, residual risk and open issues for the client decision.',
				),
				array(
					't' => 'Handover',
					'd' => 'Test assets, evidence and guidance transferred to the client team.',
				),
			),
			'related'   => array(
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/functional-regression-testing',
					'title'  => 'Functional and Regression Testing',
					'text'   => 'Coverage for payments, portfolios and reporting across successive releases.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/api-testing-services',
					'title'  => 'API Testing',
					'text'   => 'Contract, error handling and reconciliation checks across connected services.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/security-penetration-testing',
					'title'  => 'Security and Penetration Testing',
					'text'   => 'Structured assessment of identity, access, session and data protection controls.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/performance-load-testing',
					'title'  => 'Performance and Load Testing',
					'text'   => 'Capacity and resilience checks for known peaks and critical processing windows.',
				),
				array(
					'pillar' => 'Testing AI Applications',
					'href'   => '/services/ai-generated-code-validation',
					'title'  => 'AI Generated Code Validation',
					'text'   => 'Independent testing of generated changes where they affect financial journeys.',
				),
			),
			'proof'     => 'Results are linked to requirements, controls and defects so stakeholders can review the basis for the recommendation.',
		),
		'healthcare'         => array(
			'crumb'     => 'Healthcare',
			'pageTitle' => 'Healthcare QA | Optimworks',
			'pageDesc'  => 'Quality assurance for healthcare software, covering records, telehealth, patient services, interoperability, privacy and accessibility.',
			'image'     => 'healthcare-concept.jpg',
			'imageAlt'  => 'Record, integration, privacy and access checks supporting a release review',
			'title'     => 'Quality assurance for connected healthcare services.',
			'lede'      => 'We test health records, telehealth, patient portals and medical technology for functional accuracy, dependable integration, privacy and accessibility.',
			'journeys'  => array(
				array(
					't' => 'Care and administration journeys',
					'd' => 'We test registration, scheduling, records, results, billing and the distinct permissions used by patients, clinicians and administrators.',
				),
				array(
					't' => 'Interoperability',
					'd' => 'We verify healthcare messages, APIs, devices and partner feeds for mapping, timing, duplication, failure recovery and traceability.',
				),
				array(
					't' => 'Test data and privacy',
					'd' => 'Masked or synthetic records support realistic testing while access controls, consent behaviour and audit trails are checked in the product.',
				),
				array(
					't' => 'Security and accessibility',
					'd' => 'We test identity, authorisation, session and data protection controls alongside accessibility for patient and staff services.',
				),
				array(
					't' => 'AI enabled features',
					'd' => 'Where AI supports search, summarisation or conversation, we test accuracy, source use, access boundaries and escalation against client approved expectations.',
				),
			),
			'breaks'    => 'Incorrect records, failed interfaces, inaccessible services and excessive access can disrupt care operations and expose sensitive information.',
			'who'       => 'Healthcare providers, software teams and medical technology organisations that need dependable testing without unnecessary use of identifiable patient data.',
			'principle' => 'Work begins with a prioritised scope agreed with clinical, operational and technical stakeholders. We provide regression coverage, reproducible defect evidence and a release recommendation against the agreed acceptance criteria. Clinical safety decisions and release authority remain with the client. Handover includes test assets, evidence and known limitations.',
			'caps'      => array(
				array(
					't' => 'Prioritised scope',
					'd' => 'Journeys ranked by patient impact, operational dependency and change risk.',
				),
				array(
					't' => 'Regression coverage',
					'd' => 'Repeatable checks across records, workflows, interfaces and access.',
				),
				array(
					't' => 'Defect evidence',
					'd' => 'Reproducible steps, affected roles, data conditions and interface detail.',
				),
				array(
					't' => 'Release recommendation',
					'd' => 'Results and residual risks presented for the client release decision.',
				),
				array(
					't' => 'Handover',
					'd' => 'Test assets, evidence and limitations transferred to the responsible client teams.',
				),
			),
			'related'   => array(
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/functional-regression-testing',
					'title'  => 'Functional and Regression Testing',
					'text'   => 'Coverage for scheduling, identity, records, results and billing workflows.',
				),
				array(
					'pillar' => 'Data and AI Testing',
					'href'   => '/services/test-data-management',
					'title'  => 'Test Data Management',
					'text'   => 'Synthetic and masked data designed around privacy and representative conditions.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/accessibility-testing',
					'title'  => 'Accessibility Testing',
					'text'   => 'Assessment of patient and staff services against agreed accessibility standards.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/security-penetration-testing',
					'title'  => 'Security and Penetration Testing',
					'text'   => 'Testing of access, session and data paths around sensitive information.',
				),
				array(
					'pillar' => 'Testing AI Applications',
					'href'   => '/services/prompt-hallucination-testing',
					'title'  => 'Prompt and Hallucination Testing',
					'text'   => 'Targeted checks where generated responses support healthcare workflows.',
				),
			),
			'proof'     => 'Evidence is mapped to agreed requirements and client controls. Optimworks tests the software but does not certify compliance or determine clinical safety.',
		),
		'ecommerce-retail'   => array(
			'crumb'     => 'eCommerce and Retail',
			'pageTitle' => 'eCommerce and Retail QA | Optimworks',
			'pageDesc'  => 'Quality assurance for retail and ecommerce across catalogue, checkout, payments, promotions, fulfilment and peak demand.',
			'image'     => 'ecommerce-retail-concept.jpg',
			'imageAlt'  => 'Catalogue, cart, payment and peak demand checks supporting a release review',
			'title'     => 'Quality assurance from product discovery to fulfilment.',
			'lede'      => 'We test catalogue, cart, checkout, payments, promotions and fulfilment across websites, applications and the services behind them.',
			'journeys'  => array(
				array(
					't' => 'Catalogue and discovery',
					'd' => 'We test search, filters, product variants, availability and content across devices, browsers, regions and customer states.',
				),
				array(
					't' => 'Cart, checkout and payments',
					'd' => 'Cart rules, delivery choices, tax, payment methods, failures, retries, refunds and order confirmation are covered as connected journeys.',
				),
				array(
					't' => 'Promotions and pricing',
					'd' => 'We verify eligibility, stacking, regional pricing and totals across the combinations most likely to affect margin or customer trust.',
				),
				array(
					't' => 'Performance and resilience',
					'd' => 'We assess response times, capacity, graceful failure and recovery against expected campaigns and seasonal demand.',
				),
				array(
					't' => 'Customer assistance',
					'd' => 'Where automated assistants support product choice or service enquiries, we test approved policies, escalation, permissions and response accuracy.',
				),
			),
			'breaks'    => 'Incorrect prices, failed payments, oversold stock and slow checkout can reduce revenue while increasing support and fulfilment costs.',
			'who'       => 'Retailers, marketplace teams and commerce software providers releasing customer and operational changes throughout the trading calendar.',
			'principle' => 'Work begins with a prioritised scope based on revenue paths, customer impact and campaign timing. We provide regression coverage, reproducible defect evidence and a release recommendation for the client decision. Handover includes reusable tests, data needs and guidance for future trading events.',
			'caps'      => array(
				array(
					't' => 'Prioritised scope',
					'd' => 'Revenue journeys and campaign changes ranked by customer and commercial risk.',
				),
				array(
					't' => 'Regression coverage',
					'd' => 'Repeatable checks across catalogue, checkout, payment and fulfilment.',
				),
				array(
					't' => 'Defect evidence',
					'd' => 'Reproducible steps with browser, device, account and order context.',
				),
				array(
					't' => 'Release recommendation',
					'd' => 'Results, open issues and trading risks presented for client review.',
				),
				array(
					't' => 'Handover',
					'd' => 'Reusable tests, data requirements and campaign guidance for the client team.',
				),
			),
			'related'   => array(
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/functional-regression-testing',
					'title'  => 'Functional and Regression Testing',
					'text'   => 'Coverage for catalogue, cart, checkout and post purchase journeys.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/performance-load-testing',
					'title'  => 'Performance and Load Testing',
					'text'   => 'Capacity and resilience checks for campaigns and seasonal demand.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/visual-ai-ui-regression-testing',
					'title'  => 'Visual AI / UI Regression Testing',
					'text'   => 'Visual coverage across customer journeys, devices and responsive layouts.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/api-testing-services',
					'title'  => 'API Testing',
					'text'   => 'Checks across inventory, pricing, payment and fulfilment services.',
				),
				array(
					'pillar' => 'Testing AI Applications',
					'href'   => '/services/conversational-ai-testing',
					'title'  => 'Conversational AI Testing',
					'text'   => 'Targeted testing where automated assistants support customer journeys.',
				),
			),
			'proof'     => 'Evidence connects customer journeys, service behaviour and trading conditions so stakeholders can assess the release in context.',
		),
		'supply-chain'       => array(
			'crumb'     => 'Supply Chain',
			'pageTitle' => 'Supply Chain QA | Optimworks',
			'pageDesc'  => 'Quality assurance for supply chain software across orders, inventory, warehouse operations, transport and partner integrations.',
			'image'     => 'supply-chain-concept.jpg',
			'imageAlt'  => 'Order, inventory, integration and routing checks supporting a release review',
			'title'     => 'Quality assurance across connected supply chain operations.',
			'lede'      => 'We test orders, inventory, warehouse workflows, transport and partner integrations across the systems that support physical operations.',
			'journeys'  => array(
				array(
					't' => 'Orders and events',
					'd' => 'We test sequence, timing, duplication, missing messages and recovery across order creation, change, cancellation and status updates.',
				),
				array(
					't' => 'Integrations',
					'd' => 'Contract, file and message checks cover warehouse, transport, carrier, inventory and commerce systems, including timeout and retry behaviour.',
				),
				array(
					't' => 'Inventory accuracy',
					'd' => 'We verify quantities, locations, reservations and status transitions across operational systems and customer facing channels.',
				),
				array(
					't' => 'Operational volume',
					'd' => 'Performance testing covers waves, peaks, backlogs and recovery so teams understand capacity before operational demand increases.',
				),
				array(
					't' => 'Automated decisions',
					'd' => 'Where software uses AI for booking or routing, we test tool permissions, business constraints, exception handling and human review points.',
				),
			),
			'breaks'    => 'Late events, duplicated orders, inaccurate inventory and failed partner messages can become missed collections, delayed deliveries and manual recovery work.',
			'who'       => 'Logistics, inventory and operations platforms where software sits on the critical path of physical work.',
			'principle' => 'Work begins with a prioritised scope based on operational dependency, integration change and exception cost. We provide regression coverage, defect evidence and a release recommendation while the client retains authority for deployment and operational acceptance. Handover includes reusable tests, data conditions and support for internal ownership.',
			'caps'      => array(
				array(
					't' => 'Prioritised scope',
					'd' => 'Operational journeys and integrations ranked by dependency and exception cost.',
				),
				array(
					't' => 'Regression coverage',
					'd' => 'Repeatable checks across orders, inventory, warehouse and transport workflows.',
				),
				array(
					't' => 'Defect evidence',
					'd' => 'Reproducible steps with messages, timestamps, data state and system context.',
				),
				array(
					't' => 'Release recommendation',
					'd' => 'Results and operational risks presented for client review and decision.',
				),
				array(
					't' => 'Handover',
					'd' => 'Tests, data conditions and integration evidence transferred for internal ownership.',
				),
			),
			'related'   => array(
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/api-testing-services',
					'title'  => 'API Testing',
					'text'   => 'Contract, timeout, retry and recovery checks across operational systems.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/functional-regression-testing',
					'title'  => 'Functional and Regression Testing',
					'text'   => 'Coverage for the workflows and exceptions used by operations teams.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/performance-load-testing',
					'title'  => 'Performance and Load Testing',
					'text'   => 'Volume and recovery testing across services that support operational peaks.',
				),
				array(
					'pillar' => 'Data Testing',
					'href'   => '/services/etl-data-pipeline-testing',
					'title'  => 'ETL and Data Pipeline Testing',
					'text'   => 'Validation of feeds that shape inventory and operational reporting.',
				),
				array(
					'pillar' => 'Testing AI Applications',
					'href'   => '/services/ai-agent-testing',
					'title'  => 'AI Agent Testing',
					'text'   => 'Targeted testing where automated agents support booking or routing.',
				),
			),
			'proof'     => 'Evidence follows transactions across system boundaries so operational teams can see where a failure began and what it affected.',
		),
		'education'          => array(
			'crumb'     => 'Education',
			'pageTitle' => 'Education QA | Optimworks',
			'pageDesc'  => 'Quality assurance for education software across enrolment, learning content, assessments, accessibility and peak demand.',
			'image'     => 'education-concept.jpg',
			'imageAlt'  => 'Identity, content, assessment and access checks supporting a release review',
			'title'     => 'Quality assurance for learning platforms and education services.',
			'lede'      => 'We test enrolment, identity, learning content, assessments and access across the systems used by learners, educators and administrators.',
			'journeys'  => array(
				array(
					't' => 'Identity and access',
					'd' => 'We test enrolment, sign in, roles, permissions and access to courses, results and records across different user groups.',
				),
				array(
					't' => 'Content integrity',
					'd' => 'Published content, versions, media and progress tracking are checked across browsers, devices and representative network conditions.',
				),
				array(
					't' => 'Assessments',
					'd' => 'We verify item delivery, timing, submissions, marking rules, results and access controls around assessment material.',
				),
				array(
					't' => 'Performance and accessibility',
					'd' => 'Term starts, assessment windows and live sessions are tested for expected demand, while key journeys are assessed against agreed accessibility standards.',
				),
				array(
					't' => 'AI enabled learning',
					'd' => 'Where tutors or copilots are used, we test responses against approved material, expected boundaries, user age considerations and escalation routes.',
				),
			),
			'breaks'    => 'Failed access, unavailable content, incorrect results and exposed assessment material can disrupt learning and undermine confidence in the service.',
			'who'       => 'Education providers, learning platform teams and software suppliers serving institutions, professional learning and international audiences.',
			'principle' => 'Work begins with a prioritised scope based on learner impact, academic calendar and change risk. We provide regression coverage, reproducible defect evidence and a release recommendation for client review. The client retains release authority. Handover includes reusable tests, data needs and guidance for future peak periods.',
			'caps'      => array(
				array(
					't' => 'Prioritised scope',
					'd' => 'Learner and staff journeys ranked by calendar, audience and change risk.',
				),
				array(
					't' => 'Regression coverage',
					'd' => 'Repeatable checks across enrolment, content, assessment and access.',
				),
				array(
					't' => 'Defect evidence',
					'd' => 'Reproducible steps with user role, device, content and timing context.',
				),
				array(
					't' => 'Release recommendation',
					'd' => 'Results, open issues and learner impact presented for the client decision.',
				),
				array(
					't' => 'Handover',
					'd' => 'Tests, data requirements and peak period guidance transferred to the client team.',
				),
			),
			'related'   => array(
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/functional-regression-testing',
					'title'  => 'Functional and Regression Testing',
					'text'   => 'Coverage for enrolment, access, learning and assessment journeys.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/performance-load-testing',
					'title'  => 'Performance and Load Testing',
					'text'   => 'Capacity and resilience checks for term starts and assessment windows.',
				),
				array(
					'pillar' => 'Core QA Services',
					'href'   => '/services/accessibility-testing',
					'title'  => 'Accessibility Testing',
					'text'   => 'Assessment of learner and staff journeys against agreed accessibility standards.',
				),
				array(
					'pillar' => 'Testing AI Applications',
					'href'   => '/services/genai-llm-application-testing',
					'title'  => 'GenAI and LLM Application Testing',
					'text'   => 'Targeted testing where tutors or copilots support learning journeys.',
				),
			),
			'proof'     => 'Evidence is organised around user roles, learning journeys and calendar pressures so stakeholders can assess impact before release.',
		),
	);

	return $data;
}

/**
 * Hub cards for the industries index (from industries.index.tsx).
 *
 * @return array<int,array{n:string,href:string,title:string,text:string,image:string,imageAlt:string}>
 */
function ow_industries_hub() {
	return array(
		array(
			'n'        => '01',
			'href'     => '/industries/financial-services',
			'title'    => 'Financial Services',
			'text'     => 'Payments, portfolios, reporting and integrations tested against financial controls, operational risk and customer expectations.',
			'image'    => 'financial-services-concept.jpg',
			'imageAlt' => 'Payment and control gates on a money path',
		),
		array(
			'n'        => '02',
			'href'     => '/industries/healthcare',
			'title'    => 'Healthcare',
			'text'     => 'Health records, telehealth and patient services tested for accuracy, privacy, accessibility and reliable integration.',
			'image'    => 'healthcare-concept.jpg',
			'imageAlt' => 'Record and access gates on a care path',
		),
		array(
			'n'        => '03',
			'href'     => '/industries/ecommerce-retail',
			'title'    => 'eCommerce and Retail',
			'text'     => 'Catalogue, cart, checkout, promotions and fulfilment tested across everyday releases and peak trading periods.',
			'image'    => 'ecommerce-retail-concept.jpg',
			'imageAlt' => 'Catalogue to checkout checks on a retail path',
		),
		array(
			'n'        => '04',
			'href'     => '/industries/supply-chain',
			'title'    => 'Supply Chain',
			'text'     => 'Orders, inventory, warehouse workflows and partner integrations tested across the systems that keep goods moving.',
			'image'    => 'supply-chain-concept.jpg',
			'imageAlt' => 'Event and inventory nodes on a logistics path',
		),
		array(
			'n'        => '05',
			'href'     => '/industries/education',
			'title'    => 'Education',
			'text'     => 'Enrolment, learning content, assessments and access tested for dependable service across institutions and regions.',
			'image'    => 'education-concept.jpg',
			'imageAlt' => 'Identity and assessment gates on a learning path',
		),
	);
}

/**
 * Lookup a single industry by slug.
 *
 * @param string $slug Post slug / route param.
 * @return array<string,mixed>|null
 */
function ow_get_industry( $slug ) {
	$all = ow_industries_data();
	$slug = (string) $slug;
	return isset( $all[ $slug ] ) ? $all[ $slug ] : null;
}

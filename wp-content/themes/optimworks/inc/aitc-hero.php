<?php
/**
 * AI Assisted Test Case Generation — thin wrapper onto shared ServiceWorkflow.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Legacy entry point — now renders the shared workflow for TestsBuddi.
 *
 * @param string $label Accessible description.
 */
function ow_aitc_hero_visual( $label = '' ) {
	ow_service_workflow_hero(
		'ai-testcase-concept.jpg',
		$label ? $label : 'Intake materials become drafts, are reviewed and approved, then delivered as a suite pack.',
		array(
			'heads'    => array( 'Intake', 'Review', 'Handover' ),
			'coreName' => 'TestsBuddi',
			'coreSub'  => 'Drafts reviewed',
			'outTitle' => 'Suite owned',
			'outSub'   => 'Sources mapped · Traceable',
		)
	);
}

/**
 * AI case page — shared buying layout with TestsBuddi hero flow via image key.
 *
 * @param array $p Buying page props.
 */
function ow_render_ai_case_experience( $p ) {
	ow_render_service_buying_page( $p );
}

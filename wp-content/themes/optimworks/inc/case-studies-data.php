<?php
/**
 * Case study detail data — port of case-studies.$slug.tsx STUDIES.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * All case study records keyed by slug.
 *
 * @return array<string,array<string,mixed>>
 */
function ow_case_studies_data() {
	static $data = null;
	if ( null !== $data ) {
		return $data;
	}

	$data = array(
		'daily-regression-automation' => array(
			'crumb'     => 'Daily regression that actually ran',
			'pageTitle' => 'Daily Regression Automation | Optimworks',
			'pageDesc'  => '300+ test cases automated. The point was not a badge. It was a suite the team could run every day.',
			'title'     => 'Daily regression that actually ran',
			'lede'      => '300+ test cases automated. The point was not a badge. It was a suite the team could run every day.',
			'beats'     => array(
				array(
					'k' => 'Challenge',
					't' => 'Regression was a special event',
					'd' => 'Coverage existed. It was not cheap enough to run continuously, so defects waited for a release window rather than showing up the day they were introduced.',
				),
				array(
					'k' => 'Context',
					't' => 'A team that needed the pack every day',
					'd' => 'The product moved faster than a release week scramble. The suite had to live in CI, not in a shared spreadsheet of cases someone ran when there was time.',
				),
				array(
					'k' => 'Approach',
					't' => 'Scope the journeys that blocked the release',
					'd' => 'We did not dump every click into automation. The pack covered the journeys that actually stopped a release, with an experienced engineer accountable for what stayed out.',
				),
				array(
					'k' => 'Implementation',
					't' => 'A daily pack, owned in the pipeline',
					'd' => '300+ cases were automated into a pack the team could run every day. An experienced engineer still reviewed failed runs before anyone treated the result as a release decision.',
				),
			),
			'result'    => 'The team could run regression daily instead of treating it as a release week event. Client name withheld.',
			'takeaway'  => 'Volume is not the product. A named engineer still decides whether the result supports a release.',
		),
		'regression-cycle-reduction'  => array(
			'crumb'     => 'Three weeks of regression became one',
			'pageTitle' => 'Regression Cycle Cut | Optimworks',
			'pageDesc'  => '2,000+ test cases automated. The regression cycle dropped from three weeks to one.',
			'title'     => 'Three weeks of regression became one',
			'lede'      => '2,000+ test cases automated. The regression cycle dropped from three weeks to one.',
			'beats'     => array(
				array(
					'k' => 'Challenge',
					't' => 'The train waited on a three week pass',
					'd' => 'Release trains were blocked by a manual heavy regression cycle. That is a product problem, not a tooling preference.',
				),
				array(
					'k' => 'Context',
					't' => 'Too much coverage to finish inside the window',
					'd' => 'The estate was large enough that a complete manual pass could not keep up with the cadence the business had already chosen.',
				),
				array(
					'k' => 'Approach',
					't' => 'Automate the journeys that actually blocked the train',
					'd' => 'Work concentrated on the journeys that delayed the release, not on increasing case count for its own sake. Stable lower risk areas stayed visible.',
				),
				array(
					'k' => 'Implementation',
					't' => '2,000+ cases into a runnable week',
					'd' => 'The pack was automated and kept runnable as the product moved. An experienced engineer still owned the recommendation.',
				),
			),
			'result'    => 'The regression cycle fell from three weeks to one. Numbers are real. The client is not named here.',
			'takeaway'  => 'A shorter cycle only holds if the pack stays owned after the original author leaves.',
		),
		'sprint-embedded-engagement'  => array(
			'crumb'     => 'Three years inside the sprints',
			'pageTitle' => 'Sprint Embedded Automation | Optimworks',
			'pageDesc'  => '500+ test cases. A three year embedded engagement. Selenium, Cucumber and Appium.',
			'title'     => 'Three years inside the sprints',
			'lede'      => '500+ test cases. A three year embedded engagement. Selenium, Cucumber and Appium.',
			'beats'     => array(
				array(
					'k' => 'Challenge',
					't' => 'Automation that lived outside the team',
					'd' => 'The client needed automation inside the sprint, not a separate factory throwing scripts over the wall after the stories had already shipped.',
				),
				array(
					'k' => 'Context',
					't' => 'A multi year product cadence',
					'd' => 'Web and mobile coverage had to grow with the backlog. Selenium, Cucumber and Appium were the stack the team already used and could keep.',
				),
				array(
					'k' => 'Approach',
					't' => 'Named engineers in the same cadence',
					'd' => 'We joined standups, boards and pipelines. Scope was written per cycle. The estate grew with the product rather than as a one off dump.',
				),
				array(
					'k' => 'Implementation',
					't' => '500+ cases, sprint by sprint',
					'd' => 'Coverage grew with the backlog using Selenium, Cucumber and Appium. A named engineer remained accountable for failed runs and for what the pack did not cover.',
				),
			),
			'result'    => 'A three year embedded engagement. 500+ cases on Selenium, Cucumber and Appium. Client name withheld under our case study policy.',
			'takeaway'  => 'The handover is the product. The suite has to make sense to the people who inherit it.',
		),
	);

	return $data;
}

/**
 * Hub cards for the case studies index.
 *
 * @return array<int,array{stat:string,href:string,title:string,text:string}>
 */
function ow_case_studies_hub() {
	return array(
		array(
			'stat'  => '300+',
			'href'  => '/case-studies/daily-regression-automation',
			'title' => 'Daily regression, automated',
			'text'  => 'A suite large enough to run every day, instead of a release week scramble.',
		),
		array(
			'stat'  => '3 weeks to 1',
			'href'  => '/case-studies/regression-cycle-reduction',
			'title' => 'Regression cycle cut',
			'text'  => '2,000+ automated cases. The cycle that used to take three weeks now takes one.',
		),
		array(
			'stat'  => '3 years',
			'href'  => '/case-studies/sprint-embedded-engagement',
			'title' => 'Sprint embedded automation',
			'text'  => '500+ cases. Selenium, Cucumber and Appium, inside the team\'s sprints.',
		),
	);
}

/**
 * Lookup a single case study by slug.
 *
 * @param string $slug Post slug / route param.
 * @return array<string,mixed>|null
 */
function ow_get_case_study( $slug ) {
	$all  = ow_case_studies_data();
	$slug = (string) $slug;
	return isset( $all[ $slug ] ) ? $all[ $slug ] : null;
}

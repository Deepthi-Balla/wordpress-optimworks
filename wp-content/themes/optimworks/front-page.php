<?php
/**
 * Front page template — homepage section stack.
 *
 * @package OptimWorks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main>
	<?php
	get_template_part( 'template-parts/home/hero' );
	get_template_part( 'template-parts/home/kinetic-strip' );
	get_template_part( 'template-parts/home/quality-loop' );
	get_template_part( 'template-parts/home/statement' );
	get_template_part( 'template-parts/home/services' );
	get_template_part( 'template-parts/home/accelerators' );
	get_template_part( 'template-parts/home/ledger' );
	get_template_part( 'template-parts/home/proof' );
	get_template_part( 'template-parts/home/metrics' );
	get_template_part( 'template-parts/home/about' );
	get_template_part( 'template-parts/home/why' );
	get_template_part( 'template-parts/home/engagement' );
	get_template_part( 'template-parts/home/industries' );
	get_template_part( 'template-parts/home/proof-quotes' );
	get_template_part( 'template-parts/home/finale' );
	?>
</main>
<?php
get_footer();

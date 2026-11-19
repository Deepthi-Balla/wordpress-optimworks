<?php
/**
 * OptimWorks theme functions and setup.
 *
 * @package OptimWorks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'OW_THEME_VERSION', '1.0.8' );

require_once get_template_directory() . '/inc/service-buying.php';
require_once get_template_directory() . '/inc/service-workflow.php';
require_once get_template_directory() . '/inc/aitc-hero.php';
require_once get_template_directory() . '/inc/site-bits.php';
require_once get_template_directory() . '/inc/industries-data.php';
require_once get_template_directory() . '/inc/case-studies-data.php';
require_once get_template_directory() . '/inc/services-data.php';
require_once get_template_directory() . '/inc/seo-data.php';

/**
 * Theme supports.
 */
function ow_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	// Prevent WP from injecting its own global styles / duotone etc.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'ow_theme_setup' );

/**
 * Stop WordPress front-end styles from fighting the React design system.
 */
function ow_dequeue_wp_styles() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'wp-block-library-theme' );

	// Do not load the empty theme style.css as a stylesheet.
	wp_dequeue_style( 'optimworks-style' );
	wp_deregister_style( 'optimworks-style' );
}
add_action( 'wp_enqueue_scripts', 'ow_dequeue_wp_styles', 100 );

/**
 * Remove global styles / SVG filters from wp_head.
 */
function ow_remove_global_styles() {
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
	remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
	remove_action( 'wp_head', 'wp_font_face' );
}
add_action( 'after_setup_theme', 'ow_remove_global_styles', 20 );

/**
 * Enqueue fonts, CSS, and JS — match React root head links.
 */
function ow_enqueue_assets() {
	wp_enqueue_style(
		'ow-google-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap',
		array(),
		null
	);

	$theme_css = get_template_directory() . '/assets/css/optimworks.css';
	wp_enqueue_style(
		'ow-theme',
		get_template_directory_uri() . '/assets/css/optimworks.css',
		array( 'ow-google-fonts' ),
		file_exists( $theme_css ) ? (string) filemtime( $theme_css ) : OW_THEME_VERSION
	);

	$compat_css = get_template_directory() . '/assets/css/wp-compat.css';
	wp_enqueue_style(
		'ow-wp-compat',
		get_template_directory_uri() . '/assets/css/wp-compat.css',
		array( 'ow-theme' ),
		file_exists( $compat_css ) ? (string) filemtime( $compat_css ) : OW_THEME_VERSION
	);

	$site_js = get_template_directory() . '/assets/js/site.js';
	wp_enqueue_script(
		'ow-site',
		get_template_directory_uri() . '/assets/js/site.js',
		array(),
		file_exists( $site_js ) ? (string) filemtime( $site_js ) : OW_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ow_enqueue_assets' );

/**
 * Global service card styles + shared ServiceWorkflow hero.
 */
function ow_enqueue_service_experience() {
	if ( ! is_page() ) {
		return;
	}

	if ( is_page( 'ai-assisted-test-case-generation' ) ) {
		wp_enqueue_style(
			'ow-aitc-problem-font',
			'https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&display=swap',
			array( 'ow-google-fonts' ),
			null
		);
	}

	$css = get_template_directory() . '/assets/css/service-experience.css';
	wp_enqueue_style(
		'ow-service-experience',
		get_template_directory_uri() . '/assets/css/service-experience.css',
		array( 'ow-theme' ),
		file_exists( $css ) ? (string) filemtime( $css ) : OW_THEME_VERSION
	);

	$workflow_css = get_template_directory() . '/assets/css/service-workflow.css';
	wp_enqueue_style(
		'ow-service-workflow',
		get_template_directory_uri() . '/assets/css/service-workflow.css',
		array( 'ow-theme' ),
		file_exists( $workflow_css ) ? (string) filemtime( $workflow_css ) : OW_THEME_VERSION
	);

	$js = get_template_directory() . '/assets/js/service-workflow.js';
	wp_enqueue_script(
		'ow-service-workflow',
		get_template_directory_uri() . '/assets/js/service-workflow.js',
		array(),
		file_exists( $js ) ? (string) filemtime( $js ) : OW_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ow_enqueue_service_experience' );

/**
 * Contact page → Contact Form 7 REST submit (same pipeline as old Optimworks).
 *
 * Deploy target: replace UI on the same domain (optimworks.com).
 * - Form ID 237702 already exists there.
 * - reCAPTCHA site key already allows optimworks.com.
 * - Existing CF7 Mail settings already email management.
 *
 * Local (.local): still posts to live optimworks.com form 237702 for end-to-end testing.
 */
function ow_enqueue_contact_form() {
	if ( ! is_page_template( 'page-contact.php' ) && ! is_page( 'contact' ) ) {
		return;
	}

	$form_id  = 237702;
	$site_key = '6Ld7rh0gAAAAABUCOzsyKjjuXHwtIVw8ku3KS-rO';
	$host     = (string) wp_parse_url( home_url(), PHP_URL_HOST );
	$is_local = in_array( $host, array( 'localhost', '127.0.0.1' ), true )
		|| false !== strpos( $host, '.local' );

	if ( $is_local ) {
		// Local theme preview → live CF7 on optimworks.com.
		$endpoint       = 'https://optimworks.com/wp-json/contact-form-7/v1/contact-forms/237702/feedback';
		$container_post = 30;
		$unit_tag       = 'wpcf7-f237702-p30-o1';
	} else {
		// Deployed on optimworks.com (same site / same domain).
		$container_post = (int) get_queried_object_id();
		if ( $container_post < 1 ) {
			$container_post = 30;
		}
		$unit_tag = sprintf( 'wpcf7-f%d-p%d-o1', $form_id, $container_post );
		$endpoint = esc_url_raw( rest_url( 'contact-form-7/v1/contact-forms/' . $form_id . '/feedback' ) );
	}

	$contact_js = get_template_directory() . '/assets/js/contact-form.js';
	wp_enqueue_script(
		'ow-contact-form',
		get_template_directory_uri() . '/assets/js/contact-form.js',
		array(),
		file_exists( $contact_js ) ? (string) filemtime( $contact_js ) : OW_THEME_VERSION,
		true
	);

	wp_localize_script(
		'ow-contact-form',
		'owContactForm',
		array(
			'formId'           => $form_id,
			'endpoint'         => $endpoint,
			'unitTag'          => $unit_tag,
			'containerPost'    => $container_post,
			'cf7Version'       => '5.7.4',
			'recaptchaSiteKey' => $site_key,
			'requireCaptcha'   => '1',
			'isLocal'          => $is_local ? '1' : '',
		)
	);

	wp_enqueue_script(
		'ow-recaptcha',
		'https://www.google.com/recaptcha/api.js?onload=owCf7LoadRecaptcha&render=explicit',
		array( 'ow-contact-form' ),
		null,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ow_enqueue_contact_form' );

/**
 * Preconnect for Google Fonts (same as React).
 */
function ow_font_preconnect() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'ow_font_preconnect', 1 );

/**
 * Remove emoji scripts/styles.
 */
function ow_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'ow_disable_emojis' );

/**
 * Clean body classes that can affect layout expectations.
 */
function ow_body_classes( $classes ) {
	$classes = array_diff( $classes, array( 'wp-embed-responsive' ) );
	$classes[] = 'ow-site';
	return $classes;
}
add_filter( 'body_class', 'ow_body_classes' );

/**
 * Remove remaining WP inline CSS that alters image sizing.
 */
function ow_remove_img_auto_sizes_css() {
	wp_dequeue_style( 'wp-img-auto-sizes-contain' );
	remove_filter( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 );
	remove_action( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 );
}
add_action( 'wp_enqueue_scripts', 'ow_remove_img_auto_sizes_css', 100 );
add_action( 'init', function () {
	remove_filter( 'wp_content_img_tag', 'wp_img_tag_add_auto_sizes' );
	remove_filter( 'wp_get_attachment_image_attributes', 'wp_img_tag_add_auto_sizes' );
}, 20 );

/**
 * Frontend should not shift for admin bar during design QA.
 * (Keeps WP admin bar in admin; disables front-end bar chrome offset.)
 */
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
show_admin_bar( false );

/**
 * Legacy React redirect: /services/self-healing-test-automation → AI assisted automation.
 */
function ow_legacy_service_redirects() {
	if ( is_admin() ) {
		return;
	}
	$path = trim( (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
	$path = untrailingslashit( $path );
	if ( 'services/self-healing-test-automation' === $path ) {
		wp_safe_redirect( home_url( '/services/ai-assisted-test-automation/' ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'ow_legacy_service_redirects', 1 );


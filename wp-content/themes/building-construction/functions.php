<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * After theme setup
 */
function building_construction_theme_setup(){
	require get_stylesheet_directory() . '/inc/customizer/building-construction-customizer-options.php';
	remove_theme_support('custom-background');
}
add_action( 'after_setup_theme', 'building_construction_theme_setup' );

// BEGIN ENQUEUE PARENT ACTION.
// AUTO GENERATED - Do not modify or remove comment markers above or below:.

if ( ! function_exists( 'building_construction_chld_css' ) ) :
	function building_construction_chld_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}
		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'building_construction_chld_css' );

if ( ! function_exists( 'building_construction_parent_css' ) ) :
	function building_construction_parent_css() {
		wp_enqueue_style( 'building-construction-parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap-min-css', 'animate-css', 'businessexpo-skin-default-css', 'businessexpo-all-min-css', 'font-awesome-css', 'owl-carousel-css', 'businessexpo-menu-css', 'businessexpo-footer-css', 'businessexpo-logo-css' ) );
		wp_enqueue_style( 'building-construction-custom-css', get_stylesheet_directory_uri() . "/assets/css/custom-css.css" );
		wp_enqueue_style( 'building-construction-dark-theme', get_stylesheet_directory_uri() . "/assets/css/dark-theme.css" );
	}
endif;
add_action( 'wp_enqueue_scripts', 'building_construction_parent_css', 10 );

// END ENQUEUE PARENT ACTION.

/**
 * Child Custom Function
 */
function building_construction_custom_actions() {
	remove_action( 'admin_notices', 'businessexpo_admin_notice', 15 );
}
add_action( 'init', 'building_construction_custom_actions' );

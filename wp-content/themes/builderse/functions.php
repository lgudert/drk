<?php
/**
 * Define Theme Version
 */
define( 'BUILDERSE_THEME_VERSION', '4.7' );

function builderse_css() {
	$parent_style = 'renoval-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'builderse-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('builderse-color-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('renoval-default');
	
	wp_enqueue_style('builderse-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	// wp_dequeue_style('renoval-media-query');
	
	wp_enqueue_script('builderse-slider-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'builderse_css',999);


/**
 * Called all the Customize file.
 */
require( get_stylesheet_directory() . '/inc/customize/builderse-premium.php');

/**
 * Import Options From Parent Theme
 *
 */
function builderse_parent_theme_options() {
	$renoval_mods = get_option( 'theme_mods_renoval' );
	if ( ! empty( $renoval_mods ) ) {
		foreach ( $renoval_mods as $renoval_mod_k => $renoval_mod_v ) {
			set_theme_mod( $renoval_mod_k, $renoval_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'builderse_parent_theme_options' );
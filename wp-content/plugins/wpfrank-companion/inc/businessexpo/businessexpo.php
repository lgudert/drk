<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * @package wpfrank-companion
 */

// Customizer Sections.
require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/wpfrank-companion-businessexpo-customizer.php';
require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/wpfrank-companion-businessexpo-customizer-options.php';
require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/wpfrank-companion-businessexpo-customizer-default.php';

// Frontpage Sections.
if ( ! function_exists( 'wpfrank_businessexpo_frontpage_sections' ) ) :
	function wpfrank_businessexpo_frontpage_sections() {
		// Diffrent Themes.
		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme      = $activate_theme_data->name;

		$front_page = get_theme_mod( 'front_page_data', 'slider,service,funfact,team,wooproduct,testimonial,blog,callout,sponsors' );

		$data = is_array( $front_page ) ? $front_page : explode( ',', $front_page );

		if ( $data ) {
			foreach ( $data as $key => $value ) {
				switch ( $value ) {

					case 'slider':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-slider.php';
						break;

					case 'service':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-service.php';
						break;

					case 'funfact':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-funfact.php';
						break;

					case 'team':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-team.php';
						break;

					case 'wooproduct':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-woocommerce.php';
						break;

					case 'testimonial':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-testimonial.php';
						break;

					case 'blog':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-blog.php';
						break;

					case 'callout':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-callout.php';
						break;

					case 'sponsors':
						require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-sponsors.php';
						break;
				}
			}
		}

	}
	add_action( 'wpfrank_businessexpo_frontpage', 'wpfrank_businessexpo_frontpage_sections' );
endif;

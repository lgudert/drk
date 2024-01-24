<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * WPFRANK Plugin Customizer Class
 *
 * @package wpfrank-companion
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WPFRANK_businessexpo_Customizer' ) ) :

	// WPFRANKbusinessexpo Customizer class
	class WPFRANK_businessexpo_Customizer {
		public function WPFRANK_businessexpo_Customizer_settings() {
			//Diffrent Themes
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;

			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/hompage-layout/customizer_homepage_layout.php';
           
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-slider-customizer-settings.php';
           	require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-info-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-service-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-woocommerce-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-testimonial-customizer-settings.php';
		    require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-cta-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-blog-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-team-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-funfact-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/frontpage-sections/wpfrank-companion-businessexpo-sponsors-customizer-settings.php';
		}
	}
endif;

$customizer_settings = new WPFRANK_businessexpo_Customizer();

$customizer_settings->WPFRANK_businessexpo_Customizer_settings();
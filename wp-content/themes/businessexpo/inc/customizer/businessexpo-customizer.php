<?php
/**
 * Customize for taxonomy with dropdown, extend the WP customizer
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customizer' ) ) :

	class businessexpo_Customizer {

		// Constructor customizer
		public function __construct() {

			add_action( 'customize_register', array( $this, 'businessexpo_customizer_panel_control' ) );
			add_action( 'customize_register', array( $this, 'businessexpo_customizer_register' ) );
			add_action( 'customize_register', array( $this, 'businessexpo_customizer_selective_refresh' ) );
			add_action( 'customize_preview_init', array( $this, 'businessexpo_customizer_preview_js' ) );
			add_action( 'after_setup_theme', array( $this, 'businessexpo_customizer_settings' ) );
		}

		// Register custom controls
		public function businessexpo_customizer_panel_control( $wp_customize ) {

			// Load customizer options extending classes.
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/custom-customizer/businessexpo-customizer-panel.php';
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/custom-customizer/businessexpo-customizer-section.php';

			// Register extended classes.
			$wp_customize->register_panel_type( 'businessexpo_Customize_Panel' );
			$wp_customize->register_section_type( 'businessexpo_Customize_Section' );

			// Load base class for controls.
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-base-control.php';
			// Load custom control classes.
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-color-control.php';
			// menu (theme options)
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-heading-control.php';

			// Blog (theme options)
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-radio-image-control.php';
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-radio-buttonset-control.php';
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-sortable-control.php';

			// typography (theme settings)
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-toggle-control.php';
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-upgrade-control.php';

			// Register JS-rendered control types.
			// $wp_customize->register_control_type( 'businessexpo_Customize_Color_Control' );

			// menu theme options
			$wp_customize->register_control_type( 'businessexpo_Customize_Heading_Control' );

			$wp_customize->register_control_type( 'businessexpo_Customize_Radio_Image_Control' );
			$wp_customize->register_control_type( 'businessexpo_Customize_Radio_Buttonset_Control' );
			$wp_customize->register_control_type( 'businessexpo_Customize_Sortable_Control' );

			// typography settings
			$wp_customize->register_control_type( 'businessexpo_Customize_Toggle_Control' );
			$wp_customize->register_control_type( 'businessexpo_Customize_Upgrade_Control' );

		}

		// Customizer selective refresh.
		public function businessexpo_customizer_selective_refresh() {

			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/businessexpo-customizer-sanitize.php';
			require_once BUSINESSEXPO_THEME_DIR . '/inc/customizer/businessexpo-customizer-partials.php';

		}

		// Add postMessage support for site title and description for the Theme Customizer.
		public function businessexpo_customizer_register( $wp_customize ) {

			// Customizer selective
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/businessexpo-customizer-selective.php';

			// Register panels and sections.
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/businessexpo-panels-and-sections.php';
		}

		// Site Title and Description instant change JS
		public function businessexpo_customizer_preview_js() {
			wp_enqueue_script( 'businessexpo_customizer_header', get_template_directory_uri() . '/inc/customizer/assets/js/site-title-customizer.js', array( 'customize-preview' ), '20151215', true );
		}

		public function businessexpo_customizer_settings() {

			// Base class.
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/businessexpo-customize-base-customizer-settings.php';

			// Loading Icon. (Theme Options Settings)
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-loading-icon-customizer-settings.php';

			// Top Bar. (Theme Options Settings)
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-topbar-customizer-settings.php';

			// Menu (Theme Options Settings)
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-menu-bar-customizer-settings.php';

			// Page Header (Theme Options Settings)
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-page-header-customizer-settings.php';

			// Blog (Theme Options Settings)
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-blog-general-customizer-settings.php';

			// Footer (Theme Options Settings)
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-footer-copyright-customizer-settings.php';
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-footer-widget-customizer-settings.php';

			// Typography Settings
			require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/businessexpo-typography-customizer-settings.php';
		}
	}
endif;

new businessexpo_Customizer();

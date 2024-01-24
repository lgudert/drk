<?php
/**
 * Extend default customizer section.
 *
 * @package businessexpo
 *
 * @see     WP_Customize_Section
 * @access  public
 */

require BUSINESSEXPO_THEME_DIR . '/inc/customizer/webfont.php';
require BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-typography-control.php';
require BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-plugin-control.php';
require BUSINESSEXPO_THEME_DIR . '/inc/customizer/controls/code/businessexpo-customize-category-control.php';
require BUSINESSEXPO_THEME_DIR . '/inc/customizer/customizer-repeater/functions.php';

function businessexpo_customizer_theme_settings( $wp_customize ) {

	$active_callback   = isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	// Site Title
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	// Site Title Color setting for on change color+display
	// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/*
	 ALL Theme Optons Settings */
		// Top Bar Settings
		require BUSINESSEXPO_THEME_DIR . '/inc/customizer/theme-options/businessexpo-top-bar-customizer.php';
		// Menu Settings
		require BUSINESSEXPO_THEME_DIR . '/inc/customizer/theme-options/businessexpo-menu-customizer.php';
		// Blog Settings
		require BUSINESSEXPO_THEME_DIR . '/inc/customizer/theme-options/businessexpo-blog-customizer.php';
		// Footer Settings
		require BUSINESSEXPO_THEME_DIR . '/inc/customizer/theme-options/businessexpo-footer-customizer.php';
	/* ALL Theme Optons Settings */

	/* Typography Settings */
	require BUSINESSEXPO_THEME_DIR . '/inc/customizer/theme-options/businessexpo-typography-customizer.php';

}
add_action( 'customize_register', 'businessexpo_customizer_theme_settings' );


add_action( 'customize_register', 'businessexpo_recommended_plugin_section' );
function businessexpo_recommended_plugin_section( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'businessexpo_Customize_Recommended_Plugin_Section' );
	// Register sections.
	$manager->add_section(
		new businessexpo_Customize_Recommended_Plugin_Section(
			$manager,
			'businessexpo_upgrade_to_pro_option',
			array(
				'title'       => esc_html__( 'Ready for more?', 'businessexpo' ),
				'priority'    => 500,
				'plugin_text' => esc_html__( 'Get businessexpo Pro', 'businessexpo' ),
				'plugin_url'  => 'https://wpfrank.com/wordpress-themes/businessexpo-premium/',
			)
		)
	);
}


/*
 *  Customizer Notifications
 */

require get_template_directory() . '/inc/customizer/customizer-notice/businessexpo-customizer-notify.php';

$businessexpo_config_customizer = array(
	'recommended_plugins'                  => array(
		'wpfrank-companion' => array(
			'recommended' => true,
			'description' => sprintf(
				/* translators: %s: plugin name */
				esc_html__( 'If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'businessexpo' ),
				'<strong>WpFrank Companion</strong>'
			),
		),
	),
	'recommended_actions'                  => array(),
	'recommended_actions_title'            => esc_html__( 'Recommended Actions', 'businessexpo' ),
	'recommended_plugins_title'            => esc_html__( 'Recommended Plugin', 'businessexpo' ),
	'install_button_label'                 => esc_html__( 'Install and Activate', 'businessexpo' ),
	'activate_button_label'                => esc_html__( 'Activate', 'businessexpo' ),
	'businessexpo_deactivate_button_label' => esc_html__( 'Deactivate', 'businessexpo' ),
);
businessexpo_Customizer_Notify::init( apply_filters( 'businessexpo_customizer_notify_array', $businessexpo_config_customizer ) );

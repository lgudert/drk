<?php
/**
 * Customizer section options.
 *
 * @package hospital-health-care
 */

function hospital_health_care_customizer_theme_settings( $wp_customize ) {

	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

		$wp_customize->add_setting(
			'awpbusinesspress_footer_copright_text',
			array(
				'sanitize_callback' => 'hospital_health_care_sanitize_text',
				'default'           => __( 'Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Hospital Health Care theme by A WP Life', 'hospital-health-care' ),
				'transport'         => $selective_refresh,
			)
		);

		$wp_customize->add_control(
			'awpbusinesspress_footer_copright_text',
			array(
				'label'    => esc_html__( 'Footer Copyright', 'hospital-health-care' ),
				'section'  => 'awpbusinesspress_footer_copyright',
				'priority' => 10,
				'type'     => 'textarea',
			)
		);

}
add_action( 'customize_register', 'hospital_health_care_customizer_theme_settings' );

function hospital_health_care_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}

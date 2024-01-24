<?php
/**
 * Customizer section options.
 *
 * @package building-construction
 *
 */

function building_construction_customizer_theme_settings( $wp_customize ){

	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

		$wp_customize->add_setting('businessexpo_footer_copright_text',array(
				'sanitize_callback'	=>  'sanitize_text_field',
				'default'			=> __('Copyright &copy; 2022 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Building Construction theme by <a target="_blank" href="http://wpfrank.com/">WP Frank</a>', 'building-construction'),
				'transport'			=> $selective_refresh,
		));

		$wp_customize->add_control('businessexpo_footer_copright_text', array(
			'label'			=> esc_html__('Footer Copyright','building-construction'),
			'section'		=> 'businessexpo_footer_copyright',
			'priority'		=> 10,
			'type'			=> 'textarea'
		));

}
add_action( 'customize_register', 'building_construction_customizer_theme_settings' );
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 *
 * @package wpfrank-companion
 */

// Diffrent Themes.
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme      = $activate_theme_data->name;

// Child Theme Default Data.
if ( 'Crypto Compare' == $activate_theme || 'Crypto AirDrop' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/child-themes-customizer-default-data/crypto-compare-customizer-default-data.php';
}
if ( 'Crypto Mining' == $activate_theme || 'Crypto AirDrop' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/child-themes-customizer-default-data/crypto-mining-customizer-default-data.php';
}
if ( 'Crypto Token' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/child-themes-customizer-default-data/crypto-token-customizer-default-data.php';
}
if ( 'Meme Token' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/child-themes-customizer-default-data/meme-token-customizer-default-data.php';

	if ( ! function_exists( 'cryptoairdrop_contact_default_content' ) ) :
		function cryptoairdrop_contact_default_content( $wp_customize ) {
	
			$cryptoairdrop_contact_data = $wp_customize->get_setting( 'cryptoairdrop_contact_content' );
			if ( ! empty( $cryptoairdrop_contact_data ) ) {
				$cryptoairdrop_contact_data->default = json_encode(
					array(
						array(
							'image_url' => wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/mt-contact-1.png',
							'title'     => esc_html__( 'Email Us at', 'cryptoairdrop' ),
							'text'      => 'contact@memecoin.org',
							'choice'    => 'customizer_repeater_image',
							'id'        => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
							'image_url' => wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/mt-contact-2.png',
							'title'     => esc_html__( 'Call Us', 'cryptoairdrop' ),
							'text'      => '+123 456 789',
							'choice'    => 'customizer_repeater_image',
							'id'        => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
							'image_url' => wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/mt-contact-3.png',
							'title'     => esc_html__( 'Fax', 'cryptoairdrop' ),
							'text'      => '+987 456 132',
							'choice'    => 'customizer_repeater_image',
							'id'        => 'customizer_repeater_56d7ea7f40b17',
						),
					)
				);
			}
		}
		add_action( 'customize_register', 'cryptoairdrop_contact_default_content' );
	endif;
} else {
	if ( ! function_exists( 'cryptoairdrop_contact_default_content' ) ) :
		function cryptoairdrop_contact_default_content( $wp_customize ) {

			$cryptoairdrop_contact_data = $wp_customize->get_setting( 'cryptoairdrop_contact_content' );
			if ( ! empty( $cryptoairdrop_contact_data ) ) {
				$cryptoairdrop_contact_data->default = json_encode(
					array(
						array(
							'image_url' => get_template_directory_uri() . '/assets/img/token/map.png',
							'title'     => esc_html__( 'Our Address', 'cryptoairdrop' ),
							'text'      => 'A108 Adam Street, New York, NY 535022',
							'choice'    => 'customizer_repeater_image',
							'id'        => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
							'image_url' => get_template_directory_uri() . '/assets/img/token/email.png',
							'title'     => esc_html__( 'Email Us', 'cryptoairdrop' ),
							'text'      => 'info@example.com',
							'choice'    => 'customizer_repeater_image',
							'id'        => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
							'image_url' => get_template_directory_uri() . '/assets/img/token/phone.png',
							'title'     => esc_html__( 'Call Us', 'cryptoairdrop' ),
							'text'      => '+123 456 7890',
							'choice'    => 'customizer_repeater_image',
							'id'        => 'customizer_repeater_56d7ea7f40b17',
						),
					)
				);
			}
		}
		add_action( 'customize_register', 'cryptoairdrop_contact_default_content' );
	endif;
}
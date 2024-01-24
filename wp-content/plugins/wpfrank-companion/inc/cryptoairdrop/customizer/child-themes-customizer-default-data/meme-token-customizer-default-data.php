<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 *
 * @package wpfrank-companion
 */

if ( ! function_exists( 'cryptoairdrop_top_info_default_content' ) ) :
	function cryptoairdrop_top_info_default_content( $wp_customize ){
		$cryptoairdrop_top_info_data = $wp_customize->get_setting( 'cryptoairdrop_top_info_content' );
		if ( ! empty( $cryptoairdrop_top_info_data ) ) {
			$cryptoairdrop_top_info_data->default = json_encode( array(
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/meme-coin-feature-1.png',
					'title'			=> esc_html__( 'Reliable & Safe', 'cryptoairdrop' ),
					'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b15',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/meme-coin-feature-2.png',
					'title'			=> esc_html__( 'High Market Value', 'cryptoairdrop' ),
					'text'			=> 'Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b16',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/meme-coin-feature-3.png',
					'title'			=> esc_html__( 'Fully Secured Exchange', 'cryptoairdrop' ),
					'text'			=> 'Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/meme-coin-feature-4.png',
					'title'			=> esc_html__( 'High Returns', 'cryptoairdrop' ),
					'text'			=> 'Dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
			) );
		}
	}
	add_action( 'customize_register', 'cryptoairdrop_top_info_default_content' );
endif;

if ( ! function_exists( 'cryptoairdrop_roadmap_default_content' ) ) :
	function cryptoairdrop_roadmap_default_content( $wp_customize ) {

		$cryptoairdrop_roadmap_data = $wp_customize->get_setting( 'cryptoairdrop_roadmap_content' );
		if ( ! empty( $cryptoairdrop_roadmap_data ) ) {
			$cryptoairdrop_roadmap_data->default = json_encode(
				array(
					array(
						'title'           => esc_html__( 'Stage I', 'cryptoairdrop' ),
						'text'            => '<p>Sullamco laboris nisi ut aliquip ex onse quamet, consectetur adip isicing elit, sed do eiusmod</p>',
						'date'            => '20th January',
						'event_completed' => '',
						'id'              => 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'title'           => esc_html__( 'Stage II', 'cryptoairdrop' ),
						'text'            => '<p>Lapatta hoyaga asochsa onec dictum lectus ac sem posuere venenatis. Cras sodales</p>',
						'date'            => '15th August',
						'event_completed' => '',
						'id'              => 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'title'           => esc_html__( 'Stage III', 'cryptoairdrop' ),
						'text'            => '<p>Tormu khtaami beiman ex mauris lacinia mauris ac leo pulvinar vitae cursus odio thakukna</p>',
						'date'            => '10th December',
						'event_completed' => 'circle-row',
						'id'              => 'customizer_repeater_56d7ea7f40b17',
					),
					array(
						'title'           => esc_html__( 'The Launch', 'cryptoairdrop' ),
						'text'            => '<p>Demet pellentesque urna semper Cras sodales, massa et sagittis aliquam, elit lectus sollicitu</p>',
						'date'            => '16th March',
						'event_completed' => 'circle-row2',
						'id'              => 'customizer_repeater_56d7ea7f40b18',
					),
				)
			);
		}
	}
	add_action( 'customize_register', 'cryptoairdrop_roadmap_default_content' );
endif;
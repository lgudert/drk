<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 *
 * @package wpfrank-companion
 */

if ( ! function_exists( 'cryptoairdrop_roadmap_default_content' ) ) :
	function cryptoairdrop_roadmap_default_content( $wp_customize ) {

		$cryptoairdrop_roadmap_data = $wp_customize->get_setting( 'cryptoairdrop_roadmap_content' );
		if ( ! empty( $cryptoairdrop_roadmap_data ) ) {
			$cryptoairdrop_roadmap_data->default = json_encode(
				array(
					array(
						'title'           => esc_html__( 'Idea Generation', 'cryptoairdrop' ),
						'text'            => '<p>Sullamco laboris nisi ut aliquip ex onse quamet, consectetur adip isicing elit, sed do eiusmod</p>',
						'date'            => 'August 20, 2018',
						'event_completed' => '',
						'id'              => 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'title'           => esc_html__( 'Concept Making', 'cryptoairdrop' ),
						'text'            => '<p>Lapatta hoyaga asochsa onec dictum lectus ac sem posuere venenatis. Cras sodales</p>',
						'date'            => 'September 12, 2018',
						'event_completed' => '',
						'id'              => 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'title'           => esc_html__( 'R & D', 'cryptoairdrop' ),
						'text'            => '<p>Tormu khtaami beiman ex mauris lacinia mauris ac leo pulvinar vitae cursus odio thakukna</p>',
						'date'            => 'November 20, 2018',
						'event_completed' => '',
						'id'              => 'customizer_repeater_56d7ea7f40b17',
					),
					array(
						'title'           => esc_html__( 'The Launch', 'cryptoairdrop' ),
						'text'            => '<p>Demet pellentesque urna semper Cras sodales, massa et sagittis aliquam, elit lectus sollicitu</p>',
						'date'            => 'November 20, 2018',
						'event_completed' => 'circle-row',
						'id'              => 'customizer_repeater_56d7ea7f40b18',
					),
					array(
						'title'           => esc_html__( 'Pre Sale', 'cryptoairdrop' ),
						'text'            => '<p>Amar ei baje sovab ex sliquam vel porttitor lorem. Nam porta ipsum nec tortor intkono din</p>',
						'date'            => 'November 20, 2018',
						'event_completed' => 'circle-row2',
						'id'              => 'customizer_repeater_56d7ea7f40b19',
					),
				)
			);
		}
	}
	add_action( 'customize_register', 'cryptoairdrop_roadmap_default_content' );
endif;

if ( ! function_exists( 'cryptoairdrop_docs_default_content' ) ) :
	function cryptoairdrop_docs_default_content( $wp_customize ){
		$cryptoairdrop_docs_data = $wp_customize->get_setting( 'cryptoairdrop_docs_content' );
		if ( ! empty( $cryptoairdrop_docs_data ) ) {
			$cryptoairdrop_docs_data->default = json_encode( array(
				array(
					'icon_value'	=> 'fa-wallet',
					'title'			=> esc_html__( 'Wallet', 'cryptoairdrop' ),
					'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
					'choice'		=> 'customizer_repeater_icon',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b15',
				),
				array(
					'icon_value'	=> 'fa-file-alt',
					'title'			=> esc_html__( 'Whitepaper', 'cryptoairdrop' ),
					'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
					'choice'		=> 'customizer_repeater_icon',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b16',
				),
				array(
					'icon_value'	=> 'fa-file-pdf',
					'title'			=> esc_html__( 'Reports', 'cryptoairdrop' ),
					'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
					'choice'		=> 'customizer_repeater_icon',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
				array(
					'icon_value'	=> 'fa-cubes',
					'title'			=> esc_html__( 'Structure', 'cryptoairdrop' ),
					'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
					'choice'		=> 'customizer_repeater_icon',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
			) );
		}
	}
	add_action( 'customize_register', 'cryptoairdrop_docs_default_content' );
endif;

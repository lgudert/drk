<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage info.
 *
 * @package Crypto AirDrop
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Info_Option' ) ) :

	class cryptoairdrop_Customize_Homepage_Info_Option extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'cryptoairdrop_top_info_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Tokenomics Options', 'cryptoairdrop' ),
						'section' => 'cryptoairdrop_theme_top_info',
					),
				),
					
				// Info Top Enable
				'cryptoairdrop_top_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Tokenomics Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_top_info',
					),
				),


				// Container Size
				'cryptoairdrop_top_info_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 25,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Tokenomics Width', 'cryptoairdrop' ),
						'section'			=> 'cryptoairdrop_theme_top_info',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'cryptoairdrop' ),
							'container-full'=> esc_html__( 'Container Full', 'cryptoairdrop' ),
						),
					),
				),
				
				// Template 2 - Image disable
				'cryptoairdrop_top_info_image_disable'     => array(
					'setting' => array(
						'default'			=> 'enable',
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio_buttonset',
						'priority'			=> 10,
						'label'				=> esc_html__( 'Image Container', 'cryptoairdrop' ),
						'section'			=> 'cryptoairdrop_theme_top_info',
						'choices'			=> array(
							'enable'		=> esc_html__( 'Enable', 'cryptoairdrop' ),
							'disable'		=> esc_html__( 'Disable', 'cryptoairdrop' ),
						),
					),
				),
			);
		}
	}

	new cryptoairdrop_Customize_Homepage_Info_Option();

endif;
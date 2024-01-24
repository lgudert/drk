<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage About.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_About_Option' ) ) :

	class cryptoairdrop_Customize_Homepage_About_Option extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'cryptoairdrop_about_heading'	=> array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'About Options', 'cryptoairdrop' ),
						'section' => 'cryptoairdrop_theme_about',
					),
				),
				
				// Enable
				'cryptoairdrop_about_disabled'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'About Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_about',
					),
				),
				
				// Button Text
				'cryptoairdrop_about_button_text' => array(
					'setting' => array(
						'default'           => 'Know More',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 7,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Text', 'cryptoairdrop' ),
						'section'         => 'cryptoairdrop_theme_about',
					),
				),
				
				// Button Link
				'cryptoairdrop_about_button_link' => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'url',
						'priority'        => 7,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'cryptoairdrop' ),
						'section'         => 'cryptoairdrop_theme_about',
					),
				),

				// Width
				'cryptoairdrop_about_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 25,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'About Width', 'cryptoairdrop' ),
						'section'			=> 'cryptoairdrop_theme_about',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'cryptoairdrop' ),
							'container-full'=> esc_html__( 'Container Full', 'cryptoairdrop' ),
						),
					),
				),

			);

		}

	}

	new cryptoairdrop_Customize_Homepage_About_Option();

endif;

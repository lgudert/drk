<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Contact
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Contact_Option' ) ) :

	class cryptoairdrop_Customize_Homepage_Contact_Option extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'cryptoairdrop_main_contact_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Contact Options', 'cryptoairdrop' ),
						'section' => 'cryptoairdrop_theme_contact',
					),
				),
					
				'cryptoairdrop_contact_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Contact Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_contact',
					),
				),
				
				/*Upgrade Message*/
				'cryptoairdrop_contact_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 12,
						'label'    => esc_html__( 'Contact', 'awp-companion' ),
						'section'  => 'cryptoairdrop_theme_contact',
					),
				),
				
				'cryptoairdrop_contact_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 25,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Contact Width', 'cryptoairdrop' ),
						'section'			=> 'cryptoairdrop_theme_contact',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'cryptoairdrop' ),
							'container-full'=> esc_html__( 'Container Full', 'cryptoairdrop' ),
						),
					),
				),


			);

		}

	}

	new cryptoairdrop_Customize_Homepage_Contact_Option();

endif;
<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage info.
 *
 * @package Crypto AirDrop
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Roadmap' ) ) :

	class cryptoairdrop_Customize_Homepage_Roadmap extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'cryptoairdrop_roadmap_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Road Map Options', 'cryptoairdrop' ),
						'section' => 'cryptoairdrop_theme_roadmap',
					),
				),

				// Roadmap Top Enable.
				'cryptoairdrop_roadmap_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Road Map Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_roadmap',
					),
				),

				/*Upgrade Message*/
				'cryptoairdrop_roadmap_upgrade'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 12,
						'label'    => esc_html__( 'Docs', 'awp-companion' ),
						'section'  => 'cryptoairdrop_theme_roadmap',
					),
				),

			);
		}
	}

	new cryptoairdrop_Customize_Homepage_Roadmap();

endif;
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage info.
 *
 * @package Crypto AirDrop
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Docs' ) ) :

	class cryptoairdrop_Customize_Homepage_Docs extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'cryptoairdrop_docs_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Docs Options', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_docs',
					),
				),

				// Docs Top Enable.
				'cryptoairdrop_docs_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Docs Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_docs',
					),
				),

				/*Upgrade Message*/
				'cryptoairdrop_docs_upgrade'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 12,
						'label'    => esc_html__( 'Docs', 'awp-companion' ),
						'section'  => 'cryptoairdrop_theme_docs',
					),
				),

			);
		}
	}

	new cryptoairdrop_Customize_Homepage_Docs();

endif;

<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Front-Page WooCommerce
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_WooCommerce_Option' ) ) :

	class cryptoairdrop_Customize_Homepage_WooCommerce_Option extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'cryptoairdrop_main_slider_heading'	=> array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'WooCommerce Options', 'cryptoairdrop' ),
						'section' => 'cryptoairdrop_theme_woocommerce',
					),
				),
				
				// Slider Enable
				'cryptoairdrop_woocommerce_disabled'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'WooCommerce Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_woocommerce',
					),
				),
				
				'cryptoairdrop_woocommerce_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 99,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'WooCommerce Width', 'cryptoairdrop' ),
						'section'			=> 'cryptoairdrop_theme_woocommerce',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'cryptoairdrop' ),
							'container-full'=> esc_html__( 'Container Full', 'cryptoairdrop' ),
						),
					),
				),
				
			);
		}
	}

	new cryptoairdrop_Customize_Homepage_WooCommerce_Option();

endif;
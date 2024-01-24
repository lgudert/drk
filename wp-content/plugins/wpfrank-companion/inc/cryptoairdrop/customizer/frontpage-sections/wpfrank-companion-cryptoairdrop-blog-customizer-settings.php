<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Blog.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Blog_Option' ) ) :

	class cryptoairdrop_Customize_Homepage_Blog_Option extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'cryptoairdrop_main_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Blog Options', 'cryptoairdrop' ),
						'section' => 'cryptoairdrop_theme_blog',
					),
				),
					
				'cryptoairdrop_blog_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Blog Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_blog',
					),
				),
				
				// Blog Display Count
				'cryptoairdrop_post_display_count' => array('setting' => array(
					'default'           => 3,
					'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'select',
						'priority'        => 10,
						'is_default_type' => true,
						'label'           => esc_html__( 'Select the Number of Posts', 'cryptoairdrop' ),
						'section'         => 'cryptoairdrop_theme_blog',
						'choices'         => array(
							3 	=> 3, 
							6 	=> 6, 
							9 	=> 9, 
							12 	=> 12,
						),
					),
				),
				
				'cryptoairdrop_blog_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 99,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Blog Width', 'cryptoairdrop' ),
						'section'			=> 'cryptoairdrop_theme_blog',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'cryptoairdrop' ),
							'container-full'=> esc_html__( 'Container Full', 'cryptoairdrop' ),
						),
					),
				),

			);
		}
	}

	new cryptoairdrop_Customize_Homepage_Blog_Option();

endif;

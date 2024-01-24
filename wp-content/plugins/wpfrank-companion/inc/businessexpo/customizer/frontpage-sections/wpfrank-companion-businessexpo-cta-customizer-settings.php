<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Call to action
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Cta_Option' ) ) :

	class businessexpo_Customize_Homepage_Cta_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'businessexpo_main_cta_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'CallOut Options', 'wpfrank-companion' ),
						'section' => 'businessexpo_theme_cta',
					),
				),
			
			    	
				'businessexpo_cta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_cta',
					),
				),
				
				'businessexpo_cta_button_link' => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 10,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'wpfrank-companion' ),
						'section'         => 'businessexpo_theme_cta',
					),
				),


			);

		}

	}

	new businessexpo_Customize_Homepage_Cta_Option();

endif;
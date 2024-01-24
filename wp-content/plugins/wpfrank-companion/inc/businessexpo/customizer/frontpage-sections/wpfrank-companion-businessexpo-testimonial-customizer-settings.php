<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Testimonial.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Testimonial_Option' ) ) :

	class businessexpo_Customize_Homepage_Testimonial_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_main_testimonial_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Testimonial Options', 'wpfrank-companion' ),
						'section' => 'businessexpo_theme_testimonial',
					),
				),
					
				'businessexpo_testimonial_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Testimonial Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_testimonial',
					),
				),
				
				'businessexpo_testimonial_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Testimonial', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_testimonial',
					),
				),
			);
		}
	}

	new businessexpo_Customize_Homepage_Testimonial_Option();

endif;
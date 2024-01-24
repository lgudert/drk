<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Service.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Service_Option' ) ) :

	class businessexpo_Customize_Homepage_Service_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_main_service_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Service Options', 'wpfrank-companion' ),
						'section' => 'businessexpo_theme_service',
					),
				),

				'businessexpo_service_area_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Service Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_service',
					),
				),

				'businessexpo_service_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 25,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Service Width', 'businessexpo' ),
						'section'			=> 'businessexpo_theme_service',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'businessexpo' ),
							'container-full'=> esc_html__( 'Container Full', 'businessexpo' ),
						),
						//'active_callback' => 'businessexpo_service_container_size',
					),
				),
				// column layout.
				'businessexpo_service_column_layout'	=> array(
					'setting'	=> array(
						'default'           => 'col-md-4',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control'	=> array(
						'type'		=> 'radio_image',
						'priority'	=> 30,
						'label'		=> esc_html__( 'Column Layout', 'businessexpo' ),
						'section'	=> 'businessexpo_theme_service',
						'choices'	=> array(
							'col-md-6'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-2.png',
							'col-md-4'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-3.png',
						),
						//'active_callback' => 'businessexpo_service_column_layout',
					),
				),

				'businessexpo_service_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Service', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_service',
					),
				),

			);

		}

	}

	new businessexpo_Customize_Homepage_Service_Option();

endif;

<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Call to action
 *
 * @package businessexpo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Funfact_Option' ) ) :

	class businessexpo_Customize_Homepage_Funfact_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'businessexpo_main_funfact_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Funfact Options', 'businessexpo' ),
						'section' => 'businessexpo_theme_funfact',
					),
				),
			
			    	
				'businessexpo_funfact_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_theme_funfact',
					),
				),

				'businessexpo_funfact_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 25,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Funfact Width', 'businessexpo' ),
						'section'			=> 'businessexpo_theme_funfact',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'businessexpo' ),
							'container-full'=> esc_html__( 'Container Full', 'businessexpo' ),
						),
						//'active_callback' => 'businessexpo_funfact_container_size',
					),
				),

				// column layout
				'businessexpo_funfact_column_layout'	=> array(
					'setting'	=> array(
						'default'           => 'col-md-3',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control'	=> array(
						'type'		=> 'radio_image',
						'priority'	=> 30,
						'label'		=> esc_html__( 'Column Layout', 'businessexpo' ),
						'section'	=> 'businessexpo_theme_funfact',
						'choices'	=> array(
							'col-md-6'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-2.png',
							'col-md-4'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-3.png',
							'col-md-3'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-4.png',
						),
						//'active_callback' => 'businessexpo_funfact_column_layout',
					),
				),

				'businessexpo_funfact_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Funfact', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_funfact',
					),
				),

			);
		}

	}

	new businessexpo_Customize_Homepage_Funfact_Option();

endif;
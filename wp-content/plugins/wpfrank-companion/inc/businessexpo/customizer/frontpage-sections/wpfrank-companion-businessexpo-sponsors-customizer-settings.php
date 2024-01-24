<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Client.
 *
 * @package businessexpo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Client_Option' ) ) :

	class businessexpo_Customize_Homepage_Client_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_client_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Client Options', 'businessexpo' ),
						'section' => 'businessexpo_theme_client',
					),
				),

				// Client Enable.
				'businessexpo_client_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Client Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_theme_client',
					),
				),

				// Client Autoplay.
				'businessexpo_client_autoplay'           => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 15,
						'label'    => esc_html__( 'Client Autoplay', 'businessexpo' ),
						'section'  => 'businessexpo_theme_client',
						//'active_callback' => 'businessexpo_client_autoplay',
					),
				),

				// Client Animation Speed.
				'businessexpo_client_animation_speed' => array('setting' => array(
					'default'           => '4000',
					'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'select',
						'priority'        => 20,
						'is_default_type' => true,
						'label'           => esc_html__( 'Client Animation Speed', 'businessexpo' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'businessexpo' ),
						'section'         => 'businessexpo_theme_client',
						'choices'         => array(
							'2000' => esc_html__( '2.0', 'businessexpo' ),
							'3000' => esc_html__( '3.0', 'businessexpo' ),
							'4000' => esc_html__( '4.0', 'businessexpo' ),
							'5000' => esc_html__( '5.0', 'businessexpo' ),
							'6000' => esc_html__( '6.0', 'businessexpo' ),
						),
						//'active_callback' => 'businessexpo_client_animation_speed',
					),
				),

				'businessexpo_client_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 25,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Client Width', 'businessexpo' ),
						'section'			=> 'businessexpo_theme_client',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'businessexpo' ),
							'container-full'=> esc_html__( 'Container Full', 'businessexpo' ),
						),
						//'active_callback' => 'businessexpo_client_content',
					),
				),

				// column layout.
				'businessexpo_client_column_layout'	=> array(
					'setting'	=> array(
						'default'           => 4,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control'	=> array(
						'type'		=> 'radio_image',
						'priority'	=> 30,
						'label'		=> esc_html__( 'Column Layout', 'businessexpo' ),
						'section'	=> 'businessexpo_theme_client',
						'choices'	=> array(
							'2'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-2.png',
							'3'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-3.png',
							'4'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-4.png',
						),
						//'active_callback' => 'businessexpo_client_column_layout',
					),
				),

				'businessexpo_client_upgrade'	=> array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 13,
						'label'    => esc_html__( 'Client', 'awp-companion' ),
						'section'  => 'businessexpo_theme_client',
					),
				),
			);
		}
	}

	new businessexpo_Customize_Homepage_Client_Option();

endif;
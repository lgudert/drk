<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Main Team.
 *
 * @package businessexpo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Team_Option' ) ) :

	class businessexpo_Customize_Homepage_Team_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_team_heading'	=> array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Team Options', 'businessexpo' ),
						'section' => 'businessexpo_theme_team',
					),
				),

				// Team Enable.
				'businessexpo_team_disabled'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Team Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_theme_team',
					),
				),

				// Team Autoplay.
				'businessexpo_team_autoplay_disable'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 20,
						'label'    => esc_html__( 'AutoPlay Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_theme_team',
						//'active_callback' => 'businessexpo_team_autoplay_disable',
					),
				),

				// Team Animation Speed.
				'businessexpo_team_animation_speed' => array('setting' => array(
					'default'           => '4000',
					'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'select',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Team Animation Speed', 'businessexpo' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'businessexpo' ),
						'section'         => 'businessexpo_theme_team',
						'choices'         => array(
							'2000' => esc_html__( '2.0', 'businessexpo' ),
							'3000' => esc_html__( '3.0', 'businessexpo' ),
							'4000' => esc_html__( '4.0', 'businessexpo' ),
							'5000' => esc_html__( '5.0', 'businessexpo' ),
							'6000' => esc_html__( '6.0', 'businessexpo' ),
						),
						//'active_callback' => 'businessexpo_team_animation_speed',
					),
				),

				'businessexpo_team_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 30,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Team Width' , 'businessexpo' ),
						'section'			=> 'businessexpo_theme_team',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'businessexpo' ),
							'container-full'=> esc_html__( 'Container Full', 'businessexpo' ),
						),
						//'active_callback' => 'businessexpo_team_content',
					),
				),

				// column layout.
				'businessexpo_team_column_layout'	=> array(
					'setting'	=> array(
						'default'           => '3',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control'	=> array(
						'type'		=> 'radio_image',
						'priority'	=> 30,
						'label'		=> esc_html__( 'Column Layout', 'businessexpo' ),
						'section'	=> 'businessexpo_theme_team',
						'choices'	=> array(
							'2'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-2.png',
							'3'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/icons/column-3.png',
						),
						//'active_callback' => 'businessexpo_team_column_layout',
					),
				),

				'businessexpo_team_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 15,
						'label'    => esc_html__( 'Team', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_team',
					),
				),
			);
		}
	}

	new businessexpo_Customize_Homepage_Team_Option();

endif;
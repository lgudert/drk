<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Main Slider.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Slider_Option' ) ) :

	class businessexpo_Customize_Homepage_Slider_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_main_slider_heading'	=> array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Slider Options', 'wpfrank-companion' ),
						'section' => 'businessexpo_main_theme_slider',
					),
				),

				'businessexpo_main_slider_disabled'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Slider Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_main_theme_slider',
					),
				),

				// Slider Autoplay.
				'businessexpo_main_slider_autoplay_disable'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 15,
						'label'    => esc_html__( 'AutoPlay Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_main_theme_slider',
						//'active_callback'	=> 'businessexpo_main_slider_autoplay_disable',
					),
				),

				// Slider Fade Animation.
				'businessexpo_main_slider_animation'	=> array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 20,
						'label'    => esc_html__( 'Fade Animation Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_main_theme_slider',
						//'active_callback'	=> 'businessexpo_main_slider_animation',
					),
				),

				// Slider Overlay.
				'businessexpo_main_slider_overlay_disable'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 25,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_main_theme_slider',
						//'active_callback'	=> 'businessexpo_main_slider_overlay_disable',
					),
				),

				// Slider Overlay color.
				'businessexpo_main_slider_overlay_color' => array(
					'setting' => array(
						'default'           => 'rgba(0,0,0,0.69)',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 30,
						'label'           => esc_html__( 'Slider Overlay Color', 'businessexpo' ),
						'section'         => 'businessexpo_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						//'active_callback'	=> 'businessexpo_main_slider_overlay_color',
					),
				),

				// Slider Animation Speed.
				'businessexpo_main_slider_animation_speed' => array('setting' => array(
					'default'           => '4000',
					'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'select',
						'priority'        => 35,
						'is_default_type' => true,
						'label'           => esc_html__( 'Slider Animation Speed', 'businessexpo' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'businessexpo' ),
						'section'         => 'businessexpo_main_theme_slider',
						'choices'         => array(
							'2000' => esc_html__( '2.0', 'businessexpo' ),
							'3000' => esc_html__( '3.0', 'businessexpo' ),
							'4000' => esc_html__( '4.0', 'businessexpo' ),
							'5000' => esc_html__( '5.0', 'businessexpo' ),
							'6000' => esc_html__( '6.0', 'businessexpo' ),
						),
						//'active_callback'	=> 'businessexpo_main_slider_animation_speed',
					),
				),

				// Slide Title Color.
				'businessexpo_main_slider_caption_title_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 40,
						'label'           => esc_html__( 'Slide Title Color', 'businessexpo' ),
						'description'	  => esc_html__( 'Set the color for slide title.', 'businessexpo' ),
						'section'         => 'businessexpo_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						//'active_callback'	=> 'businessexpo_main_slider_caption_title_color',
					),
				),

				// Slide SubTitle Color.
				'businessexpo_main_slider_caption_subtitle_title_color' => array(
					'setting' => array(
						'default'           => '#FF4081',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 50,
						'label'           => esc_html__( 'Slide Subtitle Color', 'businessexpo' ),
						'description'	  => esc_html__( 'Set the color for slide subtitle.', 'businessexpo' ),
						'section'         => 'businessexpo_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						//'active_callback'	=> 'businessexpo_main_slider_caption_subtitle_title_color',
					),
				),

				// Slide Description Color.
				'businessexpo_main_slider_caption_descrption_title_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 60,
						'label'           => esc_html__( 'Slide Description Color', 'businessexpo' ),
						'description'	  => esc_html__( 'Set the color for slide description.', 'businessexpo' ),
						'section'         => 'businessexpo_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
						//'active_callback'	=> 'businessexpo_main_slider_caption_descrption_title_color',
					),
				),

				'businessexpo_slider_upgrade'	=> array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Slides', 'wpfrank-companion' ),
						'section'  => 'businessexpo_main_theme_slider',
					),
				),

			);

		}

	}

	new businessexpo_Customize_Homepage_Slider_Option();

endif;

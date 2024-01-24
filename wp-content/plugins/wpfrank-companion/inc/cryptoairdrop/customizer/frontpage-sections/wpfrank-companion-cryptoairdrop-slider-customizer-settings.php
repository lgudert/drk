<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Main Slider.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;

if( 'Crypto AirDrop' == $activate_theme ) {
	if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Slider_Option' ) ) :

		class cryptoairdrop_Customize_Homepage_Slider_Option extends cryptoairdrop_Customize_Base_Option {

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
							'label'   => esc_html__( 'Slider Options', 'cryptoairdrop' ),
							'section' => 'cryptoairdrop_main_theme_slider',
						),
					),
					
					// Slider Enable
					'cryptoairdrop_main_slider_disabled'	=> array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Slider Enable/Disable', 'cryptoairdrop' ),
							'section'  => 'cryptoairdrop_main_theme_slider',
						),
					),

					// Media Type
					'cryptoairdrop_main_slider_media_type'     => array(
						'setting' => array(
							'default'			=> 'slide_video',
							'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'				=> 'radio_buttonset',
							'priority'			=> 8,
							'label'				=> esc_html__( 'Media Type', 'cryptoairdrop' ),
							'section'			=> 'cryptoairdrop_main_theme_slider',
							'choices'			=> array(
								'slide_image'		=> esc_html__( 'Image', 'cryptoairdrop' ),
								'slide_video'		=> esc_html__( 'Video', 'cryptoairdrop' ),
							),
						),
					),
					
				);
			}
		}

		new cryptoairdrop_Customize_Homepage_Slider_Option();

	endif;
} 
if( 'Crypto Compare' == $activate_theme ) {
	if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Slider_Option' ) ) :

		class cryptoairdrop_Customize_Homepage_Slider_Option extends cryptoairdrop_Customize_Base_Option {

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
							'label'   => esc_html__( 'Slider Options', 'cryptoairdrop' ),
							'section' => 'cryptoairdrop_main_theme_slider',
						),
					),
					
					// Slider Enable
					'cryptoairdrop_main_slider_disabled'	=> array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Slider Enable/Disable', 'cryptoairdrop' ),
							'section'  => 'cryptoairdrop_main_theme_slider',
						),
					),

					// Media Type
					'cryptoairdrop_main_slider_media_type'     => array(
						'setting' => array(
							'default'			=> 'slide_image',
							'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'				=> 'radio_buttonset',
							'priority'			=> 8,
							'label'				=> esc_html__( 'Media Type', 'cryptoairdrop' ),
							'section'			=> 'cryptoairdrop_main_theme_slider',
							'choices'			=> array(
								'slide_image'		=> esc_html__( 'Image', 'cryptoairdrop' ),
								'slide_video'		=> esc_html__( 'Video', 'cryptoairdrop' ),
							),
						),
					),
					
				);
			}
		}

		new cryptoairdrop_Customize_Homepage_Slider_Option();

	endif;
}
if( 'Crypto Mining' == $activate_theme ) {
	if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Slider_Option' ) ) :

		class cryptoairdrop_Customize_Homepage_Slider_Option extends cryptoairdrop_Customize_Base_Option {

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
							'label'   => esc_html__( 'Slider Options', 'cryptoairdrop' ),
							'section' => 'cryptoairdrop_main_theme_slider',
						),
					),
					
					// Slider Enable
					'cryptoairdrop_main_slider_disabled'	=> array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Slider Enable/Disable', 'cryptoairdrop' ),
							'section'  => 'cryptoairdrop_main_theme_slider',
						),
					),

					// Media Type
					'cryptoairdrop_main_slider_media_type'     => array(
						'setting' => array(
							'default'			=> 'slide_video',
							'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'				=> 'radio_buttonset',
							'priority'			=> 8,
							'label'				=> esc_html__( 'Media Type', 'cryptoairdrop' ),
							'section'			=> 'cryptoairdrop_main_theme_slider',
							'choices'			=> array(
								'slide_image'		=> esc_html__( 'Image', 'cryptoairdrop' ),
								'slide_video'		=> esc_html__( 'Video', 'cryptoairdrop' ),
							),
						),
					),
					
				);
			}
		}

		new cryptoairdrop_Customize_Homepage_Slider_Option();

	endif;
} 
if( 'Crypto Token' == $activate_theme ) {
	if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Slider_Option' ) ) :

		class cryptoairdrop_Customize_Homepage_Slider_Option extends cryptoairdrop_Customize_Base_Option {

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
							'label'   => esc_html__( 'Slider Options', 'cryptoairdrop' ),
							'section' => 'cryptoairdrop_main_theme_slider',
						),
					),
					
					// Slider Enable
					'cryptoairdrop_main_slider_disabled'	=> array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Slider Enable/Disable', 'cryptoairdrop' ),
							'section'  => 'cryptoairdrop_main_theme_slider',
						),
					),

					// Media Type
					'cryptoairdrop_main_slider_media_type'     => array(
						'setting' => array(
							'default'			=> 'slide_image',
							'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'				=> 'radio_buttonset',
							'priority'			=> 8,
							'label'				=> esc_html__( 'Media Type', 'cryptoairdrop' ),
							'section'			=> 'cryptoairdrop_main_theme_slider',
							'choices'			=> array(
								'slide_image'		=> esc_html__( 'Image', 'cryptoairdrop' ),
								'slide_video'		=> esc_html__( 'Video', 'cryptoairdrop' ),
							),
						),
					),
					
				);
			}
		}

		new cryptoairdrop_Customize_Homepage_Slider_Option();

	endif;
} 
if( 'Meme Token' == $activate_theme ) {
	if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_Slider_Option' ) ) :

		class cryptoairdrop_Customize_Homepage_Slider_Option extends cryptoairdrop_Customize_Base_Option {

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
							'label'   => esc_html__( 'Slider Options', 'cryptoairdrop' ),
							'section' => 'cryptoairdrop_main_theme_slider',
						),
					),
					
					// Slider Enable
					'cryptoairdrop_main_slider_disabled'	=> array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Slider Enable/Disable', 'cryptoairdrop' ),
							'section'  => 'cryptoairdrop_main_theme_slider',
						),
					),

					// Media Type
					'cryptoairdrop_main_slider_media_type'     => array(
						'setting' => array(
							'default'			=> 'slide_image',
							'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'				=> 'radio_buttonset',
							'priority'			=> 8,
							'label'				=> esc_html__( 'Media Type', 'cryptoairdrop' ),
							'section'			=> 'cryptoairdrop_main_theme_slider',
							'choices'			=> array(
								'slide_image'		=> esc_html__( 'Image', 'cryptoairdrop' ),
								'slide_video'		=> esc_html__( 'Video', 'cryptoairdrop' ),
							),
						),
					),
					
				);
			}
		}

		new cryptoairdrop_Customize_Homepage_Slider_Option();

	endif;
} 
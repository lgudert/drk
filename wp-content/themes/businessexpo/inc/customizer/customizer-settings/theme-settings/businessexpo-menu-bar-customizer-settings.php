<?php
/**
 * MenuBar.
 *
 * @package businessexpo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Menu_Bar_Option' ) ) :

	/**
	 * Menu option.
	 */
	class businessexpo_Customize_Menu_Bar_Option extends businessexpo_Customize_Base_Option {

		public function elements() {

			return array(

				'businessexpo_main_menu_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Menu Settings', 'businessexpo' ),
						'section'  => 'businessexpo_theme_menu_bar',
					),
				),

				'businessexpo_menu_overlap'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Menu Overlap', 'businessexpo' ),
						'section'  => 'businessexpo_theme_menu_bar',
					),
				),

				'businessexpo_menu_style'        => array(
					'setting' => array(
						'default'           => 'sticky',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 5,
						'is_default_type' => true,
						'label'           => esc_html__( 'Menu Style', 'businessexpo' ),
						'section'         => 'businessexpo_theme_menu_bar',
						'choices'         => array(
							'sticky' => esc_html__( 'Sticky', 'businessexpo' ),
							'static' => esc_html__( 'Static', 'businessexpo' ),
						),
					),
				),

			);

		}

	}

	new businessexpo_Customize_Menu_Bar_Option();

endif;

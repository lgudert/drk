<?php
/**
 * Footer widgets.
 *
 * @package     businessexpo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Footer_Widget_Option' ) ) :

	/**
	 * Option: Footer widget.
	 */
	class businessexpo_Customize_Footer_Widget_Option extends businessexpo_Customize_Base_Option {

		public function elements() {

			return array(

				'businessexpo_footer_widgets_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Footer Widget Area Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_footer_widgets',
					),
				),

				'businessexpo_footer_container_size'  => array(
					'setting' => array(
						'default'           => 'container',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Footer Width', 'businessexpo' ),
						'section'         => 'businessexpo_footer_widgets',
						'choices'         => array(
							'container'      => esc_html__( 'Container', 'businessexpo' ),
							'container-full' => esc_html__( 'Container Full', 'businessexpo' ),
						),
					),
				),

			);

		}

	}

	new businessexpo_Customize_Footer_Widget_Option();

endif;

<?php
/**
 * Footer Copyright.
 *
 * @package     businessexpo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Loading_Icon_Option' ) ) :

	/**
	 * Footer Copyright.
	 */
	class businessexpo_Customize_Loading_Icon_Option extends businessexpo_Customize_Base_Option {

		public function elements() {

			return array(

				'businessexpo_loading_icon_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Loading Icon Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_loading_icon_settings',
					),
				),

			);

		}

	}

	new businessexpo_Customize_Loading_Icon_Option();

endif;

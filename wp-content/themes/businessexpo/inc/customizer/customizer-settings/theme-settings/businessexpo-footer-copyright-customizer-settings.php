<?php
/**
 * Footer Copyright.
 *
 * @package     businessexpo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Footer_Copyright_Option' ) ) :

	/**
	 * Footer Copyright.
	 */
	class businessexpo_Customize_Footer_Copyright_Option extends businessexpo_Customize_Base_Option {

		public function elements() {

			return array(

				'businessexpo_footer_copyright_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Footer Copyright Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_footer_copyright',
					),
				),

			);

		}

	}

	new businessexpo_Customize_Footer_Copyright_Option();

endif;

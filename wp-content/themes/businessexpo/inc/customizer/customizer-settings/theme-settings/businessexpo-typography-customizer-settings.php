<?php
/**
 * Typography.
 *
 * @package     businessexpo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== TYPOGRAPHY ==========================================*/
if ( ! class_exists( 'businessexpo_Customize_Theme_Typography_Option' ) ) :

	/**
	 * Theme Typography option.
	 */
	class businessexpo_Customize_Theme_Typography_Option extends businessexpo_Customize_Base_Option {

		public function elements() {

			return array(

				/* ---------- Enable/Disable TYPOGRAPHY -------------- */

					'businessexpo_typography_disabled' => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Enable Typography', 'businessexpo' ),
							'section'  => 'businessexpo_enable_disable_typography',
						),
					),

					'businessexpo_rtl_disabled' => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Enable Right-to-left', 'businessexpo' ),
							'section'  => 'businessexpo_rtl_settings',
						),
					),
			);

		}

	}

	new businessexpo_Customize_Theme_Typography_Option();

endif;

<?php
/**
 * Footer Copyright.
 *
 * @package     businessexpo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Topbar_Option' ) ) :

	/**
	 * Footer Copyright.
	 */
	class businessexpo_Customize_Topbar_Option extends businessexpo_Customize_Base_Option {

		public function elements() {

			return array(

				'businessexpo_topbar_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Top Bar Enable/Disable', 'businessexpo' ),
						'section'  => 'businessexpo_topbar_settings',
					),
				),              // Facebook Icon
				/*
				 'businessexpo_fb_link_disable'   => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 20,
						'label'    => esc_html__('Enable Facebook Icon?', 'businessexpo'),
						'section'  => 'businessexpo_topbar_settings',
					),
				), */

				// Twitter Icon
				/*
				 'businessexpo_tweet_link_disable'    => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 30,
						'label'    => esc_html__('Enable Twitter Icon?', 'businessexpo'),
						'section'  => 'businessexpo_topbar_settings',
					),
				),		 */

				// linkedin Icon
				/*
				 'businessexpo_linkedin_link_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 40,
						'label'    => esc_html__('Enable Linkedin Icon?', 'businessexpo'),
						'section'  => 'businessexpo_topbar_settings',
					),
				),		 */

			);

		}

	}

	new businessexpo_Customize_Topbar_Option();

endif;

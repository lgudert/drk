<?php

class businessexpo_Customizer_Notify {

	private $recommended_actions;


	private $recommended_plugins;


	private static $instance;


	private $recommended_actions_title;


	private $recommended_plugins_title;


	private $dismiss_button;


	private $install_button_label;


	private $activate_button_label;


	private $businessexpo_deactivate_button_label;


	public static function init( $config ) {
		$instance = null;
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof businessexpo_Customizer_Notify ) ) {
			$instance = new businessexpo_Customizer_Notify();
			if ( ! empty( $config ) && is_array( $config ) ) {
				$instance->setup_config( $config );
				$instance->setup_actions();
			}
			self::$instance = $instance;
		}
	}


	public function setup_config() {

		global $businessexpo_customizer_notify_recommended_plugins;
		global $businessexpo_customizer_notify_recommended_actions;

		global $install_button_label;
		global $activate_button_label;
		global $businessexpo_deactivate_button_label;

		$this->recommended_actions = isset( $this->config['recommended_actions'] ) ? $this->config['recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->recommended_actions_title = isset( $this->config['recommended_actions_title'] ) ? $this->config['recommended_actions_title'] : '';
		$this->recommended_plugins_title = isset( $this->config['recommended_plugins_title'] ) ? $this->config['recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$businessexpo_customizer_notify_recommended_plugins = array();
		$businessexpo_customizer_notify_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$businessexpo_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->recommended_actions ) ) {
			$businessexpo_customizer_notify_recommended_actions = $this->recommended_actions;
		}

		$install_button_label                 = isset( $this->config['install_button_label'] ) ? $this->config['install_button_label'] : '';
		$activate_button_label                = isset( $this->config['activate_button_label'] ) ? $this->config['activate_button_label'] : '';
		$businessexpo_deactivate_button_label = isset( $this->config['businessexpo_deactivate_button_label'] ) ? $this->config['businessexpo_deactivate_button_label'] : '';

	}


	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'businessexpo_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'businessexpo_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'businessexpo_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'businessexpo_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}


	public function businessexpo_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'businessexpo-customizer-notify-css', get_template_directory_uri() . '/inc/customizer/customizer-notice/css/customizer-notify.css', array() );

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'businessexpo-customizer-notify-js', get_template_directory_uri() . '/inc/customizer/customizer-notice/js/customizer-notify.js', array( 'customize-controls' ) );
		wp_localize_script(
			'businessexpo-customizer-notify-js',
			'businessexpoCustomizercompanionObject',
			array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'businessexpo' ),
			)
		);

	}


	public function businessexpo_plugin_notification_customize_register( $wp_customize ) {

		require_once get_template_directory() . '/inc/customizer/customizer-notice/businessexpo-customizer-notify-section.php';

		$wp_customize->register_section_type( 'businessexpo_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new businessexpo_Customizer_Notify_Section(
				$wp_customize,
				'businessexpo-customizer-notify-section',
				array(
					'title'          => $this->recommended_actions_title,
					'plugin_text'    => $this->recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}


	public function businessexpo_customizer_notify_dismiss_recommended_action_callback() {

		global $businessexpo_customizer_notify_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_attr($action_id);

		if ( ! empty( $action_id ) ) {

			if ( get_option( 'businessexpo_customizer_notify_show' ) ) {

				$businessexpo_customizer_notify_show_recommended_actions = get_option( 'businessexpo_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$businessexpo_customizer_notify_show_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$businessexpo_customizer_notify_show_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'businessexpo_customizer_notify_show', $businessexpo_customizer_notify_show_recommended_actions );

			} else {
				$businessexpo_customizer_notify_show_recommended_actions = array();
				if ( ! empty( $businessexpo_customizer_notify_recommended_actions ) ) {
					foreach ( $businessexpo_customizer_notify_recommended_actions as $businessexpo_lite_customizer_notify_recommended_action ) {
						if ( $businessexpo_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$businessexpo_customizer_notify_show_recommended_actions[ $businessexpo_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$businessexpo_customizer_notify_show_recommended_actions[ $businessexpo_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'businessexpo_customizer_notify_show', $businessexpo_customizer_notify_show_recommended_actions );
				}
			}
		}
		die();
	}


	public function businessexpo_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_attr($action_id);

		if ( ! empty( $action_id ) ) {

			$businessexpo_lite_customizer_notify_show_recommended_plugins = get_option( 'businessexpo_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$businessexpo_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$businessexpo_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'businessexpo_customizer_notify_show_recommended_plugins', $businessexpo_lite_customizer_notify_show_recommended_plugins );
		}
		die();
	}

}

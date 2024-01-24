<?php

class Renoval_Customizer_Notify {

	private $recommended_actions;

	
	private $recommended_plugins;

	
	private static $instance;

	
	private $recommended_actions_title;

	
	private $recommended_plugins_title;

	
	private $dismiss_button;

	
	private $install_button_label;

	
	private $activate_button_label;

	
	private $renoval_deactivate_button_label;
	
	
	private $config;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Renoval_Customizer_Notify ) ) {
			self::$instance = new Renoval_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $renoval_customizer_notify_recommended_plugins;
		global $renoval_customizer_notify_recommended_actions;

		global $install_button_label;
		global $activate_button_label;
		global $renoval_deactivate_button_label;

		$this->recommended_actions = isset( $this->config['recommended_actions'] ) ? $this->config['recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->recommended_actions_title = isset( $this->config['recommended_actions_title'] ) ? $this->config['recommended_actions_title'] : '';
		$this->recommended_plugins_title = isset( $this->config['recommended_plugins_title'] ) ? $this->config['recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$renoval_customizer_notify_recommended_plugins = array();
		$renoval_customizer_notify_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$renoval_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->recommended_actions ) ) {
			$renoval_customizer_notify_recommended_actions = $this->recommended_actions;
		}

		$install_button_label    = isset( $this->config['install_button_label'] ) ? $this->config['install_button_label'] : '';
		$activate_button_label   = isset( $this->config['activate_button_label'] ) ? $this->config['activate_button_label'] : '';
		$renoval_deactivate_button_label = isset( $this->config['renoval_deactivate_button_label'] ) ? $this->config['renoval_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'renoval_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'renoval_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'renoval_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'renoval_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function renoval_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'renoval-customizer-notify-css', get_template_directory_uri() . '/inc/customizer-notify/css/renoval-customizer-notify.css', array());

		wp_enqueue_style( 'renoval-plugin-install' );
		wp_enqueue_script( 'renoval-plugin-install' );
		wp_add_inline_script( 'renoval-plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'renoval-updates' );

		wp_enqueue_script( 'renoval-customizer-notify-js', get_template_directory_uri() . '/inc/customizer-notify/js/renoval-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'renoval-customizer-notify-js', 'RenovalCustomizercompanionObject', array(
				'renoval_ajaxurl'            => esc_url(admin_url( 'admin-ajax.php' )),
				'renoval_template_directory' => esc_url(get_template_directory_uri()),
				'renoval_base_path'          => esc_url(admin_url()),
				'renoval_activating_string'  => __( 'Activating', 'renoval' ),
			)
		);

	}

	
	public function renoval_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/inc/customizer-notify/renoval-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Renoval_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Renoval_Customizer_Notify_Section(
				$wp_customize,
				'Renoval-customizer-notify-section',
				array(
					'title'          => $this->recommended_actions_title,
					'plugin_text'    => $this->recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function renoval_customizer_notify_dismiss_recommended_action_callback() {

		global $renoval_customizer_notify_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html($action_id); 

		if ( ! empty( $action_id ) ) {

			
			if ( get_theme_mod( 'renoval_customizer_notify_show' ) ) {

				$renoval_customizer_notify_show_recommended_actions = get_theme_mod( 'renoval_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$renoval_customizer_notify_show_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$renoval_customizer_notify_show_recommended_actions[ $action_id ] = false;
						break;
				}
				echo esc_html($renoval_customizer_notify_show_recommended_actions);
				
			} else {
				$renoval_customizer_notify_show_recommended_actions = array();
				if ( ! empty( $renoval_customizer_notify_recommended_actions ) ) {
					foreach ( $renoval_customizer_notify_recommended_actions as $renoval_lite_customizer_notify_recommended_action ) {
						if ( $renoval_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$renoval_customizer_notify_show_recommended_actions[ $renoval_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$renoval_customizer_notify_show_recommended_actions[ $renoval_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					echo esc_html($renoval_customizer_notify_show_recommended_actions);
				}
			}
		}
		die(); 
	}

	
	public function renoval_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html($action_id); 

		if ( ! empty( $action_id ) ) {

			$renoval_lite_customizer_notify_show_recommended_plugins = get_theme_mod( 'renoval_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$renoval_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$renoval_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			echo esc_html($renoval_customizer_notify_show_recommended_actions);
		}
		die(); 
	}

}

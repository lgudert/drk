<?php
/* Notifications in customizer */


require get_template_directory() . '/inc/customizer-notify/renoval-customizer-notify.php';
$renoval_config_customizer = array(
	'recommended_plugins'       => array(
		'clever-fox' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Cleverfox</strong> plugin for taking full advantage of all the features this theme has to offer.', 'renoval')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'renoval' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'renoval' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'renoval' ),
	'activate_button_label'     => esc_html__( 'Activate', 'renoval' ),
	'renoval_deactivate_button_label'   => esc_html__( 'Deactivate', 'renoval' ),
);
renoval_Customizer_Notify::init( apply_filters( 'renoval_customizer_notify_array', $renoval_config_customizer ) );
?>
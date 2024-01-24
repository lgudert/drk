<?php

// Client section
if ( ! function_exists( 'businessexpo_client_default_customize_register' ) ) :
	add_action( 'customize_register', 'businessexpo_client_default_customize_register' );
	function businessexpo_client_default_customize_register( $wp_customize ) {
		// businessexpo default client data.
		$businessexpo_client_data = $wp_customize->get_setting( 'businessexpo_client_content' );
		if ( ! empty( $businessexpo_client_data ) ) {
			$businessexpo_client_data->default = json_encode(
				array(
					array(

						'link'         => '#',
						'image_url'    => wpfrank_companion_plugin_url . '/inc/businessexpo/img/clients/jquey-logo.png',
						'open_new_tab' => 'no',
						'id'           => 'customizer_repeater_56d7ea7f40b96',
					),

					array(

						'link'         => '#',
						'image_url'    => wpfrank_companion_plugin_url . '/inc/businessexpo/img/clients/logo-joomla-grey.png',
						'open_new_tab' => 'no',
						'id'           => 'customizer_repeater_56d7ea7f40b97',
					),

					array(

						'link'         => '#',
						'image_url'    => wpfrank_companion_plugin_url . '/inc/businessexpo/img/clients/php-logo.png',
						'open_new_tab' => 'no',
						'id'           => 'customizer_repeater_56d7ea7f40b98',

					),

					array(
						'link'         => '#',
						'image_url'    => wpfrank_companion_plugin_url . '/inc/businessexpo/img/clients/woo.png',
						'open_new_tab' => 'no',
						'id'           => 'customizer_repeater_56d7ea7f40b99',

					),

				)
			);

		}
	}
endif;


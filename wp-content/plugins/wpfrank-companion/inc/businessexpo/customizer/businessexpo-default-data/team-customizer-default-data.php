<?php
// businessexpo Team content data
if ( ! function_exists( 'businessexpo_team_default_customize_register' ) ) :
add_action( 'customize_register', 'businessexpo_team_default_customize_register' );
function businessexpo_team_default_customize_register( $wp_customize ){
	//businessexpo default team data.
	$businessexpo_team_data = $wp_customize->get_setting( 'businessexpo_team_content' );
	if ( ! empty( $businessexpo_team_data ) ) {
		$businessexpo_team_data->default = json_encode( array(
			array(
				'image_url'  => wpfrank_companion_plugin_url .'/inc/businessexpo/img/team/team-1.jpg',
				'title'           => esc_html__( 'Anna Rose', 'businessexpo' ),
				'designation'        => esc_html__( 'Designer', 'businessexpo' ),
				'link' => '#',
				'open_new_tab' => 'no',
				'id'              => 'customizer_repeater_56d7ea7f40c56',
				'social_repeater' => json_encode(
					array(
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb908674e06',
							'link' => 'facebook.com',
							'icon' => 'fa-facebook',
						),
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb9148530fc',
							'link' => 'instagram.com',
							'icon' => 'fa-instagram',
						),
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb9150e1e89',
							'link' => 'linkedin.com',
							'icon' => 'fa-linkedin-in',
						),
					)
				),
			),
			array(
				'image_url'  => wpfrank_companion_plugin_url .'/inc/businessexpo/img/team/team-2.jpg',
				'title'           => esc_html__( 'Martin Cousis', 'businessexpo' ),
				'designation'        => esc_html__( 'Developer', 'businessexpo' ),
				'link' => '#',
				'open_new_tab' => 'no',
				'id'              => 'customizer_repeater_56d7ea7f40c66',
				'social_repeater' => json_encode(
					array(
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb908674e06',
							'link' => 'facebook.com',
							'icon' => 'fa-facebook',
						),
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb9148530fc',
							'link' => 'instagram.com',
							'icon' => 'fa-instagram',
						),
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb9150e1e89',
							'link' => 'linkedin.com',
							'icon' => 'fa-linkedin-in',
						),
					)
				),
			),
			array(
				'image_url'  => wpfrank_companion_plugin_url .'/inc/businessexpo/img/team/team-3.jpg',
				'title'           => esc_html__( 'Tomsos Cross', 'businessexpo' ),
				'designation'        => esc_html__( 'UI Developer', 'businessexpo' ),
				'link' => '#',
				'open_new_tab' => 'no',
				'id'              => 'customizer_repeater_56d7ea7f40c76',
				'social_repeater' => json_encode(
					array(
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb908674e06',
							'link' => 'facebook.com',
							'icon' => 'fa-facebook',
						),
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb9148530fc',
							'link' => 'instagram.com',
							'icon' => 'fa-instagram',
						),
						array(
							'id'   => 'customizer-repeater-social-repeater-57fb9150e1e89',
							'link' => 'linkedin.com',
							'icon' => 'fa-linkedin-in',
						),
					)
				),
			),
		) );

	}
}
endif;
<?php
	// businessexpo funfact content data.
	if ( ! function_exists( 'businessexpo_funfact_default_customize_register' ) ) :
		function businessexpo_funfact_default_customize_register( $wp_customize ){
			// businessexpo default funfact data.
			$businessexpo_funfact_content_control = $wp_customize->get_setting( 'businessexpo_funfact_content' );
			if ( ! empty( $businessexpo_funfact_content_control ) ) {
				$businessexpo_funfact_content_control->default = json_encode( array(
					array(
						'icon_value'  	=>'fa-smile-o',
						'title'           => esc_html__( '7953', 'wpfrank-companion' ),
						'text'            => esc_html__( 'Happy Customer', 'wpfrank-companion' ),
					),
					array(
						'icon_value'  	=>'fa-suitcase',
						'title'           => esc_html__( '350', 'businessexpo' ),
						'text'            => esc_html__( 'Finish Projects', 'businessexpo' ),
					),
					array(
						'icon_value'  	=>'fa-line-chart',
						'title'           => esc_html__( '574', 'wpfrank-companion' ),
						'text'            => esc_html__( 'Cups of Coffee', 'wpfrank-companion' ),
					),
					array(
						'icon_value'  	=>'fa-coffee',
						'title'           => esc_html__( '450', 'wpfrank-companion' ),
						'text'            => esc_html__( 'Working Days', 'wpfrank-companion' ),
					),
				) );
			}
		}
	endif;
	add_action( 'customize_register', 'businessexpo_funfact_default_customize_register' );

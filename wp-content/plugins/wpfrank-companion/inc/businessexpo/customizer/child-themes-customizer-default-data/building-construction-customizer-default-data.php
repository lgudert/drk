<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 *
 * @package wpfrank-companion
 */
 
//Diffrent Themes.
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;
if('Building Construction' == $activate_theme){

	if ( ! function_exists( 'wpfrank_companion_businessexpo_main_slider_default_content' ) ) :
		//Slider content.
		function wpfrank_companion_businessexpo_main_slider_default_content( $wp_customize ){

			$businessexpo_main_slider_data = $wp_customize->get_setting( 'businessexpo_main_slider_content' );
			if ( ! empty( $businessexpo_main_slider_data ) ) {
				$businessexpo_main_slider_data->default = json_encode( array(
					array(
						'title'			=> esc_html__( 'We Build Your Dream','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'Creation. Construction. Complete', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"We are excellence in construction services"', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link'			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/building-slide-1.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b10',
					),
					array(
						'title'      	=> esc_html__( 'Construction & Industrial Agency', 'wpfrank-companion' ),
						'subtitle'      => esc_html__( '25+ Years of experience', 'wpfrank-companion' ),
						'text'       	=> esc_html__( '"See The Ideas & Visions For Industries!"','wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/architect-slide-3.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b14',
					),					
					array(
						'title'			=> esc_html__( 'Explore The Work Flow.','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'Construction solutions focused future', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"From Concept to Creation"', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/slide-3.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b18',
					),
				
				) );
			}
		}
		add_action( 'customize_register', 'wpfrank_companion_businessexpo_main_slider_default_content' );
	endif;

	//Theme Info content
	if ( ! function_exists( 'wpfrank_companion_businessexpo_top_info_default_content' ) ) :
		function wpfrank_companion_businessexpo_top_info_default_content( $wp_customize ){

			$businessexpo_top_info_data = $wp_customize->get_setting( 'businessexpo_top_info_content' );
			if ( ! empty( $businessexpo_top_info_data ) ) {	
				$businessexpo_top_info_data->default = json_encode( array(
					array(
						'icon_value'	=> 'fas fa-home',
						'title'			=> esc_html__( 'MODERN DESIGN PROJECTS', 'wpfrank-companion' ),
						//'text'			=> esc_html__( '2130 Fulton Street, San Francisco', 'wpfrank-companion' ),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'icon_value'	=> 'fas fa-tasks',
						'title'			=> esc_html__( 'QUICK & FAST SERVICES', 'wpfrank-companion' ),
						//'text'			=> esc_html__( '+(15) 94117-1080', 'wpfrank-companion' ),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'icon_value'	=> 'fas fa-map-marker-alt',
						'title'			=> esc_html__( 'GET YOUR PERSONAL ESTIMATE', 'wpfrank-companion' ),
						//'text'			=> esc_html__( 'example@mail.com', 'wpfrank-companion' ),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b17',
					),
				) );
			}
	    }
		add_action( 'customize_register', 'wpfrank_companion_businessexpo_top_info_default_content' );
	endif;

	//Service content.
	if ( ! function_exists( 'wpfrank_companion_businessexpo_service_default_content' ) ) :
		function wpfrank_companion_businessexpo_service_default_content( $wp_customize ){

			$businessexpo_service_data = $wp_customize->get_setting( 'businessexpo_service_content' );
			if ( ! empty( $businessexpo_service_data ) ) {
				$businessexpo_service_data->default = json_encode( array(
					array(
						'icon_value'	=> '',
						'title'			=> esc_html__( 'Building Design', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/building-service-1.jpg',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'icon_value'	=> '',
						'title'			=> esc_html__( 'Building Construction', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/building-service-2.jpg',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'icon_value'	=> '',
						'title'			=> esc_html__( 'Building Renovation', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/building-service-3.jpg',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b17',
					),
				) );
			
			}
	    }
		add_action( 'customize_register', 'wpfrank_companion_businessexpo_service_default_content' );
	endif;

	//Testimonial content.
	if ( ! function_exists( 'wpfrank_companion_businessexpo_testimonial_default_content' ) ) :
		function wpfrank_companion_businessexpo_testimonial_default_content( $wp_customize ){

				$businessexpo_testimonial_data = $wp_customize->get_setting( 'businessexpo_testimonial_content' );
				if ( ! empty( $businessexpo_testimonial_data ) ) {
					$businessexpo_testimonial_data->default = json_encode( array(
						array(
						'title'			=> 'MELLISA WILLIAMS',
						'text'			=> '"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?"',
						'designation'	=> __('Model','wpfrank-companion'),
						'image_url'		=> wpfrank_companion_plugin_url .'inc/businessexpo/img/testimonial/architect-1.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'			=> 'DAVID WANABE',
						'text'			=> '"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?"',
						'designation'	=> __('Enterpreneur','wpfrank-companion'),
						'image_url'		=> wpfrank_companion_plugin_url .'inc/businessexpo/img/testimonial/architect-2.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b40',
						),
					) );
				}
			}
	add_action( 'customize_register', 'wpfrank_companion_businessexpo_testimonial_default_content' );
	endif;
}	
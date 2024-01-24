<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 *
 * @package wpfrank-companion
 */
 
//Diffrent Themes.
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;
if('Architect Designs' == $activate_theme){

	if ( ! function_exists( 'wpfrank_companion_businessexpo_main_slider_default_content' ) ) :
		//Slider content.
		function wpfrank_companion_businessexpo_main_slider_default_content( $wp_customize ){

			$businessexpo_main_slider_data = $wp_customize->get_setting( 'businessexpo_main_slider_content' );
			if ( ! empty( $businessexpo_main_slider_data ) ) {
				$businessexpo_main_slider_data->default = json_encode( array(
					array(
						'title'			=> esc_html__( 'DECOR YOUR DREAM HOME','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'DREAM.CREATE.LIVE', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"Build Your Amazing Website With Architect Designs"', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link'			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/architect-slide-1.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b10',
					),
					array(
						'title'      	=> esc_html__( 'CLASSIC & MODERN ARCHITECTURE', 'wpfrank-companion' ),
						'subtitle'      => esc_html__( 'MODERN DECORATIVE', 'wpfrank-companion' ),
						'text'       	=> esc_html__( '"Being The Best Decoraters"','wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/architect-slide-2.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b14',
					),					
					array(
						'title'			=> esc_html__( 'AWARD WINNING COMPANY','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'WE ARE THE BEST', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"Committed To Total Customer Satisfaction"', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/architect-slide-3.jpg',
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
						'icon_value'	=> 'fas fa-object-ungroup',
						'title'			=> esc_html__( 'WARDROBE DESIGN', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/architect-service-1.jpg',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'icon_value'	=> 'fas fa-users',
						'title'			=> esc_html__( 'ARCHITECTURAL DESIGN', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/architect-service-2.jpg',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'icon_value'	=> 'fas fa-desktop',
						'title'			=> esc_html__( 'ROOMS DECORATION', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/architect-service-3.jpg',
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
						'title'			=> 'MARVELLOUS MASCAW',
						'text'			=> '"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?"',
						'designation'	=> __('Businessman','wpfrank-companion'),
						'image_url'		=> wpfrank_companion_plugin_url .'inc/businessexpo/img/testimonial/architect-1.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'			=> 'CASY STORM',
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
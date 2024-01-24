<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 *
 * @package wpfrank-companion
 */
 
//Diffrent Themes.
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;
if('Medical Health' == $activate_theme){

	if ( ! function_exists( 'wpfrank_companion_businessexpo_main_slider_default_content' ) ) :
		//Slider content.
		function wpfrank_companion_businessexpo_main_slider_default_content( $wp_customize ){

			$businessexpo_main_slider_data = $wp_customize->get_setting( 'businessexpo_main_slider_content' );
			if ( ! empty( $businessexpo_main_slider_data ) ) {
				$businessexpo_main_slider_data->default = json_encode( array(
					array(
						'title'			=> esc_html__( 'Exceptional Care Close to You','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'Caring. Healing. Leading', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"Caring for the growing needs of our community"', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link'			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/medical-slider-1.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b10',
					),
					array(
						'title'      	=> esc_html__( 'Medical Excellence Every Day', 'wpfrank-companion' ),
						'subtitle'      => esc_html__( 'Exceptional Care. Every Patient. Every Day', 'wpfrank-companion' ),
						'text'       	=> esc_html__( '"Our patients are at the centre of everything we do"','wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/medical-slider-2.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b14',
					),					
					array(
						'title'			=> esc_html__( 'The Science of Medicine. The Art of Healing.','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'Enhancing Life. Excelling in Care', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"The hospital you trust to care for those you love"', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/medical-slider-3.jpg',
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
						'icon_value'	=> 'fas fa-volume-control-phone',
						'title'			=> esc_html__( 'Nutritional Counseling', 'wpfrank-companion' ),
						//'text'			=> esc_html__( '2130 Fulton Street, San Francisco', 'wpfrank-companion' ),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'icon_value'	=> 'fas fa-heart',
						'title'			=> esc_html__( 'Mental Health Care', 'wpfrank-companion' ),
						//'text'			=> esc_html__( '+(15) 94117-1080', 'wpfrank-companion' ),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'icon_value'	=> 'fas fa-ambulance',
						'title'			=> esc_html__( 'Immediate Emergency Services', 'wpfrank-companion' ),
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
						'title'			=> esc_html__( 'Personalized Patient Medication', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/medical-service-1.jpg',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'icon_value'	=> '',
						'title'			=> esc_html__( 'Physiotherapy & Rehabilitation', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/medical-service-2.jpg',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'icon_value'	=> '',
						'title'			=> esc_html__( 'Dermatology and Cosmetology', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_image',
						'image_url'  	=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/service/medical-service-3.jpg',
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
						'image_url'		=> wpfrank_companion_plugin_url .'inc/businessexpo/img/testimonial/medical-health-1.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'			=> 'DAVID WANABE',
						'text'			=> '"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?"',
						'designation'	=> __('Enterpreneur','wpfrank-companion'),
						'image_url'		=> wpfrank_companion_plugin_url .'inc/businessexpo/img/testimonial/medical-health-2.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b40',
						),
					) );
				}
			}
	add_action( 'customize_register', 'wpfrank_companion_businessexpo_testimonial_default_content' );
	endif;
}	
<?php
/**
 * Lite Manager
 *
 * @package best-construction
 * @since 1.0.12
 */


/**
 * About page class
 */
require_once THEME_DIR. '/custom/ct-about-page/class-ct-about-page.php';

/*
* About page instance
*/
$config = array(
	// Menu name under Appearance.
	'menu_name'           => __( 'About Theta All (Best Construction PRO)', 'best-construction' ),
	// Page title.
	'page_name'           => __( 'About Theta All (Best Construction PRO)', 'best-construction' ),
	// Main welcome title
	/* translators: s - theme name */
	'welcome_title'       => sprintf( __( 'Welcome to %s! - Version ', 'best-construction' ), 'best-construction' ),
	// Main welcome content
	'welcome_content'     => esc_html__( 'Theta All (Best Construction Pro) is a clean and beautiful, polished and feature-rich, robust and easy to use, fully responsive premium WordPress theme that is ideal for restaurant, cafe, bakery, cuisine, fast food, pizzerias, drinks and food related business. The theme is loaded with many pre-built home page sections to help you create an amazing modern one-page website without having to write a single line of code. The Theta All theme displays full screen image banner, About Us section, Service Section, Recent Posts Section and Contact Us form as well as Footer widgets. You have full control including home page section order, font, font size, color, button, opacity of every open section. The theme is optimized for fast loading and extremely responsive with various devices. You can see the demo at http://demo.coothemes.com/best-construction-pro/', 'best-construction' ),
	/**
	 * Tabs array.
	 *
	 * The key needs to be ONLY consisted from letters and underscores. If we want to define outside the class a function to render the tab,
	 * the will be the name of the function which will be used to render the tab content.
	 */
	'tabs'                => array(
		'getting_started'     => __( 'Getting Started', 'best-construction' ),
		/*'recommended_actions' => __( 'Recommended Actions', 'best-construction' ),*/
		'recommended_plugins' => __( 'Recommended Plugins', 'best-construction' ),
		/*'support'             => __( 'Support', 'best-construction' ),*/
		/*'changelog'           => __( 'Changelog', 'best-construction' ),*/
		'free_pro'            => __( 'Free vs PRO', 'best-construction' ),
	),
	// Support content tab.
	'support_content'     => array(

	),
	// Getting started tab
	'getting_started'     => array(
		'first'  => array(
			'title'               => esc_html__( 'Recommended actions', 'best-construction' ),
			'text'                => esc_html__( 'We have compiled a list of steps for you to take so we can ensure that the experience you have using one of our products is very easy to follow.', 'best-construction' ),
			'button_label'        => esc_html__( 'Recommended actions', 'best-construction' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=theta-welcome&tab=recommended_plugins' ) ),
			'is_button'           => false,
			'recommended_actions' => true,
			'is_new_tab'          => false,
		),
		'second' => array(
			'title'               => esc_html__( 'Read full documentation', 'best-construction' ),
			'text'                => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use Best Construction.', 'best-construction' ),
			'button_label'        => esc_html__( 'Documentation', 'best-construction' ),
			'button_link'         => 'https://www.coothemes.com/theta-all-manual/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		'third'  => array(
			'title'               => esc_html__( 'Go to the Customizer', 'best-construction' ),
			'text'                => esc_html__( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'best-construction' ),
			'button_label'        => esc_html__( 'Go to the Customizer', 'best-construction' ),
			'button_link'         => esc_url( admin_url( 'customize.php' ) ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		
		'fourth'  => array(
			'title'        => esc_html__( 'Contact Support', 'best-construction' ),
			'text'                => esc_html__( 'We want to make sure you have the best experience using  Theta All, and that is why we have gathered all the necessary information here for you. We hope you will enjoy using  Theta All as much as we enjoy creating great products.', 'best-construction' ),
			'button_label'        => esc_html__( 'Contact Support', 'best-construction' ),
			'button_link'  => esc_url( 'https://www.coothemes.com/forum/theta-all-theme' ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		
		
	),
	// Free vs PRO array.
	'free_pro'            => array(
		'free_theme_name'     => 'best-construction',
		'pro_theme_name'      => 'Theta All',
		'pro_theme_link'      => 'https://www.coothemes.com/theme-theta-all/',
		/* translators: s - theme name */
		'get_pro_theme_label' => sprintf( __( 'Upgrade to pro!', 'best-construction' ), 'Theta All (Best Construction Pro)' ),
'features'            => array(
			array(
				'title'       => __( 'One-page Theme', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Text and Image Logos', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			
		
			array(
				'title'       => __( 'Parallax Backgrounds', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),			
			
			array(
				'title'       => __( 'Front Page Section Reordering', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			
			array(
				'title'       => __( 'Unlimited Front Page Banner', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),			
			
			array(
				'title'       => __( 'Front page Events Section', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			

			array(
				'title'       => __( 'Multiple Blog Layouts', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),			

			array(
				'title'       => __( 'Footer Widgets', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),


			array(
				'title'       => __( 'Footer Copyright Editor', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),	


			array(
				'title'       => __( 'Full Screen Front Page Banner', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),		

			array(
				'title'       => __( 'Front Page Image and Video Slider', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			

			array(
				'title'       => __( 'Front page Service Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			

			array(
				'title'       => __( 'Front page About Us Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),		


			array(
				'title'       => __( 'Front Page Portfolio Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),

			array(
				'title'       => __( 'Front Page HTML5 Video Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),
			
		
			
			array(
				'title'       => __( 'Front Page Pricing Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			
			array(
				'title'       => __( 'Front Page Team Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),		
						
			array(
				'title'       => __( 'Front Page Facts Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),		

			array(
				'title'       => __( 'Front Page Gallery Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),	
			
			array(
				'title'       => __( 'Front Page Testimonial Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			
			array(
				'title'       => __( 'Front Page Clients Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),	
			
			array(
				'title'       => __( 'Front Page WooCommerce Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			
			
			array(
				'title'       => __( 'Front Page Subscribe Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			
			
			array(
				'title'       => __( 'Front Page Blog Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),		
						
			array(
				'title'       => __( 'Front Page CTA Section', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			
			array(
				'title'       => __( 'Google Maps', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),	
			
			array(
				'title'       => __( 'Google fonts', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),			
			
			array(
				'title'       => __( 'Shortcode', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),				
			
			array(
				'title'       => __( 'Multiple Page Template', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),				
			
			array(
				'title'       => __( 'WooCommerce Compatible', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),				
			
			array(
				'title'       => __( 'MailChimp Compatible', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),				
			
			array(
				'title'       => __( 'Unlimited Color Choices', 'best-construction' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),							
			array(
				'title'       => __( 'Automatic Updates', 'best-construction' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),				
			
						
		),
	),
	
	// Plugins array.
	'recommended_plugins' => array(
		'already_activated_message' => esc_html__( 'Already activated', 'best-construction' ),
		'version_label'             => esc_html__( 'Version: ', 'best-construction' ),
		'install_label'             => esc_html__( 'Install and Activate', 'best-construction' ),
		'activate_label'            => esc_html__( 'Activate', 'best-construction' ),
		'deactivate_label'          => esc_html__( 'Deactivate', 'best-construction' ),
		'content'                   => array(
			array(
				'slug' => 'kirki',
			),
			
			
			array(
				'slug' => 'one-click-demo-import',
			),				
								
		),
	),

);
Coothemes_About_Page::init( apply_filters( 'best_construction_about_page_array', $config ) );


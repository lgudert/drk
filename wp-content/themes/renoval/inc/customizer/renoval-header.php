<?php
function renoval_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'renoval'),
		) 
	);
	
	/*=========================================
	Renoval Site Identity
	=========================================*/		
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','renoval'),
			'panel'  		=> 'header_section',
		)
    );

	//Project Documentation Link
	class WP_title_tagline_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php _e('Section Documentation','renoval'); ?></h3>
			<p><a href="https://help.nayrathemes.com/premium-themes/renoval-pro/header-section-setup-3/"  target="_blank"  style="background-color:#fcb900; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;"><?php _e('Click Here','renoval'); ?></a></p>
			
		<?php
	   }
	}
	
	// Project Doc Link // 
	$wp_customize->add_setting( 
		'title_tagline_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_title_tagline_Customize_Control($wp_customize,
	'title_tagline_doc_link' , 
		array(
			'label'          => __( 'Site identity Documentation Link', 'renoval' ),
			'section'        => 'title_tagline',
			'type'           => 'radio',
			'description'    => __( 'Site identity Documentation Link', 'renoval' ), 
		) 
	) );

	// Logo Width // 
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'logo_width',
			array(
				'default'			=> '140',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'renoval_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'logo_width', 
			array(
				'label'      => __( 'Logo Width', 'renoval' ),
				'section'  => 'title_tagline',
				'input_attrs' => array(
					'min'    => 0,
					'max'    => 500,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
	}	

	/*=========================================
	Header Navigation
	=========================================*/	
	$wp_customize->add_section(
        'header_navigation',
        array(
        	'priority'      => 4,
            'title' 		=> __('Header Navigation','renoval'),
			'panel'  		=> 'header_section',
		)
    );
	
	
	//Header Navigation Documentation Link
	class WP_header_navigation_section_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php echo esc_html("Section Documentation"); ?></h3>
			<p><a href="https://help.nayrathemes.com/premium-themes/renoval-pro/header-section-setup-3/"  target="_blank"  style="background-color:#fcb900; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;"><?php echo esc_html("Click Here"); ?></a></p>
			
		<?php
	   }
	}
	
	// Header Navigation Doc Link // 
	$wp_customize->add_setting( 
		'header_navigation_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_header_navigation_section_Customize_Control($wp_customize,
	'header_navigation_doc_link' , 
		array(
			'label'          => __( 'Header Navigation Documentation Link', 'renoval' ),
			'section'        => 'header_navigation',
			'type'           => 'radio',
			'description'    => __( 'Header Navigation Documentation Link', 'renoval' ), 
		) 
	) );

	
	// Search
	$wp_customize->add_setting(
		'hdr_nav_search'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_search',
		array(
			'type' => 'hidden',
			'label' => __('Search','renoval'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_search' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_search', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'renoval' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	// Cart
	// $wp_customize->add_setting(
		// 'hdr_nav_cart'
			// ,array(
			// 'capability'     	=> 'edit_theme_options',
			// 'sanitize_callback' => 'renoval_sanitize_text',
			// 'priority' => 3,
		// )
	// );

	// $wp_customize->add_control(
	// 'hdr_nav_cart',
		// array(
			// 'type' => 'hidden',
			// 'label' => __('Cart','renoval'),
			// 'section' => 'header_navigation',
		// )
	// );
	
	// $wp_customize->add_setting( 
		// 'hide_show_cart' , 
			// array(
			// 'default' => '1',
			// 'capability'     => 'edit_theme_options',
			// 'sanitize_callback' => 'renoval_sanitize_checkbox',
			// 'priority' => 4,
		// ) 
	// );
	
	// $wp_customize->add_control(
	// 'hide_show_cart', 
		// array(
			// 'label'	      => esc_html__( 'Hide/Show', 'renoval' ),
			// 'section'     => 'header_navigation',
			// 'type'        => 'checkbox'
		// ) 
	// );	
	
	// Button
	$wp_customize->add_setting(
		'hdr_nav_btn'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' => 5,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_btn',
		array(
			'type' => 'hidden',
			'label' => __('Button','renoval'),
			'section' => 'header_navigation',
		)
	);
	

	$wp_customize->add_setting( 
		'hide_show_nav_btn' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_checkbox',
			'priority' => 6,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_nav_btn', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'renoval' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	
	// icon // 
	$wp_customize->add_setting(
    	'nav_btn_icon',
    	array(
	        'default' => 'fa-user',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority' => 7,
		)
	);	

	$wp_customize->add_control(new Renoval_Icon_Picker_Control($wp_customize, 
		'nav_btn_icon',
		array(
		    'label'   		=> __('Icon','renoval'),
		    'section' 		=> 'header_navigation',
			'iconset' => 'fa',
		))  
	);
	// Button Label // 
	$wp_customize->add_setting(
    	'nav_btn_lbl',
    	array(
			'sanitize_callback' => 'renoval_sanitize_text',
			'capability' => 'edit_theme_options',
			'priority' => 7,
		)
	);	

	$wp_customize->add_control( 
		'nav_btn_lbl',
		array(
		    'label'   		=> __('Button Label','renoval'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	// Button Link // 
	$wp_customize->add_setting(
    	'nav_btn_link',
    	array(
			'sanitize_callback' => 'renoval_sanitize_url',
			'capability' => 'edit_theme_options',
			'priority' => 8,
		)
	);	

	$wp_customize->add_control( 
		'nav_btn_link',
		array(
		    'label'   		=> __('Button Link','renoval'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	/*=========================================
	Sticky Header
	=========================================*/	
	$wp_customize->add_section(
        'sticky_header_set',
        array(
        	'priority'      => 4,
            'title' 		=> __('Sticky Header','renoval'),
			'panel'  		=> 'header_section',
		)
    );
	
	// Heading
	$wp_customize->add_setting(
		'sticky_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'sticky_head',
		array(
			'type' => 'hidden',
			'label' => __('Sticky Header','renoval'),
			'section' => 'sticky_header_set',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_sticky' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_sticky', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'renoval' ),
			'section'     => 'sticky_header_set',
			'type'        => 'checkbox'
		) 
	);	
}
add_action( 'customize_register', 'renoval_header_settings' );

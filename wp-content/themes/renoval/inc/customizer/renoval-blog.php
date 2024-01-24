<?php
function renoval_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Blog  Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' 	=> esc_html__( 'Blog Section', 'renoval' ),
			'priority' 	=> 10,
			'panel' 	=> 'renoval_frontpage_sections',
		)
	);
	
	//Blog Documentation Link
	class WP_blog_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php _e('Section Documentation','renoval'); ?></h3>
			<p><a href="https://help.nayrathemes.com/premium-themes/renoval-pro/how-to-create-manage-post-blog/"  target="_blank"  style="background-color:#fcb900; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;"><?php _e('Click Here','renoval'); ?></a></p>
			
		<?php
	   }
	}
	
	// Blog Doc Link // 
	$wp_customize->add_setting( 
		'blog_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_blog_Customize_Control($wp_customize,
	'blog_doc_link' , 
		array(
			'label'          => __( 'Blog Documentation Link', 'renoval' ),
			'section'        => 'blog_setting',
			'type'           => 'radio',
			'description'    => __( 'Blog Documentation Link', 'renoval' ), 
		) 
	) );


	// Setting Head
	$wp_customize->add_setting(
		'blog_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' 			=> 1,
		)
	);

	$wp_customize->add_control(
	'blog_setting_head',
		array(
			'type' 			=> 'hidden',
			'label' 		=> __('Setting','renoval'),
			'section' 		=> 'blog_setting',
		)
	);
	
	// Hide / Show 
	$wp_customize->add_setting(
		'blog_hs'
			,array(
			'default'     		=> '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_checkbox',
			'priority' 			=> 1,
		)
	);

	$wp_customize->add_control(
	'blog_hs',
		array(
			'type' 			=> 'checkbox',
			'label' 		=> __('Hide / Show','renoval'),
			'section' 		=> 'blog_setting',
		)
	);
	
	// Blog Header Section // 
	$wp_customize->add_setting(
		'blog_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' 			=> 3,
		)
	);

	$wp_customize->add_control(
	'blog_headings',
		array(
			'type' 			=> 'hidden',
			'label' 		=> __('Header','renoval'),
			'section' 		=> 'blog_setting',
		)
	);
	
	// Blog Subtitle // 
	$wp_customize->add_setting(
    	'blog_subtitle',
    	array(
			'default'			=> __('<h2>Outstanding</h2><div class="animation"><div class="first"><div>Blog</div></div></div>','renoval'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' 			=> 4,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_subtitle',
		array(
		    'label'   		=> __('Subtitle','renoval'),
		    'section' 		=> 'blog_setting',
			'type'          => 'text',
		)  
	);
	
	// Blog Description // 
	$wp_customize->add_setting(
    	'blog_description',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_description',
		array(
			'default'	=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','renoval'),
		    'label'   	=> __('Description','renoval'),
		    'section' 	=> 'blog_setting',
			'type'      => 'textarea',
		)  
	);

	// Blog content Section // 
	
	$wp_customize->add_setting(
		'blog_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' 			=> 7,
		)
	);

	$wp_customize->add_control(
	'blog_content_head',
		array(
			'type' 		=> 'hidden',
			'label' 	=> __('Content','renoval'),
			'section' 	=> 'blog_setting',
		)
	);
	
	// blog_display_num
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'blog_display_num',
			array(
				'default' 			=> '3',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'renoval_sanitize_range_value',
				'priority' 			=> 8,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'blog_display_num', 
			array(
				'label'      	=> __( 'No of Posts Display', 'renoval' ),
				'section' 		=> 'blog_setting',
				 'input_attrs' 	=> array(
					'min'    	=> 1,
					'max'    	=> 500,
					'step'   	=> 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
	}
}

add_action( 'customize_register', 'renoval_blog_setting' );

// blog selective refresh
function renoval_home_blog_section_partials( $wp_customize ){	
	// blog subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.blog-section .section-title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'renoval_blog_title_render_callback',
	) );
	
	// blog description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.blog-section .section-title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'renoval_blog_desc_render_callback',
	) );
	
	}

add_action( 'customize_register', 'renoval_home_blog_section_partials' );

// blog title
function renoval_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// blog description
function renoval_blog_desc_render_callback() {
	return get_theme_mod( 'blog_description' );
}
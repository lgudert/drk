<?php
function renoval_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'renoval'),
		) 
	);
	// Footer Setting Section // 
	$wp_customize->add_section(
        'footer_copy_Section',
        array(
            'title' 		=> __('Below Footer','renoval'),
			'panel'  		=> 'footer_section',
			'priority'      => 4,
		)
    );

	// Copyright Head // 
	$wp_customize->add_setting(
		'footer_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'footer_copy_head',
		array(
			'type' => 'hidden',
			'label' => __('Copyright','renoval'),
			'section' => 'footer_copy_Section',
			'priority' => 7,
		)
	);
	
	// footer third text // 
	$renoval_footer_copyright = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'renoval' );
	$wp_customize->add_setting(
    	'footer_third_custom',
    	array(
			'default' => $renoval_footer_copyright,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_html',
		)
	);	

	$wp_customize->add_control( 
		'footer_third_custom',
		array(
		    'label'   		=> __('Copyright','renoval'),
		    'section'		=> 'footer_copy_Section',
			'type' 			=> 'textarea',
			'priority'      => 9,
		)  
	);	
	
	

	// Footer Widget // 
	$wp_customize->add_section(
        'footer_widget',
        array(
            'title' 		=> __('Footer Widget Area','renoval'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
}
add_action( 'customize_register', 'renoval_footer' );

// Footer selective refresh
function renoval_footer_partials( $wp_customize ){		
	// footer_third_custom
	$wp_customize->selective_refresh->add_partial( 'footer_third_custom', array(
		'selector'            => '.footer-copyright .copyright-text',
		'settings'            => 'footer_third_custom',
		'render_callback'  => 'renoval_footer_third_custom_render_callback',
	) );
	
}

add_action( 'customize_register', 'renoval_footer_partials' );


// copyright_content
function renoval_footer_third_custom_render_callback() {
	return get_theme_mod( 'footer_third_custom' );
}
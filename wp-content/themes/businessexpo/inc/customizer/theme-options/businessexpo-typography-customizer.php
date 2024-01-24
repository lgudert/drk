<?php
	$wp_customize->add_setting(
		'businessexpo_typography_base_font_family',
		array(
			'sanitize_callback' => 'businessexpo_sanitize_select',
			'capability'        => 'edit_theme_options',
			'default'           => 'Open Sans',
		)
	);
	$wp_customize->add_control(
		new businessexpo_Customizer_Typography_Control(
			$wp_customize,
			'businessexpo_typography_base_font_family',
			array(
				'label'    => esc_html__( 'Font Family', 'businessexpo' ),
				'section'  => 'businessexpo_base_typography',
				'settings' => 'businessexpo_typography_base_font_family',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting(
		'businessexpo_typography_base_font_size',
		array(
			'default'           => '1rem',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'businessexpo_typography_base_font_size',
		array(
			'label'       => esc_html__( 'Font Size', 'businessexpo' ),
			'description' => esc_html__( 'You can enter font-size in px or rem ', 'businessexpo' ),
			'section'     => 'businessexpo_base_typography',
			'priority'    => 15,
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'businessexpo_typography_h1_font_family',
		array(
			'sanitize_callback' => 'businessexpo_sanitize_select',
			'capability'        => 'edit_theme_options',
			'default'           => 'Montserrat',
		)
	);
	$wp_customize->add_control(
		new businessexpo_Customizer_Typography_Control(
			$wp_customize,
			'businessexpo_typography_h1_font_family',
			array(
				'label'    => esc_html__( 'Font Family', 'businessexpo' ),
				'section'  => 'businessexpo_headings1_typography',
				'settings' => 'businessexpo_typography_h1_font_family',
				'priority' => 10,
			)
		)
	);


	$wp_customize->add_setting(
		'businessexpo_typography_h2_font_family',
		array(
			'sanitize_callback' => 'businessexpo_sanitize_select',
			'capability'        => 'edit_theme_options',
			'default'           => 'Montserrat',
		)
	);
	$wp_customize->add_control(
		new businessexpo_Customizer_Typography_Control(
			$wp_customize,
			'businessexpo_typography_h2_font_family',
			array(
				'label'    => esc_html__( 'Font Family', 'businessexpo' ),
				'section'  => 'businessexpo_headings2_typography',
				'settings' => 'businessexpo_typography_h2_font_family',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting(
		'businessexpo_typography_h3_font_family',
		array(
			'sanitize_callback' => 'businessexpo_sanitize_select',
			'capability'        => 'edit_theme_options',
			'default'           => 'Montserrat',
		)
	);
	$wp_customize->add_control(
		new businessexpo_Customizer_Typography_Control(
			$wp_customize,
			'businessexpo_typography_h3_font_family',
			array(
				'label'    => esc_html__( 'Font Family', 'businessexpo' ),
				'section'  => 'businessexpo_headings3_typography',
				'settings' => 'businessexpo_typography_h3_font_family',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting(
		'businessexpo_typography_h4_font_family',
		array(
			'sanitize_callback' => 'businessexpo_sanitize_select',
			'capability'        => 'edit_theme_options',
			'default'           => 'Montserrat',
		)
	);
	$wp_customize->add_control(
		new businessexpo_Customizer_Typography_Control(
			$wp_customize,
			'businessexpo_typography_h4_font_family',
			array(
				'label'    => esc_html__( 'Font Family', 'businessexpo' ),
				'section'  => 'businessexpo_headings4_typography',
				'settings' => 'businessexpo_typography_h4_font_family',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting(
		'businessexpo_typography_h5_font_family',
		array(
			'sanitize_callback' => 'businessexpo_sanitize_select',
			'capability'        => 'edit_theme_options',
			'default'           => 'Montserrat',
		)
	);
	$wp_customize->add_control(
		new businessexpo_Customizer_Typography_Control(
			$wp_customize,
			'businessexpo_typography_h5_font_family',
			array(
				'label'    => esc_html__( 'Font Family', 'businessexpo' ),
				'section'  => 'businessexpo_headings5_typography',
				'settings' => 'businessexpo_typography_h5_font_family',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting(
		'businessexpo_typography_h6_font_family',
		array(
			'sanitize_callback' => 'businessexpo_sanitize_select',
			'capability'        => 'edit_theme_options',
			'default'           => 'Montserrat',
		)
	);
	$wp_customize->add_control(
		new businessexpo_Customizer_Typography_Control(
			$wp_customize,
			'businessexpo_typography_h6_font_family',
			array(
				'label'    => esc_html__( 'Font Family', 'businessexpo' ),
				'section'  => 'businessexpo_headings6_typography',
				'settings' => 'businessexpo_typography_h6_font_family',
				'priority' => 10,
			)
		)
	);

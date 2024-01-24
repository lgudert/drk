<?php
	// Phone
	$wp_customize->add_setting(
		'businessexpo_tbar_phone_text',
		array(
			'default'           => esc_html__( '+012-012', 'businessexpo' ),
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'businessexpo_tbar_phone_text',
		array(
			'type'     => 'text',
			'label'    => esc_html__( 'Call Us:', 'businessexpo' ),
			'section'  => 'businessexpo_topbar_settings',
			'priority' => 10,
		)
	);

	// Email
	$wp_customize->add_setting(
		'businessexpo_tbar_email_text',
		array(
			'default'           => esc_html__( 'mail@example.com', 'businessexpo' ),
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'businessexpo_tbar_email_text',
		array(
			'type'     => 'text',
			'label'    => esc_html__( 'Email:', 'businessexpo' ),
			'section'  => 'businessexpo_topbar_settings',
			'priority' => 10,
		)
	);

	// Button Text
	$wp_customize->add_setting(
		'businessexpo_tbar_btn_text',
		array(
			'default'           => esc_html__( 'Buy Now', 'businessexpo' ),
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'businessexpo_tbar_btn_text',
		array(
			'type'     => 'text',
			'label'    => esc_html__( 'Button Text:', 'businessexpo' ),
			'section'  => 'businessexpo_topbar_settings',
			'priority' => 10,
		)
	);

	// Button URL
	$wp_customize->add_setting(
		'businessexpo_tbar_btn_url',
		array(
			'default'           => esc_html__( 'mail@example.com', 'businessexpo' ),
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'businessexpo_tbar_btn_url',
		array(
			'type'     => 'text',
			'label'    => esc_html__( 'Button URL:', 'businessexpo' ),
			'section'  => 'businessexpo_topbar_settings',
			'priority' => 10,
		)
	);


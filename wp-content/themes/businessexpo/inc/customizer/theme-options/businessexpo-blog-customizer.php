<?php


	// One Comment
	$wp_customize->add_setting(
		'businessexpo_blog_comment_one',
		array(
			'default'           => esc_html__( 'No Comments', 'businessexpo' ),
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'businessexpo_blog_comment_one',
		array(
			'type'            => 'text',
			'section'         => 'businessexpo_blog_general',
			'priority'        => 9,
			'active_callback' => function() {
				return get_theme_mod( 'businessexpo_blog_comments', true ); },
		)
	);

	// Two Comment
	$wp_customize->add_setting(
		'businessexpo_blog_comment_two',
		array(
			'default'           => esc_html__( '1 Comment', 'businessexpo' ),
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'businessexpo_blog_comment_two',
		array(
			'type'            => 'text',
			'section'         => 'businessexpo_blog_general',
			'priority'        => 9,
			'active_callback' => function() {
				return get_theme_mod( 'businessexpo_blog_comments', true ); },
		)
	);

	// Three Comment
	$wp_customize->add_setting(
		'businessexpo_blog_comment_three',
		array(
			'default'           => esc_html__( '% Comments So far', 'businessexpo' ),
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'businessexpo_blog_comment_three',
		array(
			'type'            => 'text',
			'section'         => 'businessexpo_blog_general',
			'priority'        => 9,
			'active_callback' => function() {
				return get_theme_mod( 'businessexpo_blog_comments', true ); },
		)
	);



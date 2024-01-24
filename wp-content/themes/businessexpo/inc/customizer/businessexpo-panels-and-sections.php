<?php
/**
 * Register customizer panels and sections.
 *
 * @package businessexpo
 */

/* Theme Settings. */

$wp_customize->add_panel(
	new businessexpo_Customize_Panel(
		$wp_customize,
		'businessexpo_theme_settings',
		array(
			'priority'   => 28,
			'title'      => esc_html__( 'Theme Options', 'businessexpo' ),
			'capabitity' => 'edit_theme_options',
		)
	)
);


// Top Bar Section
	$wp_customize->add_section(
		new businessexpo_Customize_Section(
			$wp_customize,
			'businessexpo_topbar_settings',
			array(
				'title'    => esc_html__( 'Top Bar', 'businessexpo' ),
				'panel'    => 'businessexpo_theme_settings',
				'priority' => 10,
			)
		)
	);

	// Loading Icon Section
	$wp_customize->add_section(
		new businessexpo_Customize_Section(
			$wp_customize,
			'businessexpo_loading_icon_settings',
			array(
				'title'    => esc_html__( 'Loading Icon', 'businessexpo' ),
				'panel'    => 'businessexpo_theme_settings',
				'priority' => 15,
			)
		)
	);

	// Menu Section

	$wp_customize->add_section(
		new businessexpo_Customize_Section(
			$wp_customize,
			'businessexpo_theme_menu_bar',
			array(
				'title'    => esc_html__( 'Menu Settings', 'businessexpo' ),
				'panel'    => 'businessexpo_theme_settings',
				'priority' => 20,
			)
		)
	);


	// Blog Section

	$wp_customize->add_section(
		new businessexpo_Customize_Section(
			$wp_customize,
			'businessexpo_blog_general',
			array(
				'title'    => esc_html__( 'Blog Settings', 'businessexpo' ),
				'panel'    => 'businessexpo_theme_settings',
				'priority' => 30,
			)
		)
	);


	// Page Header Section

	$wp_customize->add_section(
		new businessexpo_Customize_Section(
			$wp_customize,
			'businessexpo_theme_page_header',
			array(
				'title'    => esc_html__( 'Page Header', 'businessexpo' ),
				'panel'    => 'businessexpo_theme_settings',
				'priority' => 40,
			)
		)
	);


	// Page Title Section

	$wp_customize->add_section(
		new businessexpo_Customize_Section(
			$wp_customize,
			'businessexpo_theme_page_title',
			array(
				'title'    => esc_html__( 'Page/Breadcrumb Title', 'businessexpo' ),
				'panel'    => 'businessexpo_theme_settings',
				'priority' => 45,
			)
		)
	);

	// Footer

	$wp_customize->add_section(
		new businessexpo_Customize_Section(
			$wp_customize,
			'businessexpo_theme_footer',
			array(
				'title'    => esc_html__( 'Footer Settings', 'businessexpo' ),
				'panel'    => 'businessexpo_theme_settings',
				'priority' => 50,
			)
		)
	);

		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_footer_widgets',
				array(
					'title'    => esc_html__( 'Footer Widgets', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_settings',
					'section'  => 'businessexpo_theme_footer',
					'priority' => 10,
				)
			)
		);

		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_footer_copyright',
				array(
					'title'    => esc_html__( 'Footer Copyright', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_settings',
					'section'  => 'businessexpo_theme_footer',
					'priority' => 20,
				)
			)
		);

		/**
		 * Panel: Typography
		 */
		$wp_customize->add_panel(
			new businessexpo_Customize_Panel(
				$wp_customize,
				'businessexpo_theme_typography',
				array(
					'priority'   => 32,
					'title'      => esc_html__( 'Typography', 'businessexpo' ),
					'capabitity' => 'edit_theme_options',
				)
			)
		);

		// Section: Typography > Base typography.
		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_enable_disable_typography',
				array(
					'title'    => esc_html__( 'Enable Typography', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 5,
				)
			)
		);

		// Section: Typography > Base typography.
		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_base_typography',
				array(
					'title'    => esc_html__( 'Base Typography', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 10,
				)
			)
		);

		// Section: Typography > Headings ( h1 - h6 ) Typography.
		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_headings1_typography',
				array(
					'title'    => esc_html__( 'Headings H1', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 70,
				)
			)
		);

		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_headings2_typography',
				array(
					'title'    => esc_html__( 'Headings H2', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 80,
				)
			)
		);

		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_headings3_typography',
				array(
					'title'    => esc_html__( 'Headings H3', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 90,
				)
			)
		);

		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_headings4_typography',
				array(
					'title'    => esc_html__( 'Headings H4', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 100,
				)
			)
		);

		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_headings5_typography',
				array(
					'title'    => esc_html__( 'Headings H5', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 110,
				)
			)
		);

		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_headings6_typography',
				array(
					'title'    => esc_html__( 'Headings H6', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 120,
				)
			)
		);
		
		$wp_customize->add_section(
			new businessexpo_Customize_Section(
				$wp_customize,
				'businessexpo_rtl_settings',
				array(
					'title'    => esc_html__( 'RTL Settings', 'businessexpo' ),
					'panel'    => 'businessexpo_theme_typography',
					'priority' => 130,
				)
			)
		);


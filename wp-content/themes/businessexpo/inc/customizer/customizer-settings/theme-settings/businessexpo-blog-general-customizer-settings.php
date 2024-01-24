<?php
/**
 * General Blog.
 *
 * @package     businessexpo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Blog_General_Option' ) ) :

	/**
	 * General Blog..
	 */
	class businessexpo_Customize_Blog_General_Option extends businessexpo_Customize_Base_Option {

		public function elements() {

			return array(

				'businessexpo_general_arcive_single_blog_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Blog/Archive Page Settings', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
					),
				),

				// Blog Meta
				'businessexpo_blog_content_ordering'     => array(
					'setting' => array(
						'default'           => array(
							'title',
							'meta-one',
							'meta-two',
							'image',
						),
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 2,
						'label'       => esc_html__( 'Post Meta Settings', 'businessexpo' ),
						'description' => esc_html__( 'Drag & Drop Post Meta to re-arrange the Order. + You can also hide Blog Meta by click on Eye icon.', 'businessexpo' ),
						'section'     => 'businessexpo_blog_general',
						'choices'     => array(
							'meta-one' => esc_attr__( 'Post Meta', 'businessexpo' ),
							'meta-two' => esc_attr__( 'Category', 'businessexpo' ),
							'title'    => esc_attr__( 'Title', 'businessexpo' ),
							'image'    => esc_attr__( 'Image', 'businessexpo' ),
						),
					),
				),

				'businessexpo_blog_date'                 => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Date (hide/show)', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
					),
				),

				'businessexpo_blog_user'                 => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'User (hide/show)', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
					),
				),

				'businessexpo_blog_comments'             => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 8,
						'label'    => esc_html__( 'Comments (hide/show)', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
					),
				),
				'businessexpo_archive_blog_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 15,
						'label'    => esc_html__( 'Blog Pages Layout', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
					),
				),
				'businessexpo_archive_blog_pages_layout' => array(
					'setting' => array(
						'default'           => 'businessexpo_right_sidebar',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 20,
						'label'    => esc_html__( 'Layout', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
						'choices'  => array(
							'businessexpo_no_sidebar'    => BUSINESSEXPO_THEME_URL . '/assets/img/icons/fullwidth.png',
							'businessexpo_left_sidebar'  => BUSINESSEXPO_THEME_URL . '/assets/img/icons/left-sidebar.png',
							'businessexpo_right_sidebar' => BUSINESSEXPO_THEME_URL . '/assets/img/icons/right-sidebar.png',
						),
					),
				),

				'businessexpo_single_blog_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 30,
						'label'    => esc_html__( 'Single Blog Pages Layout', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
					),
				),

				'businessexpo_single_blog_pages_layout'  => array(
					'setting' => array(
						'default'           => 'businessexpo_right_sidebar',
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 35,
						'label'    => esc_html__( 'Layout', 'businessexpo' ),
						'section'  => 'businessexpo_blog_general',
						'choices'  => array(
							'businessexpo_no_sidebar'    => BUSINESSEXPO_THEME_URL . '/assets/img/icons/fullwidth.png',
							'businessexpo_left_sidebar'  => BUSINESSEXPO_THEME_URL . '/assets/img/icons/left-sidebar.png',
							'businessexpo_right_sidebar' => BUSINESSEXPO_THEME_URL . '/assets/img/icons/right-sidebar.png',
						),
					),
				),
			);
		}
	}

	new businessexpo_Customize_Blog_General_Option();
endif;

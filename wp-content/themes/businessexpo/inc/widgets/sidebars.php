<?php

function businessexpo_theme_widgets() {

	// Blog / Page Sidebar Widget
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Widget', 'businessexpo' ),
			'id'            => 'sidebar-widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer_widget_area_left',
			'name'          => __( 'Footer Widget First Column', 'businessexpo' ),
			'description'   => __( 'Footer Widget First Column', 'businessexpo' ),
			'before_widget' => '<aside class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<div class=""><h4 class="widget-title">',
			'after_title'   => '</h4><span></span></div>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer_widget_area_center',
			'name'          => __( 'Footer Widget Second Column', 'businessexpo' ),
			'description'   => __( 'Footer Widget Second Column', 'businessexpo' ),
			'before_widget' => '<aside class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<div class=""><h4 class="widget-title">',
			'after_title'   => '</h4><span></span></div>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer_widget_area_right',
			'name'          => __( 'Footer Widget Third Column', 'businessexpo' ),
			'description'   => __( 'Footer Widget Third Column', 'businessexpo' ),
			'before_widget' => '<aside class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<div class=""><h4 class="widget-title">',
			'after_title'   => '</h4><span></span></div>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'woocommerce',
			'name'          => __( 'WooCommerce sidebar widget area', 'businessexpo' ),
			'description'   => __( 'WooCommerce sidebar widget area.', 'businessexpo' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'businessexpo_theme_widgets' );

<?php
 /**
 * Enqueue scripts and styles.
 */
function renoval_scripts() {
	
	// Styles	
	wp_enqueue_style('owl-carousel-min',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css');
	
	wp_enqueue_style('renoval-editor-style',get_template_directory_uri().'/assets/css/editor-style.css');

	wp_enqueue_style('renoval-default', get_template_directory_uri() . '/assets/css/color/default.css');


	wp_enqueue_style('renoval-widgets',get_template_directory_uri().'/assets/css/widget.css');

	wp_enqueue_style('renoval-main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('renoval-menu', get_template_directory_uri() . '/assets/css/menu.css');
	
	wp_enqueue_style('renoval-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css');
	wp_enqueue_style('renoval-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	
	wp_enqueue_style( 'renoval-style', get_stylesheet_uri() );
	
	// Scripts
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), true);
	
	wp_enqueue_script('owl-carousel-thumb', get_template_directory_uri() . '/assets/js/owl.carousel.thumbs.min.js', array('jquery'), true);
	
	wp_enqueue_script('boids-canvas', get_template_directory_uri() . '/assets/js/boids-canvas.min.js', array('jquery'), true);
	
	wp_enqueue_script('slicknav-min', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), true);
	
	wp_enqueue_script('bootstrap-magnify', get_template_directory_uri() . '/assets/js/bootstrap-magnify.min.js', array('jquery'), true);
	
	// wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'), true);
	
	// wp_enqueue_script('jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), false, true);
	
	// wp_enqueue_script('masonry', get_template_directory_uri() . '/assets/js/masonry.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('renoval-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'renoval_scripts' );

//Admin Enqueue for Admin
function renoval_admin_enqueue_scripts(){
	wp_enqueue_style('renoval-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'renoval_admin_enqueue_scripts' );
?>
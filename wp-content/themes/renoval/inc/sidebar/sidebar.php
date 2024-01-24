<?php	
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package renoval
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function renoval_widgets_init() {	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'renoval' ),
		'id' => 'renoval-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'renoval' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title"><span></span>',
		'after_title' => '</h5>',
	) );	
	 
	register_sidebar( array(
		'name' => __( 'Footer 1', 'renoval' ),
		'id' => 'renoval-footer-layout-first',
		'description' => __( 'The Footer Layout Left', 'renoval' ),
		'before_widget' => ' <aside id="%1$s" class="%2$s footer_content_wrap">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	 
	register_sidebar( array(
		'name' => __( 'Footer 2', 'renoval' ),
		'id' => 'renoval-footer-layout-second',
		'description' => __( 'The Footer Layout Left Middle', 'renoval' ),
		'before_widget' => ' <aside id="%1$s" class="%2$s footer_content_wrap">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	 
	register_sidebar( array(
		'name' => __( 'Footer 3', 'renoval' ),
		'id' => 'renoval-footer-layout-third',
		'description' => __( 'The Footer Layout Right Middle', 'renoval' ),
		'before_widget' => ' <aside id="%1$s" class="%2$s footer_content_wrap">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 4', 'renoval' ),
		'id' => 'renoval-footer-layout-fourth',
		'description' => __( 'The Footer Layout Right', 'renoval' ),
		'before_widget' => ' <aside id="%1$s" class="%2$s footer_content_wrap">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	
	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'renoval' ),
		'id' => 'renoval-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'renoval' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'renoval_widgets_init' );
?>
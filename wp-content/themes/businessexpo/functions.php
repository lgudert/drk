<?php
/**
 *  Theme Functions
 *
 *  @package BusinessExpo
 */

// Businessexpo Theme URL.
define( 'BUSINESSEXPO_THEME_URL', get_template_directory_uri() );
define( 'BUSINESSEXPO_THEME_DIR', get_template_directory() );

// Customizer comments display.
require_once 'custom-comments.php';

// Businessexpo Theme Option Panel CSS and JS Backend.
add_action( 'wp_enqueue_scripts', 'businessexpo_backend_resources' );

// On theme activation add defaults theme settings and data.
add_action( 'after_setup_theme', 'businessexpo_default_theme_options_setup', 'theme_prefix_setup' );

/**
 * Theme Default Settings
 */
function businessexpo_default_theme_options_setup() {

	// Add Theme support Title Tag.
	add_theme_support( 'title-tag' );

	// Logo.
	add_theme_support(
		'custom-logo',
		array(
			'default-image' => get_stylesheet_directory_uri() . '/img/logo.jpg',
			'width'         => 250,
			'height'        => 250,
			'flex-width'    => true,
			'flex-height'   => true,
		)
	);

	// Set the content_width with 900.
	if ( ! isset( $content_width ) ) {
		$content_width = 900;
	}

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'businessexpo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_editor_style( 'css/editor-style.css' );

	// Featured Image.
	add_theme_support( 'post-thumbnails' );

	// RSS Feed.
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// woo-commerce theme support.
	add_theme_support( 'woocommerce' );

	add_theme_support( 'wc-product-gallery-zoom' );

	add_theme_support( 'wc-product-gallery-lightbox' );

	add_theme_support( 'wc-product-gallery-slider' );

}

/**
 * Businessexpo - Load Theme Option Panel CSS and JS Start
 **/
function businessexpo_backend_resources() {

	// CSS Files.
	wp_enqueue_style( 'bootstrap-min-css', BUSINESSEXPO_THEME_URL . '/assets/css/bootstrap.min.css', array(), '5.0.0' );
	wp_enqueue_style( 'animate-css', BUSINESSEXPO_THEME_URL . '/assets/css/animate.css' );
	wp_enqueue_style( 'businessexpo-skin-default-css', BUSINESSEXPO_THEME_URL . '/assets/css/skin-default.css' );

	wp_enqueue_style( 'businessexpo-all-min-css', BUSINESSEXPO_THEME_URL . '/assets/css/all.min.css' );
	wp_enqueue_style( 'font-awesome-css', BUSINESSEXPO_THEME_URL . '/assets/css/font-awesome/css/font-awesome.min.css' );

	wp_enqueue_style( 'owl-carousel-css', BUSINESSEXPO_THEME_URL . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'businessexpo-menu-css', BUSINESSEXPO_THEME_URL . '/assets/css/menu.css' );
	wp_enqueue_style( 'businessexpo-footer-css', BUSINESSEXPO_THEME_URL . '/assets/css/footer.css' );

	wp_enqueue_style( 'businessexpo-logo-css', BUSINESSEXPO_THEME_URL . '/assets/css/logo.css' );
	wp_enqueue_style( 'businessexpo-style', get_stylesheet_uri() );

	// Google Fonts Library.
	wp_enqueue_style( 'businessexpo-OpenSans-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,500,600,600i,700,700i,800', false );
	wp_enqueue_style( 'businessexpo-Montserrat-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,700,800,900', false );

	// Comment reply enable.
	wp_enqueue_script( 'comment-reply' );

	// JS Files.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'businessexpo-menu-js', BUSINESSEXPO_THEME_URL . '/assets/js/menu.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'businessexpo-mobile-menu-js', BUSINESSEXPO_THEME_URL . '/assets/js/mobile-menu.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'businessexpo-bootstrap-min-js', BUSINESSEXPO_THEME_URL . '/assets/js/bootstrap.min.js' );
	wp_enqueue_script( 'resize-observer-polyfill', BUSINESSEXPO_THEME_URL . '/assets/js/ResizeObserver.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'owl-carousel-js', BUSINESSEXPO_THEME_URL . '/assets/js/owl.carousel.min.js' );
	wp_enqueue_script( 'businessexpo-main-js', BUSINESSEXPO_THEME_URL . '/assets/js/main.js' );

}
// Businessexpo - Load Theme Option Panel CSS and JS End.

/**
 * Enqueue admin scripts and styles. Only For Free version
 */
function businessexpo_admin_enqueue_scripts() {
	wp_enqueue_style( 'businessexpo-admin-style', get_template_directory_uri() . '/inc/admin/css/admin.css' );
	wp_enqueue_script( 'businessexpo-admin-script', get_template_directory_uri() . '/inc/admin/js/businessexpo-admin-script.js', array( 'jquery' ), '', true );
	wp_localize_script(
		'businessexpo-admin-script',
		'businessexpo_ajax_object',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
	);
	// For Selector Scroller.
	wp_enqueue_style( 'businessexpo-selector-scroll-style', get_template_directory_uri() . '/inc/customizer/assets/css/customize.css' );
	wp_enqueue_script( 'businessexpo-customizer-sections', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-section.js', array( 'jquery' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'businessexpo_admin_enqueue_scripts' );

function businessexpo_custom_enqueue_scripts(){
	//Customizer custom Css for theme style (hide bullets/radio button)
	wp_enqueue_style('businessexpo-customize-css', BUSINESSEXPO_THEME_URL . '/assets/css/customize.css');
}
add_action( 'admin_enqueue_scripts', 'businessexpo_custom_enqueue_scripts' );


// Theme version.
$businessexpo_theme = wp_get_theme();
define( 'BUSINESSEXPO_THEME_VERSION', $businessexpo_theme->get( 'Version' ) );
define( 'BUSINESSEXPO_THEME_NAME', $businessexpo_theme->get( 'Name' ) );

/**
 * Custom Theme Menu Register
 */
function businessexpo_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu', 'businessexpo' ) );
}
add_action( 'init', 'businessexpo_menu' );

/**
 * Recommended Plugins
 */
function businessexpo_plugin_recommend() {
	$plugins = array(
		array(
			'name'     => 'Filter Gallery',
			'slug'     => 'filter-gallery',
			'required' => false,
		),
		array(
			'name'     => 'Slider Factory',
			'slug'     => 'slider-factory',
			'required' => false,
		),
		array(
			'name'     => 'Flickr Album Gallery',
			'slug'     => 'flickr-album-gallery',
			'required' => false,
		),
		array(
			'name'     => 'Customizer Login Page',
			'slug'     => 'customizer-login-page',
			'required' => false,
		),

	);
	businessexpo_tgmpa( $plugins );
}
add_action( 'businessexpo_tgmpa_register', 'businessexpo_plugin_recommend' );


// TGM Plugin File
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

// Typography setting.
require BUSINESSEXPO_THEME_DIR . '/inc/businessexpo-typography.php';

// Businessexpo Widgets
require BUSINESSEXPO_THEME_DIR . '/inc/widgets/sidebars.php';

/**
 * Register Custom Navigation Walker
 */
function businessexpo_register_navwalker() {
	require BUSINESSEXPO_THEME_DIR . '/inc/menu/businessexpo-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'businessexpo_register_navwalker' );

// Theme Custom Header File
require BUSINESSEXPO_THEME_DIR . '/inc/custom-header.php';

// Customzier Files
require BUSINESSEXPO_THEME_DIR . '/inc/customizer/businessexpo-customizer.php';
require BUSINESSEXPO_THEME_DIR . '/inc/customizer/businessexpo-customizer-options.php';

// Admin Files
//$businessexpo_theme = wp_get_theme();
//if ( 'BusinessExpo' == $businessexpo_theme->name ) {
	if ( is_admin() ) {
		require BUSINESSEXPO_THEME_DIR . '/inc/admin/getting-started.php';
	}
//}

/**
 * Skip Link
 */
function businessexpo_skip_to_content() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . esc_html__( 'Skip to content', 'businessexpo' ) . '</a>';
}
add_action( 'wp_body_open', 'businessexpo_skip_to_content', 5 );

// Theme Extra Function File
require BUSINESSEXPO_THEME_DIR . '/inc/businessexpo-theme-function.php';

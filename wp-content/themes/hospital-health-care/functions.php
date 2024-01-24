<?php
/**
 * Theme functions and definitions
 *
 * @package Hospital Health Care
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * After theme setup
 */
function hospital_health_care_theme_setup(){
	require get_stylesheet_directory() . '/inc/customizer/hospital-health-care-customizer-options.php';	
}
add_action( 'after_setup_theme', 'hospital_health_care_theme_setup' );


/**
 * Load theme assets.
 */
function hospital_health_care_theme_css() {
	wp_enqueue_style('hospital-health-care-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('hospital-health-care-child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('hospital-health-care-default-css', get_stylesheet_directory_uri() . "/assets/css/skin-blue.css" );
}
add_action( 'wp_enqueue_scripts', 'hospital_health_care_theme_css', 99);

/**
 * Import Options From Parent Theme
 *
 */
function hospital_health_care_parent_theme_options() {
	$awp_companion_mods = get_option( 'theme_mods_awp_companion' );
	if ( ! empty( $awp_companion_mods ) ) {
		foreach ( $awp_companion_mods as $awp_companion_mods_k => $awp_companion_mod_v ) {
			set_theme_mod( $awp_companion_mods_k, $awp_companion_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'hospital_health_care_parent_theme_options' );


/**
 * Fresh site activate
 *
 */
$hospital_health_care_fresh_site_activate = get_option( 'fresh_hospital_health_care_site_activate' );
if ( (bool) $hospital_health_care_fresh_site_activate === false ) {
	
	set_theme_mod( 'awpbusinesspress_typography_disabled', true );
	
	set_theme_mod( 'awpbusinesspress_typography_disabled', true );
	set_theme_mod( 'awpbusinesspress_typography_h1_font_family', 'Hammersmith One' );
	set_theme_mod( 'awpbusinesspress_typography_h2_font_family', 'Montserrat' );
	set_theme_mod( 'awpbusinesspress_typography_h3_font_family', 'Montserrat Alternates' );
	set_theme_mod( 'awpbusinesspress_typography_h4_font_family', 'Montserrat Alternates' );
	set_theme_mod( 'awpbusinesspress_typography_h5_font_family', 'Montserrat' );
	set_theme_mod( 'awpbusinesspress_typography_h6_font_family', 'Montserrat' );
	
update_option( 'fresh_hospital_health_care_site_activate', true );
}






/**
 * Page header
 *
 */
function hospital_health_care_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'hospital_health_care_custom_header_args', array(
		'default-image'      => get_stylesheet_directory_uri().'/assets/img/hospital-health-care-page-header.jpg',
		'default-text-color' => 'fff',
		'width'              => 1920,
		'height'             => 500,
		'flex-height'        => true,
		'flex-width'         => true,
		'wp-head-callback'   => 'hospital_health_care_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'hospital_health_care_custom_header_setup' );

if ( ! function_exists( 'hospital_health_care_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see hospital_health_care_header_style().
	 */
	function hospital_health_care_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
				?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}

			<?php
			// If the user has set a custom color for the text use that.
			else :
				?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?> !important;
			}

			<?php endif; ?>
		</style>
		<?php
	}
endif;
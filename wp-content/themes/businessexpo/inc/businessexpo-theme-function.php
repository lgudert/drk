<?php
/**
 * Extra Theme Function
 *
 * @package BusinessExpo
 */

/**
 *  Custom Logo
 **/
function businessexpo_header_logo() { ?>
	<div class="logo_class">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			}
			if ( display_header_text() ) :
				?>
				<div class="row site-branding-text"><!--Logo-->
					<div class="col-md-3"></div>
					<div class="col-md-6 text-center">
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="">
							<h1 class="site-title"><?php esc_attr( bloginfo( 'name' ) ); ?></h1>
							<?php
							// Site tagline - description
							$businessexpo_description = get_bloginfo( 'description', 'display' );
							if ( $businessexpo_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo esc_html( $businessexpo_description ); ?></p>
								<?php
							endif;
							?>
						</a>
					</div>
					<div class="col-md-3 text-right"></div>
				</div>
			<?php endif; ?>
	</div>
	<?php
}

/**
 * Theme Page Header Title
 */
function businessexpo_theme_page_header_title() {
	if ( is_archive() ) {
		echo '<div class="page-header-title text-center"><h1 class="text-white">';
		if ( is_day() ) :
			/* translators: %1$s %2$s: date */
			printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Archives', 'businessexpo' ), get_the_date() );
		elseif ( is_month() ) :
			/* translators: %1$s %2$s: month */
			printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Archives', 'businessexpo' ), get_the_date( 'F Y' ) );
		elseif ( is_year() ) :
			/* translators: %1$s %2$s: year */
			printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Archives', 'businessexpo' ), get_the_date( 'Y' ) );
		elseif ( is_author() ) :
			/* translators: %1$s %2$s: author */
			printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'All posts by', 'businessexpo' ), get_the_author() );
		elseif ( is_category() ) :
			/* translators: %1$s %2$s: category */
			printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Category', 'businessexpo' ), single_cat_title( '', false ) );
		elseif ( is_tag() ) :
			/* translators: %1$s %2$s: tag */
			printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Tag', 'businessexpo' ), single_tag_title( '', false ) );
		elseif ( class_exists( 'WooCommerce' ) && is_shop() ) :
			/* translators: %1$s %2$s: WooCommerce */
			printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Shop', 'businessexpo' ), single_tag_title( '', false ) );
		elseif ( is_archive() ) :
			the_archive_title( '<h1 class="text-white">', '</h1>' );
		endif;
		echo '</h1></div>';
	} elseif ( is_404() ) {
		echo '<div class="page-header-title text-center"><h1 class="text-white">';
		/* translators: %1$s: 404 */
		printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Error 404', 'businessexpo' ) );
		echo '</h1></div>';
	} elseif ( is_search() ) {
		echo '<div class="page-header-title text-center"><h1 class="text-white">';
		/* translators: %1$s %2$s: search */
		printf( esc_html__( '%1$s %2$s', 'businessexpo' ), esc_html__( 'Search results for', 'businessexpo' ), get_search_query() );
		echo '</h1></div>';
	} else {
		echo '<h1 class="text-white">' . esc_html( get_the_title() ) . '</h1>';
	}
}

/**
 * Theme Breadcrumbs Url
 */
function businessexpo_page_url() {
	$page_url = 'http';
	if ( key_exists( 'HTTPS', $_SERVER ) && ( $_SERVER['HTTPS'] == 'on' ) ) {
		$page_url .= 's';
	}
	$page_url .= '://';
	if ( $_SERVER['SERVER_PORT'] != '80' ) {
		$page_url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
	} else {
		$page_url .= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	}
	return $page_url;
}

/**
 * Theme Breadcrumbs
*/
if ( ! function_exists( 'businessexpo_page_header_breadcrumbs' ) ) :
	function businessexpo_page_header_breadcrumbs() {
		global $post;
		$homeLink = home_url();

		echo '<ul id="content" class="page-breadcrumb text-center">';
		if ( is_home() || is_front_page() ) :
				echo '<li><a href="' . esc_url( $homeLink ) . '">' . esc_html__( 'Home', 'businessexpo' ) . '</a></li>';
					echo '<li class="active">';
			echo single_post_title();
			echo '</li>';
						else :
							echo '<li><a href="' . esc_url( $homeLink ) . '">' . esc_html__( 'Home', 'businessexpo' ) . '</a></li>';
							if ( is_category() ) {
								echo '<li class="active"><a href="' . esc_url( businessexpo_page_url() ) . '">' . esc_html__( 'Archive by category', 'businessexpo' ) . ' "' . single_cat_title( '', false ) . '"</a></li>';
							} elseif ( is_day() ) {
								echo '<li class="active"><a href="' . esc_url( get_year_link( esc_attr( get_the_time( 'Y' ) ) ) ) . '">' . esc_html( get_the_time( 'Y' ) ) . '</a>';
								echo '<li class="active"><a href="' . esc_url( get_month_link( esc_attr( get_the_time( 'Y' ) ), esc_attr( get_the_time( 'm' ) ) ) ) . '">' . esc_html( get_the_time( 'F' ) ) . '</a>';
								echo '<li class="active"><a href="' . esc_url( businessexpo_page_url() ) . '">' . esc_html( get_the_time( 'd' ) ) . '</a></li>';
							} elseif ( is_month() ) {
								echo '<li class="active"><a href="' . esc_url( get_year_link( esc_attr( get_the_time( 'Y' ) ) ) ) . '">' . esc_html( get_the_time( 'Y' ) ) . '</a>';
								echo '<li class="active"><a href="' . esc_url( businessexpo_page_url() ) . '">' . esc_html( get_the_time( 'F' ) ) . '</a></li>';
							} elseif ( is_year() ) {
								echo '<li class="active"><a href="' . esc_url( businessexpo_page_url() ) . '">' . esc_html( get_the_time( 'Y' ) ) . '</a></li>';
							} elseif ( is_single() && ! is_attachment() && is_page( 'single-product' ) ) {
								if ( get_post_type() != 'post' ) {
									$cat = get_the_category();
									$cat = $cat[0];
									echo '<li>';
									echo esc_html( get_category_parents( $cat, true, '' ) );
									echo '</li>';
									echo '<li class="active"><a href="' . esc_url( businessexpo_page_url() ) . '"></a></li>';
								}
							} elseif ( is_page() && $post->post_parent ) {
								$parent_id   = $post->post_parent;
								$breadcrumbs = array();
								while ( $parent_id ) {
									$page          = get_page( $parent_id );
									$breadcrumbs[] = '<li class="active"><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . get_the_title( $page->ID ) . '</a>';
									$parent_id     = $page->post_parent;
								}
								$breadcrumbs = array_reverse( $breadcrumbs );
								foreach ( $breadcrumbs as $crumb ) {
									echo $crumb;
								}
								echo '<li class="active"><a href="' . esc_url( businessexpo_page_url() ) . '">' . esc_html( get_the_title() ) . '</a></li>';
							}
					endif;
						echo '</ul>';
	}
endif;

/**
 *  Get sticky main menu class name
 **/
function businessexpo_sticky_main_menu_class() {
	$sticky_main_menu = get_theme_mod( 'businessexpo_menu_style', 'sticky' );

	if ( $sticky_main_menu == 'sticky' ) {
		return 'site-menu-content--sticky';
	}

	return '';
}


/**
 *  Check if admin bar is enabled
 **/
function businessexpo_is_admin_bar_enabled() {

	if ( is_admin_bar_showing() ) {
		return 'admin-bar-enabled';
	}

	return '';
}

/**
 *  Check the device
 **/
function BusinessexpoisMobile() {
	return preg_match( '/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT'] );
}

/**
 * Select sanitization callback
 */
function businessexpo_sanitize_select( $value ) {
	if ( is_array( $value ) ) {
		foreach ( $value as $key => $subvalue ) {
			$value[ $key ] = sanitize_text_field( $subvalue );
		}
		return $value;
	}
	return sanitize_text_field( $value );
}

/**
 * Custom CSS
 */

if ( ! function_exists( 'businessexpo_custom_customizer_options' ) ) :
	function businessexpo_custom_customizer_options() {

		$output_css = '';

		// Page Header Image
		if ( has_header_image() ) :
			$output_css .= '.page-title-module {
				background: #17212c url(' . esc_url( get_header_image() ) . ");
				background-attachment: scroll;
				background-position: top center;
				background-repeat: no-repeat;
				background-size: cover;
			}\n";
		endif;

		// Page Header color CSS.
		$businessexpo_page_header_background_color = get_theme_mod( 'businessexpo_page_header_background_color', true );
		$output_css                               .= '.page-title-module:before {
			background-color: ' . esc_attr( $businessexpo_page_header_background_color ) . ";
		}\n";

		// if Page Header Disable (menu-top-margin).
		$businessexpo_menu_overlap         = get_theme_mod( 'businessexpo_menu_overlap', true );
		$businessexpo_page_header_disabled = get_theme_mod( 'businessexpo_page_header_disabled', true );

		if ( $businessexpo_menu_overlap == true && $businessexpo_page_header_disabled != true ) :
			$output_css .= ".menu-overlap {
			    margin-top: 8% !important;
			}\n";
		endif;

		wp_add_inline_style( 'businessexpo-style', $output_css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'businessexpo_custom_customizer_options' );


add_action( 'after_switch_theme', 'businessexpo_import_theme_mods_from_child_themes_to_parent_theme' );

/**
 * Import theme mods
 */
function businessexpo_import_theme_mods_from_child_themes_to_parent_theme() {

	// Get the name of the previously active theme.
	$previous_theme = strtolower( get_option( 'theme_switched' ) );

	if ( ! in_array(
		$previous_theme,
		array(
			'BusinessExpo',
			'Architect Designs',
		)
	) ) {
		return;
	}

	// Get the theme mods from the previous theme.
	$previous_theme_content = get_option( 'theme_mods_' . $previous_theme );

	if ( ! empty( $previous_theme_content ) ) {
		foreach ( $previous_theme_content as $previous_theme_mod_k => $previous_theme_mod_v ) {
			set_theme_mod( $previous_theme_mod_k, $previous_theme_mod_v );
		}
	}
}


/**
 * Admin notice
 */
class businessexpo_screen {
	public function __construct() {
		/* notice  Lines*/
		add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
		add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
		add_action( 'load-themes.php', array( $this, 'businessexpo_activation_admin_notice' ) );
	}
	public function businessexpo_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ( 'themes.php' == $pagenow ) ) {
			add_action( 'admin_notices', array( $this, 'businessexpo_admin_notice' ), 99 );
		}
	}
	/**
	 * Display an admin notice linking to the welcome screen
	 *
	 * @sfunctionse 1.8.2.4
	 */
	public function businessexpo_admin_notice() {
		if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) ){ ?>
			<div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
				<?php
					echo '<div><a href="' . esc_url( wp_nonce_url( add_query_arg( 'gs-notice-dismissed', 'dismiss_admin_notices' ) ) ) . '" class="getting-started-notice-dismiss"> Dismiss this notice </a></div>';
				?>
				<div class="businessexpo-getting-started-notice clearfix">
					<div class="businessexpo-theme-screenshot">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'businessexpo' ); ?>" />
					</div><!-- /.businessexpo-theme-screenshot -->
					<div class="businessexpo-theme-notice-content">
						<h2 class="businessexpo-notice-h2">
							<?php
							printf(
							/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
								esc_html__( 'Welcome! Thank you for choosing %1$s!', 'businessexpo' ),
								'<strong>' . wp_get_theme()->get( 'Name' ) . '</strong>'
							);
							?>
							 
						</h2>

						<p class="plugin-install-notice"><?php echo sprintf( __( 'To take full advantage of all the features of this theme, please install and activate the <strong>WpFrank Companion</strong> plugin, then enjoy this theme.', 'businessexpo' ) ); ?></p>

						<a class="businessexpo-btn-get-started button button-primary button-hero businessexpo-button-padding" href="#" data-name="" data-slug="">
						<?php
						printf(
						/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
							esc_html__( 'Get started with %1$s', 'businessexpo' ),
							'<strong>' . wp_get_theme()->get( 'Name' ) . '</strong>'
						);
						?>

						</a><span class="businessexpo-push-down">
						<?php
							/* translators: %1$s: Anchor link start %2$s: Anchor link end */
							printf(
								'or %1$sCustomize theme%2$s</a></span>',
								'<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
								'</a>'
							);
						?>
						
					</div><!-- /.businessexpo-theme-notice-content -->
				</div>
			</div>
			<?php
		}
	}

	/**
	 * Register dismissal of the getting started notification.
	 * Acts on the dismiss link.
	 * If clicked, the admin notice disappears and will no longer be visible to this user.
	 */
	public function getting_started_notice_dismissed() {

		if ( isset( $_GET['gs-notice-dismissed'] ) ) {
			add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
		}
	}

	/**
	 * Deletes the getting started notice's dismiss status upon theme switch.
	 */
	public function flush_dismiss_status() {
		delete_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
	}

}
$GLOBALS['businessexpo_screen'] = new businessexpo_screen();

/**
* Plugin installer
*/

add_action( 'wp_ajax_install_act_plugin', 'businessexpo_admin_install_plugin' );

function businessexpo_admin_install_plugin() {
	/**
	 * Install Plugin.
	 */
	include_once ABSPATH . '/wp-admin/includes/file.php';
	include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
	include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

	if ( ! file_exists( WP_PLUGIN_DIR . '/wpfrank-companion' ) ) {
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( 'wpfrank-companion' ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );
	}
	
	// Activate plugin.
	if ( current_user_can( 'activate_plugin' ) ) {
		$result = activate_plugin( 'wpfrank-companion/wpfrank-companion.php' );
	}

	if ( ! file_exists( WP_PLUGIN_DIR . '/coming-soon-maintenance-mode' ) ) {
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( 'coming-soon-maintenance-mode' ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );
	}

	// Activate plugin.
	if ( current_user_can( 'activate_plugin' ) ) {
		$result = activate_plugin( 'coming-soon-maintenance-mode/coming-soon-maintenance-mode.php' );
	}
}
?>

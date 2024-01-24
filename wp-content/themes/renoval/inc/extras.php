<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package renoval
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function renoval_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Header Type
	$renoval_header_type ='';
	$theme = wp_get_theme();
	if ('Renoval' == $theme->name):
	
	$renoval_header_type	=	get_theme_mod('renoval_header_type','header-2');
	
	endif;
	$classes[] = esc_attr($renoval_header_type);
	
	return $classes;
}
add_filter( 'body_class', 'renoval_body_classes' );

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Backward compatibility for wp_body_open hook.
	 *
	 * @since 1.0.0
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

if (!function_exists('renoval_str_replace_assoc')) {

    /**
     * renoval_str_replace_assoc
     * @param  array $replace
     * @param  array $subject
     * @return array
     */
    function renoval_str_replace_assoc(array $replace, $subject) {
        return str_replace(array_keys($replace), array_values($replace), $subject);
    }
}

// Comments Counts
if ( ! function_exists( 'renoval_comment_count' ) ) :
function renoval_comment_count() {
	$renoval_comments_count 	= get_comments_number();
	if ( 0 === intval( $renoval_comments_count ) ) {
		echo esc_html__( '0 Comment', 'renoval' );
	} else {
		/* translators: %s Comment number */
		 echo sprintf( _n( '%s Comment', '%s Comments', $renoval_comments_count, 'renoval' ), number_format_i18n( $renoval_comments_count ) );
	}
} 
endif;

//Background Image Pattern
function renoval_background_pattern()
{
	$bg_pattern = get_theme_mod('bg_pattern','bg-img1.png');
	if($bg_pattern!='')
	{
	echo '<style>body.boxed { background:url("'.get_template_directory_uri().'/assets/images/bg-pattern/'.$bg_pattern.'");}</style>';
	}
}
add_action('wp_head','renoval_background_pattern',10,0);


// author profile data
// function renoval_author_social_icons( $authoricons ) {
		// $authoricons['designation'] = 'Designation';
		// $authoricons['facebook_profile'] = 'Facebook Profile URL';
		// $authoricons['twitter_profile'] = 'Twitter Profile URL';
		// $authoricons['linkedin_profile'] = 'Linkedin Profile URL';
		// $authoricons['instagram_profile'] = 'Instagram Profile URL';
		// $authoricons['pinterest_profile'] = 'Pinterest Profile URL';
		// $authoricons['skype_profile'] = 'Skype Profile URL';
		// return $authoricons;
	// }
// add_filter( 'user_contactmethods', 'renoval_author_social_icons', 10, 1);

/**
 * Display Sidebars
 */
if ( ! function_exists( 'renoval_get_sidebars' ) ) {
	/**
	 * Get Sidebar
	 *
	 * @since 1.0
	 * @param  string $sidebar_id   Sidebar Id.
	 * @return void
	 */
	function renoval_get_sidebars( $sidebar_id ) {
		if ( is_active_sidebar( $sidebar_id ) ) {
			dynamic_sidebar( $sidebar_id );
		} elseif ( current_user_can( 'edit_theme_options' ) ) {
			?>
			<div class="widget">
				<p class='no-widget-text'>
					<a href='<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>'>
						<?php esc_html_e( 'Add Widget', 'renoval' ); ?>
					</a>
				</p>
			</div>
			<?php
		}
	}
}

/**
 * Get registered sidebar name by sidebar ID.
 *
 * @since  1.0.0
 * @param  string $sidebar_id Sidebar ID.
 * @return string Sidebar name.
 */
function renoval_get_sidebar_name_by_id( $sidebar_id = '' ) {

	if ( ! $sidebar_id ) {
		return;
	}

	global $wp_registered_sidebars;
	$sidebar_name = '';

	if ( isset( $wp_registered_sidebars[ $sidebar_id ] ) ) {
		$sidebar_name = $wp_registered_sidebars[ $sidebar_id ]['name'];
	}

	return $sidebar_name;
}



// if (!function_exists('renoval_post_count')) {
    // function renoval_post_count($post_count=1) {
       // if($post_count<10):
			// return $post_count='0'.$post_count + 1;
		// else:		
			// return $post_count=$post_count + 1;
		// endif;	
    // }
// add_action('renoval_post_count','renoval_post_count');
// }


// Renoval Preloader
if ( ! function_exists( 'renoval_preloader' ) ) :
function renoval_preloader() {
	$hs_preloader 	= get_theme_mod( 'hs_preloader'); 
	if($hs_preloader == '1') { 
	?>
	<div id="preloader" class="preloader">
			<div class="loader-107">
				<img src="<?php echo esc_url(get_template_directory_uri() .'/assets/images/truck2.png');?>" alt="<?php echo esc_attr__('Image','renoval'); ?>" class="main-truck">
				<div class="smoke-load"><img src="<?php echo esc_url(get_template_directory_uri() .'/assets/images/smoke.png');?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
				<div class="tyres">
					<div class="tyre1"><img src="<?php echo esc_url(get_template_directory_uri() .'/assets/images/front-tyre.png');?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
					<div class="tyre2"><img src="<?php echo esc_url(get_template_directory_uri() .'/assets/images/front-tyre.png');?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
				</div>
			</div>
		</div>
	<?php }
	} 
endif;
add_action( 'renoval_preloader', 'renoval_preloader' );


// Renoval Navigation
if ( ! function_exists( 'renoval_primary_navigation' ) ) :
function renoval_primary_navigation() {
	wp_nav_menu( 
		array(  
			'theme_location' => 'primary_menu',
			'container'  => '',
			'menu_class' => 'main-menu',
			'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
			'walker' => new WP_Bootstrap_Navwalker()
			 ) 
		);
	} 
endif;
add_action( 'renoval_primary_navigation', 'renoval_primary_navigation' );

// Renoval Navigation
// if ( ! function_exists( 'renoval_footer_navigation' ) ) :
// function renoval_footer_navigation() {
	// wp_nav_menu( 
		// array(  
			// 'theme_location' => 'footer_menu',
			// 'container'  => '',
			// 'menu_class' => 'footer-menu',
			// 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
			// 'walker' => new WP_Bootstrap_Navwalker()
			 // ) 
		// );
	// } 
// endif;
// add_action( 'renoval_footer_navigation', 'renoval_footer_navigation' );


// Renoval Navigation Search
if ( ! function_exists( 'renoval_navigation_search' ) ) :
function renoval_navigation_search() {
	$hide_show_search 	= get_theme_mod( 'hide_show_search','1'); 
	if($hide_show_search=='1'):	
?>
<li class="search-button">
	<button id="view-search-btn" class="header-search-toggle"><i class="fa fa-search"></i></button>
	<div class="view-search-btn header-search-popup">
		<div class="search-overlay-layer"></div>
		<div class="header-search-pop">
			<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr__( 'Site Search', 'renoval' ); ?>">
				<span class="screen-reader-text">Search for:</span>
				<input type="search" class="search-field header-search-field" placeholder="<?php echo esc_attr__('Type To Search', 'renoval' ); ?>" name="s" id="popfocus" value="" autofocus>
				<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
			</form>
			<button type="button" class="close-style header-search-close"></button>
		</div>
	</div>
</li>
<?php endif;
	} 
endif;
add_action( 'renoval_navigation_search', 'renoval_navigation_search' );



// Renoval Navigation Cart
if ( ! function_exists( 'renoval_navigation_cart' ) ) :
function renoval_navigation_cart() {
	$hide_show_cart 	= get_theme_mod( 'hide_show_cart','1'); 
		if($hide_show_cart=='1' && class_exists( 'Woocommerce' )):	
	?>
		<li class="header-cart">
			<a href="javascript:void(0);" class="cart-icon-wrap" id="cart" title="<?php echo esc_attr__('View your shopping cart','renoval'); ?>">
				<i class="fa fa-shopping-basket"></i>
				<?php 
					if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
						$count = WC()->cart->cart_contents_count;
						$cart_url = wc_get_cart_url();
						
						if ( $count > 0 ) {
						?>
							<span class="count"><?php echo esc_html( $count ); ?></span>
						<?php 
						}
						else {
							?>
							<span class="count"><?php echo esc_html_e('0','renoval'); ?></span>
							<?php 
						}
					}
				?>
			</a>
			<!-- Shopping Cart Start -->
			<div class="shopping-cart">
				<?php get_template_part('woocommerce/cart/mini','cart'); ?>
			</div>
			<!-- Shopping Cart End -->
		</li>
	<?php endif; 
	} 
endif;
add_action( 'renoval_navigation_cart', 'renoval_navigation_cart' );




// Renoval Navigation Toggle
if ( ! function_exists( 'renoval_navigation_toggle' ) ) :
function renoval_navigation_toggle() {
	$hs_nav_toggle 				= get_theme_mod( 'hs_nav_toggle','1'); 
	$renoval_toggle_content 	= get_theme_mod( 'renoval_toggle_content','Lorem ipsum is simply dummy text here...');
	if($hs_nav_toggle=='1'):	
?>
	<li class="about-toggle-list">
		<div class="hamburger hamburger-about">
			<button type="button" class="toggle-lines about-toggle">
				<div class="top-bun"></div>
				<div class="meat"></div>
				<div class="bottom-bun"></div>
			</button>
			<!-- Author Popup -->
			<div class="author-popup">
				<div class="author-overlay-layer"></div>
				<div class="author-div">
					<div class="author-anim">
						<button type="button" class="author-close close-style"></button>
						<div class="author-content">
							<?php echo  do_shortcode($renoval_toggle_content); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
<?php endif; 
	} 
endif;
add_action( 'renoval_navigation_toggle', 'renoval_navigation_toggle' );


// Renoval Logo
if ( ! function_exists( 'renoval_logo_content' ) ) :
function renoval_logo_content() {
		if(has_custom_logo())
			{	
				the_custom_logo();
			}
			else { 
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
				<h4 class="site-title">
					<?php 
						echo esc_html(get_bloginfo('name'));
					?>
				</h4>
			</a>	
		<?php 						
			}
		?>
		<?php
			$renoval_description = get_bloginfo( 'description');
			if ($renoval_description) : ?>
				<p class="site-description"><?php echo esc_html($renoval_description); ?></p>
		<?php endif;
	} 
endif;
add_action( 'renoval_logo_content', 'renoval_logo_content' );

// Renoval Footer Group First
if ( ! function_exists( 'renoval_footer_group_first' ) ) :
function renoval_footer_group_first() {
	$footer_bottom_1 			= get_theme_mod('footer_bottom_1','image');	
	$footer_first_img 			= get_theme_mod('footer_first_img',esc_url(get_template_directory_uri() .'/assets/images/logo2.png'));	
	$footer_first_custom 		= get_theme_mod('footer_first_custom');	
	
	
		// Image
		if($footer_bottom_1 == 'image'): ?>
			<?php  if ( ! empty( $footer_first_img ) ){ ?>
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><img src="<?php echo esc_url($footer_first_img); ?>"></a>
				</div>
			<?php } ?>
		<?php endif;
		
		// Custom
		if($footer_bottom_1 == 'custom'): ?>
			<?php  if ( ! empty( $footer_first_custom ) ){ ?>
				<?php 	
					$renoval_copyright_allowed_tags = array(
						'[current_year]' => date_i18n('Y'),
						'[site_title]'   => get_bloginfo('name'),
						'[theme_author]' => sprintf(__('<a href="#">Renoval</a>', 'renoval')),
					);
				?>
				<p>
					<?php
						echo apply_filters('renoval_footer_copyright', wp_kses_post(renoval_str_replace_assoc($renoval_copyright_allowed_tags, $footer_first_custom)));
					?>
				</p>
			<?php } ?>
		<?php endif;
		
		// Widget
		 if($footer_bottom_1 == 'widget'): ?>
			<?php  renoval_get_sidebars( 'renoval-footer-layout-first' ); ?>
		<?php endif; 
		
		// Menu
		 if($footer_bottom_1 == 'menu'): ?>
			<aside class="widget widget_nav_menu">
				<div class="menu-pages-container">
					<?php 
						wp_nav_menu( 
							array(  
								'theme_location' => 'footer_menu',
								'container'  => '',
								'menu_class' => 'menu',
								'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
								'walker' => new WP_Bootstrap_Navwalker()
								 ) 
							);
					?>   
				</div>
			</aside>	
		<?php endif; ?>
	<?php 
	} 
endif;
add_action('renoval_footer_group_first','renoval_footer_group_first');

// Renoval Footer Group Second
if ( ! function_exists( 'renoval_footer_group_second' ) ) :
function renoval_footer_group_second() {
	$footer_bottom_2 			= get_theme_mod('footer_bottom_2','social');
	$footer_social_icons 		= get_theme_mod('footer_social_icons',renoval_get_social_icon_default());	
	$footer_second_custom 		= get_theme_mod('footer_second_custom');
	// Social
	if($footer_bottom_2 == 'social'): ?>
			<aside class="share-toolkit widget widget_social_widget">
				<a href="#" class="toolkit-hover"><i class="fa fa-share-alt"></i></a>
				<ul>
					<?php
						$footer_social_icons = json_decode($footer_social_icons);
						if( $footer_social_icons!='' )
						{
						foreach($footer_social_icons as $social_item){	
						$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'renoval_translate_single_string', $social_item->icon_value, 'Footer section' ) : '';	
						$social_link = ! empty( $social_item->link ) ? apply_filters( 'renoval_translate_single_string', $social_item->link, 'Footer section' ) : '';
					?>
						<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
					<?php }} ?>
				</ul>
			</aside>
		<?php endif; 
		
		// Custom
		 if($footer_bottom_2 == 'custom'): ?>
			<?php 	
				$renoval_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="#">Renoval</a>', 'renoval')),
				);
			?>                        
				<p>
					<?php
						echo apply_filters('renoval_footer_copyright', wp_kses_post(renoval_str_replace_assoc($renoval_copyright_allowed_tags, $footer_second_custom)));
					?>
				</p>
		<?php endif; 
		
		// Widget
		 if($footer_bottom_2 == 'widget'): ?>
			<?php  renoval_get_sidebars( 'renoval-footer-layout-second' ); ?>
		<?php endif; 
		
		// Menu
		 if($footer_bottom_2 == 'menu'): ?>
			<aside class="widget widget_nav_menu">
				<div class="menu-pages-container">
					<?php 
						wp_nav_menu( 
							array(  
								'theme_location' => 'footer_menu',
								'container'  => '',
								'menu_class' => 'menu',
								'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
								'walker' => new WP_Bootstrap_Navwalker()
								 ) 
							);
					?>   
				</div>
			</aside>	
		<?php endif; ?>
	<?php 
	} 
endif;	
add_action('renoval_footer_group_second','renoval_footer_group_second');


// Renoval Footer Group Third
if ( ! function_exists( 'renoval_footer_group_third' ) ) :
function renoval_footer_group_third() {
	$footer_bottom_3 			= get_theme_mod('footer_bottom_3','custom');	
	$footer_third_custom 		= get_theme_mod('footer_third_custom','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
	
		// Custom
		 if($footer_bottom_3 == 'custom'): ?>
			<?php 	
				$renoval_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="#">Renoval</a>', 'renoval')),
				);
			?>                        
				<div class="copyright-text">
					<?php
						echo apply_filters('renoval_footer_copyright', wp_kses_post(renoval_str_replace_assoc($renoval_copyright_allowed_tags, $footer_third_custom)));
					?>
				</div>
		<?php endif; 
		
		// Widget
		 if($footer_bottom_3 == 'widget'): ?>
			<?php  renoval_get_sidebars( 'renoval-footer-layout-three' ); ?>
		<?php endif; 
		
		// Menu
		 if($footer_bottom_3 == 'menu'): ?>
			<aside class="widget widget_nav_menu">
				<div class="menu-pages-container">
					<?php 
						wp_nav_menu( 
							array(  
								'theme_location' => 'footer_menu',
								'container'  => '',
								'menu_class' => 'menu',
								'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
								'walker' => new WP_Bootstrap_Navwalker()
								 ) 
							);
					?>   
				</div>
			</aside>	
		<?php endif; ?>
	<?php 
	} 
endif;	
add_action('renoval_footer_group_third','renoval_footer_group_third');


/**
 * Renoval Above Header Contact Info
 */
if ( ! function_exists( 'renoval_abv_hdr_contact_info' ) ) {
	function renoval_abv_hdr_contact_info() {
		
			$hide_show_cntct_details 	= get_theme_mod( 'hide_show_cntct_details','1'); 
			$tlh_contct_icon 			= get_theme_mod( 'tlh_contct_icon','fa-support'); 	
			$tlh_contact_title 			= get_theme_mod( 'tlh_contact_title','Live Chat'); 
			$tlh_contact_link 			= get_theme_mod( 'tlh_contact_link'); 
				if($hide_show_cntct_details == '1') { ?>
					<aside class="widget widget-contact wgt-1">
						<div class="contact-area">
							<?php if(!empty($tlh_contct_icon)): ?>
								<div class="contact-icon">
								   <i class="fa <?php echo  esc_attr($tlh_contct_icon); ?>"></i>
								</div>
							<?php endif; ?>
							<a href="<?php echo esc_url($tlh_contact_link); ?>" class="contact-info">
								<span class="title"><?php echo esc_html($tlh_contact_title); ?></span>
							</a>
						</div>
					</aside>
				<?php }
				
					$hide_show_email_details 	= get_theme_mod( 'hide_show_email_details','1');
					$tlh_email_icon 			= get_theme_mod( 'tlh_email_icon','fa-envelope'); 	
					$tlh_email_title 			= get_theme_mod( 'tlh_email_title','info@example.com'); 
					$tlh_email_link 			= get_theme_mod( 'tlh_email_link'); 
				?>	
				<?php if($hide_show_email_details == '1') { ?>
						 <aside class="widget widget-contact wgt-2">
							<div class="contact-area">
								<?php if(!empty($tlh_email_icon)): ?>
									<div class="contact-icon">
										<i class="fa <?php echo  esc_attr($tlh_email_icon); ?>"></i>
									</div>
								<?php endif; ?>	
								<a href="<?php echo esc_url($tlh_email_link); ?>" class="contact-info">
									<span class="title"><?php echo esc_html($tlh_email_title); ?></span>
								</a>
							</div>
						</aside>
					<?php } 
					
						$hide_show_mbl_details 	= get_theme_mod( 'hide_show_mbl_details','1'); 	
						$tlh_mobile_icon 		= get_theme_mod( 'tlh_mobile_icon','fa-whatsapp');
						$tlh_mobile_title 		= get_theme_mod( 'tlh_mobile_title','+01-9876543210'); 
						$tlh_mobile_link 		= get_theme_mod( 'tlh_mobile_link'); 
					?>
					<?php if($hide_show_mbl_details == '1') { ?>
						<aside class="widget widget-contact wgt-3">
							<div class="contact-area">
								<?php if(!empty($tlh_mobile_icon)): ?>
									<div class="contact-icon">
										<i class="fa <?php echo  esc_attr($tlh_mobile_icon); ?>"></i>
									</div>
								<?php endif; ?>	
								<a href="<?php echo esc_url($tlh_mobile_link); ?>" class="contact-info">
									<span class="title"><?php echo esc_html($tlh_mobile_title); ?></span>
								</a>
							</div>
						</aside>
					<?php } ?>		
			<?php
	}
}
add_action( 'renoval_abv_hdr_contact_info', 'renoval_abv_hdr_contact_info' );

 /**
 * Add WooCommerce Cart Icon With Cart Count (https://isabelcastillo.com/woocommerce-cart-icon-count-theme-header)
 */
function renoval_add_to_cart_fragment( $fragments ) {
	
    ob_start();
    $count = WC()->cart->cart_contents_count;
	$header_cart				= get_theme_mod('header_cart','fa-shopping-cart'); 
    ?> 
	<a href="javascript:void(0);" class="cart-icon-wrap" id="cart" title="<?php echo esc_attr__('View your shopping cart','renoval'); ?>">
	<i class="fa fa-shopping-basket"></i>	
	<?php
    if ( $count > 0 ) { 
	?>
       <span class="count"><?php echo esc_html( $count ); ?></span>
	<?php            
    } else {
	?>	
		<span class="count">0</span>
	<?php
	}
    ?></a><?php
 
    $fragments['a.cart-icon-wrap'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'renoval_add_to_cart_fragment' );



// Activate WordPress Maintenance Mode
$enable_comming_soon = get_theme_mod('enable_comming_soon');
  if($enable_comming_soon == '1') { 
	function wp_maintenance_mode() {
		if (!current_user_can('edit_themes') || !is_user_logged_in()) {
		   $file = get_template_directory() . '/inc/maintenance.php';
				include($file);
				exit();
		}
	}
	add_action('get_header', 'wp_maintenance_mode');
 }
 
if ( ! function_exists( 'renoval_footer_widget' ) ) {
	function renoval_footer_widget(){
			 if ( is_active_sidebar( 'renoval-footer-layout-first' ) ) : ?>
				<div class="col-lg-3 col-md-6 mb-xl-0 mb-4">
				   <?php dynamic_sidebar( 'renoval-footer-layout-first'); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'renoval-footer-layout-second' ) ) : ?>
				<div class="col-lg-3 col-md-6 mb-xl-0 mb-4">
				   <?php dynamic_sidebar( 'renoval-footer-layout-second'); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'renoval-footer-layout-third' ) ) : ?>
				<div class="col-lg-3 col-md-6 mb-xl-0 mb-4">
					<?php dynamic_sidebar( 'renoval-footer-layout-third'); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'renoval-footer-layout-fourth' ) ) : ?>
				<div class="col-lg-3 col-md-6 mb-xl-0 mb-4">
					<?php dynamic_sidebar( 'renoval-footer-layout-fourth'); ?>
				</div>
			<?php endif; ?>
	<?php }
}

add_action( 'renoval_footer_widget', 'renoval_footer_widget' ); 



/**
 * Change WP Default Logo and url
 */
function renoval_login_logo() { ?>
    <style type="text/css">
        #login h1 a, 
		.login h1 a {
            background-image: url( <?php echo esc_url( get_theme_mod( 'logo_upload',''.get_template_directory_uri().'/assets/images/logo-1.png' ) ); ?> );
			max-width: 170px;
			margin: 0 auto 0 auto;
			width: auto;
			background-size: 100%;
            box-shadow: none
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'renoval_login_logo' );

// Change logo url
function renoval_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'renoval_login_logo_url' );





/*
 *
 * About Default
 */
 function renoval_get_about_default() {
	return apply_filters(
		'renoval_get_footer_above_default', json_encode(
			array(
				array(
					'icon_value'      => 'fa-user',
					'title'           => esc_html__( 'Civil & Environmental Services', 'renoval' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, conse adipisicing elit incididunt ut labore et dolore magna aliqua.', 'renoval' ),
					
				),
				array(
					'icon_value'      => 'fa-book',
					'title'           => esc_html__( 'Doesn’t make any sense to me, also interested', 'renoval' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, conse adipisicing elit incididunt ut labore et dolore magna aliqua.', 'renoval' ),
					
				),
				
			)
		)
	);
}


/*
 *
 * Gallery Default
 */
 function renoval_get_gallery_default() {
	return apply_filters(
		'renoval_get_gallery_default', json_encode(
				 array(
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/gallery/gallery1.jpg'),
					'title'           => esc_html__( 'Marketing Agency', 'renoval' ),
					'text'            => esc_html__( 'Lorem Ipsum is simply dummy text', 'renoval' ),
					'icon_value'	  =>  'fa-link',
					'id'              => 'customizer_repeater_gallery_001',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/gallery/gallery2.jpg'),
					'title'           => esc_html__( 'Business Marketing', 'renoval' ),
					'text'            => esc_html__( 'Lorem Ipsum is simply dummy text', 'renoval' ),
					'icon_value'	  =>  'fa-link',
					'id'              => 'customizer_repeater_gallery_002',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/gallery/gallery3.jpg'),
					'title'           => esc_html__( 'Marketing Analysis', 'renoval' ),
					'text'            => esc_html__( 'Lorem Ipsum is simply dummy text', 'renoval' ),
					'icon_value'	  =>  'fa-link',
					'id'              => 'customizer_repeater_gallery_003',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/gallery/gallery4.jpg'),
					'title'           => esc_html__( 'Web Designing', 'renoval' ),
					'text'            => esc_html__( 'Lorem Ipsum is simply dummy text', 'renoval' ),
					'icon_value'	  =>  'fa-link',
					'id'              => 'customizer_repeater_gallery_004',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/gallery/gallery5.jpg'),
					'title'           => esc_html__( 'Social Media', 'renoval' ),
					'text'            => esc_html__( 'Lorem Ipsum is simply dummy text', 'renoval' ),
					'icon_value'	  =>  'fa-link',
					'id'              => 'customizer_repeater_gallery_005',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/gallery/gallery6.jpg'),
					'title'           => esc_html__( 'Web Development', 'renoval' ),
					'text'            => esc_html__( 'Lorem Ipsum is simply dummy text', 'renoval' ),
					'icon_value'	  =>  'fa-link',
					'id'              => 'customizer_repeater_gallery_006',
				),
			)
		)
	);
}


/*
 *
 * Contact Info Default
 */
function renoval_get_pg_contact_info_default() {
	return apply_filters(
		'renoval_get_pg_contact_info_default', json_encode(
				 array(
				array(
					'icon_value'    => 'fa-skype',	
					'title'         => esc_html__( 'Skype Call', 'renoval' ),
					'text'          => esc_html__( 'Find a brief answer to your short question here', 'renoval' ),
					'text2'         => esc_html__( 'Click', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_info_001',
				),
				array(
					'icon_value'    => 'fa-whatsapp',	
					'title'         => esc_html__( 'WhatsApp', 'renoval' ),
					'text'          => esc_html__( 'Find a brief answer to your short question here', 'renoval' ),
					'text2'         => esc_html__( 'Add', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_info_002',			
				),
				array(
					'icon_value'    => 'fa-video-camera',	
					'title'         => esc_html__( 'Zoom Meeting', 'renoval' ),
					'text'          => esc_html__( 'Find a brief answer to your short question here', 'renoval' ),
					'text2'         => esc_html__( 'Start', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_info_003',
				),
				array(
					'icon_value'    => 'fa-headphones',	
					'title'         => esc_html__( 'Live Support', 'renoval' ),
					'text'          => esc_html__( 'Find a brief answer to your short question here', 'renoval' ),
					'text2'         => esc_html__( 'Start', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_info_004',
				)
			)
		)
	);
}


/*
 *
 * Contact Map Info Default
 */
function renoval_get_pg_contact_map_info_default() {
	return apply_filters(
		'renoval_get_pg_contact_map_info_default', json_encode(
			array(
				array(
					'icon_value'     => 'fa-home',	
					'title'          => esc_html__( 'Start Planning New Construction?', 'renoval' ),
					'id'             => 'customizer_repeater_pg_contact_map_info_001',
				),
				array(
					'icon_value'     => 'fa-cogs',	
					'title'          => esc_html__( 'Are you renovating your home?', 'renoval' ),
					'id'             => 'customizer_repeater_pg_contact_map_info_002',		
				),
			)
		)
	);
}



/*
 *
 * Contact Office Default
 */
function renoval_get_pg_contact_office_default() {
	return apply_filters(
		'renoval_get_pg_contact_office_default', json_encode(
			array(
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/flag/1.png'),
					'choice'           => 'customizer_repeater_image',					
					'title'           => esc_html__( 'United States', 'renoval' ),
					'text'           => esc_html__( '+01-2345-6789', 'renoval' ),
					'id'              => 'customizer_repeater_pg_contact_office_001',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/flag/2.png'),	
					'choice'           => 'customizer_repeater_image',
					'title'           => esc_html__( 'Munich, Germany', 'renoval' ),
					'text'           => esc_html__( '+01-2345-6789', 'renoval' ),
					'id'              => 'customizer_repeater_pg_contact_office_002',	
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/flag/3.png'),	
					'choice'           => 'customizer_repeater_image',
					'title'           => esc_html__( 'Madrid, Spain', 'renoval' ),
					'text'           => esc_html__( '+01-2345-6789', 'renoval' ),
					'id'              => 'customizer_repeater_pg_contact_office_003',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/flag/4.png'),
					'choice'           => 'customizer_repeater_image',					
					'title'           => esc_html__( 'Russia', 'renoval' ),
					'text'           => esc_html__( '+01-2345-6789', 'renoval' ),
					'id'              => 'customizer_repeater_pg_contact_office_004',
				),
				array(
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/flag/5.png'),	
					'choice'           => 'customizer_repeater_image',
					'title'           => esc_html__( 'France', 'renoval' ),
					'text'           => esc_html__( '+01-2345-6789', 'renoval' ),
					'id'              => 'customizer_repeater_pg_contact_office_005',
				)
			)
		)
	);
}


/*
 *
 * Contact Details Default
 */
function renoval_get_pg_contact_details_default() {
	return apply_filters(
		'renoval_get_pg_contact_details_default', json_encode(
			array(
				array(
					'icon_value'    => 'fa-phone',
					'choice'        => 'customizer_repeater_image',					
					'title'         => esc_html__( '70 975 975 70', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_details_001',
				),
				array(
					'icon_value'    => 'fa-envelope',
					'choice'        => 'customizer_repeater_image',					
					'title'         => esc_html__( 'email@example.com', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_details_002',
				),
				array(
					'icon_value'    => 'fa-map-marker',
					'choice'        => 'customizer_repeater_image',					
					'title'         => esc_html__( '14/A Ping Tower Road', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_details_003',
				),
				array(
					'icon_value'    => 'fa-clock-o',
					'choice'        => 'customizer_repeater_image',					
					'title'         => esc_html__( '09.00-18.00', 'renoval' ),
					'id'            => 'customizer_repeater_pg_contact_details_004',
				),
				
			)
		)
	);
}


/*
 *
 * Contact Business Hours Default
 */
function renoval_get_pg_contact_business_default() {
	return apply_filters(
		'renoval_get_pg_contact_business_default', json_encode(
			array(
				array(	
					'title'     => esc_html__( 'Mon', 'renoval' ),
					'text'      => '8:00am To 21:00pm',
					'id'        => 'customizer_repeater_pg_contact_business_001',
				),
				array(	
					'title'     => esc_html__( 'Tue', 'renoval' ),
					'text'      => '8:00am To 21:00pm',
					'id'        => 'customizer_repeater_pg_contact_business_002',
				),
				array(	
					'title'     => esc_html__( 'Wed', 'renoval' ),
					'text'      => '8:00am To 21:00pm',
					'id'        => 'customizer_repeater_pg_contact_business_003',
				),
				array(	
					'title'     => esc_html__( 'Thu', 'renoval' ),
					'text'      => '8:00am To 21:00pm',
					'id'        => 'customizer_repeater_pg_contact_business_004',
				),
				array(	
					'title'     => esc_html__( 'Fri', 'renoval' ),
					'text'      => '8:00am To 21:00pm',
					'id'        => 'customizer_repeater_pg_contact_business_005',
				),
				array(	
					'title'     => esc_html__( 'Sat', 'renoval' ),
					'text'      => '8:00am To 21:00pm',
					'id'        => 'customizer_repeater_pg_contact_business_006',
				),
				array(	
					'title'     => esc_html__( 'Sun', 'renoval' ),
					'text'      => 'Close',
					'id'        => 'customizer_repeater_pg_contact_business_007',
				),
			)
		)
	);
}


/*
 *
 * Contact Page Awards Default
 */
function renoval_get_pg_awards_default() {
	return apply_filters(
		'renoval_get_pg_awards_default', json_encode(
			array(
				array(	
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/award/1.png'),
					'id'        => 'customizer_repeater_pg_awards_001',
				),
				array(	
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/award/2.png'),
					'id'        => 'customizer_repeater_pg_awards_002',
				),
				array(	
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/award/3.png'),
					'id'        => 'customizer_repeater_pg_awards_003',
				),
				array(	
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/award/4.png'),
					'id'        => 'customizer_repeater_pg_awards_004',
				),
				array(	
					'image_url'       => esc_url(get_template_directory_uri() . '/assets/images/award/1.png'),
					'id'        => 'customizer_repeater_pg_awards_005',
				),
			)
		)
	);
}


/*
 *
 * Contact Top Menu Default
 */
function renoval_get_top_menu_link_default() {
	return apply_filters(
		'renoval_get_top_menu_link_default', json_encode(
			array(
				array(	
					'title'     => esc_html__( 'Careers', 'renoval' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_top_menu_link_001',
				),
				array(	
					'title'     => esc_html__( 'Help Desk', 'renoval' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_top_menu_link_002',
				),
				array(	
					'title'     => esc_html__( 'Policy', 'renoval' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_top_menu_link_003',
				),
				
			)
		)
	);
}

/*
 *
 * Contact Instagram Gallery Default
 */
function renoval_get_instagram_gallery_default() {
	return apply_filters(
		'renoval_get_instagram_gallery_default', json_encode(
			array(
				array(	
					'image_url' => esc_url(get_template_directory_uri() . '/assets/images/gallery/img1.jpg'),
					'id'        => 'customizer_repeater_instagram_gallery_001',
				),
				array(	
					'image_url' => esc_url(get_template_directory_uri() . '/assets/images/gallery/img2.jpg'),
					'id'        => 'customizer_repeater_instagram_gallery_002',
				),
				array(	
					'image_url' => esc_url(get_template_directory_uri() . '/assets/images/gallery/img3.jpg'),
					'id'        => 'customizer_repeater_instagram_gallery_003',
				),
				array(	
					'image_url' => esc_url(get_template_directory_uri() . '/assets/images/gallery/img4.jpg'),
					'id'        => 'customizer_repeater_instagram_gallery_004',
				),
				array(	
					'image_url' => esc_url(get_template_directory_uri() . '/assets/images/gallery/img5.jpg'),
					'id'        => 'customizer_repeater_instagram_gallery_005',
				),
				array(	
					'image_url' => esc_url(get_template_directory_uri() . '/assets/images/gallery/img6.jpg'),
					'id'        => 'customizer_repeater_instagram_gallery_006',
				),
				
			)
		)
	);
}

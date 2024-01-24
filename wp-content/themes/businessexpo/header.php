<?php
/**
 *  Header
 *
 *  @package BusinessExpo
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
	<?php
		/* Menu */
		$businessexpo_overlap              = get_theme_mod( 'businessexpo_menu_overlap', 1 );
		$businessexpo_loading_icon_enabled = get_theme_mod( 'businessexpo_loading_icon_enabled', true );
	?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<?php if ( $businessexpo_loading_icon_enabled == true ) { ?>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
<?php } ?>	
	<?php get_template_part( 'template-parts/site-top-bar' ); ?>
	<!--Navbar-->
	<header id="masthead" class="site-header">
		<div class="site-menu-content <?php echo esc_attr( businessexpo_sticky_main_menu_class() ); ?> <?php echo esc_attr( businessexpo_is_admin_bar_enabled() ); ?>">	
			<div class="navigation-wrap <?php if ( $businessexpo_overlap == 1 ) { echo 'overlap-enable'; } ?> start-header start-style text-center ">
				<?php echo esc_html( businessexpo_header_logo() ); ?>
					<!-- Nav Menu -->
						<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light">
							<button type="button" id="hamburger-menu" class="open-nav-btn" aria-label="<?php esc_attr_e( 'open navigation', 'businessexpo' ); ?>" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
							<div id="slide-nav" class="slide-content navbar-collapse">
								<button type="button" id="close" class="close-btn" aria-label="<?php esc_attr_e( 'close navigation', 'businessexpo' ); ?>"><i class="fas fa-times"></i></button>
									<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'businessexpo' ); ?></span>
									<span class="main-navigation__icon">
										<span class="main-navigation__icon__middle"></span>
									</span>
								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'primary-menu',
										'depth'           => 4,
										'menu_id'         => 'primary-menu',
										'container_class' => 'primary-menu-container',
										'fallback_cb'     => 'Businessexpo_Bootstrap_Navwalker::fallback',
										'walker'          => new Businessexpo_Bootstrap_Navwalker(),
									)
								);
								?>
							</div>
						</nav>
					<!-- Nav Menu -->
			</div>
		</div>
	</header>
	<!--/End Navbar-->

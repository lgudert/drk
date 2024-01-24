<?php
	if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-header" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>
<?php endif; ?>

	<!-- Start: Header
	========================-->
	<header id="header-section" class="header header-2">

		<!--===// Start: Mobile Toggle
		=================================-->
		<div class="main-mobile-menu d-lg-none <?php echo esc_attr(renoval_sticky_menu()); ?>">
			<div class="container">
				<!-- Mobile Menu -->
				<div class="mobile-menu-container">
					<button class="mobile-menu-close"></button>
					<div id="mobile-menu-wrap"></div>
				</div>
				<div class="header">
					<!--// Main header -->
					<div class="main-header">
						<nav class="navbar navbar-expand-lg p-0 main-navigation">
							<div class="mobile-logo">
								<?php do_action('renoval_logo_content'); ?>
							</div>
							<button class="mobile-menu-trigger">
							  <span></span>
							  <span></span>
							  <span></span>
							</button>
							<div class="header-navigation-area justify-content-between">
								<?php do_action('renoval_primary_navigation');	?>
							</div>
						</nav>	
					</div>
				<!--// Main End -->
				</div>
			</div>
		</div>
		<!-- Mobile Menu End -->

		
		<!--===// Start: Header Above
		=========================-->
		<?php  do_action('renoval_above_header'); ?>
		<!--===// End: Header Top
		=========================-->
		
		<!--===// Start: Navigation
		=========================-->
		<div class="nav-area d-none d-lg-block <?php echo esc_attr(renoval_sticky_menu()); ?>">
			<div class="container">
				<div class="row navigation-area">
					<div class="col-lg-3 col-md-3">
						<div class="logo">
							<?php do_action('renoval_logo_content'); ?>
						</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="main-header-area">
							<!--// Main header -->
							<div class="main-header">
								<nav class="navbar navbar-expand-lg p-0 main-navigation">
									<div class="header-navigation-area justify-content-between">
										<?php do_action('renoval_primary_navigation');	?> 
									</div>
								</nav>
							</div>
							<!--// Main End -->
							<div class="menu-right">
								<ul>
									<?php 
										$hide_show_search 	= get_theme_mod( 'hide_show_search','1'); 
										if($hide_show_search=='1'):	
									?>
										<li class="search-button">
											<div class="header-search-normal">
												<a href="javascript:void(0)" id="view-search-btn" class="header-search-toggle"><i class="fa fa-search "></i></a>
												<div class="view-search-btn header-search-popup">
													<form method="get" class="av-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( 'Site Search', 'renoval' ); ?>">
														<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'renoval' ); ?></span>
														<input type="search" class="av-form-control header-search-field" placeholder="<?php echo esc_attr__( 'Type To Search', 'renoval' ); ?>" name="s" id="popfocus" value="">
														<i class="fa fa-search"></i>
														<a href="javascript:void(0)" class="close-style header-search-close"></a>
													</form>
												</div>
											</div>
										</li>
									<?php endif; ?>
									
									<?php //do_action('renoval_navigation_cart'); ?>
								</ul>
							</div>	
						</div>
					</div>	
				</div>
			</div>
		</div>
		<!--===// End: Navigation
		=========================--> 
	</header>
	 <!-- End: Header
	========================-->
<?php
	if ( !is_page_template( 'templates/template-homepage.php' ) ) {
		renoval_breadcrumbs_style();  
	}	
?>
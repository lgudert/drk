<header id="header-section" class="header header-1 header-dark">
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
	<!--===// End: Mobile Toggle
	=================================-->      
	
	<?php  do_action('renoval_above_header'); ?>
	
	<!--===// Start: Middle Header
	=========================-->
	<div id="middle-header" class="middle-header d-none d-lg-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="logo">
						<?php do_action('renoval_logo_content'); ?>
					</div>
				</div>
				
				<?php 							
					$hide_show_cntct_details 	= get_theme_mod( 'hide_show_cntct_details','1'); 
					$tlh_contct_icon 			= get_theme_mod( 'tlh_contct_icon','fa-location-arrow');
					$tlh_contact_address_title 		= get_theme_mod( 'tlh_contact_address_title','Contact Us'); 
					$tlh_contact_address 		= get_theme_mod( 'tlh_contact_address','50 Wallstreet,USA'); 
					
					$hide_show_email_details 	= get_theme_mod( 'hide_show_email_details','1');
					$tlh_email_icon 			= get_theme_mod( 'tlh_email_icon','fa-envelope'); 
					$tlh_email_title 			= get_theme_mod( 'tlh_email_title','Email Us');
					$tlh_email 					= get_theme_mod( 'tlh_email','email@company.com');
					
					$hide_show_nav_btn 			= get_theme_mod( 'hide_show_nav_btn','1');
					$nav_btn_lbl 				= get_theme_mod( 'nav_btn_lbl','Get A Quote');
					$nav_btn_icon 				= get_theme_mod( 'nav_btn_icon','fa-comments');
					$nav_btn_link 				= get_theme_mod( 'nav_btn_link','#');
				?>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="middle-header-widget">
						<?php if($hide_show_cntct_details =='1'): ?>
							<aside class="widget widget-contact">
								<div class="contact-area">
									<?php if(!empty($tlh_contct_icon)){ ?>
										<div class="contact-icon">
											<a href="#"> 
												<i class="fa <?php echo esc_attr($tlh_contct_icon); ?>"></i>
											</a>
										</div>
									<?php } ?>
									
									<?php if(!empty($tlh_contact_address_title) || !empty($tlh_contact_address)){ ?>
										<div class="contact-info">
											<a href="#">
												<h5 class="widget-title">
													<?php echo wp_kses_post($tlh_contact_address_title); ?>
												</h5>
												<p>
													<?php echo wp_kses_post($tlh_contact_address); ?>
												</p>
											</a>
										</div>
									<?php } ?>
								</div>
							</aside>
						<?php endif; ?>
						
						<?php if($hide_show_email_details =='1'): ?>
							<aside class="widget widget-contact">
								<div class="contact-area">
									<?php if(!empty($tlh_email_icon)){ ?>
										<div class="contact-icon">
											<a href="#"> 
												<i class="fa <?php echo esc_attr($tlh_email_icon); ?>"></i>
											</a>
										</div>
									<?php } ?>
									
									<?php if(!empty($tlh_email_title) || !empty($tlh_email)){ ?>
										<div class="contact-info">
											<a href="#">
												<h5 class="widget-title">
													<?php echo wp_kses_post($tlh_email_title); ?>
												</h5>
												<p>
													<?php echo wp_kses_post($tlh_email); ?>
												</p>
											</a>
										</div>
									<?php } ?>
								</div>
							</aside>
						<?php endif; ?>
					</div>
				</div>
				
				
				<?php if(!empty($nav_btn_lbl) && $hide_show_nav_btn=='1'){ ?>
					<div class="col-lg-2 col-md-2 col-sm-12">					
						<div class="header-button">
							<a href="<?php echo esc_url($nav_btn_link); ?>" class="main-button"> 
								<?php if(!empty($nav_btn_icon)){ ?>
									<i class="fa <?php echo esc_attr($nav_btn_icon); ?>"></i> 
								<?php } ?> 
								
								<span> 
									<?php echo esc_html($nav_btn_lbl); ?>
								</span>
							</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--===// End: Middle Header
	=========================-->
	
	<!--===// Start: Navigation
	=========================-->
	<div class="nav-area d-none d-lg-block <?php echo esc_attr(renoval_sticky_menu()); ?>">
		<div class="container">
			<div class="row navigation-area align-items-center">
				<div class="col-lg-9 col-md-9 p-0">
					<!--// Main header -->
					<div class="main-header">
						<nav class="navbar navbar-expand-lg p-0 main-navigation">
							<div class="header-navigation-area justify-content-between">
							<?php do_action('renoval_primary_navigation');	?>
							</div>
						</nav>	
					</div>
					<!--// Main End -->
				</div>
				<div class="col-lg-3 col-md-3 p-0">
					<div class="menu-right">
						<ul>
							<?php do_action('renoval_navigation_cart'); ?>
							
							<?php 
								$hide_show_search 	= get_theme_mod( 'hide_show_search','1'); 
								if($hide_show_search=='1'):	
							?>
								<li class="search-button">
									<div class="header-search-normal">
										<a href="javascript:void(0)" id="view-search-btn" class="header-search-toggle"><i class="fa fa-search "></i></a>
										<div class="view-search-btn header-search-popup">
											<form method="get" class="av-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( 'Site Search', 'builderse' ); ?>">
												<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'builderse' ); ?></span>
												<input type="search" class="av-form-control header-search-field" placeholder="<?php echo esc_attr( 'Type To Search', 'builderse' ); ?>" name="s" id="popfocus" value="">
												<i class="fa fa-search"></i>
												<a href="javascript:void(0)" class="close-style header-search-close"></a>
											</form>
										</div>
										</div>
								</li>
							<?php endif; ?>
							
							<?php 
								$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
								
								$hide_show_mbl_details 		= get_theme_mod( 'hide_show_mbl_details','1'); 
								$tlh_mobile_icon 			= get_theme_mod( 'tlh_mobile_icon','fa-phone');
								$tlh_mobile_number 			= get_theme_mod( 'tlh_mobile_number','+70 975 975 70'); 
								
								$hide_show_email_details 	= get_theme_mod( 'hide_show_email_details','1');
								$tlh_email_icon 			= get_theme_mod( 'tlh_email_icon','fa-envelope'); 
								$tlh_email 					= get_theme_mod( 'tlh_email','email@company.com');
								
								$tlh_about_text 			= get_theme_mod( 'tlh_about_text','About');
								$tlh_about_desc 			= get_theme_mod( 'tlh_about_desc','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or at randomised words which don"t look even slightly believable.');
								$tlh_gallery_text 			= get_theme_mod( 'tlh_gallery_text','Instagram Gallery');
								$gallery_contents			= get_theme_mod('instagram_gallery',renoval_get_instagram_gallery_default());
								
								$hide_show_cntct_details 	= get_theme_mod( 'hide_show_cntct_details','1'); 
								$tlh_contct_icon 			= get_theme_mod( 'tlh_contct_icon','fa-location-arrow');
								$tlh_contact_address 		= get_theme_mod( 'tlh_contact_address','50 Wallstreet,USA');
								
								$hs_nav_toggle 			= get_theme_mod( 'hs_nav_toggle','1');
								if($hs_nav_toggle=='1' || $hide_show_social_icon =='1' || $hide_show_cntct_details =='1' || $hide_show_email_details =='1' || $hide_show_mbl_details =='1'):
							?>
							
							<?php if($hs_nav_toggle=='1'){ ?>
							<li class="about-toggle-list">
								<div class="hamburger hamburger-about">
									<a href="javascript:void(0)" class="toggle-lines about-toggle">
										<div class="top-bun"></div>
										<div class="meat"></div>
										<div class="bottom-bun"></div>
									</a>
									
									<!-- Author Popup -->
									<div class="author-popup">
									<div class="author-overlay-layer"></div>
									<div class="author-div">
										<div class="author-anim">
											<button type="button" class="author-close close-style"></button>
											<div class="author-content">
												<?php if(!empty($tlh_about_text) || !empty($tlh_about_desc)){ ?>
													<div class="heading-title">
														<?php if(!empty($tlh_about_text)){ ?>
															<h6>
																<?php echo esc_html($tlh_about_text); ?>
															</h6>
														<?php } ?>
														
														<?php if(!empty($tlh_about_desc)){ ?>
															<p>
																<?php echo esc_html($tlh_about_desc); ?>
															</p>
														<?php } ?>
													</div>
												<?php } ?>
													
												<aside  class="widget widget_media_gallery">
													<?php if(!empty($tlh_gallery_text)){ ?>
														<h5 class="widget-title">
															<?php echo esc_html($tlh_gallery_text); ?>
														</h5>
													<?php } ?>
													
													<?php 
														if ( ! empty( $gallery_contents ) ) {
															$gallery_contents = json_decode( $gallery_contents );
													?>
														<div  class="gallery galleryid-903 gallery-columns-3 gallery-size-thumbnail">										
															<?php
																foreach ( $gallery_contents as $gallery_item ) { 
																	$image = ! empty( $gallery_item->image_url) ? apply_filters( 'renoval_translate_single_string', $gallery_item->image_url,'gallery section' ) : '';
																	
															?>
																<figure class="gallery-item">
																	<div class="gallery-icon landscape overlay_media-gallery">
																		<a href="#"><img src="<?php echo esc_url($image); ?>" class="attachment-thumbnail size-thumbnail" alt="<?php  echo esc_attr__('Image','builderse'); ?>" loading="lazy"></a>
																		<div class="overlay overlay-top">
																			<div class="text">
																				<i class="fa fa-instagram" aria-hidden="true"></i>
																			</div>
																		</div>
																	</div>
																</figure>
															<?php } ?>
														</div>
													<?php } ?>
												</aside>
												
											<?php if($hide_show_cntct_details =='1' || $hide_show_email_details =='1' || $hide_show_mbl_details =='1'): ?>
												<aside class="widget widget-contact">
													<?php if($hide_show_cntct_details =='1' && !empty($tlh_contact_address)): ?>
														<div class="contact-area">
															<div class="contact-icon">
																<i class="fa <?php echo esc_attr($tlh_contct_icon); ?>"></i>
															</div>
															<div class="contact-info">
																<a href="#">
																	<span>
																		<?php echo wp_kses_post($tlh_contact_address); ?>
																	</span>
																</a>
															</div>
														</div>
													<?php endif; ?>
														
													<?php if($hide_show_mbl_details =='1' && !empty($tlh_mobile_number)): ?>
														<div class="contact-area">
															<div class="contact-icon">
																<i class="fa <?php echo esc_attr($tlh_mobile_icon); ?>"></i>
															</div>
															<div class="contact-info">
																<a href="tel:<?php echo esc_attr(str_replace(' ','',$tlh_mobile_number)); ?>">
																	<span>
																		<?php echo wp_kses_post($tlh_mobile_number); ?>
																	</span>
																</a>
															</div>
														</div>
													<?php endif; ?>
														
													<?php if($hide_show_email_details =='1' && !empty($tlh_email)): ?>
														<div class="contact-area">
															<div class="contact-icon">
																<i class="fa <?php echo esc_attr($tlh_email_icon); ?>"></i>
															</div>
															<div class="contact-info">
																<a href="#">
																	<span>
																		<?php echo wp_kses_post($tlh_email); ?>
																	</span>
																</a>
															</div>
														</div>
													<?php endif; ?>
												</aside>
											<?php endif; ?>
											
											<?php if($hide_show_social_icon =='1'):	?>
												<aside class="widget widget-social-widget">
													<?php do_action('renoval_abv_hdr_social'); ?>
												</aside>
											<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								</div>
							</li>	
							<?php } endif; ?>							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--===// End: Navigation
	=========================-->
</header>
<?php
	if ( !is_page_template( 'templates/template-homepage.php' ) ) {
		renoval_breadcrumbs_style();  
	}	
?>
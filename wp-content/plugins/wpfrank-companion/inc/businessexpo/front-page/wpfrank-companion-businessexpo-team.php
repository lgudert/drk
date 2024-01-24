<?php
/**
 * Index Team
 *
 * @package Businessexpo Premium WordPress theme
 */

$businessexpo_team_disabled = get_theme_mod('businessexpo_team_disabled',true);
$businessexpo_team_content = get_theme_mod('businessexpo_team_content'); 
$businessexpo_team_container_size = get_theme_mod('businessexpo_team_container_size', 'container');
$businessexpo_team_count = get_theme_mod('businessexpo_team_count', array('slider' => 4,'suffix' => '',));
$businessexpo_team_area_title = get_theme_mod('businessexpo_team_area_title', 'Meet Our Experts');
$businessexpo_team_area_des = get_theme_mod('businessexpo_team_area_des', 'Team');
$businessexpo_team_autoplay_disable = get_theme_mod('businessexpo_team_autoplay_disable', true);
$businessexpo_team_column_layout  = get_theme_mod( 'businessexpo_team_column_layout', 2);
$businessexpo_rtl_disabled = get_theme_mod( 'businessexpo_rtl_disabled', false );

if($businessexpo_team_disabled == true) { 

?>

	<!-- Team Section -->
	<span id="site-content"></span>
	<section id="team-selector-scroll" class="section team 
	<?php if('BusinessExpo' == $activate_theme) { ?> theme-light <?php } ?>
	<?php if('Architect Designs' == $activate_theme || 'Building Construction' == $activate_theme ) { ?> theme-dark <?php } ?>">
		<div class="<?php echo esc_attr($businessexpo_team_container_size); ?>">
			<?php  
			if( ($businessexpo_team_area_title) || ($businessexpo_team_area_des)!='' ): ?>
				<!-- Section Title -->
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="section-header">
								<?php if(!empty($businessexpo_team_area_des)) { ?>
									<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_team_area_des); ?></p>
								<?php } ?>	
								<?php if(!empty($businessexpo_team_area_title)) { ?>
								<h1 class="section-title"><?php echo wp_kses_post($businessexpo_team_area_title); ?></h1>
								<?php } ?>
								<div class="divider-main"></div>
							</div>
						</div>
					</div>
				<!-- /Section Title -->
			<?php endif; ?>			
			
			<div class="row team-content">
				<div id="owl-team" class="owl-carousel owl-theme col-md-12">
					<?php	
					$businessexpo_team_content = json_decode($businessexpo_team_content);
					if( $businessexpo_team_content!='' ) {
					
						$item = 0;
						foreach($businessexpo_team_content as $team_item){
							if ($item <= $businessexpo_team_count['slider'] - 1){
								$image    = ! empty( $team_item->image_url ) ? apply_filters( 'businessexpo_translate_single_string', $team_item->image_url, 'Team section' ) : '';
								$title    = ! empty( $team_item->title ) ? apply_filters( 'businessexpo_translate_single_string', $team_item->title, 'Team section' ) : '';
								$designation = ! empty( $team_item->designation ) ? apply_filters( 'businessexpo_translate_single_string', $team_item->designation, 'Team section' ) : '';  
								$link     = ! empty( $team_item->link ) ? apply_filters( 'businessexpo_translate_single_string', $team_item->link, 'Team section' ) : '';
								$open_new_tab = $team_item->open_new_tab;
								?>
								<div class="item">
									<article class="post card border-0 shadow rounded-xs">
										<figure class="team-thumbnail">
											<?php if ( ! empty( $image ) ) : ?>
												<?php
												if ( ! empty( $link ) ) :
													$link_html = '<a href="' . esc_url( $link ) . '"';
													if ( function_exists( 'businessexpo_is_external_url' ) ) {
														$link_html .= businessexpo_is_external_url( $link );
													}
													$link_html .= '>';
													echo wp_kses_post( $link_html );
												endif;
												echo '<img class="img-responsive" src="' . esc_url( $image ) . '"';
												if ( ! empty( $title ) ) {
													echo 'alt="' . esc_attr( $title ) . '" title="' . esc_attr( $title ) . '"';
												}
												echo '/>';
												if ( ! empty( $link ) ) {
													echo '</a>';
												}
												?>
											<?php endif; ?>
											<span class="team-showcase-icon">
												<?php 
												if ( ! empty( $team_item->social_repeater ) ) :
													$icons         = html_entity_decode( $team_item->social_repeater );
													$icons_decoded = json_decode( $icons, true );
													if ( ! empty( $icons_decoded ) ) : 
															foreach ( $icons_decoded as $value ) {
																$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'businessexpo_translate_single_string', $value['icon'], 'Team section' ) : '';
																$social_link = ! empty( $value['link'] ) ? apply_filters( 'businessexpo_translate_single_string', $value['link'], 'Team section' ) : '';

																if ( ! empty( $social_icon ) ) {
																	
																?>											
																<a <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?> href="<?php echo esc_url( $social_link ); ?>" class="btn btn-skin btn-radius"><i class="fa <?php echo esc_attr( $social_icon ); ?> "></i></a>														
																<?php											
																}	
															}
													endif;
												endif;	?>
											</span>
										</figure>	
										<div class="card-body text-center">
											<div class="inner-header">
												<?php if ( ! empty( $title ) ) : ?>
													<?php if( $link != "" ){ ?>
														<h4 class="inner-title mt-4 mb-3">
															<a href="<?php echo $link ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"'; } ?>>
																<?php echo esc_html( $title ); ?>
															</a>
														</h4>
													<?php } else { ?>
														<h4 class="inner-title mt-4 mb-3"><?php echo esc_html( $title ); ?></h4>
													<?php } ?>
												<?php endif; ?>
											</div>
											<?php if ( ! empty( $designation ) ) : ?>
												<div class="inner-content"><p><?php echo esc_html( $designation ); ?></p></div>
											<?php endif; ?>
										</div>
									</article>
								</div>
								<?php 
								$item++;
							}
						}
					} else {					 
					?>
						<div class="item">
							<article class="post card border-0 shadow rounded-xs">
								<figure class="team-thumbnail">
									<a href="#"><img src="<?php echo  wpfrank_companion_plugin_url . '/inc/businessexpo/img/team/team-1.jpg'; ?>" alt="img"></a>
									<span class="team-showcase-icon">
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-instagram"></i></a>
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-linkedin-in"></i></a>
									</span>
								</figure>	
								<div class="card-body text-center"> 
									<div class="inner-header"><h4 class="inner-title mt-4 mb-3"><a href="#">Anna Rose</a></h4></div>
									<div class="inner-content"><p>Designer</p></div>
								</div>
							</article>
						</div>

						<div class="item">
							<article class="post card border-0 shadow rounded-xs">
								<figure class="team-thumbnail">
									<a href="#"><img src="<?php echo  wpfrank_companion_plugin_url . '/inc/businessexpo/img/team/team-2.jpg'; ?>" alt="img"></a>
									<span class="team-showcase-icon">
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-instagram"></i></a>
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-linkedin-in"></i></a>
									</span>
								</figure>	
								<div class="card-body text-center"> 
									<div class="inner-header"><h4 class="inner-title mt-4 mb-3"><a href="#">Martin Cousis</a></h4></div>
									<div class="inner-content"><p>Developer</p></div>
								</div>
							</article>
						</div>
						
						<div class="item">
							<article class="post card border-0 shadow rounded-xs">
								<figure class="team-thumbnail">
									<a href="#"><img src="<?php echo  wpfrank_companion_plugin_url . '/inc/businessexpo/img/team/team-3.jpg'; ?>" alt="img"></a>
									<span class="team-showcase-icon">
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-instagram"></i></a>
										<a href="#" class="btn btn-skin btn-radius"><i class="fab fa-linkedin-in"></i></a>
									</span>
								</figure>	
								<div class="card-body text-center"> 
									<div class="inner-header"><h4 class="inner-title mt-4 mb-3"><a href="#">Tomsos cross</a></h4></div>
									<div class="inner-content"><p>Developer</p></div>
								</div>
							</article>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<script>
		jQuery(window).load(function(){
			jQuery("#owl-team").owlCarousel({
				navigation : true, 
				<?php if($businessexpo_team_autoplay_disable != false) { ?>
					autoplay:  true,  // autoplay
				<?php } ?>
				autoplayTimeout: <?php echo esc_html(get_theme_mod('businessexpo_team_animation_speed', 3000)); ?>, 
				autoplayHoverPause: true,
				smartSpeed: 700,		
				loop:true, // loop is true up to 1199px screen.
				//nav:true, // is true across all sizes
				margin:30, // margin 10px till 960 breakpoint
				autoHeight: true,
				responsiveClass:true, 
				<?php if($businessexpo_rtl_disabled == true ) { ?>
					rtl: true,
				<?php } ?>
				dots: true,
				//navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
				responsive:{ 
					100:{ items:1 },	
					480:{ items:1 },
					768:{ items:2 },
					1000:{ items:<?php echo esc_attr($businessexpo_team_column_layout); ?> }
				}
			});
		});
	</script>
	<!-- End of Team Section -->
<?php } 
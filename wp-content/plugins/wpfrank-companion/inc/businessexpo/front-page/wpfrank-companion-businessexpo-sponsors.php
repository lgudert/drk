<?php
/**
 * Index Client
 *
 * @package Businessexpo Premium WordPress theme
 */

$businessexpo_client_disabled = get_theme_mod('businessexpo_client_disabled',true);
if($businessexpo_client_disabled == true) {
	$businessexpo_client_content = get_theme_mod('businessexpo_client_content');
	$businessexpo_client_container_size = get_theme_mod('businessexpo_client_container_size', 'container');
	$businessexpo_client_column_layout = get_theme_mod('businessexpo_client_column_layout', 4);
	$businessexpo_client_count = get_theme_mod('businessexpo_client_count', array('slider' => 5,'suffix' => '',));
	$businessexpo_client_autoplay = get_theme_mod('businessexpo_client_autoplay', true);
	$businessexpo_client_area_title = get_theme_mod('businessexpo_client_area_title', __('Our Client','businessexpo'));
	$businessexpo_client_area_des = get_theme_mod('businessexpo_client_area_des', __('Sponsors','businessexpo'));
	$businessexpo_dark_theme_mode = get_theme_mod('businessexpo_dark_theme_mode', false);
	$businessexpo_rtl_disabled = get_theme_mod( 'businessexpo_rtl_disabled', false );
	?>

	<!-- Client Section -->
	<span id="site-content"></span>
	<section id="client-selector-scroll" class="section client 
	<?php if('BusinessExpo' == $activate_theme) { ?> theme-light <?php } ?>
	<?php if('Architect Designs' == $activate_theme || 'Building Construction' == $activate_theme ) { ?> theme-dark <?php } ?>">
		<div class="<?php echo esc_html($businessexpo_client_container_size); ?>">
			<?php if(!empty($businessexpo_client_area_title) || !empty($businessexpo_client_area_des) ) {  ?>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-header">
							<?php if($businessexpo_client_area_des) { ?>
								<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_client_area_des); ?></p>
							<?php } if($businessexpo_client_area_title) { ?>
								<h1 class="section-title"><?php echo wp_kses_post($businessexpo_client_area_title); ?></h1>
							<?php } ?>
							<div class="divider-main"></div>
						</div>
					</div>
				</div>
			<?php } ?>			
			<div class="row client-content">
				<div id="owl-client" class="owl-carousel owl-theme col-lg-12">
					<?php
						$t=true;
						$businessexpo_client_content = json_decode($businessexpo_client_content);
						$item = 0;
						if( $businessexpo_client_content !='' ){
							foreach($businessexpo_client_content as $client_iteam){
								if ($item <= $businessexpo_client_count['slider'] - 1) {
									$title = ! empty( $client_iteam->title ) ? apply_filters( 'businessexpo_translate_single_string', $client_iteam->title, 'Client section' ) : '';
									$link = ! empty( $client_iteam->link ) ? apply_filters( 'businessexpo_translate_single_string', $client_iteam->link, 'Client section' ) : '';
									$client_link = $client_iteam->link;
									$open_new_tab = $client_iteam->open_new_tab;
									?>
									<div class="item">
										<article class="post card border-0 shadow rounded-xs">
											<figure class="product-thumbnail">

												<a href="<?php echo $client_link; ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>>
													<img src="<?php echo $client_iteam->image_url; ?>" alt="img">
												</a>

											</figure>
										</article>
									</div>
									<?php
									$item++;
								}
							} 
						} else { ?> 
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										<a href="#"><img src="<?php echo  wpfrank_companion_plugin_url . '/inc/businessexpo/img/clients/logo-joomla-grey.png'; ?>" alt="img"></a>
									</figure>
								</article>
							</div>
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										<a href="#"><img src="<?php echo  wpfrank_companion_plugin_url . '/inc/businessexpo/img/clients/jquey-logo.png'; ?>" alt="img"></a>
									</figure>
								</article>
							</div>
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										<a href="#"><img src="<?php echo  wpfrank_companion_plugin_url . '/inc/businessexpo/img/clients/woo.png'; ?>" alt="img"></a>
									</figure>
								</article>
							</div>
						<?php } ?>
				</div>
			</div>
		</div>
	</section>	
	<script>
		jQuery(window).load(function(){
			jQuery("#owl-client").owlCarousel({
				navigation : false,
				<?php if($businessexpo_client_autoplay == true){ ?>
					autoplay: true,
				<?php } ?>
				autoplayTimeout: <?php echo esc_html(get_theme_mod('businessexpo_client_animation_speed', 3000)); ?>, //autoplay speed
				autoplayHoverPause: true,
				smartSpeed: 800,
				loop:true,
				nav:false,
				margin:15,
				responsiveClass:true,
				dots: true,
				<?php if($businessexpo_rtl_disabled == true ) { ?>
					rtl: true,
				<?php } ?>
				navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					1000:{ items:<?php echo esc_attr($businessexpo_client_column_layout); ?> }
				}
			});
		});
	</script>
	<!-- End of Shop Section -->
<?php }
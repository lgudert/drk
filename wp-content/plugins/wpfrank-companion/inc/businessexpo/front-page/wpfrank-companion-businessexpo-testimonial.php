<?php
	//Defaults.
	$businessexpo_testimonial_options = get_theme_mod('businessexpo_testimonial_content');
	$businessexpo_testimonial_disabled = get_theme_mod('businessexpo_testimonial_disabled', true); 
	if( 'BusinessExpo' == $activate_theme  || 'Building Construction' == $activate_theme ){
		$businessexpo_testimonial_section_title = get_theme_mod('businessexpo_testimonial_section_title', __('What our Client Say?','wpfrank-companion'));
	} 
	if( 'Architect Designs' == $activate_theme ){
		$businessexpo_testimonial_section_title = get_theme_mod('businessexpo_testimonial_section_title', __('WHAT OUR CLIENT SAYS?','wpfrank-companion'));
	}
	if( 'Medical Health' == $activate_theme ){
		$businessexpo_testimonial_section_title = get_theme_mod('businessexpo_testimonial_section_title', __('What Our Patients Says','wpfrank-companion'));
	} 
	$businessexpo_testimonial_section_subtitle = get_theme_mod('businessexpo_testimonial_section_subtitle', __('Testimonials','wpfrank-companion'));
	$businessexpo_testimonial_overlay_disable = get_theme_mod('businessexpo_testimonial_overlay_disable', false);
	
	//Testimonial Background Image.
	if('BusinessExpo' == $activate_theme || 'Building Construction' == $activate_theme){
		$businessexpo_testimonial_background = get_theme_mod('businessexpo_testimonial_background', wpfrank_companion_plugin_url . '/inc/businessexpo/img/testimonial/testimonial-bg.jpg');
	}	
	if('Medical Health' == $activate_theme ){
		$businessexpo_testimonial_background = get_theme_mod('businessexpo_testimonial_background', wpfrank_companion_plugin_url . '/inc/businessexpo/img/testimonial/medical-testimonial-bg.jpg');
	}
	if('Architect Designs' == $activate_theme ){
		$businessexpo_testimonial_background = get_theme_mod('businessexpo_testimonial_background', wpfrank_companion_plugin_url . '/inc/businessexpo/img/testimonial/architect-testimonial-bg.jpg');
	}
?>
<?php if($businessexpo_testimonial_disabled == true) { ?>
	<span id="site-content"></span>
	<div id="testimonial-selector-scroll" class="testimonial-wraper
	<?php if('BusinessExpo' == $activate_theme) { ?> theme-light <?php } ?>
	<?php if('Architect Designs' == $activate_theme || 'Building Construction' == $activate_theme) { ?> theme-dark <?php } ?>"
	style="background-image:url('<?php echo esc_url($businessexpo_testimonial_background); ?>');">
		<section class="section testimonial">
			<div class="container">
				 <?php if($businessexpo_testimonial_section_title != null || $businessexpo_testimonial_section_subtitle != null): ?>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="section-header">
								<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_testimonial_section_subtitle); ?></p>
								<h1 class="section-title"><?php echo wp_kses_post($businessexpo_testimonial_section_title); ?></h1>
								<div class="divider-main"></div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<div id="owl-testimonial" class="owl-carousel owl-theme col-lg-12">
						<?php
						$businessexpo_testimonial_options = json_decode($businessexpo_testimonial_options);
						if( $businessexpo_testimonial_options!='' ){
							$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
							foreach($businessexpo_testimonial_options as $testimonial_iteam){ 
								$title = ! empty( $testimonial_iteam->title ) ? $testimonial_iteam->title : '';
								$test_desc = ! empty( $testimonial_iteam->text ) ? $testimonial_iteam->text : '';
								$designation = ! empty( $testimonial_iteam->designation ) ? $testimonial_iteam->designation : ''; ?>
									<div class="item">
										<article class="post">
											<figure>
												<img alt="<?php echo esc_attr($title); ?>" src="<?php echo $testimonial_iteam->image_url; ?>" />
											</figure>

											<div>
												<?php if($testimonial_iteam->image_url != null) { ?>
													<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
												<?php } ?>
												<?php if(!empty($designation)) { ?>
													<h6><?php echo esc_html($designation); ?></h6>
												<?php } ?>
												<?php if(!empty($title)) { ?>
													<h1><?php echo esc_html($title); ?></h1>
												<?php } ?>
											</div>
										</article>
									</div>
								<?php 
							} 
						} else { 
						
						if( 'Architect Designs' == $activate_theme || 'BusinessExpo' == $activate_theme || 'Building Construction' == $activate_theme ){
							$img1 = '1.jpg';
							$img2 = '2.jpg';
							$title1 = 'Marvellous Macaw';
							$title2 = 'Casy Storm';
							$designation1 = 'Businessman';
							$designation2 = 'Enterpreneur';
						}
						if( 'Medical Health' == $activate_theme ){
							$img1 = 'medical-health-1.jpg';
							$img2 = 'medical-health-2.jpg';
							$title1 = 'Mellisa Williams';
							$title2 = 'David Wannabe';
							$designation1 = 'Model';
							$designation2 = 'Enterpreneur';
						}
						$description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?';						
						?>
							<div class="item">
								<article class="post">
									<figure>
										<img alt="testimonial-img1" src="<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/testimonial/<?php echo esc_attr($img1); ?>" />
									</figure>
									<div>
										<p><?php echo wp_kses_post( html_entity_decode( $description )); ?></p>
										<h6><?php echo wp_kses_post( html_entity_decode( $designation1 )); ?></h6>
										<h1><?php echo wp_kses_post( html_entity_decode( $title1 )); ?></h1>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="post">
									<figure>
										<img alt="testimonial-img2" src="<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/testimonial/<?php echo esc_attr($img2); ?>" />
									</figure>

									<div>
										<p><?php echo wp_kses_post( html_entity_decode( $description )); ?></p>
										<h6><?php echo wp_kses_post( html_entity_decode( $designation2 )); ?></h6>
										<h1><?php echo wp_kses_post( html_entity_decode( $title2 )); ?></h1>
									</div>
								</article>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php } 
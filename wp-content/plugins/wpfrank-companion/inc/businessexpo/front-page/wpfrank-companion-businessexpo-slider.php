<?php
	$businessexpo_main_slider_options = get_theme_mod('businessexpo_main_slider_content');
	$businessexpo_main_slider_disabled = get_theme_mod('businessexpo_main_slider_disabled', true);
	$businessexpo_main_slider_overlay_disable = get_theme_mod('businessexpo_main_slider_overlay_disable', true);

	$businessexpo_main_slider_autoplay_disable = get_theme_mod('businessexpo_main_slider_autoplay_disable', true);
	$businessexpo_main_slider_animation = get_theme_mod('businessexpo_main_slider_animation', false); 
	$businessexpo_main_slider_animation_speed = get_theme_mod('businessexpo_main_slider_animation_speed', '4000');
	$businessexpo_main_slider_overlay_color = get_theme_mod( 'businessexpo_main_slider_overlay_color', 'rgba(0, 0, 0, 0.6)');
	$businessexpo_main_slider_caption_title_color = get_theme_mod( 'businessexpo_main_slider_caption_title_color', '#fff');
	$businessexpo_main_slider_caption_subtitle_title_color = get_theme_mod( 'businessexpo_main_slider_caption_subtitle_title_color', '#FF4081');
	$businessexpo_main_slider_caption_descrption_title_color = get_theme_mod( 'businessexpo_main_slider_caption_descrption_title_color', '#fff');
	$businessexpo_rtl_disabled = get_theme_mod( 'businessexpo_rtl_disabled', false );


	if($businessexpo_main_slider_disabled != false) { ?>
	<style>
		.slider-caption .title { color: <?php echo $businessexpo_main_slider_caption_title_color; ?>; }
		.slider-caption .subtitle { color: <?php echo $businessexpo_main_slider_caption_subtitle_title_color; ?>;  }
		.slider-caption p { color: <?php echo $businessexpo_main_slider_caption_descrption_title_color; ?>;  }
		.main-slider .item::before {
			background-color: <?php echo $businessexpo_main_slider_overlay_color; ?>;
		}
	</style>
	<!-- Slider Section -->
	<span id="site-content"></span>
	<section id="slider-selector-scroll" class="main-slider">
		<div id="owl-main" class="owl-carousel owl-theme <?php if($businessexpo_main_slider_overlay_disable == false) { ?> overlay-none <?php } ?>">
			<?php 
				$businessexpo_main_slider_options = json_decode($businessexpo_main_slider_options);
				if( $businessexpo_main_slider_options!='' ){
					foreach($businessexpo_main_slider_options as $slide_item){
						$title = ! empty( $slide_item->title ) ? $slide_item->title : '';
						$subtitle = ! empty( $slide_item->subtitle ) ? $slide_item->subtitle : '';
						$img_description = ! empty( $slide_item->text ) ? $slide_item->text : '';
						$readmorelink = ! empty( $slide_item->link ) ? $slide_item->link : '';
						$readmore_button = ! empty( $slide_item->button_text ) ? $slide_item->button_text : '';
						$open_new_tab = $slide_item->open_new_tab;

						if($slide_item->image_url!=''){ ?>
							<div id="post-<?php the_ID(); ?>" class="item home-section home-full-height" <?php   
								$slider_image = ! empty( $slide_item->image_url ) ? apply_filters( 'businessexpo_translate_single_string', $slide_item->image_url, 'Slider section' ) : ''; 
								if($slider_image != '' ) { ?> style="background-image:url(<?php echo $slider_image; ?>); <?php } ?>">

								<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
									<div class="container slider-caption">
										<figcaption class="theme-slider-content caption-content text-center">
											<?php if(($title!= '') || ($subtitle!= '') || ($img_description !='')) { ?>
												<Span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $subtitle ) ); ?></Span>
												<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $title ) ); ?></h1>
												<p class="description" ><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
											<?php } if($readmore_button !='' ) { ?>
											<div class="more-btn mt-5">
												<a href="<?php echo $readmorelink; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-large btn-skin btn-animation">
													<?php echo esc_html($readmore_button) ?>
												</a>
											</div>
											<?php } ?>
										</figcaption>
									</div><?php 
								} ?>
							</div>
							<?php
						}
					}
				} else {

					$activate_theme_data = wp_get_theme(); // getting current theme data.
					$activate_theme = $activate_theme_data->name;

						if( 'BusinessExpo' == $activate_theme ){
							$image1_slide = 'slide-1';
							$image2_slide = 'slide-2';
							$image3_slide = 'slide-3';
							$slider1_title = 'Everything You Need';
							$slider1_subtitle = 'We Are Creative';
							$slider2_title = 'Keep Chasing Your Dreams';
							$slider2_subtitle = 'Best Choice for Your Business';
							$slider3_title = 'We Create Stunning WordPress Themes';
							$slider3_subtitle = 'Provide Quality Services';
						}
						if( 'Architect Designs' == $activate_theme ){
							$image1_slide = 'architect-slide-1';
							$image2_slide = 'architect-slide-2';
							$image3_slide = 'architect-slide-3';
							$slider1_title = 'DECOR YOUR DREAM HOME';
							$slider1_subtitle = 'DREAM.CREATE.LIVE';
							$slider2_title = 'CLASSIC & MODERN ARCHITECTURE';
							$slider2_subtitle = 'MODERN DECORATIVE';
							$slider3_title = 'AWARD WINNING COMPANY';
							$slider3_subtitle = 'WE ARE THE BEST';
						}
						if( 'Medical Health' == $activate_theme ){
							$image1_slide = 'medical-slider-1.jpg';
							$image2_slide = 'medical-slider-2.jpg';
							$image3_slide = 'medical-slider-3.jpg';
							$slider1_title = 'Exceptional Care Close to You';
							$slider1_subtitle = 'Caring. Healing. Leading';
							$slider2_title = 'Medical Excellence Every Day';
							$slider2_subtitle = 'Exceptional Care. Every Patient. Every Day';
							$slider3_title = 'The Science of Medicine. The Art of Healing.';
							$slider3_subtitle = 'Enhancing Life. Excelling in Care';
						}
						if( 'Building Construction' == $activate_theme ){
							$image1_slide = 'building-slide-1';
							$image2_slide = 'architect-slide-3';
							$image3_slide = 'slide-3';
							$slider1_title = 'We Build Your Dream';
							$slider1_subtitle = 'Creation. Construction. Complete';
							$slider2_title = 'Construction & Industrial Agency';
							$slider2_subtitle = '25+ Years of experience';
							$slider3_title = 'Explore The Work Flow.';
							$slider3_subtitle = 'Construction solutions focused future';
						}
					?>
					<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/<?php echo esc_attr($image1_slide); ?>);">
						<div class="container slider-caption">
							<figcaption class="caption-content text-center">
								<span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $slider1_subtitle  ) ); ?></span>
								<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $slider1_title  ) ); ?></h1>
								<p class="description"><?php _e('"Lorem Ipsum is simply dummy text of the printing and typesetting industry."'); ?></p>
								<div class="more-btn mt-5">
									<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
								</div>	
							</figcaption>
						</div>
					</div>
					<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/<?php echo esc_attr($image2_slide); ?>);">
						<div class="container slider-caption">
							<figcaption class="caption-content text-center">
								<span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $slider2_subtitle  ) ); ?></span>
								<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $slider2_title  ) ); ?></h1>
								<p class="description"><?php _e('"Lorem Ipsum is simply dummy text of the printing and typesetting industry."'); ?></p>
								<div class="more-btn mt-5">
									<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
								</div>
							</figcaption>
						</div>
					</div>
					<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/<?php echo esc_attr($image3_slide); ?>);">
						<div class="container slider-caption">
							<figcaption class="caption-content text-center">
								<span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $slider3_subtitle  ) ); ?></span>
								<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $slider3_title  ) ); ?></h1>
								<p class="description"><?php _e('"Lorem Ipsum is simply dummy text of the printing and typesetting industry."'); ?></p>
								<div class="more-btn mt-5">
									<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
								</div>
							</figcaption>
						</div>
					</div>
					<?php 
				} ?>
		</div>
		<a href="#" class="scroll-down" address="true"></a>
		<?php
			require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-info.php';
		?>

	</section>
	<script>
		//Owl Carousel
		jQuery(window).load(function() {

			// Slider
			jQuery("#owl-main").owlCarousel({

				navigation : false, // Show next and prev buttons	
				<?php if($businessexpo_main_slider_autoplay_disable != false) { ?>
					autoplay:  true,  // autoplay
				<?php } if($businessexpo_main_slider_animation == true){ ?>
					animateOut:  'fadeOut', // fadeout	
				<?php } ?>	
				autoplayTimeout: <?php echo $businessexpo_main_slider_animation_speed; ?>,
				autoplayHoverPause: true,
				smartSpeed: 800,			
				singleItem:true,
				loop:true, // loop is true up to 1199px screen.
				nav:true, // is true across all sizes
				margin:0, // margin 10px till 960 breakpoint
				responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
				items: 1,
				<?php if($businessexpo_rtl_disabled == true) { ?>
				rtl: true,
				<?php } ?>
				dots: true,
				navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]

			});
		});

	</script>
<?php }
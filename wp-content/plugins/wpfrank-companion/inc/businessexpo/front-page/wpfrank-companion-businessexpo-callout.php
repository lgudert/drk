<?php 
$businessexpo_cta_disabled = get_theme_mod('businessexpo_cta_disabled', true);
if('BusinessExpo' == $activate_theme || 'Building Construction' == $activate_theme ){
$businessexpo_cta_section_title = get_theme_mod('businessexpo_cta_section_title', 'Meet Our Experts');
$businessexpo_cta_section_subtitle = get_theme_mod('businessexpo_cta_section_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.');
$businessexpo_cta_background_image = get_theme_mod('businessexpo_cta_background_image', wpfrank_companion_plugin_url . '/inc/businessexpo/img/callout/callout-bg.jpg');
$businessexpo_cta_button_text = get_theme_mod('businessexpo_cta_button_text', 'Learn More');
}
if('Architect Designs' == $activate_theme){
$businessexpo_cta_section_title = get_theme_mod('businessexpo_cta_section_title', 'ARE YOU READY FOR NEXT PROJECT?');
$businessexpo_cta_section_subtitle = get_theme_mod('businessexpo_cta_section_subtitle', 'YOU DON’T NEED A CONTRACTOR TO MAKE OVER YOUR WALLS. WE PROVIDE GREAT EXPERIENCE FOR ARCHITECTURE DESIGN & RENOVATION');
$businessexpo_cta_background_image = get_theme_mod('businessexpo_cta_background_image', wpfrank_companion_plugin_url . '/inc/businessexpo/img/callout/callout-bg.jpg');
$businessexpo_cta_button_text = get_theme_mod('businessexpo_cta_button_text', 'Learn More');
}
if('Medical Health' == $activate_theme){
$businessexpo_cta_section_title = get_theme_mod('businessexpo_cta_section_title', 'Book an Appointment Today');
$businessexpo_cta_section_subtitle = get_theme_mod('businessexpo_cta_section_subtitle', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.');
$businessexpo_cta_background_image = get_theme_mod('businessexpo_cta_background_image', wpfrank_companion_plugin_url . '/inc/businessexpo/img/callout/medical-health-callout-bg.jpg');
$businessexpo_cta_button_text = get_theme_mod('businessexpo_cta_button_text', 'Book Now');
}
$businessexpo_cta_button_link = get_theme_mod('businessexpo_cta_button_link', '#');



?>
<?php if($businessexpo_cta_disabled == true) { ?>
	<!-- Callout Section ---->
	<span id="site-content"></span>
	<div id="cta-selector-scroll" class="callout-wraper" style="background-image:url('<?php echo esc_url($businessexpo_cta_background_image); ?>'">
		<section class="section callout">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12 col-md-12 col-sm-12">	
						<div class="section-header">
							<?php if( !empty($businessexpo_cta_section_title )) { ?>
							<h1 class="section-title light"><?php echo wp_kses_post($businessexpo_cta_section_title); ?></h1>
							<?php } 
								if( !empty($businessexpo_cta_section_subtitle )) { 
							?>
							<p class="section-subtitle light"><?php echo wp_kses_post($businessexpo_cta_section_subtitle); ?></p>
							<?php } ?>
						</div>
						<?php if($businessexpo_cta_button_text != null) { ?>
							<a href="<?php echo esc_url($businessexpo_cta_button_link); ?>" class="btn-large btn-skin btn-animation">
								<?php echo esc_html($businessexpo_cta_button_text); ?>
							</a> 
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- Callout Section ---->
<?php }
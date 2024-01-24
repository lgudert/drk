<?php
//about theme info
add_action( 'admin_menu', 'skt_physiotherapy_abouttheme' );
function skt_physiotherapy_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-physiotherapy'), esc_html__('About Theme', 'skt-physiotherapy'), 'edit_theme_options', 'skt_physiotherapy_guide', 'skt_physiotherapy_mostrar_guide');   
} 
//guidline for about theme
function skt_physiotherapy_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-physiotherapy'); ?>
		   </div>
          <p><?php esc_html_e('SKT Physiotherapy theme is relevant to physical therapy, conditioning, activity, exercise, workout, training, exertion, gymnastics, athletes well being, rehabilitation, pharmaceuticals, personal trainers, gymnasium trainers, spiritual class, medical stores, cardio, spa and massage centers, gym, fitness studios, nutritionists, Sports injuries, Clinical Pilates, bootcamps, weight loss, clubs, wellness, workout sports coaches, wrestling academy, fitness clubs, yoga classes, Physiotherapist, Rehabilitative Care, Injury Prevention, health consultants, lifestyle coach, cardio, meditation, fitness advisor, gyms, obesity management, emergency care, manual therapy, gymnastic coaching, boxing club, weight loss enthusiasts, Chiropractic Therapy, health experts, aerobics, boxing, crossfit, chiropractor, bone healing, groin care, elderly care etc. Supports SEO plugins, WooCommerce, CTA. Simple, flexible and easy to use.','skt-physiotherapy'); ?></p>
          <a href="<?php echo esc_url(SKT_PHYSIOTHERAPY_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_PHYSIOTHERAPY_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-physiotherapy'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PHYSIOTHERAPY_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-physiotherapy'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PHYSIOTHERAPY_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-physiotherapy'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_PHYSIOTHERAPY_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>
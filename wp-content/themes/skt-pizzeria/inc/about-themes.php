<?php
//about theme info
add_action( 'admin_menu', 'skt_pizzeria_abouttheme' );
function skt_pizzeria_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-pizzeria'), esc_html__('About Theme', 'skt-pizzeria'), 'edit_theme_options', 'skt_pizzeria_guide', 'skt_pizzeria_mostrar_guide');   
} 
//guidline for about theme
function skt_pizzeria_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-pizzeria'); ?>
		   </div>
          <p><?php esc_html_e('Pizza WordPress theme pizza home delivery, online ordering, eCommerce, eatery, fast food, restaurant, bistro, cafe, coffee shop, bar, pub, diner, joint, outlet, dining room, cafeteria, food, recipe, chef, grill, hideaway, eating place, caterers, hotdog, takeaway, night club burger, food joints, mexican and chinese food, tacos, fries, multicuisine dining, recipe, muffins, chocolates, pastries, sandwiches, pizza, bistro, barista, cafeteria, roastery, beverage, roasters, coffeehouse and others. WooCommerce friendly, contact form 7 compatible for call to action and SEO plugins friendly. Easy to use, customize, responsive and flexible and scalable.It also contains an add on whereby one can import 150+ readymade Elementor templates and make use of it.','skt-pizzeria'); ?></p>
          <a href="<?php echo esc_url(SKT_PIZZERIA_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_PIZZERIA_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-pizzeria'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PIZZERIA_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-pizzeria'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PIZZERIA_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-pizzeria'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_PIZZERIA_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>
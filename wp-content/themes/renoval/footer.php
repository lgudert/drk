<!-- Start: Footer Section
=======================-->
<?php 
$renoval_footer_effect_enable	= get_theme_mod('footer_effect_enable','1');
?>	
	<footer id="footer-section" class="footer-section footer-background footer-1 wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 mb-4">
					 <?php do_action('renoval_above_footer'); ?>						
					</div>
				</div>
			
			<?php if (is_active_sidebar( 'renoval-footer-layout-first' )  || is_active_sidebar( 'renoval-footer-layout-second' )  || is_active_sidebar( 'renoval-footer-layout-third' )  || is_active_sidebar( 'renoval-footer-layout-fourth' ) ) : ?>
				<div class="footer-main">
					<div class="row">
					<?php if ( is_active_sidebar( 'renoval-footer-layout-first' ) ) : ?>
						<div class="col-lg-3 col-md-6 mb-xl-0 mb-4 c1">
						   <?php dynamic_sidebar( 'renoval-footer-layout-first'); ?>
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'renoval-footer-layout-second' ) ) : ?>
						<div class="col-lg-3 col-md-6 mb-xl-0 mb-4 c2">
						   <?php dynamic_sidebar( 'renoval-footer-layout-second'); ?>
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'renoval-footer-layout-third' ) ) : ?>
						<div class="col-lg-3 col-md-6 mb-xl-0 mb-4 c3">
							<?php dynamic_sidebar( 'renoval-footer-layout-third'); ?>
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'renoval-footer-layout-fourth' ) ) : ?>
						<div class="col-lg-3 col-md-6 mb-xl-0 mb-4 c4">
							<?php dynamic_sidebar( 'renoval-footer-layout-fourth'); ?>
						</div>
					<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</footer>
	
	<?php 
	$renoval_copyright 	= get_theme_mod('footer_third_custom','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
			if( !empty($renoval_copyright)){ 
	?>
	<div class="copyright footer-bottom wow fadeInDown">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="copyright">
						<p>
							<?php 	
							$renoval_copyright_allowed_tags = array(
								'[current_year]' => date_i18n('Y'),
								'[site_title]'   => get_bloginfo('name'),
								'[theme_author]' => sprintf(__('<a href="https://www.nayrathemes.com/renoval-free/" target="_blank">Renoval</a>', 'renoval')),
							);
						?>                        
						<div class="copyright-text">
							<?php
								echo apply_filters('renoval_footer_copyright', wp_kses_post(renoval_str_replace_assoc($renoval_copyright_allowed_tags, $renoval_copyright)));
							?>
						</div>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-area-copyright">
						<aside id="monster-widget-placeholder-6" class="widget widget_pages">
							<?php wp_nav_menu( 
								array(  
									'theme_location' => 'footer_menu',
									'container'  => '',
									'menu_class' => 'footer-menu',
									'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
									'walker' => new WP_Bootstrap_Navwalker()
									 ) 
								);	
							?>
						</aside>
					</div>
				</div> 
			</div>
		</div>	
	</div>
<?php } ?>
	<!-- End: Footer Section
	=======================-->

 <!-- ScrollUp -->
	<?php 
		$hs_scroller 	= get_theme_mod('hs_scroller','1');	
		if($hs_scroller == '1') :
	?>
		<a href="javascript:void(0)" class="scrollup one"><i class="fa fa-arrow-up"></i></a> 
	<?php endif; ?>

<?php 
wp_footer(); ?>
</body>
</html>
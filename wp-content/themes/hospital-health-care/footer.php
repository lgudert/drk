<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hospital-health-care
 */

$hospital_health_care_footer_widgets_enabled = get_theme_mod('awpbusinesspress_footer_widgets_enabled', true);  
$hospital_health_care_footer_container_size = get_theme_mod('awpbusinesspress_footer_container_size', 'container-full');
$hospital_health_care_footer_copright_enabled = get_theme_mod('awpbusinesspress_footer_copright_enabled', true);
$hospital_health_care_footer_copright_text = get_theme_mod('awpbusinesspress_footer_copright_text', __('Copyright &copy; 2022 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Hospital Health Care Theme by A WP Life', 'hospital-health-care')); 
?>
	<!--Footer-->
	<footer id="footer" class="footer">

		<?php if($hospital_health_care_footer_widgets_enabled == true): ?>
			<div class="<?php echo esc_attr($hospital_health_care_footer_container_size); ?> site-footer">	
				<!--Footer Widgets-->			
				<div class="row">
				   <?php get_template_part('sidebar','footer');?>
				</div>
			</div>
			<!--/Footer Widgets-->
		<?php endif; ?>		
			
	</footer>
	
	<?php if($hospital_health_care_footer_copright_enabled == true): ?>
		<!--Site Info copyright-->
		<footer class="footer-copyrights">
			<div class="container">	
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="site-info">
							<?php echo wp_kses_post($hospital_health_care_footer_copright_text); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>		
	<?php endif; ?>	
				
	<div class="clearfix"></div>
</div>
<!-- Scroll To Top -->
<a href="#" class="page-scroll-up" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<!-- /Scroll To Top -->
	
<?php wp_footer(); ?>

</body>
</html>
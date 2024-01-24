<?php
/**
 *  Footer
 *
 *  @package building construction
 */

// Footer Settings.
$building_construction_footer_widgets_enabled   = get_theme_mod( 'businessexpo_footer_widgets_enabled', 'true' );
$building_construction_footer_copyright_enabled = get_theme_mod( 'businessexpo_footer_copyright_enabled', 'true' );
$building_construction_footer_copright_text = get_theme_mod( 'businessexpo_footer_copright_text', __( 'Copyright &copy; 2022 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Architect Designs theme by <a target="_blank" href="//wpfrank.com/">WP Frank</a>', 'building-construction' ) );
?>
	<?php
	if ( $building_construction_footer_widgets_enabled == 'true' ) {
		// Fetch Theme Footer Widget.
		get_template_part( 'sidebar', 'footer' );
	}
	?>
	<?php if ( $building_construction_footer_copyright_enabled == 'true' ) { ?>
	<!-- Footer Copyrights -->
	<footer class="footer-copyrights">
		<div class="container">	
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="site-info">
						<?php echo wp_kses_post( $building_construction_footer_copright_text ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /Footer Copyrights -->
	<?php } ?>
	<!-- Scroll To Top -->
	<a href="#" class="page-scroll-up" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
	<!-- /Scroll To Top -->
	<?php wp_footer(); ?> 
</body>
</html>

<?php
/**
 *  Footer
 *
 *  @package BusinessExpo
 */

// Footer Settings.
$businessexpo_footer_widgets   = get_theme_mod( 'businessexpo_footer_widgets_enabled', 'true' );
$businessexpo_footer_copyright = get_theme_mod( 'businessexpo_footer_copyright_enabled', 'true' );

	$businessexpo_footer_copyright_text = get_theme_mod( 'businessexpo_footer_copyright_text', __( 'Copyright &copy; 2023 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> BusinessExpo theme by WP Frank', 'businessexpo' ) );
?>
	<?php
	if ( $businessexpo_footer_widgets == 'true' ) {
		// Fetch BusinessExpo Theme Footer Widget.
		get_template_part( 'sidebar', 'footer' );
	}
	?>
	<?php if ( $businessexpo_footer_copyright == 'true' ) { ?>
	<!-- Footer Copyrights -->
	<footer class="footer-copyrights">
		<div class="container">	
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="site-info">
						<?php echo $businessexpo_footer_copyright_text; ?>
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

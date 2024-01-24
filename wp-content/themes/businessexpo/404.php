<?php
/**
 *  The Template for displaying 404 Error Page
 *
 *  @package BusinessExpo
 */

get_header();  ?>
	<!--Page Title-->
	<?php get_template_part( 'breadcrumb' ); ?>
	<!--/End of Page Title-->

	<!--404 Error Section---->
	<?php 
		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme      = $activate_theme_data->name;
	?>
	<section id="site-content" class="section menu-overlap
		<?php if ( 'Architect Designs' == $activate_theme || 'Building Construction' == $activate_theme ){ ?> theme-dark <?php } else { ?> theme-light <?php } ?>">	
		<div class="container">
			<div class="row">
			
				<div id="notfound">
					<div class="notfound">
						<div class="notfound-404">
							<h1><?php esc_html_e( '4', 'businessexpo' ); ?><span><?php esc_html_e( '0', 'businessexpo' ); ?></span><?php esc_html_e( '4', 'businessexpo' ); ?>
						</div>
						<h2><?php esc_html_e( 'Oops! - Page not found', 'businessexpo' ); ?></h2>
						<p class="mb-4"><?php esc_html_e( 'The page you are looking for might have been removed had its name changed or is temporarily unavailable.', 'businessexpo' ); ?></p>
						<a href="<?php echo esc_url( home_url() ); ?>" class="btn btn-success btn-radius"><?php esc_html_e( 'Go To Homepage', 'businessexpo' ); ?></a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--/End of 404 Error Section Section---->
	<div class="clearfix"></div>
<?php get_footer(); ?>

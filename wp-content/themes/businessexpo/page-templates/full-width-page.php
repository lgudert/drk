<?php
/**
 *
 * Template Name: Full Width Page
 */

	get_header();
	$businessexpo_activate_theme_data = wp_get_theme(); // getting current theme data.
	$businessexpo_activate_theme      = $businessexpo_activate_theme_data->name;
?>
	<section id="site-content" class="section menu-overlap
	<?php if ( 'Architect Designs' == $businessexpo_activate_theme ){ ?> theme-dark <?php } else { ?> theme-light <?php } ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="blog-page">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();

								the_content();

							endwhile;
							// Reset Post Data
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();

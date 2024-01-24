<?php
/**
 *
 * Template Name: Builder Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BusinessExpo
 */

	get_header();

	$businessexpo_activate_theme_data = wp_get_theme(); // getting current theme data.
	$businessexpo_activate_theme      = $businessexpo_activate_theme_data->name;
?>
	<section id="site-content" class="section menu-overlap theme-builder
	<?php if ( 'Architect Designs' == $businessexpo_activate_theme ){ ?> theme-dark <?php } else { ?> theme-light <?php } ?>">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile; // End of the loop.
			?>
		</div>
	</section><!-- #page-builder -->

<?php
get_footer();

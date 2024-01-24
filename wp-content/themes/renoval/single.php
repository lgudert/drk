<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Renoval
 */

get_header();
?>
	<!-- Start: Blog Section
	=======================-->
	<section id="post-section" class="post-section post-right-sidebar post-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<?php if( have_posts() ): ?>
						<?php while( have_posts() ): the_post(); ?>
							<?php get_template_part('template-parts/content/content','page'); ?> 
						<?php endwhile; ?>
					<?php endif; ?>

					<?php comments_template( '', true ); // show comments  ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!-- End: Blog Section
	=======================-->
<?php get_footer(); ?>

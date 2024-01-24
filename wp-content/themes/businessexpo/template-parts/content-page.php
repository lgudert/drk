<?php
/**
 * The default template for displaying content
 */

	/* Defaults */
	$businessexpo_blog_date = get_theme_mod( 'businessexpo_blog_date', 'true' );
?>
<article class="post" id="post-<?php the_ID(); ?>" <?php post_class( 'post-content-area ' ); ?> data-wow-delay="0.4s">
			
	<?php if ( has_post_thumbnail() ) { ?>
		<figure class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</figure>
	<?php } ?>
		
	<div class="post-body">
		<div class="mt-4 mb-3 read-more">
			<?php
				the_content( __( 'Read More', 'businessexpo' ) );
				wp_link_pages();
			?>
		</div>
		
	</div>
		
</article>

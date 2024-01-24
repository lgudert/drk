<?php
/**
 *  Content Page Template
 *
 *  @package BusinessExpo
 */

	/* Defaults */
	$businessexpo_blog_date     = get_theme_mod( 'businessexpo_blog_date', 'true' );
	$businessexpo_blog_user     = get_theme_mod( 'businessexpo_blog_user', 'true' );
	$businessexpo_blog_comments = get_theme_mod( 'businessexpo_blog_comments', 'true' );

	$businessexpo_comment_zero_comment_text     = get_theme_mod( 'businessexpo_comment_zero_comment_text', 'No Comments' );
	$businessexpo_comment_one_comment_text      = get_theme_mod( 'businessexpo_comment_one_comment_text', '1 Comment' );
	$businessexpo_comment_multiple_comment_text = get_theme_mod( 'businessexpo_comment_multiple_comment_text', '% Comments So far' );

	$businessexpo_blog_content_ordering = get_theme_mod( 'businessexpo_blog_content_ordering', array( 'title', 'meta-one', 'meta-two', 'image' ) );
?>

		<!--Blog Posts-->
		<article class="post card border-0">
			<div class="post-body">
				<?php foreach ( $businessexpo_blog_content_ordering as $businessexpo_blog_content_order ) : ?>	
				
					<?php
					if ( 'image' === $businessexpo_blog_content_order ) :
						if ( has_post_thumbnail() ) {
							?>
						<figure class="post-thumbnail">
							<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
							</a>
						</figure>	
							<?php
						}
						?>
					 
				
					<?php elseif ( 'meta-two' === $businessexpo_blog_content_order ) : ?>
				
					
					<ul class="post-category">
						<?php
							$businessexpo_cat_list = get_the_category_list();
						if ( ! empty( $businessexpo_cat_list ) ) {
							?>
								<li><?php the_category( ' | ' ); ?></li>
						<?php } ?>
					</ul>
					
					
				<?php elseif ( 'title' === $businessexpo_blog_content_order ) : ?>
					<div class="inner-header">
						<h3 class="inner-title mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					
				<?php elseif ( 'meta-one' === $businessexpo_blog_content_order ) : ?>
					<ul class="post-widget">
						<?php if ( $businessexpo_blog_user == 'true' ) { ?>
							<li>
								<img class="avatar" alt="" src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ) ) ); ?>" class="avatar avatar-50 photo" height="50" width="50">  
								<span>
									<a class="admin-name" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?><a/>
								</span>
							</li>
						<?php } ?>
						<?php if ( $businessexpo_blog_date == 'true' ) { ?>
							<li>
								<a class="blog-date-meta" href="<?php echo esc_url( get_month_link( esc_html( get_post_time( 'Y' ) ), esc_html( get_post_time( 'm' ) ) ) ); ?>">
									<time datetime=""><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time>
								</a>
							</li>
						<?php } ?>
						<?php if ( $businessexpo_blog_comments == 'true' ) { ?>
							<li><?php comments_number( $businessexpo_comment_zero_comment_text, $businessexpo_comment_one_comment_text, $businessexpo_comment_multiple_comment_text ); ?></li>
						<?php } ?>
						
						<?php
						$businessexpo_tag_list = get_the_tag_list();
						if ( ! empty( $businessexpo_tag_list ) ) {
							?>
							<i class="fas fa-tag"></i>
							<li> <?php the_tags( '', ', ', '' ); ?></li>
						<?php } ?>
					</ul>
					
					<?php
				endif;
endforeach;
				?>
				<div class="entry-content">
					<?php the_excerpt(); ?>
					<div class="mt-4 mb-3 read-more">
						<a href="<?php esc_url( the_permalink() ); ?>" class="btn btn-skin btn-radius"><?php esc_html_e( 'Read More', 'businessexpo' ); ?></a>
					</div>
				</div>
			</div>
		</article>
		<span class="blog_border"></span>
		<!--Blog Posts-->

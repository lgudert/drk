<?php
/**
 * Index Blog
 *
 * @package Crypto AirDrop
 */
 
// Defaults
$cryptoairdrop_blog_disabled = get_theme_mod('cryptoairdrop_blog_disabled', true);

if($cryptoairdrop_blog_disabled == true){
$cryptoairdrop_blog_container_size = get_theme_mod('cryptoairdrop_blog_container_size', 'container'); 
$cryptoairdrop_blog_area_title = get_theme_mod('cryptoairdrop_blog_area_title', __('Latest News','cryptoairdrop'));
$cryptoairdrop_home_blog_meta_disabled = get_theme_mod('cryptoairdrop_home_blog_meta_disabled', true);
$cryptoairdrop_post_display_count = get_theme_mod('cryptoairdrop_post_display_count', 3);
$cryptoairdrop_theme_blog_category = get_theme_mod('cryptoairdrop_theme_blog_category');


?>
<!-- Blog Section -->
<span id="site-content"></span>
<section id="news" class="section home-blog blog-template-2 <?php if( 'Crypto Mining' == $activate_theme ) { echo 'theme-blue';  } ?> ">
	<div class="<?php echo esc_html($cryptoairdrop_blog_container_size); ?>">
		<?php if(!empty($cryptoairdrop_blog_area_title)) { ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="section-header">
					<h1 class="section-title"><?php echo wp_kses_post($cryptoairdrop_blog_area_title); ?></h1>
				</div>
			</div>
		</div>
		<?php } ?>

		<div class="row blog-content">
			<?php
			$post_args = array( 
				'post_type'	=> 'post', 
				'posts_per_page'	=> $cryptoairdrop_post_display_count, 
				'category__in' => $cryptoairdrop_theme_blog_category, 
				'post__not_in' => get_option("sticky_posts")
			);
			query_posts( $post_args );
			if(query_posts( $post_args )){
				while(have_posts()):the_post(); { ?>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post border-0 shadow rounded-xs">
							<?php if(has_post_thumbnail()) { ?>
							<figure class="post-thumbnail">
								<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>" class="post-meta">
									<span> <?php echo esc_html(get_the_date('j')); ?> </span>
									<span> <?php echo esc_html(get_the_date('M')); ?> </span>
								</a>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</figure>
							<?php } ?>
							<div class="post-body"> 
								<ul class="post-widget">
									<?php 
									/* Category Fetch */
										$categories = get_the_category();
										$output = '';
										if ( ! empty( $categories ) ) {
											foreach( $categories as $category ) {
												$output .= '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'cryptoairdrop' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>';
											}
											echo $output;
										}
									?>
								</ul>
								<div class="inner-header">
									<h4 class="inner-title mt-3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
								</div>
								<div class=""><?php the_excerpt(); ?></div>
							</div>
						</article>
					</div>
				<?php 
				} endwhile; 
			} ?>
		</div>
	</div>
</section>	
<!-- End of Blog Section -->
<?php
} 
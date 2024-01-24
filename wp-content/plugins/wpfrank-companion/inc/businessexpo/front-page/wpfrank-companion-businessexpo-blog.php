<?php
// Defaults
$businessexpo_blog_disabled = get_theme_mod('businessexpo_blog_disabled', true); 
if( 'BusinessExpo' == $activate_theme || 'Building Construction' == $activate_theme ){
	$businessexpo_blog_section_title = get_theme_mod('businessexpo_blog_section_title', __('Latest News','wpfrank-companion'));
}
if( 'Architect Designs' == $activate_theme ){
	$businessexpo_blog_section_title = get_theme_mod('businessexpo_blog_section_title', __('LATEST NEWS','wpfrank-companion'));
}
if( 'Medical Health' == $activate_theme ){
	$businessexpo_blog_section_title = get_theme_mod('businessexpo_blog_section_title', __('Latest News','wpfrank-companion'));
}
$businessexpo_blog_section_subtitle = get_theme_mod('businessexpo_blog_section_subtitle', __('Blog','wpfrank-companion'));
$businessexpo_home_blog_meta_disabled = get_theme_mod('businessexpo_home_blog_meta_disabled', true);
$businessexpo_theme_blog_category = get_theme_mod('businessexpo_theme_blog_category');
$businessexpo_blog_container_size = get_theme_mod('businessexpo_blog_container_size', 'container');
$businessexpo_blog_column_layout = get_theme_mod('businessexpo_blog_column_layout', 'col-md-4');
?>
<?php if($businessexpo_blog_disabled == true){ ?>
	<span id="site-content"></span>
	<section id="blog-selector-scroll" class="section home-blog 
		<?php if('BusinessExpo' == $activate_theme) { ?> theme-light-grey <?php } ?>
		<?php if('Architect Designs' == $activate_theme || 'Building Construction' == $activate_theme ) { ?> theme-dark <?php } ?>">
		<div class="<?php echo esc_html($businessexpo_blog_container_size); ?>">
			<?php if(!empty($businessexpo_blog_section_title) || !empty($businessexpo_blog_section_subtitle) ) {  ?>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-header">
							<?php if($businessexpo_blog_section_subtitle) { ?>
								<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_blog_section_subtitle); ?></p>
							<?php } if($businessexpo_blog_section_title) { ?>
								<h1 class="section-title"><?php echo wp_kses_post($businessexpo_blog_section_title); ?></h1>
							<?php } ?>
							<div class="divider-main"></div>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="row">
				<?php
				$post_args = array( 'post_type'	=> 'post', 'posts_per_page'	=> 3, 'category__in' => $businessexpo_theme_blog_category, 'post__not_in' => get_option("sticky_posts"));
				query_posts( $post_args );
				if(query_posts( $post_args )){
					while(have_posts()):the_post(); { ?>
						<div class="<?php echo esc_html($businessexpo_blog_column_layout); ?>">
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
											$categories = get_the_category();
											if ( ! empty( $categories ) ) { ?>
											<i class="fas fa-folder-open"></i>
												<?php 
												/* Category Fetch */
													
													$output = '';
													foreach( $categories as $category ) {
														$output .= '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'wpfrank-companion' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>';
													}
													echo $output;
												?>
										<?php } ?>	
									</ul>
									<div class="inner-header">
										<h4 class="inner-title mt-3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
									</div>
									<div class="inner-content"><?php the_excerpt(); ?></div>
									<div class="mt-2">
										<a href="<?php the_permalink(); ?>" class="more-link"><?php _e('Read More','wpfrank-companion'); ?></a>
									</div>
								</div>
							</article>
						</div>
					<?php 
					} endwhile; 
				} ?>
			</div>
		</div>
	</section>
<?php }
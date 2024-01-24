<?php  
	$blog_subtitle		= get_theme_mod('blog_subtitle','<h2>Outstanding</h2><div class="animation"><div class="first"><div>Blog</div></div></div>');
	$blog_description	= get_theme_mod('blog_description','Lorem Ipsum is simply dummy of printing and typesetting and industry. Lorem Ipsum been.'); 
	$blog_category_id	= get_theme_mod('blog_category_id');
	$blog_display_num	= get_theme_mod('blog_display_num','3'); 
	
?>	
	<!-- Start: Blog Section
	=======================-->
	<section id="post-section" class="post-section blog-section wow fadeInUp">
		<div class="elemt-tb1"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/element/measure.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
		<div class="elemt-tb2"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/element/axe.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
		<div class="elemt-tb3"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/element/crane.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
		<div class="elemt-tb4"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/element/hammer.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
		<div class="elemt-tb5"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/element/drill.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
		<div class="elemt-tb6"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/element/bulldozer.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
		<div class="container">		
			<?php if( !empty($blog_subtitle) || !empty($blog_description)): ?>
				<div class="row">
					<div class="section-title text-center">
						
						<?php if(!empty($blog_subtitle)): ?>
							<div>
								<?php echo wp_kses_post($blog_subtitle); ?>
							</div>
						<?php endif; ?>
						
						<?php if(!empty($blog_description)): ?>
							<p>
								<?php echo wp_kses_post($blog_description); ?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
			
			
			<div class="row">
				<?php 
					$renoval_blog_args = array( 'post_type' => 'post', 'category__in' => $blog_category_id, 'posts_per_page' => $blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
					
					$renoval_wp_query = new WP_Query($renoval_blog_args);
					if($renoval_wp_query)
					{	
					 $post_count=0;
					while($renoval_wp_query->have_posts()):$renoval_wp_query->the_post();
				?>
					<div class="col-lg-4 col-md-6">
						<article class="post-item">
							<?php if ( has_post_thumbnail() ) { ?>
								<figure class="post-image">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" data-toggle="magnify" class="mag-img" alt="<?php the_title(); ?>">
								</figure>
							<?php } ?>
							
							<div class="post-content">
								<div class="post-meta up">
									<span class="posted-on">
										<a href="<?php echo esc_url(get_the_date('Y/m/d')); ?>"> <span class="post-date"><?php echo esc_html(get_the_date('j')); ?></span> <?php echo esc_html(get_the_date('M')); ?><span class="post-date"> <?php echo esc_html(get_the_date('Y')); ?> </span>/</a>
									</span>
									<span class="author-name">
										<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php esc_html(the_author()); ?></a>
									</span>
									
									<span class="comment-link">
										<a href="<?php echo esc_url(get_comments_link( $post->ID )); ?>">(<?php echo esc_html(get_comments_number($post->ID)); ?>)</a>
									</span>
									<a href="<?php echo esc_url(get_comments_link( $post->ID )); ?>"><?php esc_html_e('Comment','renoval'); ?></a>
								</div>
								
								<?php     
									if ( is_single() ) :
									
									the_title('<h5 class="post-title">', '</h5>' );
									
									else:
									
									the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
									
									endif; 
								?> 								
								
								<?php 
									the_content( 
											sprintf( 
												__( 'Read More', 'renoval' ), 
												'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
											) 
										);
								?>
								
								<div class="elemt-blog"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/section-bg.png'); ?>" alt="<?php echo esc_attr__('Image','renoval'); ?>"></div>
							</div>
						</article>
					</div>
				<?php 
					endwhile; 
					}
					wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<!-- End: Blog Section
	=======================-->
<?php
/**
 *  Page Template
 *
 *  @package BusinessExpo
 */

get_header();

	/* Defaults */
	$businessexpo_blog_date                     = get_theme_mod( 'businessexpo_blog_date', 'true' );
	$businessexpo_comment_zero_comment_text     = get_theme_mod( 'businessexpo_comment_zero_comment_text', 'No Comments' );
	$businessexpo_comment_one_comment_text      = get_theme_mod( 'businessexpo_comment_one_comment_text', '1 Comment' );
	$businessexpo_comment_multiple_comment_text = get_theme_mod( 'businessexpo_comment_multiple_comment_text', '% Comments So far' );
?>
<!-- Breadcrumbs -->
<?php get_template_part( 'breadcrumb' ); ?>
<!-- Breadcrumbs -->

	<!-- Blog & Sidebar Section page.php -->
	<?php 
		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme      = $activate_theme_data->name;
	?>
	<section id="site-content" class="section menu-overlap
		<?php if ( 'Architect Designs' == $activate_theme || 'Building Construction' == $activate_theme ){ ?> theme-dark <?php } else { ?> theme-light <?php } ?>">
		<div class="container">
			<div class="row">
				<?php
				// Page Layout Settings
				$businessexpo_page_layout = get_theme_mod( 'businessexpo_archive_blog_pages_layout', 'businessexpo_right_sidebar' );
				// Initialize Variable
				$businessexpo_column_class = 'col-md-12 col-sm-12 col-xs-12';

				// Check Sidebar Column Condition
				if ( $businessexpo_page_layout == 'businessexpo_right_sidebar' || $businessexpo_page_layout == 'businessexpo_left_sidebar' && is_active_sidebar( 'sidebar-widget' ) ) {
					$businessexpo_column_class = 'col-md-8 col-sm-6 col-xs-12';
				}
				?>
							
				<!-- Left Sidebar -->
				<?php if ( $businessexpo_page_layout == 'businessexpo_left_sidebar' ) { ?>
					<?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
						<!--Sidebar-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="sidebar space-left">
								<?php dynamic_sidebar( 'sidebar-widget' ); ?>
							</div>
						</div>
						<!--/Sidebar-->
						<?php
					}
				}
				?>
				<!-- Left Sidebar -->	
			
				<!--Blog Posts-->
				<div class="<?php echo esc_attr( $businessexpo_column_class ); ?>">
					<div class="blog-page">			
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
								the_content();

								if ( $post->comment_status == 'open' ) {

									?>
									<!--Comment Section-->
									<article class="comment-section">
										<div class="comment-title"><h3><?php comments_number( $businessexpo_comment_zero_comment_text, $businessexpo_comment_one_comment_text, $businessexpo_comment_multiple_comment_text ); ?></h3></div>
								
									<?php
									// get comments
									comments_template();

									if ( have_comments() ) { // We have comments
										?>
												
											<ul class="comment-list">
												<?php
												$args = array(
													'max_depth' => '4',
													'style'    => 'div',
													'callback' => 'businessexpo_custom_comments',
													'avatar_size' => 50,
												);
												wp_list_comments( $args );

												?>
											</ul>
											<?php
											paginate_comments_links(
												array(
													'prev_text' => __( '&laquo', 'businessexpo' ),
													'next_text' => __( '&raquo', 'businessexpo' ),
												)
											);

											if ( ! comments_open() && get_comments_number() ) {
												?>
												<p class="no-comments"><?php esc_html_e( 'Comments are closed', 'businessexpo' ); ?></p>
												<?php
											} //comments open end
									} //have comments end

									?>
									</article>
								<!--/End of Comment Section-->
									<?php
								}
								endwhile;
							endif;
							// Reset Post Data
							wp_reset_postdata();
						?>
					</div>
				</div>	
				<!--Blog Posts-->

				<!-- Right Sidebar -->
				<?php if ( $businessexpo_page_layout == 'businessexpo_right_sidebar' ) { ?>
					<?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
						<!--Sidebar-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="sidebar space-left">
								<?php dynamic_sidebar( 'sidebar-widget' ); ?>
							</div>
						</div>
						<!--/Sidebar-->
						<?php
					}
				}
				?>
				<!-- Right Sidebar -->
				
			</div>
		</div>
	</section>
	<!-- End of Blog & Sidebar Section -->
	
<?php get_footer(); ?>

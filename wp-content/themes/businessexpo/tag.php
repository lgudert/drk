<?php
/**
 *  Archive Page Template
 *
 *  @package BusinessExpo
 */

get_header();
?>
	<!--Page Title-->
	<?php get_template_part( 'breadcrumb' ); ?>
	<!--/End of Page Title-->

	<!-- Blog & Sidebar Section -->
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
					<div class="blog">			
						<?php
						if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) :
								the_post();
								// Include the post format template for the content.
								get_template_part( 'template-parts/content', get_post_type() );
							endwhile;

						endif;
						?>
						<!--Pagination-->
						<div class="pagination">
							<?php
								// Custom query loop pagination
								the_posts_pagination(
									array(
										'screen_reader_text' => ' ',
										'prev_text' => '<i class="fa fa-angle-double-left"></i>',
										'next_text' => '<i class="fa fa-angle-double-right"></i>',
									)
								);
								?>
						</div> 
					</div>
				</div>	
				<!--/Blog Posts-->
				
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

	
	<div class="clearfix"></div>
	
<?php get_footer(); ?>

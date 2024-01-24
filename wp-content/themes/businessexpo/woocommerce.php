<?php
get_header();

global $woocommerce;
$businessexpo_theid  = wc_get_page_id( 'shop' );
$businessexpo_slider = get_post_meta( $businessexpo_theid, 'slider_chkbx', true );
if ( $slider ) :
	get_template_part( 'index-home/index', 'slider' );
endif;

?>
	<!--breadcrumb Woocommerce.php-->
	<?php get_template_part( 'breadcrumb' ); ?>
	<!--/breadcrumb-->
	
<!-- /Page Title Section -->
<div class="clearfix"></div>
<!-- Blog Section with Sidebar -->
<?php 
	$businessexpo_activate_theme_data = wp_get_theme(); // getting current theme data.
	$businessexpo_activate_theme      = $businessexpo_activate_theme_data->name;
?>
<section id="site-content" class="section menu-overlap
	<?php if ( 'Architect Designs' == $businessexpo_activate_theme || 'Building Construction' == $activate_theme ){ ?> theme-dark <?php } else { ?> theme-light <?php } ?>">
	<div class="container">
		<div class="row">	
			<!--Woocommerce-Blog Section-->
			<div class="col-md-<?php echo ( ! is_active_sidebar( 'woocommerce' ) ? '12' : '8' ); ?> col-xs-12">
				<div class="blog-page">
					<div class="post-woocommerce">
						<?php woocommerce_content(); ?>
					</div>	
				</div>	
			</div>	
			<!--/Woocommerce-Blog Section-->
			<?php get_sidebar( 'woocommerce' ); ?>
		</div>
	</div>
</section>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>

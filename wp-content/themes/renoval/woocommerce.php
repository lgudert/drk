<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Renoval 
 */

get_header();
?>
<!-- Blog & Sidebar Section -->
 <section id="product" class="product-section">
        <div class="container">
            <div class="row">
			<!--Blog Detail-->
			<?php if ( ! is_active_sidebar( 'renoval-woocommerce-sidebar' ) ) {	?>
				<div id="primary-content" class="col-lg-12 wow fadeInUp">
			<?php }else{ ?>	
				<div id="primary-content" class="col-lg-8 wow fadeInUp">
			<?php } woocommerce_content(); ?>
			</div>
			<!--/End of Blog Detail-->
			<?php get_sidebar('woocommerce'); ?>
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->

<?php get_footer(); ?>


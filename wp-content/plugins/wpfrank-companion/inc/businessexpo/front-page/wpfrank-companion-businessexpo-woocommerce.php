<?php
if ( class_exists( 'WooCommerce' ) ) {
	$businessexpo_woocommerce_disabled = get_theme_mod('businessexpo_woocommerce_disabled', true);
	if($businessexpo_woocommerce_disabled != false) {
?>

	<!-- Shop Section -->
	<span id="site-content"></span>
	<section class="section shop 
		<?php if('BusinessExpo' == $activate_theme) { ?> theme-light <?php } ?>
		<?php if('Architect Designs' == $activate_theme || 'Building Construction' == $activate_theme ) { ?> theme-dark <?php } ?>">
		<div class="container">
			<?php 
			$businessexpo_woocommerce_area_title = get_theme_mod('businessexpo_woocommerce_area_title',__('Featured products','wpfrank-companion'));
			$businessexpo_woocommerce_area_desc = get_theme_mod('businessexpo_woocommerce_area_desc','Shop');
			if(($businessexpo_woocommerce_area_title) || ($businessexpo_woocommerce_area_desc)!='' ) { 
			?>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-header">
						<p class="section-subtitle"><?php echo $businessexpo_woocommerce_area_desc; ?></p>
						<h1 class="section-title"><?php echo $businessexpo_woocommerce_area_title;  ?></h1>
						<div class="divider-main"></div>
					</div>
				</div>
			</div>
			<?php } ?>	
			<?php 
			$args                   = array(
				'post_type' => 'product',
			);
			/* Exclude hidden products from the loop */
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'exclude-from-catalog',
					'operator' => 'NOT IN',
				),
			);
			?>			
			<div class="row">
				<div id="owl-product" class="owl-carousel owl-theme col-lg-12">
					<?php
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="item <?php echo the_title(); ?>" data-profile="<?php echo $loop->post->ID; ?>">
						<article class="post shadow">
						<div class="product">
							
							<figure class="product-thumbnail">
								<?php 
									if ( $product->is_on_sale() ) :
										echo apply_filters( 'woocommerce_sale_flash', '<span class="product-sale">' . esc_html__( 'On Sale!', 'wpfrank-companion' ) . '</span>', $post, $product );
									endif; 
								?>
								<?php the_post_thumbnail(); ?>
								<span class="add-to-cart">
									<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
								</span>
							</figure>
							
							<div class="card-body text-center"> 
								<div class="inner-header"><h4 class="inner-title mt-4 "><a href="<?php the_permalink(); ?>" title="" tabindex="-1"><?php the_title(); ?></a></h4></div>
								<?php if ($average = $product->get_average_rating()) : ?>
									<ul class="woocommerce">
										<li>
											<?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'wpfrank-companion' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'wpfrank-companion' ).'</span></div>'; ?>
										</li>
									</ul>
								<?php endif; ?>							
								<div class="inner-content"><?php echo $product->get_price_html(); ?></div>
								
							</div>							

						</div>
						</article>
					</div>
					<?php 
					endwhile; 
					wp_reset_postdata(); 
					?>				
				</div>
			
			</div>
		</div>
	</section>	
	<!-- End of Shop Section -->
<?php } 

}

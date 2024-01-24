<?php
if ( class_exists( 'WooCommerce' ) ) {
	$cryptoairdrop_woocommerce_disabled = get_theme_mod('cryptoairdrop_woocommerce_disabled', true);
	if($cryptoairdrop_woocommerce_disabled != false) {
	$cryptoairdrop_woocommerce_container_size = get_theme_mod('cryptoairdrop_woocommerce_container_size', 'container'); 
?>

	<!-- Shop Section -->

	<section class="section shop theme-light-grey">	
		<div class="<?php echo esc_attr($cryptoairdrop_woocommerce_container_size); ?>">
			<?php
			$cryptoairdrop_woocommerce_area_title = get_theme_mod('cryptoairdrop_woocommerce_area_title',__('Featured products','wpfrank-companion'));
			if(!empty($cryptoairdrop_woocommerce_area_title)) {
			?>
			<div class="row">
				<div class="col-lg-12">
					<div class="section-header">
						<h1 class="section-title"><?php echo esc_html($cryptoairdrop_woocommerce_area_title); ?></h1>
					</div>
				</div>
			</div>
			<?php } ?>	
			<?php
			$args                   = array(
				'post_type' => 'product',
				'posts_per_page' => 3,
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
			<div class="row woocommerce-content">

					<?php
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="col-lg-4 col-sm-6 <?php echo the_title(); ?>" data-profile="<?php echo $loop->post->ID; ?>">
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
	</section>	
	<!-- End of Shop Section -->
<?php }
} 

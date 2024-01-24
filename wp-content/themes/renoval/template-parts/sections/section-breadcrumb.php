<?php 
	$hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$breadcrumb_title_enable		= get_theme_mod('breadcrumb_title_enable','1');
	$breadcrumb_path_enable			= get_theme_mod('breadcrumb_path_enable','1');
	$breadcrumb_effect_enable		= get_theme_mod('breadcrumb_effect_enable','1');
	$breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img',esc_url(get_template_directory_uri() .'/assets/images/breadcrumb.jpg'));
	$breadcrumb_back_attach			= get_theme_mod('breadcrumb_back_attach','scroll'); 
	
if($hs_breadcrumb == '1') {	
?>
<!--===// Start: Breadcrumb
=========================-->
<section id="breadcrumb-section" class="breadcrumb-section <?php if($breadcrumb_effect_enable=='1'): echo esc_attr('breadcrumb-effect-active','renoval'); endif; ?>" <?php if(!empty($breadcrumb_bg_img)){ ?> style="background-image:url('<?php echo esc_url($breadcrumb_bg_img); ?>'); background-attachment:<?php echo esc_attr($breadcrumb_back_attach); ?>" <?php } ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-area wow fadeInUp">
					<div class="breadcrumb-content">
						<div class="breadcrumb-heading">							
							<h1>
								<?php 
									if ( is_home() || is_front_page()):

										single_post_title();
								
									elseif ( is_day() ) : 
									
										printf( __( 'Daily Archives: %s', 'renoval' ), get_the_date() );
									
									elseif ( is_month() ) :
									
										printf( __( 'Monthly Archives: %s', 'renoval' ), (get_the_date( 'F Y' ) ));
										
									elseif ( is_year() ) :
									
										printf( __( 'Yearly Archives: %s', 'renoval' ), (get_the_date( 'Y' ) ) );
										
									elseif ( is_category() ) :
									
										printf( __( 'Category Archives: %s', 'renoval' ), (single_cat_title( '', false ) ));

									elseif ( is_tag() ) :
									
										printf( __( 'Tag Archives: %s', 'renoval' ), (single_tag_title( '', false ) ));
										
									elseif ( is_404() ) :

										printf( __( 'Error 404', 'renoval' ));
										
									elseif ( is_author() ) :
									
										printf( __( 'Author: %s', 'renoval' ), (get_the_author( '', false ) ));		
									
									elseif ( is_tax( 'portfolio_categories' ) ) :

										printf( __( 'Portfolio Categories: %s', 'renoval' ), (single_term_title( '', false ) ));	
										
									elseif ( is_tax( 'pricing_categories' ) ) :

										printf( __( 'Pricing Categories: %s', 'renoval' ), (single_term_title( '', false ) ));	
										
									elseif ( class_exists( 'woocommerce' ) ) : 
										
										if ( is_shop() ) {
											woocommerce_page_title();
										}
										
										elseif ( is_cart() ) {
											the_title();
										}
										
										elseif ( is_checkout() ) {
											the_title();
										}
										
										else {
											the_title();
										}
									else :
											the_title();
											
									endif;
										
								?>
							</h1>						
						</div>						
						<ol class="breadcrumb-list">
							<?php if (function_exists('renoval_breadcrumbs')) renoval_breadcrumbs();?>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--===// End: Breadcrumb
=========================-->
<?php } ?>	
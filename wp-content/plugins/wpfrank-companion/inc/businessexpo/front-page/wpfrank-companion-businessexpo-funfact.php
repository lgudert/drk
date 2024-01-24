<?php
/**
 * Index Funfact
 *
 * @package Businessexpo Premium WordPress theme
 */

$businessexpo_funfact_disabled  = get_theme_mod( 'businessexpo_funfact_disabled', true);
$businessexpo_funfact_container_size  = get_theme_mod( 'businessexpo_funfact_container_size', 'container');
$businessexpo_funfact_background  = get_theme_mod( 'businessexpo_funfact_background', wpfrank_companion_plugin_url . '/inc/businessexpo/img/funfact/funfact-bg.jpg');
$businessexpo_funfact_column_layout = get_theme_mod('businessexpo_funfact_column_layout', 'col-md-3');
$businessexpo_funfact_count = get_theme_mod('businessexpo_funfact_count', array('slider' => 4,'suffix' => '',));

if($businessexpo_funfact_disabled == true) {
?>

	<!-- Funfact Section --->
	<span id="site-content"></span>
	<div id="funfact-selector-scroll" class="funfact-wraper" style="background-image:url(<?php echo esc_url($businessexpo_funfact_background); ?>);">
		<section class="section funfact">
			<div class="<?php echo esc_html($businessexpo_funfact_container_size); ?>">
				<div class="row ">
				<?php

				$businessexpo_funfact_content  = get_theme_mod( 'businessexpo_funfact_content');
				if ( ! empty( $businessexpo_funfact_content ) ) {
					$allowed_html = array(
					'br'     => array(),
					'em'     => array(),
					'strong' => array(),
					'b'      => array(),
					'i'      => array(),
					);
					$businessexpo_funfact_content = json_decode( $businessexpo_funfact_content );
					
					$item = 0;
					foreach ( $businessexpo_funfact_content as $features_item ) {
						if ($item <= $businessexpo_funfact_count['slider'] - 1){
							$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'businessexpo_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
							$title = ! empty( $features_item->title ) ? apply_filters( 'businessexpo_translate_single_string', $features_item->title, 'Features section' ) : '';
							$text = ! empty( $features_item->text ) ? apply_filters( 'businessexpo_translate_single_string', $features_item->text, 'Features section' ) : '';
							?>				
							<div class="<?php echo esc_attr($businessexpo_funfact_column_layout); ?>">	
								<div class="funfact-inner text-center">
									<?php if ( ! empty( $icon ) ) : //icon ?>
										<i class="fa <?php echo esc_html( $icon ); ?> funfact-icon"></i>
									<?php  endif; ?>	
									<?php if ( ! empty( $title ) ) : //title + Link ?>
										<h3 class="funfact-title"><?php echo esc_html( $title ); ?></h3>
									<?php  endif; ?>
									<?php if ( ! empty( $text ) ) : //text ?>
										<p class="description"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
									<?php  endif; ?>
								</div>  
							</div>
							<?php
							$item++;
						}  
					} 
				} else { ?>	
						<div class="col-lg-3 col-md-3 col-sm-6">	
							<div class="funfact-inner text-center">
								<i class="fa fa-smile-o funfact-icon"></i>
								<h3 class="funfact-title">7953</h3>
								<p class="description"><?php _e('Happy Customer','businessexpo'); ?></p>
								
							</div>  
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6">		
							<div class="funfact-inner text-center">
								<i class="fa fa-suitcase funfact-icon"></i>						
								<h3 class="funfact-title">350</h3>
								<p class="description"><?php _e('Finish Projects','businessexpo'); ?></p>
							</div>  
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6">		
							<div class="funfact-inner text-center">
								<i class="fa fa-line-chart funfact-icon"></i>
								<h3 class="funfact-title">574</h3>
								<p class="description"><?php _e('Cups of Coffee','businessexpo'); ?></p>
							</div>  
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6">			
							<div class="funfact-inner text-center">
								<i class="fa fa-coffee funfact-icon"></i>
								<h3 class="funfact-title">450</h3>
								<p class="description"><?php _e('Working Days','businessexpo'); ?></p>
							</div>  
						</div>
				<?php } ?>
				</div>	 
			</div>
		</section>
	</div>
	<!-- /End of Funfact Section ---->
<?php }
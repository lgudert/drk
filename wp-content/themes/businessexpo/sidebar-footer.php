<?php
/**
 *  Sidebar Footer Template
 *
 *  @package BusinessExpo
 */
 $businessexpo_footer_widgets_container = get_theme_mod( 'businessexpo_footer_container_size', 'container' );
?>
<!-- Footer Widget -->
	<?php if ( is_active_sidebar( 'footer_widget_area_left' ) || is_active_sidebar( 'footer_widget_area_center' ) || is_active_sidebar( 'footer_widget_area_right' ) ) : ?>
		<footer id="footer" class="footer">
			<div class="border-box">
				<div class="<?php echo esc_attr( $businessexpo_footer_widgets_container ); ?> site-footer">	
					<div class="row">
						<div class="col-md-4">
						<?php
						if ( is_active_sidebar( 'footer_widget_area_left' ) ) :
								dynamic_sidebar( 'footer_widget_area_left' );
							  endif;
						?>
						</div>
						
						<div class="col-md-4">		
						<?php
						if ( is_active_sidebar( 'footer_widget_area_center' ) ) :
									dynamic_sidebar( 'footer_widget_area_center' );
							   endif;
						?>
										
						</div>
						
						<div class="col-md-4">		
						<?php
						if ( is_active_sidebar( 'footer_widget_area_right' ) ) :
									dynamic_sidebar( 'footer_widget_area_right' );
								endif;
						?>
										
						</div>
					</div>	
				</div>	
			</div>	
		</footer>
	<?php endif; ?>
<!-- Footer Widget -->

<?php
$businessexpo_top_info_disabled = get_theme_mod('businessexpo_top_info_disabled',true);
if($businessexpo_top_info_disabled == true ) {
	$businessexpo_top_info_container_size = get_theme_mod('businessexpo_top_info_container_size', 'container');
	$businessexpo_top_info_column_layout = get_theme_mod('businessexpo_top_info_column_layout', 'col-md-4');
	?>
	<div class="features-section">
		<div class="<?php echo esc_attr($businessexpo_top_info_container_size); ?> topinfo-selector">
			<div class="row features">
				<?php
				$businessexpo_top_info_content  = get_theme_mod( 'businessexpo_top_info_content');
				if ( ! empty( $businessexpo_top_info_content ) ) {
					$allowed_html = array(
					'br'     => array(),
					'em'     => array(),
					'strong' => array(),
					'b'      => array(),
					'i'      => array(),
					);
					$businessexpo_top_info_content = json_decode( $businessexpo_top_info_content );
					foreach ( $businessexpo_top_info_content as $features_item ) {
						$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'businessexpo_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
						$title = ! empty( $features_item->title ) ? apply_filters( 'businessexpo_translate_single_string', $features_item->title, 'Features section' ) : '';
						$link = ! empty( $features_item->link ) ? apply_filters( 'businessexpo_translate_single_string', $features_item->link, 'Features section' ) : '';
						$open_new_tab = $features_item->open_new_tab; ?>
						<div class="<?php echo $businessexpo_top_info_column_layout; ?> col-sm-12 col-xs-12 p-0 feature">
							<div class="feature-inner">
								<div class="feature-icon fi_1">
									<?php if ( ! empty( $icon ) ) : ?>
										<i class="fas <?php echo esc_html( $icon ); ?>"></i>
									<?php endif; ?>
								</div>

								<?php // If Link Is NOT Empty
									if ( ! empty( $link ) ) : ?>
									<?php if ( ! empty( $title ) ) : // title ?>
										<a class="info-icon" href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
											<h4 class="title-info"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></h4>
										</a>
									<?php  endif; ?>
								<?php endif; ?>

								<?php // If Icon Link Is Empty
									if ( empty( $link ) ) : ?>
									<?php if ( ! empty( $title ) ) : // title ?>
										<h4 class="title-info"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></h4>
									<?php  endif; ?>
								<?php endif; ?>	

							</div>
						</div>
						<?php
					}
				} else {
				
					$activate_theme_data = wp_get_theme(); // getting current theme data.
					$activate_theme = $activate_theme_data->name;

					if( 'BusinessExpo' == $activate_theme || 'Building Construction' == $activate_theme ){
						$info1_title = 'Fast Secure Payments';
						$info2_title = 'Premium Products';
						$info3_title = 'Free & fast Delivery';
						$info1_icon = 'fa fa-credit-card';
						$info2_icon = 'fa fa-dropbox';
						$info3_icon = 'fas fa-map-marker-alt';
					}
					if( 'Architect Designs' == $activate_theme ){
						$info1_title = 'MODERN DESIGN PROJECTS';
						$info2_title = 'QUICK & FAST SERVICES';
						$info3_title = 'GET YOUR PERSONAL ESTIMATE';
						$info1_icon = 'fas fa-home';
						$info2_icon = 'fas fa-tasks';
						$info3_icon = 'fas fa-map-marker-alt';
					}
					if( 'Medical Health' == $activate_theme ){
						$info1_title = 'Nutritional Counseling';
						$info2_title = 'Mental Health Care';
						$info3_title = 'Immediate Emergency Services';
						$info1_icon = 'fas fa-volume-control-phone';
						$info2_icon = 'fas fa-heart';
						$info3_icon = 'fas fa-ambulance';
					}
					?>
					<div class="col-md-4 p-0 feature">
						<div class="feature-inner">
							<div class="feature-icon fi_1">
								<i class="<?php echo esc_attr($info1_icon); ?>"></i>
							</div>
							<h4><?php esc_html_e(''.$info1_title.'','wpfrank-companion'); ?></h4>
						</div>
					</div>
					<div class="col-md-4 p-0 feature">
						<div class="feature-inner">
							<div class="feature-icon fi_2">
								<i class="<?php echo esc_attr($info2_icon); ?>"></i>
							</div>
							<h4><?php esc_html_e(''.$info2_title.'','wpfrank-companion'); ?></h4>
						</div>
					</div>
					<div class="col-md-4 p-0 feature">
						<div class="feature-inner">
							<div class="feature-icon fi_3">
								<i class="<?php echo esc_attr($info3_icon); ?>"></i>
							</div>
							<h4><?php esc_html_e(''.$info3_title.'','wpfrank-companion'); ?></h4>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
<?php }
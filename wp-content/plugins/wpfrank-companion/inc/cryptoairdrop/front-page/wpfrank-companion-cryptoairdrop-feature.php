<?php
/**
 * Index Feature
 *
 * @package Crypto AirDrop
 */

$cryptoairdrop_top_info_disabled  = get_theme_mod( 'cryptoairdrop_top_info_disabled', true);
if($cryptoairdrop_top_info_disabled == true) {
	
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;

if( 'Crypto AirDrop' == $activate_theme ) {
	$cryptoairdrop_top_info_default_content  = get_theme_mod( 'cryptoairdrop_top_info_content');
	$cryptoairdrop_feature_title  = get_theme_mod( 'cryptoairdrop_feature_title', 'Tokenomics');
	$cryptoairdrop_top_info_container_size  = get_theme_mod( 'cryptoairdrop_top_info_container_size', 'container');
	$cryptoairdrop_top_info_image_disable  = get_theme_mod( 'cryptoairdrop_top_info_image_disable', 'enable');
	$cryptoairdrop_feature_image  = get_theme_mod( 'cryptoairdrop_feature_image', get_template_directory_uri() . '/assets/img/token/features.png');
	$cryptoairdrop_top_info_count = get_theme_mod('cryptoairdrop_top_info_count', array('slider' => 4,'suffix' => '',));
	$cryptoairdrop_theme_schema 	= 'theme-light-grey';
}
if( 'Crypto Compare' == $activate_theme ) {
	$cryptoairdrop_top_info_default_content  = get_theme_mod( 'cryptoairdrop_top_info_content');
	$cryptoairdrop_feature_title  = get_theme_mod( 'cryptoairdrop_feature_title', 'Tokenomics');
	$cryptoairdrop_top_info_container_size  = get_theme_mod( 'cryptoairdrop_top_info_container_size', 'container');
	$cryptoairdrop_top_info_image_disable  = get_theme_mod( 'cryptoairdrop_top_info_image_disable', 'enable');
	$cryptoairdrop_feature_image  = get_theme_mod( 'cryptoairdrop_feature_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/tokenomics.png');
	$cryptoairdrop_top_info_count = get_theme_mod('cryptoairdrop_top_info_count', array('slider' => 4,'suffix' => '',));
	$cryptoairdrop_theme_schema 	= 'theme-dark';
}
if( 'Crypto Token' == $activate_theme ) {
	$cryptoairdrop_top_info_default_content  = get_theme_mod( 'cryptoairdrop_top_info_content');
	$cryptoairdrop_feature_title  = get_theme_mod( 'cryptoairdrop_feature_title', 'Tokenomics');
	$cryptoairdrop_top_info_container_size  = get_theme_mod( 'cryptoairdrop_top_info_container_size', 'container');
	$cryptoairdrop_top_info_image_disable  = get_theme_mod( 'cryptoairdrop_top_info_image_disable', 'enable');
	$cryptoairdrop_feature_image  = get_theme_mod( 'cryptoairdrop_feature_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/token-bg.png');
	$cryptoairdrop_top_info_count = get_theme_mod('cryptoairdrop_top_info_count', array('slider' => 4,'suffix' => '',));
	$cryptoairdrop_theme_schema 	= 'theme-light-grey';
}
if( 'Meme Token' == $activate_theme ) {
	$cryptoairdrop_top_info_default_content  = get_theme_mod( 'cryptoairdrop_top_info_content');
	$cryptoairdrop_feature_title  = get_theme_mod( 'cryptoairdrop_feature_title', 'Why MEME COIN?');
	$cryptoairdrop_top_info_container_size  = get_theme_mod( 'cryptoairdrop_top_info_container_size', 'container');
	$cryptoairdrop_top_info_image_disable  = get_theme_mod( 'cryptoairdrop_top_info_image_disable', 'enable');
	$cryptoairdrop_feature_image  = get_theme_mod( 'cryptoairdrop_feature_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/meme-token-feature.png');
	$cryptoairdrop_top_info_count = get_theme_mod('cryptoairdrop_top_info_count', array('slider' => 4,'suffix' => '',));
	$cryptoairdrop_theme_schema 	= 'theme-light-grey';
}
?>
<!-- features Section -->
<section id="tokenomics" class="section features <?php echo esc_html($cryptoairdrop_theme_schema); ?>">
	<div class="<?php echo esc_html($cryptoairdrop_top_info_container_size); ?>">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-header">
					<h1 class="section-title"><?php echo esc_html($cryptoairdrop_feature_title); ?></h1>
				</div>
			</div>
		</div>

		<div class="row no-gutters mb-3 feature-content">
			<div class="<?php if($cryptoairdrop_top_info_image_disable == 'enable') echo 'col-xl-7'; else echo 'col-xl-12'; ?> d-flex align-items-stretch order-2 order-lg-1">
				<div class="content d-flex flex-column justify-content-center">
					<div class="row feature-data">
					<?php
					if ( ! empty( $cryptoairdrop_top_info_default_content ) ) {
						$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
						$cryptoairdrop_top_info_default_content = json_decode( $cryptoairdrop_top_info_default_content );
						$item = 0;
						foreach ( $cryptoairdrop_top_info_default_content as $feature_item ) {
							if ($item <= $cryptoairdrop_top_info_count['slider'] - 1) {
								$icon = ! empty( $feature_item->icon_value ) ? apply_filters( 'cryptoairdrop_translate_single_string', $feature_item->icon_value, 'Service section' ) : '';
								$title = ! empty( $feature_item->title ) ? apply_filters( 'cryptoairdrop_translate_single_string', $feature_item->title, 'Service section' ) : '';
								$text = ! empty( $feature_item->text ) ? apply_filters( 'cryptoairdrop_translate_single_string', $feature_item->text, 'Service section' ) : '';
								$image = ! empty( $feature_item->image_url ) ? apply_filters( 'cryptoairdrop_translate_single_string', $feature_item->image_url, 'Service section' ) : '';
								$icon_type = ! empty( $feature_item->choice ) ? apply_filters( 'cryptoairdrop_translate_single_string', $feature_item->choice, 'Service section' ) : '';
								?>
									<div class="col-md-6 icon-box" data-aos="fade-up">
										<?php if($icon_type == 'customizer_repeater_image') { ?>
											<img src="<?php echo esc_url($image);?>" />
										<?php } elseif($icon_type == 'customizer_repeater_icon') { ?>
											<i class="fas <?php echo esc_html($icon); ?> icon-lg "></i>
										<?php } ?>
										<h4><?php echo esc_html($title); ?></h4>
										<p><?php echo esc_html($text); ?></p>
									</div>
							<?php
							}
						}
					} else if( 'Meme Token' == $activate_theme ) {
						?>
						<div class="col-md-6 icon-box" data-aos="fade-up">
							<img src="<?php echo wpfrank_companion_plugin_url ?>/inc/cryptoairdrop/img/meme-coin-feature-1.png" />
							<h4><?php esc_html_e('Reliable & Safe', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.', 'wpfrank-companion'); ?></p>
						</div>
						<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
							<img src="<?php echo wpfrank_companion_plugin_url ?>/inc/cryptoairdrop/img/meme-coin-feature-2.png" />
							<h4><?php esc_html_e('High Market Value', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'wpfrank-companion'); ?></p>
						</div>
						<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
							<img src="<?php echo wpfrank_companion_plugin_url ?>/inc/cryptoairdrop/img/meme-coin-feature-3.png" />
							<h4><?php esc_html_e('Fully Secured Exchange', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'wpfrank-companion'); ?></p>
						</div>
						<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
							<img src="<?php echo wpfrank_companion_plugin_url ?>/inc/cryptoairdrop/img/meme-coin-feature-4.png" />
							<h4><?php esc_html_e('High Returns', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.', 'wpfrank-companion'); ?></p>
						</div>
					<?php
					} else {
					?>
						<div class="col-md-6 icon-box" data-aos="fade-up">
							<img src="<?php echo CRYPTOAIRDROP_THEME_URL ?>/assets/img/token/f1.png" />
							<h4><?php esc_html_e('Liquidity Pool - 2%', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip', 'wpfrank-companion'); ?></p>
						</div>
						<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
							<img src="<?php echo CRYPTOAIRDROP_THEME_URL ?>/assets/img/token/f2.png" />
							<h4><?php esc_html_e('Marketing & Buyback - 5%', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 'wpfrank-companion'); ?></p>
						</div>
						<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
							<img src="<?php echo CRYPTOAIRDROP_THEME_URL ?>/assets/img/token/f2.png" />
							<h4><?php esc_html_e('Auto Liquidity - 5%', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere', 'wpfrank-companion'); ?></p>
						</div>
						<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
							<img src="<?php echo CRYPTOAIRDROP_THEME_URL ?>/assets/img/token/f1.png" />
							<h4><?php esc_html_e('Holders Redistribution - 3%', 'wpfrank-companion'); ?></h4>
							<p><?php esc_html_e('Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta', 'wpfrank-companion'); ?></p>
						</div>
					<?php
					}
					?>
					</div>
				</div>
			</div>
			<?php if($cryptoairdrop_top_info_image_disable == 'enable') { ?>
				<div class="f-image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
					<img src="<?php echo esc_url($cryptoairdrop_feature_image); ?>" class="img-fluid" alt="" />
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- End of Service Section -->
<?php } 
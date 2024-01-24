<?php
/**
 * Index Documentation
 *
 * @package Crypto AirDrop
 */

$cryptoairdrop_docs_default_content  = get_theme_mod( 'cryptoairdrop_docs_content');
$cryptoairdrop_docs_title  = get_theme_mod( 'cryptoairdrop_docs_title', 'The Documentation');
$cryptoairdrop_docs_disabled  = get_theme_mod( 'cryptoairdrop_docs_disabled', 'True');
?>
<?php if($cryptoairdrop_docs_disabled == true) { 

$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;
 ?>

<!-- Documentation Section -->
<section id="documents" class="section documents theme-blue">
	<div class="container">
		<?php if(!empty($cryptoairdrop_docs_title)) { ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="section-header">
						<h1 class="section-title"><?php echo esc_html($cryptoairdrop_docs_title); ?></h1>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="row docs_content">
			<?php
			if ( ! empty( $cryptoairdrop_docs_default_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
				$cryptoairdrop_docs_default_content = json_decode( $cryptoairdrop_docs_default_content );
				$item = 1;
				foreach ( $cryptoairdrop_docs_default_content as $docs_item ) {
					$icon = ! empty( $docs_item->icon_value ) ? apply_filters( 'cryptoairdrop_translate_single_string', $docs_item->icon_value, 'Documentation section' ) : '';
					$title = ! empty( $docs_item->title ) ? apply_filters( 'cryptoairdrop_translate_single_string', $docs_item->title, 'Documentation section' ) : '';
					$text = ! empty( $docs_item->text ) ? apply_filters( 'cryptoairdrop_translate_single_string', $docs_item->text, 'Documentation section' ) : '';
					$image = ! empty( $docs_item->image_url ) ? apply_filters( 'cryptoairdrop_translate_single_string', $docs_item->image_url, 'Documentation section' ) : '';
					$icon_type = ! empty( $docs_item->choice ) ? apply_filters( 'cryptoairdrop_translate_single_string', $docs_item->choice, 'Documentation section' ) : '';
					$link = ! empty( $docs_item->link ) ? apply_filters( 'cryptoairdrop_translate_single_string', $docs_item->link, 'Documentation section' ) : '';
					?>
						<div class="col-md-3 ">
							<a href="<?php echo esc_url($link); ?>" target="_blank">
								<div class="token-docs token-doc-<?php echo $item; ?> shadow">
									<?php if($icon_type == 'customizer_repeater_image') { ?>
										<img src="<?php echo esc_url($image);?>" />
									<?php } elseif($icon_type == 'customizer_repeater_icon') { ?>
										<i class="fas <?php echo esc_attr($icon); ?> icon-lg doc-icon"></i>
									<?php } ?>
									<span><?php echo esc_html($title); ?></span>
									<?php if(!empty($text)) { ?><p><?php echo esc_html($text); ?></p><?php } ?>
								</div>
							</a>
						</div>
					<?php
					$item++;
				} 
			} else {

				if( 'Crypto Token' == $activate_theme ) { ?>
					<div class="col-md-3 ">
						<a href="#">
						<div class="token-docs token-doc-1 shadow">
							<img src="<?php echo esc_url(wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/btc.png'); ?>" />
							<span><?php esc_html_e('Bitcoin (BTC)'); ?></span>
							<p><?php esc_html_e('$23,519.46'); ?></p>
						</div>
						</a>
					</div>
					<div class="col-md-3">
						<div class="token-docs token-doc-2 shadow">
							<img src="<?php echo esc_url(wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/eth.png'); ?>" />
							<span><?php esc_html_e('Ethereum (ETH)'); ?></span>
							<p><?php esc_html_e('$1,640.89'); ?></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="token-docs token-doc-3 shadow">
							<img src="<?php echo esc_url(wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/bnb.png'); ?>" />
							<span><?php esc_html_e('Binance Coin (BNB)'); ?></span>
							<p><?php esc_html_e('$323.24'); ?></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="token-docs token-doc-4 shadow">
							<img src="<?php echo esc_url(wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/usdt.png'); ?>" />
							<span><?php esc_html_e('Tether (USDT)'); ?></span>
							<p><?php esc_html_e('$1.0002'); ?></p>
						</div>
					</div>
				<?php } else { ?>
					<div class="col-md-3 ">
						<a href="#">
						<div class="token-docs token-doc-1 shadow">
							<i class="fas fa-wallet icon-lg doc-icon"></i>
							<span>Wallet</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						</div>
						</a>
					</div>
					<div class="col-md-3">
						<div class="token-docs token-doc-2 shadow">
							<i class="fas fa-file-alt icon-lg doc-icon"></i>
							<span>Whitepaper</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="token-docs token-doc-3 shadow">
							<i class="fas fa-file-pdf icon-lg doc-icon"></i>
							<span>Reports</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="token-docs token-doc-4 shadow">
							<i class="fas fa-cubes icon-lg doc-icon"></i>
							<span>Structure</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						</div>
					</div>
				<?php } 
			}
			?>

			
		</div>
		
	</div>
</section>
<!-- End of Documentation Section -->
<?php } 
<?php
/**
 * Index Slider
 *
 * @package Crypto AirDrop
 */

$cryptoairdrop_main_slider_disabled = get_theme_mod('cryptoairdrop_main_slider_disabled', true);

if($cryptoairdrop_main_slider_disabled != false) { 

$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;

if( 'Crypto AirDrop' == $activate_theme ) {
	$cryptoairdrop_slider_title = get_theme_mod('cryptoairdrop_slider_title', 'Deflationary Token With A Difference');
	$cryptoairdrop_slider_subtitle = get_theme_mod('cryptoairdrop_slider_subtitle', 'The Moon Token Protocol is a community driven, fair launched DeFi Token.');
	$cryptoairdrop_slider_video_link = get_theme_mod('cryptoairdrop_slider_video_link', 'https://www.youtube.com/watch?v=arTftDPx5ko&list=PLOeoids2h7nKEX31CniGQbjHXZauj_ftQ');
	$cryptoairdrop_slider_custom_text = get_theme_mod('cryptoairdrop_slider_custom_text', 'Learn More');
	$cryptoairdrop_slider_custom_url = get_theme_mod('cryptoairdrop_slider_custom_url', '#');
	$cryptoairdrop_main_slider_media_type = get_theme_mod('cryptoairdrop_main_slider_media_type', 'slide_video');
	$cryptoairdrop_slider_image = get_theme_mod('cryptoairdrop_slider_image', get_template_directory_uri() . '/assets/img/token/crypto-slider.png');
}
if( 'Crypto Compare' == $activate_theme ) {
	$cryptoairdrop_slider_title = get_theme_mod('cryptoairdrop_slider_title', 'Connecting World Through Blockchain Technology');
	$cryptoairdrop_slider_subtitle = get_theme_mod('cryptoairdrop_slider_subtitle', 'We are the most trusted company that helps you get best out of the Crypto Currency.');
	$cryptoairdrop_slider_video_link = get_theme_mod('cryptoairdrop_slider_video_link', 'https://www.youtube.com/watch?v=arTftDPx5ko&list=PLOeoids2h7nKEX31CniGQbjHXZauj_ftQ');
	$cryptoairdrop_slider_custom_text = get_theme_mod('cryptoairdrop_slider_custom_text', 'Know More');
	$cryptoairdrop_slider_custom_url = get_theme_mod('cryptoairdrop_slider_custom_url', '#');
	$cryptoairdrop_main_slider_media_type = get_theme_mod('cryptoairdrop_main_slider_media_type', 'slide_image');
	$cryptoairdrop_slider_image = get_theme_mod('cryptoairdrop_slider_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/slider.png');
}
if( 'Crypto Mining' == $activate_theme ) {
	$cryptoairdrop_slider_title = get_theme_mod('cryptoairdrop_slider_title', 'Deflationary Token With A Difference');
	$cryptoairdrop_slider_subtitle = get_theme_mod('cryptoairdrop_slider_subtitle', 'The Moon Token Protocol is a community driven, fair launched DeFi Token.');
	$cryptoairdrop_slider_video_link = get_theme_mod('cryptoairdrop_slider_video_link', 'https://www.youtube.com/watch?v=arTftDPx5ko&list=PLOeoids2h7nKEX31CniGQbjHXZauj_ftQ');
	$cryptoairdrop_slider_custom_text = get_theme_mod('cryptoairdrop_slider_custom_text', 'Learn More');
	$cryptoairdrop_slider_custom_url = get_theme_mod('cryptoairdrop_slider_custom_url', '#');
	$cryptoairdrop_main_slider_media_type = get_theme_mod('cryptoairdrop_main_slider_media_type', 'slide_video');
	$cryptoairdrop_slider_image = get_theme_mod('cryptoairdrop_slider_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/slider-2.png');
}
if( 'Crypto Token' == $activate_theme ) {
	$cryptoairdrop_slider_title = get_theme_mod('cryptoairdrop_slider_title', 'Unleashing Power of Digital Tokens');
	$cryptoairdrop_slider_subtitle = get_theme_mod('cryptoairdrop_slider_subtitle', 'Our website offers a comprehensive platform for buying, selling, and managing various types of crypto tokens.');
	$cryptoairdrop_slider_video_link = get_theme_mod('cryptoairdrop_slider_video_link', 'https://www.youtube.com/watch?v=arTftDPx5ko&list=PLOeoids2h7nKEX31CniGQbjHXZauj_ftQ');
	$cryptoairdrop_slider_custom_text = get_theme_mod('cryptoairdrop_slider_custom_text', 'Invest Now');
	$cryptoairdrop_slider_custom_url = get_theme_mod('cryptoairdrop_slider_custom_url', '#');
	$cryptoairdrop_main_slider_media_type = get_theme_mod('cryptoairdrop_main_slider_media_type', 'slide_image');
	$cryptoairdrop_slider_image = get_theme_mod('cryptoairdrop_slider_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/slider-token.png');
}
if( 'Meme Token' == $activate_theme ) {
	$cryptoairdrop_slider_title = get_theme_mod('cryptoairdrop_slider_title', 'NEW GENERATION MEME COIN');
	$cryptoairdrop_slider_subtitle = get_theme_mod('cryptoairdrop_slider_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
	$cryptoairdrop_slider_video_link = get_theme_mod('cryptoairdrop_slider_video_link', 'https://www.youtube.com/watch?v=arTftDPx5ko&list=PLOeoids2h7nKEX31CniGQbjHXZauj_ftQ');
	$cryptoairdrop_slider_custom_text = get_theme_mod('cryptoairdrop_slider_custom_text', 'Learn More');
	$cryptoairdrop_slider_custom_url = get_theme_mod('cryptoairdrop_slider_custom_url', '#');
	$cryptoairdrop_main_slider_media_type = get_theme_mod('cryptoairdrop_main_slider_media_type', 'slide_image');
	$cryptoairdrop_slider_image = get_theme_mod('cryptoairdrop_slider_image', wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/meme-token-slide.png');
}
$cryptoairdrop_overlap = get_theme_mod( 'cryptoairdrop_menu_overlap', 1);
$admin_bar_enabled = cryptoairdrop_is_admin_bar_enabled();
?>
<style>
<?php if($cryptoairdrop_overlap != 1) { ?>
#particles-js {
	top: 136px;
}
<?php } ?>
<?php if($admin_bar_enabled == 'admin-bar-enabled' ) { ?>
.main-slider .item { height: 780px; }
<?php } else { ?>
.main-slider .item { height: 801px; }
<?php } ?>
</style>
<!-- Slider Section -->
<span id="site-content"></span>
<div id="particles-js"></div>
<section id="slider" class="section main-slider">
	<div class="item home-section home-full-height" style="background: linear-gradient(135deg, #000428, #0074da);">
		<div class="custom-shape-divider-bottom">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
				<path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
				<path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
			</svg>
		</div>

		<div class="container slider-caption">
			<div class="row">
				<div class="<?php if( !empty( $cryptoairdrop_slider_video_link ) || !empty( $cryptoairdrop_slider_image ) ) echo 'col-md-6'; else echo 'col-md-12'; ?>">
					<figcaption class="caption-content">
						<h2 class="title"><?php echo esc_html($cryptoairdrop_slider_title); ?></h2>
						<p><?php echo esc_html($cryptoairdrop_slider_subtitle); ?></p>
						<div class="more-btn mt-4 mb-4">
							<div class="d-flex flex-row">
								<div class="flex-column">
									<a href="<?php echo esc_url($cryptoairdrop_slider_custom_url); ?>" class="btn-large btn-skin btn-animation"><?php echo esc_html($cryptoairdrop_slider_custom_text); ?></a>
								</div>
							</div>
						</div>
					</figcaption>
				</div>
				<?php if( !empty( $cryptoairdrop_slider_video_link ) || !empty( $cryptoairdrop_slider_image ) ) { ?>
				<div class="col-md-6 slider-video">
				<?php if($cryptoairdrop_main_slider_media_type == 'slide_video') { 
						if( !empty( $cryptoairdrop_slider_video_link ) ) { ?>
								<?php
									$width = '540';
									$height = '317';
									//$video_url = "//www.youtube.com/embed".
									$parsedUrl  = parse_url($cryptoairdrop_slider_video_link);
									//specified condition for YouTube URL.
									if($parsedUrl['host'] == 'www.youtube.com' || $parsedUrl['host'] == 'youtube.com'){
										//get Youtube id from URL.
										$embed = $parsedUrl['query'];
										parse_str($embed, $out);
										$embedUrl   = $out['v'];
										$embedUrl = explode('__',$embedUrl);
										$url = '//www.youtube.com/embed/'.$embedUrl[0] ;
										//echo the embed code for you tube.
										echo '<iframe class="responsive-iframe" width="'.$width.'" height="'.$height.'" src="'.$url.'" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
									}
									//specified condition for vimeo URL.
									if($parsedUrl['host'] == 'www.vimeo.com' || $parsedUrl['host'] == 'vimeo.com'){
										//get vimeo id from URL	
										$urlid = $parsedUrl['path'];
										$number = preg_replace("/[^0-9]/", '', $urlid);
										$url = '//player.vimeo.com/video/'.$number ;
										//echo the embed code for Vimeo.
										echo '<iframe class="responsive-iframe" width="'.$width.'" height="'.$height.'" src="'.$url.'" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
									} ?>
				<?php 	} 
					} elseif($cryptoairdrop_main_slider_media_type == 'slide_image') { 
						if( !empty( $cryptoairdrop_slider_image ) ) { ?>
							<img height="400" width="600" src="<?php echo esc_url($cryptoairdrop_slider_image); ?>" alt="slider-image" />
				<?php 	}
					}
				?>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Slider Section -->
<?php
}
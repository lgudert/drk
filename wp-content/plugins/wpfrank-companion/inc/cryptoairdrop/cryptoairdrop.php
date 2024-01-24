<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 * @package wpfrank-companion
 */
// Diffrent Themes.
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme = $activate_theme_data->name;

// Customizer Sections.
require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer.php';
require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer-callback.php';

if( 'Crypto AirDrop' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer-options.php';
} 
if( 'Crypto Compare' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer-compare-options.php';
}
if( 'Crypto Mining' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer-mining-options.php';
}
if( 'Crypto Token' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer-token-options.php';
} 
if( 'Meme Token' == $activate_theme ) {
	require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer-meme-options.php';
} 

require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/wpfrank-companion-cryptoairdrop-customizer-default.php';

// Frontpage Sections.
if ( ! function_exists( 'wpfrank_cryptoairdrop_frontpage_sections' ) ) :
	function wpfrank_cryptoairdrop_frontpage_sections(){
		// Diffrent Themes.
		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme = $activate_theme_data->name;

		require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-slider.php';
		require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-about.php';
		if( 'Crypto Compare' == $activate_theme || 'Crypto AirDrop' == $activate_theme ) {
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-feature.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-faq.php';
		}
		if( 'Crypto Mining' == $activate_theme || 'Crypto AirDrop' == $activate_theme ) {
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-roadmap.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-documentation.php';
		}
		if( 'Crypto Token' == $activate_theme) {
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-documentation.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-feature.php';
		}
		if( 'Meme Token' == $activate_theme) {
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-feature.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-roadmap.php';
		}
		require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-blog.php';
		require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-contact.php';
		require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/front-page/wpfrank-companion-cryptoairdrop-woocommerce.php';

	}
	add_action( 'wpfrank_cryptoairdrop_frontpage', 'wpfrank_cryptoairdrop_frontpage_sections' );
endif;
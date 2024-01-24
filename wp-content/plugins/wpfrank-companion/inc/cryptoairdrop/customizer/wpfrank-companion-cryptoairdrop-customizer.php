<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * WPFRANK Plugin Customizer Class
 *
 * @package wpfrank-companion
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WPFRANK_cryptoairdrop_Customizer' ) ) :

	// Cryptoairdrop Customizer class.
	class WPFRANK_cryptoairdrop_Customizer {
		public function WPFRANK_cryptoairdrop_Customizer_settings() {
			// Diffrent Themes.
			$activate_theme_data = wp_get_theme(); // getting current theme data.
			$activate_theme      = $activate_theme_data->name;

			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-slider-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-about-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-blog-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-contact-customizer-settings.php';
			require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-woocommerce-customizer-settings.php';

			if ( 'Crypto Compare' == $activate_theme || 'Crypto AirDrop' == $activate_theme ) {
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-features-customizer-settings.php';
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-faq-customizer-settings.php';
			}
			if ( 'Crypto Mining' == $activate_theme || 'Crypto AirDrop' == $activate_theme ) {
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-roadmap-customizer-settings.php';
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-docs-customizer-settings.php';
			}
			if ( 'Crypto Token' == $activate_theme ) {
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-features-customizer-settings.php';
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-docs-customizer-settings.php';
			}
			if ( 'Meme Token' == $activate_theme ) {
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-features-customizer-settings.php';
				require wpfrank_companion_plugin_dir . 'inc/cryptoairdrop/customizer/frontpage-sections/wpfrank-companion-cryptoairdrop-roadmap-customizer-settings.php';
			}
		}
	}
endif;

$customizer_settings = new WPFRANK_cryptoairdrop_Customizer();

$customizer_settings->WPFRANK_cryptoairdrop_Customizer_settings();

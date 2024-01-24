<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
* Plugin Name:	WPFrank Companion
* Plugin URI:	https://wordpress.org/plugins/wpfrank-companion
* Description:	WPFrank Companion plugin provides themes extra settings for front page.
* Version:		0.3.0
* Author: 		WP Frank
* Author URI:	https://wpfrank.com/
* Tested up to:	6.3.1
* Requires:		4.0 or higher
* License:		GPLv3 or later
* License URI:	http://www.gnu.org/licenses/gpl-3.0.html
* Requires PHP:	4.0
* Text Domain:	wpfrank-companion
* Domain Path:	/languages
*/

/*
WPFrank Companion is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

WPFrank Companion is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WPFrank Companion. If not, see http://www.gnu.org/licenses/gpl-3.0.html.
*/

define( 'wpfrank_companion_plugin_url', plugin_dir_url( __FILE__ ) );
define( 'wpfrank_companion_plugin_dir', plugin_dir_path( __FILE__ ) );

if( !function_exists('wpfrank_companion_init') ){
	function wpfrank_companion_init(){
		$activate_theme_data = wp_get_theme(); // getting current theme data
		$activate_theme = $activate_theme_data->name;

		if( 'BusinessExpo' == $activate_theme || 'Architect Designs' == $activate_theme || 'Medical Health' == $activate_theme || 'Building Construction' == $activate_theme ){
			require("inc/businessexpo/businessexpo.php");
		}

		if( 'Crypto AirDrop' == $activate_theme || 'Crypto Compare' == $activate_theme || 'Crypto Mining' == $activate_theme || 'Crypto Token' == $activate_theme || 'Meme Token'== $activate_theme ){
			require("inc/cryptoairdrop/cryptoairdrop.php");
		}

	}
	add_action( 'init', 'wpfrank_companion_init' );
}

// on plugin activation
function wpfrank_companion_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/wpfrank-companion-activator.php';
	wpfrank_companion_plugin_activator::activate();
}
register_activation_hook( __FILE__, 'wpfrank_companion_activate' );
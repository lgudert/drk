<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 *
 * @package wpfrank-companion
 */

 if ( ! function_exists( 'cryptoairdrop_docs_default_content' ) ) :
	function cryptoairdrop_docs_default_content( $wp_customize ){
		$cryptoairdrop_docs_data = $wp_customize->get_setting( 'cryptoairdrop_docs_content' );
		if ( ! empty( $cryptoairdrop_docs_data ) ) {
			$cryptoairdrop_docs_data->default = json_encode( array(
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/btc.png',
					'title'			=> esc_html__( 'Bitcoin (BTC)', 'cryptoairdrop' ),
					'text'			=> '$23,519.46',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b15',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/eth.png',
					'title'			=> esc_html__( 'Ethereum (ETH)', 'cryptoairdrop' ),
					'text'			=> '$1,640.89',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b16',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/bnb.png',
					'title'			=> esc_html__( 'Binance Coin (BNB)', 'cryptoairdrop' ),
					'text'			=> '$323.24',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/usdt.png',
					'title'			=> esc_html__( 'Tether (USDT)', 'cryptoairdrop' ),
					'text'			=> '$1.0002',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
			) );
		}
	}
	add_action( 'customize_register', 'cryptoairdrop_docs_default_content' );
endif;

if ( ! function_exists( 'cryptoairdrop_top_info_default_content' ) ) :
	function cryptoairdrop_top_info_default_content( $wp_customize ){
		$cryptoairdrop_top_info_data = $wp_customize->get_setting( 'cryptoairdrop_top_info_content' );
		if ( ! empty( $cryptoairdrop_top_info_data ) ) {
			$cryptoairdrop_top_info_data->default = json_encode( array(
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/bitcoin.png',
					'title'			=> esc_html__( 'Liquidity Pool - 2%', 'cryptoairdrop' ),
					'text'			=> 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b15',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/currency.png',
					'title'			=> esc_html__( 'Marketing & Buyback - 5%', 'cryptoairdrop' ),
					'text'			=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b16',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/exchange.png',
					'title'			=> esc_html__( 'Auto Liquidity - 5%', 'cryptoairdrop' ),
					'text'			=> 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
				array(
					'image_url'		=> wpfrank_companion_plugin_url . '/inc/cryptoairdrop/img/trade.png',
					'title'			=> esc_html__( 'Holders Redistribution - 3%', 'cryptoairdrop' ),
					'text'			=> 'Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta',
					'choice'		=> 'customizer_repeater_image',
					'link'			=> '#',
					'id'			=> 'customizer_repeater_56d7ea7f40b17',
				),
			) );
		}
	}
	add_action( 'customize_register', 'cryptoairdrop_top_info_default_content' );
endif;
<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 *
 * @package wpfrank-companion
 */
	if ( ! function_exists( 'cryptoairdrop_top_info_default_content' ) ) :
			function cryptoairdrop_top_info_default_content( $wp_customize ){
				$cryptoairdrop_top_info_data = $wp_customize->get_setting( 'cryptoairdrop_top_info_content' );
				if ( ! empty( $cryptoairdrop_top_info_data ) ) {
					$cryptoairdrop_top_info_data->default = json_encode( array(
						array(
							'image_url'		=> get_template_directory_uri() .'/assets/img/token/f1.png',
							'title'			=> esc_html__( 'Liquidity Pool - 2%', 'cryptoairdrop' ),
							'text'			=> 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
							'choice'		=> 'customizer_repeater_image',
							'link'			=> '#',
							'id'			=> 'customizer_repeater_56d7ea7f40b15',
						),
						array(
							'image_url'		=> get_template_directory_uri() .'/assets/img/token/f2.png',
							'title'			=> esc_html__( 'Marketing & Buyback - 5%', 'cryptoairdrop' ),
							'text'			=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt',
							'choice'		=> 'customizer_repeater_image',
							'link'			=> '#',
							'id'			=> 'customizer_repeater_56d7ea7f40b16',
						),
						array(
							'image_url'		=> get_template_directory_uri() .'/assets/img/token/f2.png',
							'title'			=> esc_html__( 'Auto Liquidity - 5%', 'cryptoairdrop' ),
							'text'			=> 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere',
							'choice'		=> 'customizer_repeater_image',
							'link'			=> '#',
							'id'			=> 'customizer_repeater_56d7ea7f40b17',
						),
						array(
							'image_url'		=> get_template_directory_uri() .'/assets/img/token/f1.png',
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
	
	if ( ! function_exists( 'cryptoairdrop_faqs_default_content' ) ) :
			function cryptoairdrop_faqs_default_content( $wp_customize ){
			
				$cryptoairdrop_faqs_data = $wp_customize->get_setting( 'cryptoairdrop_faqs_content' );
				if ( ! empty( $cryptoairdrop_faqs_data ) ) {
					$cryptoairdrop_faqs_data->default = json_encode( array(
						array(
							'title'			=> esc_html__( '01. What is New Crypto Token?', 'cryptoairdrop' ),
							'text'			=> '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,aut officiis debitis aut rerum ut aut reiciendis voluptatibus maiores alias.</p>',
							'id'			=> 'customizer_repeater_56d7ea7f40b15',
						),
						array(
							'title'			=> esc_html__( '02. Who can invest in New Crypto Token?', 'cryptoairdrop' ),
							'text'			=> '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>',
							'id'			=> 'customizer_repeater_56d7ea7f40b16',
						),
						array(
							'title'			=> esc_html__( '03. Where to buy New Crypto Token?', 'cryptoairdrop' ),
							'text'			=> '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>',
							'id'			=> 'customizer_repeater_56d7ea7f40b17',
						),
						array(
							'title'			=> esc_html__( '04. What is the future of New Crypto Token?', 'cryptoairdrop' ),
							'text'			=> '<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,aut officiis debitis aut rerum ut aut reiciendis voluptatibus maiores alias.</p>',
							'id'			=> 'customizer_repeater_56d7ea7f40b17',
						),
					) );
				}
			}
			add_action( 'customize_register', 'cryptoairdrop_faqs_default_content' );
	endif;
<?php
if ( ! function_exists( 'businessexpo_custom_typography_css' ) ) :
	function businessexpo_custom_typography_css() {
		$output_css = '';
		$businessexpo_typography_disabled = get_theme_mod( 'businessexpo_typography_disabled', false );
		if ( $businessexpo_typography_disabled == true ) :

			
			if ( get_theme_mod( 'businessexpo_typography_base_font_family' ) != null ) :
				$output_css .= 'body { font-family: ' . esc_attr( get_theme_mod( 'businessexpo_typography_base_font_family' ) ) . " !important; }\n";
			endif;

			if ( get_theme_mod( 'businessexpo_typography_base_font_size' ) != null ) :
				$output_css .= 'body { font-size: ' . esc_attr( get_theme_mod( 'businessexpo_typography_base_font_size' ) ) . " !important; }\n";
			endif;

			if ( get_theme_mod( 'businessexpo_typography_h1_font_family' ) != null ) :
				$output_css .= 'h1 { font-family: ' . esc_attr( get_theme_mod( 'businessexpo_typography_h1_font_family' ) ) . " !important; }\n";
			endif;

			if ( get_theme_mod( 'businessexpo_typography_h2_font_family' ) != null ) :
				$output_css .= 'h2 { font-family: ' . esc_attr( get_theme_mod( 'businessexpo_typography_h2_font_family' ) ) . " !important; }\n";
			endif;

			if ( get_theme_mod( 'businessexpo_typography_h3_font_family' ) != null ) :
				$output_css .= 'h3 { font-family: ' . esc_attr( get_theme_mod( 'businessexpo_typography_h3_font_family' ) ) . " !important; }\n";
			endif;

			if ( get_theme_mod( 'businessexpo_typography_h4_font_family' ) != null ) :
				$output_css .= 'h4 { font-family: ' . esc_attr( get_theme_mod( 'businessexpo_typography_h4_font_family' ) ) . " !important; }\n";
			endif;

			if ( get_theme_mod( 'businessexpo_typography_h5_font_family' ) != null ) :
				$output_css .= 'h5 { font-family: ' . esc_attr( get_theme_mod( 'businessexpo_typography_h5_font_family' ) ) . " !important; }\n";
			endif;

			if ( get_theme_mod( 'businessexpo_typography_h6_font_family' ) != null ) :
				$output_css .= 'h6 { font-family: ' . esc_attr( get_theme_mod( 'businessexpo_typography_h6_font_family' ) ) . " !important; }\n";
			endif;

			wp_add_inline_style( 'businessexpo-style', $output_css );

		endif;

		$businessexpo_rtl_disabled = get_theme_mod( 'businessexpo_rtl_disabled', false );
		if ( $businessexpo_rtl_disabled == true ) :

			$output_css .= "body { direction: rtl; }\n";
			wp_add_inline_style( 'businessexpo-style', $output_css );
		endif;

	}
endif;
add_action( 'wp_enqueue_scripts', 'businessexpo_custom_typography_css' );

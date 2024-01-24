<?php
/**
 * businessexpo Customizer partials.
 *
 * @package businessexpo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customizer_Partials' ) ) {

	/**
	 * Customizer Partials.
	 */
	class businessexpo_Customizer_Partials {

		/**
		 * Instance.
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		// site title
		public static function businessexpo_customize_partial_blogname() {
			return get_bloginfo( 'name' );
		}

		// Site tagline
		public static function businessexpo_customize_partial_blogdescription() {
			return get_bloginfo( 'description' );
		}

		/* TopBar */

		// phone text
		public static function businessexpo_tbar_phone_text_render_callback() {
			return get_theme_mod( 'businessexpo_tbar_phone_text' );
		}
		// email text
		public static function businessexpo_tbar_email_text_render_callback() {
			return get_theme_mod( 'businessexpo_tbar_email_text' );
		}

		// button text
		public static function businessexpo_tbar_btn_text_render_callback() {
			return get_theme_mod( 'businessexpo_tbar_btn_text' );
		}

		// button url
		public static function businessexpo_tbar_btn_url_render_callback() {
			return get_theme_mod( 'businessexpo_tbar_btn_url' );
		}

		/* Footer */

		// footer copyright text
		public static function businessexpo_footer_copyright_text_render_callback() {
			return get_theme_mod( 'businessexpo_footer_copyright_text' );
		}
		
		// Blog Meta
		public static function businessexpo_blog_content_ordering_render_callback() {
			return get_theme_mod( 'businessexpo_blog_content_ordering' );
		}

	}
}

businessexpo_Customizer_Partials::get_instance();

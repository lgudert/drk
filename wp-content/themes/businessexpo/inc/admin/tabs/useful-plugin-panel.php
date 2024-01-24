<?php
/**
 * Useful Plugin Panel
 *
 * @package businessexpo
 */
?>
<div id="useful-plugin-panel" class="panel-left">
	<?php
	$businessexpo_free_plugins = array(
		'filter-gallery'                   => array(
			'name'     => 'Filter Gallery',
			'slug'     => 'filter-gallery',
			'filename' => 'filter-gallery.php',
		),
		'slider-factory'                   => array(
			'name'     => 'Slider Factory',
			'slug'     => 'slider-factory',
			'filename' => 'slider-factory.php',
		),
		'flickr-album-gallery'             => array(
			'name'     => 'Flickr Album Gallery',
			'slug'     => 'flickr-album-gallery',
			'filename' => 'flickr-album-gallery.php',
		),
		'ultimate-responsive-image-slider' => array(
			'name'     => 'Ultimate Responsive Image Slider',
			'slug'     => 'ultimate-responsive-image-slider',
			'filename' => 'ultimate-responsive-image-slider.php',
		),
		'customizer-login-page' => array(
			'name'     => 'Customizer Login Page',
			'slug'     => 'customizer-login-page',
			'filename' => 'customizer-login-page.php',
		),


	);
	if ( ! empty( $businessexpo_free_plugins ) ) {
		?>
		<div class="recomended-plugin-wrap">
		<?php
		foreach ( $businessexpo_free_plugins as $businessexpo_plugin ) {
			$businessexpo_info = businessexpo_call_plugin_api( $businessexpo_plugin['slug'] );
			?>
			<div class="recom-plugin-wrap w-3-col">
				<div class="plugin-title-install clearfix">
					<span class="title" title="<?php echo esc_attr( $businessexpo_plugin['name'] ); ?>">
						<?php echo esc_html( $businessexpo_plugin['name'] ); ?>	
					</span>
					<?php if ( $businessexpo_plugin['slug'] == 'filter-gallery' ) : ?>
					<p><?php esc_html_e( 'Filter gallery is a free WordPress plugin with multiple use case. You can publish a filter gallery within a few minutes. For this, create new filters, upload images and apply filters to them, configure setting, generate shortcode and publish the gallery on page or post.', 'businessexpo' ); ?></p>
					<?php endif; ?>					
					
					<?php if ( $businessexpo_plugin['slug'] == 'slider-factory' ) : ?>
					<p><?php esc_html_e( 'The best WordPress Slider plugin to add automatic slide show on the website with multiple design layouts.', 'businessexpo' ); ?></p>
					<?php endif; ?>
					
					<?php if ( $businessexpo_plugin['slug'] == 'flickr-album-gallery' ) : ?>
					<p><?php esc_html_e( 'Flickr album gallery pro is a Flickr JS API plugin to display albums galleries on WordPress websites and blogs. Generate multiple albums gallery shortcode using the plugin to display on individual pages.', 'businessexpo' ); ?></p>
					<?php endif; ?>
					
					<?php if ( $businessexpo_plugin['slug'] == 'ultimate-responsive-image-slider' ) : ?>
					<p><?php esc_html_e( 'Ultimate responsive image slider a fully responsive image slide show plugin for WordPress blogs and websites. Add infinite image slides in a single slider using multiple image uploader.', 'businessexpo' ); ?></p>
					<?php endif; ?>

					<?php if ( $businessexpo_plugin['slug'] == 'customizer-login-page' ) : ?>
					<p><?php esc_html_e( 'Customizer Login Page Plugin allows you to create a beautiful admin login page. It gives you a list of options for customization. You can personalize your admin login page directly from Customizer.', 'businessexpo' ); ?></p>
					<?php endif; ?>
					
				
					<?php
					echo '<div class="button-wrap">';
					echo businessexpo_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $businessexpo_plugin['slug'] );
					echo '</div>';
					?>
				</div>
			</div>
			</br>
			<?php
		}
		?>
		</div>
		<?php
	}
	?>
</div>

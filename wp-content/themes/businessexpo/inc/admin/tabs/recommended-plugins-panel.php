<?php
/**
 * Recommended Plugins Panel
 *
 * @package businessexpo
 */
?>
<div id="recommended-plugins-panel" class="panel-left">
	<?php
	$businessexpo_free_plugins = array(
		'wpfrank-companion' => array(
			'name'     => 'WpFrank Companion',
			'slug'     => 'wpfrank-companion',
			'filename' => 'wpfrank-companion.php',
		),
	);
	if ( ! empty( $businessexpo_free_plugins ) ) {
		?>
		<div class="recomended-plugin-wrap">
		<?php
		foreach ( $businessexpo_free_plugins as $businessexpo_plugin ) {
			$businessexpo_info = businessexpo_call_plugin_api( $businessexpo_plugin['slug'] );
			?>
			<div class="recom-plugin-wrap mb-0">
				<div class="plugin-title-install clearfix">
					<span class="title" title="">
						<?php esc_html_e( 'Recommended Plugin', 'businessexpo' ); ?>
					</span>
					<p><?php esc_html_e( 'WpFrank Companion Plugin is highly recommended for businessexpo Theme, After installing it, you will be able to show all the Front-Page features and Business sections for your Website.', 'businessexpo' ); ?></p>
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

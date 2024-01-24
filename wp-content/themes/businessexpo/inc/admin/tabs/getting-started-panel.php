<?php
/**
 * Getting Started Panel.
 *
 * @package businessexpo
 */
?>
<div id="getting-started-panel" class="panel-left visible">
	<div class="panel-aside panel-column">
	 
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
				
			<h4 title="">
				<?php esc_html_e( 'Companion Plugin', 'businessexpo' ); ?>
			</h4>
			<p class="mt-0"><?php esc_html_e( 'WpFrank Companion Plugin requires to show all the front page features and Customization setting of Front Page.', 'businessexpo' ); ?></p>
			<?php
			echo '<div class="mt-12">';
			echo businessexpo_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $businessexpo_plugin['slug'] );
			echo '</div>';
			?>

			</br>
			<?php
		}
		?>
		</div>
		<?php
	}
	?>
	 
	 
	 
	 
	</div> 
   <div class="panel-aside panel-column">
		<h4><?php esc_html_e( 'Go to the Customizer', 'businessexpo' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every single aspect of the theme. Because this theme provides advanced settings to control the theme layout through the customizer.', 'businessexpo' ); ?></p>
		<a class="button button-primary" target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'businessexpo' ); ?>"><?php esc_html_e( 'Go to the Customizer', 'businessexpo' ); ?></a>
	</div>
</div>

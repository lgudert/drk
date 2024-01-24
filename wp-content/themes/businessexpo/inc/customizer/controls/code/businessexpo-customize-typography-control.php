<?php

// Exit if accessed directly.
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}
/**
 * Typography control
 */
class businessexpo_Customizer_Typography_Control extends WP_Customize_Control {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'businessexpo-typography';

	/**
	 * Render the control's content.
	 * Allows the content to be overriden without having to rewrite the wrapper in $this->render().
	 *
	 * @access protected
	 */
	protected function render_content() {
		$this_val = $this->value(); ?>
		<label>
			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
			<?php endif; ?>

			<select class="businessexpo-typography-select" <?php $this->link(); ?>>
				<?php
				// Get Standard font options
				if ( $std_fonts = businessexpo_standard_fonts() ) {
					?>
					<optgroup label="<?php esc_attr_e( 'Standard Fonts', 'businessexpo' ); ?>">
						<?php
						// Loop through font options and add to select
						foreach ( $std_fonts as $font ) {
							?>
							<option value="<?php echo esc_attr( $font ); ?>" <?php selected( $font, $this_val ); ?>><?php echo esc_html( $font ); ?></option>
						<?php } ?>
					</optgroup>
					<?php
				}

				// Google font options
				if ( $google_fonts = businessexpo_google_fonts_array() ) {
					?>
					<optgroup label="<?php esc_attr_e( 'Google Fonts', 'businessexpo' ); ?>">
						<?php
						// Loop through font options and add to select
						foreach ( $google_fonts as $font ) {
							?>
							<option value="<?php echo esc_attr( $font ); ?>" <?php selected( $font, $this_val ); ?>><?php echo esc_html( $font ); ?></option>
						<?php } ?>
					</optgroup>
				<?php } ?>
			</select>

		</label>

		<?php
	}
}

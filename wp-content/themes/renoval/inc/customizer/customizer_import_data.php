<?php
class renoval_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof renoval_import_dummy_data ) ) {
			self::$instance = new renoval_import_dummy_data;
			self::$instance->renoval_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function renoval_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'renoval_import_customize_scripts' ), 0 );

	}
	
	

	public function renoval_import_customize_scripts() {

	wp_enqueue_script( 'renoval-import-customizer-js', get_template_directory_uri() . '/assets/js/renoval-import-customizer.js', array( 'customize-controls' ) );
	}
}

$renoval_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
renoval_import_dummy_data::init( apply_filters( 'renoval_import_customizer', $renoval_import_customizers ) );
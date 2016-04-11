<?php
/**
 * kellee CMB2 metaboxes
 *
 * @package kellee
 */

class kellee_cmb2_metaboxes {
	// Prefix for metabox field ids uses underscore so it won't show
	// up on the WP custom fields dropdown
	private static $prefix = '_kellee_';


	/**
	 * Initalize cmb2 fields
	 */
	public function __construct() {
		// Home custom page template
		add_action( 'cmb2_init', array( $this, 'kellee_cmb2_home_meta' ) );
	}

	///////////////////////
	// Home Page Meta Fields
	///////////////////////


	public static function kellee_cmb2_home_meta() {
		
		/////////////////////// Set up meta box
		$kellee_home_box = new_cmb2_box( array(
			'id'            => 'kellee_home_metabox',
			'title'         => __( 'Contact Form', 'kellee' ),
			'object_types'  => array( 'page' ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'show_on'       => array(
				'key' => 'page-template', 
				'value' => 'templates/page-homepage.php',
			),
		) );

		/////////////////////// Meta boxes

		$kellee_home_box->add_field( array(
			'name'       => __( 'Form', 'kellee' ),
			'id'         => self::$prefix . 'form',
			'type'       => 'text',
		) );
	}
}

new kellee_cmb2_metaboxes;

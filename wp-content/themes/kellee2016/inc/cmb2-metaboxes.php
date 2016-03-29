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
			'title'         => __( 'Home', 'kellee' ),
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
			'name'       => __( 'Purple Section', 'kellee' ),
			'id'         => self::$prefix . 'home_purple_section',
			'type'       => 'title',
		) );

		$kellee_home_box->add_field( array(
			'name'       => __( 'Heading', 'kellee' ),
			'id'         => self::$prefix . 'home_purple_heading',
			'type'       => 'text',
		) );

		// Grid Repeater
		$grid_repeater = $kellee_home_box->add_field( 
			array(
				'id'          => self::$prefix . 'home_green_grid_repeater',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Grid Item {#}', 'kellee' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Grid Item', 'kellee' ),
					'remove_button' => __( 'Remove Grid Item', 'kellee' ),
				),
			)
		);

			// Slide - Image
			$kellee_home_box->add_group_field( $grid_repeater, array(
				'name' => 'Grid Item Icon',
				'desc' => 'Upload an icon here',
				'id'   => self::$prefix . 'grid_green_repeater_icon',
				'type' => 'file',
			) );

			// Slide - Heading
			$kellee_home_box->add_group_field( $grid_repeater, array(
				'name' => 'Grid Item Heading',
				'desc' => 'Add text for grid heading here.',
				'id'   => self::$prefix . 'grid_green_repeater_heading',
				'type' => 'text',
			) );

			// Slide - Copy
			$kellee_home_box->add_group_field( $grid_repeater, array(
				'name' => 'Grid Item Copy',
				'desc' => 'Add copy text for grid heading here.',
				'id'   => self::$prefix . 'grid_green_repeater_copy',
				'type' => 'textarea',
			) );

		$kellee_home_box->add_field( array(
			'name'       => __( 'Sub Section Heading', 'kellee' ),
			'id'         => self::$prefix . 'home_green_subsection_heading',
			'type'       => 'wysiwyg',
		) );
	}
}

new kellee_cmb2_metaboxes;

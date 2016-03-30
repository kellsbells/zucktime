<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class kellee_Admin {
	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'kellee_options';
	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'kellee_option_metabox';
	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = '';
	/**
	 * Options Page hook
	 * @var string
	 */
	protected $options_page = '';
	/**
	 * Constructor
	 * @since 0.1.0
	 */
	public function __construct() {
		// Set our title
		$this->title = __( 'Site Options', 'kellee' );
	}
	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
		add_action( 'init', array( $this, 'custom_post_types' ) );
	}
	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}
	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );
		// Include CMB CSS in the head to avoid FOUC
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}
	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
		</div>
		<?php
	}
	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {
		// hook in our save notices
		add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );
		$cmb = new_cmb2_box( array(
			'id'         => $this->metabox_id,
			'hookup'     => false,
			'cmb_styles' => false,
			'show_on'    => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );
		// Set our CMB2 fields
		$cmb->add_field( array(
			'name' => __( 'Background Images Upload', 'kellee' ),
			'desc' => __( 'Add background images used throughout the site here.', 'kellee' ),
			'id'   => '_kellee_background_images',
			'type' => 'file_list',
		) );
	}

	/**
	 * Create custom post types
	 */
	public function custom_post_types() {
		// Set up custom post types
		
		// Project post type
		$projects_labels = array(
			'add_new'            => _x( 'Add New', 'project', 'ps' ),
			'add_new_item'       => __( 'Add New Project', 'ps' ),
			'all_items'          => __( 'All Projects', 'ps' ),
			'edit_item'          => __( 'Edit Project', 'ps' ),
			'menu_name'          => _x( 'Projects', 'admin menu', 'ps' ),
			'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'ps' ),
			'name'               => _x( 'Projects', 'post type general name', 'ps' ),
			'new_item'           => __( 'New Project', 'ps' ),
			'not_found'          => __( 'No Projects found.', 'ps' ),
			'not_found_in_trash' => __( 'No Projects found in Trash.', 'ps' ),
			'parent_item_colon'  => __( 'Parent Project:', 'ps' ),
			'search_items'       => __( 'Search Projects', 'ps' ),
			'singular_name'      => _x( 'Project', 'post type singular name', 'ps' ),
			'view_item'          => __( 'View Project', 'ps' ),
		);

		$projects_args = array(
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'labels'             => $projects_labels,
			'menu_icon'          => 'dashicons-admin-users',
			'menu_position'      => null,
			'public'             => true,
			'publicly_queryable' => true,
			'query_var'          => true,
			'rewrite'            => array(
				'slug' => 'projects',
			),
			'show_ui'            => true,
			'show_in_menu'       => true,
			'supports'           => array(
				'editor',
				'thumbnail',
				'title',
			),
		);

		register_post_type( 'projects', $projects_args );
	}
	/**
	 * Register settings notices for display
	 *
	 * @since  0.1.0
	 * @param  int   $object_id Option key
	 * @param  array $updated   Array of updated fields
	 * @return void
	 */
	public function settings_notices( $object_id, $updated ) {
		if ( $object_id !== $this->key || empty( $updated ) ) {
			return;
		}
		add_settings_error( $this->key . '-notices', '', __( 'Settings updated.', 'kellee' ), 'updated' );
		settings_errors( $this->key . '-notices' );
	}
	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}
		throw new Exception( 'Invalid property: ' . $field );
	}
}
/**
 * Helper function to get/return the kellee_Admin object
 * @since  0.1.0
 * @return kellee_Admin object
 */
function kellee_admin() {
	static $object = null;
	if ( is_null( $object ) ) {
		$object = new kellee_Admin();
		$object->hooks();
	}
	return $object;
}
/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function kellee_get_option( $key = '' ) {
	return cmb2_get_option( kellee_admin()->key, $key );
}
// Get it started
kellee_admin();
<?php
 
/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://fernandovillamorjr.com/
 * @since      1.0.0
 *
 * @package    Slider_SEO_Admin
 * @subpackage Slider_SEO_Admin/admin
 */
 
/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, the meta box functionality
 * and the JavaScript for loading the Media Uploader.
 */

class Slider_SEO_Admin {
 
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;
 
	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The version of the plugin
	 */
	private $version;
 
	/**
	 * Initializes the plugin by defining the properties.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
 
		$this->name = 'slider-seo';
		$this->version = '1.0.1';
 
	}
 
	/**
	 * Defines the hooks that will register and enqueue the JavaScriot
	 * and the meta box that will render the option.
	 *
	 * @since 1.0.0
	 */
	public function run() {
		// Set the constants
		add_action( 'plugins_loaded', array( $this, 'constants' ), 1 );
 		// create post type
		add_action( 'plugins_loaded', array( $this, 'create_post_type' ), 2 );
		// create shortcode
		add_action( 'plugins_loaded', array( $this, 'create_shortcode' ), 2 );

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );

		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );

		add_action( 'save_post', array( $this, 'save_post' ) );

		add_filter( 'single_template', array( $this, 'get_custom_post_type_template' ) );
 
	}

	public function create_shortcode() {
		require_once( trailingslashit( slider_SEO_INCLUDES ) . 'slider_seo_shortcode.php' );
	}

	public function create_post_type() {
		require_once( trailingslashit( slider_SEO_INCLUDES ) . 'add_post_type.php' );
	}

	public function get_custom_post_type_template($single_template) {
    global $post;

     if ($post->post_type == 'slider_seo') {
          $single_template = plugin_dir_path( __FILE__ ) . '/slider-seo-template.php';
     }
     else{
     	echo $single_template;
     }
     return $single_template;
	}
	

	 /**
	 * Define constants (optional)
	 *
	 * @since  0.1
	 */
	public function constants() {

		// Set constant path to the plugin directory.
		define( 'slider_SEO_ADMIN_DIR', plugin_dir_path( __FILE__ ) ) ;

		// Set the constant path to the plugin directory URI.
		define( 'slider_SEO_URL', plugin_dir_url( __FILE__ ) ) ;

		// Set the constant path to the includes directory.
		define( 'slider_SEO_INCLUDES', slider_SEO_ADMIN_DIR . trailingslashit( 'includes' ) );

		// Set the constant path to the admin js directory.
		define( 'slider_SEO_JS', slider_SEO_ADMIN_DIR . trailingslashit( 'js' ) );

	}


	/**
	 * @param		string	$meta_id	  	The ID of the metabox being save
	 * @param		string	$post_id	  	The ID of the post being save
	 * @param       bool  	$url 			input type is url
	 * @param       bool  	$text 			input type is text
	 * @param       bool  	$textarea 		input type is textarea
	 */
	
	public function save_post_meta( $meta_id = '', $post_id, $url = false, $text = false, $textarea = false ) {
		if ( ! empty( $_POST[$meta_id] ) ) {
		 
			$resources = $_POST[$meta_id];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 		
				if ($url) {
					$resource = esc_url( strip_tags( $resource ) );
				}

				if ($text) {
					$resource = sanitize_text_field( $resource );
				}

				if ($textarea) {
					$resource = esc_textarea( strip_tags( $resource));
				}

				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, $meta_id, $sanitized_resources );
		 
		}

		else {
 
			if ( '' !== get_post_meta( $post_id, $meta_id, true ) ) {
				delete_post_meta( $post_id, $meta_id );
			}
		 
		}
	}

	public function save_post_meta_animation( $meta_id = '',  $post_id ) {
		
		if ( isset( $_POST[$meta_id] ) ) {
			update_post_meta( $post_id, $meta_id, esc_attr( $_POST[$meta_id] ) );
		}
		else {
			update_post_meta( $post_id, $meta_id, null );
		}
	}

	public function save_post( $post_id ) {

		/* If we're not working with a 'slider_seo' post type or the user doesn't have permission to save,
		 * then we exit the function.
		 */
		
		if ( ! $this->user_can_save( $post_id, 'slider_seo_nonce', 'slider_seo_save' ) ) {
			return;
		}

		//slider image source
		$this->save_post_meta('slider-img-src', $post_id, true);

		//slider image set thumbnail
		$this->save_post_meta('slider-img-srcT', $post_id, true);

		//slider image set title
		$this->save_post_meta('slider-img-title', $post_id, false, true);

		//slider image set alt
		$this->save_post_meta('slider-img-alt', $post_id, false, true);

		//slider image set caption
		$this->save_post_meta('slider-img-caption', $post_id, false, false, true);

		//slider custom url
		$this->save_post_meta('slider-img-url', $post_id, true);

		
		//save animation metabox settings
		
		//slider type
		$this->save_post_meta_animation('slider_type', $post_id);
		
		//animation speed
		$this->save_post_meta_animation('slider_seo_basic_speed', $post_id);

		//navigation
		$this->save_post_meta_animation('slider_seo_basic_navigation', $post_id);

		//dots
		$this->save_post_meta_animation('slider_seo_basic_dots', $post_id);


	}

	

	/**
	 * Verifies that the post type that's being saved is actually a post (versus a page or another
	 * custom post type.
	 *
	 * @since       0.5.0
	 * @access      private
	 * @return      bool      Return if the current post type is a post; false, otherwise.
	 */
	private function is_valid_post_type() {
		return ! empty( $_POST['post_type'] ) && 'slider_seo' == $_POST['post_type'];
	}

	/**
	 * Determines whether or not the current user has the ability to save meta data associated with this post.
	 *
	 * @since       0.5.0
	 * @access      private
	 * @param		int		$post_id	  The ID of the post being save
	 * @param       string  $nonce_action The name of the action associated with the nonce.
	 * @param       string  $nonce_id     The ID of the nonce field.
	 * @return		bool				  Whether or not the user has the ability to save this post.
	 */
	private function user_can_save( $post_id, $nonce_action, $nonce_id ) {

	    $is_autosave = wp_is_post_autosave( $post_id );
	    $is_revision = wp_is_post_revision( $post_id );
	    $is_valid_nonce = ( isset( $_POST[ $nonce_action ] ) && wp_verify_nonce( $_POST[ $nonce_action ], $nonce_id ) );

	    // Return true if the user is able to save; otherwise, false.
	    return ! ( $is_autosave || $is_revision ) && $this->is_valid_post_type() && $is_valid_nonce;

	}

	/**
	 * Registers the stylesheets for handling the meta box
	 *
	 * @since 0.2.0
	 */
	public function enqueue_styles() {
	 
		wp_enqueue_style(
			$this->name,
			plugin_dir_url( __FILE__ ) . 'css/admin.css',
			array()
		);
	}
 
	/**
	 * Renders the meta box on the post and pages.
	 *
	 * @since 1.0.0
	 */
	public function add_meta_box() {
 
		require_once( trailingslashit( slider_SEO_INCLUDES ) . 'add_meta_box.php' );
 
	}
 
	/**
	 * Registers the JavaScript for handling the media uploader.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {

		require_once( trailingslashit( slider_SEO_INCLUDES ) . 'enqueue_scripts.php' );
 
	}

	/**
	 * Enqueue scripts in front.
	 *
	 * @since 1.0.0
	 */
	public function wp_enqueue_scripts() {

		require_once( trailingslashit( slider_SEO_INCLUDES ) . 'wp_enqueue_scripts.php' );
 
	}

	
 
	/**
	 * Renders the view that displays the contents for the meta box that for triggering
	 * the meta box.
	 *
	 * @param    WP_Post    $post    The post object
	 * @since    1.0.0
	 */
	public function display_main_metabox( $post ) {
		include_once( dirname( __FILE__ ) . '/views/admin.php' );
	}

	public function display_main_metabox_shortcode( $post ) {
		include_once( dirname( __FILE__ ) . '/views/admin_shortcode.php' );
	}

	public function display_main_metabox_gsettings( $post ) {
		include_once( dirname( __FILE__ ) . '/views/admin_gsettings.php' );
	}
 
}
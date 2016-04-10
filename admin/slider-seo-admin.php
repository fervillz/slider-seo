<?php
 
/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://tommcfarlin.com
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
 *
 * @package    Slider_SEO_Admin
 * @subpackage Slider_SEO_Admin/admin
 * @author     Tom McFarlin <tom@tommcfarlin.com>
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
          $single_template = plugin_dir_path( __FILE__ ) . '/slider_seo-template.php';
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
	 * Sanitized and saves the post slider image meta data specific with this post.
	 *
	 * @param    int    $post_id    The ID of the post with which we're currently working.
	 * @since 0.2.0
	 */
	public function save_post( $post_id ) {
	 
		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['slider-img-src'] ) ) {
		 
			$resources = $_POST['slider-img-src'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = esc_url( strip_tags( $resource ) );
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'slider-img-src', $sanitized_resources );
		 
		}

		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['slider-img-srcT'] ) ) {
		 
			$resources = $_POST['slider-img-srcT'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = esc_url( strip_tags( $resource ) );
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'slider-img-srcT', $sanitized_resources );
		 
		}

		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['slider-img-title'] ) ) {
		 
			$resources = $_POST['slider-img-title'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = sanitize_text_field( $resource );
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'slider-img-title', $sanitized_resources );
		 
		}else {
 
			if ( '' !== get_post_meta( $post_id, 'slider-img-title', true ) ) {
				delete_post_meta( $post_id, 'slider-img-title' );
			}
		 
		}

		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['slider-img-alt'] ) ) {
		 
			$resources = $_POST['slider-img-alt'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = sanitize_text_field( $resource);
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'slider-img-alt', $sanitized_resources );
		 
		}else {
 
			if ( '' !== get_post_meta( $post_id, 'slider-img-alt', true ) ) {
				delete_post_meta( $post_id, 'slider-img-alt' );
			}
		 
		}

		// If the 'caption' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['slider-img-caption'] ) ) {
		 
			$resources = $_POST['slider-img-caption'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = esc_textarea( strip_tags( $resource));
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'slider-img-caption', $sanitized_resources );
		 
		}else {
 
			if ( '' !== get_post_meta( $post_id, 'slider-img-caption', true ) ) {
				delete_post_meta( $post_id, 'slider-img-caption' );
			}
		 
		}

		if ( ! empty( $_POST['slider-img-url'] ) ) {
		 
				$resources = $_POST['slider-img-url'];
				$sanitized_resources = array();
				foreach ( $resources as $resource ) {

					$resource = esc_url( strip_tags( $resource ) );
					if ( ! empty( $resource ) ) {
						$sanitized_resources[] = $resource;
					}
			 
				}
				 
				update_post_meta( $post_id, 'slider-img-url', $sanitized_resources );
			 
			}else {
	 
				if ( '' !== get_post_meta( $post_id, 'slider-img-url', true ) ) {
					delete_post_meta( $post_id, 'slider-img-url' );
				}
			 
			}
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

	public function display_main_metabox2( $post ) {
		include_once( dirname( __FILE__ ) . '/views/admin_shortcode.php' );
	}
 
}
<?php
 
/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://tommcfarlin.com
 * @since      0.1.0
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
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;
 
	/**
	 * The current version of the plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The version of the plugin
	 */
	private $version;
 
	/**
	 * Initializes the plugin by defining the properties.
	 *
	 * @since 0.1.0
	 */
	public function __construct() {
 
		$this->name = 'acme-footer-image';
		$this->version = '0.1.0';
 
	}
 
	/**
	 * Defines the hooks that will register and enqueue the JavaScriot
	 * and the meta box that will render the option.
	 *
	 * @since 0.1.0
	 */
	public function run() {
 
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
		add_action( 'the_content', array( $this, 'the_content' ) );

		// Set the constants
		add_action( 'plugins_loaded', array( $this, 'constants' ), 1 );
 
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
	 * If the current post is a single post, check to see if there is a featured image.
	 * If so, append is to the post content prior to rendering the post.
	 *
	 * @param   string    $content    The content of the post.
	 * @since   1.0.0
	 */
	public function the_content( $content ) {
	 
		// We only care about appending the image to single pages
		if ( is_single() ) {
	 
			// In order to append an image, there has to be at least a source attribute
			if ( '' !== ( $src = get_post_meta( get_the_ID(), 'footer-thumbnail-src', true ) ) ) {
	 
				// read the remaining attributes even if they are empty strings
				$alt = get_post_meta( get_the_ID(), 'footer-thumbnail-alt', true );
				$title = get_post_meta( get_the_ID(), 'footer-thumbnail-title', true );
	 
				// create the image element within its own container
				$img_html = '<p id="footer-thumbnail">';
					$img_html .= "<img src='$src' alt='$alt' title='$title' />";
				$img_html .= '</p><!-- #footer-thumbnail -->';
	 
				// append it to the content
				$content .= $img_html;
	 
			}
	 
		}
	 
		return $content;
	 
	}

	/**
	 * Sanitized and saves the post featured footer image meta data specific with this post.
	 *
	 * @param    int    $post_id    The ID of the post with which we're currently working.
	 * @since 0.2.0
	 */
	public function save_post( $post_id ) {
	 
		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['footer-thumbnail-src'] ) ) {
		 
			$resources = $_POST['footer-thumbnail-src'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = esc_url( strip_tags( $resource ) );
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'footer-thumbnail-src', $sanitized_resources );
		 
		}

		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['footer-thumbnail-srcT'] ) ) {
		 
			$resources = $_POST['footer-thumbnail-srcT'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = esc_url( strip_tags( $resource ) );
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'footer-thumbnail-srcT', $sanitized_resources );
		 
		}

		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['footer-thumbnail-title'] ) ) {
		 
			$resources = $_POST['footer-thumbnail-title'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = __( sanitize_text_field( $resource ) );
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'footer-thumbnail-title', $sanitized_resources );
		 
		}else {
 
			if ( '' !== get_post_meta( $post_id, 'footer-thumbnail-title', true ) ) {
				delete_post_meta( $post_id, 'footer-thumbnail-title' );
			}
		 
		}

		// If the 'Resources' inputs exist, iterate through them and sanitize them
		if ( ! empty( $_POST['footer-thumbnail-alt'] ) ) {
		 
			$resources = $_POST['footer-thumbnail-alt'];
			$sanitized_resources = array();
			foreach ( $resources as $resource ) {
		 
				$resource = __( sanitize_text_field( $resource ) );
				if ( ! empty( $resource ) ) {
					$sanitized_resources[] = $resource;
				}
		 
			}
			 
			update_post_meta( $post_id, 'footer-thumbnail-alt', $sanitized_resources );
		 
		}else {
 
			if ( '' !== get_post_meta( $post_id, 'footer-thumbnail-alt', true ) ) {
				delete_post_meta( $post_id, 'footer-thumbnail-alt' );
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

		wp_enqueue_style(
			'animate',
			'https://raw.githubusercontent.com/daneden/animate.css/master/animate.css',
			array()
		);

		
	 
	}
 
	/**
	 * Renders the meta box on the post and pages.
	 *
	 * @since 0.1.0
	 */
	public function add_meta_box() {
 
		require_once( trailingslashit( slider_SEO_INCLUDES ) . 'add_meta_box.php' );
 
	}
 
	/**
	 * Registers the JavaScript for handling the media uploader.
	 *
	 * @since 0.1.0
	 */
	public function enqueue_scripts() {

		require_once( trailingslashit( slider_SEO_INCLUDES ) . 'enqueue_scripts.php' );
 
	}
 
	/**
	 * Renders the view that displays the contents for the meta box that for triggering
	 * the meta box.
	 *
	 * @param    WP_Post    $post    The post object
	 * @since    0.1.0
	 */
	public function display_featured_footer_image( $post ) {
		include_once( dirname( __FILE__ ) . '/views/admin.php' );
	}
 
}
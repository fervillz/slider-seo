<?php 

// Register Custom Post Type
function slider_seo() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'slider_seo' ),
		'singular_name'         => _x( 'Slider SEO', 'Post Type Singular Name', 'slider_seo' ),
		'menu_name'             => __( 'Slider SEO', 'slider_seo' ),
		'name_admin_bar'        => __( 'Slider SEO', 'slider_seo' ),
		'archives'              => __( 'Slider Archives', 'slider_seo' ),
		'parent_item_colon'     => __( 'Parent Item:', 'slider_seo' ),
		'all_items'             => __( 'All Slider Items', 'slider_seo' ),
		'add_new_item'          => __( 'Add New Slider', 'slider_seo' ),
		'add_new'               => __( 'Add New Slider', 'slider_seo' ),
		'new_item'              => __( 'New Slider', 'slider_seo' ),
		'edit_item'             => __( 'Edit Slider', 'slider_seo' ),
		'update_item'           => __( 'Update Slider', 'slider_seo' ),
		'view_item'             => __( 'View Slider', 'slider_seo' ),
		'search_items'          => __( 'Search Slider', 'slider_seo' ),
		'not_found'             => __( 'Not found', 'slider_seo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'slider_seo' ),
		'featured_image'        => __( 'Featured Image', 'slider_seo' ),
		'set_featured_image'    => __( 'Set featured image', 'slider_seo' ),
		'remove_featured_image' => __( 'Remove featured image', 'slider_seo' ),
		'use_featured_image'    => __( 'Use as featured image', 'slider_seo' ),
		'insert_into_item'      => __( 'Insert into item', 'slider_seo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'slider_seo' ),
		'items_list'            => __( 'Items list', 'slider_seo' ),
		'items_list_navigation' => __( 'Items list navigation', 'slider_seo' ),
		'filter_items_list'     => __( 'Filter items list', 'slider_seo' ),
	);
	$args = array(
		'label'                 => __( 'Slider SEO', 'slider_seo' ),
		'description'           => __( 'Create slides fast and easy', 'slider_seo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'slider_seo', $args );

}
add_action( 'init', 'slider_seo', 0 );

 ?>
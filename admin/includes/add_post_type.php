<?php 

// Register Custom Post Type
function slider_seo() {

	$labels = array(
		'name'                  => _x( 'Slider SEO', 'Post Type General Name', 'slider-seo' ),
		'singular_name'         => _x( 'Slider SEO', 'Post Type Singular Name', 'slider-seo' ),
		'menu_name'             => __( 'Slider SEO', 'slider-seo' ),
		'name_admin_bar'        => __( 'Slider SEO', 'slider-seo' ),
		'archives'              => __( 'Slider Archives', 'slider-seo' ),
		'parent_item_colon'     => __( 'Parent Item:', 'slider-seo' ),
		'all_items'             => __( 'All Slider Items', 'slider-seo' ),
		'add_new_item'          => __( 'Add New Slider', 'slider-seo' ),
		'add_new'               => __( 'Add New Slider', 'slider-seo' ),
		'new_item'              => __( 'New Slider', 'slider-seo' ),
		'edit_item'             => __( 'Edit Slider', 'slider-seo' ),
		'update_item'           => __( 'Update Slider', 'slider-seo' ),
		'view_item'             => __( 'View Slider', 'slider-seo' ),
		'search_items'          => __( 'Search Slider', 'slider-seo' ),
		'not_found'             => __( 'Not found', 'slider-seo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'slider-seo' ),
		'featured_image'        => __( 'Featured Image', 'slider-seo' ),
		'set_featured_image'    => __( 'Set featured image', 'slider-seo' ),
		'remove_featured_image' => __( 'Remove featured image', 'slider-seo' ),
		'use_featured_image'    => __( 'Use as featured image', 'slider-seo' ),
		'insert_into_item'      => __( 'Insert into item', 'slider-seo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'slider-seo' ),
		'items_list'            => __( 'Items list', 'slider-seo' ),
		'items_list_navigation' => __( 'Items list navigation', 'slider-seo' ),
		'filter_items_list'     => __( 'Filter items list', 'slider-seo' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'slider-seo' ),
		'description'           => __( 'Post Type Description', 'slider-seo' ),
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
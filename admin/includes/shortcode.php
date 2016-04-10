<?php 

function foobar_func( $atts ){

	// WP_Query arguments
	$args = array (
		'page_id'                => '10',
		'post_type'              => array( 'slider_seo' ),
		'post_status'            => array( 'publish' ),
	);

	// The Query
	$slider_seo_query = new WP_Query( $args );

	//meta
	$imgSrcs = get_post_meta( $post->ID, 'slider-img-src', true );
	// The Loop
	if ( $slider_seo_query->have_posts() ) {
		while ( $slider_seo_query->have_posts() ) {
			$slider_seo_query->the_post();
			// do something

			echo "foo and bars";
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();

}


add_shortcode( 'foobar', 'foobar_func' );

?>
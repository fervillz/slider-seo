<?php 

function slider_seo_func( $atts ){

	$a = shortcode_atts( array(
        'id' => '1',
    ), $atts );

	// WP_Query arguments
	$args = array (
		'page_id'                => $a['id'],
		'post_type'              => array( 'slider_seo' ),
		'post_status'            => array( 'publish' ),
	);

	// The Query
	$slider_seo_query = new WP_Query( $args );

	//meta
	$imgSrcs = get_post_meta( $a['id'], 'slider-img-src', true );
	// The Loop
	if ( $slider_seo_query->have_posts() ) {
		while ( $slider_seo_query->have_posts() ) {
			$slider_seo_query->the_post(); ?>

			<div class="owl-carousel owl-theme">
			
			<?php foreach ( $imgSrcs as $imgSrc ) { ?>
				
				<img src="<?php echo $imgSrc; ?>" alt="" title=""/>
				
			<?php } ?>

			</div>

			<?php 
		}
	} else {
		echo "You have entered an invalid Slider SEO Shortcode";
	}

	// Restore original Post Data
	wp_reset_postdata();

}


add_shortcode( 'slider-seo', 'slider_seo_func' );

?>
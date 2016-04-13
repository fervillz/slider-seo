<?php 

function slider_seo_func( $atts ){

	$post = shortcode_atts( array(
		'id' => '1',
	), $atts );

	// WP_Query arguments
	$args = array (
		'page_id'                => $post['id'],
		'post_type'              => array( 'slider_seo' ),
		'post_status'            => array( 'publish' ),
	);

	// The Query
	$slider_seo_query = new WP_Query( $args );

	//meta
	$imgSrcs = get_post_meta( $post['id'], 'slider-img-src', true );
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

	/*
	*  Get value animation
	*/
	$slider_type = get_post_meta( $post['id'], 'slider_type', true );
	$slider_seo_basic_speed = get_post_meta( $post['id'], 'slider_seo_basic_speed', true );
	$slider_seo_basic_navigation = get_post_meta( $post['id'], 'slider_seo_basic_navigation', true );
	$slider_seo_basic_dots = get_post_meta( $post['id'], 'slider_seo_basic_dots', true );
	

	$slider_seo_animateIn = get_post_meta( $post['id'], 'slider_seo_animateIn', true ); ?>
	

	<script type='text/javascript'>
		(function($) {
			'use strict';

			$('.owl-carousel').owlCarousel( {
				animateOut: 'rotateOut',
			    animateIn: 'rotateIn',
			    items: <?php echo $slider_type; ?>,
			    margin:30,
			    stagePadding:30,
			    smartSpeed:<?php echo $slider_seo_basic_speed; ?>,
			    nav: <?php echo ( $slider_seo_basic_navigation === 'true' ) ? 'true' : 'false'; ?>,
			 	dots: <?php echo ( $slider_seo_basic_dots === 'true' ) ? 'true' : 'false'; ?>,
			    loop: false,
			    autoplay: true,
			    autoplayTimeout:1500,
			});

		})(jQuery);
	</script>



<?php }


add_shortcode( 'slider-seo', 'slider_seo_func' );

?>
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

	$slider_layout = get_post_meta( $post['id'], 'slider_layout', true );
	$slider_layoutW = get_post_meta( $post['id'], 'slider_seo_basic_width', true );
	$slider_layoutH = get_post_meta( $post['id'], 'slider_seo_basic_height', true );

	// The Query
	$slider_seo_query = new WP_Query( $args );

	//counter
	$i = 0;

	//meta
	$imgSrcs = get_post_meta( $post['id'], 'slider-img-src', true );
	$imgSrcsT = get_post_meta( $post['id'], 'slider-img-srcT', true );
	$imgTitles = get_post_meta( $post['id'], 'slider-img-title', true );
	$imgAlts = get_post_meta( $post['id'], 'slider-img-alt', true );
	$imgCaption = get_post_meta( $post['id'], 'slider-img-caption', true );
	$imgUrls = get_post_meta( $post['id'], 'slider-img-url', true );
	$slider_seo_basic_lazyload = get_post_meta( $post['id'], 'slider_seo_basic_lazyload', true );
	$slider_seo_navPos = get_post_meta( $post['id'], 'slider_seo_navPos', true );
	$slider_seo_captionPos = get_post_meta( $post['id'], 'slider_seo_captionPos', true );
	$slider_seo_basic_caption = get_post_meta( $post['id'], 'slider_seo_basic_caption', true );
	
	if ($slider_seo_navPos) {
		$slider_seo_navPos = $slider_seo_navPos.' setNavPos';
	}
	else{
		$slider_seo_navPos = '';
	}
	
	// The Loop
	if ( $slider_seo_query->have_posts() ) {
		while ( $slider_seo_query->have_posts() ) {
			$slider_seo_query->the_post(); ?>

				<?php if ( $slider_layout == '1'): ?>
						<div class="sliderSeoFixedLayout" style="width: <?php echo $slider_layoutW.'px;'; ?> height:<?php echo $slider_layoutH.'px;'; ?>" >
				<?php endif; ?>
					<div class="slider-seo-owl-carousel-<?php echo $post['id']; ?> <?php echo $slider_seo_navPos; ?> slider-seo-owl-carousel owl-theme">
					
					<?php foreach ( $imgSrcs as $imgSrc ) { ?>
						<?php if ( $slider_seo_basic_lazyload == true ): ?>
							<a class="slider-seo-urls" href="<?php echo $imgUrls[$i] ?>">
								<img class="owl-lazy" data-src="<?php echo $imgSrc; ?>" alt="<?php echo $imgAlts[$i] ?>" title="<?php echo $imgTitles[$i] ?>"/>
								<span class="slider-seo-caption <?php echo $slider_seo_captionPos; ?> <?php if (!$slider_seo_basic_caption) { echo 'hidden'; } ?> topleft"><?php echo $imgCaption[$i] ?></span>
							</a>
						<?php else: ?>
							<a class="slider-seo-urls" href="<?php echo $imgUrls[$i] ?>">
								<img src="<?php echo $imgSrc; ?>" alt="<?php echo $imgAlts[$i] ?>" title="<?php echo $imgTitles[$i] ?>"/>

								<span class="slider-seo-caption <?php echo $slider_seo_captionPos; ?> <?php if (!$slider_seo_basic_caption) { echo 'hidden'; } ?>"><?php echo $imgCaption[$i] ?></span>
							</a>
						<?php endif;  $i++;?>
					<?php } ?>

					</div>
				<?php if (  $slider_layout == '1' ): ?>
					</div><!-- .sliderSeoFixedLayout -->
				<?php endif; ?>
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
	$anim = get_post_meta( $post['id'], 'slider_seo_basic_animation', true );
	$anim1 = splitBasicAnimShortcode( $anim )[0];
	$anim2 = splitBasicAnimShortcode( $anim )[1];

	$slider_seo_basic_navtext = get_post_meta( $post['id'], 'slider_seo_basic_navtext', true );
	$navText1 = '';
	$navText2 = '';
	if ($slider_seo_basic_navtext) {
		$navText1 = $slider_seo_basic_navtext[0];
		$navText2 = $slider_seo_basic_navtext[1];	
	}

	$slider_type = get_post_meta( $post['id'], 'slider_type', true );
	$slider_seo_basic_speed = get_post_meta( $post['id'], 'slider_seo_basic_speed', true );
	$slider_seo_basic_navigation = get_post_meta( $post['id'], 'slider_seo_basic_navigation', true );
	$slider_seo_basic_dots = get_post_meta( $post['id'], 'slider_seo_basic_dots', true );
	$slider_seo_basic_margin = get_post_meta( $post['id'], 'slider_seo_basic_margin', true );
	$slider_seo_basic_padding = get_post_meta( $post['id'], 'slider_seo_basic_padding', true );
	$slider_seo_basic_loop = get_post_meta( $post['id'], 'slider_seo_basic_loop', true );
	$slider_seo_basic_autoplayTimeout = get_post_meta( $post['id'], 'slider_seo_basic_autoplayTimeout', true );
	$slider_seo_basic_autoheight = get_post_meta( $post['id'], 'slider_seo_basic_autoheight', true );
	$slider_seo_basic_autoWidth = get_post_meta( $post['id'], 'slider_seo_basic_autoWidth', true );

	?>

	<script type='text/javascript'>
		(function($) {
			'use strict';

			$('.slider-seo-owl-carousel').owlCarousel( {
				animateOut: '<?php echo $anim2; ?>',
				animateIn: '<?php echo $anim1; ?>',
				items: <?php echo ( $slider_type === '' ) ? '1' : $slider_type; ?>,
				margin:<?php echo ( $slider_seo_basic_margin === '' ) ? '0' : $slider_seo_basic_margin; ?>,
				stagePadding:<?php echo ( $slider_seo_basic_padding === '' ) ? '0' : $slider_seo_basic_padding; ?>,
				smartSpeed:<?php echo $slider_seo_basic_speed; ?>,
				nav: <?php echo ( $slider_seo_basic_navigation === 'true' ) ? 'true' : 'false'; ?>,
				dots: <?php echo ( $slider_seo_basic_dots === 'true' ) ? 'true' : 'false'; ?>,
				loop: <?php echo ( ($slider_seo_basic_loop === 'true') || ($slider_seo_basic_loop === '') ) ? 'true' : 'false'; ?>,
				autoplay: true,
				autoplayTimeout:<?php echo ( $slider_seo_basic_autoplayTimeout === '' ) ? '1000' : $slider_seo_basic_autoplayTimeout; ?>,
				autoHeight: <?php echo ( ($slider_seo_basic_autoheight === 'true') || ($slider_seo_basic_autoheight === '') ) ? 'true' : 'false'; ?>,
				lazyLoad: <?php echo ( ($slider_seo_basic_lazyload === 'true') || ($slider_seo_basic_lazyload === '') ) ? 'true' : 'false'; ?>,
				autoWidth:<?php echo ( ($slider_seo_basic_autoWidth === 'true') || ($slider_seo_basic_autoWidth === '') ) ? 'true' : 'false'; ?>,
				navText: <?php echo ( $slider_seo_basic_navtext === "" ) ? "['next','prev']" : "['".$navText1."','".$navText2."']" ?>,
			});

		})(jQuery);
	</script>
<?php }

add_shortcode( 'slider-seo', 'slider_seo_func' );

?>

<?php function splitBasicAnimShortcode( $anim ) {

	//locate the position of white space
	$spacePos = (strrpos($anim, " "));

	//Get the first animation
	$anim1 = substr($anim,0,$spacePos);

	//Get the second animation
	$anim2 = substr($anim,$spacePos);

	return array($anim1, $anim2);

} ?>
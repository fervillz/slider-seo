<?php 

function slider_seo_func( $atts ){

	$sliderOutput = "";

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
	$imgIds = get_post_meta( $post['id'], 'slider-img-id', true );
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
	$slider_seo_imageSize = get_post_meta( $post['id'], 'slider_seo_imageSize', true );
	
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
			 		<?php
						$sliderOutput .= "<div class=\"sliderSeoFixedLayout\"";
						$sliderOutput .= "style=\"width:".$slider_layoutW."px;";
						$sliderOutput .= "height:".$slider_layoutH."px;\">";
						$sliderOutput .= "</div>"; 
					?>
				<?php endif; ?>

				<!-- start output if layout is not fixed -->
				<?php 
					$sliderOutput .= "<div class=\"slider-seo-owl-carousel-";
					$sliderOutput .= $post['id']." ".$slider_seo_navPos." slider-seo-owl-carousel owl-theme\">";
				?>
				
				<!-- start loop -->
				<?php foreach ( $imgSrcs as $imgSrc ) : ?>
					<?php if ( $slider_seo_basic_lazyload == true ): ?>

						<!-- lazy load -->
						<?php 

							$sliderOutput .= "<a ";
							$sliderOutput .="class=\"slider-seo-urls\" "; 
							$sliderOutput .="href=\"".$imgUrls[$i]."\">"; 
							//start content of a tag
							$sliderOutput .= "<img ";
							$sliderOutput .= "class=\"owl-lazy\"";
							$sliderOutput .= "data-src=\"".$imgSrc."\"";
							$sliderOutput .= "alt=\"".$imgAlts[$i]."\"";
							$sliderOutput .= "title=\"".$imgTitles[$i]."\"";
							$sliderOutput .= ">";
							//end content of a tag
							$sliderOutput .= "</a>";
						?>
						<!-- end lazy load -->

					<?php else: ?>

						<!-- not lazy load -->
						<?php 
							$sliderOutput .= "<a ";
							$sliderOutput .="class=\"slider-seo-urls\" "; 
							$sliderOutput .="href=\"".$imgUrls[$i]."\">"; 
						?>

						<?php
							if ( ($slider_seo_imageSize) || ($slider_seo_imageSize != 'largest') ) {
								$image_data = wp_get_attachment_image_src( $imgIds[$i], $size = $slider_seo_imageSize );
								
								$sliderOutput .= "<img ";
								$sliderOutput .= "src=\"".$image_data[0]."\"";
								$sliderOutput .= "alt=\"".$imgAlts[$i]."\"";
								$sliderOutput .= "title=\"".$imgTitles[$i]."\"";
								$sliderOutput .= ">";

							} else {
								$sliderOutput .= "<img ";
								$sliderOutput .= "src=\"".$imgSrc."\"";
								$sliderOutput .= "alt=\"".$imgAlts[$i]."\"";
								$sliderOutput .= "title=\"".$imgTitles[$i]."\"";
								$sliderOutput .= ">";
							}
						?>

						<?php 
							$sliderOutput .= "<span class=\"slider-seo-caption ".$slider_seo_captionPos; 
							if (!$slider_seo_basic_caption) { 
								$sliderOutput .= " hidden"; 
							}
							$sliderOutput .= "\">"; 
							$sliderOutput .= $imgCaption[$i]; 
							$sliderOutput .= "</span>"; 
						?>

						<?php $sliderOutput .= "</a>"; ?>
						

						<!-- end not lazy load -->
					<?php endif;  $i++;?>	
				<?php endforeach; ?>
				<!-- end loop -->

				<?php $sliderOutput .="</div>"; ?>
				<!-- end layout not fixed -->

				<?php if (  $slider_layout == '1' ): ?>
					</div><!-- .sliderSeoFixedLayout -->
				<?php endif; ?>
			<?php
		}
	} else {
		_e( 'You have entered an invalid Slider SEO Shortcode', 'slider-seo');
	}

	// Restore original Post Data
	wp_reset_postdata();

	/*
	*  Get value animation
	*/
	$anim = get_post_meta( $post['id'], 'slider_seo_basic_animation', true );
	$anim1 = splitBasicAnimShortcode1( $anim );
	$anim2 = splitBasicAnimShortcode2( $anim );

	$slider_seo_basic_navtext = get_post_meta( $post['id'], 'slider_seo_basic_navtext', true );
	$navText1 = '';
	$navText2 = '';
	if ($slider_seo_basic_navtext) {
		$navText1 = $slider_seo_basic_navtext[0];
		$navText2 = $slider_seo_basic_navtext[1];	
	}

	$slider_type = get_post_meta( $post['id'], 'slider_type_text', true );
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

			$('.slider-seo-owl-carousel-40').owlCarousel( {
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

	<?php 
		//Enqueue the shortcode js
		wp_enqueue_script('slider_seo_shortcodejs',slider_SEO_URL . 'js/shortcode.js',array( 'jquery' ), false,true); 
	?>

<?php return $sliderOutput; }

add_shortcode( 'slider-seo', 'slider_seo_func' );

?>

<?php function splitBasicAnimShortcode1( $anim ) {

	//locate the position of white space
	$spacePos = (strrpos($anim, " "));

	//Get the first animation
	$anim1 = substr($anim,0,$spacePos);

	//Get the second animation
	$anim2 = substr($anim,$spacePos);

	return $anim1;

} ?>

<?php function splitBasicAnimShortcode2( $anim ) {

	//locate the position of white space
	$spacePos = (strrpos($anim, " "));

	//Get the first animation
	$anim1 = substr($anim,0,$spacePos);

	//Get the second animation
	$anim2 = substr($anim,$spacePos);

	return $anim2;

} ?>
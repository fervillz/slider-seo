<?php 

add_filter( 'manage_edit-slider_seo_columns' , 'custom_columns', 10, 2 );

function custom_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Slider' ),
		'thumb' => __( 'Thumbnails' ),
		'shortcode' => __( 'Shortcode' ),
		'template' => __( 'Template Include' ),
		'animation' => __( 'Animation' ),
		'date' => __( 'Date' )
	);

	return $columns;
}

add_action( 'manage_slider_seo_posts_custom_column', 'slider_seo_columns', 10, 2 );

function slider_seo_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		case 'shortcode' :
			echo '<b>[slider-seo id="'.$post_id.'"]</b>';
			break;

		case 'animation' :
			$anim = get_post_meta( $post->ID, 'slider_seo_basic_animation', true );
			if ( $anim == null ) {
				$anim = 'default animation';
			}
			echo $anim;
			break;

		case 'slides' :
			$anim = get_post_meta( $post->ID, 'slider_seo_basic_animation', true );
			echo $anim;
			break;

		case 'template' :
			esc_html_e("<?php echo do_shortcode(\"[id='".$post->ID."']\"); ?>","slider-seo");
			break;

		case 'thumb' :
		$imgSrcsT = get_post_meta( $post->ID, 'slider-img-srcT', true );
		foreach ( $imgSrcsT as $imgSrc ) {
			echo "<img src='".$imgSrc."' style='width: 40px;'>";
			}
			break;

		default :
			break;
	}
}
?>


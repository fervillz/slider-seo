<!-- imageSize -->
<?php function imageSize($post, $tab = 'basic') { 
$imageSizeValue = get_post_meta( $post->ID, 'slider_seo_imageSize', true );
if ( $imageSizeValue == null ) {
	$imageSizeValue = 'large';
}

//Get thumbnail sizes
$thumbnailSizeW = get_option( 'thumbnail_size_w' );
$thumbnailSizeH = get_option( 'thumbnail_size_h' );

//Get medium sizes
$mediumSizeW = get_option( 'medium_size_w' );
$mediumSizeH = get_option( 'medium_size_h' );

//Get large sizes
$largeSizeW = get_option( 'large_size_w' );
$largeSizeH = get_option( 'large_size_h' );

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><?php _e( 'Image Size', 'slider-seo'); ?></td>
			<td>
				<select name="slider_seo_imageSize" class="slider_seo_imageSize">
					<<option value="thumbnail" <?php echo ( $imageSizeValue === 'thumbnail' ) ? 'selected' : '' ?>>
						<?php _e( 'Thumbnail', 'slider-seo'); ?> ( <?php echo $thumbnailSizeW."x".$thumbnailSizeH; ?> )
					</option>

					<option value="medium" <?php echo ( $imageSizeValue === 'medium' ) ? 'selected' : '' ?>>
						<?php _e( 'Medium', 'slider-seo'); ?> ( <?php echo $mediumSizeW."x".$mediumSizeH; ?> )
					</option>
					<option value="large" <?php echo ( $imageSizeValue === 'large' ) ? 'selected' : '' ?>>
						<?php _e( 'Large', 'slider-seo'); ?> ( <?php echo $largeSizeW."x".$largeSizeH; ?> )
					</option>

					<option value="largest" <?php echo ( $imageSizeValue === 'largest' ) ? 'selected' : '' ?>>
						<?php _e( 'Largest ( Original Image Size )', 'slider-seo'); ?>
					</option>
				</select>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>





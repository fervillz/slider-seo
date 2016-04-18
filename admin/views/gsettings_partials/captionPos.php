<!-- captionPos -->
<?php function captionPos($post, $tab = 'basic') { 
$captionPosValue = get_post_meta( $post->ID, 'slider_seo_captionPos', true );
if ( $captionPosValue == null ) {
	$captionPosValue = 'bottomleft';
}

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><?php _e( 'Caption Position', 'slider-seo'); ?></td>
			<td>
				<select name="slider_seo_captionPos" class="slider_seo_captionPos">
					<optgroup label="<?php _e( 'Top', 'slider-seo'); ?>">
						<option value="topleft" <?php echo ( $captionPosValue === 'topleft' ) ? 'selected' : '' ?>><?php _e( 'Left', 'slider-seo'); ?></option>
						<option value="topright" <?php echo ( $captionPosValue === 'topright' ) ? 'selected' : '' ?>><?php _e( 'Right', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Bottom', 'slider-seo'); ?>">
						<option value="bottomleft" <?php echo ( $captionPosValue === 'bottomleft' ) ? 'selected' : '' ?>><?php _e( 'Left', 'slider-seo'); ?></option>
						<option value="bottomright" <?php echo ( $captionPosValue === 'bottomright' ) ? 'selected' : '' ?>><?php _e( 'Right', 'slider-seo'); ?></option>
					</optgroup>

				</select>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>
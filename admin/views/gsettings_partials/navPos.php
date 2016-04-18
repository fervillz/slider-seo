<!-- navPos -->
<?php function navPos($post, $tab = 'basic') { 
$navPosValue = get_post_meta( $post->ID, 'slider_seo_navPos', true );
if ( $navPosValue == null ) {
	$navPosValue = 'outerBottom-Center';
}
//$slider_seo_basic_navPos = get_post_meta( $postopOnly->ID, 'slider_seo_basic_navPos', true )

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><?php _e( 'Nav Position', 'slider-seo'); ?></td>
			<td>
				<select name="slider_seo_navPos" class="slider_seo_navPos">
					<optgroup label="<?php _e( 'Top', 'slider-seo'); ?>">
						<option value="topOnly-Left" <?php echo ( $navPosValue === 'topOnly-Left' ) ? 'selected' : '' ?>><?php _e( 'Left', 'slider-seo'); ?></option>

						<option value="topOnly-Center" <?php echo ( $navPosValue === 'topOnly-Center' ) ? 'selected' : '' ?>><?php _e( 'Center', 'slider-seo'); ?></option>
						<option value="topOnly-Right" <?php echo ( $navPosValue === 'topOnly-Right' ) ? 'selected' : '' ?>><?php _e( 'Right', 'slider-seo'); ?></option>
						<option value="topOnly-Justify" <?php echo ( $navPosValue === 'topOnly-Justify' ) ? 'selected' : '' ?>><?php _e( 'Justify', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Outer Top', 'slider-seo'); ?>">
						<option value="outerTop-Left" <?php echo ( $navPosValue === 'outerTop-Left' ) ? 'selected' : '' ?>><?php _e( 'Left', 'slider-seo'); ?></option>
						<option value="outerTop-Center" <?php echo ( $navPosValue === 'outerTop-Center' ) ? 'selected' : '' ?>><?php _e( 'Center', 'slider-seo'); ?></option>
						<option value="outerTop-Right" <?php echo ( $navPosValue === 'outerTop-Right' ) ? 'selected' : '' ?>><?php _e( 'Right', 'slider-seo'); ?></option>
						<option value="outerTop-Justify" <?php echo ( $navPosValue === 'outerTop-Justify' ) ? 'selected' : '' ?>><?php _e( 'Justify', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Middle', 'slider-seo'); ?>">
						<option value="middleOnly-Left" <?php echo ( $navPosValue === 'middleOnly-Left' ) ? 'selected' : '' ?>><?php _e( 'Left', 'slider-seo'); ?></option>
						<option value="middleOnly-Center" <?php echo ( $navPosValue === 'middleOnly-Center' ) ? 'selected' : '' ?>><?php _e( 'Center', 'slider-seo'); ?></option>
						<option value="middleOnly-Right" <?php echo ( $navPosValue === 'middleOnly-Right' ) ? 'selected' : '' ?>><?php _e( 'Right', 'slider-seo'); ?></option>
						<option value="middleOnly-Justify" <?php echo ( $navPosValue === 'middleOnly-Justify' ) ? 'selected' : '' ?>><?php _e( 'Justify', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Outer Middle', 'slider-seo'); ?>">
						<option value="outerMiddle-Justify" <?php echo ( $navPosValue === 'outerMiddle-Justify' ) ? 'selected' : '' ?>><?php _e( 'Justify', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Bottom', 'slider-seo'); ?>">
						<option value="bottomOnly-Left" <?php echo ( $navPosValue === 'bottomOnly-Left' ) ? 'selected' : '' ?>><?php _e( 'Left', 'slider-seo'); ?></option>
						<option value="bottomOnly-Center" <?php echo ( $navPosValue === 'bottomOnly-Center' ) ? 'selected' : '' ?>><?php _e( 'Center', 'slider-seo'); ?></option>
						<option value="bottomOnly-Right" <?php echo ( $navPosValue === 'bottomOnly-Right' ) ? 'selected' : '' ?>><?php _e( 'Right', 'slider-seo'); ?></option>
						<option value="bottomOnly-Justify" <?php echo ( $navPosValue === 'bottomOnly-Justify' ) ? 'selected' : '' ?>><?php _e( 'Justify', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Outer Bottom', 'slider-seo'); ?>">
						<option value="outerBottom-Left" <?php echo ( $navPosValue === 'outerBottom-Left' ) ? 'selected' : '' ?>><?php _e( 'Left', 'slider-seo'); ?></option>
						<option value="outerBottom-Center" <?php echo ( $navPosValue === 'outerBottom-Center' ) ? 'selected' : '' ?>><?php _e( 'Center', 'slider-seo'); ?></option>
						<option value="outerBottom-Right" <?php echo ( $navPosValue === 'outerBottom-Right' ) ? 'selected' : '' ?>><?php _e( 'Right', 'slider-seo'); ?></option>
						<option value="outerBottom-Justify" <?php echo ( $navPosValue === 'outerBottom-Justify' ) ? 'selected' : '' ?>><?php _e( 'Justify', 'slider-seo'); ?></option>
					</optgroup>

				</select>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>
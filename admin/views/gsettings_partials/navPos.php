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
			<td class="">Nav Position</td>
			<td>
				<select name="slider_seo_navPos" class="slider_seo_navPos">
					<optgroup label="Top">
						<option value="topOnly-Left" <?php echo ( $navPosValue === 'topOnly-Left' ) ? 'selected' : '' ?>>Left</option>

						<option value="topOnly-Center" <?php echo ( $navPosValue === 'topOnly-Center' ) ? 'selected' : '' ?>>Center</option>
						<option value="topOnly-Right" <?php echo ( $navPosValue === 'topOnly-Right' ) ? 'selected' : '' ?>>Right</option>
						<option value="topOnly-Justify" <?php echo ( $navPosValue === 'topOnly-Justify' ) ? 'selected' : '' ?>>Justify</option>
					</optgroup>

					<optgroup label="Outer Top">
						<option value="outerTop-Left" <?php echo ( $navPosValue === 'outerTop-Left' ) ? 'selected' : '' ?>>Left</option>
						<option value="outerTop-Center" <?php echo ( $navPosValue === 'outerTop-Center' ) ? 'selected' : '' ?>>Center</option>
						<option value="outerTop-Right" <?php echo ( $navPosValue === 'outerTop-Right' ) ? 'selected' : '' ?>>Right</option>
						<option value="outerTop-Justify" <?php echo ( $navPosValue === 'outerTop-Justify' ) ? 'selected' : '' ?>>Justify</option>
					</optgroup>

					<optgroup label="Middle">
						<option value="middleOnly-Left" <?php echo ( $navPosValue === 'middleOnly-Left' ) ? 'selected' : '' ?>>Left</option>
						<option value="middleOnly-Center" <?php echo ( $navPosValue === 'middleOnly-Center' ) ? 'selected' : '' ?>>Center</option>
						<option value="middleOnly-Right" <?php echo ( $navPosValue === 'middleOnly-Right' ) ? 'selected' : '' ?>>Right</option>
						<option value="middleOnly-Justify" <?php echo ( $navPosValue === 'middleOnly-Justify' ) ? 'selected' : '' ?>>Justify</option>
					</optgroup>

					<optgroup label="Outer Middle">
						<option value="outerMiddle-Justify" <?php echo ( $navPosValue === 'outerMiddle-Justify' ) ? 'selected' : '' ?>>Justify</option>
					</optgroup>

					<optgroup label="Bottom">
						<option value="bottomOnly-Left" <?php echo ( $navPosValue === 'bottomOnly-Left' ) ? 'selected' : '' ?>>Left</option>
						<option value="bottomOnly-Center" <?php echo ( $navPosValue === 'bottomOnly-Center' ) ? 'selected' : '' ?>>Center</option>
						<option value="bottomOnly-Right" <?php echo ( $navPosValue === 'bottomOnly-Right' ) ? 'selected' : '' ?>>Right</option>
						<option value="bottomOnly-Justify" <?php echo ( $navPosValue === 'bottomOnly-Justify' ) ? 'selected' : '' ?>>Justify</option>
					</optgroup>

					<optgroup label="Outer Bottom">
						<option value="outerBottom-Left" <?php echo ( $navPosValue === 'outerBottom-Left' ) ? 'selected' : '' ?>>Left</option>
						<option value="outerBottom-Center" <?php echo ( $navPosValue === 'outerBottom-Center' ) ? 'selected' : '' ?>>Center</option>
						<option value="outerBottom-Right" <?php echo ( $navPosValue === 'outerBottom-Right' ) ? 'selected' : '' ?>>Right</option>
						<option value="outerBottom-Justify" <?php echo ( $navPosValue === 'outerBottom-Justify' ) ? 'selected' : '' ?>>Justify</option>
					</optgroup>

				</select>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>
<!-- navtext -->
<?php function navtext($post, $tab = 'basic') { ?>
<?php $slider_seo_basic_navtext_scr = get_post_meta( $post->ID, 'slider_seo_basic_navtext', true );
$navText1 = '';
$navText2 = '';
if ($slider_seo_basic_navtext_scr) {
	$navText1 = $slider_seo_basic_navtext_scr[0];
	$navText2 = $slider_seo_basic_navtext_scr[1];
}

?>

	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class="">Nav Text</td>
			<td>
				<input type="text" class="slider_seo_basic_navtext" name="slider_seo_basic_navtext[]" id="slider_seo_basic_navtext_prev" value="<?php echo ($navText1 == '') ? 'prev' : $navText1; ?>">
			</td>

		</tr>
		<tr>
			<td class=""></td>
			<td>
				<input type="text" class="slider_seo_basic_navtext" name="slider_seo_basic_navtext[]" id="slider_seo_basic_navtext_next" value="<?php echo ($navText2 == '') ? 'next' : $navText2; ?>">
				
			</td>
		</tr>
		
	<?php endif; ?>
<?php } ?>
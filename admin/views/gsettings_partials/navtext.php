<!-- navtext -->
<?php function navtext($post, $tab = 'basic') { ?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class="">Nav Text</td>
			<td>
				<input type="text" class="slider_seo_basic_navtext" name="slider_seo_basic_navtext" id="slider_seo_basic_navtext" value = "<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_navtext', true ) === '' ) ? '0' : get_post_meta( $post->ID, 'slider_seo_basic_navtext', true ); ?>"  onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
		<tr>
			<td class=""></td>
			<td>
				<input type="text" class="slider_seo_basic_navtext" name="slider_seo_basic_navtext" id="slider_seo_basic_navtext" value = "<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_navtext', true ) === '' ) ? '0' : get_post_meta( $post->ID, 'slider_seo_basic_navtext', true ); ?>"  onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>
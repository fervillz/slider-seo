<!-- Animation Speed -->
<?php function anim_speed($post, $tab = 'basic') { ?>
	
	<td class="">Animation Speed</td>
	<td>
		<input type="text" name="slider_seo_basic_speed" id="slider_seo_basic_speed" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_speed', true ) === '') ? '700' : get_post_meta( $post->ID, 'slider_seo_basic_speed', true ) ; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
	</td>

<?php } ?>
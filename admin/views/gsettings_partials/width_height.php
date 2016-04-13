<!-- Animation Function -->
<?php function width_height($post, $dimension = 'width', $tab = 'basic') { ?>
	
	<?php if ( $dimension == 'width' ): ?>
		<td class="">Width</td>
		<td>
			<input type="text" name="slider_seo_basic_width" id="slider_seo_basic_width" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_width', true ) === '') ? '800' : get_post_meta( $post->ID, 'slider_seo_basic_width', true ) ; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
		</td>
	<?php elseif ( $dimension == 'height' ): ?>
		<td class="">Height</td>
		<td>
			<input type="text" name="slider_seo_basic_height" id="slider_seo_basic_height" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_height', true ) === '') ? '300' : get_post_meta( $post->ID, 'slider_seo_basic_height', true ) ; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
		</td>
	<?php endif; ?>

<?php } ?>
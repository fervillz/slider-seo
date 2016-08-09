<!-- autoplay -->
<?php function autoplay($post, $tab = 'basic') { ?>
	<td class=""><?php _e( 'Autoplay', 'slider-seo'); ?></td>
	<td>
		<input type="checkbox" class="slider_seo_basic_autoplay" name="slider_seo_basic_autoplay" id="slider_seo_basic_autoplay" value = "true" <?php echo (get_post_meta( $post->ID, 'slider_seo_basic_autoplay', true ) === 'true' ) ? 'checked' : ''; ?>>
	</td>
<?php } ?>
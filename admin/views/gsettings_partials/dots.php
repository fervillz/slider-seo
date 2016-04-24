<!-- Dots Speed -->
<?php function dots($post, $tab = 'basic') { ?>
	
	<td class=""><label for="slider_seo_basic_dots"><?php _e( 'Dots', 'slider-seo'); ?></label></td>
	<td>
		<input type="checkbox" class="slider_seo_basic_dots" name="slider_seo_basic_dots" id="slider_seo_basic_dots" value = "true" <?php echo (get_post_meta( $post->ID, 'slider_seo_basic_dots', true ) === 'true' ) ? 'checked' : ''; ?>>
	</td>

<?php } ?>
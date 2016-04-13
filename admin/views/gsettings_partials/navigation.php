<!-- Navigation -->
<?php function navigation($post, $tab = 'basic') { ?>
	
	<td class="">Navigation</td>
	<td>
		<input type="checkbox" class="slider_seo_basic_navigation" name="slider_seo_basic_navigation" id="slider_seo_basic_navigation" value = "true" <?php echo (get_post_meta( $post->ID, 'slider_seo_basic_navigation', true ) === 'true' ) ? 'checked' : ''; ?>>
	</td>

<?php } ?>
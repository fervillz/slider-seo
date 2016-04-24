<!-- caption -->
<?php function caption($post, $tab = 'basic') { 

$slider_seo_basic_caption = get_post_meta( $post->ID, 'slider_seo_basic_caption', true )

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><label for="slider_seo_basic_caption"><?php _e( 'Show Caption', 'slider-seo'); ?></label></td>
			<td>
				<?php metacaption($slider_seo_basic_caption); ?>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function metacaption($slider_seo_basic_caption, $checked = '') { ?>
	<input type="checkbox" class="slider_seo_basic_caption" name="slider_seo_basic_caption" id="slider_seo_basic_caption" value = "true" <?php echo ( $slider_seo_basic_caption === 'true' ) ? 'checked' : $checked; ?>>
<?php } ?>
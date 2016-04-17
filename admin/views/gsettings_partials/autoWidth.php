<!-- autoWidth -->
<?php function autoWidth($post, $tab = 'basic') { 

$slider_seo_basic_autoWidth = get_post_meta( $post->ID, 'slider_seo_basic_autoWidth', true )

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class="">Auto Width</td>
			<td>
				<?php metaautoWidth($slider_seo_basic_autoWidth); ?>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function metaautoWidth($slider_seo_basic_autoWidth, $checked = '') { ?>
	<input type="checkbox" class="slider_seo_basic_autoWidth" name="slider_seo_basic_autoWidth" id="slider_seo_basic_autoWidth" value = "true" <?php echo ( $slider_seo_basic_autoWidth === 'true' ) ? 'checked' : $checked; ?>>
<?php } ?>
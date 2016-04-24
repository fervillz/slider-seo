<!-- autoheight -->
<?php function autoheight($post, $tab = 'basic') { 

$slider_seo_basic_autoheight = get_post_meta( $post->ID, 'slider_seo_basic_autoheight', true )

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><label for="slider_seo_basic_autoheight"><?php _e( 'Auto Height', 'slider-seo'); ?></label></td>
			<td>
				<?php metaautoheight($slider_seo_basic_autoheight); ?>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function metaautoheight($slider_seo_basic_autoheight, $checked = '') { ?>
	<input type="checkbox" class="slider_seo_basic_autoheight" name="slider_seo_basic_autoheight" id="slider_seo_basic_autoheight" value = "true" <?php echo ( $slider_seo_basic_autoheight === 'true' ) ? 'checked' : $checked; ?>>
<?php } ?>
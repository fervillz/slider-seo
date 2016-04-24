<!-- lazyload -->
<?php function lazyload($post, $tab = 'basic') { 

$slider_seo_basic_lazyload = get_post_meta( $post->ID, 'slider_seo_basic_lazyload', true )

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><label for="slider_seo_basic_lazyload"><?php _e( 'Lazyload', 'slider-seo'); ?></label></td>
			<td>
				<?php metalazyload($slider_seo_basic_lazyload); ?>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function metalazyload($slider_seo_basic_lazyload, $checked = '') { ?>
	<input type="checkbox" class="slider_seo_basic_lazyload" name="slider_seo_basic_lazyload" id="slider_seo_basic_lazyload" value = "true" <?php echo ( $slider_seo_basic_lazyload === 'true' ) ? 'checked' : $checked; ?>>
<?php } ?>
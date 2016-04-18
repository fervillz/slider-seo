<!-- loop -->
<?php function loop($post, $tab = 'basic') { 

$slider_seo_basic_loop = get_post_meta( $post->ID, 'slider_seo_basic_loop', true )

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><?php _e( 'Loop', 'slider-seo'); ?></td>
			<td>
				<?php metaloop($slider_seo_basic_loop); ?>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function metaloop($slider_seo_basic_loop, $checked = '') { ?>
	<input type="checkbox" class="slider_seo_basic_loop" name="slider_seo_basic_loop" id="slider_seo_basic_loop" value = "true" <?php echo ( $slider_seo_basic_loop === 'true' ) ? 'checked' : $checked; ?>>
<?php } ?>
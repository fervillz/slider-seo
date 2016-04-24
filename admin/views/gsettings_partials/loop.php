<!-- loop -->
<?php function loop($post, $tab = 'basic') { 

$slider_seo_basic_loop = get_post_meta( $post->ID, 'slider_seo_basic_loop', true );

$checked = '';
if ( $slider_seo_basic_loop == null ) {
	$checked = 'checked';
}

?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><label for="slider_seo_basic_loop"><?php _e( 'Loop', 'slider-seo'); ?></label></td>
			<td>
				<?php metaloop( $slider_seo_basic_loop , $checked ); ?>
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function metaloop( $slider_seo_basic_loop, $checked = '' ) { ?>
	<input type="checkbox" class="slider_seo_basic_loop" name="slider_seo_basic_loop" id="slider_seo_basic_loop" value="true" <?php echo ( $slider_seo_basic_loop === 'true' ) ? 'checked' : $checked; ?>>
<?php } ?>
<!-- margin -->
<?php function margin($post, $tab = 'basic') { ?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class=""><?php _e( 'Margin', 'slider-seo'); ?></td>
			<td>
				<input type="text" class="slider_seo_basic_margin" name="slider_seo_basic_margin" id="slider_seo_basic_margin" value = "<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_margin', true ) === '' ) ? '0' : get_post_meta( $post->ID, 'slider_seo_basic_margin', true ); ?>"  onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>
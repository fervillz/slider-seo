<!-- padding -->
<?php function padding($post, $tab = 'basic') { ?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class="">Padding</td>
			<td>
				<input type="text" class="slider_seo_basic_padding" name="slider_seo_basic_padding" id="slider_seo_basic_padding" value = "<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_padding', true ) === '' ) ? '0' : get_post_meta( $post->ID, 'slider_seo_basic_padding', true ); ?>"  onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>
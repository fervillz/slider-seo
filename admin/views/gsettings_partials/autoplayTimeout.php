<!-- autoplayTimeout -->
<?php function autoplayTimeout($post, $tab = 'basic') { ?>
	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td class="">Timeout</td>
			<td>
				<input type="text" class="slider_seo_basic_autoplayTimeout" name="slider_seo_basic_autoplayTimeout" id="slider_seo_basic_autoplayTimeout" value = "<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_autoplayTimeout', true ) === '' ) ? '1500' : get_post_meta( $post->ID, 'slider_seo_basic_autoplayTimeout', true ); ?>"  onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>
<!-- Animation Function -->
<?php function width_height($post, $tab = 'basic') { ?>

	<?php 
		$default = get_post_meta( $post->ID, 'slider_layout', true );
		$layoutStyle = ''; 
	?>

	<?php if ( $tab == 'advanced'): ?>
		<tr>
			<td>Slider Layout</td>
			<td class="slider-type-radio">
				<?php if ( $default ) {
						slider_layout( '2', $post );
						slider_layout( '1', $post );
					} else {
						slider_layout( '2', $post, 'checked'  );
						slider_layout( '1', $post);
					} ?>
			</td>
		</tr>
		<?php if ( ($default == '2') || $default == '') { 
				$layoutStyle ='style="display: none;"';
			}
			else {
				$layoutStyle = '';
			} 
		?>
		<tr class="fixedLayout" <?php echo $layoutStyle; ?> >
			<td class="">Width</td>
			<td>
				<input type="text" name="slider_seo_basic_width" id="slider_seo_basic_width" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_width', true ) === '') ? '800' : get_post_meta( $post->ID, 'slider_seo_basic_width', true ) ; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
		<tr class="fixedLayout" <?php echo $layoutStyle; ?> >
			<td class="">Height</td>
			<td>
				<input type="text" name="slider_seo_basic_height" id="slider_seo_basic_height" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_height', true ) === '') ? '300' : get_post_meta( $post->ID, 'slider_seo_basic_height', true ) ; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr> 
		
	<?php endif; ?>

<?php } ?>

<?php function slider_layout( $slider_layout_id, $post, $default = '') { ?>

	<input type="radio" class="radio_slider_layout" name="slider_layout" id="slider_layout<?php echo $slider_layout_id; ?>" value = "<?php echo $slider_layout_id; ?>" <?php echo (get_post_meta( $post->ID, 'slider_layout', true ) === $slider_layout_id ) ? 'checked' :  $default ; ?>>
	<label class="label_slider_layout label_slider_layout<?php echo $slider_layout_id; ?>" for="slider_layout<?php echo $slider_layout_id; ?>"></label>
<?php } ?>
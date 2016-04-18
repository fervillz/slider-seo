<!-- Slider type function -->
<?php function tr_slider_type($post, $tab = 'basic') { ?>

	<?php if ( $tab == 'basic' ): ?>
		<td class="">Slider Type</td>
		<td class="slider-type-radio">
			<?php if ( get_post_meta( $post->ID, 'slider_type', true ) !== '' ):  ?>
				<?php slider_type( '1', $post ) ?>
				<?php slider_type( '2', $post ) ?>
				<?php slider_type( '3', $post ) ?>
			<?php else: ?>
				<?php slider_type( '1', $post, 'checked' ) ?>
				<?php slider_type( '2', $post ) ?>
				<?php slider_type( '3', $post ) ?>
			<?php endif; ?>
		</td>
	<?php elseif ( $tab == 'advanced' ): ?>
		<tr>
			<td class=""><?php _e( 'Slider Type', 'slider-seo'); ?></td>
			
			<td class="slider-type-radio">
				<input type="text" name="slider_type" class="widefat" id="slider_type_custom" value="<?php echo (get_post_meta( $post->ID, 'slider_type_custom', true ) === '') ? '1' : get_post_meta( $post->ID, 'slider_type_custom', true ) ; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function slider_type( $slider_type_id, $post, $checked = '') { ?>
	<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type<?php echo $slider_type_id; ?>" value = "<?php echo $slider_type_id; ?>" <?php echo (get_post_meta( $post->ID, 'slider_type', true ) === $slider_type_id ) ? 'checked' :  $checked ; ?>>
	<label class="label_slider_type label_slider_type<?php echo $slider_type_id; ?>" for="slider_type<?php echo $slider_type_id; ?>"></label>
<?php } ?>
<!-- Slider type function -->
<?php function tr_slider_type($post, $tab = 'basic') { ?>

	<td class="">Slider Type</td>

	<?php if ( $tab == 'basic' ): ?>
		<td class="slider-type-radio">
			<?php if ( get_post_meta( $post->ID, 'slider_type', true ) !== '' ):  ?>
				<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type1" value = "1" <?php echo (get_post_meta( $post->ID, 'slider_type', true ) === '1') ? 'checked' :  '' ; ?>>
				<label class="label_slider_type label_slider_type1" for="slider_type1"></label>

				<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type2" value = "2" <?php echo (get_post_meta( $post->ID, 'slider_type', true ) === '2') ? 'checked' :  '' ; ?>>
				<label class="label_slider_type label_slider_type2" for="slider_type2"></label>
				<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type3" value = "3" <?php echo (get_post_meta( $post->ID, 'slider_type', true ) === '3') ? 'checked' :  '' ; ?>>
				<label class="label_slider_type label_slider_type3" for="slider_type3"></label>

				<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type4" value = "4" <?php echo (get_post_meta( $post->ID, 'slider_type', true ) === '4') ? 'checked' :  '' ; ?>>
				<label class="label_slider_type label_slider_type4" for="slider_type4"></label>

				<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type5" value = "5" <?php echo (get_post_meta( $post->ID, 'slider_type', true ) === '5') ? 'checked' :  '' ; ?>>
				<label class="label_slider_type label_slider_type5" for="slider_type5"></label>

				<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type6" value = "6" <?php echo (get_post_meta( $post->ID, 'slider_type', true ) === '6') ? 'checked' :  '' ; ?>>
				<label class="label_slider_type label_slider_type6" for="slider_type6"></label>
			
			<?php else: ?>
				<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type1" value ="1" checked>
			<?php endif; ?>
		</td>
	<?php elseif ( $tab == 'advanced' ): ?>
		<td class="slider-type-radio">
			

		</td>
	<?php endif; ?>
<?php } ?>

<!-- Slider type function -->
<?php function tr_slider_type($post, $tab = 'basic') { ?>
<?php $slider_type = get_post_meta( $post->ID, 'slider_type_text', true ); ?>

	<?php if ( $tab == 'basic' ): ?>
		<td class="">Slider Type</td>
		<td class="slider-type-radio">
			<?php if ( $slider_type !== '' ):  ?>
				<?php slider_type( '1', $slider_type) ?>
				<?php slider_type( '2', $slider_type) ?>
				<?php slider_type( '3', $slider_type) ?>
			<?php else: ?>
				<?php slider_type( '1', $slider_type, 'checked' ) ?>
				<?php slider_type( '2', $slider_type) ?>
				<?php slider_type( '3', $slider_type) ?>
			<?php endif; ?>
		</td>
	<?php elseif ( $tab == 'advanced' ): ?>
		<tr>
			<td class=""><?php _e( 'Slider Type', 'slider-seo'); ?></td>
			
			<td class="slider-type-radio">
				<input type="text" name="slider_type_text" class="widefat" id="slider_type_custom" value="<?php echo $slider_type === '' ? '1' : $slider_type; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</td>
		</tr>
	<?php endif; ?>
<?php } ?>

<?php function slider_type( $slider_type_id, $slider_type, $checked = '') { ?>
	<input type="radio" class="radio_slider_type" name="slider_type" id="slider_type<?php echo $slider_type_id; ?>" value = "<?php echo $slider_type_id; ?>" <?php echo $slider_type === $slider_type_id  ? 'checked' :  $checked ; ?>>
	<label class="label_slider_type label_slider_type<?php echo $slider_type_id; ?>" for="slider_type<?php echo $slider_type_id; ?>"></label>
<?php } ?>
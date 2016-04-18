<!-- Animation Function -->
<?php function animation($post, $tab = 'basic') {
$anim = get_post_meta( $post->ID, 'slider_seo_basic_animation', true );
$anim1 = preg_replace('/\s+/','',(splitBasicAnim( $anim )[0])); //remove all spaces
$anim2 = preg_replace('/\s+/','',(splitBasicAnim( $anim )[1])); //remove all spaces
?>

	<?php if ( $tab == 'basic' ): ?>
		<td class=""><?php _e( 'Animation', 'slider-seo'); ?></td>
		<td>
			<select name="slider_seo_basic_animation_both" class="slider_seo_basic_animation slider_seo_basic_animation1">
				<option <?php echo ( $anim !== '' ) ? 'selected' : 'selected' ?>><?php echo $anim ?></option>
				<option <?php echo ( $anim === 'bounceIn bounceOut' ) ? 'selected' : '' ?>><?php _e( 'bounceIn bounceOut', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'bounceInDown bounceOutDown' ) ? 'selected' : '' ?>><?php _e( 'bounceInDown bounceOutDown', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'fadeIn fadeOut' ) ? 'selected' : '' ?>><?php _e( 'fadeIn fadeOut', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'fadeInDownBig fadeOutDownBig' ) ? 'selected' : '' ?>><?php _e( 'fadeInDownBig fadeOutDownBig', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'rotateIn rotateOut' ) ? 'selected' : '' ?>><?php _e( 'rotateIn rotateOut', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'rotateInUpRight rotateOutUpRight' ) ? 'selected' : '' ?>><?php _e( 'rotateInUpRight rotateOutUpRight', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'slideInUp slideOutUp' ) ? 'selected' : '' ?>><?php _e( 'slideInUp slideOutUp', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'slideInDown slideOutDown' ) ? 'selected' : '' ?>><?php _e( 'slideInDown slideOutDown', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'zoomIn zoomOut' ) ? 'selected' : '' ?>><?php _e( 'zoomIn zoomOut', 'slider-seo'); ?></option>
				<option <?php echo ( $anim === 'zoomInUp zoomOutUp' ) ? 'selected' : '' ?>><?php _e( 'zoomInUp zoomOutUp', 'slider-seo'); ?></option>
		</select>
		</td>
	<?php elseif ( $tab == 'advanced' ): ?>
		<tr>
			<td class="">Animation</td>
			<td class="">
				<select name="slider_seo_basic_animationIn" class="slider_seo_basic_animation slider_seo_basic_animation2">
					<optgroup label="<?php _e( 'Attention Seekers', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>><?php _e( 'bounce', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>><?php _e( 'flash', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>><?php _e( 'pulse', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>><?php _e( 'rubberBand', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>><?php _e( 'shake', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>><?php _e( 'swing', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'tada' ) ? 'selected' : '' ?>><?php _e( 'tada', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'wobble' ) ? 'selected' : '' ?>><?php _e( 'wobble', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'jello' ) ? 'selected' : '' ?>><?php _e( 'jello', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Bouncing Entrances', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'bounceIn' ) ? 'selected' : '' ?>><?php _e( 'bounceIn', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounceInDown' ) ? 'selected' : '' ?>><?php _e( 'bounceInDown', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounceInLeft' ) ? 'selected' : '' ?>><?php _e( 'bounceInLeft', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounceInRight' ) ? 'selected' : '' ?>><?php _e( 'bounceInRight', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'bounceInUp' ) ? 'selected' : '' ?>><?php _e( 'bounceInUp', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Fading Entrances', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'fadeIn' ) ? 'selected' : '' ?>><?php _e( 'fadeIn', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInDown' ) ? 'selected' : '' ?>><?php _e( 'fadeInDown', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInDownBig' ) ? 'selected' : '' ?>><?php _e( 'fadeInDownBig', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInLeft' ) ? 'selected' : '' ?>><?php _e( 'fadeInLeft', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInLeftBig' ) ? 'selected' : '' ?>><?php _e( 'fadeInLeftBig', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInRight' ) ? 'selected' : '' ?>><?php _e( 'fadeInRight', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInRightBig' ) ? 'selected' : '' ?>><?php _e( 'fadeInRightBig', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInUp' ) ? 'selected' : '' ?>><?php _e( 'fadeInUp', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'fadeInUpBig' ) ? 'selected' : '' ?>><?php _e( 'fadeInUpBig', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Flippers', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'flip' ) ? 'selected' : '' ?>><?php _e( 'flip', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'flipInX' ) ? 'selected' : '' ?>><?php _e( 'flipInX', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'flipInY' ) ? 'selected' : '' ?>><?php _e( 'flipInY', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'flipOutX' ) ? 'selected' : '' ?>><?php _e( 'flipOutX', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'flipOutY' ) ? 'selected' : '' ?>><?php _e( 'flipOutY', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Lightspeed', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'lightSpeedIn' ) ? 'selected' : '' ?>><?php _e( 'lightSpeedIn', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'lightSpeedOut' ) ? 'selected' : '' ?>><?php _e( 'lightSpeedOut', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Rotating Entrances', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'rotateIn' ) ? 'selected' : '' ?>><?php _e( 'rotateIn', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'rotateInDownLeft' ) ? 'selected' : '' ?>><?php _e( 'rotateInDownLeft', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'rotateInDownRight' ) ? 'selected' : '' ?>><?php _e( 'rotateInDownRight', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'rotateInUpLeft' ) ? 'selected' : '' ?>><?php _e( 'rotateInUpLeft', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'rotateInUpRight' ) ? 'selected' : '' ?>><?php _e( 'rotateInUpRight', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Sliding Entrances', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'slideInUp' ) ? 'selected' : '' ?>><?php _e( 'slideInUp', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'slideInDown' ) ? 'selected' : '' ?>><?php _e( 'slideInDown', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'slideInLeft' ) ? 'selected' : '' ?>><?php _e( 'slideInLeft', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'slideInRight' ) ? 'selected' : '' ?>><?php _e( 'slideInRight', 'slider-seo'); ?></option>

					</optgroup>     
					
					<optgroup label="<?php _e( 'Zoom Entrances', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'zoomIn' ) ? 'selected' : '' ?>><?php _e( 'zoomIn', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'zoomInDown' ) ? 'selected' : '' ?>><?php _e( 'zoomInDown', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'zoomInLeft' ) ? 'selected' : '' ?>><?php _e( 'zoomInLeft', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'zoomInRight' ) ? 'selected' : '' ?>><?php _e( 'zoomInRight', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'zoomInUp' ) ? 'selected' : '' ?>><?php _e( 'zoomInUp', 'slider-seo'); ?></option>
					</optgroup>

					<optgroup label="<?php _e( 'Specials', 'slider-seo'); ?>">
					  <option <?php echo ( $anim1 === 'hinge' ) ? 'selected' : '' ?>><?php _e( 'hinge', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'rollIn' ) ? 'selected' : '' ?>><?php _e( 'rollIn', 'slider-seo'); ?></option>
					  <option <?php echo ( $anim1 === 'rollOut' ) ? 'selected' : '' ?>><?php _e( 'rollOut', 'slider-seo'); ?></option>
					</optgroup>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<select name="slider_seo_basic_animationOut" class="slider_seo_basic_animation slider_seo_basic_animation3">
					<optgroup label="<?php _e( 'Attention Seekers', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'bounce' ) ? 'selected' : '' ?>><?php _e( 'bounce', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'flash' ) ? 'selected' : '' ?>><?php _e( 'flash', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'pulse' ) ? 'selected' : '' ?>><?php _e( 'pulse', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'rubberBand' ) ? 'selected' : '' ?>><?php _e( 'rubberBand', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'shake' ) ? 'selected' : '' ?>><?php _e( 'shake', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'swing' ) ? 'selected' : '' ?>><?php _e( 'swing', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'tada' ) ? 'selected' : '' ?>><?php _e( 'tada', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'wobble' ) ? 'selected' : '' ?>><?php _e( 'wobble', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'jello' ) ? 'selected' : '' ?>><?php _e( 'jello', 'slider-seo'); ?></option>
						</optgroup>

						<optgroup label="<?php _e( 'Bouncing Exits', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'bounceOut' ) ? 'selected' : '' ?>><?php _e( 'bounceOut', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'bounceOutDown' ) ? 'selected' : '' ?>><?php _e( 'bounceOutDown', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'bounceOutLeft' ) ? 'selected' : '' ?>><?php _e( 'bounceOutLeft', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'bounceOutRight' ) ? 'selected' : '' ?>><?php _e( 'bounceOutRight', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'bounceOutUp' ) ? 'selected' : '' ?>><?php _e( 'bounceOutUp', 'slider-seo'); ?></option>
						</optgroup>

						<optgroup label="<?php _e( 'Fading Exits', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'fadeOut' ) ? 'selected' : '' ?>><?php _e( 'fadeOut', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutDown' ) ? 'selected' : '' ?>><?php _e( 'fadeOutDown', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutDownBig' ) ? 'selected' : '' ?>><?php _e( 'fadeOutDownBig', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutLeft' ) ? 'selected' : '' ?>><?php _e( 'fadeOutLeft', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutLeftBig' ) ? 'selected' : '' ?>><?php _e( 'fadeOutLeftBig', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutRight' ) ? 'selected' : '' ?>><?php _e( 'fadeOutRight', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutRightBig' ) ? 'selected' : '' ?>><?php _e( 'fadeOutRightBig', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutUp' ) ? 'selected' : '' ?>><?php _e( 'fadeOutUp', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'fadeOutUpBig' ) ? 'selected' : '' ?>><?php _e( 'fadeOutUpBig', 'slider-seo'); ?></option>
						</optgroup>

						<optgroup label="<?php _e( 'Flippers', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'flip' ) ? 'selected' : '' ?>><?php _e( 'flip', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'flipInX' ) ? 'selected' : '' ?>><?php _e( 'flipInX', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'flipInY' ) ? 'selected' : '' ?>><?php _e( 'flipInY', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'flipOutX' ) ? 'selected' : '' ?>><?php _e( 'flipOutX', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'flipOutY' ) ? 'selected' : '' ?>><?php _e( 'flipOutY', 'slider-seo'); ?></option>
						</optgroup>

						<optgroup label="<?php _e( 'Lightspeed', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'lightSpeedIn' ) ? 'selected' : '' ?>><?php _e( 'lightSpeedIn', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'lightSpeedOut' ) ? 'selected' : '' ?>><?php _e( 'lightSpeedOut', 'slider-seo'); ?></option>
						</optgroup>

						<optgroup label="<?php _e( 'Rotating Exits', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'rotateOut' ) ? 'selected' : '' ?>><?php _e( 'rotateOut', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'rotateOutDownLeft' ) ? 'selected' : '' ?>><?php _e( 'rotateOutDownLeft', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'rotateOutDownRight' ) ? 'selected' : '' ?>><?php _e( 'rotateOutDownRight', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'rotateOutUpLeft' ) ? 'selected' : '' ?>><?php _e( 'rotateOutUpLeft', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'rotateOutUpRight' ) ? 'selected' : '' ?>><?php _e( 'rotateOutUpRight', 'slider-seo'); ?></option>
						</optgroup>

						<optgroup label="<?php _e( 'Sliding Exits', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'slideOutUp' ) ? 'selected' : '' ?>><?php _e( 'slideOutUp', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'slideOutDown' ) ? 'selected' : '' ?>><?php _e( 'slideOutDown', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'slideOutLeft' ) ? 'selected' : '' ?>><?php _e( 'slideOutLeft', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'slideOutRight' ) ? 'selected' : '' ?>><?php _e( 'slideOutRight', 'slider-seo'); ?></option>
						  
						</optgroup>
						
						<optgroup label="<?php _e( 'Zoom Exits', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'zoomOut' ) ? 'selected' : '' ?>><?php _e( 'zoomOut', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'zoomOutDown' ) ? 'selected' : '' ?>><?php _e( 'zoomOutDown', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'zoomOutLeft' ) ? 'selected' : '' ?>><?php _e( 'zoomOutLeft', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'zoomOutRight' ) ? 'selected' : '' ?>><?php _e( 'zoomOutRight', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'zoomOutUp' ) ? 'selected' : '' ?>><?php _e( 'zoomOutUp', 'slider-seo'); ?></option>
						</optgroup>

						<optgroup label="<?php _e( 'Specials', 'slider-seo'); ?>">
						  <option <?php echo ( $anim2 === 'hinge' ) ? 'selected' : '' ?>><?php _e( 'hinge', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'rollIn' ) ? 'selected' : '' ?>><?php _e( 'rollIn', 'slider-seo'); ?></option>
						  <option <?php echo ( $anim2 === 'rollOut' ) ? 'selected' : '' ?>><?php _e( 'rollOut', 'slider-seo'); ?></option>
						</optgroup>
				</select>	
			</td>
		</tr>
	<?php endif;  ?>

	<input type="hidden" name="slider_seo_basic_animation" class="slider_seo_basic_animation_input" value="<?php echo $anim ?>" />

<?php } ?>

<?php function splitBasicAnim( $anim ) {

	//locate the position of white space
	$spacePos = (strrpos($anim, " "));

	//Get the first animation
	$anim1 = substr($anim,0,$spacePos);

	//Get the second animation
	$anim2 = substr($anim,$spacePos);

	return array($anim1, $anim2);

} ?>
<!-- Animation Function -->
<?php function animation($post, $tab = 'basic') {
$anim = get_post_meta( $post->ID, 'slider_seo_basic_animation', true );
$anim1 = preg_replace('/\s+/','',(splitBasicAnim( $anim )[0])); //remove all spaces
$anim2 = preg_replace('/\s+/','',(splitBasicAnim( $anim )[1])); //remove all spaces
?>

	<?php if ( $tab == 'basic' ): ?>
		<td class="">Animation</td>
		<td>
			<select name="slider_seo_basic_animation_both" class="slider_seo_basic_animation slider_seo_basic_animation1">
				<option <?php echo ( $anim !== '' ) ? 'selected' : 'selected' ?>><?php echo $anim ?></option>
				<option <?php echo ( $anim === 'bounceIn bounceOut' ) ? 'selected' : '' ?>>bounceIn bounceOut</option>
				<option <?php echo ( $anim === 'bounceInDown bounceOutDown' ) ? 'selected' : '' ?>>bounceInDown bounceOutDown</option>
				<option <?php echo ( $anim === 'fadeIn fadeOut' ) ? 'selected' : '' ?>>fadeIn fadeOut</option>
				<option <?php echo ( $anim === 'fadeInDownBig fadeOutDownBig' ) ? 'selected' : '' ?>>fadeInDownBig fadeOutDownBig</option>
				<option <?php echo ( $anim === 'rotateIn rotateOut' ) ? 'selected' : '' ?>>rotateIn rotateOut</option>
				<option <?php echo ( $anim === 'rotateInUpRight rotateOutUpRight' ) ? 'selected' : '' ?>>rotateInUpRight rotateOutUpRight</option>
				<option <?php echo ( $anim === 'slideInUp slideOutUp' ) ? 'selected' : '' ?>>slideInUp slideOutUp</option>
				<option <?php echo ( $anim === 'slideInDown slideOutDown' ) ? 'selected' : '' ?>>slideInDown slideOutDown</option>
				<option <?php echo ( $anim === 'zoomIn zoomOut' ) ? 'selected' : '' ?>>zoomIn zoomOut</option>
				<option <?php echo ( $anim === 'zoomInUp zoomOutUp' ) ? 'selected' : '' ?>>zoomInUp zoomOutUp</option>
		</select>
		</td>
	<?php elseif ( $tab == 'advanced' ): ?>
		<tr>
			<td class="">Animation</td>
			<td class="">
				<select name="slider_seo_basic_animationIn" class="slider_seo_basic_animation slider_seo_basic_animation2">
					<optgroup label="Attention Seekers">
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>>bounce</option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>>flash</option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>>pulse</option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>>rubberBand</option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>>shake</option>
					  <option <?php echo ( $anim1 === 'bounce' ) ? 'selected' : '' ?>>swing</option>
					  <option <?php echo ( $anim1 === 'tada' ) ? 'selected' : '' ?>>tada</option>
					  <option <?php echo ( $anim1 === 'wobble' ) ? 'selected' : '' ?>>wobble</option>
					  <option <?php echo ( $anim1 === 'jello' ) ? 'selected' : '' ?>>jello</option>
					</optgroup>

					<optgroup label="Bouncing Entrances">
					  <option <?php echo ( $anim1 === 'bounceIn' ) ? 'selected' : '' ?>>bounceIn</option>
					  <option <?php echo ( $anim1 === 'bounceInDown' ) ? 'selected' : '' ?>>bounceInDown</option>
					  <option <?php echo ( $anim1 === 'bounceInLeft' ) ? 'selected' : '' ?>>bounceInLeft</option>
					  <option <?php echo ( $anim1 === 'bounceInRight' ) ? 'selected' : '' ?>>bounceInRight</option>
					  <option <?php echo ( $anim1 === 'bounceInUp' ) ? 'selected' : '' ?>>bounceInUp</option>
					</optgroup>

					<optgroup label="Fading Entrances">
					  <option <?php echo ( $anim1 === 'fadeIn' ) ? 'selected' : '' ?>>fadeIn</option>
					  <option <?php echo ( $anim1 === 'fadeInDown' ) ? 'selected' : '' ?>>fadeInDown</option>
					  <option <?php echo ( $anim1 === 'fadeInDownBig' ) ? 'selected' : '' ?>>fadeInDownBig</option>
					  <option <?php echo ( $anim1 === 'fadeInLeft' ) ? 'selected' : '' ?>>fadeInLeft</option>
					  <option <?php echo ( $anim1 === 'fadeInLeftBig' ) ? 'selected' : '' ?>>fadeInLeftBig</option>
					  <option <?php echo ( $anim1 === 'fadeInRight' ) ? 'selected' : '' ?>>fadeInRight</option>
					  <option <?php echo ( $anim1 === 'fadeInRightBig' ) ? 'selected' : '' ?>>fadeInRightBig</option>
					  <option <?php echo ( $anim1 === 'fadeInUp' ) ? 'selected' : '' ?>>fadeInUp</option>
					  <option <?php echo ( $anim1 === 'fadeInUpBig' ) ? 'selected' : '' ?>>fadeInUpBig</option>
					</optgroup>

					<optgroup label="Flippers">
					  <option <?php echo ( $anim1 === 'flip' ) ? 'selected' : '' ?>>flip</option>
					  <option <?php echo ( $anim1 === 'flipInX' ) ? 'selected' : '' ?>>flipInX</option>
					  <option <?php echo ( $anim1 === 'flipInY' ) ? 'selected' : '' ?>>flipInY</option>
					  <option <?php echo ( $anim1 === 'flipOutX' ) ? 'selected' : '' ?>>flipOutX</option>
					  <option <?php echo ( $anim1 === 'flipOutY' ) ? 'selected' : '' ?>>flipOutY</option>
					</optgroup>

					<optgroup label="Lightspeed">
					  <option <?php echo ( $anim1 === 'lightSpeedIn' ) ? 'selected' : '' ?>>lightSpeedIn</option>
					  <option <?php echo ( $anim1 === 'lightSpeedOut' ) ? 'selected' : '' ?>>lightSpeedOut</option>
					</optgroup>

					<optgroup label="Rotating Entrances">
					  <option <?php echo ( $anim1 === 'rotateIn' ) ? 'selected' : '' ?>>rotateIn</option>
					  <option <?php echo ( $anim1 === 'rotateInDownLeft' ) ? 'selected' : '' ?>>rotateInDownLeft</option>
					  <option <?php echo ( $anim1 === 'rotateInDownRight' ) ? 'selected' : '' ?>>rotateInDownRight</option>
					  <option <?php echo ( $anim1 === 'rotateInUpLeft' ) ? 'selected' : '' ?>>rotateInUpLeft</option>
					  <option <?php echo ( $anim1 === 'rotateInUpRight' ) ? 'selected' : '' ?>>rotateInUpRight</option>
					</optgroup>

					<optgroup label="Sliding Entrances">
					  <option <?php echo ( $anim1 === 'slideInUp' ) ? 'selected' : '' ?>>slideInUp</option>
					  <option <?php echo ( $anim1 === 'slideInDown' ) ? 'selected' : '' ?>>slideInDown</option>
					  <option <?php echo ( $anim1 === 'slideInLeft' ) ? 'selected' : '' ?>>slideInLeft</option>
					  <option <?php echo ( $anim1 === 'slideInRight' ) ? 'selected' : '' ?>>slideInRight</option>

					</optgroup>     
					
					<optgroup label="Zoom Entrances">
					  <option <?php echo ( $anim1 === 'zoomIn' ) ? 'selected' : '' ?>>zoomIn</option>
					  <option <?php echo ( $anim1 === 'zoomInDown' ) ? 'selected' : '' ?>>zoomInDown</option>
					  <option <?php echo ( $anim1 === 'zoomInLeft' ) ? 'selected' : '' ?>>zoomInLeft</option>
					  <option <?php echo ( $anim1 === 'zoomInRight' ) ? 'selected' : '' ?>>zoomInRight</option>
					  <option <?php echo ( $anim1 === 'zoomInUp' ) ? 'selected' : '' ?>>zoomInUp</option>
					</optgroup>

					<optgroup label="Specials">
					  <option <?php echo ( $anim1 === 'hinge' ) ? 'selected' : '' ?>>hinge</option>
					  <option <?php echo ( $anim1 === 'rollIn' ) ? 'selected' : '' ?>>rollIn</option>
					  <option <?php echo ( $anim1 === 'rollOut' ) ? 'selected' : '' ?>>rollOut</option>
					</optgroup>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<select name="slider_seo_basic_animationOut" class="slider_seo_basic_animation slider_seo_basic_animation3">
					<optgroup label="Attention Seekers">
						  <option <?php echo ( $anim2 === 'bounce' ) ? 'selected' : '' ?>>bounce</option>
						  <option <?php echo ( $anim2 === 'flash' ) ? 'selected' : '' ?>>flash</option>
						  <option <?php echo ( $anim2 === 'pulse' ) ? 'selected' : '' ?>>pulse</option>
						  <option <?php echo ( $anim2 === 'rubberBand' ) ? 'selected' : '' ?>>rubberBand</option>
						  <option <?php echo ( $anim2 === 'shake' ) ? 'selected' : '' ?>>shake</option>
						  <option <?php echo ( $anim2 === 'swing' ) ? 'selected' : '' ?>>swing</option>
						  <option <?php echo ( $anim2 === 'tada' ) ? 'selected' : '' ?>>tada</option>
						  <option <?php echo ( $anim2 === 'wobble' ) ? 'selected' : '' ?>>wobble</option>
						  <option <?php echo ( $anim2 === 'jello' ) ? 'selected' : '' ?>>jello</option>
						</optgroup>

						<optgroup label="Bouncing Exits">
						  <option <?php echo ( $anim2 === 'bounceOut' ) ? 'selected' : '' ?>>bounceOut</option>
						  <option <?php echo ( $anim2 === 'bounceOutDown' ) ? 'selected' : '' ?>>bounceOutDown</option>
						  <option <?php echo ( $anim2 === 'bounceOutLeft' ) ? 'selected' : '' ?>>bounceOutLeft</option>
						  <option <?php echo ( $anim2 === 'bounceOutRight' ) ? 'selected' : '' ?>>bounceOutRight</option>
						  <option <?php echo ( $anim2 === 'bounceOutUp' ) ? 'selected' : '' ?>>bounceOutUp</option>
						</optgroup>

						<optgroup label="Fading Exits">
						  <option <?php echo ( $anim2 === 'fadeOut' ) ? 'selected' : '' ?>>fadeOut</option>
						  <option <?php echo ( $anim2 === 'fadeOutDown' ) ? 'selected' : '' ?>>fadeOutDown</option>
						  <option <?php echo ( $anim2 === 'fadeOutDownBig' ) ? 'selected' : '' ?>>fadeOutDownBig</option>
						  <option <?php echo ( $anim2 === 'fadeOutLeft' ) ? 'selected' : '' ?>>fadeOutLeft</option>
						  <option <?php echo ( $anim2 === 'fadeOutLeftBig' ) ? 'selected' : '' ?>>fadeOutLeftBig</option>
						  <option <?php echo ( $anim2 === 'fadeOutRight' ) ? 'selected' : '' ?>>fadeOutRight</option>
						  <option <?php echo ( $anim2 === 'fadeOutRightBig' ) ? 'selected' : '' ?>>fadeOutRightBig</option>
						  <option <?php echo ( $anim2 === 'fadeOutUp' ) ? 'selected' : '' ?>>fadeOutUp</option>
						  <option <?php echo ( $anim2 === 'fadeOutUpBig' ) ? 'selected' : '' ?>>fadeOutUpBig</option>
						</optgroup>

						<optgroup label="Flippers">
						  <option <?php echo ( $anim2 === 'flip' ) ? 'selected' : '' ?>>flip</option>
						  <option <?php echo ( $anim2 === 'flipInX' ) ? 'selected' : '' ?>>flipInX</option>
						  <option <?php echo ( $anim2 === 'flipInY' ) ? 'selected' : '' ?>>flipInY</option>
						  <option <?php echo ( $anim2 === 'flipOutX' ) ? 'selected' : '' ?>>flipOutX</option>
						  <option <?php echo ( $anim2 === 'flipOutY' ) ? 'selected' : '' ?>>flipOutY</option>
						</optgroup>

						<optgroup label="Lightspeed">
						  <option <?php echo ( $anim2 === 'lightSpeedIn' ) ? 'selected' : '' ?>>lightSpeedIn</option>
						  <option <?php echo ( $anim2 === 'lightSpeedOut' ) ? 'selected' : '' ?>>lightSpeedOut</option>
						</optgroup>

						<optgroup label="Rotating Exits">
						  <option <?php echo ( $anim2 === 'rotateOut' ) ? 'selected' : '' ?>>rotateOut</option>
						  <option <?php echo ( $anim2 === 'rotateOutDownLeft' ) ? 'selected' : '' ?>>rotateOutDownLeft</option>
						  <option <?php echo ( $anim2 === 'rotateOutDownRight' ) ? 'selected' : '' ?>>rotateOutDownRight</option>
						  <option <?php echo ( $anim2 === 'rotateOutUpLeft' ) ? 'selected' : '' ?>>rotateOutUpLeft</option>
						  <option <?php echo ( $anim2 === 'rotateOutUpRight' ) ? 'selected' : '' ?>>rotateOutUpRight</option>
						</optgroup>

						<optgroup label="Sliding Exits">
						  <option <?php echo ( $anim2 === 'slideOutUp' ) ? 'selected' : '' ?>>slideOutUp</option>
						  <option <?php echo ( $anim2 === 'slideOutDown' ) ? 'selected' : '' ?>>slideOutDown</option>
						  <option <?php echo ( $anim2 === 'slideOutLeft' ) ? 'selected' : '' ?>>slideOutLeft</option>
						  <option <?php echo ( $anim2 === 'slideOutRight' ) ? 'selected' : '' ?>>slideOutRight</option>
						  
						</optgroup>
						
						<optgroup label="Zoom Exits">
						  <option <?php echo ( $anim2 === 'zoomOut' ) ? 'selected' : '' ?>>zoomOut</option>
						  <option <?php echo ( $anim2 === 'zoomOutDown' ) ? 'selected' : '' ?>>zoomOutDown</option>
						  <option <?php echo ( $anim2 === 'zoomOutLeft' ) ? 'selected' : '' ?>>zoomOutLeft</option>
						  <option <?php echo ( $anim2 === 'zoomOutRight' ) ? 'selected' : '' ?>>zoomOutRight</option>
						  <option <?php echo ( $anim2 === 'zoomOutUp' ) ? 'selected' : '' ?>>zoomOutUp</option>
						</optgroup>

						<optgroup label="Specials">
						  <option <?php echo ( $anim2 === 'hinge' ) ? 'selected' : '' ?>>hinge</option>
						  <option <?php echo ( $anim2 === 'rollIn' ) ? 'selected' : '' ?>>rollIn</option>
						  <option <?php echo ( $anim2 === 'rollOut' ) ? 'selected' : '' ?>>rollOut</option>
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
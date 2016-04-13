<!-- Animation Function -->
<?php function animation($post, $tab = 'basic') {

$anim = get_post_meta( $post->ID, 'slider_seo_animateIn', true );

?>
<td class="">Animation</td>
<td>

	<?php if ( $tab == 'basic' ): ?>
		<select name="slider_seo_basic_animation" id="slider_seo_basic_animation">
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
	<?php elseif ( $tab == 'advanced' ): ?>
		<select name="slider_seo_basic_animation" id="slider_seo_basic_animation">
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
	<?php endif; ?>
</td>
<?php } ?>
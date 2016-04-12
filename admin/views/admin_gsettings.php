<?php 
wp_nonce_field( '_slider_seo_nonce', 'slider_seo_nonce' ); 

$field = get_post_meta( $post->ID, 'slider_seo_animateIn', true );
?>

<ul class="tabs-toggle">
	<li class="hide-if-no-js tab-1 tabs-active">
		<a href="#" id="tab-basic">Basic</a>
	</li>
	<li class="hide-if-no-js tab-2">
		<a href="#" id="tab-advanced">Advanced</a>
	</li>
</ul>
<div class="tab-content">
	<div class="tab-item">
		 <span>	
			 <span class="slider-seo-instruction">
				<p>
					The basic settings configuration allows you to change main preferences.
				</p>
			</span>
			<table id="tab-basic">
				<tr>
					<td class="">Theme</td>
					<td>
						<select name="slider_seo_basic_theme" id="slider_seo_basic_theme">
							<option <?php echo ( $field === 'Geek Sleek' ) ? 'selected' : '' ?>>Geek Sleek</option>
							<option <?php echo ( $field === 'Modern Flat' ) ? 'selected' : '' ?>>Modern Flat</option>
							<option <?php echo ( $field === 'Color Bordered' ) ? 'selected' : '' ?>>Color Bordered</option>
							<option <?php echo ( $field === 'Rounded Edges' ) ? 'selected' : '' ?>>Rounded Edges</option>
							<option <?php echo ( $field === 'Texture Edges' ) ? 'selected' : '' ?>>Texture Edges</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="">Layout</td>
					<td>
						<select name="slider_seo_basic_layout" id="slider_seo_basic_layout">
							<option <?php echo ( $field === 'Fixed Width' ) ? 'selected' : '' ?>>Fixed Width</option>
							<option <?php echo ( $field === 'Full Width' ) ? 'selected' : '' ?>>Full Width</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="">Animation</td>
					<td>
						<select name="slider_seo_basic_animation" id="slider_seo_basic_animation">
							<option <?php echo ( $field === 'bounceIn bounceOut' ) ? 'selected' : '' ?>>bounceIn bounceOut</option>
							<option <?php echo ( $field === 'bounceInDown bounceOutDown' ) ? 'selected' : '' ?>>bounceInDown bounceOutDown</option>
							<option <?php echo ( $field === 'fadeIn fadeOut' ) ? 'selected' : '' ?>>fadeIn fadeOut</option>
							<option <?php echo ( $field === 'fadeInDownBig fadeOutDownBig' ) ? 'selected' : '' ?>>fadeInDownBig fadeOutDownBig</option>
							<option <?php echo ( $field === 'rotateIn rotateOut' ) ? 'selected' : '' ?>>rotateIn rotateOut</option>
							<option <?php echo ( $field === 'rotateInUpRight rotateOutUpRight' ) ? 'selected' : '' ?>>rotateInUpRight rotateOutUpRight</option>
							<option <?php echo ( $field === 'slideInUp slideOutUp' ) ? 'selected' : '' ?>>slideInUp slideOutUp</option>
							<option <?php echo ( $field === 'slideInDown slideOutDown' ) ? 'selected' : '' ?>>slideInDown slideOutDown</option>
							<option <?php echo ( $field === 'zoomIn zoomOut' ) ? 'selected' : '' ?>>zoomIn zoomOut</option>
							<option <?php echo ( $field === 'zoomInUp zoomOutUp' ) ? 'selected' : '' ?>>zoomInUp zoomOutUp</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="">Width</td>
					<td>
						<input type="text" name="slider_seo_basic_width" id="slider_seo_basic_width" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_width', true ) === '') ? '800' : get_post_meta( $post->ID, 'slider_seo_basic_width', true ) ; ?>">
					</td>
				</tr>
				<tr>
					<td class="">Height</td>
					<td>
						<input type="text" name="slider_seo_basic_height" id="slider_seo_basic_height" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_height', true ) === '') ? '300' : get_post_meta( $post->ID, 'slider_seo_basic_height', true ) ; ?>">
					</td>
				</tr>
				<tr>
					<td class="">Animation Speed</td>
					<td>
						<input type="text" name="slider_seo_basic_speed" id="slider_seo_basic_speed" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_speed', true ) === '') ? '700' : get_post_meta( $post->ID, 'slider_seo_basic_speed', true ) ; ?>">
					</td>
				</tr>
				<tr>
					<td class="">Navigation</td>
					<td>
						<input type="checkbox" name="slider_seo_basic_navigation" id="slider_seo_basic_navigation" checked="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_navigation', true ) === 'checked') ? 'checked' : '' ; ?>">
					</td>
				</tr>
				<tr>
					<td class="">Dots</td>
					<td>
						<input type="checkbox" name="slider_seo_basic_dots" id="slider_seo_basic_dots" checked="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_dots', true ) === 'checked') ? 'checked' : '' ; ?>">
					</td>
				</tr>
			 </table>
		 </span>
	</div>

	<div class="tab-item" style="display: none;">
		 <span>
		  <span class="slider-seo-instruction">
				<p>
					Advance settings configuration allows you to change various preferences to suit your needs. For many users, the default settings are quite adequate.
				</p>
			</span>
			
			 <table id="tab-advanced">
				<tr>
					<td class="">animateOut</td>
					<td>
						<select name="slider_seo_animateOut" id="slider_seo_animateOut">
							<option <?php echo ( $field === 'slideOutDown' ) ? 'selected' : '' ?>>slideOutDown</option>
							<option <?php echo ( $field === 'fadeOutUpBig' ) ? 'selected' : '' ?>>fadeOutUpBig</option>
						</select>
					</td>
				</tr>

				<tr>
					<td class="">Items</td>
					<td>
						<input type="text" name="slider_seo_basic_items" id="slider_seo_basic_items" value="<?php echo (get_post_meta( $post->ID, 'slider_seo_basic_items', true ) === '') ? '1' : get_post_meta( $post->ID, 'slider_seo_basic_items', true ) ; ?>">
					</td>

				</tr>
				<tr>
					<td class="">animateIn</td>
					<td>
						<select name="slider_seo_animateIn" id="slider_seo_animateIn">
							<option <?php echo ( $field === 'slideOutDown' ) ? 'selected' : '' ?>>slideOutDown</option>
							<option <?php echo ( $field === 'fadeOutUpBig' ) ? 'selected' : '' ?>>fadeOutUpBig</option>
						</select>
					</td>
				</tr>
			 </table>
		 </span>
	</div>
</div>

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
							<option <?php echo ( $field === 'dark' ) ? 'selected' : '' ?>>dark</option>
							<option <?php echo ( $field === 'light' ) ? 'selected' : '' ?>>light</option>
						</select>
 		 	 		</td>
 		 	 	</tr>
 		 	 	<tr>
 		 	 		<td class="">Layout</td>
 		 	 		<td>
						<select name="slider_seo_basic_layout" id="slider_seo_basic_layout">
							<option <?php echo ( $field === 'wide' ) ? 'selected' : '' ?>>wide</option>
							<option <?php echo ( $field === 'width' ) ? 'selected' : '' ?>>width</option>
						</select>
 		 	 		</td>
 		 	 	</tr>
 		 	 	<tr>
 		 	 		<td class="">Animation</td>
 		 	 		<td>
						<select name="slider_seo_basic_animation" id="slider_seo_basic_animation">
							<?php for ($i=0; $i < 10; $i++) : ?> 
								<option <?php echo ( $field === 'Effect'.$i ) ? 'selected' : '' ?>>Effect <?php echo $i; ?></option>
							<?php endfor; ?>
						</select>
 		 	 		</td>
 		 	 	</tr>
 		 	 	<tr>
 		 	 		<td class="">Width</td>
 		 	 		<td>
						<input type="text" name="slider_seo_basic_width" id="slider_seo_basic_width" value="<?php echo get_post_meta( $post->ID, 'slider_seo_basic_width', true ); ?>">
 		 	 		</td>
 		 	 	</tr>
 		 	 	<tr>
 		 	 		<td class="">Height</td>
 		 	 		<td>
						<input type="text" name="slider_seo_basic_height" id="slider_seo_basic_height" value="<?php echo get_post_meta( $post->ID, 'slider_seo_basic_height', true ); ?>">
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

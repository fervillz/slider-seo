<?php  $postid = $post->ID; ?>
<ul class="tabs-toggle">
	<li class="hide-if-no-js tab-1 tabs-active">
		<a href="#" id="tab-shortcode"><?php _e( 'Shortcode', 'slider-seo'); ?></a>
	</li>
	<li class="hide-if-no-js tab-2">
		<a href="#" id="tab-phpcode"><?php _e( 'PHP file', 'slider-seo'); ?></a>
	</li>
</ul>
<div class="tab-content">
	<div class="tab-item">
 		 <span class="slider-seo-instruction">
			<p><?php _e( 'Copy this shortcode and paste it into your post, page, or text widget content.', 'slider-seo'); ?></p>
		</span>
		<span class="slider-seo-shortcode">
			<input class="widefat" readonly='readonly' type='text' value='[slider-seo id="<?php echo $postid; ?>"]'>
		</span>
	</div>

	<div class="tab-item" style="display: none;">
		 <span class="slider-seo-instruction">
			<p>
				<?php _e( 'Copy & paste this php code into any of your php theme files.', 'slider-seo'); ?>
			</p>
		</span>
		<span class="slider-seo-shortcode">
			<textarea readonly='readonly' class="widefat">
<?php esc_html_e("<?php ","slider-seo"); ?>
<?php esc_html_e("echo do_shortcode(\"[id='".$postid."']\");","slider-seo"); ?>
 <?php esc_html_e("?>","slider-seo"); ?></textarea>
	</span>
</div>
</div>
<?php 

$postid = $post->ID; ?>

<ul class="tabs-toggle">
	<li class="hide-if-no-js tab-1 tabs-active">
		<a href="#" id="tab-shortcode">Shortcode</a>
	</li>
	<li class="hide-if-no-js tab-2">
		<a href="#" id="tab-phpcode">PHP file</a>
	</li>
</ul>
<div class="tab-content">
	<div class="tab-item">
 		 <span class="slider-seo-instruction">
			<p>
				Copy & paste the shortcode directly into any WordPress post or page.
			</p>
		</span>
		<span class="slider-seo-shortcode">
			<input class="widefat" readonly='readonly' type='text' value='[slider-seo id="<?php echo $postid; ?>"]'>
		</span>
	</div>

	<div class="tab-item" style="display: none;">
		 <span class="slider-seo-instruction">
			<p>
				Copy & paste this php code into any of your Wordpress theme files.
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
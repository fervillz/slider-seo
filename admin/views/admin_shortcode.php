<?php 

//Get thumbnail sizes
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
	<div class="tab-item tab-scode1">
 		<div class="slider-seo-instruction">
			<p>
				Copy & paste the shortcode directly into any WordPress post or page.
			</p>
		</div>
		<div class="slider-seo-shortcode">
			<input class="widefat" readonly='readonly' type='text' value='[slider-seo id="<?php echo $postid; ?>"]'>
		</div>
		<div class="clear"></div>
	</div>

	<div class="tab-item tab-scode2" style="display: none;">
		<div class="slider-seo-instruction">
			<p>
				Copy & paste this php code into any of your Wordpress theme files.
			</p>
		</div>
		<div class="slider-seo-shortcode">
			<textarea readonly='readonly' class="widefat">
<?php esc_html_e("<?php ","slider-seo"); ?>
<?php esc_html_e("echo do_shortcode(\"[id='".$postid."']\");","slider-seo"); ?>
 <?php esc_html_e("?>","slider-seo"); ?></textarea>
			
			
		</div>
		<div class="clear"></div>
	</div>
</div>

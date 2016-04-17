<?php wp_nonce_field( '_slider_seo_nonce', 'slider_seo_nonce' ); ?>

<!-- includes partial files for gsettings -->
<?php include_once( 'gsettings_partials/slider_type.php' ); ?>
<?php include_once( 'gsettings_partials/animation.php' ); ?>
<?php include_once( 'gsettings_partials/width_height.php' ); ?>
<?php include_once( 'gsettings_partials/anim_speed.php' ); ?>
<?php include_once( 'gsettings_partials/navigation.php' ); ?>
<?php include_once( 'gsettings_partials/dots.php' ); ?>
<?php include_once( 'gsettings_partials/margin.php' ); ?>
<?php include_once( 'gsettings_partials/padding.php' ); ?>
<?php include_once( 'gsettings_partials/loop.php' ); ?>
<?php include_once( 'gsettings_partials/autoplayTimeout.php' ); ?>
<?php include_once( 'gsettings_partials/autoheight.php' ); ?>
<?php include_once( 'gsettings_partials/lazyload.php' ); ?>
<?php include_once( 'gsettings_partials/autoWidth.php' ); ?>
<?php include_once( 'gsettings_partials/navtext.php' ); ?>
<?php include_once( 'gsettings_partials/navPos.php' ); ?>

<!-- Tabs Toggle -->
<ul class="tabs-toggle">
	<li class="hide-if-no-js tab-1 tabs-active">
		<a href="#" id="tab-basic">Basic</a>
	</li>
	<li class="hide-if-no-js tab-2">
		<a href="#" id="tab-advanced">Advanced</a>
	</li>
</ul>

<!-- Tabs Content -->
<div class="slider_seo_animation tab-content">

	<!-- Tab Basic -->
	<div class="tab-item">
		 <span> <span class="slider-seo-instruction"> <p> The basic settings configuration allows you to change main preferences. </p> </span>
			<table id="tab-basic">
				<tr> <?php tr_slider_type($post); ?> </tr>
				<tr> <?php animation($post); ?> </tr>
				<tr> <?php anim_speed($post); ?> </tr>
				<tr> <?php navigation($post); ?> </tr>
				<tr> <?php dots($post); ?> </tr>
			</table> 
		</span>
	</div>

	<!-- Tab Advanced -->
	<div class="tab-item" style="display: none;">
		 <span> <span class="slider-seo-instruction"> <p> This configuration allows you to change various preferences to suit your needs.</p> </span>
			<table id="tab-advanced">
				<input type="hidden" id="pageID" value="<?php echo $post->ID; ?>" />

				<?php tr_slider_type($post,'advanced'); ?>
				<?php animation($post, 'advanced'); ?>
				<?php width_height($post, 'advanced') ?>
				<?php margin($post, 'advanced'); ?>
				<?php padding($post, 'advanced'); ?>
				<?php autoplayTimeout($post, 'advanced'); ?>
				<?php loop($post, 'advanced'); ?>
				<?php autoheight($post, 'advanced'); ?>
				<?php autoWidth($post, 'advanced'); ?>
				<?php lazyload($post, 'advanced'); ?>
				<?php navtext($post, 'advanced') ?>
				<?php navPos($post, 'advanced') ?>
			 </table>
		 </span>
	</div>
</div>

<?php 

// Add a nonce field for security
wp_nonce_field( 'slider_seo_save', 'slider_seo_nonce' );

//Get thumbnail sizes
$thumbnailSizeW = get_option( 'thumbnail_size_w' );
$thumbnailSizeH = get_option( 'thumbnail_size_h' );

//Start getting meta values
$imgSrcs = get_post_meta( $post->ID, 'slider-img-src', true );
$imgSrcsT = get_post_meta( $post->ID, 'slider-img-srcT', true );
$imgTitles = get_post_meta( $post->ID, 'slider-img-title', true );
$imgAlts = get_post_meta( $post->ID, 'slider-img-alt', true );
$imgCaption = get_post_meta( $post->ID, 'slider-img-caption', true );
$imgUrls = get_post_meta( $post->ID, 'slider-img-url', true );

//counter
$i = 0;

//check if imgsrc is not null
if ($imgSrcs){ ?>

<div id="major-publishing-actions" class="delete-all-slides delete-all-1">
	<div id="delete-action" class="delete-action">
		<a class=""><?php _e( 'Delete All Slides', 'slider-seo'); ?></a>
	</div>

	<div id="publishing-action">
		<input name="original_publish" type="hidden" id="original_publish" value="Update">
		<div class="wp-media-buttons">
			<a href="#" id="restore-slide" class="button restore-slide"><?php _e( 'Restore Deleted Slides', 'slider-seo') ?></a>
			<a href="#" id="add-slide" class="button add_media add-slide"><?php _e( 'Add Slide', 'slider-seo') ?></a>
			<input type="submit" class="publish-slider button button-primary" value="Save Slider">
		</div><!-- .wp-media-buttons -->
	</div>
	<div class="clear"></div>
</div>

<?php } ?>

<table class="slider-wrapper">
<tbody class="slider-body" id="sortable">

<?php 

if ($imgSrcs){

foreach ( $imgSrcs as $imgSrc ) { $i++;  ?>
	
	<tr class="slide-<?php echo $i; ?> slider-item">
		<td class="slider-img">
			<img class="set-slide-thumbnail" src="<?php if (($imgSrcsT[$i-1]) || ($imgSrcsT[$i-1] >= 0)) {  echo $imgSrcsT[$i-1];  } ?>" alt="" title=""/>
			<div class="row-actions hide-if-no-js">
				<span class="activate">
					<a title="Edit" href="javascript:;" class="set-slide-thumbnail"><?php _e( 'Edit', 'slider-seo') ?></a> |
				</span>
				<span class="activate">
					<a title="Clone" href="javascript:;" class="clone-slide"><?php _e( 'Clone', 'slider-seo') ?></a> |
				</span>
				<span class="delete">
					<a title="Delete Slide Item" id="delete-slider-item"><?php _e( 'Delete', 'slider-seo') ?></a> |
				</span>
			</div>
		</td><!-- .check-column -->
		<td class="slider-text">
			<ul class="tabs-toggle">
				<li class="hide-if-no-js tab-1 tabs-active">
					<a href="#" id="tab-seo"><?php _e( 'SEO', 'slider-seo') ?></a>
				</li>
				<li class="hide-if-no-js tab-2">
					<a href="#" id="tab-others"><?php _e( 'Others', 'slider-seo') ?></a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-item tab-seo">
					<input class="widefat" type="text" name="slider-img-title[]" id="slider-img-title" value="<?php if (($imgTitles[$i-1]) || ($imgTitles[$i-1] >= 0)) {  echo $imgTitles[$i-1];  } ?>">
					<small> <?php _e( 'Slider Image Title Text', 'slider-seo') ?>
						<div class="tooltip gray-green dashicons dashicons-editor-help">
							<div class="tooltiptext top large"><?php _e( '<b>Use keyword(s) in title. Preferably using english words.</b> <br><br>ie: istead of "iStock_00044xSmall.jpg" which doesn\'t add much information about an image, use "image-optimization.jpg".', 'slider-seo'); ?>
							</div>
						</div> 
					</small>
					
					
					<input class="widefat" type="text" name="slider-img-alt[]" id="slider-img-alt" value="<?php if ($imgAlts != null) {  echo $imgAlts[$i-1];  } ?>">
					<small> <?php _e( 'Slider Image Alt Text', 'slider-seo'); ?> 
						<div class="tooltip gray-green dashicons dashicons-editor-help">
							<div class="tooltiptext top large"><?php _e('<b>Create descriptive alt text</b> <br><br>
							Alt text or tags are another way that search engines help determine what your image is about. Unlike traditional web content, search engines can not determine the text content of an image. (Search spiders are pretty smart, but as far as I know they haven\'t developed eyes yet.) As a result, search engines need to rely on captions around the image, alt text, file names and other surrounding text. Adding descriptive text in the alt tag helps the search engines determine what the content of the image is.<br><br> If an image is used as navigation, ie as a link to another page, be sure to use alt text that is meaningful to the content of the page being linked to.', 'slider-seo'); ?>
							</div>
						</div> 
					</small>
					<input type="hidden" name="slider-img-srcT[]" id="slider-img-srcT" value="<?php if (($imgSrcsT[$i-1]) || ($imgSrcsT[$i-1] >= 0)) {  echo $imgSrcsT[$i-1];  } ?>">
					<input type="hidden" name="slider-img-src[]" id="slider-img-src" value="<?php echo $imgSrc; ?>">
				</div>

				<div class="tab-item tab-others">

					<textarea name="slider-img-caption[]" id="slider-img-caption" cols="30" rows="10"><?php if (($imgCaption[$i-1]) || ($imgCaption[$i-1] >= 0)) {  echo $imgCaption[$i-1];  } ?></textarea>
					<small> Slider Image Short Caption
						<div class="tooltip gray-green dashicons dashicons-editor-help">
							<div class="tooltiptext top large"><?php _e( '<b>Short descriptive content about the image</b> <br><br>Image captions are important because they are one of the most well-read pieces of content on your entire site.', 'slider-seo'); ?>
							</div>
						</div>
					</small>

					<input class="widefat" type="text" name="slider-img-url[]" id="slider-img-url" value="<?php if ($imgUrls != null) {  echo $imgUrls[$i-1];  } ?>">
					<small> Slider Image Link Url
						<div class="tooltip gray-green dashicons dashicons-editor-help">
							<div class="tooltiptext top large"><?php _e( '<b>The right anchor text</b> <br><br>Anchor text is another important factor in image SEO. If you decide to link to images with text, your anchor text can play a role in how your image is ranked for keywords. Use descriptive anchor text that describes the image.  For example, linking to an image using a generic term like \"image\" or \"photo\" or a file name that doesn\'t use keywords doesn\'t give search engines much meaningful information on what the image is about. Linking to an image with keywords is helpful to search engines as well as people visiting your site.', 'slider-seo'); ?>
							</div>
						</div> 
					</small>
				</div>
			</div>
		</td><!-- .column-description -->
		<td class="slider-delete" >
			<a id="delete-slider-item" class="delete-slider-item" alt="Delete this slide" href="#"><span class="media-modal-icon"><span class="screen-reader-text"><?php _e( 'Close media panel', 'slider-seo'); ?></span></span>
		</a>
		</td>
	</tr>
		
<?php }} ?>

</tbody><!-- #the-list -->
</table><!-- .wp-list-table -->

<input id="thumbnailSizeW" type="hidden" name="thumbnailWidth" value="<?php echo $thumbnailSizeW; ?> " />
<input id="thumbnailSizeH" type="hidden" name="thumbnailHeight" value="<?php echo $thumbnailSizeH; ?> " />

<div id="major-publishing-actions" class="delete-all-slides">
	
	<div id="delete-action" class="delete-action <?php if (!$imgSrcs){ echo "hidden";} ?>">
		<a class=""><?php _e( 'Delete All Slides', 'slider-seo'); ?></a>
	</div>

	<div id="publishing-action">
		<div class="wp-media-buttons">
			<a href="#" id="restore-slide" class="button restore-slide"><?php _e( 'Restore Deleted Slides', 'slider-seo'); ?></a>
			<a href="#" id="add-slide" class="button add_media add-slide"><?php _e( 'Add Slide', 'slider-seo'); ?></a>
			
			<input type="submit" class="publish-slider button button-primary" value="Save Slider">
			
		</div><!-- .wp-media-buttons -->
	</div>
	<div class="clear"></div>
</div>
<div class="float">
	<span id="restore-slide" class="restore-slide button dashicons dashicons-image-rotate">
		<div class="tooltiptext left medium align-center">
			<?php _e( 'Restore Deleted Slides', 'slider-seo'); ?>
		</div>
	</span>
	<span id="add-slide" class="add-slide button dashicons dashicons-plus">
		<div class="tooltiptext left small align-center">
			<?php _e( 'Add Slide', 'slider-seo'); ?>
		</div>
	</span>
	<span id="float-save" class="publish-slider button button-primary dashicons dashicons-yes">
		<div class="tooltiptext left small align-center">
			<?php _e( 'Save Slide', 'slider-seo'); ?>
		</div>
	</span>
	<span id="float-totop" class="button dashicons dashicons-arrow-up-alt2">
		<div class="tooltiptext left small align-center">
			<?php _e( 'Scroll to Top', 'slider-seo'); ?>
		</div>
	</span>
</div><!-- .float -->
<div class="se-pre-con"></div>
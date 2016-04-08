<?php 

//Get thumbnail sizes
$thumbnailSizeW = get_option( 'thumbnail_size_w' );
$thumbnailSizeH = get_option( 'thumbnail_size_h' );
$imgSrcs = get_post_meta( $post->ID, 'slider-img-src', true );
$imgSrcsT = get_post_meta( $post->ID, 'slider-img-srcT', true );
$imgTitles = get_post_meta( $post->ID, 'slider-img-title', true );
$imgAlts = get_post_meta( $post->ID, 'slider-img-alt', true );
$i = 0;

if ($imgSrcs){

?>
<div id="major-publishing-actions" class="delete-all-slides delete-all-1">
	<div id="delete-action">
		<a class="">Delete All Slides</a>
	</div>

	<div id="publishing-action">
		<span class="spinner"></span>
			<input name="original_publish" type="hidden" id="original_publish" value="Update">
		<div class="wp-media-buttons">
			<a href="#" id="add-slide" class="button add_media add-slide"><?php echo "Add Slide"; ?></a>
			<input name="save" type="submit" class="button button-primary" id="publish" value="Save Slider">
		</div><!-- .wp-media-buttons -->
	</div>
	<div class="clear"></div>
</div>

<?php } ?>

<table class="slider-wrapper">
<tbody class="slider-body">

<?php 

if ($imgSrcs){
foreach ( $imgSrcs as $imgSrc ) { $i++; ?>
	
	<tr class="slide-<?php echo $i; ?> slider-item">
		<td class="slider-img">
			<img src="<?php if (($imgSrcsT[$i-1]) || ($imgSrcsT[$i-1] >= 0)) {  echo $imgSrcsT[$i-1];  } ?>" alt="" title=""/>
			<div class="row-actions hide-if-no-js">
				<span class="activate">
					<a title="Edit" href="javascript:;" id="set-slide-thumbnail">Edit</a> |
				</span>
				<span class="delete">
					<a title="Delete Slide Item" id="delete-slider-item">Delete</a> |
				</span>
			</div>
		</td><!-- .check-column -->
		<td class="slider-text">
			
			<ul class="tabs-toggle">
				<li class="hide-if-no-js tab-1 tabs-active">
					<a href="#" id="tab-seo">SEO</a>
				</li>
				<li class="hide-if-no-js tab-2">
					<a href="#" id="tab-others">Others</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-item tab-seo">
					<input class="widefat" type="text" name="slider-img-title[]" id="slider-img-title" value="<?php if (($imgTitles[$i-1]) || ($imgTitles[$i-1] >= 0)) {  echo $imgTitles[$i-1];  } ?>">
					<small> Slider Image Title Text 
						<div class="tooltip dashicons dashicons-warning">
							<div class="tooltiptext"><b>Use keyword(s) in title. Preferably using english words.</b> <br><br>
							ie: istead of "iStock_00044xSmall.jpg" which doesn't add much information about an image, use "image-optimization.jpg".
							</div>
						</div> 
					</small>
					
					
					<input class="widefat" type="text" name="slider-img-alt[]" id="slider-img-alt" value="<?php if ($imgAlts != null) {  echo $imgAlts[$i-1];  } ?>">
					<small> Slider Image Alt Text 
						<div class="tooltip dashicons dashicons-warning">
							<div class="tooltiptext"><b>Create descriptive alt text</b> <br><br>
							Alt text or tags are another way that search engines help determine what your image is about. Unlike traditional web content, search engines can’t determine the text content of an image. (Search spiders are pretty smart, but as far as I know they haven’t developed eyes yet.) As a result, search engines need to rely on captions around the image, alt text, file names and other surrounding text. Adding descriptive text in the alt tag helps the search engines determine what the content of the image is.
							<br><br>
							If an image is used as navigation, ie as a link to another page, be sure to use alt text that is meaningful to the content of the page being linked to.
							</div>
						</div> 
					</small>

					<input type="hidden" name="slider-img-srcT[]" id="slider-img-srcT" value="<?php if (($imgSrcsT[$i-1]) || ($imgSrcsT[$i-1] >= 0)) {  echo $imgSrcsT[$i-1];  } ?>">
					<input type="hidden" name="slider-img-src[]" id="slider-img-src" value="<?php echo $imgSrc; ?>">
				</div>

				<div class="tab-item tab-others">
					<textarea name="" id="" cols="30" rows="10"></textarea>
					<small> Slider Image Short Caption
						<div class="tooltip dashicons dashicons-warning">
							<div class="tooltiptext"><b>Short descriptive content about the image</b> <br><br>
							Image captions are important because they are one of the most well-read pieces of content on your entire site.
							</div>
						</div>
					</small>

					<input class="widefat" type="text" name="slider-img-alt[]" id="slider-img-alt" value="<?php if ($imgAlts != null) {  echo $imgAlts[$i-1];  } ?>">
					<small> Slider Image Link Url
						<div class="tooltip dashicons dashicons-warning">
							<div class="tooltiptext"><b>The right anchor text</b> <br><br>
							Anchor text is another important factor in image SEO. If you decide to link to images with text, your anchor text can play a role in how your image is ranked for keywords. Use descriptive anchor text that describes the image.  For example, linking to an image using a generic term like “image” or “photo” or a file name that doesn’t use keywords doesn’t give search engines much meaningful information on what the image is about. Linking to an image with keywords is helpful to search engines as well as people visiting your site.
							</div>
						</div> 
					</small>
				</div>
			</div>
			
			
			
			
		</td><!-- .column-description -->
		<td class="slider-delete" >
			<a id="delete-slider-item" class="delete-slider-item" alt="Delete this slide" href="#"><span class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span>
		</a>
		</td>
	</tr>
		
<?php }} ?>
</tbody><!-- #the-list -->
</table><!-- .wp-list-table -->

<input id="thumbnailSizeW" type="hidden" name="thumbnailWidth" value="<?php echo $thumbnailSizeW; ?> " />
<input id="thumbnailSizeH" type="hidden" name="thumbnailHeight" value="<?php echo $thumbnailSizeH; ?> " />

<div id="major-publishing-actions" class="delete-all-slides">
	
	<div id="delete-action" class="hidden">
		<a class="">Delete All Slides</a>
	</div>

	<div id="publishing-action">
		<div class="wp-media-buttons">
			<a href="#" id="add-slide" class="button add_media add-slide"><?php echo "Add Slide"; ?></a>
			<input name="save" type="submit" class="button button-primary <?php if (!$imgSrcs){ echo "hidden";} ?>" id="publish" value="Save Slider">
		</div><!-- .wp-media-buttons -->
	</div>
	<div class="clear"></div>
</div>



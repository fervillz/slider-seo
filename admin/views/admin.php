<table class="slider-wrapper">
<tbody class="slider-body">
<?php 
//Get thumbnail sizes
$thumbnailSizeW = get_option( 'thumbnail_size_w' );
$thumbnailSizeH = get_option( 'thumbnail_size_h' );
$imgSrcs = get_post_meta( $post->ID, 'footer-thumbnail-src', true );
$imgSrcsT = get_post_meta( $post->ID, 'footer-thumbnail-srcT', true );
$imgTitles = get_post_meta( $post->ID, 'footer-thumbnail-title', true );
$imgAlts = get_post_meta( $post->ID, 'footer-thumbnail-alt', true );
$i = 0;

if ($imgSrcs){
foreach ( $imgSrcs as $imgSrc ) { $i++; ?>
	
	<tr class="slide-<?php echo $i; ?> slider-item">
		<td class="slider-img">
			<img src="" alt="caption text" title="bordocs"/>
			<div class="row-actions hide-if-no-js">
				<span class="activate">
					<a title="Replace Image" href="javascript:;" id="set-slide-thumbnail">Replace Image</a> |
				</span>
				<span class="delete">
					<a title="Delete Slide Item" id="delete-slider-item">Delete Slide</a> |
				</span>
			</div>
		</td><!-- .check-column -->
		<td class="slider-text">
			Easy installation - No settings needed, just add the link of your image, write desciption and paste link to your about us page or any page. Use widget to show it to your sidebar or footer.
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
	<div id="delete-action">
		<a class="">Delete All Slides</a>
	</div>

	<div id="publishing-action">
		<span class="spinner"></span>
			<input name="original_publish" type="hidden" id="original_publish" value="Update">
		<div class="wp-media-buttons">
			<a href="#" id="add-slide" class="button add_media"><?php echo "Add Slide"; ?></a>
			<input name="save" type="submit" class="button button-primary" id="publish" value="Save Slider">
		</div><!-- .wp-media-buttons -->
	</div>
	<div class="clear"></div>
</div>



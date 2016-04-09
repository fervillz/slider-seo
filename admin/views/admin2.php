<div class="slider-body">

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

	<div class="slider-item-<?php echo $i; ?>">
		<p class="hide-if-no-js" style="display: none;">
			<input type="submit" id="set-footer-thumbnail" value="Set Footer Image" class="button">
		</p>

		 <div id="featured-footer-image-container" class="">
		 <img src="<?php if (($imgSrcsT[$i-1]) || ($imgSrcsT[$i-1] >= 0)) {  echo $imgSrcsT[$i-1];  } ?>" alt="caption text" title="bordocs"></div>
		<!-- #featured-footer-image-container -->
		<div class="row-actions hide-if-no-js">
			<span class="activate"><!-- use id remove-footer-thumbnail -->
				<a title="Remove Footer Image" href="javascript:;" id="set-footer-thumbnail">Replace Image</a> |
			</span>
			<span class="delete">
				<a title="Remove Slide Item" id="delete-slider-item">Delete Slide</a> |
			</span>
			
		</div>
		<!-- .hide-if-no-js -->
		<p id="featured-footer-image-meta">
			<input type="hidden" name="footer-thumbnail-srcT[]" id="footer-thumbnail-srcT" value="<?php if (($imgSrcsT[$i-1]) || ($imgSrcsT[$i-1] >= 0)) {  echo $imgSrcsT[$i-1];  } ?>">
			<input type="hidden" name="footer-thumbnail-src[]" id="footer-thumbnail-src" value="<?php echo $imgSrc; ?>">
			<input type="hidden" name="footer-thumbnail-title[]" id="footer-thumbnail-title" value="<?php if (($imgTitles[$i-1]) || ($imgTitles[$i-1] >= 0)) {  echo $imgTitles[$i-1];  } ?>">
			<input type="hidden" name="footer-thumbnail-alt[]" id="footer-thumbnail-alt" value="<?php if ($imgAlts != null) {  echo $imgAlts[$i-1];  } ?>">
		</p>


		<a  id="delete-slider-item" class="delete-slider" alt="Delete this slide" href="#"><span id="delete-slider-item" class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span></a>

	</div>
<?php }} ?>



<input id="thumbnailSizeW" type="hidden" name="thumbnailWidth" value="<?php echo $thumbnailSizeW; ?> " />
<input id="thumbnailSizeH" type="hidden" name="thumbnailHeight" value="<?php echo $thumbnailSizeH; ?> " />

</div><!-- .slider-wrapper -->
<div id="major-publishing-actions" class="delete-all-slides">
	<div id="delete-action">
		<a class="">Delete All Slides</a>
	</div>

	<div id="publishing-action">
		<span class="spinner"></span>
			<input name="original_publish" type="hidden" id="original_publish" value="Update">
<div class="wp-media-buttons">
	<a href="#" id="add-slide" class="add-slide button add_media"><?php echo "Add Slide"; ?></a>
</div><!-- .wp-media-buttons -->
			

			
	</div>
	<div class="clear"></div>
</div>



<?php // add_thickbox(); ?>

<!-- 
<a href="#TB_inline?width=400&height=200&inlineId=modal-window-id" class="thickbox">Modal Me</a>

<div id="modal-window-id" style="display:none;">
	<p>Lorem Ipsum sit dolla amet.</p>
</div>

 -->
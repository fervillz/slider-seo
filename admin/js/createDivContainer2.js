function createDivContainer($) {

    /* First, count the number of div that already exist. This is how we're going to
     * implement the name and ID attributes of the element.
     */
    iSliderItemCount = $('.slider-wrapper').children().length;
    iSliderItemCount++;

    var Element =
        '<div class="slider-item-' 
        + iSliderItemCount 
        + '">' 
        + '<p class="hide-if-no-js">'
        + '<input type="submit" id="set-footer-thumbnail" value="Set Image" class="button" />' 
        + '</p>' 
        + '<div id="featured-footer-image-container" class="hidden">' 
        + '<img src="" alt="" title="" />' 
        + '</div><!-- #featured-footer-image-container -->' 
        + '<div class="row-actions hide-if-no-js hidden">'
		+ '<span class="activate"><!-- use id remove-footer-thumbnail -->'
		+ '<a title="Remove Footer Image" href="javascript:;" id="set-footer-thumbnail">Replace Image</a> |'
		+ '</span>'
		+ '<span class="delete">'
		+ '<a title="Remove Slide Item" id="delete-slider-item">Delete Slide</a> |'
		+ '</span>'
		+ '</div>'
        + '<p class="hide-if-no-js hidden">' 
        + '<a title="Remove Footer Image" href="javascript:;" id="remove-footer-thumbnail">Remove Add Slider  Image</a>' 
        + '</p><!-- .hide-if-no-js -->' 
        + '<p id="featured-footer-image-meta">' 
        + '</p><!-- #featured-footer-image-meta -->' 
        + '</div>';

    return Element;
}
function createDivContainer($) {

    /* First, count the number of div that already exist. This is how we're going to
     * implement the name and ID attributes of the element.
     */
    iSliderItemCount = $('.slider-body').children().length;
	iSliderItemCount++;
	
    var Element =
    	'<tr class="slide-'
    	+ iSliderItemCount
    	+ ' slider-item">'
		+ 	'<td class="slider-img">'
		+ 		'<input type="submit" id="set-slide-thumbnail" value="Set Slide Image" class="button">'
		+ 		'<img src="" alt="" title="">'
		+ 		'<div class="row-actions hide-if-no-js hidden">'
		+ 			'<span class="activate"><!-- use id remove-footer-thumbnail -->'
		+ 				'<a title="Replace Image" href="javascript:;" id="set-slide-thumbnail">Replace Image</a> |'
		+ 			'</span>'
		+ 			'<span class="delete">'
		+ 				'<a title="Delete Slide Item" id="delete-slider-item">Delete Slide</a> |'
		+ 			'</span>'
		+ 		'</div>'
		+ 	'</td><!-- .check-column -->'
		+ 	'<td class="slider-text">'
		+ 		''
		+ 	'</td><!-- .column-description -->'
		+ 	'<td class="slider-delete">'
		+ 		'<a id="delete-slider-item" class="delete-slider-item" alt="Delete this slide" href="#"><span class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span>'
		+ 	'</a>'
		+ 	'</td>'
		+ '</tr>';

    return Element;
}
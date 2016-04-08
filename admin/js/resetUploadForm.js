/**
 * Callback function for the 'click' event of the 'Remove Slide'
 * anchor in its meta box.
 *
 * Resets the meta box by hiding the image and by hiding the 'Remove
 * Footer Image' container.
 *
 * 
 */

function resetUploadForm($) {
	'use strict';
	// First, we'll hide the image
	$('.remove-item-active #featured-footer-image-container')
		.children('img')
		.hide();

	// Then display the previous container
	$('.remove-item-active #featured-footer-image-container')
		.prev()
		.show();

	// Finally, we add the 'hidden' class back to this anchor's parent
	$('.remove-item-active #featured-footer-image-container')
		.next()
		.hide()
		.addClass('hidden');

	// Finally, we reset the meta data input fields
	$('.tab-itemw')
		.children()
		.val('');

	$('.remove-item-active').removeClass('remove-item-active');


}
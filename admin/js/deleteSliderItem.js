function deleteSliderItem($) {
	'use strict';

	if (confirm('This will delete the slide?')) {
		$('.delete-item-active .slider-img')
			.children()
			.val('');

		// First, we'll hide the image
		$('.delete-item-active #featured-footer-image-container')
			.parent()
			.hide();
	}
}
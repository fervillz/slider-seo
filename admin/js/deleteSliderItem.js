function deleteSliderItem($) {
	'use strict';

	if (confirm('This will delete the slide?')) {
		$('.tab-item')
			.children()
			.val('');

		// First, we'll hide the image
		$('.delete-item-active')
			.hide();

		$('.delete-item-active').removeClass('delete-item-active');
	}
}
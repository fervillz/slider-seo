function deleteSliderItem($) {
	'use strict';

	if (confirm('This will delete the slide?')) {
		$('.delete-item-active .tab-item')
			.children()
			.val('');

		// First, we'll hide the image
		$('.delete-item-active')
			.hide();

		$('.delete-item-active').removeClass('delete-item-active');
	}
}


function deleteAllSliderItem($) {
	'use strict';

	if (confirm('This will delete All the slide?')) {
		$('.tab-item')
			.children()
			.val('');

		$('.slider-body tr').hide();

		$('#publish').trigger('click');
	}
}
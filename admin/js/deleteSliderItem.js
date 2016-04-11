function deleteSliderItem($) {
	'use strict';

	if (confirm('This will delete the slide?')) {
		$('.delete-item-active')
			.hide();
	}

	$('.restore-slide').css('visibility','visible');
}

function restoreSliderItem($) {
	'use strict';

	$('.delete-item-active')
			.show();

	$('.delete-item-active').removeClass('delete-item-active');

	$('.restore-slide').css('visibility','hidden');
}

function savedeleteSliderItem($) {
	'use strict';

	$('.delete-item-active .tab-item')
		.children()
		.val('');	
}



function deleteAllSliderItem($) {
	'use strict';

	if (confirm('This action cannot be undone, you sure to delete All the slides?')) {
		$('.tab-item')
			.children()
			.val('');

		$('.slider-body tr').hide();

		$('#publish').trigger('click');
	}
}
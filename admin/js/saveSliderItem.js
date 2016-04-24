function saveSliderItem($) {
	'use strict';

	if ( $('.slider-item').hasClass('delete-item-active') ) {
		$('.delete-item-active .tab-item')
		.children()
		.val('');
		console.log('deleting');	
	}

	$('#publish').trigger('click');
}
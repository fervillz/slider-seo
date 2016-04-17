(function($) {
	'use strict';
	
	//owl control outside middle
	var widthNavPrev = $('.owl-prev').innerWidth() + 30;
	var widthNavNext = $('.owl-next').innerWidth() + 30;
	var owlControls = $('.owl-controls').outerWidth();
	var finalNavWidth = owlControls + widthNavPrev + widthNavNext;
	$('.outerMiddle-Justify .owl-controls').css('width',finalNavWidth+'px');
	$('.outerMiddle-Justify .owl-controls').css('margin-left','-'+widthNavPrev+'px');

})(jQuery);

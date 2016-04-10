(function($) {
	'use strict';

	$('.owl-carousel').owlCarousel( {
		animateOut: 'slideOutDown',
	    animateIn: 'flipInX',
	    items:1,
	    margin:30,
	    stagePadding:30,
	    smartSpeed:450,
	    nav: true,
	    dots: true,
	    loop: true
	});



})(jQuery);

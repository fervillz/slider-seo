(function($) {
	'use strict';

	renderFeaturedImage($);

	//remove insde padding
	removePaddingInside($);

	$(function() {
		$('.slider-body').on('click', '.set-slide-thumbnail', function(evt) {

			// Stop the anchor's default behavior
			evt.preventDefault();

			//add active class
			$(this).addClass('upload-active');
			$(this).closest('.slider-item').addClass('item-active')
				// Display the media uploader
			renderMediaUploader($);

		});

		$('.slider-body').on('click', '#remove-footer-thumbnail', function(evt) {

			// Stop the anchor's default behavior
			evt.preventDefault();


			//add removeactive class
			$(this).closest('[class^="slider-item"]').addClass('remove-item-active')
				// Remove the image, toggle the anchors
			resetUploadForm($);

		});

		$('.slider-body').on('click', '#delete-slider-item', function(evt) {

			// Stop the anchor's default behavior
			evt.preventDefault();

			$('body').addClass('slide-delete-active');
			//add removeactive class
			$(this).closest('.slider-item').addClass('delete-item-active')
				// Remove the image, toggle the anchors
			deleteSliderItem($);

		});

		$('body').on('click', '.delete-action a', function(evt) {

			// Stop the anchor's default behavior
			evt.preventDefault();

			console.log('deleting');
			// Remove the image, toggle the anchors
			deleteAllSliderItem($);

		});

		$('.add-slide').on('click', function(evt) {

			evt.preventDefault();
			
			renderMediaUploader($);

		});

		//save slider
		$('body').on('click', '.publish-slider', function(evt) {
			evt.preventDefault();
			saveSliderItem($);
		});

		//Run stuff when uploader close modal is click
		$('body').on('click', '.media-modal-close, .media-modal-backdrop', function() {
			mediaModalClose();
		});

		$('.tab-others').hide();



		//restore deleted slides
		$('.restore-slide').click(function(evt) {
			evt.preventDefault();
			restoreSliderItem($);
		});

		//sohw loading while loading page
		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");
		});

		//clone slide
		$('body').on('click', '.clone-slide', function(evt) {
			evt.preventDefault();
			console.log('cloning');
			var $tr = $(this).closest('tr');
			var $clone = $tr.clone(true);
			$tr.after($clone);
		});

		//tabs toggle
		$('body').on('click', '.tabs-toggle #tab-seo', function(evt) {

			evt.preventDefault();

			$(this).closest('.slider-text').find('.tab-1').addClass('tabs-active');
			$(this).closest('.slider-text').find('.tab-2').removeClass('tabs-active');

			$(this).closest('.slider-text').find('.tab-seo').show();
			$(this).closest('.slider-text').find('.tab-others').hide();
		});

		$('body').on('click', '.tabs-toggle #tab-others', function(evt) {

			evt.preventDefault();

			$(this).closest('.slider-text').find('.tab-2').addClass('tabs-active');
			$(this).closest('.slider-text').find('.tab-1').removeClass('tabs-active');

			$(this).closest('.slider-text').find('.tab-seo').hide();
			$(this).closest('.slider-text').find('.tab-others').show();
		});

		//metabox shortcode
		tabtoggle('#slider_seo_shortcode', true);

		//metabox general settings
		tabtoggle('#slider_seo_animation');

		//simple tab function
		//tabID in your metabox id
		function tabtoggle(tab_Id, highlight = false) {
			$('body').on('click', tab_Id + ' a', function(evt) {
				evt.preventDefault();

				var order = ($(this).parent().index());

				$(this).closest('.tabs-toggle').find('li.tabs-active').removeClass('tabs-active');
				$(this).closest('li').addClass('tabs-active');
				$(this).closest('.inside').find('.tab-content div:not(.tab-item:eq( ' + order + ' ))').hide();
				$(this).closest('.inside').find('.tab-content div.tab-item:eq( ' + order + ' )').show();

				//highlight input, textarea 
				if (highlight) {
					$(this).closest('.inside').find('.tab-content input').select();
					$(this).closest('.inside').find('.tab-content textarea').select();
				}

			});
		}

		//select shortcode on click
		$('body').on('click', '#slider_seo_shortcode textarea, #slider_seo_shortcode input', function() {
			$(this).select();
		});

		//select shortcode on click
		$('body').on('hover', '#slider_seo_shortcode textarea, #slider_seo_shortcode input', function() {
			$(this).focus().select();
		});

		//slider type value
		if ( $('#slider_type_custom').val() == 1 ) {
			$('.animation').show();
		}
		else {
			$('.animation').hide();
		}

		//slider type
		$('body').on('click', '.radio_slider_type', function() {

			var radioValue;

			if ($(this).is(':checked')) {
				radioValue = $(this).val();
				$('#slider_type_custom').val(radioValue);

				if ( radioValue == 1 ) {
					$('.animation').show();
				}
				else {
					$('.animation').hide();
				}
			}

		});

		//slider type
		$('body').on('input', '#slider_type_custom', function() {

			var radioValue = $('#slider_type_custom').val();

			if ( radioValue == 1 ) {
				$('.animation').show();
			}
			else {
				$('.animation').hide();
			}		

		});

		

		//slider layout
		$('body').on('click', '.radio_slider_layout', function() {

			if ($(' #slider_layout2 ').is(':checked')) {
				$('.fixedLayout').hide();
			} else {
				$('.fixedLayout').show();
			}

		});

		//animation select
		$('body').on('change', '.slider_seo_basic_animation', function() {

			if ($(this).hasClass('slider_seo_basic_animation1')) {
				console.log('slider_seo_basic_animation1');
				var selectedAnim1 = $('.slider_seo_basic_animation1 option:selected').text();
				$('.slider_seo_basic_animation_input').val(selectedAnim1);
			} else {
				console.log('slider_seo_basic_animation23');
				var selectedAnim2 = $('.slider_seo_basic_animation2 option:selected').text();
				var selectedAnim3 = $('.slider_seo_basic_animation3 option:selected').text();
				$('.slider_seo_basic_animation_input').val(selectedAnim2 + ' ' + selectedAnim3);
			}
		});

		//load floating save
		$(window).scroll(function() {
			if (($(this).scrollTop() < 250)) {
				$('.float').fadeOut();
			} else {
				$('.float').fadeIn();
			}
		});

		//scroll to top
		$("#float-totop").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "fast");
		  return false;
		});

		//make sure input fields has values
		var fieldTemplValue;
		var blurValue;

		$('body').on('click', '.tab-item input, .tab-item textarea', function() {
			if ( fieldTemplValue == '') {
				fieldTemplValue = 'Please enter value';
			}
			else {
				fieldTemplValue = $(this).val();
			}
			
		});

		$('body').on('focus', '.tab-item input, .tab-item textarea', function() {
			fieldTemplValue = $(this).val();
		});

		$('body').on('blur', '.tab-item input, .tab-item textarea', function() {
			blurValue = $(this).val();
			if ( blurValue == '') {
				$(this).val(fieldTemplValue);
			}
		});


	});


})(jQuery);

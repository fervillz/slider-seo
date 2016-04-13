/**
 * Callback function for the 'click' event of the 'Add slide'
 * anchor in its meta box.
 *
 * Displays the media uploader for selecting an image.
 *
 */

function renderMediaUploader($) {
	'use strict';

	var file_frame, image_data;

	//Get thumbnail sizes
	var thumbnailSizeW = $('#thumbnailSizeW').val();
	var thumbnailSizeH = $('#thumbnailSizeH').val();
	console.log(thumbnailSizeW);
	console.log(thumbnailSizeH);

	if (undefined !== file_frame) {

		file_frame.open();
		return;

	}

	file_frame = wp.media.frames.file_frame = wp.media({
		frame: 'post',
		state: 'insert',
		multiple: true,
		library : {
			type : 'image'
		}
	});


	file_frame.on('insert', function() {

		var length = file_frame.state().get("selection").length;
		var images = file_frame.state().get("selection").models
		var imgSrcFileName, fileExtension;
		
		if (0 > length) {
			return;
		}

		for( var counter = 0; counter < length; counter++ ) {

			var image_url = images[counter].changed.url;
			var image_caption = images[counter].changed.caption;
			var image_title = images[counter].changed.title;
			var image_alt = images[counter].changed.alt;

			//Create thumbnail
			//Get imgSrcFileName of the image
			imgSrcFileName = image_url;

			//get extension
			fileExtension = imgSrcFileName.split('.').pop();

			//add thumbnail sizes
			imgSrcFileName = imgSrcFileName.replace('.' + fileExtension, '-' + thumbnailSizeW + 'x' + thumbnailSizeH + '.' + fileExtension);

			//remove whitespaces
			imgSrcFileName = imgSrcFileName.replace(/\s/g, '');

			//Ih there are multiple selected images
			if ( counter > 0) {
				$('.slider-body').append(createDivContainer($));
				createSliderHiddenInputs($);	 
			}

			//Set the properties of the image and display it
			$('.item-active .slider-img')
			.children('img')
			.attr('src', imgSrcFileName)
			.attr('alt', image_alt)
			.attr('title', image_title);

			// Store the image's information into the meta data fields
			if (image_url != '') {

				$('.item-active #slider-img-src').val(image_url);
				//for thumbnail
				$('.item-active #slider-img-srcT').val(imgSrcFileName);
			}

			if (image_title != '') {
				$('.item-active #slider-img-title').val(image_title);
			} else {
				$('.item-active #slider-img-title').val('Add Image Title');
			}

			if (image_alt != '') {
				$('.item-active #slider-img-alt').val(image_alt);
			} else {
				$('.item-active #slider-img-alt').val('Add Image Alt');
			}

			if (image_caption != '') {
				$('.item-active #slider-img-caption').text(image_caption);
			} else {
				$('.item-active #slider-img-caption').text('Add Image caption');
			}

			//add some url
			$('.item-active #slider-img-url').val("#");

			$('.item-active #set-slide-thumbnail').removeClass('upload-active');
			$('.item-active input#set-slide-thumbnail').hide();
			$('.item-active .row-actions').removeClass('hidden');
			
			$('.item-active #set-image').prev('img').removeClass('hidden');
			$('.item-active #set-image').hide();

			//show hidden action buttons
			$('#major-publishing-actions, #publish').removeClass('hidden');

			$('.item-active').removeClass('item-active');

			//console.log(imgSrcFileName +'\n'+image_caption +'\n'+image_title +'\n');
		}

		$('.item-active').removeClass('item-active');
	});

	// Now display the actual file_frame
	file_frame.open();
}

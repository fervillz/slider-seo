/**
 * Callback function for the 'click' event of the 'Add slide'
 * anchor in its meta box.
 *
 * Displays the media uploader for selecting an image.
 *
 */

function renderMediaUploader($) {

	var sliderSeoUploader, thumbnailSizeW, thumbnailSizeH, image_url, image_caption, image_title, image_alt, image_id, imgSrcFileName, fileExtension, counter = 0;

	//Get thumbnail sizes
	thumbnailSizeW = $('#thumbnailSizeW').val();
	thumbnailSizeH = $('#thumbnailSizeH').val();

	if (undefined !== sliderSeoUploader) {
		sliderSeoUploader.open(); 
		return;
	}

	sliderSeoUploader = wp.media.frames.file_frame = wp.media({

		title: 'Select Attachment',
		button: {
			text: 'Add Image Slide(s)'
		}, 
		library : {
			type : 'image'
		},
		multiple: true
	});
		
		sliderSeoUploader.on('select', function () {
		
			var selection = sliderSeoUploader.state().get('selection');

			selection.map( function( attachment ) {

			attach = attachment.toJSON();

			image_url = attach.url;
			image_caption = attach.caption;
			image_title = attach.title;
			image_alt = attach.alt;
			image_id = attach.id;
			counter++;

			/*
			console.log(image_id);
			console.log(image_caption);
			console.log(image_title);
			console.log(image_alt);
			console.log(image_url);
			console.log(counter);
			*/

			//Create thumbnail and Get imgSrcFileName of the image
			if ( image_url ) {
				imgSrcFileName = image_url;

				//get extension
				fileExtension = imgSrcFileName.split('.').pop();

				//add thumbnail sizes
				imgSrcFileName = imgSrcFileName.replace('.' + fileExtension, '-' + thumbnailSizeW + 'x' + thumbnailSizeH + '.' + fileExtension);

				//remove whitespaces
				imgSrcFileName = imgSrcFileName.replace(/\s/g, '');
			}
			else {
				console.log('Error Create thumbnail');
			}

			//If there are multiple selected images
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
			if (image_id != '') {

				$('.item-active #slider-img-id').val(image_id);
			}

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


		});

		$('.item-active').removeClass('item-active');
	});

	sliderSeoUploader.open();
}
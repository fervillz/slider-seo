(function($) {
    'use strict';

    renderFeaturedImage($);

    //remove insde padding
    removePaddingInside($);

    $(function() {


        $('.slider-body').on('click', '#set-slide-thumbnail', function(evt) {

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


            //add removeactive class
            $(this).closest('.slider-item').addClass('delete-item-active')
                // Remove the image, toggle the anchors
            deleteSliderItem($);

        });

        $('#add-slide').on('click', function(evt) {

            evt.preventDefault();

            /* Create a new input element that will be used to capture the users input
             * and append it to the container just above this button.
             */

            $('.slider-body').append(createDivContainer($));
            iSliderItemCount = $('.slider-body').children().length;
            console.log(iSliderItemCount);
            $('.slide-' + iSliderItemCount + ' .slider-text').append(createSliderHiddenInputs($));

            //count
            iSliderItemCount = $('.slider-body').children().length;
            $('.slide-' + iSliderItemCount)
                //.append ( createSliderContent( $ ) )
                .addClass('animated fadeOut')
                .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    $(this).removeClass('animated fadeOut');
                });


        });

        //Run stuff when uploader close modal is click
        $('body').on('click', '.media-modal-close, .media-modal-backdrop', function() {
            mediaModalClose();
        });

    });

})(jQuery);

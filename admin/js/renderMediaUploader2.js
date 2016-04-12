/**
 * Callback function for the 'click' event of the 'Add slide'
 * anchor in its meta box.
 *
 * Displays the media uploader for selecting an image.
 *
 */

function renderMediaUploader($) {
    'use strict';

    var file_frame, image_data, json;

    //Get thumbnail sizes
    var thumbnailSizeW = $('#thumbnailSizeW').val();
    var thumbnailSizeH = $('#thumbnailSizeH').val();
    console.log(thumbnailSizeW);
    console.log(thumbnailSizeH);
    /**
     * If an instance of file_frame already exists, then we can open it
     * rather than creating a new instance.
     */
    if (undefined !== file_frame) {

        file_frame.open();
        return;

    }

    /**
     * If we're this far, then an instance does not exist, so we need to
     * create our own.
     *
     * Here, use the wp.media library to define the settings of the Media
     * Uploader. We're opting to use the 'post' frame which is a template
     * defined in WordPress core and are initializing the file frame
     * with the 'insert' state.
     *
     * We're also not allowing the user to select more than one image.
     */
    file_frame = wp.media.frames.file_frame = wp.media({
        frame: 'post',
        state: 'insert',
        multiple: true
    });

    /**
     * Setup an event handler for what to do when an image has been
     * selected.
     *
     * Since we're using the 'view' state when initializing
     * the file_frame, we need to make sure that the handler is attached
     * to the insert event.
     */
    file_frame.on('insert', function() {

        var length = file_frame.state().get("selection").length;
        var images = file_frame.state().get("selection").models

        for(var iii = 0; iii < length; iii++)
        {
            var image_url = images[iii].changed.url;
            var image_caption = images[iii].changed.caption;
            var image_title = images[iii].changed.title;

            console.log(image_url +'\n'+image_caption +'\n'+image_title +'\n');
        }

        // Read the JSON data returned from the Media Uploader
        json = file_frame.state().get('selection').first().toJSON();

        // First, make sure that we have the URL of an image to display
        if (0 > $.trim(json.url.length)) {

            return;
        }

        //use only tuhmbnail for faster loading
        var imgSrcFileName, fileExtension;

        //get imgSrcFileName of the image
        imgSrcFileName = json.url;

        //get extension
        fileExtension = imgSrcFileName.split('.').pop();

        //add thumbnail sizes
        imgSrcFileName = imgSrcFileName.replace('.' + fileExtension, '-' + thumbnailSizeW + 'x' + thumbnailSizeH + '.' + fileExtension);

        //remove whitespaces
        imgSrcFileName = imgSrcFileName.replace(/\s/g, '');
        console.log(imgSrcFileName);
         console.log(json.alt);
         console.log(json.title);
         console.log(json.caption);

        //now assign the new thumbnail imgSrcFileName

        // After that, set the properties of the image and display it
        $('.item-active .slider-img')
            .children('img')
            .attr('src', imgSrcFileName)
            .attr('alt', json.alt)
            .attr('title', json.title);

        /* Next, hide the anchor responsible for allowing the user to select an image
        *$('.item-active #featured-footer-image-container')
        *     .prev()
        *    .hide();
        */    

        // Store the image's information into the meta data fields
        if (json.url != '') {

            $('.item-active #slider-img-src').val(json.url);
            //for thumbnail
            $('.item-active #slider-img-srcT').val(imgSrcFileName);
        }

        if (json.title != '') {
            $('.item-active #slider-img-title').val(json.title);
        } else {
            $('.item-active #slider-img-title').val('Add Image Title');
        }

        if (json.alt != '') {
            $('.item-active #slider-img-alt').val(json.alt);
        } else {
            $('.item-active #slider-img-alt').val('Add Image Alt');
        }

        if (json.caption != '') {
            $('.item-active #slider-img-caption').text(json.caption);
        } else {
            $('.item-active #slider-img-caption').text('Add Image caption');
        }

        //add some url
        $('.item-active #slider-img-url').val("#");

        /* Display the anchor for the removing the featured image
        *$('.item-active #featured-footer-image-container')
        *    .next()
        *   .show();
        */


        $('.item-active #set-slide-thumbnail').removeClass('upload-active');
        $('.item-active input#set-slide-thumbnail').hide();
        $('.item-active .row-actions').removeClass('hidden');
        
        $('.item-active #set-image').prev('img').removeClass('hidden');
        $('.item-active #set-image').hide();
        
        $('.item-active').removeClass('item-active');

        //alert(json.url +'\n'+json.caption+'\n'+json.title);

        //show hidden action buttons
        $('#major-publishing-actions, #publish').removeClass('hidden');

        

    });

    // Now display the actual file_frame
    file_frame.open();
}

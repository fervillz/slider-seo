function renderFeaturedImage($) {

    /* If a thumbnail URL has been associated with this image
     * Then we need to display the image and the reset link.
     */
    if ('' !== $.trim($('#footer-thumbnail-src').val())) {


        $('#featured-footer-image-container').removeClass('hidden');

        $('#set-footer-thumbnail')
            .removeClass('upload-actives');


        $('#set-footer-thumbnail')
            .parent()
            .hide();

        $('#remove-footer-thumbnail')
            .parent()
            .removeClass('hidden');

    }
}
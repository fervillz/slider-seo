function createSliderHiddenInputs($) {

    iSliderItemCount = $('.slider-wrapper').children().length;


    // Next, create the actual input element and then return it to the caller
    $inputElementSrc =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'footer-thumbnail-src[' + iSliderItemCount + ']')
        .attr('id', 'footer-thumbnail-src')
        .attr('value', '')
        .attr('type', 'hidden');

    $inputElementTitle =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'footer-thumbnail-title[' + iSliderItemCount + ']')
        .attr('id', 'footer-thumbnail-title')
        .attr('value', '')
        .attr('type', 'hidden');

    $inputElementAlt =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'footer-thumbnail-alt[' + iSliderItemCount + ']')
        .attr('id', 'footer-thumbnail-alt')
        .attr('value', '')
        .attr('type', 'hidden');

    	//create hidden info for thumbnail src
    $inputElementSrcT =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'footer-thumbnail-srcT[' + iSliderItemCount + ']')
        .attr('id', 'footer-thumbnail-srcT')
        .attr('value', '')
        .attr('type', 'text');

    return $inputElementSrc.add($inputElementSrcT).add($inputElementTitle).add($inputElementAlt);
}
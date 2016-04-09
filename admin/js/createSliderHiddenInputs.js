function createSliderHiddenInputs($) {

    iSliderItemCount = $('.slider-body').children('tr').length;


    // Next, create the actual input element and then return it to the caller
    $inputElementSrc =
        $('input#slider-img-src')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-src[' + iSliderItemCount + ']');

    $inputElementTitle =
        $('input#slider-img-title')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-title[' + iSliderItemCount + ']');

    $inputElementAlt =
        $('input#slider-img-alt')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-alt[' + iSliderItemCount + ']');

    //create hidden info for thumbnail src
    $inputElementSrcT =
        $('input#slider-img-srcT')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-srcT[' + iSliderItemCount + ']')
        .attr('id', 'slider-img-srcT')
        .attr('value', '')
        .attr('type', 'hidden');

    //create hidden info for thumbnail src
    $inputElementUrl =
        $('input#slider-img-url')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-url[' + iSliderItemCount + ']');

    //caption
    $inputElementCaption =
        $('textarea#slider-img-caption')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-caption[' + iSliderItemCount + ']');

    return $inputElementSrc
        .add($inputElementSrcT)
        .add($inputElementTitle)
        .add($inputElementAlt)
        .add($inputElementCaption)
        .add($inputElementUrl);
}
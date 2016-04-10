function createSliderHiddenInputs($) {

    iSliderItemCount = $('.slider-body').children('tr').length;


    // Next, create the actual input element and then return it to the caller
    $inputElementSrc =
        $('.slide-'+iSliderItemCount+' input#slider-img-src')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-src[' + iSliderItemCount + ']');

    $inputElementTitle =
        $('.slide-'+iSliderItemCount+' input#slider-img-title')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-title[' + iSliderItemCount + ']');

    $inputElementAlt =
        $('.slide-'+iSliderItemCount+' input#slider-img-alt')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-alt[' + iSliderItemCount + ']');

    //create hidden info for thumbnail src
    $inputElementSrcT =
        $('.slide-'+iSliderItemCount+' input#slider-img-srcT')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-srcT[' + iSliderItemCount + ']')
        .attr('id', 'slider-img-srcT')
        .attr('value', '')
        .attr('type', 'hidden');

    //create hidden info for thumbnail src
    $inputElementUrl =
        $('.slide-'+iSliderItemCount+' input#slider-img-url')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-url[' + iSliderItemCount + ']');

    //caption
    $inputElementCaption =
        $('.slide-'+iSliderItemCount+' textarea#slider-img-caption')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-caption[' + iSliderItemCount + ']');

    return $inputElementSrc
        .add($inputElementSrcT)
        .add($inputElementTitle)
        .add($inputElementAlt)
        .add($inputElementCaption)
        .add($inputElementUrl);
}
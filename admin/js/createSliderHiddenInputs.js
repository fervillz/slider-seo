function createSliderHiddenInputs($) {

    iSliderItemCount = $('.slider-wrapper').children().length;


    // Next, create the actual input element and then return it to the caller
    $inputElementSrc =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-src[' + iSliderItemCount + ']')
        .attr('id', 'slider-img-src')
        .attr('value', '')
        .attr('type', 'hidden');

    $inputElementTitle =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-title[' + iSliderItemCount + ']')
        .attr('id', 'slider-img-title')
        .attr('value', '')
        .attr('type', 'text');

    $inputElementAlt =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-alt[' + iSliderItemCount + ']')
        .attr('id', 'slider-img-alt')
        .attr('value', '')
        .attr('type', 'text');

    	//create hidden info for thumbnail src
    $inputElementSrcT =
        $('<input />')
        //.attr( 'type', 'hidden' )
        .attr('name', 'slider-img-srcT[' + iSliderItemCount + ']')
        .attr('id', 'slider-img-srcT')
        .attr('value', '')
        .attr('type', 'hidden');

    return $inputElementSrc
        .add($inputElementSrcT)
        .add($inputElementTitle)
        .add($inputElementAlt);
}
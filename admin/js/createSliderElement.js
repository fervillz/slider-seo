function createSliderElement($) {

    var $inputElement, iInputCount;

    /* First, count the number of input fields that already exist. This is how we're going to
     * implement the name and ID attributes of the element.
     */
    iInputCount = $('slider-wrapper').children().length;
    iInputCount++;

    // Next, create the actual input element and then return it to the caller
    $inputElement =
        $('<input />')
        .attr('type', 'text')
        .attr('name', 'authors-commentary-resources[' + iInputCount + ']')
        .attr('id', 'authors-commentary-resource-' + iInputCount)
        .attr('value', '');

    return $inputElement;

}
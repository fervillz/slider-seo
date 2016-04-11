<?php 

//Enqueues all scripts, styles, settings, and templates necessary to use all media JavaScript APIs.
wp_enqueue_media();

//Enqueue the rendermediaupload.js script
wp_enqueue_script('renderMediaUploader',slider_SEO_URL . 'js/renderMediaUploader.js',array( 'jquery' ),$this->version,true);

//Enqueue resetUploadForm
wp_enqueue_script('resetUploadForm',slider_SEO_URL . 'js/resetUploadForm.js',array( 'jquery' ),$this->version,true);

//Enqueue deleteSliderItem
wp_enqueue_script('deleteSliderItem',slider_SEO_URL . 'js/deleteSliderItem.js',array( 'jquery' ),$this->version,true);

//Enqueue mediaModalClose
wp_enqueue_script('mediaModalClose',slider_SEO_URL . 'js/mediaModalClose.js',array( 'jquery' ),$this->version,true);

//Enqueue mediaModalClose
wp_enqueue_script('createDivContainer',slider_SEO_URL . 'js/createDivContainer.js',array( 'jquery' ),$this->version,true);

//Enqueue mediaModalClose
wp_enqueue_script('createSliderElement',slider_SEO_URL . 'js/createSliderElement.js',array( 'jquery' ),$this->version,true);

//Enqueue mediaModalClose
wp_enqueue_script('removePaddingInside',slider_SEO_URL . 'js/removePaddingInside.js',array( 'jquery' ),$this->version,true);

//Enqueue mediaModalClose
wp_enqueue_script('renderFeaturedImage',slider_SEO_URL . 'js/renderFeaturedImage.js',array( 'jquery' ),$this->version,true);

//Enqueue createSliderHiddenInputs
wp_enqueue_script('createSliderHiddenInputs',slider_SEO_URL . 'js/createSliderHiddenInputs.js',array( 'jquery' ),$this->version,true);

//slider plugin sub script
wp_enqueue_script( 'slider-sub-script', slider_SEO_URL . 'js/sliderSeo.js', array( 'jquery' ), '1.0', true  );

//Enqueue the admin.js script
wp_enqueue_script(

	//Name of the script.
	'admin',

	//Path to the script from the root directory of WordPress.
	slider_SEO_URL . 'js/admin.js',

	//An array of registered handles this script
	array( 'jquery' ),

	//script version number
	$this->version,

	//enqueue the script before </body>
	true

	);

?>


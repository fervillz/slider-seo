<?php 


//slider own css
wp_enqueue_style( 'slider-seo-style', slider_SEO_URL . 'css/slider_seo_style.css' );

//slider css
wp_enqueue_style( 'slider-seo-owl-style', slider_SEO_URL . 'css/owl.carousel.css' );

//animate css
wp_enqueue_style( 'slider-seo-owldefault-style', slider_SEO_URL . 'css/owl.theme.default.min.css' );

//animate css
wp_enqueue_style( 'slider-seo-animate-style', slider_SEO_URL . 'css/animate.css' );

//Enqueue the frontend js
wp_enqueue_script('slider_seo_frontjs',slider_SEO_URL . 'js/frontend.js',array( 'jquery' ),$this->version,true);


//Enqueue the frontend js
wp_enqueue_script('slider_seo_owl_frontjs',slider_SEO_URL . 'js/owl.carousel.js',array( 'jquery' ),$this->version,true);

?>


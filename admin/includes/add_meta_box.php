<?php 

//Meta file

$screens = array( 'slider_seo' );
 
        foreach ( $screens as $screen ) {
 
            add_meta_box(
                'slider_seo_slides',
                __( 'Click "Add Slide" to add new slider', 'slider-seo'),
                array( $this, 'display_main_metabox' ),
                $screen,
                'normal',
                'high'
            );
        };

        foreach ( $screens as $screen ) {
 
            add_meta_box(
                'slider_seo_animation',
                __( 'General Settings', 'slider-seo'),
                array( $this, 'display_main_metabox_gsettings' ),
                $screen,
                'side',
                'high'
            );
        };

        foreach ( $screens as $screen ) {
 
            add_meta_box(
                'slider_seo_shortcode',
                __( 'How to Use', 'slider-seo'),
                array( $this, 'display_main_metabox_shortcode' ),
                $screen,
                'side',
                'high'
            );
        };

?>
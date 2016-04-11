<?php 

//Meta file

$screens = array( 'slider_seo' );
 
        foreach ( $screens as $screen ) {
 
            add_meta_box(
                'slider_seo_slides',
                'Click "Add Slide" to add new slider',
                array( $this, 'display_main_metabox' ),
                $screen,
                'advanced'
            );
        };

        foreach ( $screens as $screen ) {
 
            add_meta_box(
                'slider_seo_animation',
                'General Settings',
                array( $this, 'display_main_metabox_gsettings' ),
                $screen,
                'side'
            );
        };

        foreach ( $screens as $screen ) {
 
            add_meta_box(
                'slider_seo_shortcode',
                'How to Use',
                array( $this, 'display_main_metabox_shortcode' ),
                $screen,
                'side'
            );
        };

?>
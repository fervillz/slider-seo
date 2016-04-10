<?php 

//Meta file

$screens = array( 'slider_seo' );
 
        foreach ( $screens as $screen ) {
 
            add_meta_box(
                $this->name,
                'How to Use',
                array( $this, 'display_shortcode_metabox' ),
                $screen,
                'side'
            );
        }
?>
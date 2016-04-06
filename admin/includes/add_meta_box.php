<?php 

//Meta file

$screens = array( 'post', 'page' );
 
        foreach ( $screens as $screen ) {
 
            add_meta_box(
                $this->name,
                'click "Add Slide" to add new slider',
                array( $this, 'display_featured_footer_image' ),
                $screen,
                'advanced'
            );
        }

?>
<?php

add_image_size( 'grid_thumbnail', 250, 250, true );
add_image_size( 'single', 200, 200, false );
add_image_size( 'background', 1000, 900, true );


wp_get_attachment_image( 321, 'my-custom-imageversion' );

add_theme_support('post-thumbnails');

the_post_thumbnail( 'desktop_grid' );

?>
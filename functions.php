<?php
add_theme_support( 'post-formats', array( 'image', 'gallery' ) );
add_theme_support( 'post-thumbnails', array( 'post' ) ); 
add_theme_support( 'title-tag' );


add_theme_support( 'custom-background' );
//include ('includes/menu.php');
include ('includes/postType.php');
include ('includes/taxonomy.php');
include ('includes/media-sizes.php');
include ('includes/widget.php');

?>
<?php
function create_project_type() {
  $labels = array(
    'name'                       => _x( 'project_type', 'Taxonomy General Name', 'portfolio-theme' ),
    'object_type'                => __( 'project' ),
    'singular_name'              => _x( 'Project type', 'Taxonomy Singular Name', 'portfolio-theme' ),
    'menu_name'                  => __( 'Project types', 'portfolio-theme' ),
    'all_items'                  => __( 'All types', 'portfolio-theme' ),
    'new_item_name'              => __( 'New Type Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project Type', 'portfolio-theme' ),
    'edit_item'                  => __( 'Edit Project Type', 'portfolio-theme' ),
    'update_item'                => __( 'Update Project Type', 'portfolio-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Types', 'portfolio-theme' ),
    'popular_items'              => __( 'Popular Types', 'portfolio-theme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-type',
  );
  register_taxonomy( 'project-type', array('project'), $args );
}


add_action( 'init', 'create_project_type' );

function create_project_skill() {
  $labels = array(
    'name'                       => _x( 'project_skills', 'Taxonomy General Name', 'portfolio-theme' ),
    'object_type'                => __( 'project' ),
    'singular_name'              => _x( 'Project skill', 'Taxonomy Singular Name', 'portfolio-theme' ),
    'menu_name'                  => __( 'Project skills', 'portfolio-theme' ),
    'all_items'                  => __( 'All types', 'portfolio-theme' ),
    'new_item_name'              => __( 'New Type Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project skill', 'portfolio-theme' ),
    'edit_item'                  => __( 'Edit Project skill', 'portfolio-theme' ),
    'update_item'                => __( 'Update Project skill', 'portfolio-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Skills', 'portfolio-theme' ),
    'popular_items'              => __( 'Popular Skills', 'portfolio-theme' ),
    );
    $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-skill',
  );
  register_taxonomy( 'project-skill', array('project'), $args );
}


add_action( 'init', 'create_project_skill' );

function shape_register_custom_background() {
    $args = array(
        'default-color' => 'e9e0d1',
    );
 
    $args = apply_filters( 'shape_custom_background_args', $args );
 
    if ( function_exists( 'wp_get_theme' ) ) {
        add_theme_support( 'custom-background', $args );
    } else {
        define( 'BACKGROUND_COLOR', $args['default-color'] );
        define( 'BACKGROUND_IMAGE', $args['default-image'] );
        add_custom_background();
    }
}
add_action( 'after_setup_theme', 'shape_register_custom_background' );
 

  
/*
 * Adds the custom header option to the theme
 */
function addthemeoptions(){
    //Default values of the header image
    $header_defaults = array(
    'default-image'          => '%s/images/header.png',
    'random-default'         => false,
    'flex-height'            => false,
    'flex-width'             => false,
    'default-text-color'     => '',
    'header-text'            => false,
    'uploads'                => true,
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
    //Adds the support to use custom header images
    add_theme_support( 'custom-header', $header_defaults );

    $background_defaults = array(
    'default-color'          => '#FFFFFF',
    'default-image'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);

}

//Execute our custom theme functionality
add_action( 'after_setup_theme', 'addthemeoptions' );




?>


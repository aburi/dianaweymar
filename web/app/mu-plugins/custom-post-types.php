<?php
///**
// * Plugin Name: Gallery
// * Plugin URI:
// * Description: Custom post types for gallery pieces.
// * Version: 0.0.0
// * Author: Alex Buri
// * Author URI: https://alexburi.com
// * License: MIT License
// */
//
//add_action( 'init', 'dw_gallery_register_post_types' );
//function dw_gallery_register_post_types() {
//
//  /* Register the gallery Piece post type. */
//
//  register_post_type(
//    'dw_project',
//    array(
//      'description'         => 'Pages for displaying your work.',
//      'public'              => true,
//      'publicly_queryable'  => true,
//      'show_in_nav_menus'   => true,
//      'show_in_admin_bar'   => true,
//      'exclude_from_search' => false,
//      'show_ui'             => true,
//      'show_in_menu'        => true,
//      'menu_position'       => 12,
//      'menu_icon'           => 'dashicons-portfolio',
//      'can_export'          => true,
//      'delete_with_user'    => false,
//      'hierarchical'        => false,
//      'has_archive'         => 'gallery',
//      'query_var'           => 'dw_project',
//      'map_meta_cap'        => true,
//
//      /* Capabilities. */
//      'capability_type' => 'page',
//
//      /* The rewrite handles the URL structure. */
//      'rewrite' => array(
//        'slug'       => 'gallery',
//        'with_front' => false,
//        'pages'      => true,
//        'feeds'      => true,
//        'ep_mask'    => EP_PERMALINK,
//      ),
//
//      /* What features the post type supports. */
//      'supports' => array(
//        'title',
//        'editor',
//        'excerpt',
//        'thumbnail'
//      ),
//
//      /* Labels used when displaying the posts. */
//      'labels' => array(
//        'name'               => __( 'Projects',                   'example-textdomain' ),
//        'singular_name'      => __( 'Project',                    'example-textdomain' ),
//        'menu_name'          => __( 'Gallery',                  'example-textdomain' ),
//        'name_admin_bar'     => __( 'Gallery Project',             'example-textdomain' ),
//        'add_new'            => __( 'Add New',                    'example-textdomain' ),
//        'add_new_item'       => __( 'Add New Project',            'example-textdomain' ),
//        'edit_item'          => __( 'Edit Project',               'example-textdomain' ),
//        'new_item'           => __( 'New Project',                'example-textdomain' ),
//        'view_item'          => __( 'View Project',               'example-textdomain' ),
//        'search_items'       => __( 'Search Projects',            'example-textdomain' ),
//        'not_found'          => __( 'No projects found',          'example-textdomain' ),
//        'not_found_in_trash' => __( 'No projects found in trash', 'example-textdomain' ),
//        'all_items'          => __( 'Projects',                   'example-textdomain' ),
//      )
//    )
//  );
//}
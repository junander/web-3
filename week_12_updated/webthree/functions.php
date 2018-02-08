<?php

/**
 * Functions Library
 */

/**
 * The proper way to add stylesheets or javascript files to a WordPress theme is via the enqueue system
 * Learn more: http://code.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins--wp-24321
 */
function web3_enqueues() {

    /**
     * I'm registereing and enqueuing my custom stylesheet
     * get_stylesheet_directory_uri() points to the theme folder
     */
    wp_register_style('style-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('style-child');
}

add_action('wp_enqueue_scripts', 'web3_enqueues', 20);
add_theme_support( 'post-thumbnails' ); 

// This theme uses wp_nav_menu() in one location.
register_nav_menus(array('primary' => 'Primary Navigation',
'footer' => 'Footer Navigation','bonus' => 'Bonus Navigation'));

register_sidebar(array(
  'name' => __( 'right Hand Sidebar' ),
  'id' => 'rightsidebarwidgetarea',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));

/**
* Custom post types
*
*/

// Register Custom Post Type
function web3_create_comic_post_type() {

	$labels = array(
		'name'                  => _x( 'Comics', 'Post Type General Name', 'web3' ),
		'singular_name'         => _x( 'Comic', 'Post Type Singular Name', 'web3' ),
		'menu_name'             => __( 'Comics', 'web3' ),
		'name_admin_bar'        => __( 'Comic', 'web3' ),
		'archives'              => __( 'Comic Archives', 'web3' ),
		'attributes'            => __( 'Item Attributes', 'web3' ),
		'parent_item_colon'     => __( 'Parent Comic:', 'web3' ),
		'all_items'             => __( 'All Items', 'web3' ),
		'add_new_item'          => __( 'Add New Item', 'web3' ),
		'add_new'               => __( 'Add Comic', 'web3' ),
		'new_item'              => __( 'New Comic', 'web3' ),
		'edit_item'             => __( 'Edit Item', 'web3' ),
		'update_item'           => __( 'Update Item', 'web3' ),
		'view_item'             => __( 'View Item', 'web3' ),
		'view_items'            => __( 'View Items', 'web3' ),
		'search_items'          => __( 'Search Item', 'web3' ),
		'not_found'             => __( 'Not found', 'web3' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'web3' ),
		'featured_image'        => __( 'Featured Image', 'web3' ),
		'set_featured_image'    => __( 'Set featured image', 'web3' ),
		'remove_featured_image' => __( 'Remove featured image', 'web3' ),
		'use_featured_image'    => __( 'Use as featured image', 'web3' ),
		'insert_into_item'      => __( 'Insert into item', 'web3' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'web3' ),
		'items_list'            => __( 'Items list', 'web3' ),
		'items_list_navigation' => __( 'Items list navigation', 'web3' ),
		'filter_items_list'     => __( 'Filter items list', 'web3' ),
	);
	$args = array(
		'label'                 => __( 'Comic', 'web3' ),
		'description'           => __( 'For my comics', 'web3' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'comic', $args );

}
add_action( 'init', 'web3_create_comic_post_type', 0 );

// Register Custom Post Type
function web3_create_movie_post_type() {

	$labels = array(
		'name'                  => _x( 'Movies', 'Post Type General Name', 'web3' ),
		'singular_name'         => _x( 'Movie', 'Post Type Singular Name', 'web3' ),
		'menu_name'             => __( 'Movies', 'web3' ),
		'name_admin_bar'        => __( 'Movie', 'web3' ),
		'archives'              => __( 'Item Archives', 'web3' ),
		'attributes'            => __( 'Item Attributes', 'web3' ),
		'parent_item_colon'     => __( 'Parent Item:', 'web3' ),
		'all_items'             => __( 'All Items', 'web3' ),
		'add_new_item'          => __( 'Add New Item', 'web3' ),
		'add_new'               => __( 'Add New', 'web3' ),
		'new_item'              => __( 'New Item', 'web3' ),
		'edit_item'             => __( 'Edit Item', 'web3' ),
		'update_item'           => __( 'Update Item', 'web3' ),
		'view_item'             => __( 'View Item', 'web3' ),
		'view_items'            => __( 'View Items', 'web3' ),
		'search_items'          => __( 'Search Item', 'web3' ),
		'not_found'             => __( 'Not found', 'web3' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'web3' ),
		'featured_image'        => __( 'Featured Image', 'web3' ),
		'set_featured_image'    => __( 'Set featured image', 'web3' ),
		'remove_featured_image' => __( 'Remove featured image', 'web3' ),
		'use_featured_image'    => __( 'Use as featured image', 'web3' ),
		'insert_into_item'      => __( 'Insert into item', 'web3' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'web3' ),
		'items_list'            => __( 'Items list', 'web3' ),
		'items_list_navigation' => __( 'Items list navigation', 'web3' ),
		'filter_items_list'     => __( 'Filter items list', 'web3' ),
	);
	$args = array(
		'label'                 => __( 'Movie', 'web3' ),
		'description'           => __( 'A place for my movies', 'web3' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'movie', $args );

}
add_action( 'init', 'web3_create_movie_post_type', 0 );

// Register Custom Taxonomy
function web3_create_genre_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Genres', 'Taxonomy General Name', 'web3' ),
		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'web3' ),
		'menu_name'                  => __( 'Genres', 'web3' ),
		'all_items'                  => __( 'All Items', 'web3' ),
		'parent_item'                => __( 'Parent Item', 'web3' ),
		'parent_item_colon'          => __( 'Parent Item:', 'web3' ),
		'new_item_name'              => __( 'New Item Name', 'web3' ),
		'add_new_item'               => __( 'Add New Item', 'web3' ),
		'edit_item'                  => __( 'Edit Item', 'web3' ),
		'update_item'                => __( 'Update Item', 'web3' ),
		'view_item'                  => __( 'View Item', 'web3' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'web3' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'web3' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'web3' ),
		'popular_items'              => __( 'Popular Items', 'web3' ),
		'search_items'               => __( 'Search Items', 'web3' ),
		'not_found'                  => __( 'Not Found', 'web3' ),
		'no_terms'                   => __( 'No items', 'web3' ),
		'items_list'                 => __( 'Items list', 'web3' ),
		'items_list_navigation'      => __( 'Items list navigation', 'web3' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'genre', array( 'movie' ), $args );

}
add_action( 'init', 'web3_create_genre_taxonomy', 0 );
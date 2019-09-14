<?php

/**
 * Functions Library
 */

/**
* Add support for featured images
*/
add_theme_support( 'post-thumbnails' );

/**
* Add a main menu
*/

register_nav_menus( array(
	'main' => 'Main Menu',
    'footer' => 'Menu Footer',
) );

/**
 * The proper way to add stylesheets or javascript files to a WordPress theme is via the enqueue system
 * Learn more: http://code.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins--wp-24321
 */
function web3_enqueues()
{

    /**Bootstrap CSS */
    wp_register_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('bootstrap-css');

    /**
     * I'm registering and enqueuing my custom stylesheet
     * get_stylesheet_directory_uri() points to the theme folder
     */
    wp_register_style('style-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('style-child');

    /**
     * Here I'm registering and enqueuing some Javascript dependencies
     */
    wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.12.9', true);
    wp_enqueue_script('popper-js');
    wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery', 'popper'), '4.0.0', true);

}

add_action('wp_enqueue_scripts', 'web3_enqueues', 20);

register_sidebar(array(
  'name' => __( 'left Hand Sidebar' ),
  'id' => 'leftsidebarwidgetarea',
  'description' => __( 'Widgets in this area will be shown on the left-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));

register_sidebar(array(
  'name' => __( 'right Hand Sidebar' ),
  'id' => 'rightsidebarwidgetarea',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));

// Register Custom Post Type - used https://generatewp.com/post-type/
function web3_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'books', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Books', 'text_domain' ),
		'name_admin_bar'        => __( 'Books', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Book', 'text_domain' ),
		'description'           => __( 'This is a book', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'genre', ' post_tag' ),
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
	register_post_type( 'books', $args );

}
add_action( 'init', 'web3_custom_post_type', 0 );

// Register Custom Taxonomy - Genres
function web3_register_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Genres', 'Taxonomy General Name', 'web3' ),
		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'web3' ),
		'menu_name'                  => __( 'Genre', 'web3' ),
		'all_items'                  => __( 'All Genres', 'web3' ),
		'parent_item'                => __( 'Parent Genre', 'web3' ),
		'parent_item_colon'          => __( 'Parent Genre:', 'web3' ),
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
	register_taxonomy( 'genre', array( 'books','post'), $args );
}
add_action( 'init', 'web3_register_custom_taxonomy', 0 );
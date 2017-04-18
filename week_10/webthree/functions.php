<?php

/**
 * Functions Library
 */
register_nav_menus(array('primary' => 'Primary Navigation'));

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

/**
 * Adds support for featured images
 */
add_theme_support('post-thumbnails');

/**
 * Registering our widget holders
 * @see https://developer.wordpress.org/reference/functions/register_sidebar/
 * @see footer.php and front-page.php for implementing these widget holders in a template
 */
function web3_widgets_init() {

    $args = array(
        'name' => __('Fancy Sidebar', 'web3'),
        'id' => 'web3-fancy-sidebar',
        'description' => 'This is a fancy sidebar.',
    );

    register_sidebar($args);

    $args = array(
        'name' => __('Fancy Footer', 'web3'),
        'id' => 'web3-fancy-footer',
        'description' => 'This is a fancy footer.',
    );

    register_sidebar($args);
}

add_action('widgets_init', 'web3_widgets_init');

/**
 * Registering a custom taxonomy
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @see https://generatewp.com/taxonomy/
 */
function web3_custom_taxonomy() {

    $labels = array(
        'name' => _x('Brands', 'Taxonomy General Name', 'web3'),
        'singular_name' => _x('Brand', 'Taxonomy Singular Name', 'web3'),
        'menu_name' => __('Brands', 'web3'),
        'all_items' => __('All Brands', 'web3'),
        'parent_item' => __('Parent Brand', 'web3'),
        'parent_item_colon' => __('Parent Brand:', 'web3'),
        'new_item_name' => __('New Brand Name', 'web3'),
        'add_new_item' => __('Add New Brand', 'web3'),
        'edit_item' => __('Edit Brand', 'web3'),
        'update_item' => __('Update Brand', 'web3'),
        'view_item' => __('View Brand', 'web3'),
        'separate_items_with_commas' => __('Separate brands with commas', 'web3'),
        'add_or_remove_items' => __('Add or remove brands', 'web3'),
        'choose_from_most_used' => __('Choose from the most used', 'web3'),
        'popular_items' => __('Popular Brands', 'web3'),
        'search_items' => __('Search Brands', 'web3'),
        'not_found' => __('Not Found', 'web3'),
        'no_terms' => __('No brands', 'web3'),
        'items_list' => __('Brands list', 'web3'),
        'items_list_navigation' => __('Brands list navigation', 'web3'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('brand', array('post'), $args);
}

add_action('init', 'web3_custom_taxonomy', 0);

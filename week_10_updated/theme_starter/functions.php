<?php

/**
 * Functions Library
 */

/**
 * The proper way to add stylesheets or javascript files to a WordPress theme is via the enqueue system
 * Learn more: http://code.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins--wp-24321
 */
function web3_enqueues()
{

    /**Bootstrap CSS */
    wp_register_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.0.0', 'all');
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
    wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.12.9', true);
    wp_enqueue_script('popper-js');
    wp_register_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.0.0', true);
    wp_enqueue_script('bootstrap-js');

}

add_action('wp_enqueue_scripts', 'web3_enqueues', 20);

//adding featured image support
add_theme_support('post-thumbnails');

//setting up our custom menus
 register_nav_menus(array(
     'main' => __('Main Menu', 'web3'),
     'footer' => __('Footer Menu', 'web3')
 ));

//the following two functions are for the Bootstrap classes on the nav menu

/**
* Adds a custom class to the individual nav menu item (<li>)
* @filter: nav_menu_css_class
*/
function web3_nav_menu_css_class($classes, $item, $args, $depth)
{

     $classes[] = 'nav-item';

     return $classes;
}

add_filter('nav_menu_css_class', 'web3_nav_menu_css_class', 10, 4);

/**
* Adds a custom class to the menu link inside the menu item
* @filter: nav_menu_link_attributes
*/
function web3_nav_menu_link_attributes($atts, $item, $args, $depth){

     $atts['class'] = 'nav-link';

     return $atts;
}

add_filter('nav_menu_link_attributes', 'web3_nav_menu_link_attributes', 10, 4);

//end filters for Bootstrap nav

/**
* Register custom sidebars (widget holders)
*/
 $sidebar_args = array(
     'name' => __('Main Sidebar', 'web3'),
     'id' => 'main_sidebar',
     'description' => __('The main sidebar for my site', 'web3'),
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>',
 );

 register_sidebar($sidebar_args);

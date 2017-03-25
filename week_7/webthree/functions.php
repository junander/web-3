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

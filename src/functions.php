<?php
/**
 * Enqueue Scripts & Stylesheets
 */

function theme_name_scripts() {
    wp_enqueue_script( 'theme-name-script', get_template_directory_uri() . '/script.js', array(), false, false );
    wp_enqueue_style( 'theme-name-stylesheet', get_stylesheet_uri(), array(), false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

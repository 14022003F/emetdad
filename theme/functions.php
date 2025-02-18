<?php
/**
 *
 * @Packge      acadu
 * @Author      Angfuzsoft
 * @Author URL  #
 * @version     1.0
 *
 */

/**
 * Enqueue style of child theme
 */
function acadu_child_enqueue_styles() {

    wp_enqueue_style( 'acadu-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'acadu-child-style', get_stylesheet_directory_uri() . '/style.css',array( 'acadu-style' ),wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'acadu_child_enqueue_styles', 100000 );
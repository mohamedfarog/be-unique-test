<?php


function my_theme_enqueue_scripts() {
    wp_enqueue_style( 'default-style', get_stylesheet_uri(), [], '1.0.0', 'all' ); //default styles.css
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/vendor/css/all.bootstrap.css', [], time(), 'all' );


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );


function add_be_unique_title(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-logo');

}
add_action('after_setup_theme', 'add_be_unique_title');

?>
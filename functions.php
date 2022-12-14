<?php
/* 
Theme:My theme

*/

function fn_theme_scripts(){
   //## implementacja głównego CSS'a
   wp_enqueue_style( 'main-stylesheet',get_stylesheet_uri( ), array(), rand(111,9999), 'all' );
   // ## dodajemy js'a
   wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action("wp_enqueue_scripts","fn_theme_scripts");

function fn_theme_supports(){
    // dodanie tagu title do head
    add_theme_support('title-tag');
    // img for admin panel-posts
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array('search-form'));
    // mozliwosc zmiany logo (custom logo)
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','fn_theme_supports')
?>
<?php
/* 
Theme:My theme

*/

function fn_theme_scripts(){
    wp_enqueue_style('custom-style',get_stylesheet_uri());
    wp_enqueue_scripts('custom-scripts',get_template_directory_uri() . '/assets/js/main.js');
}
add_action("wp_enqueue_scripts","fn_theme_scripts");
?>
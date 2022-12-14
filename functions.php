<?php
/* 
Theme:My theme

*/
add_action("wp_enqueue_scripts","fn_theme_scripts");
function fn_theme_scripts(){
   //## implementacja głównego CSS'a
   wp_enqueue_style( 'main-stylesheet',get_stylesheet_uri( ), array(), rand(111,9999), 'all' );
   // ## dodajemy js'a
   wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js');

}



function fn_theme_supports(){
    // dodanie tagu title do head
    add_theme_support('title-tag');
    // img for admin panel-posts
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array('search-form'));
    // mozliwosc zmiany logo (custom logo)
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','fn_theme_supports');

//register nav menu
function fn_nav_menu(){
    register_nav_menus( array(
        'primary-menu'=>__('Primary Menu', 'text_domain'),
        'footer-menu'=>__('Footer Menu', 'text_domain')
    ) );

    // powyzszy kod rejestruje 2 panele menu, jeden o nazwie Primary Menu(bedzie wyswietlany w gornej czesci) i Footer Menu (bedzie wyswietlany w dolnej czesci), 
}
add_action('init', 'fn_nav_menu');
// funkcja dodajaca nazwy klas dla linków na stronie
function add_link_atts($atts){
    $atts['class'] = 'link text-light'; // dodanie do linkow kllasy link tex-light
    return $atts; //zwrocenie zmienionych linkow ($atts)
}
// wywolanie funkcji przez add_filter Nie add_action
add_filter('nav_menu_link_attributes', 'add_link_atts')
?>
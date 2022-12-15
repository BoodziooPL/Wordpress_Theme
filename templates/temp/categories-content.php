
<?php
/**
 * Thene Name: Add Categories
 * 
 * 
 */
// ustawienie zmiennej categories z tablica dostepnych kategor
$categories = get_categories( array(
    'orderby' => 'name',
    'parent' => 0
) );
//petla wyciagajaca pojedyncza kategorie z powyzszej tablicy i "printujaca" w tag a link oraz tekst z span
foreach($categories as $category){
    printf('<a href="%1$s" class="link"><span>%2$s</span></a>',
esc_url(get_category_link($category->term_id)),
esc_html($category->name));
};




?>
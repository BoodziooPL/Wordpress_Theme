<?php
// Theme Name: Wordpress customizer settings


// Ta funkcja dodaje nową sekcję o nazwie "about" do customizera w Wordpressie. Następnie dodaje trzy ustawienia dla tej sekcji o nazwach "Human Img1", "Human Img2" i "Human Img3". Każde ustawienie ma możliwość edycji przez użytkownika za pomocą customizera. Na końcu funkcja dodaje trzy kontrolki do customizera, które umożliwiają wyświetlenie obrazów dla każdego z ustawień w sekcji "about".

function fn_customizer_settings($wp_customizer){

    // dodanie nowej sekcji ustawien w panelu nazwa sekcji about, do niej odnosic sie bedziemy w ustawieniach oraz kontrolkach, natomiast nazwa wyswietlenia w panelu admina to "about Us"
    $wp_customizer->add_section('about',array(
        'title'=>__('about US'),
        'priority' => 30
    ));


// ustawienia dla kontrolek. 


    //ustawienie dla kontrolki title, opcja transport okresla jak ma byc aktualizowana wartosc po jej zmianie tutaj refresh inne to ajax lub postMessage
    // ustawienie capability okresla ktore grupy moga edytowac wartosc domyslnie editThemeOption, uprawnienie dla admina lub editora
    // wartosc default okresla wartosc początkową, po zmianie w kontrolce wartosc zostanie zastapiona.
    $wp_customizer->add_setting('title', array(
        'default' => 'We are a passionate of nature:',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
    ));
    
    //ustawienie dla kontrolki title, opcja transport okresla jak ma byc aktualizowana wartosc po jej zmianie tutaj refresh inne to ajax lub postMessage
    // ustawienie capability okresla ktore grupy moga edytowac wartosc domyslnie editThemeOption, uprawnienie dla admina lub editora
    // wartosc default okresla wartosc początkową, po zmianie w kontrolce wartosc zostanie zastapiona.
  
    $wp_customizer->add_setting('description', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eaque totam nihil quasi eligendi provident perspiciatis aliquid quia consequatur, illum labore excepturi exercitationem dolor possimus? Optio quam voluptatum placeat autem, aspernatur quisquam doloribus. Ad veniam cumque odit, expedita temporibus laborum.',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
    ));

    // Dodaje nowe Pole ustawienia dla sekcji about. W tym przypadku bedzie to pole dla zmiany img
    // przypisana kontrolka o nazwie Human Img1 pozwoli na zmiane zdjecia
    $wp_customizer->add_setting('Human Img1',array(
        'capability' => 'edit_theme_options'
    ));

    // dodanie nowego ustawienia dla sekcji about
    $wp_customizer->add_setting('Human Name1', array(
        'default' => 'Peter Wool',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
    ));
    
    // Dodaje nowe Pole ustawienia dla sekcji about. W tym przypadku bedzie to pole dla zmiany img
    // przypisana kontrolka o nazwie Human Img2 pozwoli na zmiane zdjecia
    $wp_customizer->add_setting('Human Img2',array(
        'capability' => 'edit_theme_options'
    ));
    // ustawienie do zmiany nazwy uzytkownika nr2
    $wp_customizer->add_setting('Human Name2', array(
        'default' => 'Peter Wool',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
    ));
    // Dodaje nowe Pole ustawienia dla sekcji about. W tym przypadku bedzie to pole dla zmiany img
    // przypisana kontrolka o nazwie Human Img3 pozwoli na zmiane zdjecia
    $wp_customizer->add_setting('Human Img3',array(
        'capability' => 'edit_theme_options'
    ));
    // ustawienie do zmiany podpisu uzytkownika nr3
    $wp_customizer->add_setting('Human Name3', array(
        'default' => 'Peter Wool',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
    ));



// dodanie  kontrolek dla powyzszych ustawien:

   
   
   
    // kontrolka dodajaca tytul sekcji about US
    $wp_customizer->add_control(new WP_Customize_Control($wp_customizer, 'title', array(
        'label' => __('title', 'text_domain'),
        'section' => 'about',
        'type' => 'text',
    )));
     // kontrolka dodajaca opis lorem etc... sekcji about US
    $wp_customizer->add_control(new WP_Customize_Control($wp_customizer, 'description', array(
        'label' => __('description', 'text_domain'),
        'section' => 'about',
        'type' => 'text',
    )));


    // kontrolka dodajaca mozliwosc dodania zdjecia dla osoby
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'Human Img1',array(
        'label'=>__('Human Image', 'text_domain'),
        'section'=>'about'
    )));
    // kontrolka dodajaca nazwe dla osoby
    // section oznacza w ktorej sekcji ma byc dodana
    $wp_customizer->add_control(new WP_Customize_Control($wp_customizer, 'Human Name1', array(
        'label' => __('Human Name1', 'text_domain'),
        'section' => 'about',
        'type' => 'text',
    )));
    // kontrolka dodajaca mozliwosc dodania zdjecia dla osoby
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'Human Img2',array(
        'label'=>__('Human Image2', 'text_domain'),
        'section'=>'about'
    )));
    // kontrolka dodajaca nazwe dla osoby
    // section oznacza w ktorej sekcji ma byc dodana
    $wp_customizer->add_control(new WP_Customize_Control($wp_customizer, 'Human Name2', array(
        'label' => __('Human Name2', 'text_domain'),
        'section' => 'about',
        'type' => 'text',
    )));
    // kontrolka dodajaca mozliwosc dodania zdjecia dla osoby
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'Human Img3',array(
        'label'=>__('Human Image3', 'text_domain'),
        'section'=>'about'
    )));
    // kontrolka dodajaca nazwe dla osoby
    // section oznacza w ktorej sekcji ma byc dodana
    $wp_customizer->add_control(new WP_Customize_Control($wp_customizer, 'Human Name3', array(
        'label' => __('Human Name3', 'text_domain'),
        'section' => 'about',
        'type' => 'text',
    )));

}

// dodanie akcji dla rejestracji ustawień customizera
add_action('customize_register', 'fn_customizer_settings');

?>

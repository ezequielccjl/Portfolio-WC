<?php 

function themeSupport(){
    //Seteo carpeta para lenguajes - NO ES NECESARIO
    load_theme_textdomain('test-wordpress', get_template_directory().'/lang');

    //Monstrar opción de agregado de imagenes en Wordpress
    add_theme_support('post-thumbnails');

    //Seteo de locations para menus dinamicos
    register_nav_menus(
        array(
            'main-menu' => 'Menu Primario'
        )
    );
    
}
add_action('after_setup_theme', 'themeSupport');

function scripts(){
    //Eliminamos estilos q no se usan
    wp_dequeue_style('wp-block-library');

    //Agregamos estilos
    wp_enqueue_style('theme-styles', get_theme_file_uri('/assets/styles.css'), null, filemtime(get_template_directory().'/assets/styles.css'));

    //Agregamos javascript
    wp_enqueue_script('theme-scripts', get_theme_file_uri('/assets/main.js'), null, filemtime(get_template_directory().'/assets/main.js'), true);
}

add_action('wp_enqueue_scripts', 'scripts');

?>
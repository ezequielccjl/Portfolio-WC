<?php
/**
 * Template Name: Home Page
 */
?>

<?php
get_header();
?>

<?php

    //Método get_template_part para imprimir modulo creado en carpeta
    get_template_part('template-parts/modules/module', 'navbar');
    get_template_part('template-parts/modules/module', 'hero');
    get_template_part('template-parts/modules/module', 'skills');
    get_template_part('template-parts/modules/module', 'footer');
?>
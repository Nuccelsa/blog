<?php

if(!function_exists('surlesroutes_setup')) 
{
    function surlesroutes_setup()
    {
        /* On génère le titre */
        add_theme_support('title-tag');

        /* On rend possible l'ajout de menus dans le BO */
        register_nav_menus([
            'main-nav' => 'Navigation principale (top)',
            'aside-nav' => 'Navigation secondaire (côté)'
        ]);

        /* On rend possible l'ajout de thumbnail */
        add_theme_support('post-thumbnails');
    }
}

add_action('after_setup_theme', 'surlesroutes_setup');

require get_theme_file_path('inc/scripts.php');
require get_theme_file_path('inc/theme-cleaner.php');
<?php

/* Déclaration des scripts */
if(!function_exists('surlesroutes_scripts'))
{
    function surlesroutes_scripts() 
    {
        wp_enqueue_style(
            'surlesroutes-vendor-css', // nom
            get_theme_file_uri('public/css/vendor.css'), // chemin
            [], // dépendances
            '0.0.1' // version
        );
        wp_enqueue_style(
            'surlesroutes-style-css',
            get_theme_file_uri('public/css/app.css'),
            [],
            '0.0.1'
        );
        wp_enqueue_script(
            'surlesroutes-vendor-js', // nom
            get_theme_file_uri('public/js/vendor.js'), // chemin
            [], // dépendances
            '0.0.1', // version
            true
        );
        wp_enqueue_script(
            'surlesroutes-style-js',
            get_theme_file_uri('public/js/app.js'),
            [],
            '0.0.1',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'surlesroutes_scripts');

<?php

/* Déclaration des styles */
if(!function_exists('surlesroutes_styles'))
{
    function surlesroutes_styles() 
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
    }
}
add_action('wp_enqueue_scripts', 'surlesroutes_styles');
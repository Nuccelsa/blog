<?php
// FONCTIONS ADDITIONNELLES


/**
 * Filter pour réduire la logneur de l'extrait à 15 mots.
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



/* Filter pour modifier les liens du menu de la front page pour ajouter une class au <a>*/
function addclass($class) {
    return str_replace('<a href=', '<a class="nav-link" href=', $class);
  }
  add_filter('wp_nav_menu', 'addclass');
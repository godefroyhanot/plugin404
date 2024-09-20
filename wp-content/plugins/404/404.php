<?php
/*
Plugin Name: Custom 404
Plugin URI: https://www.example.com
Description: Redirige les utilisateurs vers différents modèles de pages 404 personnalisés.
Version: 1.0
Author: Godefroy
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: custom-404-redirector
Domain Path: /languages
*/

// Hook pour intercepter les erreurs 404
add_action('template_redirect', 'custom_404_redirect');
add_action('pre_handle_404', 'custom_404_redirect');
add_action('init', 'custom_404_redirect');


function custom_404_redirect() {
    // die(is_404());
    if (is_404()) {
        // Tableau des différents modèles de pages 404
        $templates = array(
            plugins_url('templates/burning/404.html', __FILE__),
            plugins_url('templates/desert/404.html', __FILE__),
            plugins_url('templates/fireworks/404.html', __FILE__),
            plugins_url('templates/imposter/404.html', __FILE__),
            plugins_url('templates/matrix/404.html', __FILE__)
        );

        // Sélectionne un modèle aléatoire
        $random_template = $templates[array_rand($templates)];

        // Redirige vers le modèle de page 404 sélectionné
        wp_redirect($random_template);
        exit; // Arrête l'exécution après la redirection
    }
}
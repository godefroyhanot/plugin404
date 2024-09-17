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
add_filter('template_include', 'custom_404_template');

function custom_404_template($templates) {
    if (is_404()) {
        // Tableau des différents modèles de pages 404
        $templates = array(
            'https://tsparticles.github.io/404-templates/glitch/404.html',
            'https://tsparticles.github.io/404-templates/masked/404.html',
            'https://tsparticles.github.io/404-templates/jitter/404.html',
            'https://tsparticles.github.io/404-templates/imposter/404.html',
            'https://tsparticles.github.io/404-templates/playful/404.html'
        );

        // Sélectionne un modèle aléatoire
        $random_template = $templates[array_rand($templates)];

        // Affiche le modèle de page 404 sélectionné
        error_log('Selected 404 template: ' . $random_template);

        // Redirige vers le modèle de page 404 sélectionné
        wp_redirect($random_template);
        exit;
    }
}




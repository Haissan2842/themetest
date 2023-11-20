<?php

function create_custom_posts() {
    register_post_type('skills', [
        'labels' => ['name' => 'Compétences'],
        'public' => true,
        /*'show_in_rest' => true,*/
        /* chercher doc en ligne pour trouver toutes fonctions*/
    ]);

    register_post_type('langues', [
        'labels' => ['name' => 'Langues'],
        'public' => true,
    ]);

    register_post_type('loisirs', [
        'labels' => ['name' => 'Centres d\'inérêt'],
        'public' => true,
    ]);
}

add_action('init', 'create_custom_posts');

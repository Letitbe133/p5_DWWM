<?php

// on renvoie le code HTTP qui va bien
// en l'occurence c'est un 404 car si on arrive ici c'est que la route dans l'url ne correspond à aucun controller
http_response_code(404);

$data = [
    'title' => '404 - You\'re lost baby...',
    'heading' => 'Looks like you lost your way dude !',
];

// extract($data);

// ob_start();

// require_once 'views/404.view.php';

// $content = ob_get_clean();

// require_once 'views/base.view.php';

/**
 * Affiche la vue passée en argument avec les informations associées.
 *
 * @param string $view
 * @param array  $data / par défaut un tableau associatif vide
 */
function renderView($view, $data = [])
{
    extract($data);

    ob_start();

    require_once "views/{$view}.view.php";
    $content = ob_get_clean();

    // les variables ainsi que le contenu du buffer sont maintenant accessibles à notre template de base qui va pouvoir les afficher
    require_once 'views/base.view.php';
}

renderView('404', $data);

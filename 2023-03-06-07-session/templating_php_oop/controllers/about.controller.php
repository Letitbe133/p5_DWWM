<?php

$data = [
    'title' => 'About Us',
    'heading' => 'Wanna know more about us ? You\'re in the right place !',
];

// extract($data);

// ob_start();

// require_once 'views/about.view.php';
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

renderView('about', $data);

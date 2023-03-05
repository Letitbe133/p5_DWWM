<?php

// on renvoie le code HTTP 200 qui correspond à un succès
http_response_code(200);

// le tableau associatif des infos à passer à la vue
$data = [
    'title' => 'Welcome Home',
    'heading' => 'Welcome Aboard !',
];

// on extrait les infos du tableau sous la forme de variables dont le nom est la clé dans le tableau $data
// on aura donc $title et $heading
// extract($data);

// ici on bufferise les informations avant des les afficher
// on pourrait voir ça comme une sorte de presse papier dans lequel on va trouver le contenu de la vue à injecter dans le template de base.

// ob_start();

// require_once 'views/home.view.php';
// $content = ob_get_clean();

// les variables ainsi que le contenu du buffer sont maintenant accessibles à notre template de base qui va pouvoir les afficher
// require_once 'views/base.view.php';

/**
 * Affiche la vue passée en argument avec les informations associées.
 *
 * @param string $view
 * @param array  $data / par défaut un tableau associatif vide
 */
function renderView($view, $data = [])
{
    // la méthode PHP native extract permet de récupérer les valeurs d'un tableau associatif et de les extraire dans des variables qui autont pour nom la clé correspondante
    // Doc PHP : https://www.php.net/manual/en/function.extract.php
    extract($data);

    // DOC PHP : https://www.php.net/manual/fr/function.ob-start.php
    ob_start();

    require_once "views/{$view}.view.php";

    // récupération du contenu du buffer et effacement du buffer
    $content = ob_get_clean();

    // les variables ainsi que le contenu du buffer sont maintenant accessibles à notre template de base qui va pouvoir les afficher
    require_once 'views/base.view.php';
}

renderView('home', $data);

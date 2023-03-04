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
extract($data);

// ici on bufferise les informations avant des les afficher
// on pourrait voir ça comme une sorte de presse papier dans lequel on va trouver le contenu de la vue à injecter dans le template de base.

ob_start();

require_once 'views/home.view.php';
$content = ob_get_clean();

// les variables ainsi que le contenu du buffer sont maintenant accessibles à notre template de base qui va pouvoir les afficher
require_once 'views/base.view.php';

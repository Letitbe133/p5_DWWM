<?php

// on require le tableau associatif des routes
// on va en avoir besoin pour require le controller correspondant à la route dans l'url
require_once 'app/routes.php';

// on récupère l'url de la requête
$path = $_SERVER['REQUEST_URI'];

function getController($path, $routes)
{
    // si on a une correspondance dans le tableau des routes on require le controller correspondant
    // sinon on require le controller 404
    if (array_key_exists($path, $routes)) {
        require_once "controllers/{$routes[$path]}";
    } else {
        require_once 'controllers/404.controller.php';
    }
}

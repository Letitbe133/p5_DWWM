<?php

// ce header est nécessaire si la requête HTTP provient d'un serveur différent
// header('Access-Control-Allow-Origin: URL_DU SERVEUR_ORIGINE_DE_LA_REQUETE');
header('Content-Type: application/json');

// récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty($password)) {
    $response = [
        'status' => true,
        'username' => $username,
    ];
} else {
    $response = [
        'status' => false,
        'username' => 'Anonymous',
    ];
}

// on renvoie un code 200 pour indiquer que la requête est un succès
http_response_code(200);
echo json_encode($response); // convertit le tableau associatif $response au format JSON

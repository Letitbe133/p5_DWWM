<?php

header('Access-Control-Allow-Origin: URL_SERVEUR_FRONT');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');

$client_id = $_POST['client_id'];
$redirect_uri = $_POST['redirect_uri'];
$code = $_POST['code'];
$client_secret = 'CLIENT_SECRET';

$authEndpoint = 'https://github.com/login/oauth/access_token';

// create & initialize a curl session
$curl = curl_init();

// set our url with curl_setopt()
curl_setopt($curl, CURLOPT_URL, $authEndpoint);

// return the transfer as a string, also with setopt()
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($curl, CURLOPT_POSTFIELDS, [
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'redirect_uri' => $redirect_uri,
    'code' => $code,
]);

// curl_exec() executes the started curl session
// $output contains the output string
$response = curl_exec($curl);

// close curl resource to free up system resources
// (deletes the variable made by curl_init)
curl_close($curl);

echo json_encode($response);

<?php

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

$name = $_GET['name'];

if (!empty($name)) {
    $response = [
        'status' => true,
        'name' => $name,
    ];
} else {
    $response = [
        'status' => false,
        'name' => 'Anonymous',
    ];
}

echo json_encode($response);

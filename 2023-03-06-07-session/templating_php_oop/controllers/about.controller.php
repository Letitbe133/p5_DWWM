<?php

$data = [
    'title' => 'About Us',
    'heading' => 'Wanna know more about us ? You\'re in the right place !',
];

extract($data);

ob_start();

require_once 'views/about.view.php';
$content = ob_get_clean();

require_once 'views/base.view.php';

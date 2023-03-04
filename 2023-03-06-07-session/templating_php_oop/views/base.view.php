<?php
// ici on a un template de base dans lequel seront injectées nos vues
// le contenu des variables $title, $header, $content sera fourni par le controller
// $content contient en fait la vue qu'on va injecter dans ce template de base
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Home Page'; ?></title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.1/dist/css/uikit.min.css" />

</head>
<body>
    <header class="uk-margin-medium-bottom">
        <?php require_once 'views/partials/nav.php'; ?>
        <h1 class="uk-text-center"><?php echo $heading ?? 'Home Page'; ?></h1>
    </header>
    <main class="uk-container">
        <?php echo $content; ?>
    </main>
</body>
</html>
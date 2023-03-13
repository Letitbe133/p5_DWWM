<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safety Is N°1 Priority</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" novalidate>
    <label for="fname">First Name</label><input type="text" name="fname" id="fname">
    <label for="lname">Last Name</label><input type="text" name="lname" id="lname">
    <label for="age">Age</label><input type="text" name="age" id="age">
    <label for="email">Email</label><input type="email" name="email" id="email">


    <button type="submit">Send</button>
</form>
</body>
</html>

<?php

    // vérifier si le formulaire a bien été soumis en POST
    // regardez ce que contient le tableau $_SERVER

    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        // echo 'Formulaire soumis';

        // var_dump($_POST);
        // extraire les données pour les utiliser

        extract($_POST);

        // on vérifie si les inputs sont vides
        // comment vérifier ça ?
        if (empty($fname) || empty($lname) || empty($email) || empty($age)) {
            echo 'Certains champs sont vides';

            exit;
        }
        // vérifier si les données reçues correspondent bien à ce qu'on attend
        // il existe plusieurs méthodes pour filtrer les données

        // var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
        // var_dump(filter_var($age, FILTER_VALIDATE_INT));

        // if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($age, FILTER_VALIDATE_INT)) {
        //     echo 'Format de données incorrect';

        //     exit;
        // }

        // autre méthode pour valider les inputs d'un formulaire : filter_input
        if (!filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            echo 'Format de données incorrect';

            exit;
        }

        // s'assurer que les données sont safe
        // certains caractères spéciaux peuvent poser problème

        $fname = trim(htmlspecialchars($fname));
        $lname = trim(htmlspecialchars($lname));
        $age = trim($age);
        $email = trim(htmlspecialchars($email));
    }

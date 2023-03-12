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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="fname">First Name</label><input type="text" name="fname" id="fname">
    <label for="lname">Last Name</label><input type="text" name="lname" id="lname">
    <label for="age">Age</label><input type="number" name="age" id="age">
    <label for="email">Email</label><input type="email" name="email" id="email">


    <button type="submit">Send</button>
</form>
</body>
</html>

<?php

    // vérifier si le formulaire a bien été soumis en POST
    // regardez ce que contient le tableau $_SERVER

    // vérifier si les inputs ne sont pas vides
    // comment vérifier ça ?

    // vérifier si les données reçues correspondent bien à ce qu'on attend
    // il existe plusieurs méthodes pour filtrer les données

    // s'assurer que les données sont safe
    // certains caractères spéciaux peuvent poser problème

    // extraire les données pour les utiliser

<?php

// Portage du jeu "Devine un nombre" en PHP

// nombre aléatoire
$randomNumber = random_int(1, 100);

// choix user
$userChoice = '';

// compteur
$counter = 0;

// boucle pour demander au user de choisir un nombre tant qu'il n'a pas trouvé le bon
while ($randomNumber !== intval($userChoice)) {
    // code à exécuter si la condition est vérifiée

    // on vérifie d'abord si $userChoice n'est pas vide avant de tester sa valeur
    if (!empty($userChoice)) {
        if ($userChoice > $randomNumber) {
            echo "Le nombre est trop grand\n";
        } else {
            echo "Le nombre est trop petit\n";
        }
    }

    $userChoice = readline('Choisis un nombre entre 1 et 100 > ');

    ++$counter;
}

echo "Tu as gagné en {$counter} coups !";

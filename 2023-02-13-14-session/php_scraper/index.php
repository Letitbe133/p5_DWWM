<?php

// https://labaleinemarseille.com/les-evenements/
// DOMXpath selectors cheatsheet : https://devhints.io/xpath

// récupérer le contenu de la page web
// file_get_contents()

// créer une nouvelle instance de la classe DOMDocument
// https://www.php.net/manual/en/class.domdocument

// charger le contenu HTML (@ pour ignorer les warnings éventuels)
// loadHTML()

// créer une nouvelle instance de DOMXpath
// https://www.php.net/manual/en/class.domxpath

// construire la requête pour récupérer les éléments recherchés [titre, date]
// nextSibling

// parcourir le résultat pour créer un tableau associatif
// array_map()

// créer un fichier et y écrire les events
// file_put_contents()

// afficher les infos dans la page

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Scraper</title>
    <link rel="stylesheet" href="https://unpkg.com/xp.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js" defer></script>
</head>
<body>
    <header class="field-row">

        <h1>Let's Scrape Dude !</h1>
    </header>
    <main>
        <div class="window">
            <div class="title-bar">
                <div class="title-bar-text">
                    <p>Event Title</p>
                </div>
                <div class="title-bar-controls">
                    <button aria-label="Minimize"></button>
                    <button aria-label="Maximize"></button>
                    <button aria-label="Close"></button>
                </div>
            </div>
            <div class="window-body">
            <menu role="tablist">
                <button aria-selected="true" aria-controls="description">Détails</button>
                <button aria-controls="date">Date</button>
            </menu>
            <article role="tabpanel" id="description">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, labore similique fuga officia aliquam voluptate laboriosam molestias, optio, earum numquam aperiam. Voluptas reprehenderit, aperiam fugit eum cum ullam cumque possimus labore numquam assumenda facere, tenetur placeat at exercitationem praesentium saepe ducimus magni, recusandae in nostrum odit eaque! Quaerat, facilis earum?</p>
            </article>
            <article role="tabpanel" hidden id="date">
                <p>Date de l'événement : </p>
            </article>
            </div>
        </div>
    </main>
</body>
</html>
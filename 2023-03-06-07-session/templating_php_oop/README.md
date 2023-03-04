# Une approche très basique du Templating

## Structure

- `app` contient la définition des routes ainsi que le router
  - `routes.php` : tableau associatif de définition des routes
  - `router.php` : la logique de routage (très basique)
- `controllers` contient les controllers associés aux différentes routes
- `views` contient les vues de l'application
- `index.php` est le point d'entrée de l'application

## Fonctionnement

- on récupère la `REQUEST_URI` dans l'url
- si elle correspond à une route existante :
  - on récupère le controller associé qui va afficher la vue correspondante dans le template de base
- si elle ne correspond à aucune route :
  - on récupère le controller 404 qui affichera la page 404 dans le template de base

En gros, on ne change pas de page (tout se passe dans `index.php`), on modifie son contenu dynamiquement en fonction d'une route dans l'url.

Pour éviter de dupliquer le HTML, on utilise un template de base dont certains éléments sont dynamiques, tels que le contenu de la balise `<title>`, celui du `<h1>` ou celui du `<main>`.

## Mise en perspective

Ce sytème de templating est très largement utilisé, et on le retrouve par exemple dans des frameworks tels que **Symfony** ou **Laravel** associé à des outils tels que `Twig` ou `Blade` qui offrent des fonctionnalités puissantes.

⚠️ Le code de ce projet est extrèmement basique et a pour unique but de vous donner un exemple d'implémentation du templating ⚠️

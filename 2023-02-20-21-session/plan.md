# 20/02/2023 - Menu du jour

## Rewind

Vous en avez l'habitude maintenant, petit point sur la semaine passée, ce qu'on va faire, où on en est

## Debrief sur les exos Evénements

On en est où ?

## On revient sur l'API Fetch

### Anatomie d'une requête Fetch

- GET
- POST
- configuration object
  - method : méthode HTTP utilisée (GET / POST)
  - body : corps de la requête
  - headers : informations envoyées par le navigateur au serveur distant
- CORS (Cross Origin Resource Sharing)

### Notation asynchrone async / await

```js
async function getData(url) {
  const response = await fetch(url);
  const data = await response.json();
}
```

#### Resources

- [async / await - Javascript.info](https://javascript.info/async-await)
- [CORS](https://www.abstractapi.com/api-glossary/cors)

## Les requêtes HTTP

Les requêtes HTTP permettent une communication entre un client et un serveur. Elles permettent entre autre de récupérer des données ou d'en envoyer, mais aussi de les modifier ou de les supprimer.

Elles se composent de 2 parties :

- la requête, envoyée par le client (navigateur, client HTTP, code...)
- la réponse, renvoyée par le serveur

### HTTP status code

Les codes HTTP sont renvoyés par le serveur dans l'entête de réponse.

Ils se divisent en 4 grandes catégories :

- 2XX : succès
- 3XX : redirection
- 4XX : erreur dans la requête
- 5XX : erreur serveur

Le client peut donc être un navigateur, un client HTTP ou un script.

Il existe de nombreux clients HTTP mais je vous propose de travailler avec **Insomnia**, un outil opensource qui va vous permettre de tester et visualiser vos requêtes hors navigateur.

### Insomnia

Lien vers l'application desktop :

[Insomnia](https://insomnia.rest/download)

Une fois installée, on va lancer l'application et tester son fonctionnement.

### Ressources

- [cheatsheet codes HTTP](https://devhints.io/http-status)
- [Le protocole HTTP - MDN](https://developer.mozilla.org/fr/docs/Web/HTTP)

## Fetch en pratique

Travaillez avec une API

J'ai sélectionné pour vous 3 APIs qui vont vous permettre de vous familiariser avec les requêtes AJAX et l'utilisation de Fetch.

**Newscatcher** vous permettra de rechercher dans une liste d'article les sulets qui vous intéressent en les filtrant par catégorie, pays, date, etc...
C'est une bonne ressource pour vous faire la main en allant du plus simple vers des requêtes plus complexes

Il sera nécessaire pour utiliser cette API de générer une clé d'API gratuite

**_NewsCatcher_** :

- API Key : Yes

- Doc : https://docs.newscatcherapi.com/

- rechercher tout :

  - endpoint : "https://api.newscatcherapi.com/v2/search?q=Apple{&from=2021/12/15&countries=CA&page_size=1}"

- remarques :
  - vous pouvez utiliser pas mal de paramètres pour filtrer votre recherche
  - ce qui est entre { } dans l'url est optionnel, ce sont vos paramètres de recherche

⚠️ attention à la méthode d'authentification qui requiert un **header** spécifique ⚠️

**Github** met à votre disposition une API riche et très (trop ?) documentée.

J'ai sélectionné pour vous 2 endpoints qui vous permttront de sélectionner une liste de repositories publics en fonction de mots clé, et de rechercher les infos d'un utilisteur grâce à son username Github

Il n'est pas nécessaire pour ces endpoints de générer une clé d'API ou un token d'authentification.

**_Github_** :

- API Key : No

- Doc : [Doc API Github](https://docs.github.com/fr/rest?apiVersion=2022-11-28)
- recherche par mot clé :

  - endpoint : "https://api.github.com/search/repositories?q={query}{&page,per_page,sort,order}"

- recherche par user :
  - endpoint : "https://api.github.com/users/{user}"

**Punkapi** vous propose une API plutôt cool si vous aimez la bière 😉. Très simple d'utilisation, elle vous permettra de récupérer et d'afficher pas mal d'infos sur les bières Brewdog.

Un seul endpoint pour cette API pour laquelle il n'est pas nécessaire de générer de clé.

**Punkapi** :

- API Key : No

- Doc : [Doc API Punkapi](https://punkapi.com/documentation/v2)
- toutes les bières :

  - endpoint : "https://api.punkapi.com/v2/beers"

- recherche par bière :
  - endpoint : "https://api.punkapi.com/v2/beers?{id}"
- bière au hasard :
  - endpoint : "https://api.punkapi.com/v2/beers/random"

### Your choice

Vous pouvez choisir une des 3 APIs sélectionnées, mais évidemment, libre à vous d'en choisir d'autres si vous vous sentez une âme d'explorateur !

Attention cependant à plusieurs choses :

- mode d'authetification si applicable
  - clé d'API
  - header d'authentification
  - ...
- support de CORS
  - pas de support, pas de fetch depuis le navigateur 😿

## Travail en autonomie

Phase 2 du projet Bibliothèque PDO :

- intégration front
  - CSS (scratch ou librairie)
  - Responsive
- fonctionnalités Javascript
  - validation des formulaires
  - récupération et affichage des infos d'un livre grâce à une API

## Bonus Track #1

On scrape ou bien ?
On scrape une page web avec PHP

## Bonus Track #2

Les modules en Javascript
On parle modules et on voit comment ça marche

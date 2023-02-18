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

- cheatsheet codes HTTP
- Le protocole HTTP - MDN

## Fetch en pratique

Travaillez avec une API

J'ai sélectionné pour vous 3 APIs qui vont vous permettre de vous familiariser avec les requêtes AJAX et l'utilisation de Fetch.

**NewsApi** vous permettra de rechercher dans une liste d'article les sulets qui vous intéressent en les filtrant par catégorie, pays, date, etc...
C'est une bonne ressource pour vous faire la main en allant du plus simple vers des requêtes plus complexes

Il sera nécessaire pour utiliser cette API de générer une clé d'API gratuite

⚠️ Attention, vous ne pourrez pas déployer votre application en live car le plan gratuit "développeur" pour l'utilisation de l'API ne le permet pas. Pas de problème en **localhost** par contre ⚠️

**_NewsAPi_** :

- API Key : Yes

- Doc : https://newsapi.org/docs

- rechercher tout :

  - endpoint : "https://newsapi.org/v2/everything?q"

- remarques : vous pouvez utiliser pas mal de paramètres pour filtrer votre recherche

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

**HackerNews** met aussi à votre disposition une API gratuite vous permettant entre autres d'afficher les articles publiés sur le site.

J'ai sélectionné pour vous 2 endpoints qui vous permttront de récupérer la liste des id des articles, puis d'afficher leurs information et un lien vers l'article en question.

Pour ce faire, vous aurez besoin de faire 2 requêtes.

⚠️ Il sera nécessaire pour utiliser cette API de générer une clé d'API gratuite ⚠️

**_HackerNews_** :

- API Key : Yes
- Doc : [Doc API HAckernews](https://hackernews.api-docs.io/v0/overview/introduction)

- top stories :

  - endpoint : "https://hacker-news.firebaseio.com/v0/topstories.json"

- article spécifique :
  - endpoint : https://hacker-news.firebaseio.com/v0/item/{item_id}.json

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

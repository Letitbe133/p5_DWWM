# Github API Authentication

## Objectif

Authentifier un utilisateur grâce à l'API Github à partir d'une application web

## Github Flow

- créer sur Github une application Oauth. Une fois fait, on aura besoin de récupérer les éléments suivants :
  - client Id : l'identifiant (public) de l'application
  - client Secret : la clé (secrète, NE DOIT PAS ETRE DIVULGUEE OU EXPOSEE) de l'application
  - url de redirection : l'url à partir de laquelle on pourra récupérer le code provisoire permettant de générer un Access Token
- obtenir le code temporaire permettant de récupérer l'Access Token nécessaire à l'authentification
- authentifier l'utilisateur
- récupérer l'Access Token

Une fois récupéré, l'Access Token permettra à l'utilisateur d'effectuer les opérations autorisées sur son compte à travers l'API Github

## Contraintes

- ⚠️ la requête à l'API Github pour l'obtention du token ne peut pas être faite à partir du navigateur (CORS non supporté pour des raisons de sécurité)
- ⚠️ l'Access Token une fois obtenu ne doit pas être exposé

On passera donc dans ce cas par un script PHP côté serveur pour obtenir le token.

## Fonctionnement

Pour cet exemple :

- le script Javascript frontend sera exécuté à partir d'un serveur de développement. L'url du serveur sera celle indiquée lors de la création de l'Oauth app
- le script PHP sera exécuté à partir d'un serveur local sur `http://localhost:8000`
- la requête à l'API Github pour l'obtention de l'Access Token sera faite à partir du backend
- on récupèrera le token grâce à un appel AJAX du serveur frontend vers le serveur backend
- on renverra côté backend un header `Access-Control-Allow-Origin` avec comme valeur l'url de notre serveur front

## Disclaimer

> ⚠️⚠️ Etant donné que l'Access Token doit être transmis à chaque requête à l'API afin d'accéder à des endpoints pour lesquels l'utilisateur doit être identifié, je pense qu'il est nécessaire d'effectuer toutes les requêtes côté serveur. Non testé sur cette démo ⚠️⚠️

> ⚠️⚠️ Ne pushez pas vos identifiants sur Github ⚠️⚠️

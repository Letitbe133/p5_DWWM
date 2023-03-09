# 06/03/2023 - Menu du jour

## Rewind

Vous en avez l'habitude maintenant, petit point sur la semaine passée, ce qu'on va faire, où on en est

## PHPMyadmin - Behind The Scenes

`PHPMyadmin` c'est bien.

On clique, ça fait le taf.

Mais il se passe quoi derrière ?

## Import / Export

- Comment Exporter ou Importer une BDD ?
  - via PHPMyadmin
  - via le terminal
    - export : `mysqldump -u sql_user -p db_name > db_export.sql`
    - import :
      - `mysql -u sql_user -p`
      - `CREATE DATABASE db_name;`
      - `mysql -u sql_user -p db_name < db_export.sql`

## Validation / Sécurisation des données côté backend

⚠️ **Ne jamais faire confiance aux inputs utilisateur** ⚠️

Pourquoi ?

- un utilisateur peut faire une faute de frappe
- vous attendez un type de données (string, number, ...) et vous recevez autre chose
- un utilisateur malveillant peut vouloir hacker votre application

### Validation

On parle ici de vérification du fait que le type et la valeur des données reçues correspondent bien à ce que vous attendez.

On est bien là sur de la validation et pas sur de la sécurisation.

Par exemple j'attends :

- un `integer`
- une `string` d'une longueur mini de 8 caractères
- une adresse email correctement formatée
- une `string` non vide
- ...

### Sécurisation

On peut passer tout et n'importe quoi dans un input.

Ca veut dire qu'on peut entre autre passer des balises HTML, des caractères spéciaux, ...

Qu'est-ce qui pourrait se passer si dans un input un utilisateur passe une balise `<script>` qui redirigerait vers une autre url ?

## Héberger son application web frontend

- Github

`Github` c'est cool pour héberger son code.

Mais vous pouvez aussi montrer votre super appli au monde grâce aux `Github Pages`, et en plus c'est gratos !

- Netify

Netlify vous permet non seulement d'héberger gratuitement votre application **frontend** mais aussi d'automatiser son déploiement à chaque fois que vous ferez un **push** sur votre branche.

Et ça c'est cool 😎

### ☢️ Disclaimer ☢️

D'autres options existent, comme [Vercel.com](https://vercel.com) ou [Render.com](https://render.com/) par exemple. A vous d'explorer

## Debug

Si on a le temps ...

### Ressources

- [Github Pages](https://kinsta.com/blog/github-pages/)
- [Github Pages Quickstart - Doc Officielle](https://docs.github.com/fr/pages/quickstart)
- [Netlify Deploy From Git](https://docs.netlify.com/site-deploys/create-deploys/)

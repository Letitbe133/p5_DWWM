# 27/02/2023 - Menu du jour

## Rewind

Vous en avez l'habitude maintenant, petit point sur la semaine passée, ce qu'on va faire, où on en est

## Debug - Parce que vous le valez bien 😉

En avant pour du debug sur vos projet.

> "Vers l'infini et au delà !"
>
> <cite>Woody</cite>

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

## Héberger son application web frontend

- Github

`Github` c'est cool pour héberger son code.

Mais vous pouvez aussi montrer votre super appli au monde grâce aux `Github Pages`, et en plus c'est gratos !

- Netify

Netlify vous permet non seulement d'héberger gratuitement votre application **frontend** mais aussi d'automatiser son déploiement à chaque fois que vous ferez un **push** sur votre branche.

Et ça c'est cool 😎

### ☢️ Disclaimer ☢️

D'autres options existent, comme [Vercel.com](https://vercel.com) ou [Render.com](https://render.com/) par exemple. A vous d'explorer

### Ressources

- [Github Pages](https://kinsta.com/blog/github-pages/)
- [Github Pages Quickstart - Doc Officielle](https://docs.github.com/fr/pages/quickstart)
- [Netlify Deploy From Git](https://docs.netlify.com/site-deploys/create-deploys/)

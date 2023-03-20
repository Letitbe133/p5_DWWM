# 06/03/2023 - Menu du jour

## Rewind

Vous en avez l'habitude maintenant, petit point sur la semaine passée, ce qu'on va faire, où on en est

## Les namespaces en PHP

- pour organiser son code
- le rendre plus lisible
- éviter les conflits de nommage

### On teste en live

Mise en pratique sur un projet très basique

- création de namespace
- utilisation "Fully Qualified Name"
- namespace global
- mot clé `use`

### Ressources

- [Namespaces by SymfonyCasts](https://symfonycasts.com/screencast/php-namespaces/namespaces)

## Composer And Stuff

Quand vous bossez sur un projet PHP, que ce soit une grosse application ou quelque chose de plus modeste, il y a de fortes chances que vous ayez besoin d'utiliser certaines librairies qui vous permettront de gagner du temps et de rendre votre code plus robuste.

Ces librairies nécessaires à votre projet en phase de développement et / ou de production sont appelées des dépendances.

Il n'est pas rare d'utiliser simultanément plusieurs de ces outils sur un même projet, et il peut devenir compliqué de les gérer manuellement. D'où l'intérêt de passer par un gestionnaire de dépendances, et en l'occurence pour PHP, `Composer`.

`Composer` va vous permettre d'installer, retirer et mettre à jour vos dépendances ainsi que d'en gérer les versions.

## Installation :

- Windows : [Guide d'installation Windows](https://getcomposer.org/doc/00-intro.md#using-the-installer)
- macOs : [Guide d'installation macOs](https://www.geeksforgeeks.org/how-to-install-php-composer-on-macos/)

Pour vérifiez si `Composer` est bien installé, dans un terminal vous pouvez taper

```shell
composer --version
```

Vous devriez avoir en retour la version de Composer actuellement installée sur votre machine.

## Setup

- création d'un nouveau projet
- initialisation de Composer dans le projet
- génération de l'`autoload`
  - A quoi ça va nous servir ?
- installation d'une dépendance
  - on installe `Faker` grâce à `composer`

### Ressources

- [Les bases de Composer - Parfaitement Web](https://youtu.be/exaTOIhzYdk)

## Utilisation d'un client FTP

BTW, c'est quoi un client FTP ?

Et d'ailleurs ça veut dire quoi FTP ?

Ca vous rappelle quelque chose ?

Un des plus connus : [FileZilla](https://filezilla-project.org/)

## Tests Unitaires en PHP

Qu'est-ce qu'un test unitaire ?
A quoi ça sert ?
En pratique ça marche comment ?

Prérequis :

- composer
- phpunit

## Héberger son application web frontend

- Github

`Github` c'est cool pour héberger son code.

Mais vous pouvez aussi montrer votre super appli au monde grâce aux `Github Pages`, et en plus c'est gratos !

- Netify

Netlify vous permet non seulement d'héberger gratuitement votre application **frontend** mais aussi d'automatiser son déploiement à chaque fois que vous ferez un **push** sur votre branche.

Et ça c'est cool 😎

### ☢️ Disclaimer ☢️

D'autres options existent, comme [Vercel.com](https://vercel.com) ou [Render.com](https://render.com/) par exemple. A vous d'explorer

## Import / Export

- Comment Exporter ou Importer une BDD ?
  - via PHPMyadmin
  - via le terminal
    - export : `mysqldump -u sql_user -p db_name > db_export.sql`
    - import :
      - `mysql -u sql_user -p`
      - `CREATE DATABASE db_name;`
      - `mysql -u sql_user -p db_name < db_export.sql`

## Debug

Si on a le temps ...

### Ressources

- [Les filtres en PHP - php.net](https://www.php.net/manual/fr/filter.filters.php)
- [Validation et sécurisation des inputs - phptherightway.com](https://phptherightway.com/#data_filtering)
- [Github Pages](https://kinsta.com/blog/github-pages/)
- [Github Pages Quickstart - Doc Officielle](https://docs.github.com/fr/pages/quickstart)
- [Netlify Deploy From Git](https://docs.netlify.com/site-deploys/create-deploys/)

# Git Basics

## Rappel ce de qu'est Git

Git est un programme qui une fois installé sur votre ordinateur va vous permettre de suivre les modifications apportées à votre code.

Ce n'est pas juste un outil de sauvegarde, mais plus un outil qui vous permettra de conserver un historique du développement d'un projet. On appelle ce processus le `versioning`.

## Une extension utile

Dans VS Code recherchez et installez l'extension `git graph`, elle vous sera très utile pour avoir une représentation visuelle de l'état de vos commits et de vos branches

## Initialiser un repo Git local

Initialiser un repo Git signifie simplement qu'on indique à Git qu'on souhaite suivre les changements apportés à notre code dans notre dossier projet (le dossier dans lequel on travaille).

La première étape est de se positionner dans le dossier de travail avec la commende `cd` suivie d'un espace et du **chemin vers le dossier**.

Une fois qu'on y est, on peut lancer dans le terminal la commande `git init`

A partir de ce moment, Git va commencer à surveiller les changements apportés à vos fichiers

## Vérifier l'état de votre code

Pour ça on peut utiliser la commande `git status`

Les modifications non suivies seront affichées en rouge, les autres seront affichées en vert.

## Suivre des fichiers

La commande `git add nom_du_fichier_ou_dossier` permet d'ajouter le fichier ou dossier mentionné à la liste des fichiers / dossiers suivis.

Quand un fichier / dossier est ajouté, il est en phase de staging (staging area) et les changements sont prêts à être validés ou committed.

Par exemple : `git add story.txt` ajoute story.txt à la liste des fichiers suivis

Si vous voulez ajouter tous les dossiers / fichiers du projet, vous pouvez utiliser la commande raccourcie `git add .`

## Annuler le suivi d'un fichier / dossier

`git rm -r --cached nom_du_fichier_ou_dossier` permet de déséselectionner un fichier / dossier.
Le fichier / dossier ne sera pas modifié ou supprimé, il ne sera juste plus suivi.

On décompose :

- git : le nom du programme utilisé, en l'occurence `git`
- rm : la commande, ici on fait un remove
- -r --cached : les arguments (-r pour récursif, --cached pour les fichiers en phase de staging)
- nom_du_fichier_ou_dossier : le fichier / dossier à ne plus suivre

Un `git status` vous permettra de voir où vous en êtes

## Valider les changements

Une fois vos fichiers / dossiers suivis, vous pouvez validés les changements apportés grâce à `git commit`

`git commit` créera un instantanné de votre code à l'instant t.

Si vous tapez simplement `git commit`, un éditeur de texte s'ouvrira vous permettant d'ajouter un message descriptif qui va accompagner votre commit.

C'est utile si vous avez besoin d'ajouter une description plus longue au commit.

Vous pouvez aussi taper `git commit -m "mon commit descriptif"`

Le message initial doit être court et descriptif pour une meilleure lisibilité et un meilleur suivi des évolutions du code.

## Modifier le dernier commit

Il peut arriver que vous vous soyez trompé en rédigeant le message de votre dernier commit.

Vous pouvez le modifier grâce à `git commit --amend`

Cette commande permettra de modifier le message de commit grâce à l'éditeur par défaut.

Vous pouvez aussi passer directement le message modifié : `git commit --amend -m "message modifié"`

## Afficher l'historique des commits

Rien de plus simple : `git log` est votre ami !

Cette commande affichera la liste des commit par ordre décroissant (en commençant par le plus récent)

`git log --oneline` permettra d'avoir un affichage résumé

`git log --graph` vous permet d'afficher la liste des commits en mode "graphique" ASCII

`git log -n nombre_de_commits` vous permet d'afficher les n derniers commits.

Par exemple : `git log -n 2` affichera les 2 derniers commits

## Afficher les contenu d'un commit

`git show hash_du_commit` permet d'afficher le contenu d'un commit

Vous pouvez récupérer le hash du commit à visualiser grâce à `git log`

## Afficher les modifications depuis le dernier commit

`git diff` permet d'afficher les modifications apportées à un fichier / dossier suivi, depuis le dernier commit. Par défaut, le point de départ sera le `HEAD`, mais vous pouvez spécifier un hash de commit

`git diff` permet aussi de voir quelles sont les différences entre 2 branches

## Afficher la liste des branches

Une branche, très simplement, est la référence vers un commit à partir duquel votre code va diverger de votre branche principale, par exemple si vous souhaitez développer et tester une nouvelle feature.

La commande à utiliser est `git branch`

## Créer une branche

La création d'une branche à partir d'un commit donné (par défaut `HEAD` qui pointe vers le dernier commit) se fait grâche à la commande `git branch nom_de_la_branche`

Par exemple, pour créer la branche `feature` il faudrait taper `git branch feature`

## Changer de branche

Easy : `git checkout feature`

Tip : Lors de la création d'une branche, vous pouvez directement la créer PUIS basculer sur cette branche avec : `git checkout -b feature`

Lorsque votre branche a été crée, vous pouvez continuer à bosser sur cette branche comme vous le faites d'habitude.

## Merger 2 branches

"merge" permet de fusionner 2 branches.

- On se positionne sur la branche dans laquelle on veut fusionner la seconde branche avec `git checkout nom_de_la_branche`
- on utilise la commande `git merge nom_de_la_branche_a_fusionner`

## Résoudre les conflits

Lorsque des modifications sur les mêmes fichiers sont faites sur 2 branches différentes, le `merge` ne fonctionnera pas et le terminal vous indiquera quel est le conflit dans le ou les fichiers concernés.

Pour le résoudre, ouvrez simplement le fichier dans votre éditeur et procédez aux modifications nécessaires.

Ensuite, utilisez `git add nom_du_fichier` puis `git commit` pour valider les changements.

## Créer un repo distant sur Github

- connectez vous à votre compte Github
- créez un nouveau repo, donnez vous un nom et une description
- dans l'onglet `code`, cliquez sur le bouton `code` et copiez l'url du repo
- sur votre pc, dans le terminal, tapez la commande `git remote add origin url_du_repo_github`

Votre dossier local est maintenant lié à votre repo distant

## Synchroniser les repo

Dans votre dossier local, tapez `git push origin nom_de_la_branche_a_pusher`

Par exemple : `git push origin master` pour push les changements apportés à la branche master

## Cloner un repo existant

- sur Github, sélectionnez le repo à cloner. Ca peut être n'importe quel repo public, pas uniquement un des votres.

- dans l'onglet `code` du repo, cliquez sur le bouton `code` et copiez l'url
- sur votre pc, positionnez vous à l'endroit où vous voulez cloner le repo puis tapez la commande `git clone url_du_repo_distant`
- déplacez vous ensuite dans le dossier que vous venez de cloner pour commencer à travailler

## Récupérer la dernière version d'un repo distant

Utilisez pour ça la commande `git pull origin nom_de_la_branche`

Par exemple, si vous voulez récupérer et fusionner le contenu de la branche distante `master` dans votre branche courante : `git pull origin master`

En fait `git pull` fait d'abord un `git fetch` qui récupère le contenu du repo distant, puis un `git merge` sur la branche locale

## Ressources

- Une formation git que je trouve assez claire [ici](https://www.nicelydev.com/git/definition-git)
- Une "cheatsheet" des commandes `git` : [Git, No Deep Shit](https://rogerdudler.github.io/git-guide/index.html)

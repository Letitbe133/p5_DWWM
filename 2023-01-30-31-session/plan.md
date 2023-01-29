# 30/01/2023 - Menu du jour

## Rewind

Vous en avez l'habitude maintenant, petit point sur la semaine passée, ce qu'on va faire, où on en est

## Retour sur les fonctions

En mode live coding collaboratif

- c'est quoi d'abord une fonction ?
- quel intérêt ?
- comment ça s'utilise ?
  - déclaration
  - appel
- **paramètres** vs **arguments**
- paramètres optionnels
- **return**

### Descripting

Observez le code suivant :

```js
const loop = function (array, callback) {
  const arr = [...array];
  const result = [];
  for (let elem of arr) {
    result.push(callback(elem));
  }
  return result;
};

const newArr = loop([25, 10, 42, 100], function (elem) {
  return +(elem *= 1.2).toFixed(2);
});
```

### Exercices

Reprenez les exercices d'algo JS et refactorisez le code sous la forme de fonctions

- analysez ce code et essayez de comprendre son fonctionnement en le commentant étape par étape
- identifiez les `paramètres` et les `arguments`, de quels types sont-ils ?
- est-ce que cette fonction vous fait penser à une autre fonction native de Javascript ?

## Petit retour sur Git

En mode live coding collaboratif

- git_tryout

### On met en pratique

#### Objectif

Bosser git et en profiter pour découvrir le concept de librairies et de frameworks

#### Modalités

Travail de groupe, 3 minimum, 4 maximum

#### Pitch

- choisissez un thème parmi les 3 suivants :
  - frameworks javascript
  - librairies javascript
  - librairies CSS

Chaque membre du groupe fera une synthèse de ses recherches :

- nom de la librairie ou du framework
- description en quelques lignes de l'outil choisi
- avantages / inconvénients
- votre analyse

Explorez. Découvrez.

### Etapes

- choisissez qui parmi vous sera le propriétaire du repo distant qui devra :
  - créer **UN** repo commun sur Github (ou une autre plateforme comme Gitlab par exemple) pour le groupe
  - créer une branche `master` locale et la `push` sur le repo distant
  - ajouter en collaborateurs les membres du groupe
- clonez le repo distant sur vos ordinateurs respectifs (à chacun sa copie)
- créez votre branche locale au format `branche_votre_prénom`, par exemple `branche_john`
- basculez sur votre branche
- créez chacun un fichier `recherches.txt` qui contiendra le contenu de vos recherches
- lorsque vous aurez terminé vos recherches :
  - validez vos changements avec `git add` puis `git commit`
  - poussez votre branche vers le repo distant en utilisant la commande `git push`
- quand toutes les branches auront été `push` le propriétaire du repo distant devra `merge` toutes les branches dans `master`

## Evénements

Si on a le temps et qu'on est tous et toutes synchro, on aborde la notion d'événement.

- c'est quoi un événement ?
- en quoi c'est intéressant pour nous dev ?
- comment on travaille avec ?

## Evénements live

On se fait une petit live en mode collaboratif

## Ze Project

Créer un site One page présentant au choix :

- 4 frameworks Javascript
- 4 librairies Javascript
- 4 librairies CSS

> Un topic au choix.

> Le focus n'est pas sur le CSS, mais l'interface utilisateur (UI) est propre et responsive.

> Les différents éléments présentés ne sont pas "hard codés" mais sont générés en Javascript au chargement de la page à partir d'un tableau qu'il faudra construire

> Chaque élément présenté contiendra les éléments suivants :
>
> - le logo du framework ou de la lib
> - une brève description
> - un lien vers le site officiel qui s'ouvrira dans un nouvel onglet du navigateur
> - un résumé des avantages / inconvénients

### Ressources

- [Javascript 101](https://capable-profiterole-4848e2.netlify.app/)
- [Javascript.info](https://javascript.info/)
- [Curriculum FreeCodeCamp](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/#basic-javascript)

# On rembobine && quelques bonus

![boredpanda.com](https://www.boredpanda.com/blog/wp-content/uploads/2019/08/image-5d5c25b61e2a7__700.jpg)

# Unités fixes et relatives en CSS

En CSS, il existe deux principaux types d'unités pour spécifier les longueurs : les unités fixes et les unités relatives.

## Unités fixes

Les unités fixes sont des unités absolues qui ne sont pas affectées par les paramètres d'affichage de l'utilisateur. Elles sont cohérentes sur tous les appareils et fournissent une mesure précise de la longueur. Voici quelques exemples d'unités fixes :

**px**: pixels

**in**: pouces

**cm**: centimètres

**mm**: millimètres

**pt**: points

**pc**: picas

## Unités relatives

Les unités relatives sont des unités qui sont relatives à une autre valeur de longueur. Elles sont affectées par les paramètres d'affichage de l'utilisateur et peuvent changer en fonction du périphérique ou du navigateur. Voici quelques exemples d'unités relatives :

**em**: la hauteur de la police de l'élément

**rem**: la hauteur de la police de base du document

**vh**: 1% de la hauteur de la fenêtre du navigateur

**vw**: 1% de la largeur de la fenêtre du navigateur

**%**: pourcentage de la taille de l'élément parent

## Cas d'usages pour les unités fixes vs relatives

Les unités fixes sont utilisées de préférence quand vous voulez garantir une mesure précise, par exemple pour créer une grille ou définir la taille d'une image. Elles sont aussi utiles, mais c'est rare, pour créer des feuilles de style d'impression, parce que les mesures resteront cohérentes à l'impression.

Les unités relatives par contre sont utiles lorsque vous voullez que la taille d'un élément soit relative à quelque chose d'autre, comme la taille de la police de l'élément parent par exemple. Elles sont particulièrement adapatées à la conception de layouts **responsive** qui s'adaptent au périphérique et aux paramètres d'affichage de l'utilisateur.

En fait, il est très courant d'utiliser une combinaison d'unités fixes et relatives dans votre CSS pour obtenir l'effet désiré.

Tout sur les mesures et les valeurs en CSS [ici](https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Values_and_units)

---

![](https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fwww.gsb.stanford.edu%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F1630x_variable%2Fpublic%2Fhumor-amifunny-1630_1.jpg%3Fitok%3DUtgOBT-0&sp=1671009285T92421da2ea113bfa93150a95758ada616d180a4b4ba86894307965b10d724a4c)

# Le positionnement en CSS CSS

En CSS, il existe cinq valeurs de position différentes qui peuvent être utilisées pour spécifier la position d'un élément sur une page :

**static**: la valeur de position par défaut. Les éléments ayant une position statique ne sont pas affectés par les propriétés `top`, `bottom`, `left` et `right`.

**relative**: les éléments qui ont une position relative sont positionnés par rapport à leur position par défaut dans le flux du document.

**absolute**: les éléments qui ont une position absolue sont positionnés par rapport à leur ancêtre **positionné** le plus proche (c'est-à-dire un élément ancêtre qui n'est pas statique). S'il n'y a pas d'ancêtre positionné, l'élément est positionné par rapport au bloc contenant initial, par exemple le `body`.

**fixed**: les éléments positionnés en `fixed` sont positionnés par rapport au bloc contenant initial et ne se déplacent pas lorsque la page défile.

**sticky**: les éléments en position `sticky` sont positionnés en fonction de la position de défilement de l'utilisateur. Ils sont initialement positionnés en fonction du flux normal du document, puis passent à une position fixe lorsque l'utilisateur atteint un certain point de défilement.

La propriété `position` peut être utilisée en combinaison avec les propriétés `top`, `bottom`, `left` et `right` pour spécifier la position exacte d'un élément sur la page.

Le code suivant par exemple positionne un élément dont l'ID est "my-element" à 20 pixels du haut et de la gauche du bloc **positionné** qui le contient :

```css
#my-element {
  position: absolute;
  top: 20px;
  left: 20px;
}
```

---

![Flex](https://as1.ftcdn.net/v2/jpg/00/45/37/50/1000_F_45375061_jz0f8ynqDRRpOG3TXEos5Ep1fXssoa0O.jpg)

# Flexbox

Flexbox est un mode de `display` CSS qui facilite la création de layouts responsive. Il utilise un ensemble de propriétés CSS qui permettent d'agencer les éléments de manière flexible, en leur permettant de s'étirer ou de rétrécir pour remplir l'espace disponible.

Flexbox fonctionne en définissant un **flex container** qui entoure les éléments que vous voulez agencer. Le conteneur définit le **main axis** le long duquel les éléments seront disposés mais aussi la direction dans laquelle les éléments doivent être disposés.

Les éléments a l'intérieur du conteneur sont des **flex items**. Chaque élément possède trois propriétés principales qui contrôlent la manière dont il est disposé :

- flex-grow
- flex-shrink
- flex-basis

## flex-grow

La propriété `flex-grow` indique le taux de croissance de l'élément par rapport aux autres flex items du conteneur. Si tous les éléments ont la même valeur `flex-grow`, ils se développeront tous selon la même proportion. Si un élément a une valeur `flex-grow` de 2, et les autres une valeur de 1, le premier élément grandira deux fois plus vite que les autres.

## flex-shrink

La propriété `flex-shrink` indique de combien l'élément doit rétrécir par rapport aux autres éléments du conteneur. Cette propriété fonctionne de la même manière que `flex-grow`, mais elle contrôle la proportion dans laquelle l'élément rétrécit lorsqu'il n'y a pas assez d'espace dans le conteneur.

## flex-basis

La propriété flex-basis spécifie la taille initiale d'un `flex item`. Cette valeur est utilisée comme point de départ pour la taille de l'élément, et elle peut être ajustée par les propriétés flex-grow et flex-shrink si nécessaire.

Un exemple de layout responsive utilisant Flexbox :

```css
.container {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  justify-content: space-between;
}

.item {
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: 25%;
}
```

### breakdown

Dans cet exemple, la propriété `flex-wrap` de la classe de conteneur est définie sur `wrap`, ce qui implique que les éléments enfants s'étendront sur plusieurs lignes si l'espace est insuffisant pour les faire tenir sur une seule.

La propriété `justify-content` est définie sur `space-between`, ce qui signifie que les éléments enfants seront uniformément espacés dans le conteneur, le premier et le dernier élément étant alignés sur les bords du conteneur.

La propriété `flex-basis` de la classe item est définie sur 25 %, ce qui signifie que chaque élément enfant occupera 25 % de l'espace disponible sur une ligne. Comme il y a 4 éléments sur un grand écran, chaque élément occupera 25 % du conteneur, on aura alors 4 colonnes de largeur égale.

Sur une tablette, il y aura 2 éléments par ligne, donc chaque élément occupera 50% du conteneur, créant 2 colonnes.

Sur un mobile, il n'y aura qu'un seul élément par ligne, et chaque élément occupera 100 % du conteneur.

Ce layout s'adaptera automatiquement à la taille de l'écran. Dans ce cas, l'usage des `media queries` n'est pas nécessaire.

Vous pouvez bien sûr personnaliser davantage l'apparence et la disposition des éléments à l'aide de règles CSS supplémentaires.

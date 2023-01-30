// on déclare une constante loop
// on affecte à cette variable une fonction anonyme
// cette fonction prendra en paramètres un tableau et une fonction
//

const loop = function (array, callback) {
  // ici on déclare une variable arr qui va contenir un tableau qui sera une copie du tableau array passé en paramètre grâce au spread operator
  const arr = [...array];
  //   on crée une variable result à laquelle on affecte un tableau vide
  // ce tableau contiendra le résultat de l'exécution de la fonction callback pour chaque élément du tableau arr
  const result = [];

  //   on a une boucle for...of grâce à laquelle on va parcourir notre tableau arr
  for (let elem of arr) {
    // pour chaque élément du tableau arr, on exécute la fonction callback passée en argument (lors de l'appel de la fonction) et on lui passe en argument l'élément courant du tableau
    // ensuite on ajoute chaque résultat au tableau result
    result.push(callback(elem));
  }
  //   une fois la boucle terminée, on retourne le tableau qui contient nos résultats
  return result;
};

// le nouveau tableau qui est le résultat de l'appel de la fonction loop() est stocké dans la constante newArr
const newArr = loop([25, 10, 42, 100], function (elem) {
  // cette fonction est une fonction dite callback qui est exécutée pour chaque élément du tableau passé en argument
  // elle reçoit elle même en argument l'élément courant de la boucle

  // ici on retourne le calcul de tva qu'on limite à 2 chiffres après la virgule

  return +(elem *= 1.2).toFixed(2);
});

console.log("Sans map", newArr);

// on vient en fait de recréer le fonctionnement de la méthode Javascript native map()
// ce type de fonctionnement (callback) est commun à d'autres méthodes telles que forEach(), map(), filter(), reduce(), etc...
// c'est un pattern que vous rencontrerez très souvent

const arrayHt = [25, 10, 42, 100];

const arrTTC = arrayHt.map(function (currentElement) {
  // cette fonction est une fonction dite callback qui est exécutée pour chaque élément du tableau passé en argument
  // elle reçoit elle même en argument l'élément courant de la boucle

  // ici on retourne le calcul de tva qu'on limite à 2 chiffres après la virgule
  return +(currentElement *= 1.2).toFixed(2);
});

console.log("Avec map", arrTTC);

// exemple de fonctionnement de la méthode forEach() sur un tableau de nombres
arrayHt.forEach(function (element, index) {
  console.log(`Element courant à la position ${index} : `, element);
});

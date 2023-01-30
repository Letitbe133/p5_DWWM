// c'est quoi d'abord une fonction ?

// invocation de fonction
// console.log(addNumbers(2, 6));

// déclaration de fonction
// les fonctions déclarées avec le mot clé function sont "hoisted" c'est à dire que JS les remonte en tête de script
function addNumbers(nb1, nb2) {
  // corps de la fonction
  return nb1 + nb2;

  //   après le return le log ne fonctionnera pas, on est sorti de la fonction
  console.log(nb1 + nb2);
}

// on peut passer à une fonction des paramètres optionnels en leur affectant une valeur par défaut
const multiplyNumbers = function (nb1, nb2 = 5) {
  return nb1 * nb2;
};

console.log(multiplyNumbers(2, 50));

// fonctions fléchées
const strToUpper = (str) => {
  console.log(str);
  return str.toUpperCase();
};

// quel intérêt ?
// comment ça s'utilise ?
// déclaration
// appel
// nommées vs anonymes
// paramètres vs arguments
// paramètres optionnels
// return

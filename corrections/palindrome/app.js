// Correction de l'exercice "Palindrome"

// mot à vérifier
let word = "ici";

// mot inversé
let reversedWord = "";

// console.log(word.length);

// approche utilisant une boucle for()

// for (let index = word.length - 1; index >= 0; index--) {
//   // code à exécuter à chaque itération de la boucle

//   // pour chaque caractère de la string word, je vais l'ajouter à la string reversedWord
//   //   console.log(word[index]);
//   reversedWord += word[index];
// }

// console.log(reversedWord);

// // approche utilisant une transformation de le string en array
// reversedWord = word.split("");

// // on inverse le tableau avec reverse
// reversedWord = reversedWord.reverse();

// // je reconstitue une string à partir du tableau
// reversedWord = reversedWord.join("");

// one liner
reversedWord = word.split("").reverse().join("");

// console.log(typeof reversedWord, reversedWord);

// maintenant que j'ai les 2 strings je peux les comparer
// if (word === reversedWord) {
//   console.log("C'est un palindrome");
// } else {
//   console.log("Ce n'est pas un palindrome");
// }

//

// console.log(typeof word);

function isPalindrome(userWord) {
  let reversedUserWord = userWord.split("").reverse().join("");
  if (userWord === reversedUserWord) {
    return true;
  } else {
    return false;
  }
}

const words = ["radar", "test", "ici", "kayak", "rotor", "paris"];

// forEach permet de boucle sur un objet itérable (par exemple un tableau)
// elle prend en param une fonction qui recevra l'élément courant du tableau et exécutera du code en utilisant la valeur de cet élément
// words.forEach(function (element_courant_du_tableau) {
//   console.log(element_courant_du_tableau);
//   console.log(isPalindrome(element_courant_du_tableau));
// });

for (currentWord of words) {
  console.log(isPalindrome(currentWord));
}

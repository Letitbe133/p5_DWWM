// console.log("Js loaded !");

// on va sélectionner la balise h1
const h1 = document.getElementsByTagName("h1");
// attention, cette méthode renvoie une HTMLCollection, qu'on peut grossièrement assimiler à un array
// console.log(h1[0]);
// console.log(h1[0].textContent);

const sections = document.getElementsByTagName("section");
// console.log(sections);

// for (let i = 0; i < sections.length; i++) {
//   console.log(sections[i]);
// }

// pour transformer une HTMLCollection en array on peut utiliser la méthode from() sur l'objet Array
const sectionsArray = Array.from(sections);

// ensuite je peux boucler sur mon tableau en utilisant une boucle forEach
// sectionsArray.forEach(function (section) {
//   console.log(section);
// });

// 3ème option utiliser une boucle for...of
// for (let section of sections) {
//   console.log(section);
// }

// la méthode getElementById va nous permettre de récupérer la réf d'un élément HTML unique qui a l'id passée en paramètre

const firstSection = document.getElementById("first");
// console.log(firstSection);

// en fait on peut utiliser des méthodes qui vont nous faciliter la tâche
const input = document.querySelector("#third #first-name");
// console.log(input);

const secondP = document.querySelector("#second p:nth-child(3)");
// console.log(secondP.textContent);

// si je veux récupérer tous les paragraphes de la 2ème section
const secondSectionP = document.querySelectorAll("#second p");
console.log(secondSectionP);

// ensuite je peux parcourir la NodeList que me renvoie querySelectorAll et faire ce que je dois faire avec les éléments HTML dont je récupère la référence
for (let para of secondSectionP) {
  console.log(para);
}

// ajouter / supprimer une classe pour un élément HTML donné grâce à la propriété classList

// utiliser la méthode toggle() pour ajouter une classe si l'élément ne l'a pas, l'enlever sinon

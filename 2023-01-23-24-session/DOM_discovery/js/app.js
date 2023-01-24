// const body = document.getElementById("body");

// console.log(body.children);

// récupérer un élément du DOM par la valeur de son attribut ID
const section1 = document.getElementById("first");
// console.log(section1);

// récupérer un élément du DOM par son tag
// attention, renvoie une HTMLCollection qui ressemeble à un array (mais qui n'en est pas un)
const h2Collection = document.getElementsByTagName("h2");
// console.log(h2Collection);

// différentes méthodes pour parcourir la collection

// for (let cpt = 0; cpt < h2Collection.length; cpt++) {
//   let content = h2Collection[cpt].innerText;
//   content += " position " + cpt;
//   h2Collection[cpt].innerText = content;
//   console.log(h2Collection[cpt].innerText);
// }

// for (let element of h2Collection) {
//   console.log(element);
// }

// récupérer un élément du DOM par sa classe
const parags = document.getElementsByClassName("parag");

// console.log(parags);

// querySelector() prend en param un sélecteur CSS et retourne le premier élément qui matche avec ce sélecteur
// surySelectorAll() idem mais retourne une NodeList qui ressemble à un tableau et qui contient la référence à tous les éléments qui matchent avec le sélecteur
const section2 = document.querySelectorAll("#second .parag");

console.log(section2);

// récupérer la valeur de l'input de type text
const textInput = document.querySelector("input[type=text]");
console.log(textInput);

// afficher sa valeur
console.log(textInput.value);

// modifier sa valeur
textInput.value = "Gandalf";

// accéder au style des éléments
const h1 = document.querySelector("h1");

// on va modifier sa couleur
// h1.style.color = "pink";
// h1.style.fontSize = "3rem";
// h1.style.textAlign = "center";

console.log(h1.classList.add("pinky"));

// supprimer une classe d'un élément
h1.classList.remove("test");

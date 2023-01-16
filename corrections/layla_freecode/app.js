// Setup
const contacts = [
  {
    firstName: "Akira",
    lastName: "Laine",
    number: "0543236543",
    likes: ["Pizza", "Coding", "Brownie Points"],
  },
  {
    firstName: "Harry",
    lastName: "Potter",
    number: "0994372684",
    likes: ["Hogwarts", "Magic", "Hagrid"],
  },
  {
    firstName: "Sherlock",
    lastName: "Holmes",
    number: "0487345643",
    likes: ["Intriguing Cases", "Violin"],
  },
  {
    firstName: "Kristian",
    lastName: "Vos",
    number: "unknown",
    likes: ["JavaScript", "Gaming", "Foxes"],
  },
];

// function lookUpProfile(name, prop) {
//   // Only change code below this line
//   for (contact of contacts) {
//     // ici on récupère chaque objet contenu dans le tableau contacts
//     // on le stocke dans une variable temporaire contact

//     // trouver l'objet dont la propriété firstName === name
//     if (contact.firstName === name) {
//       if (contact.hasOwnProperty(prop)) {
//         console.log(contact[prop]);
//       } else {
//         console.log("Propriété non trouvée");
//       }
//     }
//   }
//   // Only change code above this line
// }

// lookUpProfile("Akira", "likes");

function getPropertyIfExists(contactName, propertyName) {
  // on parcourt le tableau contacts avec une boucle for...of qui va nous permettre de récupérer chaque contact
  for (contact of contacts) {
    // vérifier si le firstName du contact correspond à contactName
    if (contact.firstName === contactName) {
      // vérifier si la propriété existe pour ce contact
      if (contact.hasOwnProperty(propertyName)) {
        // on affiche la valeur de cette propéiété
        console.log(contact[propertyName]);
      } else {
        // si la propriété recherchée n'existe pas
        console.error("La propriété " + propertyName + " n'existe pas");
      }
    }
  }
}

// getPropertyIfExists("Akira", "pseudo");

const movie = {};

console.log(movie);

movie.name = "Avatar 2";

console.log(movie);

movie.name = "Avatar 3";

console.log(movie);

let userChoice = "name";

console.log(movie[userChoice]);

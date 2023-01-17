// Setup
const recordCollection = {
  2548: {
    albumTitle: "Slippery When Wet",
    artist: "Bon Jovi",
    tracks: ["Let It Rock", "You Give Love a Bad Name"],
  },
  2468: {
    albumTitle: "1999",
    artist: "Prince",
    tracks: ["1999", "Little Red Corvette"],
  },
  1245: {
    artist: "Robert Palmer",
    tracks: [],
  },
  5439: {
    albumTitle: "ABBA Gold",
  },
};

// Only change code below this line
function updateRecords(records, id, prop, value) {
  // le code va ici

  // si la valeur du paramètre prop est égale à "tracks" et que value ne contient pas une chaîne de caractères vide
  if (prop !== "tracks" && value !== "") {
    // on pourrait écrire simplement value qui serait évalué à false si la value est un string vide

    // on affecte à la propriété passée en paramètre la value pour
    records[id][prop] = value;
  }

  // si la valeur du paramètre prop est égale à "tracks"
  if (prop === "tracks") {
    // si la propriété passée en paramètre n'existe pas, on la crée et on lui affecte un tableau vide
    if (!records[id].hasOwnProperty("tracks")) {
      records[id][prop] = [];
    }

    // ensuite on ajoute la value à la fin du tableau en utilisant la méthode push()
    records[id][prop].push(value);
  }

  // si la value est vide
  if (!value) {
    // on efface la propriété pour cet objet
    delete records[id][prop];
  }

  // on retourne la collection complète après traitement
  return records;
}

// const collection = updateRecords(recordCollection, 5439, "artist", "ABBA");

// const collection = updateRecords(
//   recordCollection,
//   5439,
//   "tracks",
//   "Take a Chance on Me"
// );

const collection = updateRecords(recordCollection, 2548, "artist", "");

// const collection = updateRecords(
//   recordCollection,
//   1245,
//   "tracks",
//   "Addicted to Love"
// );

// const collection = updateRecords(recordCollection, 2468, "tracks", "Free");

// const collection = updateRecords(recordCollection, 2548, "tracks", "");

// const collection = updateRecords(
//   recordCollection,
//   1245,
//   "albumTitle",
//   "Riptide"
// );

console.log(collection);

// const obj = {
//   firstName: "Michael",
// };

// let userName = "firstName";

// console.log(obj["firstName"]);

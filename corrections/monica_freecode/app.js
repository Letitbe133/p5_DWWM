const person = {
  firstName: "Monica",
  country: "France",
};

console.log(person);

function checkIfPropertyExistsForObject(objectToCheck, propertNameToCheck) {
  if (typeof objectToCheck !== "object") {
    return "This is not an object";
  }
  // on veut vérifier si la propriété existe pour cet objet
  // si c'est le cas on affiche la valeur de cette propriété
  if (objectToCheck.hasOwnProperty(propertNameToCheck)) {
    return objectToCheck[propertNameToCheck];
  }
  // sinon on affiche "Not Found"
  return "Not Found";
}

let result = checkIfPropertyExistsForObject(42, "lastName");

console.log(result);

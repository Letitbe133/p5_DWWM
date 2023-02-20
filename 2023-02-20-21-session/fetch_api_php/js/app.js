// https://jsonplaceholder.typicode.com/todos

// appel fetch classique avec chaînage .then

// récup de la ressource
// fetch("https://jsonplaceholder.typicode.com/todos", {
//   method: "GET",
//   headers: {
//     Accept: "application/json",
//   },
// })
//   .then(function (response) {
//     // console.log(response);
//     return response.json();
//   })
//   .then(function (todos) {
//     // console.table(data);

//     // data contient un tableau d'objets
//     // on veut récupérer tous les todos dont la prop completed est à false

//     const notCompletedTodos = todos.filter(function (todo) {
//       return todo.completed === false;
//     });

//     console.table(notCompletedTodos);
//   });

// utilisation de async / await
// on déclare une fonction getTodos qui va être asynchrone
async function getTodos() {
  // à l'intérieur on fait notre fetch, puis on attend la réponse
  const response = await fetch("https://jsonplaceholder.typicode.com/todos");
  //   console.log(response);

  //   une fois la réponse reçue, on peut la traiter et récupérer les données
  const todos = await response.json();

  console.table(todos);
}

// ici on appelle la fonction
getTodos();

// TODOS : ajouter la gestion d'erreurs éventuelles

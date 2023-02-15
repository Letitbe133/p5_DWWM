// url de base qui pointe vers les ressources que je veux récupérer
const url = "https://jsonplaceholder.typicode.com/users/";

// éléments du DOM avec lesquels je veux interagir
const userBtn = document.querySelector("#user-btn");
const results = document.querySelector("#results");

// simple interaction au click sur mon bouton
userBtn.addEventListener("click", function () {
  // première étape on se connecte à la ressource et on récupère la réponse
  fetch(url)
    .then(function (response) {
      // ensuite on convertit la réponse reçue en JSON au format objet javascript
      return response.json();
    })
    .then(function (data) {
      // on récupère les données et on les exploite
      console.log(data);
      for (let user of data) {
        const html = `
      <div>
        <p>Nom : ${user.name} </p>
        <p>Email : ${user.email}</p>
      </div>
      `;
        results.innerHTML += html;
      }
    });
});

// attention fetch est asynchrone
// const todos = fetch("https://jsonplaceholder.typicode.com/todos/")
//   .then(function (response) {
//     return response.json();
//   })
//   .then(function (data) {
//     return data;
//   });

// console.log(todos);

// on va créer un nouveau user en envoyant des données en POST à l'API

// on crée un objet qui représente un article
// on se base sur la structure de données de l'API
const newPost = {
  id: 10,
  title: "Titre de l'article",
  body: "Contenu de l'article",
  userId: 2,
};

// on envoie une requête HTTP en POST
fetch("https://jsonplaceholder.typicode.com/posts/", {
  method: "POST",
  body: JSON.stringify(newPost),
  headers: {
    "Content-type": "application/json",
  },
})
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    console.log(data);
  });

fetch("sample.txt")
  .then(function (res) {
    return res.text();
  })
  .then(function (text) {
    console.log(text);
  });

// test push

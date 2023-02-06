// créer un élément HTML de type paragraphe
const para = document.createElement("p");

// ajouter le contenu
para.innerText = "Hello World !";

// ajouter le paragraphe au DOM
document.body.append(para);

// on veut ajouter du contenu dynamique à la section lib

// récup la ref de la section#lib
const sectionLib = document.querySelector("#lib");

// je crée mon article
const article = document.createElement("article");

// je crée mon h2
const title = document.createElement("h2");

// je crée mon p
const content = document.createElement("p");

// j'ajoute le contenu
title.innerText = "Le titre de Monica";

content.innerText = "Contenu du paragraphe";

// j'ajoute mes éléments
article.append(title, content);

// j'ajoute l'article à ma section#lib
sectionLib.append(article);

// on va travailler avec un tableau d'objets
// console.log(todos);

const todosSection = document.querySelector("#todos");

// on va parcourir le tableau todos
for (let todo of todos) {
  console.log(todo);

  const htmlContent = `
  <article class="card">
    <h2>${todo.title}</h2>
    <p>User : ${todo.userId}</p>
    <p>Id : ${todo.id}</p>
    <p>Completed : ${todo.completed}</p>
  </article>
  `;

  //   on ajoute notre template à la section#todos
  todosSection.innerHTML += htmlContent;
}

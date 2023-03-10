//console.log("Hello World !");

const todoBtn = document.querySelector("#todo");
const doneBtn = document.querySelector("#done");
const allBtn = document.querySelector("#all");

const todos = document.querySelectorAll("#todos article");

doneBtn.addEventListener("click", function (event) {
  //   console.log(event.target);

  // on parcourt la NodeList des todos
  // pour chaque todo on s'assure de retirer la classe .hide
  for (const todo of todos) {
    todo.classList.remove("hide");
  }

  // 1ere étape récupérer tous les todos qui ne sont pas terminé
  // on converti todos en array
  const filteredTodos = Array.from(todos).filter(function (todo) {
    // on va vérifier si data-completed est false
    return todo.dataset.completed === "false";
  });

  //   console.log(filteredTodos);

  // 2émé étape : masquer ces éléments
  for (const todo of filteredTodos) {
    todo.classList.add("hide");
  }
});

todoBtn.addEventListener("click", function (event) {
  console.log(event.target);

  // on parcourt la NodeList des todos
  // pour chaque todo on s'assure de retirer la classe .hide
  for (const todo of todos) {
    todo.classList.remove("hide");
  }

  // 1ere étape récupérer tous les todos qui sont terminés
  // on converti todos en array
  const filteredTodos = Array.from(todos).filter(function (todo) {
    // on va vérifier si data-completed est false
    return todo.dataset.completed === "true";
  });

  //   console.log(filteredTodos);

  // 2émé étape : masquer ces éléments
  for (const todo of filteredTodos) {
    todo.classList.add("hide");
  }
});

allBtn.addEventListener("click", function (event) {
  // console.log(event.target);

  // on parcourt la NodeList des todos
  // pour chaque todo on s'assure de retirer la classe .hide
  for (const todo of todos) {
    todo.classList.remove("hide");
  }
});

// soumission d'un formulaire via une requête POST vie AJAX

const form = document.querySelector("#form");

form.addEventListener("submit", (event) => {
  // on empêche le comportement par défaut du form qui est la soumission
  event.preventDefault();
  console.log("Form submitted");

  //   on récupère les données du formulaire
  // pour ça on va utiliser un objet Formdata()
  // c'est en fait un constructeur permettant de créer un objet qui va nous permettre de travailler facilement avec les formulaires.
  const formdata = new FormData(event.target);

  // démo pour afficher les données récupérées lors de la soumission du formulaire grâce à la méthode entrie()
  //   for (let entry of formdata.entries()) {
  //     console.log(entry);
  //   }

  // on peut maintenant faire notre requête AJAX en Fetch à notre script php
  fetch("api/index.php", {
    method: "POST",
    body: formdata,
  })
    .then((response) => response.json())
    .then((data) => console.log(data));
});

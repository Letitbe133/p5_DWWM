// comment fonctionne un event en js ?

// window.addEventListener("load", function () {
//   console.log("Ressources chargées");
// });

// window.addEventListener("DOMContentLoaded", (event) => {
//   //   console.log("DOM chargé");
//   //   console.log(
//   //     "L'objet qui représente l'événement qui vient de se produire",
//   //     event
//   //   );
//   console.log(event.target);
// });

// je veux écouter un event sur le click du bouton
const btnIncrement = document.querySelector("#increment");
const btnDecrement = document.querySelector("#decrement");

btnIncrement.addEventListener("click", function () {
  //   console.log("Le bouton a été cliqué");
  const counter = document.querySelector("#count");
  counter.textContent = parseInt(counter.textContent) + 1;
});

btnDecrement.addEventListener("click", function () {
  //   console.log("Le bouton a été cliqué");

  //   on récupère la ref de l'élément qui va afficher le compteur
  const counter = document.querySelector("#count");

  //   on teste si la valeur du compteur est = ou < 0
  if (parseInt(counter.textContent) <= 0) {
    // si c'est le cas on affecte la valeur 0 qui est la valeur minimum
    counter.textContent = 0;
    btnDecrement.disabled = true;
  } else {
    // sinon on peut décrémenter
    counter.textContent = parseInt(counter.textContent) - 1;
    btnDecrement.disabled = false;
  }
});

// event listener pour l'event scroll
window.addEventListener(
  "scroll",
  function (event) {
    //   console.log(event);
    console.log(window.scrollY);
  },
  {
    once: true,
  }
);

const form = document.querySelector("form");

form.addEventListener("submit", (event) => {
  //   event.preventDefault();
  const inputValue = form.querySelector("#name").value;
  console.log(inputValue);

  let isValid = true;

  //   si l'input est vide
  if (!inputValue) isValid = false;
  if (inputValue.length < 2 || inputValue.length > 30) isValid = false;

  if (!isValid) event.preventDefault();
});

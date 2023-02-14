// const url = "https://jsonplaceholder.typicode.com/posts/";
const url = "https://api.cdnjs.com/libraries/";

const search = document.querySelector("#search");

search.addEventListener("change", (e) => {
  getLibs(url, e.target.value);
});

const displayData = (data) => {
  console.log(data);
};

const getLibs = async (url, searchTerms) => {
  const endpoint = `${url}?search=${searchTerms}&search_fields=name&fields=description`;
  const response = await fetch(endpoint);
  const data = await response.json();
  displayData(data);
};

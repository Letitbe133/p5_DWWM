const authBtn = document.querySelector("#auth");

authBtn.addEventListener("click", (e) => {
  console.log("click");
  getCode();
});

// paramètres d'authentification à passer dans l'url pour obtention du code temporaire (validité 10mn)
const credentials = {
  client_id: "CLIENT_ID",
  allow_signup: false,
  redirect_uri: "URL_SERVEUR_FRONT",
};

// redirection vers l'url Github pour génération du code
function getCode() {
  window.location.href = `https://github.com/login/oauth/authorize?scope=user,repo&client_id=${credentials.client_id}&allow_signup=${credentials.allow_signup}`;
}

// récupération du code dans l'url
const code = window.location.href.includes("?code=")
  ? window.location.href.split("?code=")[1]
  : null;

// si le code a été récupéré, appel AJAX au serveur backend pour récupération du token
if (code) {
  getToken(code, credentials);
}

async function getToken(code, credentials) {
  const { client_id, redirect_uri } = credentials;

  const formData = new FormData();

  formData.append("client_id", client_id);
  formData.append("redirect_uri", redirect_uri);
  formData.append("code", code);

  const options = {
    method: "POST",
    headers: {
      Accept: "application/json",
    },
    body: formData,
    mode: "cors",
  };

  const res = await fetch("http://localhost:8000", options);
  const data = await res.json();
  const token = data.split("&")[0].split("=")[1];
  console.log(token);
}

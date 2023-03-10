# Filtre dynamique JS

## How To

- décompresser le dossier à l'endroit de votre choix
  - votre localhost (htdocs ou html)
    - tapez `http://localhost/nom_du_dossier` dans l'url
  - ailleurs sur votre machine
    - dans ce cas, une fois décompressé, rendez vous dans votre dossier et lancez un serveur de développement `php -S localhost:8000`
- A ce stade vous aurez une erreur car la connexion à la BDD n'est pas encore configurée. Pour ce faire :
  - lancez `phpmyadmin` et créez une base de données vide
  - rendez vous ensuite dans la bdd et importez le script `todo_demo.sql` fourni
  - vérifiez que la bdd a bien été importée. Vous devez avoir une table `todos` contenant 4 enregistrements.
- ouvrez ensuite le fichier `config.php` dans le dossier `database` et renseignez
  - le nom de votre table
  - votre nom d'utilisateur mysql (root par défaut)
  - votre mot de passe (vide par défaut)
- Actualisez votre navigateur, vous devriez avoir à l'écran une page web affichant un titre, 3 boutons et 4 todos

## Disclaimer

Bien sûr ce code est une première itération et peut être optimisé pour éviter par exemple les duplications de code

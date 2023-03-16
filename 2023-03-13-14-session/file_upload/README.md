# File Upload

## Petite récap de ce qu'on a mis en place ensemble

- Pour pouvoir uploader un fichier à partir d'un formulaire, il est nécessaire d'ajouter à la balise `<form>` un attribut `enctype` dont la valeur sera `multipart/form-data`, sans cela, l'upload ne fonctionnera pas.
- On aura aussi besoin d'un `<input>` de type `file` (optionnellement on pourra lui ajouter un attribut `multiple` si on veut pouvoir uploader plusieurs fichiers).
- Côté PHP on va d'abord vérifier si le formulaire a été soumis.
- On vérifie si aucun fichier n'a été reçu. Dans ce cas on lèvera une exception qui arrêtera l'exécution du script.
- On vérifie ensuite s'il y a une erreur au niveau du fichier. De la même manière, si c'est le cas on lève une exception.
- On définit quelles sont les extensions de fichier autorisées.
- On définit la taille maximum du fichier. Ici 1Mb (pour info, la taille max des fichiers pouvant être téléversés est définie au niveau du serveur dans le fichier `php.ini` et est modifiable).
- On récupère le `mime type` du fichier et on extrait son extension.
- Si l'extension n'est pas autorisée, on lève une exception.
- Si la taille du fichier excède la taille maximum fixée on lève une exception.
- Si tout est ok, on crée un nom unique pour le fichier avant de le stocker. Pour celà on utilise la méthode PHP `uniqid()` qui retourne une chaîne de caractères unique qu'on concatène avec le nom originel du fichier.
- Grâce à la méthode `move_uploaded_file()` on déplace le fichier du stockage temporaire vers le dossier `uploads/`
- Si une erreur survient durant cette opération, on lève une exception.

## Changements

Par rapport au code qu'on a mis en place ensemble, j'ai apporté quelques modifications :

- Le code PHP de traitement est externalisé dans un fichier `uploadProcess.php` qui est required au tout début du fichier `index.php` afin de ne pas mélanger affichage et traitement.
- Tout le process est exécuté dans un bloc `try...catch` qui va permettre de capturer les erreurs et les traiter
- Au lieu de faire des `die` ou des `exit`, j'utilise ici les `exceptions` qui permettent de gérer les erreurs éventuelles de manière plus propre et efficace.

## That's All Folks

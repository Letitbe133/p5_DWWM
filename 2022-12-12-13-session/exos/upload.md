# Image Uploader

## Objectif

Créer un formulaire permettant à un utilisateur d'uploader une image.

## Fonctionnement

L'image sera sauvegardée dans un dossier `images` côté serveur et son nom devra être **unique** (il faut éviter qu'on puisse sauvegarder 2 images ayant le même nom et la même extension).

Une solution simple peut être d'ajouter au nom de fichier initial un `timestamp` correspondant au moment de l'upload.

L'upload sera traité côté serveur par un script `PHP` qui rècupèrera les données du formulaire.

L'utilisateur ne doit pas pouvoir soumettre un formulaire vide.

Seuls les fichiers avec les extensions `jpg, jpeg, png` sont autorisés.

La taille des fichiers ne doit pas excéder **2Mo**

Si l'upload se passe comme prévu, le script PHP loggera dans un fichier `log.txt` le **nom du fichier**, le **timestamp** de l'upload sur une nouvelle ligne.

Si le fichier n'existe pas au lancement du script, il sera automatiquement créé.

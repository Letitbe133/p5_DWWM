<?php
$mdp = 'Lionel';
$mdp2 = 'Lionel';

$hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);
$hashedPassword2 = password_hash($mdp2, PASSWORD_DEFAULT);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash / Verify</title>
    <script src="js/app.js" defer></script>
</head>

<body>
    <h1>Hash / Verify</h1>
    <div>
        <form action="">
            <label for="name">Name
                <input type="text" name="" id="name" required minlength="2" maxlength="30">
            </label>
            <button type="submit">Login</button>
        </form>
    </div>
    <div>
        <p>Mot de passe hashé : <?php echo $hashedPassword; ?></p>
    </div>
    <div>
        <p>Comparaison des 2 mdp :
            <?php var_dump($hashedPassword === $hashedPassword2); ?>
        </p>
    </div>
    <div>
        <p>Vérification d'un mdp :
            <?php var_dump(password_verify($mdp2, $hashedPassword)); ?>
        </p>
    </div>



</body>

</html>
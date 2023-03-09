<?php

require_once 'database/config.php';

require_once 'database/Database.php';

require_once 'functions/functions.php';

// $db = new Database($config);

// $db->connect();

$todos = getAllTodos(new Database($config));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Tri Dynamique</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js" defer></script>
</head>
<body>
    <h1>Ma Todo List</h1>

    <?php

require_once 'views/view.todos.php';
?>

</body>
</html>
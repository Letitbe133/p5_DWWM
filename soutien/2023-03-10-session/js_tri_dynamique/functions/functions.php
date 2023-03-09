<?php

function getAllTodos($db)
{
    $sql = 'SELECT * FROM todos';
    $conn = $db->connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}

function render($view, $data)
{
    if (file_exists("views/view.{$view}.php")) {
        extract($data);

        require_once "views/view.{$view}.php";
    }
}

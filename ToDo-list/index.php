<?php
    require_once 'classes/Todo.php';
    require 'classes/TodoManager.php';
    $newItem = new Todo();
    $newItem->title = htmlspecialchars($_POST['title']);
    $newItem->name = htmlspecialchars($_POST['name']);

    $todoManager = new TodoManager("data.txt");
    $todoManager->insertItem($newItem);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDO List</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <p>Add a new task</p>
            <input type="text" name="title">
            <input type="text" name="name">
            <input type="submit" value="Add" name="submitButton">
        </form>


    </div>
</body>
</html>
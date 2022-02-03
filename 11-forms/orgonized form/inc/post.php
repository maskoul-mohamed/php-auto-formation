<?php
    if(isset($_POST['name'], $_POST['email'])){

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);


        echo "Thanks $name for your subscription.<br>";
        echo "Please confirm it in youe inbox email.";
    } else {
        "You need to provide your name and email address";
    }
?>
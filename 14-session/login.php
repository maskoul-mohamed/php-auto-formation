<?php
    session_start();

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), "", time() - 3600,'/login.php');
        

    }
    $_SESSION[] = array();

    session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p>Welcome to my website</p>
    
</body>
</html>
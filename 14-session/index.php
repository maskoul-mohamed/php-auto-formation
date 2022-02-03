<?php
    session_start();

    $_SESSION["user"] = 'admin';
    $_SESSION["roles"] = ['administrator', 'approver', 'editor'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPH session demo</title>
</head>
<body>
    <a href="profile.php">Go to profile page</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form example</title>
</head>
<body>

    <form action="login.php" method="post">
        <label for="username">Name:</label>
        <input type="text" name="username" id="usernameInput" required>

        <label for="password"></label>
        <input type="password" name="password"  id="passwordInput" required>

        <button type="submit">Login</button>
    </form>
    
</body>
</html>
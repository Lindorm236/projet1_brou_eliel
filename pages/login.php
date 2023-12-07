<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="../results/loginResult.php" method="post">
        <label for="">nom d'utilisateur</label>
        <input type="text" name="user_name" id="user_name">
        <label for="password">mot de passe</label>
        <input type="text" name="pwd" id="pwd">
        <button type="submit">se connecter</button>

    </form>
</body>

</html>
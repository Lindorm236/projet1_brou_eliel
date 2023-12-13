<?php
session_start();
$user_name = '';
if (isset($_SESSION['login_form']['user_name'])) {
    $user_name = $_SESSION['login_form']['user_name'];
}
$pwd = '';
if (isset($_SESSION['login_form']['pwd'])) {
    $pwd = $_SESSION['login_form']['pwd'];
}
var_dump($_SESSION);
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
        <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['login_errors']['user_name']) ? $_SESSION['login_errors']['user_name'] : '' ?></p>

        <label for="password">mot de passe</label>
        <input type="text" name="pwd" id="pwd">
        <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['login_errors']['pwd']) ? $_SESSION['login_errors']['pwd'] : '' ?></p>

        <button type="submit">se connecter</button>

    </form>
</body>

</html>
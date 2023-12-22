<?php
session_start();

$user_name = '';
if (isset($_SESSION['signup_form']['user_name'])) {
    $user_name = $_SESSION['signup_form']['user_name'];
}
$email = '';
if (isset($_SESSION['signup_form']['email'])) {
    $email = $_SESSION['signup_form']['email'];
}
$pwd = '';
if (isset($_SESSION['signup_form']['pwd'])) {
    $pwd = $_SESSION['signup_form']['pwd'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>

<body>

    <form action="../results/signupResult.php" method="post" name="formInscription">
        <label for="user_name">Nom d'utilisateur</label>
        <!-- Validation du user name -->
        <input type="text" name="user_name" id="user_name" value="<?php echo isset($_SESSION['signup_form']['user_name']) ? $_SESSION['signup_form']['user_name'] : '' ?>">

        <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['user_name']) ? $_SESSION['signup_errors']['user_name'] : '' ?></p>


        <!-- Validation du mail -->
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo isset($_SESSION['signup_form']['email']) ? $_SESSION['signup_form']['email'] : '' ?>">
        <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['email']) ? $_SESSION['signup_errors']['email'] : '' ?></p>

        <!-- Validation du mot de passe -->
        <label for="pwd">Mot de passe</label>
        <input type="password" name="pwd" id="pwd" value="<?php echo isset($_SESSION['signup_form']['pwd']) ? $_SESSION['signup_form']['pwd'] : '' ?>">
        <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['pwd']) ? $_SESSION['signup_errors']['pwd'] : '' ?></p>

        <!-- Validation du nom -->
        <label for="fname">Nom</label>
        <input type="text" name="fname" id="fname" value="<?php echo isset($_SESSION['signup_form']['fname']) ? $_SESSION['signup_form']['fname'] : '' ?>">
        <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['fname']) ? $_SESSION['signup_errors']['fname'] : '' ?></p>

        <!-- Validation du prenom -->
        <label for="lname">Prenom(s)</label>
        <input type="text" name="lname" id="lname" value="<?php echo isset($_SESSION['signup_form']['lname']) ? $_SESSION['signup_form']['lname'] : '' ?>">
        <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['lname']) ? $_SESSION['signup_errors']['lname'] : '' ?></p>

        <button type="submit" name="formInscription">S'inscrire</button>
    </form>
</body>
<?php

?>

</html>
<?php
require_once "../functions/userCrud.php";
require_once "../functions/validationSignup.php";
require_once "../utils/connexion.php";
require_once "../functions/functions.php";
session_start();
$idRecupered = $_POST["id"];
$changedUsername = $_POST["user_name"];
$changedEmail = $_POST["email"];
$changedFname = $_POST["fname"];
$changedLname = $_POST["lname"];

echo ($idRecupered);
echo ($changedUsername);
echo ($changedEmail);
echo ($changedFname);
echo ($changedLname);

$data = [
    'id' => $idRecupered,
    'user_name' => $changedUsername,
    'email' => $changedEmail,
    'fname' => $changedFname,
    'lname' => $changedLname
];
$save = updateUser($data);

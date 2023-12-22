<?php
require_once "../functions/userCrud.php";
require_once "../functions/validationSignup.php";
require_once "../utils/connexion.php";
require_once "../functions/functions.php";
session_start();
//Recupère toutes les données modifiées dans 
if (isset($_POST["user_name"]) and isset($_POST["email"]) and isset($_POST["fname"]) and isset($_POST["lname"])) {
    $idRecupered = $_POST["id"];
    $changedUsername = $_POST["user_name"];
    $changedEmail = $_POST["email"];
    $changedFname = $_POST["fname"];
    $changedLname = $_POST["lname"];

    //Mettre les données dans un data
    $data = [
        'id' => $idRecupered,
        'user_name' => $changedUsername,
        'email' => $changedEmail,
        'fname' => $changedFname,
        'lname' => $changedLname
    ];
    //modifie dans la base de données
    $save = updateUser($data);
    $url = "../pages/AccueilAdmin.php";
    header('Location: ' . $url);
}

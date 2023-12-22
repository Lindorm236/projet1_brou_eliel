<?php
require_once "../functions/userCrud.php";
require_once "../functions/validationSignup.php";
require_once "../utils/connexion.php";
require_once "../functions/functions.php";
session_start();
echo "<h2>Vous reviendrez sur la page précédente si vous n'entrez pas les bonnes valeurs";
//Recupère toutes les données modifiées dans 
if (isset($_POST["role_id"])) {

    $idRecupered = $_POST["id"];

    $changedRole = $_POST["role_id"];
    if (($changedRole == "1") or ($changedRole == "super_adminstrateur")) {
        //Mettre les données dans un data

        $data = [
            'id' => $idRecupered,
            'role_id' => 1
        ];
        //modifie dans la base de données
        $save = updateUserRoleId($data);
    } elseif (($changedRole == "2") or ($changedRole == "adminstrateur")) {
        //Mettre les données dans un data

        $data = [
            'id' => $idRecupered,
            'role_id' => 2
        ];
        $save = updateUserRoleId($data);
        //modifie dans la base de données
    } elseif (($changedRole == "3") or ($changedRole == "client")) {
        //Mettre les données dans un data

        $data = [
            'id' => $idRecupered,
            'role_id' => 3
        ];
        //modifie dans la base de données
        $save = updateUserRoleId($data);
    } else {
        $url = "../gestionAdmin/changerRole.php";
        header('Location: ' . $url);
    }
    //redirige vers la page d'accueil d'admin
    $url = "../pages/AccueilAdmin.php";
    header('Location: ' . $url);
} else {
    //redirige vers la page de role
    $url = "../gestionAdmin/changerRole.php";
    header('Location: ' . $url);
}

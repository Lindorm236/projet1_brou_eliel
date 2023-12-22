<?php

require_once "../functions/userCrud.php";
require_once '../functions/functions.php';
require_once '../utils/connexion.php';

session_start();
$userName = $_POST["user_name"];


$verif = true;
if (isset($userName)) {
    if (!empty($userName)) {
        $recupInfo = getUserByUsername($userName);
        //recupère les informations et les analyse
        if ($recupInfo) {
            //affichera les informations dans les champs si les informations existent
?>
            <h1>Que voulez vous changer ?</h1>
            <h2>Entrez la valeur a changer svp !</h2>
            <form action="../results/verificationModification.php" method="post">
                <input type="text" value="<?php echo ($recupInfo["id"]) ?>" id="id" name="id" hidden>
                <input type="text" value="<?php echo ($recupInfo["user_name"]) ?>" id="user_name" name="user_name">
                <input type="text" value="<?php echo ($recupInfo["email"]) ?>" id="email" name="email">
                <input type="text" value="<?php echo ($recupInfo["fname"]) ?>" id="fname" name="fname">
                <input type="text" value="<?php echo ($recupInfo["lname"]) ?>" id="lname" name="lname">
                <button type="submit" value="Valider">valider</button>
            </form>
<?php
        } else {
            //si elles n'existent pas, elle affiche l'erreur
            echo "<span>N'existe pas dans la base de données</span>";
        }
    } else {
        //si la valeur du username est vide 
        echo "error";
    }
}

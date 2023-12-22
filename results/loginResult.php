<?php

require_once '../functions/userCrud.php';
require_once '../functions/functions.php';
require_once '../utils/connexion.php';



//Authentification

if (isset($_POST)) {

    //vérifier si username dans DB
    if (!empty($_POST['user_name'])) {
        $userData = getUserByUsername($_POST['user_name']);
    } else {
        //Erreur rien entré
        //redirect vers login
        $url = '../pages/login.php';
        header('Location: ' . $url);
    }


    //si l'utilisateur exist dans la DB
    if ($userData) {
        // comparer pwd avec DB (version encodée)
        $enteredPwdEncoded = encodePwd($_POST['pwd']);
        if ($userData['pwd'] == $enteredPwdEncoded) {

            //traitement si mdp correct
            //créeer un token
            $token = hash('sha256', random_bytes(32));
            echo '</br></br>Mon token : </br>';
            $dataUserRoleId = $userData["role_id"];
            if ($dataUserRoleId == 1) {
                $url = '../pages/accueilAdmin.php';
                header('Location: ' . $url);
            } elseif ($dataUserRoleId == 3) {
                $url = '../pages/accueilClient.php';
                header('Location: ' . $url);
            }

            //enregistrer le token en Session et dans la DB

            echo "C'est le bon mdp ";
        } else {
            //traitement si mdp incorrect
            //compter lenombre d'erreur et bloquer l'IP apres 3 erreur
            //Les erreurs peuvent etre dans une Session
            //Proposer de réinitialiser le mdp
            //Créer un msg d'erreur
            //renvoyer sur la page login
            echo "C'est pas le bon mdp ";
        }
    }
} else {
    //redirect vers login
    $url = '../pages/login.php';
    header('Location: ' . $url);
}

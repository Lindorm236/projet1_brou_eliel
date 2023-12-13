<?php
// {todo : si les informations entrées dans 
//la base de données, 
//faire une direction vers une page en fonction de son statut}

//Sinon 
?>

<?php


//require_once '../functions/functions.php';


var_dump($_POST);

if (isset($_POST)) {

    //vérifier si username dans DB
    if (!empty($_POST['user_name'])) {
        $userData = getUserByUsername($_POST['user_name']);
        var_dump($userData);
        $url = '../pages/login.php';
        header('Location: ' . $url);
    } else {
        //Erreur rien entré
        //redirect vers login

        $url = '../pages/signup.php';
        header('Location: ' . $url);
    }
}
?>

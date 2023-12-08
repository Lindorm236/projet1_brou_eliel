
<?php
require_once "../functions/userCrud.php";
//Fonction pour le verifier le nom
function is_user_name_valid(string $user_name): array
{

    $result = [
        "isValid" => true,
        "msg" => ""
    ];

    $userInDB = getUserByUsername($user_name);


    if (strlen($user_name) < 4) {
        $result = [
            "isValid" => false,
            "msg" => "Entrez un nom d'utilisateur valide (4 caractères ou plus)"
        ];
    }

    //verif si existe deja dans la DB
    elseif ($userInDB) {
        $result = [
            "isValid" => false,
            "msg" => "existe deja"
        ];
    }
    return $result;


    return $result;



    if (strlen($user_name) > 20) {
        $result = [
            "isValid" => false,
            "msg" => "Votre nom d'tilisateur est trop long (moins de 20 caractères)"
        ];
    }
}


function is_password_valid(string $password): array
{

    $result = [
        "isValid" => true,
        "msg" => ""
    ];
    if (strlen($password) < 6) {
        $result = [
            "isValid" => false,
            "msg" => "Entrez un mot de passe plus sécuritaire (6 caractères ou plus)"
        ];
        //verif si existe deja dans la DB
        // $result = [
        //     "isValid" => false,
        //     "msg" => "existe deja"
        // ];

    }
    return $result;
    if (strlen($password) > 16) {
        $result = [
            "isValid" => false,
            "msg" => "Entrez un mot de passe plus sécuritaire (moins de 16 caractères)"
        ];
    }
}


function is_email_valid(string $email): array
{

    $result = [
        "isValid" => true,
        "msg" => ""
    ];
    if (strlen($email) <= 2) {
        $result = [
            "isValid" => false,
            "msg" => "entrez un email"
        ];
        //verif si existe deja dans la DB
        // $result = [
        //     "isValid" => false,
        //     "msg" => "existe deja"
        // ];

    }
    return $result;
    $email_validation_regex = "/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
    if (!preg_match($email_validation_regex, $email)) {
        $result = [
            'isValid' => false,
            'msg' => "Format d'email invalide",
        ];
    }
    return $result;
}

function is_fname_valid(string $fname): array
{

    $result = [
        "isValid" => true,
        "msg" => ""
    ];
    if (strlen($fname) <= 0) {
        $result = [
            "isValid" => false,
            "msg" => "Entrez votre nom"
        ];
        //verif si existe deja dans la DB
        // $result = [
        //     "isValid" => false,
        //     "msg" => "existe deja"
        // ];

    }
    return $result;
    if (is_numeric($fname)) {
        $result = [
            "isValid" => false,
            "msg" => "vous ne pouvez pas avoir un nom numérique !"
        ];
    }
    return $result;
}

function is_lname_valid(string $lname): array
{

    $result = [
        "isValid" => true,
        "msg" => ""
    ];
    if (strlen($lname) < 2) {
        $result = [
            "isValid" => false,
            "msg" => "Entrez un prénom svp !"
        ];
        //verif si existe deja dans la DB
        // $result = [
        //     "isValid" => false,
        //     "msg" => "existe deja"
        // ];

    }
    return $result;

    if (is_numeric($lname)) {
        $result = [
            "isValid" => false,
            "msg" => "vous ne pouvez pas avoir des prénoms numériques !"
        ];
    }
    return $result;
}

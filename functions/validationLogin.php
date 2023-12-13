<?php
require_once "../functions/userCrud.php";

function userNameVerification(string $user_name): array
{
    $result = [
        "isValid" => true,
        "msg" => ""
    ];
    $userInDB = getUserByUsername($user_name);

    if (empty($user_name)) {
        $result = [
            "isValid" => false,
            "msg" => "Le champ est vide "
        ];
    } elseif ($userInDB == false) {
        $result = [
            "isValid" => false,
            "msg" => "N'existe pas"
        ];
    }
    return $result;
}

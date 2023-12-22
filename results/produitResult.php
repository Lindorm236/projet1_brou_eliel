<?php
require_once "../functions/userCrud.php";
require_once "../functions/validationSignup.php";
require_once "../utils/connexion.php";
require_once "../functions/functions.php";
require_once "../functions/productCrud.php";
session_start();
$i = 0;
//si panier exist 
if (isset($_SESSION["panier"])) {
    //sinon changer quantite
    if ($_SESSION["panier"][$_POST["id"]] == $_POST["id"]) {
        $_SESSION["panier"]["quantite"] = +$_POST["quantite"];
        $_SESSION["panier"]["price"] = $_POST["price"];

        echo ("le produit existait ");
    } else {
        //si le produit est pas encore dans le panier : ajouter au panier 
        $_SESSION["panier"][$_POST["id"]] = [
            "id" => $_POST["id"],
            "quantity" => $_POST["quantite"],
            "price" => $_POST["price"]
        ];
        $i = +1;
        $data = [
            "order_id" => $i,
            "product_id" => $_POST["id"],
            "quantity" => $_POST["quantite"],
            "price" => $_POST["price"]
        ];
        $ajout = createUserOrder($data);
        echo ("le produit n'existait pas et l'a ajouté ");
    }
} else {
    //sinon creer panier et ajouter au panier
    $_SESSION["panier"][$_POST["id"]] =
        [
            "product_id" => $_POST["id"],
            "quantity" => $_POST["quantite"],
            "price" => $_POST["price"]
        ];
    $i = +1;
    $data = [
        "order_id" => $i,
        "product_id" => $_POST["id"],
        "quantity" => $_POST["quantite"],
        "price" => $_POST["price"]
    ];
    $ajout = createUserOrder($data);
    echo ("le produit n'existait pas et l'a ajouté ");

    echo ("n'exitait pas et a ajouté");
}

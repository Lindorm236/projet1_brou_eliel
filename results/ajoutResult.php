<?php
require_once "../functions/userCrud.php";
require_once '../functions/functions.php';
require_once '../utils/connexion.php';
require_once "../functions/productCrud.php";

session_start();
echo "<h2>Les champs doivent être remplis correctement, sinon
        vous n'accederez pas à la page suivante</h2>";
//Verification des champs
if (
    isset($_POST["name"]) and
    isset($_POST["quantity"]) and
    isset($_POST["price"]) and
    isset($_POST["description"]) and
    isset($_POST["img_url"])
) {

    $productName = $_POST["name"];
    $productQuantity = $_POST["quantity"];
    $productPrice = $_POST["price"];
    $productUrl = $_POST["img_url"];
    $productDescription = $_POST["description"];
    if (strlen($productName) < 2 or (strlen($productUrl) < 6) or (!is_numeric($productQuantity)) or (!is_numeric($productPrice))) {
        $url = "../gestionAdmin/AjouterProduit.php";
        header('Location: ' . $url);
    } else {

        //Mettre les données dans un data
        $data = [

            'name' => $productName,
            'quantity' => $productQuantity,
            'price' => $productPrice,
            'img_url' => $productUrl,
            'description' => $productDescription
        ];
        //modifie dans la base de données
        $save = createProduct($data);
        $url = "../pages/produits.php";
        header('Location: ' . $url);
    }
} else {
    $url = "../gestionAdmin/AjouterProduit.php";
    header('Location: ' . $url);
}

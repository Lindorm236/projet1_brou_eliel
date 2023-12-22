<?php
require_once "../utils/connexion.php";

require_once "../functions/productCrud.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styleProduits.css">
</head>

<body>
    <?php
    $products = getAllProducts();


    foreach ($products as $product) {
    ?>

        <form action="../results/suppressionResult.php" method="post">
            <fieldset>
                <!-- Affichage des produits et leurs infos -->
                <h2><?php echo $product["name"] ?></h2>
                <h3>Quantité : <?php echo $product["quantity"] ?></h3>
                <h3>Quantité : <?php echo $product["price"] ?></h3>



                <input type="text" hidden name="id" value="<?php echo $product["id"] ?>">
                <input type="text" hidden name="price" value="<?php echo $product["price"] ?>">
                <button type="submit">Supprimer le produit </button>
            </fieldset>
        </form>
    <?php
    }
    ?>



</body>

</html>
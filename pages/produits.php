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

        <form action="../results/produitResult.php" method="post">
            <fieldset>
                <!-- Affichage des produits et leurs infos -->
                <h2><?php echo $product["name"] ?></h2>
                <h3>Quantité : <?php echo $product["quantity"] ?></h3>
                <h3>Quantité : <?php echo $product["price"] ?></h3>
                <img src="../images/<?php echo $product["img_url"] ?>" alt="<?php echo $product["img_url"] ?>" class="rosenoire">
                <p> <?php echo $product["description"] ?></p>
                <label for="quantite">Entrez la quantité que vous voulez</label>
                <input type="text" id="quantite" name="quantite">
                <input type="text" hidden name="id" value="<?php echo $product["id"] ?>">
                <input type="text" hidden name="price" value="<?php echo $product["price"] ?>">
                <button type="submit">acheter</button>
            </fieldset>
        </form>
    <?php
    }
    ?>



</body>

</html>
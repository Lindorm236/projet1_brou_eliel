<?php
require_once "../utils/connexion.php";

require_once "../functions/productCrud.php";
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

        <form action="" method="post">
            <fieldset>
                <h2><?php echo $product["name"] ?></h2>
                <h3>Quantité : <?php echo $product["quantity"] ?></h3>
                <h3>Quantité : <?php echo $product["price"] ?></h3>
                <img src="../images/<?php echo $product["img_url"] ?>" alt="<?php echo $product["img_url"] ?>" class="rosenoire">
                <p> <?php echo $product["description"] ?></p>
                <button type="submit">acheter</button>
            </fieldset>
        </form>
    <?php
    }
    ?>



</body>

</html>
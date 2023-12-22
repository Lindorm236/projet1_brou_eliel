<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../results/ajoutResult.php" method="post">
        <label for="name">nom du produit</label>
        <input type="text" id="name" name="name">

        <label for="quantity">quantite</label>
        <input type="text" id="quantity" name="quantity">

        <label for="price">prix</label>
        <input type="text" id="price" name="price">

        <label for="img_url">lien de l'image</label>
        <input type="text" id="img_url" name="img_url">

        <label for="description">description du produit</label>
        <textarea id="description" name="description"></textarea>

        <button type="submit">Ajouter</button>
        <a href="../gestionAdmin/supprimerProduit.php">Supprimer un produit</a>
    </form>
</body>

</html>
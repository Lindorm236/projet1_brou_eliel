<?php


function getAllProducts()
{
    global $conn;

    $result = mysqli_query($conn, "SELECT * FROM product");
    $i = 0;

    $productData = [];
    while ($rangeData = mysqli_fetch_assoc($result)) {
        $productData[$i] = $rangeData;
        $i++;
    }

    return $productData;
}

function deleteProduct($id)
{
    global $conn;

    $query = "DELETE FROM product WHERE id= ?";

    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $id,
        );
        $result = mysqli_stmt_execute($stmt);
    }
    echo "suppression reussie";
}

function createProduct(array $data)
{



    global $conn;

    $query = "INSERT INTO product VALUES (NULL, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "siiss",
            $data['name'],
            $data['quantity'],
            $data['price'],
            $data['img_url'],
            $data['description'],

        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
        var_dump($result);
    }
}


function createUserOrder(array $data)
{



    global $conn;

    $query = "INSERT INTO order_has_product VALUES (NULL, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "iii",
            $data["product_id"],
            $data['quantity'],
            $data['price'],


        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
        var_dump($result);
    }
}

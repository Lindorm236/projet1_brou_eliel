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

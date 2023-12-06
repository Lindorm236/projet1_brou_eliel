<?php

/**
 * Create user 
 * 
 */
// function createUser(array $data)
// {
//     global $conn;

//     $query = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
//     $stmt = mysqli_prepare($conn, $query);

//     if ($stmt = mysqli_prepare($conn, $query)) {

//         mysqli_stmt_bind_param(
//             $stmt,
//             "sssssiisi",
//             $data['user_name'],
//             $data['email'],
//             $data['pwd'],
//             $data['fname'],
//             $data['lname'],
//             $data['billing_address_id'],
//             $data['shipping_address_id'],
//             $data['token'],
//             $data['role_id'],
//         );

//         /* Exécution de la requête */
//         $result = mysqli_stmt_execute($stmt);
//     }
// }
function insertInstanceIntoTable($user_name, $email, $pwd, $fname, $lname, $billing_address_id, $shipping_address_id, $token, $role_id)
{
    $sql = "INSERT INTO user (`user_name`, email, pwd, fname, lname, billing_address_id, shipping_address_id, `token`, role_id) VALUES ('$user_name', '$email', '$pwd', '$fname', '$lname', '$billing_address_id', '$shipping_address_id', '$token', '$role_id')";

    $mysqli = mysqli_init();
    $connect = $mysqli->real_connect("localhost", "root", "", "ecom1_project");
    if ($connect) {
        return mysqli_query($mysqli, $sql);
    } else {
        return mysqli_connect_error();
    }
}

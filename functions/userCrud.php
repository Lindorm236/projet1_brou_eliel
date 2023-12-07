<?php

/**
 * Create user 
 * 
 */
function createUser(array $data)
{

    var_dump($data);

    global $conn;

    $query = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?, 1, 1, ?, 3)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "ssssss",
            $data['user_name'],
            $data['email'],
            $data['pwd'],
            $data['fname'],
            $data['lname'],
            $data['token'],
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
        var_dump($result);
    }
}
// function insertInstanceIntoTable($user_name, $email, $pwd, $fname, $lname, $billing_address_id, $shipping_address_id, $token, $role_id)
// {
//     $sql = "INSERT INTO user (`user_name`, email, pwd, fname, lname, billing_address_id, shipping_address_id, `token`, role_id) VALUES ('$user_name', '$email', '$pwd', '$fname', '$lname', '$billing_address_id', '$shipping_address_id', '$token', '$role_id')";

//     $mysqli = mysqli_init();
//     $connect = $mysqli->real_connect("localhost", "root", "", "ecom1_project");
//     if ($connect) {
//         return mysqli_query($mysqli, $sql);
//     } else {
//         return mysqli_connect_error();
//     }
// }


function getUserByUsername(string $user_name)
{
    global $conn;

    $query = "SELECT * FROM user WHERE user.user_name = '" . $user_name . "';";

    $result = mysqli_query($conn, $query);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

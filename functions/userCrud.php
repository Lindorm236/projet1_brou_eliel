<?php
//Creation d'un utilisateur
function createUser(array $data)
{



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
        return $result;
    }
}


//Recupère un utilisateur
function getUserByUsername(string $user_name)
{
    global $conn;

    $query = "SELECT * FROM user WHERE user.user_name = '" . $user_name . "';";

    $result = mysqli_query($conn, $query);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function updateUser(array $data)
{
    global $conn;

    $query = "UPDATE user SET `user_name`=?, email = ?, fname= ?, lname= ? WHERE `id`= ?; ";

    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param(
            $stmt,
            "ssssi",
            $data["user_name"],
            $data["email"],
            $data["fname"],
            $data["lname"],
            $data["id"],

        );
        $result = mysqli_stmt_execute($stmt);
        return $result;
    }
}

function getRoleIdByUsername(string $user_name)
{
    global $conn;

    $query = "SELECT  role_id FROM user WHERE user.user_name = '" . $user_name . "';";

    $result = mysqli_query($conn, $query);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function updateUserRoleId(array $data)
{
    global $conn;

    $query = "UPDATE user SET role_id = ? WHERE `id`= ?; ";

    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param(
            $stmt,
            "ii",
            $data["role_id"],
            $data["id"],

        );
        $result = mysqli_stmt_execute($stmt);
        return $result;
    }
}

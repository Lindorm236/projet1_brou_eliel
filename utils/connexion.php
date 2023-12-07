<?php
$server = 'localhost';
$userName = 'root';
$pwd = '';
$db = "ecom1_project";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    global $conn;
    echo "connected to the $db successfully";
    echo "<br>";
} else {
    echo "Error : not connected to the $db database";
}

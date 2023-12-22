<?php
require_once "../functions/userCrud.php";
require_once '../functions/functions.php';
require_once '../utils/connexion.php';
require_once "../functions/productCrud.php";

session_start();

$id = $_POST["id"];

deleteProduct($id);
$url = "../pages/AccueilAdmin.php";
header('Location: ' . $url);

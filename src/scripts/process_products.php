<?php

require 'DB_Connect.php';


$data = mysqli_query($db, "SELECT * FROM my_categories ORDER BY name");
$categories = mysqli_fetch_all($data, MYSQLI_ASSOC);

$query = "SELECT * FROM my_products";
if (isset($_GET["category"])) {
    $code = mysqli_escape_string($db, $_GET["category"]);
    $query .= " WHERE category = '$code'";
}
$data = mysqli_query($db, $query);
$products = mysqli_fetch_all($data, MYSQLI_ASSOC);
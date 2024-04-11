<?php

session_start();

require 'utils.php';
require 'DB_Connect.php';

$product_id = sanitize($_POST["product"]);
$qty = sanitize($_POST["qty"]);
if (!isset($_SESSION["customer_id"])) {
    header("Location: ../pages/login.php");
}
$customer_id = $_SESSION["customer_id"];

if ($rows = mysqli_query($db, "SELECT order_id FROM my_orders WHERE c_id = '$customer_id' AND o_status = 'IP'")) {
    if (mysqli_num_rows($rows) == 0) {
        $query = "INSERT INTO my_orders (c_id, o_status) VAlUES ('$customer_id', 'IP')";
        mysqli_query($db, $query);
        $order_id = mysqli_insert_id($db);
    } else {
        $order_row = mysqli_fetch_assoc($rows);
        $order_id = $order_row["order_id"];
    }
    if (mysqli_num_rows(mysqli_query($db, "SELECT * FROM my_order_items WHERE o_id = $order_id AND p_id = $product_id")) == 0) {
        $query = "INSERT INTO my_order_items (o_id, p_id, qty) VALUES ($order_id, $product_id, $qty)";
        if (mysqli_query($db, $query)) {
            header("Location: ../pages/cart.php");
        } else {
            die("Unable to complete registration");
        }
    } else {
        mysqli_query(
            $db,
            "UPDATE my_order_items SET qty = qty + $qty WHERE o_id = $order_id AND p_id = $product_id"
        );
        header("Location: ../pages/cart.php");
    }

} else {
    die("Could not add to cart, please try again later.");
}

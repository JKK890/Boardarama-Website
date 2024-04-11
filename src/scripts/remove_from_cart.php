<?php
require 'DB_Connect.php';

$pr = $_GET['pr'];
$or = $_GET['or'];
$query = "DELETE FROM my_order_items WHERE p_id = $pr AND o_id = $or";
mysqli_query($db, $query);
header("Location:../pages/cart.php");

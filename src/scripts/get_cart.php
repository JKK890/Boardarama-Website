<?php
require 'DB_Connect.php';


$customer_id = $_SESSION["customer_id"];
if ($rows = mysqli_query($db, "SELECT order_id FROM my_orders WHERE c_id = $customer_id AND o_status = \"IP\"")) {
    if (mysqli_num_rows($rows) != 0) {
        $data = mysqli_fetch_assoc($rows);
        $order_id = $data["order_id"];
        $cart_query =
            "SELECT oi.p_id, p.image_file, p.name, p.price, oi.o_id, oi.qty 
        FROM my_order_items AS oi
        JOIN my_products AS p ON p_id = product_id
        WHERE oi.o_id = $order_id";

        $data = mysqli_query($db, $cart_query);
        $cart_items = mysqli_fetch_all($data, MYSQLI_ASSOC);
    } else {
        $cart_items = [];
    }
} else {
    echo "Something went wrong, please try again later";
}


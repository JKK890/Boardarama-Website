<?php
if (!$over) {
    $query = "UPDATE my_orders SET o_status = \"CO\" WHERE order_id = $item[o_id]";
    mysqli_query($db, $query);

    $date = date("d-m-Y");
    $query = "UPDATE my_orders SET order_date = \"$date\" WHERE order_id = $item[o_id]";
    mysqli_query($db, $query);

    $query = "UPDATE my_products SET quantity = quantity - $item[qty] WHERE product_id = $item[p_id]";
    mysqli_query($db, $query);
}

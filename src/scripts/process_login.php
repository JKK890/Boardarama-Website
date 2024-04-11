<?php
session_start();

require '../scripts/DB_Connect.php';
require '../scripts/utils.php';

function populate_session($fields, $row)
{
    foreach ($fields as $field) {
        $_SESSION[$field] = $row[$field];
    }
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: 500.php");
    exit;
}

$fields = array(
    "username" => "/^.+$/",
    "password" => "/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[^a-zA-Z0-9\s]).{8,}$/",
);
$sanitized_values = array();

foreach ($fields as $field => $pattern) {
    if (isset($_POST[$field])) {
        $value = $_POST[$field];
        $sanitized_values[$field] = sanitize($value);
        if (!preg_match($pattern, sanitize($value))) {
            die("Bad $field");
        }
    }
}
$username = $sanitized_values["username"];
$sql = "SELECT * FROM my_customers WHERE username = '$username'";
if ($rows = mysqli_query($db, $sql)) {
    if (mysqli_num_rows($rows) == 0) {
        header("Location: ../pages/login.php?retry=true");
    }
    $row = mysqli_fetch_assoc($rows);
    if (password_verify($sanitized_values["password"], $row["password"])) {
        $values = array("customer_id", "first_name");
        populate_session($values, $row);
        header("Location: ../my_business.php");
    } else {
        header("Location: ../pages/login.php?retry=true");
    }
} else {
    die("could not complete request. Please try again Later");
}
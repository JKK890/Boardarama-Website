<?php
session_start();
if (isset($_SESSION["customer_id"])) {
    session_unset();
    session_destroy();
}
header("Location: ../my_business.php");
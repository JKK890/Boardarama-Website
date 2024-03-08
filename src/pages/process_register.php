<?php
function sanitize ($param){
    $param = trim($param);
    $param = stripslashes($param);
    $param = htmlspecialchars($param);
    return $param;
}

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("Location: 500.php");
    exit;
}

$fields = array("prefix", "fName", "init", "lName", "gender", "phone", "user", "pass", "repass", "email", "address", "city", "postal");
$non_required_fields = array("init", "phone");

foreach ($fields as $field) {
    if (in_array($field, $non_required_fields)) {
        $sanitized_value = !empty($_POST[$field]) ? sanitize($_POST[$field]) : "Not provided";
        echo "$field: $sanitized_value<br>";
    }
    elseif (isset($_POST[$field])) {
        $sanitized_value = sanitize($_POST[$field]);
        echo "$field: $sanitized_value<br>";
    }
}

?>

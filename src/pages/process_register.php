<?php

require '../scripts/utils.php';
require '../scripts/DB_Connect.php';



if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: 500.php");
    exit;
}

$fields = array(
    "prefix" => "/^(Mrs\.|Ms\.|Mr\.|Dr\.)$/",
    "first_name" => "/^[A-Za-z]+$/",
    "initial" => "/^[A-Za-z]*$/",
    "last_name" => "/^[A-Za-z]+$/",
    "gender" => "/^[FMO]$/",
    "email" => "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i",
    "phone" => "/^(\d{3}-)?\d{3}-\d{4}$|^$/",
    "address" => "/^.+$/",
    "city" => "/^.+$/",
    "region" => "/^.+$/",
    "postal_code" => "/^[A-Za-z]\d[A-Za-z] \d[A-Za-z]\d$/",
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
$sanitized_values["registration_datetime"] = date("c");


if (fieldAlreadyExists($db, "my_customers", "email", $sanitized_values["email"])) {
    die("Email is already in use");
}

if ($sanitized_values["password"] !== sanitize($_POST["confirm_password"])) {
    die("Passwords don't match");
}

$sanitized_values["password"] = password_hash($sanitized_values["password"], PASSWORD_DEFAULT);

$columns = implode(', ', array_keys($sanitized_values));
$values = "'" . implode("', '", $sanitized_values) . "'";
$query = "INSERT INTO my_customers ($columns) VALUES ($values)";
if (!mysqli_query($db, $query)) {
    die("Unable to complete registration");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <?php include '../common/taskbar.html'; ?>
            <main class="prose max-w-none py-2">
                <h1>Sign up Complete</h1>
                <p>You have successfully registered!</p>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>

</html>
<?php
  require($_SERVER["CONTEXT_DOCUMENT_ROOT"].'/../htpasswd/mysql.inc');
  $db = mysqli_connect($host, $username, $password, $database);
  if (mysqli_connect_errno() || $db == null) {
      $err = mysqli_connect_error();
      echo "Database connection failed: $err";
  }

  function fieldAlreadyExists($db, $tableName, $fieldName, $fieldValue) {
    $query = "SELECT $fieldName FROM $tableName WHERE $fieldName = '$fieldValue'";
    $result = mysqli_query($db, $query);
    return mysqli_num_rows($result) > 0;
}
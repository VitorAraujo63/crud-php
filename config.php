<?php

// host
$host = 'http://localhost/crud-php';

// db
$db_name = 'crud';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
}   catch (\Throwable $th) {
    throw $th;
}

?>
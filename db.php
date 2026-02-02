<?php
$host = "localhost";
$user = "root";
$password = "Ram@4607";
$database = "userdb";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed");
}
?>

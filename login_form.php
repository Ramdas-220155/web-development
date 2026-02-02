<?php
include "db.php";

function checkLogin() {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $isValid = false;

    global $conn;

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed");
    }

    if (mysqli_num_rows($result) == 1) {
        $isValid = true;
    }

    return $isValid;
}

if (checkLogin()) {
    header("Location: index.html");
    exit();
} else {
    echo "Invalid Username or Password";
}

<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Insert into database
$query = "INSERT INTO users (username, password) 
          VALUES ('$username', '$password')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Registration Successful!";
} else {
    echo "Error!";
}
?>

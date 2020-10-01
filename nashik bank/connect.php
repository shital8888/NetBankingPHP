<?php
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "nashik";
// Enter your MySQL password below
$password = "nashik@6871";
$dbname = "net_banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>

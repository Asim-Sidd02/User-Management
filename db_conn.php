<?php
$server = "localhost";  
$username = "root";  
$password = "";  
$database = "user_management";  

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>

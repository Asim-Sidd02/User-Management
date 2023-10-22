<?php

$server = "localhost";  
$username = "root";  
$password = "";  
$database = "user_management";  


$conn = mysqli_connect($server, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_set_charset($conn, "utf8");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]); 
    $contact = trim($_POST["contact"]); 

    
    $query = "SELECT * FROM users WHERE email='$email' AND contact='$contact'";
    echo "SQL Query: $query<br>";

    
    $result = mysqli_query($conn, $query);

    if ($result) {
    
        if (mysqli_num_rows($result) == 1) {
    
            session_start();
            $_SESSION["email"] = $email;
            header("Location: user_listing.php");
        } else {
    
            echo "Login failed. Please check your credentials.";
            echo "Email: ", $email;
            echo "Contact: ", $contact;
        }
    } else {
        // Error with the SQL query
        echo "Error: " . mysqli_error($conn); 
    }

    mysqli_close($conn);
}
?>

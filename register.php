<?php
require('db_conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $contact_no = $_POST["contact_no"];

    // Handle profile image
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Profile image must be in jpg, jpeg, or png format.";
        exit;
    }

    $profile_image = "uploads/" . $_FILES["profile_image"]["name"];
    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $profile_image);

    $query = "INSERT INTO users (name, age, email, dob, contact, profile_image) VALUES ('$name', '$age', '$email', '$dob', '$contact_no', '$profile_image')";

    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

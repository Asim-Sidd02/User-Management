<!DOCTYPE html>
<html>
<head>
    <title>User Listing</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="user-info">
                <?php
                session_start();
                
                if (isset($_SESSION["email"])) {
                    $email = $_SESSION["email"];
                    require('db_conn.php'); 
            

                  
                    $query = "SELECT name, profile_image, contact, dob FROM users WHERE email='$email'";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $name = $row["name"];
                        $profilePhoto = $row["profile_image"];
                        $contactNo = $row["contact"];
                        $dob = $row["dob"];

                        
                        echo "<p>Welcome, $name!</p>";
                        echo '<img src="' . $profilePhoto . '" alt="Profile Photo">';
                    }
                }
                ?>
            </div>
            <div class="logout-button">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="user-details">
        <?php
        if (isset($_SESSION["email"])) {
            
            echo "<p>Contact Number: $contactNo</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Date of Birth: $dob</p>";
        }
        ?>
    </div>

    <div class="user-container">
        <?php
        if (isset($_SESSION["email"])) {
        
        
        } else {
            header("Location: login.php");
        }
        ?>
    </div>
</body>
</html>

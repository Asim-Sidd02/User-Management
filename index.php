<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Registration</h2>
        <form method="post" action="register.php" enctype="multipart/form-data" id="registrationForm">
            <div class="form-field">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-field">
                <label for="age">Age:</label>
                <input type="text" name="age" id="age" required pattern="[0-9]+">
            </div>
            <div class="form-field">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-field">
                <label for="dob">Date of Birth:</label>
                <input type="text" name="dob" id="dob" required placeholder="dd-mm-yyyy">
            </div>
            <div class="form-field">
                <label for="contact_no">Contact Number:</label>
                <input type="tel" name="contact_no" id="contact_no" required pattern="[0-9]{10}">
            </div>
            <div class="form-field">
                <label for="profile_image">Profile Image:</label>
                <input type="file" name="profile_image" id="profile_image" required accept=".png, .jpg, .jpeg">
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
    <script>
         $(document).ready(function () {
            $('#dob').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: '-100:+0', // Adjust this range as needed
            });
        });
        $(document).ready(function () {
            $('#registrationForm').submit(function (e) {
                // Client-side validation
                var age = $('input[name="age"]').val();
                var email = $('input[name="email"]').val();
                var dob = $('input[name="dob"]').val();
                var contactNo = $('input[name="contact_no"]').val();

                // Check age
                if (!/^\d+$/.test(age)) {
                    alert("Age must be a number.");
                    e.preventDefault();
                    return;
                }

                // Check email
                if (!isValidEmail(email)) {
                    alert("Invalid email address.");
                    e.preventDefault();
                    return;
                }

                // Check date of birth
                if (!isValidDate(dob)) {
                    alert("Invalid date of birth format. Use dd-mm-yyyy.");
                    e.preventDefault();
                    return;
                }

                // Check contact number
                if (!/^\d{10}$/.test(contactNo)) {
                    alert("Contact number must have exactly 10 digits.");
                    e.preventDefault();
                    return;
                }
            });

            function isValidEmail(email) {
                // Regular expression for email validation
                var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return emailRegex.test(email);
            }

            function isValidDate(date) {
                // Regular expression for dd-mm-yyyy date format validation
                var dateRegex = /^\d{2}-\d{2}-\d{4}$/;
                return dateRegex.test(date);
            }
        });
    </script>
</body>
</html>

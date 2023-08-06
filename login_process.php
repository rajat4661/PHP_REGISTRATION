<!DOCTYPE html>
<html>

<head>
    <title>Login Process</title>
</head>

<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "root", "phptest");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $email = $_REQUEST['email'];
        $last_name = $_REQUEST['last_name']; // Assuming you have a password field in the login form

        // You should store passwords securely using hashing and salt. This is a basic example.
        // Replace 'your_hashed_password_column' with the actual column name in the database where you store hashed passwords.
        $sql = "SELECT * FROM rajat WHERE email='$email' AND last_name='$last_name'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            // Login successful
            $user = mysqli_fetch_assoc($result);
            echo "<h3>Login successful.</h3>";
            echo "<p>Welcome, " . $user['first_name'] . " " . $user['last_name'] . "!</p>";

            // Redirect to the new HTML page after successful login
            header("Location: new_page.html");
            exit(); // Ensure that the script stops here to prevent further execution
        } else {
            // Login failed
            echo "<h3>Login failed. Please check your credentials.</h3>";
        }

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>

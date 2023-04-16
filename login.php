<!-- login.php -->
<?php
// Set database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourista";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from form
$aadhaar = $_POST['aadhaar'];
$password = $_POST['password'];

// Validate user
$sql = "SELECT * FROM users WHERE aadhaar='$aadhaar' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // User found, log them in
    session_start();
    $_SESSION['aadhaar'] = $aadhaar;
    echo "Login successful.";
    header("location:booking.html");
} else {
    // User not found, show error message
    echo "Invalid Aadhaar number or password.";
}

// Close database connection
$conn->close();
?>
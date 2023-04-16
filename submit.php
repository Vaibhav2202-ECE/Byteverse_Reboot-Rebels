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
$email = $_POST['email'];
$password = $_POST['password'];

// Insert values into database
$sql = "INSERT INTO users (aadhaar, email, password) VALUES ('$aadhaar', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Comment uploaded successfully.')</script>";
    header("location:ragist_log.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
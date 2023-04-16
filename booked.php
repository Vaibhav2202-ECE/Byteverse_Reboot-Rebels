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
$name = $_POST['name'];
$email = $_POST['email'];
$people = $_POST['people'];
$premium = $_POST['premium'];
$location = $_POST['location'];
$date = $_POST['date'];
$number = $_POST['number'];

// Insert values into database
$sql = "INSERT INTO bookings (name, email, people, premium, location, date, number) VALUES ('$name', '$email', '$people', '$premium', '$location', '$date', '$number')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Booking added successfully.')</script>";
    header("location:booking.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>

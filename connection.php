<?php
// Replace these values with your actual database credentials
$servername = "localhost";  // Usually "localhost"
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "your_database_name";  // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

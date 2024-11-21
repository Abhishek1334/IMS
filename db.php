<?php
// db.php - database connection
$servername = "localhost";  // Database host (usually localhost)
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "shelfwise_db";   // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character encoding to avoid issues with special characters
$conn->set_charset("utf8");
?>

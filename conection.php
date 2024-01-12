

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";
// header("Location:index.php");

// Perform your database operations here

// Close connection
// $conn->close();
?>
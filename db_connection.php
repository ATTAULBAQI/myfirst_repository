<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_data_db"; // Use the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>






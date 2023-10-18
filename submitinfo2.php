<?php
session_start();
include('db_connection.php'); // Include your database connection file

// Check if form data is stored in the session
if (isset($_SESSION['form_data'])) {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_SESSION['form_data']['name']);
    $phone = mysqli_real_escape_string($conn, $_SESSION['form_data']['phone']);
    $grade = mysqli_real_escape_string($conn, $_SESSION['form_data']['grade']);

    // Insert data into the database
    $sql = "INSERT INTO students (name, phone, grade) VALUES ('$name', '$phone', '$grade')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Form Data Stored in Database:</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Grade: $grade</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Clear the session data
    unset($_SESSION['form_data']);
} else {
    echo "<p>No form data available.</p>";
}

// Close the database connection
mysqli_close($conn);
?>

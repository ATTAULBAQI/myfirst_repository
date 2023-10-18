<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>


<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $grade = $_POST["grade"];

// Store form data in a session
$_SESSION['form_data'] = array(
    'name' => $name,
    'phone' => $phone,
    'grade' => $grade
);

// Debugging: Print session data
var_dump($_SESSION['form_data']);

// Redirect to submitinfo2.php
header("location: submitinfo2.php");
exit();
}
?>


<div>
    <h1>Simple Form</h1>
    <form method="post" action="submitinfo2.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required>

        <br>

        <label for="grade">Grade:</label>
        <input type="text" name="grade" required>

        <br>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>












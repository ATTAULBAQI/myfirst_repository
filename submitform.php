  



$name = $email = $phone =  $address = "";
$nameErr = $emailErr = $phoneErr = $addressErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["name"])){
        $nameErr = "Name is required.";
    } else {
        $name = test_input($_POST["name"]);
    }


    if (empty($_POST["email"])){
        $emailErr = "email is required.";
    } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
            $emailErr = "invalid email format";
        }
    }

    

    if (empty($_POST["phone"])){
        $phoneErr = "phone is required.";
    } else {
        $phone = test_input($_POST["phone"]);
    }



   if (empty($_POST["address"])){
        $addressErr = "address is required.";
    } else {
        $address = test_input($_POST["address"]);
    }

    if (isset($_POST['submit'])) {
        $targetDirectory = "assets/";
        $targetfile = $targetDirectory . basename($_FILES["file"]["name"]);

        if (file_exists($targetfile)) {
            echo "File already exists.";
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetfile)) {
                echo "File uploaded successfully: " . basename($_FILES["file"]["name"]);
            } else {
                echo "Error uploading file.";
            }
        }
    }

   if(empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($addressErr)) {

    header("location: submitform.php");
    exit();
   } else {
        echo "<script>alert('" . implode('\n', $nameErr = $emailErr = $phoneErr = $addressErr) . "');</script>";
   }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}











// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include('db_connection.php');

    // Escape user inputs for security
    $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
    $studentEmail = mysqli_real_escape_string($conn, $_POST['studentEmail']);
    $studentPhone = mysqli_real_escape_string($conn, $_POST['studentPhone']);
    $studentAddress = mysqli_real_escape_string($conn, $_POST['studentAddress']);

    // File upload handling
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Insert data into database
    $sql = "INSERT INTO students (name, email, phone, address, file_path) VALUES ('$studentName', '$studentEmail', '$studentPhone', '$studentAddress', '$targetFile')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} -->




<?php

$name = $email = $phone = $address = "";
$nameErr = $emailErr = $phoneErr = $addressErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your form validation logic here ...

    // Display alert if there are validation errors
    if (!empty($nameErr) || !empty($emailErr) || !empty($phoneErr) || !empty($addressErr)) {
        echo "<script>alert('" . $nameErr . "\\n" . $emailErr . "\\n" . $phoneErr . "\\n" . $addressErr . "');</script>";
    }

    // Your file upload logic here ...

    // If no validation errors, continue with database interaction
    if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($addressErr)) {
        // Include database connection file
        include('db_connection.php');

        // Escape user inputs for security
        $studentName = mysqli_real_escape_string($conn, $_POST['name']);
        $studentEmail = mysqli_real_escape_string($conn, $_POST['email']);
        $studentPhone = mysqli_real_escape_string($conn, $_POST['phone']);
        $studentAddress = mysqli_real_escape_string($conn, $_POST['address']);

        // File upload handling
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        // Insert data into database
        $sql = "INSERT INTO students (name, email, phone, address, file_path) VALUES ('$studentName', '$studentEmail', '$studentPhone', '$studentAddress', '$targetFile')";

        if (mysqli_query($conn, $sql)) {
            echo "Record added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    }
}

// Your existing test_input function...
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

  















<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'institute';

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare the SQL statement
    $sql = "INSERT INTO student_info (stname, class_name, phone_no) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sss", $stname, $class_name, $phone_no);

    // Set parameter values from form data
    $stname = $_POST['stname'];
    $class_name = $_POST['class_name'];
    $phone_no = $_POST['phone_no'];

    // Execute the statement
    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
}

// Read - Fetch data from the database
$sql = "SELECT * FROM student_info";
$res = $conn->query($sql);

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <h1 class="text-center text-white">Students Data</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <p>
                        <label for="fname">Student Name</label>
                        <input type="text" name="stname" id="stname">
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p>
                        <label for="lname">Class Name</label>
                        <input type="text" name="class_name" id="lname">
                    </p>
                    <p>
                        <label for="email">Phone No</label>
                        <input type="text" name="phone_no" id="email">
                    </p>
                    <button class="btn btn-success" type="submit" name="submit">Submit form</button>
                </div>
            </div>
        </form>

        <table class="table bg-secondary text-white rounded mt-5 border table-bordered text-center">
            <thead class="bg-info">
                <tr class="h3">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $res->fetch_assoc()) : ?>
                    <tr>
                        <th><?php echo $row['id'] ?></th>
                        <td><?php echo $row['stname'] ?></td>
                        <td><?php echo $row['class_name'] ?></td>
                        <td><?php echo $row['phone_no'] ?></td>
                        <td>
                            <button class="btn btn-primary m-3">Edit</button>
                            <a href="crud.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>



<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'institute';

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read - Fetch data from the database
$sql = "SELECT * FROM student_info";
$res = $conn->query($sql);

// Check if the form is submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete - Remove data from the database
    $deleteSql = "DELETE FROM student_info WHERE id = ?";
    $deleteStmt = $conn->prepare($deleteSql);
    $deleteStmt->bind_param("i", $id);
    $deleteStmt->execute();
}

// Close the delete statement
if (isset($deleteStmt)) {
    $deleteStmt->close();
}

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
        <a class="btn btn-primary" href="insert.php" style="float: right; font-weight: bold">Add Student</a>
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

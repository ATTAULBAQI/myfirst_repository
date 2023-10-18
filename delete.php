<?php
include 'connection.php';
$student_id = $_GET['id'];
$sql = "DELETE FROM student_info WHERE id = $student_id";
$conn->query($sql);
header('location: curd_php.php');
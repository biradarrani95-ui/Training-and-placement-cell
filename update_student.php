<?php
include("db_Connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['Course'];
$username = $_POST['username'];
$password = $_POST['Password'];

$sql = "UPDATE student_tb SET 
        name='$name',
        email='$email',
        course='$course',
        username='$username',
        password='$password'
        WHERE id=$id";

mysqli_query($conn, $sql);

echo "<script>alert('Updated Successfully'); window.location='view_student.php';</script>";
?>
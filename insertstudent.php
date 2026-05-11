<?php
include('db_connect.php');

$name = $_POST['name'];
$course = $_POST['course'];
$division = $_POST['division'];
$email = $_POST['email'];
$number = $_POST['number'];

$sql = "INSERT INTO student_data (name , course, division, email, number)
        VALUES ('$name', '$course', '$division', '$email', '$number')";

if (mysqli_query($conn, $sql)){
    echo "✅ Student Added Successfully!";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
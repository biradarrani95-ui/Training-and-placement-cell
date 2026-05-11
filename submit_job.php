<?php
session_start();
include 'db_Connect.php';

if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job = $_POST['job'];

    // resume upload
    $resume = $_FILES['resume']['name'];
    $temp = $_FILES['resume']['tmp_name'];
    move_uploaded_file($temp, "uploads/".$resume);

    $student_id = $_SESSION['student_id'];

    $sql = "INSERT INTO applications (student_id, fullname, email, phone, job_position, resume, status)
            VALUES ('$student_id','$fullname','$email','$phone','$job','$resume','pending')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Application Submitted'); window.location='view_job.php';</script>";
    } else {
        echo "ERROR: ".mysqli_error($conn);
    }
}
?>
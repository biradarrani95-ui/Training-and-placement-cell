<?php
session_start();
include("db_Connect.php"); 

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student_tb WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $username;
        header("Location: login.php");
        exit();
    }
    else{
        echo "<script>alert('Invalid username or password'); window.location.href='index.php';</script>";
    }
}
?>
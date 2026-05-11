<?php
include("db_Connect.php");

$id = $_GET['id'];

$sql = "DELETE FROM student_tb WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Student Deleted Successfully'); window.location='view_student.php';</script>";
} else {
    echo "Error deleting record!";
}
?>
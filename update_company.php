<?php
include("db_Connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$website = $_POST['website'];

$sql = "UPDATE company_data 
        SET name='$name', 
            email='$email', 
            contact='$contact', 
            address='$address', 
            website='$website'
        WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Company Updated Successfully'); 
          window.location.href='view_company.php';
          </script>";
} else {
    echo "Error Updating: " . mysqli_error($conn);
}
?>
<?php
include('db_connect.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $website = $_POST['website'];
    

    $sql = "INSERT INTO company_data(id, name, address, email, contact, website)
            VALUES ('$id', '$name', '$address', '$email', '$contact', '$website' )";

       if(mysqli_query($conn, $sql))
    {
        
        echo "company added successfully!";
        }
    else {
        echo "❌ Error: " . mysqli_error($conn);
    }


mysqli_close($conn);
?>
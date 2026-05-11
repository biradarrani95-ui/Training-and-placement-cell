<?php
include("db_Connect.php");


if (!isset($_POST['id'])) {
    die("Invalid Request! No Company ID Found.");
}

$id = $_POST['id'];

$sql = "SELECT * FROM company_data WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $contact = $_POST['contact'];
    $address = $_POST['Address'];
    $website = $_POST['website'];

    $update = "UPDATE company_data SET
                name='$name',
                email='$email',
                contact='$contact',
                address='$address',
                website='$website'
               WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        echo "<script>
                alert('Company updated successfully!');
                window.location='view_company.php';
              </script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Company</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #eef2f3;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 40%;
        margin: 50px auto;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        font-size: 26px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 12px;
        font-size: 15px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        border: 1px solid #aaa;
        border-radius: 5px;
        font-size: 15px;
    }

    textarea {
        height: 80px;
    }

    input[type="submit"] {
        width: 100%;
        background: #007bff;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 5px;
        font-size: 17px;
        cursor: pointer;
        margin-top: 20px;
        transition: 0.3s;
    }

    input[type="submit"]:hover {
        background: #0056b3;
    }
</style>

</head>
<body>

<div class="container">

<h2>Edit Company</h2>

<form method="POST">

    
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Company Name:</label>
    <input type="text" name="Name" value="<?php echo $row['Name']; ?>">

    <label>Email:</label>
    <input type="text" name="Email" value="<?php echo $row['Email']; ?>">

    <label>Phone:</label>
    <input type="text" name="contact" value="<?php echo $row['contact']; ?>">

    <label>Website:</label>
    <input type="text" name="website" value="<?php echo $row['website']; ?>">

    <label>Address:</label>
    <textarea name="Address"><?php echo $row['Address']; ?></textarea>

    <input type="submit" name="update" value="Update Company">

</form>

</div>

</body>
</html>
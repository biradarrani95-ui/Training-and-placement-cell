<?php
include('db_connect.php');

if(isset($_POST['reg'])) 
{
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $user = $_POST['usernm'];
    $cour = $_POST['course'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO student_tb(id,Name,Email,Course,Username,Password) 
            VALUES ('','$name','$email','$cour','$user','$pass')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Registered Successfully!');</script>";
    }
    else
    {
        echo "<script>alert('Registration Failed!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Register page</title>
<link rel="stylesheet" href="style_form.css">
</head>

<body class="register-page">

<center><h2>Register Page</h2></center>

<form method="POST">

<label>Name:</label>
<input type="text" name="fname" required><br><br>

<label>Email:</label>
<input type="email" name="email" required><br><br>

<label>Course:</label>
<input type="text" name="course" required><br><br>

<label>Username:</label>
<input type="text" name="usernm" required><br><br>

<label>Password:</label>
<input type="password" name="pass" required><br><br>

<input type="submit" name="reg" value="Register">

<a href="home.php" style="
display:inline-block;
padding:10px 20px;
background-color:#007bff;
color:white;
text-decoration:none;
border-radius:5px;
font-size:16px;
font-weight:bold;">
← Back to Dashboard
</a>

</form>
</body>
</html>
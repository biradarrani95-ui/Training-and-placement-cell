<?php
include("db_Connect.php");


$id = $_GET['id'];

$sql = "SELECT * FROM student_tb WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>

    <style>
        body {
            font-family: Arial;
            background: #f1f1f1;
        }

        .form-box {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background: #217dbb;
        }
    </style>

</head>

<body>

<div class="form-box">
    <h2>Edit Student</h2>

    <form action="update_student.php" method="POST">
        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row['Name']; ?>" required>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['Email']; ?>" required>

        <label>Course</label>
        <input type="text" name="Course" value="<?php echo $row['Course']; ?>" required>

        <label>Username</label>
        <input type="text" name="username" value="<?php echo $row['username']; ?>" required>

        <label>Password</label>
        <input type="text" name="Password" value="<?php echo $row['password']; ?>" required>

        <button type="submit">Update</button>
    </form>
</div>
<a href="home.php" style="
display:inline-block;
padding:10px 20px;
background-color:#007bff;
color:white;
text-decoration:none;
border-radius:5px;
font-size:16px;
font-weight:bold;
">
← Back to Dashboard
</body>
</html>
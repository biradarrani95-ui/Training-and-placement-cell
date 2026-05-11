<?php
include("db_Connect.php");

$sql = "SELECT * FROM student_tb";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #2c3e50;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background-color: #2c3e50;
            color: white;
            padding: 12px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .btn-edit {
            background-color: #3498db;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-edit:hover {
            background-color: #217dbb;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }
    </style>

</head>

<body>

<h2>Students List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Username</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php
    $sn = 1; // Serial Number start

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$sn++."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Course']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";

        echo "<td><a class='btn-edit' href='edit_student.php?id=".$row['id']."'>Edit</a></td>";

        echo "<td><a class='btn-delete' href='delete_student.php?id=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete?');\">Delete</a></td>";

        echo "</tr>";
    }
    ?>
</table>

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
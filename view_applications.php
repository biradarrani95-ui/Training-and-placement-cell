<?php
session_start();
include 'db_Connect.php';

$student_id = $_SESSION['student_id']; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Applied Jobs</title>

    <style>
        body {
            background: #e3f2fd;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #2196f3;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>My Applied Jobs</h2>

    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Job Position</th>
            <th>Resume</th>
            <th>Status</th>
        </tr>

        <?php
        $query = "SELECT * FROM applications_tb WHERE student_id = '$student_id'";
        $result = mysqli_query($db_connect, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['fullname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['job_position']."</td>
                    <td><a href='resumes/".$row['resume']."' target='_blank'>View</a></td>
                    <td>".$row['status']."</td>
                </tr>";
        }
        ?>
    </table>

</div>

</body>
</html>
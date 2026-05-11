<?php
include 'db_Connect.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM notifications WHERE id=$id");
    echo "<script>alert('Notification Deleted!'); window.location='admin_notification_list.php';</script>";
}

$noti = mysqli_query($conn, "SELECT * FROM notifications ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Notifications</title>

<style>
    body{
        background: #f1f5f9;
        font-family: Arial;
    }
    .box{
        width: 70%;
        margin: 40px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 7px rgba(0,0,0,0.2);
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #ddd;
    }
    th{
        background: #4A6CF7;
        color: white;
        padding: 12px;
        font-size: 17px;
    }
    td{
        padding: 12px;
        font-size: 16px;
    }
    a.delete{
        background: red;
        color: white;
        padding: 7px 14px;
        text-decoration: none;
        border-radius: 6px;
    }
    a.delete:hover{
        background: darkred;
    }
</style>

</head>
<body>

<div class="box">
    <h2>Manage Notifications</h2>

    <table>
        <tr>
            <th>Serial No.</th>
            <th>Title</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
        $sr = 1;
        if(mysqli_num_rows($noti) > 0){
            while($row = mysqli_fetch_assoc($noti)){
        ?>
        <tr>
            <td><?php echo $sr++; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
                <a href="admin_notification_list.php?delete=<?php echo $row['id']; ?>" class="delete"
                onclick="return confirm('Are you sure you want to delete this notification?');">
                Delete</a>
            </td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='5' style='text-align:center;'>No Notifications Found</td></tr>";
        }
        ?>
    </table>
</div>

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

</body>
</html>
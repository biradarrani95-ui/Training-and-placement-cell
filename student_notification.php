<?php
include 'db_connect.php';
$noti = mysqli_query($conn, "SELECT * FROM notifications WHERE user_type='student' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Notifications</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .header {
        background: #4A6CF7;
        color: white;
        padding: 15px;
        text-align: center;
        font-size: 22px;
        font-weight: bold;
    }

    .container {
        width: 60%;
        margin: 20px auto;
    }

    .noti-box {
        background: white;
        padding: 18px;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.15);
        transition: 0.3s;
        border-left: 6px solid #4A6CF7;
    }

    .noti-box:hover {
        transform: scale(1.02);
    }

    .title {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin: 0;
    }

    .message {
        font-size: 15px;
        color: #555;
        margin: 8px 0;
    }

    .time {
        font-size: 13px;
        color: gray;
    }

</style>
</head>
<body>

<div class="header">📢 Student Notifications</div>

<div class="container">

<?php
if(mysqli_num_rows($noti) > 0){
    while($row = mysqli_fetch_assoc($noti)){
?>

    <div class="noti-box">
        <p class="title"><?php echo $row['title']; ?></p>
        <p class="message"><?php echo $row['message']; ?></p>
        <p class="time">Posted on: <?php echo $row['created_at']; ?></p>
    </div>

<?php
    }
} else {
    echo "<h3>No Notifications Available</h3>";
}
?>

</div>


</body>
</html>
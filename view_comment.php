<?php
include "db_Connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Comments</title>

    <style>
        body {
            background: linear-gradient(135deg, #6fb1fc, #4364f7, #3f51b5);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
        }

        .container {
            width: 70%;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            color: #333;
        }

        .title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #2C3E50;
        }

        .comment-card {
            background: #f7f9fc;
            padding: 18px;
            margin-bottom: 15px;
            border-left: 6px solid #3f51b5;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
        }

        .comment-text {
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }

        .comment-date {
            font-size: 12px;
            color: #777;
            margin-top: 5px;
            display: block;
        }

        .delete-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            background: #e74c3c;
            color: white;
            padding: 7px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 12px;
        }

        .delete-btn:hover {
            background: #c0392b;
        }

        .like-btn {
            background: #ff4757;
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            margin-top: 10px;
        }

        .like-btn:hover {
            background: #e84118;
        }

        .add-btn {
            display: inline-block;
            padding: 12px 20px;
            background: #3f51b5;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
            float: right;
        }

        .add-btn:hover {
            background: #283593;
        }
    </style>

</head>
<body>

<div class="container">

    <div class="title">Student Comments</div>

    <a href="add_comment.php" class="add-btn">+ Add New Comment</a>
    <br><br><br>

    <?php
    $sql = "SELECT * FROM comments ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo "<div class='comment-card'>";

            echo "<a class='delete-btn' href='delete_comment.php?id=".$row['id']."' 
                    onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                    Delete</a>";

            echo "<div class='comment-text'>".$row['comment_text']."</div>";
            echo "<span class='comment-date'>Posted on: ".$row['created_at']."</span>";

            echo "<a class='like-btn' href='like_comment.php?id=".$row['id']."'>
                    ❤️ Like (".$row['likes'].")
                  </a>";

            echo "</div>";
        }
    } else {
        echo "<p style='text-align:center; font-size:18px;'>No comments yet!</p>";
    }
    ?>

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
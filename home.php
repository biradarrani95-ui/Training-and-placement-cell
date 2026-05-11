<?php
session_start();


if (!isset($_SESSION['username']) || $_SESSION['username'] == "") {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Training & Placement Cell</title>
    <link rel="stylesheet" href="style1.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('tp_background.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .topbar {
            width: 100%;
            background: rgba(177, 33, 33, 0.8);
            color: white;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            backdrop-filter: blur(6px);
        }

        .right .welcome {
            margin-right: 15px;
        }

        .logout {
            color: white;
            text-decoration: none;
            background: #d9534f;
            padding: 6px 12px;
            border-radius: 5px;
        }

        .logout:hover {
            background: #c9302c;
        }

        .container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: nowrap;
        }

        .card {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(8px);
            width: 250px;
            padding: 20px;
            text-align: center;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
        }

        .card:hover {
            background: rgba(255,255,255,0.35);
            transform: scale(1.05);
        }

        .title {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
            color: white;
        }

        .menu {
            display: none;
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .menu.show {
            display: block;
        }

        .menu li {
            margin: 10px 0;
        }

        .menu a {
            text-decoration: none;
            padding: 8px 12px;
            display: block;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 6px;
        }

        .menu a:hover {
            background: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body>

<nav class="topbar">
    <div class="logo">
        <marquee behavior="scroll" direction="left" scrollamount="10">
            Training & Placement Cell
        </marquee>
    </div>

    <div class="right">
        <span class="welcome">
            Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
        </span>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</nav>

<div class="container">

    <div class="card" onclick="toggleMenu('studentMenu')">
        <h3 class="title">Students ▼</h3>
        <ul class="menu" id="studentMenu">
            <li><a href="add_Student.php">➤ Add Student</a></li>
            <li><a href="view_Student.php">➤ View Students</a></li>
        </ul>
    </div>

    <div class="card" onclick="toggleMenu('companyMenu')">
        <h3 class="title">Company ▼</h3>
        <ul class="menu" id="companyMenu">
            <li><a href="add_Company.php">➤ Add Company</a></li>
            <li><a href="view_Company.php">➤ View Companies</a></li>
        </ul>
    </div>

    <div class="card" onclick="toggleMenu('commentMenu')">
        <h3 class="title">Comments ▼</h3>
        <ul class="menu" id="commentMenu">
            <li><a href="add_comment.php">➤ Add Comment</a></li>
            <li><a href="view_comment.php">➤ View Comments</a></li>
        </ul>
    </div>

    <div class="card" onclick="toggleMenu('notificationMenu')">
        <h3 class="title">Notifications ▼</h3>
        <ul class="menu" id="notificationMenu">
            <li><a href="add_notification.php">➤ Add Notification</a></li>
            <li><a href="admin_notification_list.php">➤ View Notifications</a></li>
            
        </ul>
    </div>
<div class="card" onclick="toggleMenu('jobMenu')">
    <h3 class="title">Apply Job ▼</h3>
    <ul class="menu" id="jobMenu">
        <li><a href="Apply job.php">➤ Apply Job</a></li>
        <li><a href="view_applications.php">➤ View Job</a></li>
    </ul>
</div>
</div>

<script>
function toggleMenu(id) {
    document.getElementById(id).classList.toggle("show");
}
</script>

</body>
</html>
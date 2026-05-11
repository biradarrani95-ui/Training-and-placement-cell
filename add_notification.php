<?php
include 'db_connect.php';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $message = $_POST['message'];

    $query = "INSERT INTO notifications (title, message, user_type, created_at) 
              VALUES ('$title', '$message', 'student', NOW())";
    
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Notification Added Successfully');</script>";
    } else {
        echo "<script>alert('Error Adding Notification');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Notification</title>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to bottom right, #6dd5fa, #2980b9);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background: #fff;
        width: 420px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        text-align: center;
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(-10px);}
        to {opacity: 1; transform: translateY(0);}
    }

    h2 {
        color: #2c3e50;
        margin-bottom: 25px;
    }

    label {
        display: block;
        text-align: left;
        font-weight: 600;
        color: #333;
        margin-bottom: 6px;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
        font-size: 15px;
        transition: 0.3s;
    }

    input[type="text"]:focus, textarea:focus {
        border-color: #2980b9;
        box-shadow: 0 0 5px rgba(41, 128, 185, 0.3);
        outline: none;
    }

    textarea {
        height: 100px;
        resize: none;
    }

    button {
        width: 100%;
        background: #2980b9;
        color: white;
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
    }

    button:hover {
        background: #1f5f94;
        transform: scale(1.03);
    }
</style>
</head>
<body>

<div class="form-container">
    <h2>Add Notification</h2>

    <form method="POST" action="">
        <label>Notification Title</label>
        <input type="text" name="title" placeholder="Enter notification title" required>

        <label>Notification Message</label>
        <textarea name="message" placeholder="Enter notification message" required></textarea>

        <button type="submit" name="submit">Add Notification</button>
<div style="text-align:center; margin-top:15px;">
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
</a>
    </form>
</div>

</body>
</html>
<?php
session_start();
include('db_connect.php');

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM student_tb WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $user;
        header('Location: Home.php');
        exit();
    } else {
        echo "<script>alert('Login Failed!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<!-- ICONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    height: 100vh;
    background: linear-gradient(120deg,#6a11cb,#2575fc);
    display: flex;
    justify-content: center;
    align-items: center;
}

.container{
    width: 1000px;
    height: 550px;
    background: white;
    border-radius: 12px;
    display: flex;
    overflow: hidden;
}

.left-box{
    width: 50%;
    padding: 60px;
    color: white;
    background: linear-gradient(120deg,#8e2de2,#ff6a00);
}

.left-box h1{
    font-size: 38px;
    font-weight: 600;
}

.left-box p{
    margin-top: 15px;
    font-size: 15px;
    line-height: 1.5;
}

.right-box{
    width: 50%;
    padding: 60px 60px;
    background: #fff;
}

.right-box h2{
    text-align: center;
    margin-bottom: 30px;
    color: #6a11cb;
    letter-spacing: 1px;
}


.input-group{
    position: relative;
    margin-bottom: 20px;
}

.input-group input{
    width: 100%;
    padding: 12px 15px 12px 45px;
    border: none;
    background: #f1edff;
    border-radius: 30px;
    font-size: 15px;
}

.input-group i{
    position: absolute;
    top: 50%;
    left: 15px;
    font-size: 15px;
    color: #6a11cb;
    transform: translateY(-50%);
}

.options{
    display: flex;
    justify-content: space-between;
    font-size: 13px;
    margin-bottom: 20px;
    color: #6a11cb;
}

.options a{
    text-decoration: none;
    color: #6a11cb;
}


.register-link{
    text-align:center;
    margin-top: 15px;
    font-size: 14px;
}

.register-link a{
    color:#6a11cb;
    text-decoration:none;
    font-weight:500;
}

.btn{
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 30px;
    background: linear-gradient(120deg,#ff6a00,#6a11cb);
    color: white;
    font-size: 16px;
    cursor: pointer;
}

</style>
</head>

<body>

<div class="container">

    
    <div class="left-box">
        <h1>Welcome to website</h1>
        <p>
            Training & Placement Cell committed to guiding students
            towards successful careers.
        </p>
    </div>

    
    <div class="right-box">
        <h2>USER LOGIN</h2>

        <form method="post">

        
            <div class="input-group">
                <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>

        
            <div class="input-group">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

        
            <div class="options">
                <label><input type="checkbox"> Remember</label>
                
            </div>

        
            <button type="submit" name="login" class="btn">LOGIN</button>

            
            <div class="register-link">
                <p>New user? <a href="register.php">Register here</a></p>
            </div>

        </form>

    </div>

</div>

</body>
</html>
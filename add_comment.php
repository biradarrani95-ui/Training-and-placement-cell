<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Comment</title>

<style>

*{
  box-sizing:border-box;
  font-family: "Segoe UI", Arial, Helvetica, sans-serif;
}

body{
  margin:0;
  padding:0;
  height:100vh;

  
  background: linear-gradient(135deg, #4e73df, #1cc88a);

  display:flex;
  justify-content:center;
  align-items:center;
}


.container{
  background:#ffffff;
  width:420px;
  padding:28px 32px;
  border-radius:18px;


  box-shadow:0 15px 35px rgba(0,0,0,0.25);
}


h2{
  text-align:center;
  margin-bottom:20px;
  color:#2e2e2e;
  letter-spacing:0.5px;
}


label{
  font-size:14px;
  color:#333;
}

textarea{
  width:100%;
  border:1.5px solid #d1d1d1;
  padding:12px;
  border-radius:10px;
  resize:none;
  font-size:14px;
  margin-top:6px;
  transition:0.25s;
}

textarea:focus{
  outline:none;
  border-color:#4e73df;
  box-shadow:0 0 0 2px rgba(78,115,223,0.15);
}


button{
  width:100%;
  background:#4e73df;
  border:none;
  color:white;
  padding:12px;
  margin-top:18px;
  border-radius:10px;
  cursor:pointer;
  font-size:15px;
  letter-spacing:0.3px;
  transition:0.25s;
}

button:hover{
  background:#2e59d9;
  transform:translateY(-1px);
}

</style>

</head>

<body>

<div class="container">

<h2>Add Your Comment</h2>

<form action="insert_comment.php" method="POST">

<label>Comment</label>
<textarea name="comment" rows="4" required></textarea>

<button type="submit">Submit</button>
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
  
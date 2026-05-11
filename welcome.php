<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
</head>
<body>
  <h2>welcome<?php echo $_SESSION['username'];?>
</h2>
  <a href="Logout.php">Logout</a>
</body>
</html>
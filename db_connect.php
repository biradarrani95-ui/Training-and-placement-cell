<?php
$servername="localhost";
$username="root";
$password="";
$db_name="TPSMS_db";
$conn=mysqli_connect($servername,$username,$password,$db_name);


if ($conn) {
    //echo "connected successfully";
}
else{
    //echo "connected failed";
}
?>
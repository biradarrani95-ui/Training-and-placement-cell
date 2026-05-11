<?php
include 'db_connect.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

  
    $sql = "DELETE FROM comments WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Comment deleted successfully'); 
        window.location.href='view_comment.php';</script>";
    } else {
        echo "Error deleting comment: " . $conn->error;
    }
} else {
    echo "Invalid request!";
}
?>
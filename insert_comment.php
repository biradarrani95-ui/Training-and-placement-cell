<?php
include "db_Connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (comment_text) VALUES ('$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Comment added!'); window.location='view_comment.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
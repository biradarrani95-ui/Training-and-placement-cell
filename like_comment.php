<?php
include "db_Connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE comments SET likes = likes + 1 WHERE id = $id";

    if ($conn->query($sql)) {
        header("Location: view_comment.php");
        exit;
    } else {
        echo "Error updating likes!";
    }
}
?>
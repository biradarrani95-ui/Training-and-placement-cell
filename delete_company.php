<?php
include 'db_Connect.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM company_data WHERE id='$id'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Company Deleted Successfully');
        window.location.href='view_company.php';
        </script>";
    }
    else
    {
        echo "Error deleting record: ".mysqli_error($conn);
    }
}
else
{
    echo "Invalid ID";
}
?>
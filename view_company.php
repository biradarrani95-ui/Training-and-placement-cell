<?php
include("db_Connect.php");

$sql = "SELECT * FROM company_data ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Company</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #eef2f3;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        margin: 40px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th {
        background: #007bff;
        color: white;
        padding: 10px;
        text-align: left;
        font-size: 16px;
    }

    table td {
        padding: 10px;
        border-bottom: 1px solid #ccc;
        font-size: 15px;
    }

    tr:nth-child(even) {
        background: #f7f9fc;
    }

    .btn-edit {
        padding: 8px 14px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-edit:hover {
        background: #0056b3;
    }

    .btn-delete {
        padding: 8px 14px;
        background: red;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-delete:hover {
        background: darkred;
    }
</style>

</head>
<body>

<div class="container">

<h2>Company List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Company Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Website</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

<?php
$sn = 1;   // Serial number start

while($row = mysqli_fetch_assoc($result)) { 
?>

<tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['website']; ?></td>
    <td><?php echo $row['Address']; ?></td>

    <td>
        <form action="edit_company.php" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn-edit">
                Edit
            </button>
        </form>
    </td>

    <td>
        <a href="delete_company.php?id=<?php echo $row['id']; ?>" 
           class="btn-delete"
           onclick="return confirm('Are you sure to delete this company?');">
           Delete
        </a>
    </td>
</tr>

<?php } ?>

</table>

</div>

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

</body>
</html>
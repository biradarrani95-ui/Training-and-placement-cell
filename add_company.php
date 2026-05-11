<!DOCTYPE html>
<html>
<head>
    <title>Add Company</title>
      <link rel="stylesheet" href = "style_form.css">

    
    </style>
</head>
<body>
    <h2>Add Company Details</h2>
    <form method="post" action="insertcompany.php">
        ID: <input type="number" name="id"><br><br>
        Company Name: <input type="text" name="name"><br><br>
        Address: <input type="text" name="address"><br><br>
        Email: <input type="email" name="email"><br><br>
        Contact: <input type="text" name="contact"><br><br>
        Website: <input type="text" name="website"><br><br>
        <input type="submit" name="submit" value="Add Company" 
        style=" padding: 14px 30px; font-size:18; background-color:#5bc0de; border radius:6px; cursor:pointer;">


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
</body>
</html>
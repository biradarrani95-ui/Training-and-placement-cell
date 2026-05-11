<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    
    <link rel="stylesheet" href = "style_form.css">


</head>
<body>
    <h2>Add Student Details</h2>
    <form action="insertstudent.php" method="POST">
        <label class = stu>Student Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Course:</label>
        <input type="text" name="course" required><br><br>

        <label>Division:</label>
        <input type="text" name="division" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Mobile Number:</label>
        <input type="text" name="number" required><br><br>

        <input type="submit" name="submit" value="Add Company" style=" padding: 14px 30px; font-size:18; background-color:#5bc0de; border radius:6px; cursor:pointer;">
        
>

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
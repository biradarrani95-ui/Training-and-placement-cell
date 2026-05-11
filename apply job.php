<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Job Apply Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #87CEFA, #E0FFFF);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .job-form-container {
        background-color: #ffffff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        max-width: 500px;
        width: 100%;
    }

    .job-form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333333;
    }

    .job-form-container label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
        color: #555555;
    }

    .job-form-container input[type="text"],
    .job-form-container input[type="email"],
    .job-form-container input[type="file"],
    .job-form-container select,
    .job-form-container textarea {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 15px;
        border: 1px solid #cccccc;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
        transition: 0.3s;
    }

    .job-form-container input:focus,
    .job-form-container select:focus,
    .job-form-container textarea:focus {
        border-color: #1E90FF;
        outline: none;
    }

    .job-form-container button {
        width: 100%;
        background-color: #1E90FF;
        color: white;
        padding: 12px;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .job-form-container button:hover {
        background-color: #104E8B;
    }

    .job-form-container textarea {
        resize: vertical;
        min-height: 100px;
    }
</style>
</head>
<body>

<div class="job-form-container">
    <h2>Apply for Job</h2>
    <form action="submit_job.php" method="POST" enctype="multipart/form-data">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Your full name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Your email" required>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone" placeholder="Your contact number" required>

        <label for="position">Job Position</label>
        <select name="position" id="position" required>
            <option value="">Select Position</option>
            <option value="software_developer">Software Developer</option>
            <option value="hr_executive">HR Executive</option>
            <option value="marketing_manager">Marketing Manager</option>
        </select>

        <label for="resume">Upload Resume</label>
        <input type="file" name="resume" id="resume" required>

        
        <button type="submit">Submit Application</button>
    </form>
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
</div>
 
</body>
</html>
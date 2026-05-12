<?php

$conn = mysqli_connect("localhost","root","","consultantweb_db");

/* AUTO CONSULTANT & CATEGORY */

$consultant = "";
$category = "";

if(isset($_GET['consultant'])){
    $consultant = $_GET['consultant'];
}

if(isset($_GET['category'])){
    $category = $_GET['category'];
}

/* INSERT DATA */

if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$consultant = $_POST['consultant'];
$category = $_POST['category'];
$date = $_POST['date'];
$message = $_POST['message'];

$sql = "INSERT INTO appointments(name,email,consultant_name,category,appointment_date,message)
VALUES('$name','$email','$consultant','$category','$date','$message')";

mysqli_query($conn,$sql);

echo "<h3 style='color:green;'>Appointment Booked Successfully</h3>";

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Book Appointment</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
background:#f7f7f7;
text-align:center;
}

/* Title */

h2{
background:#333A56;
color:white;
padding:20px;
margin-bottom:40px;
}

/* Form */

form{
background:white;
width:350px;
margin:auto;
padding:30px;
border-radius:12px;
box-shadow:0 6px 20px rgba(0,0,0,0.1);
}

/* Inputs */

input, textarea{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:6px;
font-size:14px;
}

/* Button */

button{
padding:12px;
width:100%;
background:#52658F;
color:white;
border:none;
border-radius:6px;
font-size:15px;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#333A56;
}

/* Footer */

.footer{
background:#333A56;
color:#d1d5db;
text-align:center;
padding:20px;
margin-top:50px;
font-size:14px;
}

</style>

</head>

<body>

<h2>Book Appointment</h2>

<form method="post">

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<input type="text" name="consultant" value="<?php echo $consultant; ?>" readonly>

<input type="text" name="category" value="<?php echo $category; ?>" readonly>

<input type="date" name="date" required>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit" name="submit">Book Appointment</button>

</form>

<div class="footer">
<p>© 2026 Consultant Website <br/> 
Designed By Vaishnavi Raut & Hadika Isani<br/>
Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>
</div>

</body>
</html>
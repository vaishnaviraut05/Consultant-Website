<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$_SESSION['user'] = $email;

header("Location: dashboard.php");
exit();

}else{
echo "<script>alert('Invalid Email or Password');</script>";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Consultant Login</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

html, body {
    height: 100%;
}

/* Body & Background */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('https://images.unsplash.com/photo-1581091012184-6c11f0c63c96?auto=format&fit=crop&w=1350&q=80');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    position: relative;
}

/* Overlay for readability */
body::before {
    content: "";
    position: fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: rgba(247,245,230,0.88);
    z-index: -1;
}

/* Login Form Box */
.login-box {
    background: rgba(255,255,255,0.95);
    padding: 40px 30px;
    width: 360px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.18);
    text-align: center;
    transition: 0.3s;
    opacity: 0;
    transform: translateY(-30px);
    animation: fadeIn 1s forwards;
}

/* Form hover shadow */
.login-box:hover {
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
}

/* Fade-in Animation */
@keyframes fadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Header */
.login-box h2 {
    margin-bottom: 25px;
    color: #333A56;
    letter-spacing: 1px;
}

/* Inputs */
input {
    width: 100%;
    padding: 14px;
    margin: 12px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
    transition: 0.3s;
}

input:focus {
    border-color: #52658F;
    outline: none;
}

/* Button */
button {
    width: 100%;
    padding: 14px;
    background: #333A56;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.4s;
}

button:hover {
    background: #52658F;
    transform: scale(1.02);
}

/* Links */
a {
    text-decoration: none;
    color: #333A56;
    font-weight: 500;
    transition: 0.3s;
}

a:hover {
    color: #52658F;
}

/* Paragraph */
p {
    margin-top: 15px;
    font-size: 14px;
    color: #555555;
}

/* Optional Icon */
.login-box i {
    color: #52658F;
    margin-right: 8px;
}
</style>
</head>

<body>

<div class="login-box">
<h2><i class="fas fa-user-circle"></i> Consultant Login</h2>

<form method="POST">
<input type="email" name="email" placeholder="Enter Email" required>
<input type="password" name="password" placeholder="Enter Password" required>
<button type="submit" name="login">Login</button>
<p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</form>
</div>

</body>
</html>
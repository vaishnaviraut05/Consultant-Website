<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$_SESSION['user']=$username;
header("Location: user_dashboard.php");

}else{

echo "Invalid Username or Password";

}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Login</title>

<style>

body{
font-family:Arial;
background:white;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.login{
width:300px;
border:1px solid #ccc;
padding:20px;
}

input{
width:100%;
padding:10px;
margin:10px 0;
}

button{
background:black;
color:white;
padding:10px;
border:none;
width:100%;
}

</style>

</head>

<body>

<div class="login">

<h2>User Login</h2>

<form method="post">

<input type="text" name="username" placeholder="Enter Username" required>

<input type="password" name="password" placeholder="Enter Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>
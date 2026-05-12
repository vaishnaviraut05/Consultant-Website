<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

include 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>View Users</title>

<style>

body{
font-family:Arial;
background:white;
}

h2{
text-align:center;
}

table{
width:80%;
margin:auto;
border-collapse:collapse;
}

table,th,td{
border:1px solid black;
}

th{
background:black;
color:white;
}

th,td{
padding:10px;
text-align:center;
}

</style>

</head>

<body>

<h2>Registered Users</h2>

<table>

<tr>
<th>User</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>
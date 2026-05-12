<?php

$conn = mysqli_connect("localhost","root","","consultantweb_db");

$sql = "SELECT * FROM appointments";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin - View Appointments</title>

<style>

body{
font-family:Arial;
background:#f2f2f2;
text-align:center;
}

table{
margin:auto;
border-collapse:collapse;
background:white;
}

th,td{
border:1px solid black;
padding:10px;
}

th{
background:black;
color:white;
}

</style>

</head>

<body>

<h2>All Consultant Appointments</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Consultant</th>
<th>Category</th>
<th>Date</th>
<th>Message</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['consultant_name']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['message']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>
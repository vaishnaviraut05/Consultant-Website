<?php
include 'db.php';

$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Feedback</title>

<!-- Link your main CSS palette -->
<link rel="stylesheet" href="style.css">

<style>
body{
    font-family: Arial, sans-serif;
    background: var(--color-white); /* palette background */
    color: var(--color-charcoal);
}

/* Heading */
h2{
    text-align: center;
    color: var(--color-midnight); /* palette heading */
    margin: 30px 0;
}

/* Table */
table{
    width: 80%;
    margin: auto;
    border-collapse: collapse;
}

/* Table borders */
table, th, td{
    border: 1px solid var(--color-midnight); /* palette border */
}

/* Table header */
th{
    background: var(--color-deep-teal); /* palette header background */
    color: var(--color-white);           /* palette header text */
}

/* Table cells */
th, td{
    padding: 10px;
    text-align: center;
    color: var(--color-charcoal); /* palette text */
}

/* Alternate row color (optional for readability) */
tr:nth-child(even){
    background: var(--color-slate-blue, #f0f4f8); /* subtle background for even rows */
    color: var(--color-white);
}

tr:hover{
    background: var(--color-midnight);
    color: var(--color-white);
}
</style>

</head>

<body>

<h2>User Feedback</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Message</th>
<th>Rating</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['rating']; ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>
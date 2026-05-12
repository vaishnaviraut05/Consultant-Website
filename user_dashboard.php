<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: user_login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background: #f7f7f7;
    color: #111111;
}

/* Header */
.header {
    background: #333A56; /* dark blue header */
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

/* Menu / Navigation */
.menu {
    background: #52658F; /* lighter blue menu */
    padding: 15px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.menu a {
    margin: 10px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    padding: 8px 15px;
    border-radius: 6px;
    transition: 0.3s;
}

.menu a:hover {
    color: #333A56;
    background: #f5f5f5;
}

/* Content */
.content {
    text-align: center;
    margin-top: 50px;
}

.content h2 {
    color: #333A56;
    margin-bottom: 20px;
}

.content p {
    color: #52658F;
    font-size: 16px;
}

/* Footer */
.footer {
    background: #333A56;
    color: #d1d5db;
    text-align: center;
    padding: 20px;
    margin-top: 50px;
    font-size: 14px;
}

</style>
</head>
<body>

<div class="header">
Consultant Website
</div>

<div class="menu">
<a href="index.php"><i class="fas fa-home"></i> Home</a>
<a href="feedback.php"><i class="fas fa-comment-dots"></i> Feedback</a>
<a href="logout.php"><i class="fas fa-comment-dots"></i> Logout</a>


<div class="content">
</div>

<div class="footer">
<p>© 2026 Consultant Website <br/> 
    Designed By Vaishnavi Raut & Hadika Isani<br/>
    Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>
</div>

</body>
</html>
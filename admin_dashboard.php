<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

/* Reset */
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background: #f7f7f7;
    color: #111111;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Top Bar */
.topbar {
    background: #333A56;
    color: white;
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.topbar h2 {
    margin: 0;
    font-size: 24px;
    letter-spacing: 1px;
}

.topbar p {
    font-weight: 500;
}

/* Back to Home Button */
.back{
    background:#52658F;
    color:white;
    padding:8px 16px;
    text-decoration:none;
    border-radius:6px;
    font-weight:bold;
    transition:0.3s;
}

.back:hover{
    background:white;
    color:#333A56;
}

/* Sidebar */
.sidebar {
    width: 220px;
    background: #52658F;
    height: 100vh;
    position: fixed;
    padding-top: 20px;
    transition: 0.3s;
    overflow-y: auto;
}

.sidebar a {
    display: block;
    padding: 15px 20px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    transition: 0.3s;
    border-left: 5px solid transparent;
}

.sidebar a:hover {
    background: #333A56;
    color: #ffffff;
    border-left: 5px solid #f5f5f5;
}

/* Main content */
.main {
    margin-left: 220px;
    padding: 30px;
    flex: 1;
}

/* Cards */
.cards {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    margin-bottom: 40px;
}

.card {
    background: white;
    width: 220px;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    text-align: center;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.card h3 {
    margin-bottom: 10px;
    color: #333A56;
}

.card h2 {
    margin-bottom: 15px;
    color: #52658F;
    font-size: 28px;
}

.card button {
    background: #333A56;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.card button:hover {
    background: #52658F;
}

/* Chart area */
.chart-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

.chart-box {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    flex: 1 1 400px;
}

.chart-box h3 {
    color: #333A56;
    margin-bottom: 15px;
    text-align: center;
}

/* Footer */
.footer {
    background: #333A56;
    color: white;
    text-align: center;
    padding: 25px 20px;
    margin-top: auto;
}

.footer p {
    margin: 8px 0;
    font-size: 14px;
    color: #d1d5db;
}

/* Scrollbar for sidebar */
.sidebar::-webkit-scrollbar {
    width: 6px;
}

.sidebar::-webkit-scrollbar-thumb {
    background-color: rgba(0,0,0,0.2);
    border-radius: 3px;
}

</style>
</head>

<body>

<div class="topbar">
<h2> Consultant Admin Dashboard</h2>
<a class="back" href="index.php"> Back to Home</a>
</div>

<div class="sidebar">
<a href="#"><i class="fas fa-home"></i> Dashboard</a>
<a href="education.php"><i class="fas fa-graduation-cap"></i> Education</a>
<a href="travel.php"><i class="fas fa-plane-departure"></i> Travel</a>
<a href="doctor.php"><i class="fas fa-user-md"></i> Doctors</a>
<a href="lawyer.php"><i class="fas fa-gavel"></i> Lawyers</a>
<a href="feedback.php"><i class="fas fa-comment-dots"></i> Feedback</a>
<a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
<a href="view_feedback.php"><i class="fas fa-eye"></i> View Feedback</a>
<a href="view_users.php"><i class="fas fa-users"></i> View Users</a>
<a href="view_appointments.php"><i class="fas fa-sign-out-alt"></i>view appointments</a>
<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div class="main">
<h2>Dashboard Overview</h2>

<div class="cards">
<div class="card">
<h3>Education</h3>
<h2 class="counter" data-target="20">0</h2>
</div>

<div class="card">
<h3>Travel</h3>
<h2 class="counter" data-target="20">0</h2>
</div>

<div class="card">
<h3>Doctors</h3>
<h2 class="counter" data-target="20">0</h2>
</div>

<div class="card">
<h3>Lawyers</h3>
<h2 class="counter" data-target="20">0</h2>
</div>
</div>

<div class="chart-container">
<div class="chart-box">
<h3>Consultants by Category</h3>
<canvas id="categoryChart"></canvas>
</div>

<div class="chart-box">
<h3>Feedback Ratings</h3>
<canvas id="feedbackChart"></canvas>
</div>
</div>
</div>

<div class="footer">
<p>© 2026 Consultant Website <br/> 
Designed By Vaishnavi Raut & Hadika Isani<br/>
Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>
</div>

<script>

/* Animated Counters */
const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
counter.innerText = '0';

const updateCounter = () => {
const target = +counter.getAttribute('data-target');
const current = +counter.innerText;
const increment = target / 50;

if(current < target){
counter.innerText = Math.ceil(current + increment);
setTimeout(updateCounter, 20);
}else{
counter.innerText = target;
}
}
updateCounter();
});

/* Charts */
const ctx1 = document.getElementById('categoryChart').getContext('2d');

new Chart(ctx1,{
type:'doughnut',
data:{
labels:['Education','Travel','Doctors','Lawyers'],
datasets:[{
data:[20,20,20,20],
backgroundColor:['#52658F','#333A56','#52658F','#333A56']
}]
}
});

const ctx2 = document.getElementById('feedbackChart').getContext('2d');

new Chart(ctx2,{
type:'bar',
data:{
labels:['1 Star','2 Star','3 Star','4 Star','5 Star'],
datasets:[{
label:'Number of Feedbacks',
data:[2,3,5,7,10],
backgroundColor:'#52658F'
}]
},
options:{
plugins:{legend:{display:false}},
scales:{y:{beginAtZero:true}}
}
});

</script>

</body>
</html>
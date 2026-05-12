<?php
session_start();

if(!isset($_SESSION['user']))
{
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Travel Consultants</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: Arial, Helvetica, sans-serif;

    background-image:url("https://img.freepik.com/free-photo/travel-concept-with-landmarks_23-2149153258.jpg");
    background-size:cover;
    background-position:center;
    background-attachment:fixed;

    color:#333A56;
}

/* overlay */

body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(247,245,230,0.92);
    z-index:-1;
}

/* header */

h2{
    text-align:center;
    background:#333A56;
    color:white;
    padding:20px;
}

/* back button */

.back{
    display:block;
    width:200px;
    margin:20px auto;
    text-align:center;
    background:#52658F;
    color:white;
    padding:12px;
    border-radius:5px;
    text-decoration:none;
}

/* search */

.search-box{
    text-align:center;
    margin-top:20px;
}

.search-box input{
    width:300px;
    padding:10px;
    border-radius:5px;
    border:1px solid #ccc;
}

/* cards */

.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
    padding:40px;
}

.card{
    background:#E8E8E8;
    padding:25px;
    border-radius:12px;
    box-shadow:0 6px 15px rgba(0,0,0,0.1);
    text-align:center;
}

.card i{
    font-size:40px;
    margin-bottom:10px;
}

.card p{
    margin:5px 0;
}

/* footer */

.footer{
    background:#333A56;
    color:white;
    text-align:center;
    padding:20px;
}

</style>

</head>

<body>

<h2>Travel Consultants</h2>

<a class="back" href="index.php">Back to Home</a>

<div class="search-box">
<input type="text" id="searchInput" placeholder="Search consultant or city..." onkeyup="searchConsultants()">
</div>

<div class="container">

<div class="card">
<i class="fas fa-plane"></i>
<h3>Thomas Cook India</h3>
<p>Email: info@thomascook.in</p>
<p>Contact: +91 22 66023000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Thomas Cook India&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>SOTC Travel</h3>
<p>Email: info@sotc.in</p>
<p>Contact: +91 22 67777111</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=SOTC Travel&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Cox & Kings</h3>
<p>Email: info@coxandkings.com</p>
<p>Contact: +91 22 22021797</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Cox & Kings&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>MakeMyTrip</h3>
<p>Email: support@makemytrip.com</p>
<p>Contact: +91 124 4628747</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=MakeMyTrip&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Yatra</h3>
<p>Email: support@yatra.com</p>
<p>Contact: +91 124 3040400</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=Yatra&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Kesari Tours</h3>
<p>Email: info@kesari.in</p>
<p>Contact: +91 20 66014100</p>
<p>Pune</p>
<a class="book-btn" href="appointment.php?consultant=Kesari Tours&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Veena World</h3>
<p>Email: info@veenaworld.com</p>
<p>Contact: +91 22 21012222</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Veena World&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Club Mahindra Holidays</h3>
<p>Email: info@mahindraholidays.com</p>
<p>Contact: +91 44 39881000</p>
<p>Chennai</p>
<a class="book-btn" href="appointment.php?consultant=Club Mahindra Holidays&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>TravelTriangle</h3>
<p>Email: info@traveltriangle.com</p>
<p>Contact: +91 124 6647000</p>
<p>Noida</p>
<a class="book-btn" href="appointment.php?consultant=TravelTriangle&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Thrillophilia</h3>
<p>Email: support@thrillophilia.com</p>
<p>Contact: +91 80 47180999</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=Thrillophilia&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Cleartrip</h3>
<p>Email: support@cleartrip.com</p>
<p>Contact: +91 22 41300300</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Cleartrip&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>IRCTC Tourism</h3>
<p>Email: tourism@irctc.com</p>
<p>Contact: +91 11 23311263</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=IRCTC Tourism&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Akbar Travels</h3>
<p>Email: info@akbartravels.com</p>
<p>Contact: +91 484 4029000</p>
<p>Kochi</p>
<a class="book-btn" href="appointment.php?consultant=Akbar Travels&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Riya Travel</h3>
<p>Email: info@riya.travel</p>
<p>Contact: +91 22 40648000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Riya Travel&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>PickYourTrail</h3>
<p>Email: support@pickyourtrail.com</p>
<p>Contact: +91 44 48528484</p>
<p>Chennai</p>
<a class="book-btn" href="appointment.php?consultant=PickYourTrail&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>EaseMyTrip</h3>
<p>Email: support@easemytrip.com</p>
<p>Contact: +91 11 43131313</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=EaseMyTrip&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Goibibo</h3>
<p>Email: support@goibibo.com</p>
<p>Contact: +91 124 6745000</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=Goibibo&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Travelguru</h3>
<p>Email: support@travelguru.com</p>
<p>Contact: +91 22 61501800</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Travelguru&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>Tour My India</h3>
<p>Email: info@tourmyindia.com</p>
<p>Contact: +91 11 40506065</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Tour My India&category=Travel">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-plane"></i>
<h3>India Someday</h3>
<p>Email: info@indiasomeday.com</p>
<p>Contact: +91 22 61711717</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=India Someday&category=Travel">Book Appointment</a>
</div> 

</div>

<div class="footer">
<p>© 2026 Consultant Website <br/> 
    Designed By Vaishnavi Raut & Hadika Isani<br/>
    Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>
</div>

<script>

function searchConsultants(){

let input=document.getElementById("searchInput").value.toLowerCase();

let cards=document.getElementsByClassName("card");

for(let i=0;i<cards.length;i++){

let text=cards[i].innerText.toLowerCase();

if(text.includes(input)){
cards[i].style.display="block";
}else{
cards[i].style.display="none";
}

}

}

</script>

</body>
</html>
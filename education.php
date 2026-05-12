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

<title>Education Consultants</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: Arial, Helvetica, sans-serif;

    background-image:url("https://img.freepik.com/free-photo/group-students-campus_23-2147769029.jpg");
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

<h2>Education Consultants</h2>

<a class="back" href="index.php">Back to Home</a>

<div class="search-box">
<input type="text" id="searchInput" placeholder="Search consultant or city..." onkeyup="searchConsultants()">
</div>

<div class="container">

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>IDP Education</h3>
<p>Email: info@idp.com</p>
<p>Contact: +91 22 42328000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=IDP Education&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Edwise International</h3>
<p>Email: info@edwiseinternational.com</p>
<p>Contact: +91 22 40843434</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Edwise International&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>KC Overseas</h3>
<p>Email: info@kcoverseas.com</p>
<p>Contact: +91 79 40309600</p>
<p>Ahmedabad</p>
<a class="book-btn" href="appointment.php?consultant=KC Overseas&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Global Opportunities</h3>
<p>Email: info@global-opportunities.net</p>
<p>Contact: +91 11 43850000</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Global Opportunities&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>AECC Global</h3>
<p>Email: info@aeccglobal.com</p>
<p>Contact: +91 80 41232555</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=AECC Global&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>SIEC Education</h3>
<p>Email: info@siecindia.com</p>
<p>Contact: +91 22 61618000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=SIEC Education&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Fateh Education</h3>
<p>Email: info@fateheducation.com</p>
<p>Contact: +91 11 69000000</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Fateh Education&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>TC Global</h3>
<p>Email: info@tcglobal.com</p>
<p>Contact: +91 80 46806500</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=TC Global&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>GeeBee Education</h3>
<p>Email: info@geebeeworld.com</p>
<p>Contact: +91 484 4000200</p>
<p>Kochi</p>
<a class="book-btn" href="appointment.php?consultant=GeeBee Education&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Canam Consultants</h3>
<p>Email: info@canamgroup.com</p>
<p>Contact: +91 172 5211000</p>
<p>Chandigarh</p>
<a class="book-btn" href="appointment.php?consultant=Canam Consultants&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Y-Axis Overseas</h3>
<p>Email: info@y-axis.com</p>
<p>Contact: +91 40 30543054</p>
<p>Hyderabad</p>
<a class="book-btn" href="appointment.php?consultant=Y-Axis Overseas&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Career Mosaic</h3>
<p>Email: info@careermosaic.com</p>
<p>Contact: +91 124 4185000</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=Career Mosaic&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Study Metro</h3>
<p>Email: info@studymetro.com</p>
<p>Contact: +91 44 42082000</p>
<p>Chennai</p>
<a class="book-btn" href="appointment.php?consultant=Study Metro&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Santa Monica Study Abroad</h3>
<p>Email: info@santamonicaedu.com</p>
<p>Contact: +91 484 4022222</p>
<p>Kochi</p>
<a class="book-btn" href="appointment.php?consultant=Santa Monica Study Abroad&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Inspirus Education</h3>
<p>Email: info@inspirus.com</p>
<p>Contact: +91 22 68525252</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Inspirus Education&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Study Abroad Shiksha</h3>
<p>Email: info@shiksha.com</p>
<p>Contact: +91 124 4510000</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=Study Abroad Shiksha&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Leap Scholar</h3>
<p>Email: info@leapscholar.com</p>
<p>Contact: +91 80 47180000</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=Leap Scholar&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>AdmitKard</h3>
<p>Email: info@admitkard.com</p>
<p>Contact: +91 120 4389000</p>
<p>Noida</p>
<a class="book-btn" href="appointment.php?consultant=AdmitKard&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Edvoy</h3>
<p>Email: info@edvoy.com</p>
<p>Contact: +91 22 48934500</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Edvoy&category=Education">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Gradding</h3>
<p>Email: info@gradding.com</p>
<p>Contact: +91 120 4311100</p>
<p>Noida</p>
<a class="book-btn" href="appointment.php?consultant=Gradding&category=Education">Book Appointment</a>
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
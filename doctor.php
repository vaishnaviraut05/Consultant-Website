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

<title>Doctor Consultants</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: Arial, Helvetica, sans-serif;

    background-image:url("https://img.freepik.com/free-photo/medical-banner-with-doctor-working-hospital_23-2149611213.jpg");
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

<h2>Doctor Consultants</h2>

<a class="back" href="index.php">Back to Home</a>

<div class="search-box">
<input type="text" id="searchInput" placeholder="Search hospital or city..." onkeyup="searchDoctors()">
</div>

<div class="container">

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Apollo Hospitals</h3>
<p>Email: info@apollohospitals.com</p>
<p>Contact: +91 1860 500 1066</p>
<p>Chennai</p>
<a class="book-btn" href="appointment.php?consultant=Apollo Hospitals&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Fortis Healthcare</h3>
<p>Email: care@fortishealthcare.com</p>
<p>Contact: +91 124 4921021</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=Fortis Healthcare&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Max Healthcare</h3>
<p>Email: info@maxhealthcare.com</p>
<p>Contact: +91 11 26515050</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Max Healthcare&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>AIIMS</h3>
<p>Email: info@aiims.edu</p>
<p>Contact: +91 11 26588500</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=AIIMS&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Kokilaben Hospital</h3>
<p>Email: info@kokilabenhospital.com</p>
<p>Contact: +91 22 30999999</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Kokilaben Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Tata Memorial Hospital</h3>
<p>Email: info@tmc.gov.in</p>
<p>Contact: +91 22 24177000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Tata Memorial Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Ruby Hall Clinic</h3>
<p>Email: info@rubyhall.com</p>
<p>Contact: +91 20 66455100</p>
<p>Pune</p>
<a class="book-btn" href="appointment.php?consultant=Ruby Hall Clinic&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Medanta Hospital</h3>
<p>Email: info@medanta.org</p>
<p>Contact: +91 124 4141414</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=Medanta Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Artemis Hospital</h3>
<p>Email: info@artemishospitals.com</p>
<p>Contact: +91 124 4511111</p>
<p>Gurgaon</p>
<a class="book-btn" href="appointment.php?consultant=Artemis Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>BLK Hospital</h3>
<p>Email: info@blkhospital.com</p>
<p>Contact: +91 11 30403040</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=BLK Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Manipal Hospitals</h3>
<p>Email: info@manipalhospitals.com</p>
<p>Contact: +91 80 25024444</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=Manipal Hospitals&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Narayana Health</h3>
<p>Email: info@narayanahealth.org</p>
<p>Contact: +91 80 71222222</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=Narayana Health&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Care Hospitals</h3>
<p>Email: info@carehospitals.com</p>
<p>Contact: +91 40 61656565</p>
<p>Hyderabad</p>
<a class="book-btn" href="appointment.php?consultant=Care Hospitals&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Yashoda Hospitals</h3>
<p>Email: info@yashodahospitals.com</p>
<p>Contact: +91 40 45674567</p>
<p>Hyderabad</p>
<a class="book-btn" href="appointment.php?consultant=Yashoda Hospitals&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Aster Hospitals</h3>
<p>Email: info@asterhospitals.com</p>
<p>Contact: +91 484 6699999</p>
<p>Kochi</p>
<a class="book-btn" href="appointment.php?consultant=Aster Hospitals&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>KIMS Hospital</h3>
<p>Email: info@kimshospitals.com</p>
<p>Contact: +91 40 44885000</p>
<p>Hyderabad</p>
<a class="book-btn" href="appointment.php?consultant=KIMS Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Global Hospitals</h3>
<p>Email: info@globalhospitals.com</p>
<p>Contact: +91 44 44777000</p>
<p>Chennai</p>
<a class="book-btn" href="appointment.php?consultant=Global Hospitals&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Sahyadri Hospital</h3>
<p>Email: info@sahyadrihospitals.com</p>
<p>Contact: +91 20 67213000</p>
<p>Pune</p>
<a class="book-btn" href="appointment.php?consultant=Sahyadri Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Wockhardt Hospital</h3>
<p>Email: info@wockhardthospitals.com</p>
<p>Contact: +91 22 61784444</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Wockhardt Hospital&category=Doctor">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Sunrise Hospitals</h3>
<p>Email: info@sunrisehospitals.com</p>
<p>Contact: +91 484 2666666</p>
<p>Kochi</p>
<a class="book-btn" href="appointment.php?consultant=Sunrise Hospitals&category=Doctor">Book Appointment</a>
</div>

</div>

<div class="footer">
<p>© 2026 Consultant Website <br/> 
    Designed By Vaishnavi Raut & Hadika Isani<br/>
    Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>
</div>

<script>

function searchDoctors(){

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
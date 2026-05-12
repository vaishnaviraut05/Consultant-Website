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

<title>Lawyer Consultants</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family: Arial, Helvetica, sans-serif;

background-image:url("https://images.unsplash.com/photo-1589829545856-d10d557cf95f");
background-size:cover;
background-position:center;
background-attachment:fixed;

color:#333A56;
}

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

h2{
text-align:center;
background:#333A56;
color:white;
padding:20px;
}

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

.book-btn{
display:inline-block;
margin-top:10px;
padding:8px 15px;
background:#52658F;
color:white;
text-decoration:none;
border-radius:5px;
font-size:14px;
}

.book-btn:hover{
background:#333A56;
}

.footer{
background:#333A56;
color:white;
text-align:center;
padding:20px;
}

</style>

</head>

<body>

<h2>Lawyer Consultants</h2>

<a class="back" href="index.php">Back to Home</a>

<div class="search-box">
<input type="text" id="searchInput" placeholder="Search lawyer or city..." onkeyup="searchConsultants()">
</div>

<div class="container">

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>AZB & Partners</h3>
<p>Email: info@azbpartners.com</p>
<p>Contact: +91 22 66396000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=AZB & Partners&email=info@azbpartners.com&contact=2266396000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Khaitan & Co</h3>
<p>Email: info@khaitanco.com</p>
<p>Contact: +91 22 66367000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Khaitan & Co&email=info@khaitanco.com&contact=2266367000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Trilegal</h3>
<p>Email: info@trilegal.com</p>
<p>Contact: +91 80 43434000</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=Trilegal&email=info@trilegal.com&contact=8043434000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Cyril Amarchand Mangaldas</h3>
<p>Email: info@cyrilshroff.com</p>
<p>Contact: +91 22 24964455</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Cyril Amarchand Mangaldas&email=info@cyrilshroff.com&contact=2224964455&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Shardul Amarchand Mangaldas</h3>
<p>Email: info@amsshardul.com</p>
<p>Contact: +91 22 66599999</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Shardul Amarchand Mangaldas&email=info@amsshardul.com&contact=2266599999&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>J Sagar Associates</h3>
<p>Email: info@jsalaw.com</p>
<p>Contact: +91 22 43418600</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=J Sagar Associates&email=info@jsalaw.com&contact=2243418600&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Luthra & Luthra</h3>
<p>Email: info@luthra.com</p>
<p>Contact: +91 11 41215100</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Luthra & Luthra&email=info@luthra.com&contact=1141215100&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Anand & Anand</h3>
<p>Email: info@anandandanand.com</p>
<p>Contact: +91 11 40563800</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Anand & Anand&email=info@anandandanand.com&contact=1140563800&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>IndusLaw</h3>
<p>Email: info@induslaw.com</p>
<p>Contact: +91 80 40722000</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=IndusLaw&email=info@induslaw.com&contact=8040722000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Fox Mandal</h3>
<p>Email: info@foxmandal.in</p>
<p>Contact: +91 33 40161000</p>
<p>Kolkata</p>
<a class="book-btn" href="appointment.php?consultant=Fox Mandal&email=info@foxmandal.in&contact=3340161000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>DSK Legal</h3>
<p>Email: info@dsklegal.com</p>
<p>Contact: +91 22 66583333</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=DSK Legal&email=info@dsklegal.com&contact=2266583333&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Economic Laws Practice</h3>
<p>Email: info@elp-in.com</p>
<p>Contact: +91 22 66367000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Economic Laws Practice&email=info@elp-in.com&contact=2266367000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Argus Partners</h3>
<p>Email: info@argus-p.com</p>
<p>Contact: +91 22 61606060</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Argus Partners&email=info@argus-p.com&contact=2261606060&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>BTG Legal</h3>
<p>Email: info@btglegal.com</p>
<p>Contact: +91 80 43480000</p>
<p>Bangalore</p>
<a class="book-btn" href="appointment.php?consultant=BTG Legal&email=info@btglegal.com&contact=8043480000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>HSA Advocates</h3>
<p>Email: info@hsalegal.com</p>
<p>Contact: +91 11 66170000</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=HSA Advocates&email=info@hsalegal.com&contact=1166170000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Talwar Thakore & Associates</h3>
<p>Email: info@ttalaw.com</p>
<p>Contact: +91 22 66131000</p>
<p>Mumbai</p>
<a class="book-btn" href="appointment.php?consultant=Talwar Thakore & Associates&email=info@ttalaw.com&contact=2266131000&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Singh & Associates</h3>
<p>Email: info@singhassociates.in</p>
<p>Contact: +91 11 43536600</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Singh & Associates&email=info@singhassociates.in&contact=1143536600&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Vaish Associates</h3>
<p>Email: info@vaishlaw.com</p>
<p>Contact: +91 11 49292500</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Vaish Associates&email=info@vaishlaw.com&contact=1149292500&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Ranjan Narula Associates</h3>
<p>Email: info@rnalegal.com</p>
<p>Contact: +91 11 41215100</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=Ranjan Narula Associates&email=info@rnalegal.com&contact=1141215100&category=Lawyer">Book Appointment</a>
</div>

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>LexCounsel</h3>
<p>Email: info@lexcounsel.in</p>
<p>Contact: +91 11 41033933</p>
<p>Delhi</p>
<a class="book-btn" href="appointment.php?consultant=LexCounsel&email=info@lexcounsel.in&contact=1141033933&category=Lawyer">Book Appointment</a>
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
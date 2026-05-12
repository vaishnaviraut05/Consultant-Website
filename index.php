<!DOCTYPE html>
<html>
<head>

<title>Consultant Website</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

/* General */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body{
    background:#F7F5E6;
    color:#333A56;
}


/* Header */

.header{
    background:#333A56;
    color:white;
    padding:30px;
    text-align:center;
}

.header h1{
    font-size:40px;
}


/* Navbar */

.navbar{
    background:#52658F;
    text-align:center;
    padding:15px;
}

.navbar a{
    color:white;
    margin:0 18px;
    text-decoration:none;
    font-weight:500;
}

.navbar a:hover{
    color:#F7F5E6;
}


/* Banner */

.banner{
    background:url("https://images.unsplash.com/photo-1507679799987-c73779587ccf");
    background-size:cover;
    background-position:center;
    padding:120px 20px;
    text-align:center;
    color:white;
}

.banner h1{
    font-size:48px;
    margin-bottom:15px;
}

.banner p{
    font-size:20px;
}


/* About Section */

.about{
    padding:80px 20px;
    text-align:center;
}

.about h2{
    font-size:36px;
    margin-bottom:20px;
}

.about p{
    max-width:700px;
    margin:auto;
    line-height:1.6;
}


/* Services */

.services{
    display:flex;
    justify-content:center;
    gap:40px;
    padding:80px 20px;
    flex-wrap:wrap;
    background:#E8E8E8;
}

.card{
    background:white;
    padding:35px 25px;
    width:240px;
    text-align:center;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card i{
    font-size:50px;
    color:#333A56;
    margin-bottom:15px;
}

.card h3{
    margin-bottom:18px;
}

.card a{
    background:#333A56;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:6px;
}

.card a:hover{
    background:#52658F;
}


/* Why Choose Us */

.why{
    padding:80px 20px;
    text-align:center;
}

.why h2{
    font-size:36px;
    margin-bottom:40px;
}

.why-box{
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
}

.why-box div{
    width:250px;
}

.why-box i{
    font-size:40px;
    color:#333A56;
    margin-bottom:10px;
}


/* Call To Action */

.cta{
    background:#333A56;
    color:white;
    text-align:center;
    padding:60px 20px;
}

.cta a{
    display:inline-block;
    margin-top:15px;
    background:#52658F;
    color:white;
    padding:12px 25px;
    text-decoration:none;
    border-radius:6px;
}

.cta a:hover{
    background:#F7F5E6;
    color:#333A56;
}


/* Footer */

.footer{
    background:#333A56;
    color:white;
    text-align:center;
    padding:25px;
}

.footer a{
    color:#F7F5E6;
    text-decoration:none;
    margin:0 10px;
}

.footer a:hover{
    color:white;
}

</style>

</head>

<body>


<!-- Header -->

<div class="header">

<h1>Consultant Website</h1>
<p>Your Trusted Consultant Platform</p>

</div>



<!-- Navbar -->

<div class="navbar">

<a href="index.php">Home</a>
<a href="dashboard.php">Dashboard</a>
<a href="feedback.php">Feedback</a>
<a href="login.php">Login</a>
<a href="admin_login.php">Admin</a>
<a href="help.php">Help</a>

</div>



<!-- Banner -->

<div class="banner">

<h1>Find the Best Consultants</h1>
<p>Education | Travel | Medical | Legal</p>

</div>



<!-- About -->

<div class="about">

<h2>About Our Platform</h2>

<p>
Consultant Website helps people connect with professional consultants in
education, travel, medical and legal fields. Our platform makes it easy
to find trusted experts and receive guidance quickly.
</p>

</div>



<!-- Services -->

<div class="services">

<div class="card">
<i class="fas fa-graduation-cap"></i>
<h3>Education</h3>
<a href="education.php">View</a>
</div>

<div class="card">
<i class="fas fa-plane-departure"></i>
<h3>Travel</h3>
<a href="travel.php">View</a>
</div>

<div class="card">
<i class="fas fa-user-md"></i>
<h3>Doctor</h3>
<a href="doctor.php">View</a>
</div>

<div class="card">
<i class="fas fa-gavel"></i>
<h3>Lawyer</h3>
<a href="lawyer.php">View</a>
</div>

</div>



<!-- Why Choose Us -->

<div class="why">

<h2>Why Choose Us</h2>

<div class="why-box">

<div>
<i class="fas fa-user-check"></i>
<h3>Trusted Consultants</h3>
<p>Experienced professionals ready to guide you.</p>
</div>

<div>
<i class="fas fa-clock"></i>
<h3>Fast Support</h3>
<p>Quick and reliable consultation services.</p>
</div>

<div>
<i class="fas fa-shield-alt"></i>
<h3>Secure Platform</h3>
<p>Your information is protected and safe.</p>
</div>

</div>

</div>



<!-- Call to Action -->

<div class="cta">

<h2>Start Your Consultation Today</h2>

<a href="login.php">Get Started</a>

</div>



<!-- Footer -->

<div class="footer">

<p>© 2026 Consultant Website <br/> 
    Designed By Vaishnavi Raut & Hadika Isani<br/>
    Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>

<p>
<a href="about.php">About Us</a> |
<a href="contact.php">Contact Us</a>
</p>

</div>


</body>
</html>
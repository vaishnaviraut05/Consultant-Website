<!DOCTYPE html>
<html>
<head>
<title>Consultant</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#F7F5E6;
    color:#333A56;
}


/* Navbar */

.navbar{
    background:#333A56;
    color:white;
    padding:20px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.navbar h2{
    font-size:24px;
}

.index{
    background:#52658F;
    padding:8px 15px;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.index:hover{
    background:#222;
}



/* Welcome Section */

.welcome{
    text-align:center;
    padding:40px 20px;
}

.welcome h2{
    margin-bottom:10px;
}



/* Info Section */

.info{
    display:flex;
    justify-content:center;
    gap:60px;
    padding:30px;
    text-align:center;
}

.info h3{
    font-size:28px;
}



/* Dashboard Cards */

.container{
    padding:40px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
}

.card{
    background:#E8E8E8;
    padding:30px;
    text-align:center;
    border-radius:12px;
    box-shadow:0 6px 15px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card h3{
    margin-bottom:20px;
}

.card a{
    display:inline-block;
    margin-top:10px;
    background:#333A56;
    color:white;
    padding:12px 25px;
    text-decoration:none;
    border-radius:8px;
}

.card a:hover{
    background:#52658F;
}



/* Updates */

.updates{
    padding:40px;
    text-align:center;
}

.updates h2{
    margin-bottom:15px;
}

.updates ul{
    list-style:none;
}

.updates li{
    padding:5px;
}



/* Footer */

.footer{
    background:#333A56;
    color:white;
    padding:40px 20px;
    margin-top:40px;
}

.footer-container{
    display:flex;
    justify-content:space-around;
    flex-wrap:wrap;
}

.footer-section{
    width:300px;
    margin:15px 10px;
}

.footer h3{
    margin-bottom:10px;
}

.footer p{
    font-size:14px;
    line-height:1.6;
    color:#E8E8E8;
}

.footer-bottom{
    text-align:center;
    margin-top:20px;
    border-top:1px solid #52658F;
    padding-top:10px;
    font-size:14px;
}

</style>
</head>

<body>


<div class="navbar">

<h2>Consultant Website Dashboard</h2>

<a class="index" href="index.php">Home</a>

</div>



<div class="welcome">

<h2>Welcome to Consultant Dashboard</h2>

<p>
Explore different consultants and get expert advice for your needs.
</p>

</div>



<div class="info">

<div>
<h3>80+</h3>
<p>Consultants</p>
</div>

<div>
<h3>50+</h3>
<p>Users</p>
</div>

<div>
<h3>24/7</h3>
<p>Support</p>
</div>

</div>



<div class="container">

<div class="card">
<h3>Education Consultant</h3>
<a href="education.php">View</a>
</div>

<div class="card">
<h3>Travel Consultant</h3>
<a href="travel.php">View</a>
</div>

<div class="card">
<h3>Doctor Consultant</h3>
<a href="doctor.php">View</a>
</div>

<div class="card">
<h3>Lawyer Consultant</h3>
<a href="lawyer.php">View</a>
</div>

<div class="card">
<h3>Feedback & Rating</h3>
<a href="feedback.php">Give Feedback</a>
</div>

</div>



<div class="updates">

<h2>Latest Updates</h2>

<ul>
<li>New education consultants added</li>
<li>Improved travel consultation services</li>
<li>Doctor consultants available </li>
</ul>

</div>



<div class="footer">

<div class="footer-container">

<div class="footer-section">
<h3>About Us</h3>
<p>
We provide professional consultant services in Education, Travel,
Medical and Legal sectors to help clients find the right guidance.
</p>
</div>

<div class="footer-section">
<h3>Contact Us</h3>
<p>Email: support@consultantweb.com</p>
<p>Phone: +91 98765 43210</p>
</div>

<div class="footer-section">
<h3>Address</h3>
<p>
Consultant Web Pvt Ltd<br>
Arni Road, Yavatmal<br>
Yavatmal, Maharashtra<br>
India
</p>
</div>

</div>

<div class="footer-bottom">
<p>© 2026 Consultant Website <br/> 
    Designed By Vaishnavi Raut & Hadika Isani<br/>
    Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>
</div>

</div>


</body>
</html>
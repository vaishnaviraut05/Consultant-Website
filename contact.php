<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>

<!-- Link your main CSS palette -->
<link rel="stylesheet" href="style.css">

<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    margin:0;
    background: var(--color-white); /* white background */
    color: var(--color-charcoal);   /* text color */
}

/* Header */
.header{
    background: var(--color-midnight); /* navy-like header */
    color: var(--color-white);
    padding: 25px;
    text-align: center;
}

.header h1{
    margin:0;
    font-size:28px;
}

/* Main container */
.container{
    padding:50px;
    text-align:center;
}

/* Contact Box */
.contact-box{
    background: var(--color-slate-blue); /* navy-ish box */
    width:400px;
    margin:auto;
    padding:35px;
    border-radius:12px;
    box-shadow:0 6px 20px rgba(0,0,0,0.15);
    color: var(--color-white);
}

/* Contact Info */
.contact-box p{
    font-size:18px;
    margin:15px 0;
}

/* Back button */
.back{
    display:inline-block;
    margin-top:20px;
    background: var(--color-deep-teal); /* button color */
    color: var(--color-white);
    padding:12px 25px;
    text-decoration:none;
    border-radius:6px;
    transition:0.3s;
}

.back:hover{
    background: var(--color-midnight); /* hover effect */
}

/* Footer */
.footer{
    background: var(--color-midnight);
    color: var(--color-white);
    text-align: center;
    padding:20px;
    margin-top:40px;
    font-size:14px;
}
</style>

</head>

<body>

<div class="header">
<h1>Contact Us</h1>
</div>

<div class="container">

<div class="contact-box">

<p>📧 Email: support@consultantweb.com</p>
<p>📞 Phone: +91 9876543210</p>
<p>📍 Address: Yavtamal, India</p>

<a href="index.php" class="back">Back to Home</a>

</div>

</div>

<div class="footer">
<p>© 2026 Consultant Website <br/> 
    Designed By Vaishnavi Raut & Hadika Isani<br/>
    Guided By Asst.Prof.S.R.Indurkar <br/>| All Rights Reserved</p>
</div>

</body>
</html>
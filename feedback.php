<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Feedback & Rating</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
/* Reset */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

html, body{
    height: 100%;
}

/* Body & Background */
body{
    background-image: url('https://images.unsplash.com/photo-1581092795366-40806a32d3d0?auto=format&fit=crop&w=1350&q=80'); /* feedback related image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: #333A56;
    text-align: center;
    padding: 50px 20px;
    position: relative;
}

/* Overlay to make text readable */
body::before{
    content:"";
    position: fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: rgba(247,245,230,0.85);
    z-index: -1;
}

/* Form Box */
.form-box{
    background: rgba(255,255,255,0.95);
    max-width: 420px;
    margin: auto;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    transition: 0.3s;
}

.form-box:hover{
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

/* Header */
h2{
    color: #333A56;
    margin-bottom: 25px;
    font-size: 28px;
    letter-spacing: 1px;
}

/* Inputs */
input, textarea{
    width: 100%;
    padding: 14px;
    margin: 12px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
    transition: 0.3s;
}

input:focus, textarea:focus{
    border-color: #52658F;
    outline: none;
}

/* Star Rating */
.rating{
    display: flex;
    justify-content: center;
    margin: 10px 0 20px;
}

.rating input{
    display: none;
}

.rating label{
    font-size: 28px;
    color: #ccc;
    padding: 0 5px;
    cursor: pointer;
    transition: 0.3s;
}

.rating input:checked ~ label,
.rating label:hover,
.rating label:hover ~ label{
    color: #FFD700; /* gold stars */
}

/* Button */
button{
    background: #333A56;
    color: white;
    border: none;
    padding: 14px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

button:hover{
    background: #52658F;
}

/* Back Link */
a{
    display: block;
    margin-top: 25px;
    text-decoration: none;
    color: #333A56;
    font-weight: 500;
    transition: 0.3s;
}

a:hover{
    color: #52658F;
}

/* Thank You Message */
h3{
    color: #333A56;
    margin-top: 20px;
    font-size: 22px;
}

p{
    color: #555555;
    font-size: 14px;
    margin: 5px 0 15px;
}
</style>
</head>

<body>

<div class="form-box">

<h2>Give Your Feedback</h2>

<form method="post">

<input type="text" name="name" placeholder="Enter Your Name" required>

<textarea name="message" placeholder="Write your feedback" required></textarea>

<!-- Star Rating -->
<div class="rating">
  <input type="radio" name="rating" value="5" id="star5"><label for="star5"><i class="fas fa-star"></i></label>
  <input type="radio" name="rating" value="4" id="star4"><label for="star4"><i class="fas fa-star"></i></label>
  <input type="radio" name="rating" value="3" id="star3"><label for="star3"><i class="fas fa-star"></i></label>
  <input type="radio" name="rating" value="2" id="star2"><label for="star2"><i class="fas fa-star"></i></label>
  <input type="radio" name="rating" value="1" id="star1"><label for="star1"><i class="fas fa-star"></i></label>
</div>

<button type="submit" name="submit">Submit Feedback</button>

</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    /* Database insert remains the same */
    $sql = "INSERT INTO feedback(name,message,rating) VALUES('$name','$message','$rating')";
    mysqli_query($conn, $sql);

    echo "<h3>Thank you $name for your feedback!</h3>";
    echo "<p>Your Rating: $rating</p>";
}
?>

<a href="dashboard.php">Back to Dashboard</a>

</div>
</body>
</html>
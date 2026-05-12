<?php
$host = "localhost";
$user = "root";           // XAMPP default
$password = "";           // XAMPP default
$database = "consultantweb_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
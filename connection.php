<?php
$servername = "mindcare.ctoao8wquueo.us-east-1.rds.amazonaws.com";
$username = "admin";  
$password = "mindcare"; 
$dbname = "MindCare"; 

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Connection failed ! : " . $database->connect_error);
}
?>


<?php
$servername = "localhost";
$username= "root";
$password = "";
$db = "eprofile";
 

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
date_default_timezone_set("Asia/Kuala_Lumpur"); 
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}






?>
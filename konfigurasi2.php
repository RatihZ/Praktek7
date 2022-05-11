<?php 
$servername = "localhost";
$username = "what";
$password = "what";
$dbname = "myhr";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn){
    die("Connection FAILED: " . mysqli_connect_error());
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "online_exam";

// Create connection 
 $conn = mysqli_connect($servername, $username, $password,$dbName);

// Check connection
if(empty($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
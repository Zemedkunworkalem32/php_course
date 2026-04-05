<?php 
// MySQLi OOP connection 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>";

// Create database
$sql = "CREATE DATABASE myDB";

if($conn->query($sql)===TRUE){
  echo "database created successfully";
}
else{
  echo "error creating database".$conn->error;
}

// Close connection
$conn->close();
?>
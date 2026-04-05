<?php
// MySqli Procedural connection
$servername = "localhost";  
$username = "root
";$password = "";

$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE MyDb";
if(mysqli_query($conn,$sql)){
  echo "database created successfully";
}
else{
  echo "error database creation".mysqli_error($conn);
}
mysqli_close($conn);
?>
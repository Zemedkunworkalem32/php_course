<?php 
//pdo connection_aborted
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host = $servername",$username,$password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $sql = "CREATE DATABASE MyDb";
  $conn->exec($sql);
  echo "database created successfullly";
} catch(PDOException $e) {
  echo $sql . $e->getMessage();
}
$conn = null;
?>
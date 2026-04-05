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
 $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";

  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "Record inserted successfully. Last inserted ID is: " . $last_id;
} catch(PDOException $e) {
  echo $sql . $e->getMessage();
}
$conn = null;
?>
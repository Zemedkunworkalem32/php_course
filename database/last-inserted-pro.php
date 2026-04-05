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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";

if(mysqli_query($conn,$sql)){
  $last_id = mysqli_insert_id($conn);
  echo "New record inserted successfully. Last inserted ID is: " . $last_id;
}
else{
  echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
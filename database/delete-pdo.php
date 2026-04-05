<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "DELETE FROM MyGuests WHERE id=3";
    $conn->exec($sql);
    
    echo "Record deleted successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
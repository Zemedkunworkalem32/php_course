<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "UPDATE MyGuests SET lastname='Johnson' WHERE id=2";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    echo $stmt->rowCount() . " record(s) updated successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
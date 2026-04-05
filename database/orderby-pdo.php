<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Ascending
    echo "<h3>Ascending:</h3>";
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $row) {
        echo $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
    
    // Descending
    echo "<h3>Descending:</h3>";
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname DESC");
    $stmt->execute();
    foreach($stmt->fetchAll() as $row) {
        echo $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
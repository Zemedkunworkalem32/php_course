<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Prepare with named parameters
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) 
                            VALUES (:firstname, :lastname, :email)");
    
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    
    // Insert multiple records
    $firstname = "John";
    $lastname = "Prepared";
    $email = "john@example.com";
    $stmt->execute();
    
    $firstname = "Jane";
    $lastname = "Secure";
    $email = "jane@example.com";
    $stmt->execute();
    
    $firstname = "Bob";
    $lastname = "Safe";
    $email = "bob@example.com";
    $stmt->execute();
    
    echo "Records inserted successfully using prepared statements";
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
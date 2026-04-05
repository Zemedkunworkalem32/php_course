<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

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

$stmt->close();
$conn->close();
?>
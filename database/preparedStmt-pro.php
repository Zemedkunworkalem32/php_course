<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and bind
$stmt = mysqli_prepare($conn, "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);

// Insert multiple records
$firstname = "John";
$lastname = "Prepared";
$email = "john@example.com";
mysqli_stmt_execute($stmt);

$firstname = "Jane";
$lastname = "Secure";
$email = "jane@example.com";
mysqli_stmt_execute($stmt);

$firstname = "Bob";
$lastname = "Safe";
$email = "bob@example.com";
mysqli_stmt_execute($stmt);

echo "Records inserted successfully using prepared statements";

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
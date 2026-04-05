<?php
// insert_multiple.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Multiple SQL statements
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Julie', 'Dooley', 'julie@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Michael', 'Brown', 'michael@example.com')";

// Execute multiple queries
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
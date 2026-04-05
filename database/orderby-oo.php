<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ascending (default)
echo "<h3>Ascending:</h3>";
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}

// Descending
echo "<h3>Descending:</h3>";
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}
$conn->close();
?>
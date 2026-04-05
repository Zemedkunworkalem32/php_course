<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ascending
echo "<h3>Ascending:</h3>";
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}

// Descending
echo "<h3>Descending:</h3>";
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}
mysqli_close($conn);
?>
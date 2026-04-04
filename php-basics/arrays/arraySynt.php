<?php
echo "<h2>=== PHP Arrays Demo ===</h2><br>";

// -----------------------------
// 1. Using array() syntax
$cars1 = array("Volvo", "BMW", "Toyota");
echo "<strong>1. Using array() syntax:</strong><br>";
echo "First car: " . $cars1[0] . "<br>";
echo "Second car: " . $cars1[1] . "<br>";
echo "Third car: " . $cars1[2] . "<br>";
echo "Total cars: " . count($cars1) . "<br><br>";

// -----------------------------
// 2. Using short [] syntax
$cars2 = ["Audi", "Mercedes", "Ford"];
echo "<strong>2. Using short [] syntax:</strong><br>";
echo "First car: " . $cars2[0] . "<br>";
echo "Second car: " . $cars2[1] . "<br>";
echo "Third car: " . $cars2[2] . "<br>";
echo "Total cars: " . count($cars2) . "<br><br>";

// -----------------------------
// 3. Mixed example: manual indexing
$cars3[0] = "Honda";
$cars3[1] = "Nissan";
$cars3[2] = "Kia";
echo "<strong>3. Using manual indexing:</strong><br>";
echo "First car: " . $cars3[0] . "<br>";
echo "Second car: " . $cars3[1] . "<br>";
echo "Third car: " . $cars3[2] . "<br>";
echo "Total cars: " . count($cars3) . "<br>";
?>
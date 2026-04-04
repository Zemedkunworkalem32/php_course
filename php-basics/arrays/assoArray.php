<?php
echo "<h2>=== Ultimate PHP Arrays Demo ===</h2><br>";

// -----------------------------
// 1. Indexed Arrays (Automatic Indexing)
$cars = ["Volvo", "BMW", "Toyota"];
echo "<strong>1. Indexed Array (Automatic Indexing):</strong><br>";
echo "First car: " . $cars[0] . "<br>";
echo "Second car: " . $cars[1] . "<br>";
echo "Third car: " . $cars[2] . "<br>";
echo "Total cars: " . count($cars) . "<br><br>";

// -----------------------------
// 2. Indexed Arrays (Manual Indexing)
$fruits[0] = "Apple";
$fruits[1] = "Banana";
$fruits[3] = "Cherry"; // skipped index 2
echo "<strong>2. Indexed Array (Manual Indexing with skipped index):</strong><br>";
echo "All fruits:<br>";
foreach($fruits as $index => $fruit){
    echo "Index $index: $fruit<br>";
}
echo "<br>";

// -----------------------------
// 3. Associative Arrays
$ages = array(
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 43
);
echo "<strong>3. Associative Array:</strong><br>";
foreach($ages as $name => $age){
    echo "$name is $age years old.<br>";
}
echo "<br>";

// -----------------------------
// 4. Associative Arrays (Manual Assignment)
$grades['Alice'] = "A";
$grades['Bob'] = "B";
$grades['Charlie'] = "C";
echo "<strong>4. Associative Array (Manual Assignment):</strong><br>";
foreach($grades as $student => $grade){
    echo "$student got grade $grade.<br>";
}
echo "<br>";

?>
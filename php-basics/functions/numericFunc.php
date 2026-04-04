<?php
echo "=== PHP Number Functions Demo ===<br><br>";

// ------------------------------
// is_int(), is_integer(), is_long()
$x = 5985;
echo "is_int:<br>";
var_dump(is_int($x)); echo "<br>";

$x = 59.85;
var_dump(is_int($x)); echo "<br><br>";

// ------------------------------
// is_float(), is_double()
$x = 10.365;
echo "is_float:<br>";
var_dump(is_float($x)); echo "<br><br>";

// ------------------------------
// is_finite(), is_infinite()
$x = 1.9e308; // large number
echo "is_finite:<br>";
var_dump(is_finite($x)); echo "<br>";

$x = 1.9e411; // too large → infinite
echo "is_infinite:<br>";
var_dump(is_infinite($x)); echo "<br><br>";

// ------------------------------
// is_nan()
$x = acos(8); // invalid
echo "is_nan:<br>";
var_dump(is_nan($x)); echo "<br><br>";

// ------------------------------
// is_numeric()
$x = "5985";
echo "is_numeric:<br>";
var_dump(is_numeric($x)); echo "<br>";

$x = "Hello";
var_dump(is_numeric($x)); echo "<br>";
?>
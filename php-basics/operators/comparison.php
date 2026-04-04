<?php
// PHP Comparison Operators Demo

$x = 10;
$y = "10";

echo "x = $x, y = '$y'\n\n";

// Equal (==)
var_dump($x == $y);  // true, values are equal

// Identical (===)
var_dump($x === $y); // false, different types (int vs string)

// Not equal (!= or <>)
var_dump($x != $y);  // false, values are equal
var_dump($x <> $y);  // false, values are equal

// Not identical (!==)
var_dump($x !== $y); // true, different types

// Greater than (>)
var_dump($x > $y);   // false, 10 is not greater than 10

// Less than (<)
var_dump($x < $y);   // false, 10 is not less than 10

// Greater than or equal (>=)
var_dump($x >= $y);  // true

// Less than or equal (<=)
var_dump($x <= $y);  // true

// Spaceship operator (<=>)
var_dump($x <=> $y); // 0 (x equals y)
?>
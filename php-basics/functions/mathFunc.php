<?php
echo "=== PHP Math Functions Demo ===<br><br>";

// pi()
echo "Value of pi(): " . pi() . "<br><br>";

// min() and max()
$numbers = [0, 150, 30, 20, -8, -200];
echo "Minimum value: " . min(...$numbers) . "<br>";
echo "Maximum value: " . max(...$numbers) . "<br><br>";

// abs()
echo "Absolute value of -6.7: " . abs(-6.7) . "<br><br>";

// sqrt()
echo "Square root of 64: " . sqrt(64) . "<br><br>";

// round()
echo "Round 0.60: " . round(0.60) . "<br>";
echo "Round 0.49: " . round(0.49) . "<br><br>";

// rand()
echo "Random number: " . rand() . "<br>";
echo "Random number between 10 and 100: " . rand(10, 100) . "<br>";
?>
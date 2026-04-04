<?php
// Enable strict typing
declare(strict_types=1);

echo "<h2>=== PHP Function Demo with Return Statements ===</h2><br>";

// -----------------------------
// 1. Function with return but NO return type declaration
function multiply($x, $y) {
    return $x * $y;
}

echo "<strong>1. Function without return type declaration:</strong><br>";
$result1 = multiply(4, 6);
echo "multiply(4, 6) = $result1<br>";
$result2 = multiply(7, 3);
echo "multiply(7, 3) = $result2<br><br>";

// -----------------------------
// 2. Function with return type declaration
function multiplyInt(int $x, int $y): int {
    return $x * $y;
}

echo "<strong>2. Function with return type declaration (int):</strong><br>";
$result3 = multiplyInt(5, 10);
echo "multiplyInt(5, 10) = $result3<br>";
$result4 = multiplyInt(8, 9);
echo "multiplyInt(8, 9) = $result4<br>";

// Uncommenting the following line will throw a Fatal Error due to strict typing
// $errorTest = multiplyInt(4.5, 2);

echo "<br><br>";

// -----------------------------
// 3. Function with float return type
function divide(float $a, float $b): float {
    return $a / $b;
}

echo "<strong>3. Function with float return type:</strong><br>";
echo "divide(10, 4) = " . divide(10, 4) . "<br>";
echo "divide(7, 2) = " . divide(7, 2) . "<br><br>";

// -----------------------------
// 4. Function demonstrating multiple return types using PHP 8.0 union types
function processNumber(int|float $n): int|float {
    if ($n > 10) {
        return $n * 2; // int or float depending on input
    } else {
        return $n / 2; // int or float depending on input
    }
}

echo "<strong>4. Function with union types (PHP 8.0+):</strong><br>";
echo "processNumber(5) = " . processNumber(5) . "<br>";
echo "processNumber(15) = " . processNumber(15) . "<br>";
?>
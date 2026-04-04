<?php
echo "<h2>=== PHP Passing Arguments Demo ===</h2><br>";

// -----------------------------
// 1. Pass-by-Value Example
function addTen($num) {  // passed by value
    $num += 10;
    echo "Inside addTen(): num = $num<br>";
}

$val1 = 5;
echo "<strong>1. Pass-by-Value:</strong><br>";
echo "Before addTen(): val1 = $val1<br>";
addTen($val1);  // val1 is passed by value
echo "After addTen(): val1 = $val1<br><br>";

// -----------------------------
// 2. Pass-by-Reference Example
function addFive(&$num) {  // passed by reference
    $num += 5;
    echo "Inside addFive(): num = $num<br>";
}

$val2 = 2;
echo "<strong>2. Pass-by-Reference:</strong><br>";
echo "Before addFive(): val2 = $val2<br>";
addFive($val2);  // val2 is passed by reference
echo "After addFive(): val2 = $val2<br><br>";

// -----------------------------
// 3. Using Pass-by-Reference in Arrays
function doubleValues(&$arr) {
    foreach ($arr as &$value) {  // each element passed by reference
        $value *= 2;
    }
}

$numbers = [1, 2, 3, 4];
echo "<strong>3. Pass-by-Reference with Arrays:</strong><br>";
echo "Before doubleValues(): [" . implode(", ", $numbers) . "]<br>";
doubleValues($numbers);
echo "After doubleValues(): [" . implode(", ", $numbers) . "]<br>";
?>
<?php
echo "<h2>=== PHP Functions Demo ===</h2><br>";

// 1. Function without arguments
function writeMsg() {
    echo "Hello world!<br>";
}

echo "<strong>1. Function without arguments:</strong><br>";
writeMsg();
writeMsg();
writeMsg();
echo "<br>";

// 2. Function with arguments and default values
function person($fname, $nationality = "Ethiopian") {
    echo "Name: $fname, Nationality: $nationality.<br>";
}

echo "<strong>2. Function with arguments:</strong><br>";
person("Jani");
person("Hege");
person("Stale"); 
person("Kai Jim"); 
person("Borge");
echo "<br>";

// 3. Function with multiple numeric arguments (example with sum)
function addNumbers($a, $b) {
    $sum = $a + $b;
    echo "Sum of $a and $b is $sum.<br>";
}

echo "<strong>3. Function with numeric arguments:</strong><br>";
addNumbers(5, 10);
addNumbers(7, 3);
addNumbers(12, 8);
echo "<br>";

// 4. Function with return value
function multiply($x, $y) {
    return $x * $y;
}

echo "<strong>4. Function with return value:</strong><br>";
$result = multiply(4, 6);
echo "4 multiplied by 6 is $result.<br>";
$result = multiply(7, 9);
echo "7 multiplied by 9 is $result.<br>";
?>
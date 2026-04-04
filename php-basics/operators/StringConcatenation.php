<?php
// PHP String Operators Demo

$txt1 = "Hello";
$txt2 = " World";

// Concatenation (.)
$concatenated = $txt1 . $txt2;
echo "Concatenation (txt1 . txt2): $concatenated\n"; // Hello World

// Concatenation assignment (.=)
$txt1 .= $txt2; // appends txt2 to txt1
echo "Concatenation assignment (txt1 .= txt2): $txt1\n"; // Hello World
?>
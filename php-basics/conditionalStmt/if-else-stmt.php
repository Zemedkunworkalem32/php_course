<?php
// PHP Conditional Statements Demo

// Get current hour (0-23)
$t = date("H");

echo "--- if statement ---\n";
if ($t < "20") {
    echo "Have a good day!\n";
}

echo "\n--- if...else statement ---\n";
if ($t < "20") {
    echo "Have a good day!\n";
} else {
    echo "Have a good night!\n";
}

echo "\n--- if...elseif...else statement ---\n";
if ($t < "10") {
    echo "Have a good morning!\n";
} elseif ($t < "20") {
    echo "Have a good day!\n";
} else {
    echo "Have a good night!\n";
}
?>
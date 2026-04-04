<?php
echo "=== Looping Statements Demo ===\n\n";

// ------------------------------
// 1. while loop
echo "--- while loop ---\n";
$i = 1;
while ($i <= 5) {
    echo "i = $i\n";
    $i++;
}

// ------------------------------
// 2. do...while loop
echo "\n--- do...while loop ---\n";
$j = 1;
do {
    echo "j = $j\n";
    $j++;
} while ($j <= 5);

// ------------------------------
// 3. for loop
echo "\n--- for loop ---\n";
for ($k = 1; $k <= 5; $k++) {
    echo "k = $k\n";
}

// ------------------------------
// 4. foreach loop
echo "\n--- foreach loop ---\n";
$colors = ["red", "blue", "green"];

foreach ($colors as $color) {
    echo "Color: $color\n";
}
?>
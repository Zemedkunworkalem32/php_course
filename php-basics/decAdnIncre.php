<?php
// PHP Increment/Decrement Operators Demo
$x = 5;

echo "Original x = $x\n\n";

// Pre-increment (++$x)
echo "Pre-increment (++\$x): " . (++$x) . "\n"; // increments first, then returns
echo "Value of x now: $x\n\n";

// Post-increment ($x++)
echo "Post-increment (\$x++): " . ($x++) . "\n"; // returns first, then increments
echo "Value of x now: $x\n\n";

// Pre-decrement (--$x)
echo "Pre-decrement (--\$x): " . (--$x) . "\n"; // decrements first, then returns
echo "Value of x now: $x\n\n";

// Post-decrement ($x--)
echo "Post-decrement (\$x--): " . ($x--) . "\n"; // returns first, then decrements
echo "Value of x now: $x\n\n";

// ------------------------------------------------------------
// PHP Logical Operators Demo
$a = true;
$b = false;

echo "a = true, b = false\n\n";

// And / &&
echo "a and b: "; var_dump($a and $b); // false
echo "a && b: "; var_dump($a && $b);    // false

// Or / ||
echo "a or b: "; var_dump($a or $b);   // true
echo "a || b: "; var_dump($a || $b);   // true

// Xor
echo "a xor b: "; var_dump($a xor $b); // true (true if one is true, but not both)

// Not
echo "!a: "; var_dump(!$a);            // false
echo "!b: "; var_dump(!$b);            // true
?>
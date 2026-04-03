<?php
// PHP Conditional Assignment Operators Demo

echo "--- Ternary Operator (?:) ---\n";

$age = 20;

// Ternary: condition ? value_if_true : value_if_false
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Age = $age, Status = $status\n"; // Output: Adult

$age = 15;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Age = $age, Status = $status\n"; // Output: Minor

echo "\n--- Null Coalescing Operator (??) ---\n";

// Null coalescing: returns first value if set and not null, otherwise second value
$username = "Zemedkun";
$displayName = $username ?? "Guest";
echo "Username exists: $displayName\n"; // Output: Zemedkun

$username = null;
$displayName = $username ?? "Guest";
echo "Username is null: $displayName\n"; // Output: Guest

// Also works if variable is not set at all
$displayName = $nonExistentVar ?? "Guest";
echo "Variable not set: $displayName\n"; // Output: Guest
?>
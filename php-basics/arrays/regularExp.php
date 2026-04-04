<?php
$str = "I love apples, bananas, and apples.";

// 1. preg_match() - check if "apples" exists
$pattern = "/apples/i"; // case-insensitive
$result1 = preg_match($pattern, $str);
echo "preg_match: " . $result1 . "\n"; 
// Output: 1 (found)

// 2. preg_match_all() - count how many times "apples" appears
$result2 = preg_match_all($pattern, $str);
echo "preg_match_all: " . $result2 . "\n"; 
// Output: 2 (appears twice)

// 3. preg_replace() - replace "apples" with "oranges"
$result3 = preg_replace($pattern, "oranges", $str);
echo "preg_replace: " . $result3 . "\n"; 
// Output: I love oranges, bananas, and oranges.
?>
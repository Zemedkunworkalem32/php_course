<?php
$str = "Apples and bananas.";

// Regex pattern:
// ba -> literal "ba"
// (na){2} -> "na" repeated 2 times, so matches "nana"
// /i -> case-insensitive
$pattern = "/ba(na){2}/i";

// Use preg_match to check for a match and capture it
if (preg_match($pattern, $str, $matches)) {
    echo "Match found!\n";
    echo "Full match: " . $matches[0] . "\n";  // Full matched string
    echo "Captured group: " . $matches[1] . "\n"; // Group inside parentheses
} else {
    echo "No match found.";
}
?>
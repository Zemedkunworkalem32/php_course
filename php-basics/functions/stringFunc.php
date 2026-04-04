<?php
echo "=== PHP String Functions Demo ===\n\n";

// Original string
$str = "Hello world!";

// ------------------------------
// strlen() - length of string
echo "Length of string:\n";
echo strlen($str) . "\n\n"; // 12

// ------------------------------
// str_word_count() - count words
echo "Word count:\n";
echo str_word_count($str) . "\n\n"; // 2

// ------------------------------
// strrev() - reverse string
echo "Reversed string:\n";
echo strrev($str) . "\n\n"; // !dlrow olleH

// ------------------------------
// strpos() - find position of text
echo "Position of 'world':\n";
echo strpos($str, "world") . "\n\n"; // 6

// ------------------------------
// str_replace() - replace text
echo "Replace 'world' with 'Dolly':\n";
echo str_replace("world", "Dolly", $str) . "\n"; // Hello Dolly
?>
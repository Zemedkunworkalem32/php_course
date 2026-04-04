<?php
define("GREETING", "Hello World!"); // constant
define("PI", 3.14159);        // constant

echo GREETING;   // Output: Hello World!
echo "<br>";
echo PI;         // Output: 3.14159
echo "<br>";
echo PI;  echo "<br>";


// Define a constant
define("SITE_NAME", "MyWebsite");

// Accessing the constant
echo SITE_NAME;  // Output: MyWebsite
echo "<br>";
echo constant('SITE_NAME');  // Output: MyWebsite
echo "<br>";
// echo SiTe_NaMe;  // This would cause an error in modern PHP versions
?>
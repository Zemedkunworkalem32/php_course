<?php
// -----------------------------
// 5. Multidimensional Arrays
$contacts = array(
    "John" => array(
        "email" => "john@example.com",
        "phone" => "1234567890"
    ),
    "Jane" => array(
        "email" => "jane@example.com",
        "phone" => "0987654321"
    )
);
echo "<strong>5. Multidimensional Array:</strong><br>";
foreach($contacts as $person => $info){
    echo "$person's email: " . $info['email'] . ", phone: " . $info['phone'] . "<br>";
}
echo "<br>";

// -----------------------------
// 6. Using implode() to display array as string
echo "<strong>6. Using implode() with indexed array:</strong><br>";
echo "Cars: " . implode(", ", $cars) . "<br>";
?>
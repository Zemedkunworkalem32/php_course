<?php
$txt = "Scope Demo!";
$x = 5;

echo $txt;
echo "<br>";

function demo() {
    global $x;        // global variable
    static $y = 0;    // static variable
    $z = 2;           // local variable

    $x += 1;
    $y++;
    $z++;

    echo "the value of global x is: " . $x;
    echo "<br>";
    echo "the value of static y is: " . $y;
    echo "<br>";
    echo "the value of local z is: " . $z;
    echo "<br><br>";
    $GLOBALS['x'] += 10;     // method 2: access global via $GLOBALS
    echo "After using \$GLOBALS, x = " . $GLOBALS['x'] . "<br>";
}
demo();
demo();
demo();
?>
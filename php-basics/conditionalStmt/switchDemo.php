<?php
// Using switch with numbers (day of week)

$day = date("N"); // 1 = Monday, 7 = Sunday

switch ($day) {
    case 1:
        echo "Today is Monday";
        break;

    case 2:
        echo "Today is Tuesday";
        break;

    case 3:
        echo "Today is Wednesday";
        break;

    case 4:
        echo "Today is Thursday";
        break;

    case 5:
        echo "Today is Friday";
        break;

    case 6:
    case 7:
        echo "It's the weekend!";
        break;

    default:
        echo "Invalid day";
}
?>
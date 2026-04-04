<?php
echo "<h2>=== PHP Array Functions Demo ===</h2><br>";

// -----------------------------
// 1. array_intersect() - Returns matching elements of two arrays
$name1 = array("sonoo", "john", "vivek", "smith");
$name2 = array("umesh", "sonoo", "kartik", "smith");

$name3 = array_intersect($name1, $name2);

echo "<strong>1. array_intersect():</strong><br>";
echo "Matching names:<br>";
foreach($name3 as $n){
    echo "$n<br>";
}
echo "<br>";

// -----------------------------
// 2. array_search() - Searches for a value and returns the key
$season = array("summer", "winter", "spring", "autumn");
$searchKey = array_search("spring", $season);

echo "<strong>2. array_search():</strong><br>";
echo "The key of 'spring' is: $searchKey<br><br>";

// -----------------------------
// 3. array_reverse() - Reverses the order of an array
$reversedSeason = array_reverse($season);

echo "<strong>3. array_reverse():</strong><br>";
echo "Seasons in reversed order:<br>";
foreach($reversedSeason as $s){
    echo "$s<br>";
}
echo "<br>";

// -----------------------------
// 4. sort() - Sorts an array in ascending order
$seasonToSort = array("summer", "winter", "spring", "autumn");
sort($seasonToSort);

echo "<strong>4. sort():</strong><br>";
echo "Seasons sorted alphabetically:<br>";
foreach($seasonToSort as $s){
    echo "$s<br>";
}
echo "<br>";
?>
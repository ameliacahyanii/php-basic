<?php
// Make Array(CREATE)
$day = ["Monday", "Tuesday", "Wedenesday", "Thursday", "Friday"];

// Show array (READ)
// var_dump, print_r
var_dump($day);
echo "<br>";
print_r($day);

// Show 1 element in array
echo $day[4];

// Add element in to array (UPDATE)
echo "Sebelum ditambah <br>";
var_dump($day);
echo "<br>";

echo "Setelah ditambah <br>";
$day[] = "Saturday";
var_dump($day);
echo "<br>";

// Delete element array (DELETE)
unset($day[0]);
var_dump($day);
?>
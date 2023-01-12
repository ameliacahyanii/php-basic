<?php
##########################
# Pertemuan 5
# Pengulangan 
##########################

// for 
for ($i=0; $i<5; $i++){
    echo "Baris ke-$i <br>";
}
echo "<br>";


// while
// Example 1
$x = 1;
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<br>";

// Example 2 - while
$x = 0;

while($x <= 100){
    echo "The number is: $x <br>";
    $x+=10;
}


// do ... while
// Example 1
$x = 1;
echo "<br>";

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);


// foreach
// Example 1
echo "<br>";
$colors = array("red", "green", "blue", "yellow");
//php 5.4 keatas penulisan codingannya $colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $value) {
    echo "$value <br>";
}

// Example 2
/*
Perbedaan dengan format sebelumnya ada di 
variable perantara kedua, yakni variable $key,
Variable $key akan menampung nilai key array,
Berikut contoh penggunaannya;
*/
echo "<br>";
$age= array(
    "Peter"=>"35",
    "Peter"=>"35",
    "Ben"=>"37",
    "Joe"=>"43");

    foreach($age as $x => $val){
        echo "$x = $val<br>";
    }







?>
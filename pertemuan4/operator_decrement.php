<?php
########################################
# Pertemuan 4
# Nama File : operator_decrement.php
########################################

#Pre-increment
echo "<h3>Predecrement</h3>";
$a = 0;
$i = 1;
$a = --$i; // i = 1 + i; a = i
echo "a = " . $a . "<br>";
echo "i = " . $i;

echo "<br>";
#Post-increment
echo "<h3>Postdecrement</h3>";
$a = 0;
$i = 1;
$a = $i--; // a = i; i = i + l;
echo "a = " . $a . "<br>";
echo "i = " . $i;

?>

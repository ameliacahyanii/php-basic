<?php
##################################################
# Pertemuan : 4
# Nama File : Konstanta.php
##################################################

echo "Menghitung Volume Bola\n";
echo "-----------------------\n";

//Menggunakan const 
const PI = 3.14;
echo "Masukkan jari-jari bola : ";
$r = fgets(STDIN);
$volume = PI * $r * $r *$r;
echo "rumus Volume bola adalah V = 3.14 * r * r * r \n";
echo "Volume bola adalah " . $volume . "\n";

// Menggunakan fugsi define()
// parameter 1 menyatakan masa konstanta.
// paramereter 2 menyatakan nilai konstanta 
echo "Menghitug Luas Permukaan Bola\n";
echo "----------------------\n";

define('phi', 3.14);
echo "Masukkan Jari-jari bola : ";
$r1 = fgets(STDIN);
$luas_permukaan_bola = 4* PI * $r1 * $r1;
echo "rumus luas permukaan bola adalah Lp = 4 * PI * r *r \n";
echo "Luas Permukaan bola adalah " . $luas_permukaan_bola . "\n";

?>
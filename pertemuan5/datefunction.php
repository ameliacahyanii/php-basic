<?php
//bulit-in function

//function date
// l -> day name
// d -> date
// M -> Month // string
// m -> month // int

// echo date("m");
// echo "<br>";
// echo date("l, d M Y");

//function time
echo time();// unixtimestamp// epoch time
echo "<br>";
echo date("l", time());

echo "<br>";
// echo date("l", time()+60*60*24*2)//mencari hari setelahnya, menggunakan +
// echo date("l", time()-60*60*24*100)//mencari hari sebelumnya menggunakan -
// 60 -> detik
// 60 -> jam
// 60 -> jam dalam sehari 
// 3 -> hari yang mau ditebak

// echo date("d M Y", time()-60*60*24*100)//mencari hari sebelumnya menggunakan -

// MKTIME
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0,0,0,0,0,0);
echo "<br>";
echo date("l", mktime(0,0,0,5,16,2007));
echo "<br>";

// strtotime
echo strtotime("16 Mei 2007");
echo "<br>";
echo date("l", strtotime("16 Mei 2007"));

?>
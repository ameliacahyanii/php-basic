<?php
    // Pertemuan 2 - Latihan PHP
    // Sintaks PHP
    
    // Standar Output
    // echo, print
    // print_r -> Khusus digunakan untuk mencetak isi array atau string 
    // ver_dump 
    
    //echo
    // echo "Amelia Cahyani <br>" ;
    // echo "Amelia","Cahyani <br>";
    // echo "ini" . "teks" . "yang" . "terpisah<br>" ;
    
    /*perbedaan print dan echo
    - Fungsi print () Akan selalu mengembalikan nilai 1 saat dieksekusi,*/
    
    
    //print
    //print "Amelia Cahyani" ;
    //print "amelia","cahyani";
    
    // print_r adalah menampilkan show data dan tidak bisa lebih dari satu
    //$name_siswa = array("Beby" , "Asiah" , "Asya" , "Amel");
    //print_r($name_siswa);
    
    // var_dumb
    // var_dump("Amelia Cahyani");

    // Penulisan Sintaks PHP 
    // 1. PHP didalam HTML
    // 2. HTML didalam PHP
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
<!-- PHP didalam HTML -->
    <h1>Halo, Welcome <?php echo "Amel"; ?> </h1>
    <p><?php echo "Ini adalah paragraf";?></p>

    <!-- 2. tag HTML di dalam PHP  -->
    <?php
    echo "<h1>Welcome Amelia Cahyani</h1>";
    ?>
</body>
</html>
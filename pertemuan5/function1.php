<?php
function salam($waktu, $nama){
    return "Selamat " . $waktu . " " . $nama; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam ("Siang","Amel");?></h1>
</body>
</html>
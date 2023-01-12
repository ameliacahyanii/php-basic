<?php
$student = ["Amelia Cahyani", "0075789274", "IT RPL", "ameliaa.cahyaniii@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <?php foreach($student as $value)
    {
        echo "$value <br>";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Amelia Cahyani X RPL - If Exercise";
echo "<br>";
echo "<br>";

echo "Nilai anda: 88";
echo "<br>";
$nilai = 88;
if ($nilai > 90){
    echo "Grade: A";
} elseif($nilai > 80) {
    echo "Grade: A";
} elseif($nilai > 70) {
    echo "Grade: B+";
} elseif($nilai > 60) {
    echo "Grade: B";
} elseif($nilai > 50) {
    echo "Grade: C+";
} elseif($nilai > 40) {
    echo "Grade: C";
} elseif($nilai > 30) {
    echo "Grade: D";
} elseif($nilai > 20) {
    echo "Grade: E";
} else {
    echo "Grade: F";
}
?>
</body>
</html>
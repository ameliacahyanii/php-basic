<!DOCTYPE html>
<head>
    <title>Menghitung Luas Segitiga</title>
</head>
<body>
    <h1>Hitung Luas Segitiga</h1>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // count the area of triangle
        $luas_segitiga = 1/2 * $alas * $tinggi;

        echo "Diketahui: <br />";
        echo "Alas = $alas<br />";
        echo "Tinggi = $tinggi<br />";
        echo "Maka Luas Segitiga Adalah 1/2 ($alas x $tinggi) = $luas_segitiga";
    }
    ?>
</body>
</html>

====
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<form>
        <input type = "text" name ="num1" placeholder="Number 1">
        <input type = "text" name ="num2" placeholder="Number 2">
        <select name = "operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name ="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>
<?php
    if(isset($_GET['submit'])) {
        $result1 = $_GET['$num1'];
        $result2 = $_GET['$num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None": 
                 echo "You need to select a method!";
            break;
            case "Add": 
                echo $result1 + $result2;
            break;
            case "Subtract": 
                echo $result1 - $result2;
            break;
            case "Multiply": 
                echo $result1 * $result2;
            break;
            case "Divide": 
                echo $result1 / $result2;
            break;
        }
    }
?>

</body>
</html>

=====
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
    if(isset($_POST['count'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case 'addition':
                $result = $num1+$num2;
            break;
            case 'subtraction':
                $result = $num1-$num2;
                break;
            case 'multiply':
                $result = $num1*$num2;
                break;
            case 'divide':
                $result = $num1/$num2;
                break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="title">Calculator</h2>
        <form method="post" action="calculator.php">
            <input type="text" name="num1" class="num" autocomplete="off" placeholder="Enter your fisrt number">
            <input type="text" name="num2" class="num" autocomplete="off" placeholder="Enter your second number">
            <select class="opr" name="operation">
                <option value="addition">+</option>
                <option value="subtraction">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="submit" name="count" value="Count" class="button">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value=""<?php echo $result;?> class="num">
        <?php }else{ ?>
            <input type="text" value="0" class="num">
        <?php } ?>
    </div>

</body>
</html>

===
<?php
//MENGECEK SYARAT KELULUSAN KELUAR NEGERI
function health($health){
    return $health;
}
function age($age){
    return $age;
}

function doctorscertificate($doctorscertificate){
    return $doctorscertificate;
}

function vaccine($vaccine){
    return $vaccine;
}

function pedulilindungi($pedulilindungi){
    return $pedulilindungi;
}

if($health = "Yes"){

}

// echo "Checking graduation requirements to go abroad \n";
echo "Apakah kamu sehat? ";
    $health = fgets(STDIN);
echo "Berapa umur kamu? ";
    $age = fgets(STDIN);
echo "Apakah sudah ada keterangan surat dari dokter? ";
    $doctorscertificate = fgets(STDIN);
echo "Apakah kamus sudah vaksin? ";
    $vaccine = fgets(STDIN);
echo "Apakah kamu mempunyai peduliLindungi? ";
    $pedulilindungi = fgets(STDIN);

// if ($health == "Yes") $age > 18, $doctorscertificate == "Yes", $vaccine == "Yes", $pedulilindungi == "Yes"){
//     echo "You can you can go abroad"

?>


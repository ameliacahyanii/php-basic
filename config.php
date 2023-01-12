<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'jam_tangan';
//menghubungkan database ke mysql
$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
    die ("connection failed.". mysqli_connect_error());
}
 ?>
 
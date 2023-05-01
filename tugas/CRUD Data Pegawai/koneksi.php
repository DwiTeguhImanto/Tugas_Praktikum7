<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    die("can't conncet to database : " . mysqli_connect_error());
}

?>
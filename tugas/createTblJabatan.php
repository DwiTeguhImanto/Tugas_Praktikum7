<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    die("can't conncet to database : " . mysqli_connect_error());
}

$sql = " UPDATE TABLE jabatan (
    id_jabatan INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    jabatan VARCHAR(100) NOT NULL, 
    golongan INT(3) NOT NULL
)";

if (mysqli_query($koneksi, $sql)) {
    echo "Create Table Successfully";
} else {
    echo "Can't Create Table" . $sql . "<br>" . mysqli_error($koneksi);
}

?>
<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// konek dengan php dan mysql

$koneksi = mysqli_connect($server, $username, $password, $dbname);

if (!$koneksi) {
    die("Failed to connect : " . mysqli_connect_error());
}

$sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    isi TEXT
)";

if (mysqli_query($koneksi, $sql)) {
    echo "Create Table Successfully";
} else {
    echo "Can't Create Table" . $sql . "<br>" . mysqli_error($koneksi);
}


?>
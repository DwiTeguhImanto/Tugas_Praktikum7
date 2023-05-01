<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    die("can't conncet to database : " . mysqli_connect_error());
}

$sql = " CREATE TABLE pegawai (
    id_pegawai INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_jabatan INT(3) NOT NULL, 
    nama VARCHAR(50) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    notelp VARCHAR(20) NOT NULL,
    tgl_masuk DATETIME NOT NULL,
    FOREIGN KEY (id_jabatan) REFERENCES jabatan(id_jabatan) ON UPDATE CASCADE ON DELETE CASCADE
)";

if (mysqli_query($koneksi, $sql)) {
    echo "Create Table Successfully";
} else {
    echo "Can't Create Table" . $sql . "<br>" . mysqli_error($koneksi);
}

?>

<!-- koneksi database mysqli -->
<?php

include 'koneksi.php';

// menangkap data id yang dikirim dari url pada halaman indek ke halaman hapus 
$id = $_GET['id_pegawai'];

// perintah menghapus data dari dalam database : 
mysqli_query($koneksi, "delete from pegawai where id_pegawai = '$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");


?>
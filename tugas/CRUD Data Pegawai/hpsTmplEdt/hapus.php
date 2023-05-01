<?php
// koneksi database mysqli 
include 'koneksi.php';

// menangkap data id yang dikirim dari url pada halaman indek ke halaman hapus 
$id = $_GET['id_pegawai'];

// perintah menghapus data dari dalam database : 
mysqli_query($koneksi, "delete from pegawai where id_pegawai = '$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");


?>
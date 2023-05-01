<?php
// koneksi database mysqli 
include 'koneksi.php';

// menangkap data id yang dikirim dari url pada halaman indek ke halaman hapus 
if (isset($_GET['hapus'])) {
    mysqli_query($koneksi, "delete from pegawai where id_pegawai = '$_GET[hapus]'")
        or die(mysqli_error($koneksi));
        echo "<script>alert('DATA TELAH DI HAPUS');
        document.location='tampilan.php'</script>";

}



?>
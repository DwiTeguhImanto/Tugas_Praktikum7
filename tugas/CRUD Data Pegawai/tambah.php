<html>
<head>
    <style>
        button {
            margin-right: 20px;
        }
    </style>
</head>
<h2>Tambah Data Pegawai</h2>

<form action="" method="post">
    <table>
        <tr>
            <td>Jabatan : </td>
            <td>
                <select name="id_jabatan" id="">
                    <option value="">Pilih Jabatan</option>
                    <?php
                    include 'koneksi.php';
                    $queryTambah = mysqli_query($koneksi, "select * from jabatan");
                    while ($data = mysqli_fetch_array($queryTambah)) {
                        echo "<option value=$data[id_jabatan]> $data[jabatan]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Alamat : </td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>No Telp : </td>
            <td><input type="text" name="notelp" required></td>
        </tr>
        <tr>
            <td>Tanggal Masuk : </td>
            <td><input type="datetime-local" name="tgl_masuk" required></td>
        </tr>
        <td></td>
        <td><button type="reset">Reset</button><button type="submit" value="simpan" name="prosesTambah">Simpan
                Data</button> </td>
    </table>

</form>

</html>
<?php
if (isset($_POST['prosesTambah'])) {
    mysqli_query($koneksi, "insert into pegawai set 
    id_jabatan = '$_POST[id_jabatan]',    
    nama = '$_POST[nama]',    
    alamat = '$_POST[alamat]',    
    notelp = '$_POST[notelp]',    
    tgl_masuk = '$_POST[tgl_masuk]'");

    echo "<script> alert('DATA BERHASIL DITAMBAHKAN') </script>";
}
?>
<html>

<head>
    <style>
        button {
            margin-right: 20px;
        }
    </style>
</head>
<h2>Update Data Pegawai</h2>

<?php
include 'koneksi.php';
// $id = $_GET['id_pegawai'];
$updateData = mysqli_query($koneksi, "select * from pegawai where 
id_pegawai = '$_GET[id_pegawai]'");
$d = mysqli_fetch_array($updateData);
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Jabatan : </td>
            <td>
                <select name="id_jabatan" id="">

                    <?php
                    echo "<option value=$d[id_jabatan]> $d[jabatan]</option>";
                    $query = mysqli_query($koneksi, "select * from jabatan");
                    while ($d = mysqli_fetch_array($query)) {
                        echo "<option value=$d[id_jabatan]> $d[jabatan]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat : </td>
            <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>No Telp : </td>
            <td><input type="text" name="notelp" value="<?php echo $d['notelp']; ?>"></td>
        </tr>
        <td></td>
        <td><button type="reset">Reset</button><button type="submit" value="simpan" name="prosesTambah">Simpan
                Data</button> </td>
    </table>

</form>



</html>
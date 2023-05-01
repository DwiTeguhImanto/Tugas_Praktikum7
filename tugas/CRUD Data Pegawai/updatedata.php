<h2>Update Data Pegawai</h2>

<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM pegawai,jabatan WHERE
pegawai.id_jabatan=jabatan.id_jabatan and id_pegawai='$_GET[update]'");
$data = mysqli_fetch_array($sql);

?>

<form action="" method="post">
    <table>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat : </td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
        </tr>
        <tr>
            <td>No Telp : </td>
            <td><input type="text" name="notelp" value="<?php echo $data['notelp'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Masuk : </td>
            <td><input type="text" name="tgl_masuk" value="<?php echo $data['tgl_masuk'] ?>"></td>
        </tr>
        <tr>
            <td>Jabatan : </td>
            <td><select name="id_jabatan">
                    <?php
                    echo "<option value=$data[id_jabatan]> $data[jabatan]</option>";
                    $query = mysqli_query($koneksi, "SELECT * FROM jabatan") or die(mysqli_error($koneksi));
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<option value=$data[id_jabatan]> $data[jabatan]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['proses'])) {

    mysqli_query($koneksi, "UPDATE pegawai set
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    notelp = '$_POST[notelp]',
    id_jabatan = '$_POST[id_jabatan]' WHERE id_pegawai=$_GET[update]") or die(mysqli_error($koneksi));

    echo "<script>alert('DATA TELAH DI UPDATE');
    document.location='tampilan.php'</script>";
}
?>
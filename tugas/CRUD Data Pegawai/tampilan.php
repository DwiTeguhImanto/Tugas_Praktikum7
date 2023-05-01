<h1>CRUD Data Pegawai</h1>
<?php
require 'tambah.php';
?>

<h2>Tabel Data Pegawai</h2>

<table border="1" style="border-collapse:collapse">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Gaji</th>
        <th colspan="2">OPSI</th>
    </tr>


    <?php
    include "koneksi.php";

    $no = 1;
    $ambildata = mysqli_query($koneksi, "SELECT * FROM pegawai,jabatan 
WHERE pegawai.id_jabatan = jabatan.id_jabatan") or die(mysqli_error($koneksi));

    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
    <tr>
    <td align='center'>$no</td>
    <td align='center'>$tampil[nama]</td>
    <td align='center'>$tampil[jabatan]</td>
    <td align='center'>$tampil[alamat]</td>
    <td align='center'>$tampil[notelp]</td>
    <td align='center'>$tampil[gaji]</td>
    <td><a href='updatedata.php?update=$tampil[id_pegawai]'>
    <input type='button' value='Edit'>
    </a></td>
    <td><a href='hapusdata.php?hapus=$tampil[id_pegawai]' onClick=\"return confirm('Yakin Ingin Mneghapus Data ?');\" >
    <input type='button' value='Hapus'>
    </a></td>
    </tr>";
        $no++;
    }
    ?>

</table>
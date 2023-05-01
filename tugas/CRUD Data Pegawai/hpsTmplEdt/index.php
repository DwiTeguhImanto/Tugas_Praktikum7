<!DOCTYPE html>
<html>

<head>
	<title>CRUD PHP dan MySQLi </title>
</head>

<body>

	<h1>CRUD DATA PEGAWAI </h1>
	<br />
	<!-- <a href="tambah.php"><button>+ Data Pegawai</button></a> -->
	<?php
	require 'tambah.php';
	?>
	<br />
	<br />
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Alamat</th>
			<th>No Telp</th>
			<th>Gaji</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from pegawai,jabatan where pegawai.id_jabatan = jabatan.id_jabatan");
		while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td>
					<?php echo $no++; ?>
				</td>
				<td>
					<?php echo $d['nama']; ?>
				</td>
				<td>
					<?php echo $d['jabatan']; ?>
				</td>
				<td>
					<?php echo $d['alamat']; ?>
				</td>
				<td>
					<?php echo $d['notelp']; ?>
				</td>
				<td>
					<?php echo $d['gaji']; ?>
				</td>
				<td>
					<a href="edit.php?id_pegawai=<?php echo $d['id_pegawai']; ?>">EDIT</a>
					<a href="hapus.php?id_pegawai=<?php echo $d['id_pegawai']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>

</html>
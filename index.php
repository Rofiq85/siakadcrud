<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIAKAD</title>
</head>
<body>
<h1>SIAKAD</h1>
<h2>Matakuliah</h2>
<a href="input.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;'>Tambah Data</a><br><br>
<table border="2" cellspacing="0" width="60%">
	<tr style="text-align: center;font-weight: bold;background-color:#eee;">
		<td>Id Matkul</td>
		<td>Nama Matkul</td>
		<td>Kode Matkul</td>
		<td>Deskripsi</td>
		<td>Opsi</td>
	</tr>
	<?php
	include 'koneksi.php';
	$no = 1;
	$select = mysqli_query($conn,"SELECT * FROM Matakuliah");
	while ($hasil = mysqli_fetch_array($select)) {
	?>
	<tr>
		<td style="text-align:center;"><?php echo $hasil['Id_matkul'] ?></td>
		<td><?php echo $hasil['Nama_matkul'] ?></td>
		<td style="text-align:center;"><?php echo $hasil['Kode_matkul'] ?></td>
		<td><?php echo $hasil['Deskripsi'] ?></td>
		<td>
			<a href="edit.php?Id_matkul=<?php echo $hasil['Id_matkul']?>">Edit</a> ||
			<a href="delete.php?Id_matkul=<?php echo $hasil['Id_matkul']?>">Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIAKAD</title>
</head>
<body>
<h2>Dosen</h2>
<a href="input_dosen.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;'>Tambah Data Dosen</a><br><br>
<table border="2" cellspacing="0" width="60%">
	<tr style="text-align: center;font-weight: bold;background-color:#eee;">
		<td>Id Dosen</td>
		<td>Nama Dosen</td>
		<td>NIND</td>
		<td>Jenjang Pendidikan</td>
		<td>Opsi</td>
	</tr>
	<?php
	include 'koneksi.php';
	$no = 2;
	$select = mysqli_query($conn,"SELECT * FROM Dosen");
	while ($hasil = mysqli_fetch_array($select)) {
	?>
	<tr>
		<td style="text-align:center;"><?php echo $hasil['Id_dosen'] ?></td>
		<td><?php echo $hasil['Nama_dosen'] ?></td>
		<td style="text-align:center;"><?php echo $hasil['NIDN'] ?></td>
		<td style="text-align:center;"><?php echo $hasil['Jenjang_pendidikan'] ?></td>
		<td>
			<a href="edit_dosen.php?Id_dosen=<?php echo $hasil['Id_dosen']?>">Edit</a> ||
			<a href="delete_dosen.php?Id_dosen=<?php echo $hasil['Id_dosen']?>">Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIAKAD</title>
</head>
<body>
<h2>Mahasiswa</h2>
<a href="input_mhs.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;'>Tambah Data Mahasiswa</a><br><br>
<table border="3" cellspacing="0" width="60%">
	<tr style="text-align: center;font-weight: bold;background-color:#eee;">
		<td>Id Mahasiswa</td>
		<td>Nama Mahasiswa</td>
		<td>NIM</td>
		<td>Program Studi</td>
		<td>Opsi</td>
	</tr>
	<?php
	include 'koneksi.php';
	$no = 3;
	$select = mysqli_query($conn,"SELECT * FROM Mahasiswa");
	while ($hasil = mysqli_fetch_array($select)) {
	?>
	<tr>
		<td style="text-align:center;"><?php echo $hasil['Id_mhs'] ?></td>
		<td><?php echo $hasil['Nama_mhs'] ?></td>
		<td style="text-align:center;"><?php echo $hasil['NIM'] ?></td>
		<td style="text-align:center;"><?php echo $hasil['Program_studi'] ?></td>
		<td>
			<a href="edit_mhs.php?Id_mhs=<?php echo $hasil['Id_mhs']?>">Edit</a> ||
			<a href="delete_mhs.php?Id_mhs=<?php echo $hasil['Id_mhs']?>">Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
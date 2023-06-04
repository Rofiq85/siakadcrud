<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Input Mahasiswa</h2>
	<a href="index.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;'>Home Siakad</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Id Mahasiswa</td>
				<td>:</td>
				<td><input type="int" name="id" placeholder="id_mhs"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="nama_mhs" required></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" placeholder="nim" required></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><input type="text" name="prodi" placeholder="program_studi" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
		
	</form>
	<?php
	include 'koneksi.php';
	if (isset($_POST['simpan'])) {
	$insert = mysqli_query($conn, "INSERT INTO Mahasiswa VALUES
							('".$_POST['id']."',
							'".$_POST['nama']."',
							'".$_POST['nim']."',
							'".$_POST['prodi']."')");
		if($insert){
			echo "berhasil disimpan";			
		}else{
			echo "gagal disimpan".mysqli_error($conn);
		}					
	}						
	?>
</body>
</html>
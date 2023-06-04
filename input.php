<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Input Matakuliah</h2>
	<a href="index.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;'>Home Siakad</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Id Matkul</td>
				<td>:</td>
				<td><input type="int" name="id" placeholder="id matkul"></td>
			</tr>
			<tr>
				<td>Nama Matkul</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="nama matkul" required></td>
			</tr>
			<tr>
				<td>Kode Matkul</td>
				<td>:</td>
				<td><input type="text" name="kode" placeholder="kode matkul" required></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi" placeholder="deskripsi" required></td>
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
	$insert = mysqli_query($conn, "INSERT INTO Matakuliah VALUES
							('".$_POST['id']."',
							'".$_POST['nama']."',
							'".$_POST['kode']."',
							'".$_POST['deskripsi']."')");
		if($insert){
			echo "berhasil disimpan";			
		}else{
			echo "gagal disimpan".mysqli_error($conn);
		}					
	}						
	?>
</body>
</html>
<?php 
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM Dosen WHERE Id_dosen = '".$_GET['Id_dosen']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Dosen</title>
</head>
<body>
	<h2>Edit Dosen</h2>
	<a href="index.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:5px;text-decoration:none;'>Home Siakad</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Id Dosen</td>
				<td>:</td>
				<td><input type="int" name="id" value="<?php echo $result['Id_dosen']?>"></td>
			</tr>
			<tr>
				<td>Nama Dosen</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $result['Nama_dosen']?>" required></td>
			</tr>
			<tr>
				<td>NIDN</td>
				<td>:</td>
				<td><input type="text" name="nidn" value="<?php echo $result['NIDN']?>" required></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="jenjang" value="<?php echo $result['Jenjang_pendidikan']?>" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="Simpan"></td>
			</tr>
		</table>
		
	</form>
	<?php
	if (isset($_POST['edit'])) {
		$update = mysqli_query($conn, "UPDATE Dosen SET Nama_dosen = '".$_POST['nama']."', 
			NIDN = '".$_POST['nidn']."', Jenjang_pendidikan = '".$_POST['jenjang']."'
			WHERE Id_dosen = '".$_GET['Id_dosen']."'");
		if($update){
			echo 'berhasil edit';
		} else {
			echo 'gagal edit';
		}				
	}						
	?>
</body>
</html>
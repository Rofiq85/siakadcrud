<?php 
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM Matakuliah WHERE Id_matkul = '".$_GET['Id_matkul']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Matakuliah</title>
</head>
<body>
	<h2>Edit Matakuliah</h2>
	<a href="index.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;'>Home Siakad</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Id Matkul</td>
				<td>:</td>
				<td><input type="int" name="id" value="<?php echo $result['Id_matkul']?>"></td>
			</tr>
			<tr>
				<td>Nama Matkul</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $result['Nama_matkul']?>" required></td>
			</tr>
			<tr>
				<td>Kode Matkul</td>
				<td>:</td>
				<td><input type="text" name="kode" value="<?php echo $result['Kode_matkul']?>" required></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi" value="<?php echo $result['Deskripsi']?>" required></td>
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
		$update = mysqli_query($conn, "UPDATE Matakuliah SET Nama_matkul = '".$_POST['nama']."', 
			Kode_matkul = '".$_POST['kode']."', Deskripsi = '".$_POST['deskripsi']."'
			WHERE Id_matkul = '".$_GET['Id_matkul']."'");
		if($update){
			echo 'berhasil edit';
		} else {
			echo 'gagal edit';
		}				
	}						
	?>
</body>
</html>
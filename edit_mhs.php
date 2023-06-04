<?php 
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM Mahasiswa WHERE Id_mhs = '".$_GET['Id_mhs']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Mahasiswa</title>
</head>
<body>
	<h2>Edit Mahasiswa</h2>
	<a href="index.php" style='padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:5px;text-decoration:none;'>Home Siakad</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Id Mahasiswa</td>
				<td>:</td>
				<td><input type="int" name="id" value="<?php echo $result['Id_mhs']?>"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $result['Nama_mhs']?>" required></td>
			</tr>
			<tr>
				<td>NIDN</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $result['NIM']?>" required></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="prodi" value="<?php echo $result['Program_studi']?>" required></td>
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
		$update = mysqli_query($conn, "UPDATE Dosen SET Nama_mhs = '".$_POST['nama']."', 
			NIM = '".$_POST['nim']."', Program_studi = '".$_POST['prodi']."'
			WHERE Id_mhs = '".$_GET['Id_mhs']."'");
		if($update){
			echo 'berhasil edit';
		} else {
			echo 'gagal edit';
		}				
	}						
	?>
</body>
</html>
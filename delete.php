<?php 
include 'koneksi.php';
if(isset($_GET['Id_matkul'])){
	$delete = mysqli_query($conn, "DELETE FROM Matakuliah WHERE Id_matkul = '".$_GET['Id_matkul']."'");
	header('location:index.php');
}
?>
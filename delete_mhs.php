<?php 
include 'koneksi.php';
if(isset($_GET['Id_mhs'])){
	$delete = mysqli_query($conn, "DELETE FROM Mahasiswa WHERE Id_mhs = '".$_GET['Id_mhs']."'");
	header('location:index.php');
}
?>
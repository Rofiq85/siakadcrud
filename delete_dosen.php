<?php 
include 'koneksi.php';
if(isset($_GET['Id_dosen'])){
	$delete = mysqli_query($conn, "DELETE FROM Dosen WHERE Id_dosen = '".$_GET['Id_dosen']."'");
	header('location:index.php');
}
?>
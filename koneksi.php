<?php
$conn = mysqli_connect('localhost','root','','siakad');
if ($conn) {
	//echo 'terhubung database';
}else{
	echo 'gagal terhubung';
}
?>
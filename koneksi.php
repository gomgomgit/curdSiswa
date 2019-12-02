<?php
	$server	= "localhost";
	$user	= "root";
	$pass	= 1234;
	$db		= "siswa";
	
	$connect = mysqli_connect($server, $user, $pass, $db);
	
	if (!$connect) {
		die ("koneksi gagal :" . mysqli_connection_error());
	}
?>

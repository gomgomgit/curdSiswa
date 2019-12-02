<?php
	include 'koneksi.php';
	
	$nama	= $_POST['nama'];
	$gender	= $_POST['gender'];
	$alamat	= $_POST['alamat'];
	
	$sql	= "INSERT INTO user (name, gender, address) VALUES ('$nama', $gender, '$alamat')";
	$result = mysqli_query($connect, $sql);
	
	header('location:index.php');
?>

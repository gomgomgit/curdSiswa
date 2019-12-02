<?php 
	include 'koneksi.php';

	$ID 	= $_POST['id'];
	$nama 	= $_POST['nama'];
	$gender = $_POST['gender'];
	$alamat = $_POST['alamat'];

	$sql	= "UPDATE user SET name='$nama', gender=$gender, address='$alamat' WHERE id='$ID'";
	mysqli_query($connect, $sql);

	header('location:index.php');

?>
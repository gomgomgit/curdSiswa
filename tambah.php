<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="proses_tambah.php" method="POST">
			<!-- input nama -->
			<label for"tambah_nama" >Nama : 
				<input id="tambah_nama" type="text" name="nama" />
			</label>
			<br>
			
			<p>Jenis Kelamin :</p>
			<label>Laki-laki  
				<input type="radio" name="gender" value=1 />
			</label>
			<label>Perempuan  
				<input type="radio" name="gender" value=0 />
			</label>
			<br>
			
			<label>Alamat : 
				<textarea name="alamat"></textarea>
			</label>
			<br>
			
			<button type="submit">Tambah Data</button>
		</form>
	</body>
</html>

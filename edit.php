<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include 'koneksi.php';
			$ID 	= $_GET['id'];
			$sql 	= "SELECT * FROM user WHERE id =". $ID;
			$result = mysqli_query($connect, $sql);
			$row	= mysqli_fetch_assoc($result);

		?>
		<form action="proses_edit.php" method="POST">
			<!-- input nama -->
			<input type="hidden" name="id" value="<?= $row['id'] ?>">
			<label>Nama : 
				<input id="tambah_nama" type="text" name="nama" value="<?= $row['name'] ?>" />
			</label>
			<br>
			
			<p>Jenis Kelamin :</p>
				<label>Laki-laki  
					<input type="radio" name="gender" value="1" <?= ($row['gender']) ?  "checked" : "" ;  ?> />
				</label>
				<label>Perempuan  
					<input type="radio" name="gender" value="0" <?= ($row['gender']) ?  "" : "checked" ;  ?> />
				</label>
			<br>
			
			<label>Alamat : 
				<textarea name="alamat"><?= $row['address'] ?></textarea>
			</label>
			<br>
			
			<button type="submit">Edit Data</button>
		</form>
	</body>
</html>

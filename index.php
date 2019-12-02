<html>
	<head>
		<title></title>
	</head>
	<body>
		<a href="tambah.php" > Tambah data </a>
		<table border=2 cellpadding="6">
			<tr>
				<th>Nomor</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
				include 'koneksi.php';
				$nomor	= 1;
				$sql	= "SELECT * FROM user";
				$result	= mysqli_query($connect, $sql);

				function gdr($g) {
					return ($g)?"Laki-laki":"Perempuan";
				}
				
				if (mysqli_num_rows($result) > 0) {
					while ($row	= mysqli_fetch_assoc($result)) {
			?>
							<tr>
								<td><?= $nomor++ ; ?></td>
								<td><?= $row['name']; ?></td>
								<!-- <td><?= ($row['gender']) ? "Laki-laki" : "Perempuan"; ?></td> -->
								<td><?= gdr($row['gender']) ?></td>
								<td><?= $row['address']; ?></td>
								<td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a></td>
								<td><a href="delete.php?id=<?= $row['id'] ?>" onclick='javascript:return confirm(" Hapus nih? ")'>Delete</a></td>
							</tr>
			<?php
					}
				}
			?>
		</table>
	</body>
</html>

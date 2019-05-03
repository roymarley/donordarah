<!DOCTYPE html>
<html>
<head>
	<title>donor darah</title>
</head>
<body>
	<h4 align="center">Donor Darah Cuk!</h4>
	<table align="center" border="1">
		<tr>
			<th>No</th>
			<th>Nama Pendonor</th>
			<th>Umur</th>
			<th>Golongan Darah</th>
			<th></th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysl = mysql_query('SELECT * FROM tb_pendonor');
		$nomor = 1;
		while ($data = mysql_fetch_array($query_mysl)) {
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['nama_pendonor']; ?></td>
				<td><?php echo $data['umur']; ?></td>
				<td><?php echo $data['golongan_darah']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>			
				</td>
			</tr>
		<?php } ?>
		<a href="input.php">tambah data pendonor</a>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>daftar menjadi pendonor</title>
</head>
<body>
	<h3>Masukkan data diri pendonor</h3>
	<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM tb_pendonor WHERE id = '$id'");
	while ($data = mysql_fetch_array($query_mysql)) {
		?>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
						<input type="text" name="nama_pendonor" value="<?php echo $data['nama_pendonor']; ?>">
					</td>					
				</tr>	
				<tr>
					<td>Umur</td>
					<td>
						<input type="text" name="umur" value="<?php echo $data['umur']; ?>">
					</td>					
				</tr>	
				<tr>
					<td>Golongan Darah</td>
					<td>
						<input type="text" name="golongan_darah" value="<?php echo $data['golongan_darah']; ?>">
					</td>					
				</tr>	
				<tr>
					<td><input type="submit" value="simpan"></td>
				</tr>				
			</table>
		</form>
	<?php } ?>
	<a href="index.php">lihat semua data pendonor</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>daftar menjadi pendonor</title>
</head>
<body>
	<h3>Masukkan data diri pendonor</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_pendonor"></td>					
			</tr>	
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur"></td>					
			</tr>	
			<tr>
				<td>Golongan Darah</td>
				<td><input type="text" name="golongan_darah"></td>					
			</tr>	
			<tr>
				<td><input type="submit" value="simpan"></td>					
			</tr>				
		</table>
	</form>
	<a href="index.php">lihat semua data pendonor</a>
</body>
</html>
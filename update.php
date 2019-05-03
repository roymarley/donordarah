<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama_pendonor = $_POST['nama_pendonor'];
$umur = $_POST['umur'];
$golongan_darah = $_POST['golongan_darah'];
mysql_query("UPDATE tb_pendonor SET nama_pendonor='$nama_pendonor', umur='$umur', golongan_darah='$golongan_darah' WHERE id='$id'");
header("Location: http://localhost/donordarah/");
?>
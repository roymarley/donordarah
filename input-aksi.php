<?php 
include 'koneksi.php';
$nama_pendonor = $_POST['nama_pendonor'];
$umur = $_POST['umur'];
$golongan_darah = $_POST['golongan_darah'];
mysql_query("INSERT INTO tb_pendonor VALUES ('','$nama_pendonor','$umur','$golongan_darah')");
header("Location: http://localhost/donordarah/");
?>
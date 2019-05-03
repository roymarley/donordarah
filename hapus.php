<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM tb_pendonor WHERE id = '$id'");
header("Location: http://localhost/donordarah/");
?>
<?php 
include 'conn.php';
$id=$_POST['id_pegawai'];
$nama= $_POST['nama'];
$posisi=$_POST['posisi'];
$kelamin=$_POST['kelamin'];
$sql = "update pegawai set nama='$nama',id_posisi='$posisi',kelamin=$kelamin where id_pegawai='$id'";
// echo "$sql";
// exit();
mysql_query($sql);
header('location:index.php');
?>

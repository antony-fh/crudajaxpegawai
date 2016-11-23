<?php 
include 'conn.php';
$nama= $_POST['nama'];
$posisi=$_POST['posisi'];
$kelamin=$_POST['kelamin'];
$id= md5(date('ymdhms').rand());
$sql = "insert into pegawai (id_pegawai, nama, id_posisi, kelamin) VALUES ('$id','$nama','$posisi','$kelamin')";
mysql_query($sql);
header('location:index.php');
?>

<?php include('conn.php');
$id= $_GET['id'];
$que ="delete from pegawai where id_pegawai = ".$id."";
if(mysql_query($que)){
header("location:index.php");
}

// echo "anda akan melakukan hapus di id =" .  $id;

?>
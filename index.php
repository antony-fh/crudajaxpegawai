<?php session_start();
include 'conn.php';
// include('conn.php');
// 	$query = "SELECT  pegawai.id_pegawai as id,
// pegawai.nama as nama,
// pegawai.telepon as telepon,
// kota.nama_kota as kota,
// j_kelamin.nama as jk,
// posisi.nama as posisi
// FROM pegawai,j_kelamin, kota,posisi
// WHERE pegawai.kelamin = j_kelamin.id_kelamin and kota.id_kota = pegawai.kota and posisi.id=pegawai.id_posisi";
// if(@$_GET['q']){
//     $Search = $_GET['q'];
//     $query .= " and (pegawai.nama like '%{$Search}%' or posisi.nama like '%{$Search}%')";
// }
// // echo $query;
// // exit();

// 	$hasil=mysql_query($query, $conn);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/me.css">
<style type="text/css">
    th{
        text-align: center;
    }
</style>
</head>
<body>
  <div class="container panel panel-default">
    <div class="row panel-heading ">
      <div class="col-md-offset-1 col-md-11">
        <a href="tambah.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"> Tambah Data</a>
        <a href="logout.php" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-fire"> Keluar</a>
      </div>
    </div>
    <div class="row panel-body">
      <form action="index.php" method="GET">
        <div class="row">
          <div class="col-md-offset-3 col-md-6 col-md-offset-3">
            <div class="input-group">
             <input type="text" class="form-control" id="cari" name="q" value="<?php echo @$_GET['q'] ?>">
             <span class="input-group-btn">
              <input type="submit" class="btn btn-info" value="Cari">
            </span>
          </div>
        </div>
      </div>



    </form>
    <div class="table-responsive">
    <table class="table table-hover text-center">
      <thead>
       <tr>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Nama Kota</th>
        <th>Jenis Kelamin</th>
        <th>Posisi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="list-data" class="text-center">

    </tbody>
  </table>
  </div>
</div>
</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
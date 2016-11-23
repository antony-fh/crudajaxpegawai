<?php session_start();
include('conn.php');
$id= $_GET['id'];
$que ="SELECT 
		pg.nama,
		pg.telepon,
		kl.nama as Jenis_kelamin,
		po.nama as posisi
		FROM pegawai pg, j_kelamin kl, posisi po
		WHERE
		pg.id_pegawai ='{$id}' and
		pg.kelamin =  kl.id_kelamin and
		pg.id_posisi = po.id";
$re=mysql_query($que);
$dat= mysql_fetch_array($re);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $dat['nama'] ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/me.css">
	<link rel="icon" href="assets/img/detective.png" sizes="16x16" type="image/png">
</head>
<body>
	<div class="container" id="detail">
		<div class="jumbotron">
			<h1>Detail Pegawai</h1>
		</div>
		<div id="format">
			<div class="row">
			<div class="col-md-2 label-format">
					Nama
				</div>
				<div class="col-md-offset-1 col-md-8 col-md-offset-1 isi-format">
					<?php echo $dat['nama'] ?>
				</div>		
			</div>

			<div class="row">
			<div class="col-md-2 label-format">
					Telepon
				</div>
				<div class="col-md-offset-1 col-md-8 col-md-offset-1 isi-format">
					<?php echo $dat['telepon'] ?>
				</div>		
			</div>
			
			<div class="row">
			<div class="col-md-2 label-format">
					Jenis Kelamin
				</div>
				<div class="col-md-offset-1 col-md-8 col-md-offset-1 isi-format">
					<?php echo $dat['Jenis_kelamin'] ?>
				</div>		
			</div>
			
			<div class="row">
			<div class="col-md-2 label-format">
					Posisi
				</div>
				<div class="col-md-offset-1 col-md-8 col-md-offset-1 isi-format">
					<?php echo $dat['posisi'] ?>
				</div>		
			</div>

			<div class="row">
				<div class="col-md-12">
					<a href="index.php" class="btn btn-success btn-lg">
					<span class="glyphicon glyphicon-tree-conifer"></span> Kembali</a>
				</div>
			</div>
		
		</div>
	</div>
</body>
</html>


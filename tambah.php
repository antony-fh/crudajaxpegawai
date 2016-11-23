<?php session_start();
include'conn.php';
$sql_pos = "SELECT * FROM posisi";
$re_pos = mysql_query($sql_pos);
$sql_kota = "SELECT * FROM kota";
$re_kota = mysql_query($sql_kota);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>TAmbah Data</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="index.php" class="btn btn-success btn-md">
			<span class="glyphicon glyphicon-leaf"></span> Kembali</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			&nbsp;
		</div>
	</div>
</div>
	<div class="container">
		<div class="col-md-5 well">
			<form class="form-horizontal" role="form" action="pr-tambah.php" method="post">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nama">Nama:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nama "id="nama" placeholder="Nama">
		</div>
		</div>
		<div class="form-group col-md-offset-1 col-md-5 col-md-offset-6">
			<select name="posisi" class="form-control">
					<?php while($brs = mysql_fetch_array($re_pos)) {?>
					<option value="<?php echo $brs['kota']?>"><?php echo $brs['nama']?></option>
				<?php
				}
				?>
			</select>
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-md-offset-1 col-md-5 col-md-offset-6">
			<select name="kota" class="form-control">
					<?php while($brs = mysql_fetch_array($re_kota)) {?>
					<option value="<?php echo $brs['id']?>"><?php echo $brs['nama_kota']?></option>
					<?php
				}
				?>
			</select>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="kelamin" value="1">Laki - Laki
				</label>
				<label class="radio-inline">
					<input type="radio" name="kelamin" value="2">Perempuan
				</label>
				<label class="radio-inline">
					<input type="radio" name="kelamin" value="3">Tidak Tahu
				</label>
			</div>
		</div>
		<div class="form-group col-sm-offset-2 col-sm-10">
			<input type="Submit" name="Tambah Data" class="btn btn-default" /><br>
		</div>
	</form>
</div>
</div>
</body>
</html>
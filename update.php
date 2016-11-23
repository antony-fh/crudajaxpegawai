<?php
include'conn.php';
	$sql_pos = "SELECT * FROM posisi";
	$re_pos = mysql_query($sql_pos);
	$sql_kota = "SELECT * FROM kota";
	$re_kota = mysql_query($sql_kota);

	$id= $_GET['id'];
$que ="SELECT 
		pg.id_pegawai as idp,
		pg.nama,
		pg.telepon,
		kl.nama as Jenis_kelamin,
		po.nama as posisi,
		pg.id_posisi as id_posisi,
		pg.kota as kota,
		pg.kelamin as jk
		FROM pegawai pg, j_kelamin kl, posisi po, kota
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
	<title>Update Data</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>UPdate Data</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="index.php" class="btn btn-success btn-md">
			<span class="glyphicon glyphicon-tree-deciduous"></span> Kembali</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			&nbsp;
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="container">
	<div class="col-md-5 well">
		<form class="form-horizontal" role="form" action="pr-update.php" method="post">
			<input type="hidden" name="id_pegawai" value="<?php echo $dat['idp']?>">
			<div class="form-group">
				<label class="control-label col-sm-2" for="nama">Nama:</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="nama "id="nama" value="<?php echo $dat['nama']?>">
				</div>
			</div>
			<div class="form-group col-md-offset-1 col-md-5 col-md-offset-6">
			<select name="posisi" class="form-control">
				<?php while($brs = mysql_fetch_array($re_pos)) {?>
				<option value="<?php echo $brs['id']?>"<?php if($brs['id']==$dat['id_posisi'])echo "selected"?>>
					<?php echo $brs['nama']?></option>
					<?php
				}
				?>
			</select></div>
		<div class="clearfix"></div>
		<div class="form-group col-md-offset-1 col-md-5 col-md-offset-6">
			<select name="kota" class="form-control">
				<?php while($brs1 = mysql_fetch_array($re_kota)) {?>
				<option value="<?php echo $brs1['id_kota']?>"<?php if($brs1['id_kota']==$dat['kota'])echo "selected"?>>
					<?php echo $brs1['nama_kota']?></option>
					<?php
				}
				?>
				</select>
		</div>
		<div class="clearfix"></div>
		<div class="form-group  col-md-offset-1 col-md-10 col-md-offset-1">
			<input type="radio" name="kelamin" value="1"<?php if($dat['jk']==1)echo "checked"?>>Laki - Laki
			<input type="radio" name="kelamin" value="2"<?php if($dat['jk']==2)echo "checked"?>>Perempuan
			<input type="radio" name="kelamin" value="3"<?php if($dat['jk']==0)echo "checked"?>>Tidak Tahu
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="telepon">Telepon:</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="telepon" value="<?php echo $dat['telepon']?>" />
				</div>
		</div>
			<button type="Submit" class="btn btn-info btn-md">
                  <span class="glyphicon glyphicon-edit"></span> UPdate
            </button>
		</form>
	</div>
</div>
</body>
</html>
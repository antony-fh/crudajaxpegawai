<?php session_start();
include('conn.php');
    $query = "SELECT  pegawai.id_pegawai as id,
pegawai.nama as nama,
pegawai.telepon as telepon,
kota.nama_kota as kota,
j_kelamin.nama as jk,
posisi.nama as posisi
FROM pegawai,j_kelamin, kota,posisi
WHERE pegawai.kelamin = j_kelamin.id_kelamin and kota.id_kota = pegawai.kota and posisi.id=pegawai.id_posisi";
if(@$_GET['q']){
    $Search = $_GET['q'];
    $query .= " and (pegawai.nama like '%{$Search}%' or posisi.nama like '%{$Search}%')";
}
// echo $query;
// exit();

    $hasil=mysql_query($query, $conn);
    while($row = mysql_fetch_array($hasil)) {
?>
    	<tr>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['telepon']?></td>
        <td><?php echo $row['kota']?></td>
        <td><?php echo $row['jk']?></td>
        <td><?php echo $row['posisi']?></td>
    	<td>
            <a href="update.php?id=<?php echo $row['id']?>">
                <button type="button" class="btn btn-info btn-sm">
                  <span class="glyphicon glyphicon-edit"></span> UPdate
                </button>
            </a>
            <a data-id="<?php echo $row['id'] ?>" class="btn btn-danger hapus">
                <button type="button" class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-trash"></span> HApus
                </button>
            </a>
            <a href="detail.php?id=<?php echo $row['id']?>">
                <button type="button" class="btn btn-primary btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span> DEtail
                </button>
            </a>
    	</td>
    	</tr>
    	<?php
    }
?>